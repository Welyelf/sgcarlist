<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sell extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->library('bcrypt');
        $this->load->library('session');

        $this->load->library('carlist');
    }

	public function index()
	{
		$this->load->view('sell/index');
	}

    public function post()
    {
        $this->load->view('sell/post');
    }

    public function post_ad()
    {
        $input = $this->input->post();
        if($input){
            $seller_details = array();
            $seller_details['fullname'] = $input['fullname'];
            $seller_details['contact_no'] = $input['contact_number'];
            $seller_details['is_display'] = $input['is_display'];
            $seller_details['email_address'] = $input['email_address'];
            $seller_details['is_email_enable'] = $input['is_email_enable'];
            $seller_details['view_area'] = $input['view_area'];
            $seller_details['username'] = $input['car_number'];
            $seller_details['password'] = $this->bcrypt->hash_password($input['password']);
            $seller_details['status'] = 0;

            $seller_id = $this->general_model->add_return_id($seller_details, 'sellers');
            if($seller_id){
                $seller_car_details = array();
                $seller_car_details['seller_id'] = $seller_id;
                $seller_car_details['car_plate_no'] = $input['car_number'];
                $seller_car_details['owner_id_type'] = $input['owner_type'];
                $seller_car_details['owner_id'] = $input['owner_id'];
                $seller_car_details['owner_id'] = $input['owner_id'];
                $seller_car_details['reg_day'] = $input['reg_date'];
                $seller_car_details['reg_month'] = $input['reg_month'];
                $seller_car_details['reg_year'] = $input['reg_year'];
                $seller_car_details['engine_cap'] = $input['engine_cap'];
                $seller_car_details['omv'] = $input['omv'];
                $seller_car_details['arf'] = $input['arf'];
                $seller_car_details['coe'] = $input['coe'];
                $seller_car_details['coe_exp_day'] = $input['coe_day'];
                $seller_car_details['coe_exp_month'] = $input['coe_month'];
                $seller_car_details['coe_exp_year'] = $input['coe_year'];
                $seller_car_details['no_of_owner'] = $input['no_of_owner'];
                $seller_car_details['vehicle_type'] = $input['vehicle_type'];
                $seller_car_details['car_model'] = $input['car_model'];
                $seller_car_details['asking_price'] = $input['asking_price'];
                $seller_car_details['transmission'] = $input['transmission'];
                $seller_car_details['fuel_type'] = $input['fuel_type'];
                $seller_car_details['mileage'] = $input['mileage'];
                $seller_car_details['features'] = $input['features'];
                $seller_car_details['accessories'] = $input['accessories'];
                $seller_car_details['description'] = $input['description'];
                $car_id = $this->general_model->add_return_id($seller_car_details, 'seller_car_details');

                $this->session->set_userdata('car_id', $car_id);

                echo '0';
            }else{
                echo 'Database Error!';
            }
        }
    }

    public function upload_image()
    {
        $this->carlist->addJSONResponseHeader();

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
                    'where' => array( 'car_id' => $this->session->userdata('car_id')),
                    'table' => 'sg_seller_car_images',
                    'select' => '*',
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
                $this->general_model->update_($car_image_data, $car_data->id,'seller_car_details');

                $data_arr = array("success" => TRUE,"file_url" => $s3_upload_result['url']);

            }else{
                $data_arr = array("error" => FALSE, "message" => $s3_upload_result['message']);
            }
        }else{
            $data_arr = array("error" => FALSE, "message" => 'File is not correct!');
        }
        die(json_encode($data_arr));
    }
}
