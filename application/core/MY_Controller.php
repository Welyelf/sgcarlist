<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data = array();
	protected $settings = array();
    public $user_info = array();
    
	public function __construct()
	{
		parent::__construct();


        //date_default_timezone_set($this->config->item('time_reference'));
        $uri = uri_string()==NULL? '/':uri_string();
        define('DS','/');
        define('ASSETS_PATH', base_url() . 'assets' . DS);
        define('DIRECTORY', rtrim($this->router->fetch_directory(),'/'));
        define('CONTROLLER', $this->router->fetch_class());
        define('METHOD', $this->router->fetch_method());

        if(isset($_SESSION['d_id'])){
            // decrypt the cookie id
            $user_id = $this->carlist->encryption($_SESSION['d_id'],1);

            // check user
            $check_user = array(
                'where' => array( 'users.id' => $user_id),
                'table' => 'users',
                'join' => array(
                    'table' => 'user_code',
                    'statement' => 'users.user_code=user_code.id',
                    'join_as' => 'left',
                ),
                'select' => 'user_code.code as user_code,users.id,user_type,users.user_code as codeId',
            );
            $user = $this->general_model->get_data_with_param($check_user,FALSE);
            $this->user_info = $user;
        }else {
            redirect(base_url('authentication'));
        }
	}

    public function getUserInfo()
    {
        return $this->user_info;
    }
}