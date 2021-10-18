<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('carlist');
        self::loadData();
    }

    public function loadData()
    {
        date_default_timezone_set('Asia/Singapore');
        $this->carlist->addJSONResponseHeader();
    }

	public function onAddorEditStaff()
	{
        $input = $this->input->post();
        if($input){
            $input['password_plain'] = $input['password'];
            $input['password'] = $this->bcrypt->hash_password($input['password']);
            $input['is_active'] = 1;
            $input['user_code'] = $_SESSION['sguser']->codeId;
            $this->general_model->add_return_id($input, 'users');
            $data_arr = array("success" => TRUE,"message" => 'Staff added successfully!');
        }else{
            $data_arr = array("success" => FALSE,"message" => '');
        }
        die(json_encode($data_arr));
	}

    public function onAddorEditCompany()
    {
        $input = $this->input->post();
        if($input){
            $action = $input['action'];
            unset($input['action']);
            if($action == 0){
                $company_id = $this->general_model->add_return_id($input, 'company');
            }else{
                $company_id = $this->general_model->update_($input,$action, 'company');
            }
            if($company_id){
                $data_arr = array("success" => TRUE,"message" => 'Company updated successfully!');
            }else{
                $data_arr = array("success" => FALSE,"message" => 'There is a problem adding to server!');
            }
        } else {
            $data_arr = array("success" => FALSE,"message" => '');
        }
        die(json_encode($data_arr));
    }

	public function onAddorEditVehicle()
    {
        $input = $this->input->post();
        if($input){
            $input['user_id'] = parent::getUserInfo()->id;
            unset($input['details_use']);
            $vehicle_id = $this->general_model->add_return_id($input, 'vehicles');
            $this->session->set_userdata('vch_id', $vehicle_id);
            if($vehicle_id){
                $data_arr = array("success" => TRUE,"message" => 'New Vehicle added successfully!');
            }else{
                $data_arr = array("success" => FALSE,"message" => 'There is a problem adding to server!');
            }
        }else{
            $data_arr = array("success" => FALSE,"message" => '');
        }
        die(json_encode($data_arr));
    }

    public function uploadToS3BucketDealer()
    {
        // load s3 helper
        $this->config->load('s3');
        $this->load->helper('s3_helper');

        // upload image to s3
        if (!empty($_FILES['file']['name'])) {
            $docFile = $_FILES['file'];
            $docTemp = explode(".", $docFile['name']);
            $photoFileName = strtolower(str_replace(" ", "-",'image1' )).date('YmdHisA').'.' . end($docTemp);

            // upload images on amazon s3
            $target_file = $photoFileName;

            $s3_upload_result = S3_upload_image($_FILES['file'], $target_file, "images");
            if($s3_upload_result['success'] === TRUE) {

                $car_images = array();

                // get car images data
                $check_car_image = array(
                    'where' => array( 'id' => $this->session->userdata('vch_id')),
                    'table' => 'vehicles',
                    'select' => 'id,images,admin_status',
                );
                $car_data = $this->general_model->get_data_with_param($check_car_image,FALSE);

                $documents = json_decode($car_data->images);
                $x=0;
                if(!empty($documents)){
                    foreach ($documents  as $document){
                        array_push($car_images, $document);
                        $x++;
                    }
                }

                $car_images[$x]['is_active'] = 1;
                $car_images[$x]['is_blurred'] = 1;
                $car_images[$x]['url'] = $s3_upload_result['url'];

                $car_image_data = array();
                $car_image_data['images'] = json_encode($car_images);
                if($car_data->admin_status == 0){
                    $car_image_data['admin_status'] = 1;
                }
                $this->general_model->update_($car_image_data, $car_data->id,'vehicles');

                $data_arr = array("success" => TRUE,"file_url" => $s3_upload_result['url']);
            }else{
                $data_arr = array("error" => FALSE, "message" => $s3_upload_result['message']);
            }
        }else{
            $data_arr = array("error" => FALSE, "message" => 'File is not correct!');
        }
        die(json_encode($data_arr));
    }

    public function remove()
    {
        $id = $_POST['id'];
        $t = $_POST['t'];
        if($t == 'vhc'){
            $table = 'vehicles';
        }else if($t == 'stf'){
            $table = 'users';
        }
        $remove_query = array(
            'where' => array('id' => $id),
            'table' => $table
        );
        if ($this->general_model->delete_($remove_query)) {
            $data_arr = array("success" => TRUE, "message" => 'Removed!');
        }else{
            $data_arr = array("success" => FALSE, "message" => 'Server error on remove!');
        }
        die(json_encode($data_arr));
    }

    public function onUpdateStatus()
    {
        $id = $_POST['id'];
        $t = $_POST['t'];
        $status = $_POST['stat'];

        if($t == 'vhc'){
            $table = 'vehicles';
        }else if($t == 'stf'){
            $table = 'users';
        }

        $update_query = array(
            'where' => array('id' => $id),
            'table' => $table
        );
        $input = array();
        $input['admin_status'] = $status;

        if($this->general_model->update_with_key_field($input,$id, $table,'id')){
            $data_arr = array("success" => TRUE, "message" => 'Updated!');
        }else{
            $data_arr = array("success" => FALSE, "message" => 'Server error!');
        }
        die(json_encode($data_arr));
    }
}
