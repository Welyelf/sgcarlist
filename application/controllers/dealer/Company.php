<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modified_model');
        $this->load->library('carlist');
    }

    public function index()
    {

        $get_company = array(
            'where' => array( 'dealer_code' => parent::getUserInfo()->user_code),
            'table' => 'company',
            'select' => '*',
        );
        $this->data['company_info']  = $this->general_model->get_data_with_param($get_company,FALSE);
        $this->data['dealer_code']  = parent::getUserInfo()->user_code;
        $this->load->view('dealer/company/index', $this->data);
    }

    public function view($id=null)
    {
        $this->data['seller_data'] = $this->modified_model->get_specific_seller($id);
        $this->load->view('admin/sellers/view', $this->data);
    }
}