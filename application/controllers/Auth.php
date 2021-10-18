<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // Required Libraries
        $this->load->library('bcrypt');
    }

    public function login()
	{
//        if(isset($this->session->sguser)) {
//            $user = $this->session->sguser;
//            if($user->user_type == '1'){
//                redirect(base_url('dealer/dashboard'));
//            }
//            //print_r($this->session->sguser);
//        }

       // print_r(session_status());
       // print_r($this->session);
        //print_r($this->session);

        $this->data['title'] = "SGCarlist - LogIn";
        $this->load->view('auth/login', $this->data);
	}
	public function info()
    {
        phpinfo();
    }

	public function google_login(){
        $data = $_POST['data'];

        $user = $this->users->get_details($data['email_address'], 'email_address');
        if ($user) {
            $this->session->set_userdata('user', $user);
            echo $user->role;
        }else{
            $input = array();
            $input['date_created'] = date("d-m-Y h:i A");
            $input['role'] = "Member";
            $input['points'] = 0;
            $input['user_id'] = random_string('numeric', 6);
            $input['email_address'] = $data['email_address'];
            $input['fullname'] = $data['fullname'];
            $input['oauth_provider'] = 'Google';
            $input['is_email_verified'] = 0;
            if ($this->users->register($input)) {
                $user1 = $this->users->get_details($input['email_address'], 'email_address');
                $this->session->set_userdata('user', $user1);
                echo $user1->role;
                //redirect(base_url($this->config->item('auth_login')));
            }else{
                echo "error";
            }
            //print_r($data);
        }
    }

    public function signup($error = FALSE)
	{
        $this->data['title'] = "SGCarlist - SignUp";
        $this->load->view('auth/signup', $this->data);
	}

	public function on_login()
    {
        $this->carlist->addJSONResponseHeader();
        $input = $this->input->post();
        if($input){
            // get car images data
            $check_username = array(
                'where' => array( 'username' => $input['username']),
                'table' => 'users',
                'join' => array(
                    'table' => 'user_code',
                    'statement' => 'users.user_code=user_code.id',
                    'join_as' => 'left',
                ),
                'select' => 'user_code.code as user_code,users.id,password,user_type,users.user_code as codeId',
            );
            $user = $this->general_model->get_data_with_param($check_username,FALSE);
            if ($user) {
                if ($this->bcrypt->check_password($input['password'], $user->password)) {
                    unset($user->password);
                    $id = $this->carlist->encryption($user->id);
                    $this->session->set_userdata('d_id', $id);
                    $url = base_url();
                    //setcookie("d_id", $id, time()+3600*24*30, "/");
                    if($user->user_type == 1){
                        $data_arr = array("success" => TRUE,"message" => 'Welcome back!',"url" => "dashboard-dealer");
                    }else if($user->user_type == 5){
                        $data_arr = array("success" => TRUE,"message" => 'Welcome back!',"url" => "admin/dashboard");
                    }
                }else{
                    $data_arr = array("success" => FALSE,"message" => 'Account doesnt exist!',"url" => "");
                }
            }else{
                $data_arr = array("success" => FALSE,"message" => 'Account doesnt exist!');
            }
        }else{
            $data_arr = array("success" => FALSE,"message" => 'No form data has been submitted!');
        }
        die(json_encode($data_arr));
    }

	public function on_sign_up()
    {
        $this->carlist->addJSONResponseHeader();
        $input = $this->input->post();
        if($input){
            // generate user code
            $user_code = array();
            $user_code['code'] = $this->carlist->generateRandomNumber(6);
            $user_code['is_active'] = 1;
            $user_code_id = $this->general_model->add_return_id($user_code,'user_code');

            $input['user_code'] = $user_code_id;
            $input['password_plain'] = $input['password'];
            $input['password'] = $this->bcrypt->hash_password($input['password']);
            $input['is_verified'] = 0;
            $input['is_active'] = 0;
            $this->general_model->add_return_id($input,'users');
            $data_arr = array("success" => TRUE,"message" => 'Account created! Please check your email to verify your account.');
        }else{
            $data_arr = array("success" => FALSE,"message" => 'No form data has been submitted!');
        }
        die(json_encode($data_arr));

    }

    public function forgot_password()
    {
        $input = $this->input->post();
        if($input){
            $user = $this->users->get_details($input['email_address'], 'email_address');
            if ($user) {
                $reset_code_token = hash_code();
                $input['reset_token'] = $reset_code_token;
                // set post fields
                // hash_code - password reset token for each reset
                $post = [
                    'test_email' => $input['email_address'],
                    'campaign_id' => $this->config->item('forgot_pass_camp_id'),
                    'display_errors'   => 0,
                    'password_reset_link'   => $_SERVER['SERVER_NAME'].'/auth/reset_password/?r='.$reset_code_token.'&email='.$input['email_address'],
                ];
                $send_reset_pass_mail = mail_send($post);
                // do anything you want with your response
                // Further processing ...
                if ($send_reset_pass_mail == "ok,") {
                    unset($input['email_address']);
                    if ($this->general->update($input,$user->id,'rv_users')) {
                        $this->session->set_flashdata('reset_link_sent', 'Password Reset has been sent to your email!');
                        redirect(base_url('auth/login'));
                    }
                } else {
                    $this->data['error'] = "Email didn't goes well. Contact RewardsVine Supprot.";
                }
            }else{
                $this->data['error'] = "Email doesn't exist!";
            }
        }
        $this->data['title'] = "RewardsVine - Forgot Password";
        $this->load->view('auth/forgot_password', $this->data);
    }

    public function reset_password()
    {
        $input = $this->input->post();
        if($input){
            if($input['password'] == $input['re_password']){
                unset($input['re_password']);
                $input['password'] = $this->bcrypt->hash_password($input['password']);
                $input['reset_token'] = '';
                $input['reset_pass_datetime'] = date('Y-m-d h:i A');
                if ($this->general->update($input,$input['id'],'rv_users')) {
                    $this->session->set_flashdata('reset_link_sent', 'Password Successfully Changed.');
                    redirect(base_url('auth/login'));
                }
            }else{
                $this->data['user'] = $input['id'];
                $this->data['error'] = "Password didn't match!";
            }
        }else{
            $user = $this->users->get_details($_GET['email'], 'email_address');
            if ($user) {
                if($this->users->get_details($_GET['r'], 'reset_token')){
                    $this->data['user'] = $user->id;
                }else{
                    $this->session->set_flashdata('reset_link_sent', 'Password Reset token has been expired!');
                    redirect(base_url('auth/login'));
                }
            }else{
                redirect(base_url('auth/login'));
            }
        }
        $this->data['title'] = "RewardsVine - Password Reset";
        $this->load->view('auth/reset_password', $this->data);
    }

    public function confirm_email()
    {
        //echo $_GET['r'];
        $user = $this->users->get_details($_GET['email'], 'email_address');
        if ($user) {
            $input = array();
            if($this->users->get_details($_GET['r'], 'confirm_token')){
                $input['status'] = 2;
                $input['confirm_token'] = '';
                $input['confirm_email_datetime'] = date('Y-m-d h:i A');
                if ($this->general->update($input,$user->id,'rv_users')) {
                    $this->session->set_flashdata('reset_link_sent', 'Email Successfully Confirmed!');
                    redirect(base_url('auth/login'));
                }

            }else{
                echo 'Something went wrong. Contact RewardsVine support.';
            }
        }else{
            echo 'Email Address doesnt exist';
        }
    }
    public function logout()
    {
        // Reset OAuth access token
        //$this->google->revokeToken();

        // Remove token and user data from the session
        //$this->session->unset_userdata('loggedIn');
        //$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		redirect(base_url('authentication'));
    }
    
}
