<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modified_model');
        $this->load->library('carlist');
    }

    public function index()
    {
        // get car images data
        $get_sellers = array(
            'where' => array( 'user_code' => parent::getUserInfo()->codeId, 'user_type' => 3),
            'table' => 'users',
            'select' => '*',
        );
        $this->data['staffs'] = $this->general_model->get_data_with_param($get_sellers);

        $this->load->view('dealer/staff/index', $this->data);
    }

    public function add()
    {
        $this->data['title'] = 'asds';
        $this->load->view('dealer/staff/add', $this->data);
    }

    public function view($id=null)
    {
        $this->data['seller_data'] = $this->modified_model->get_specific_seller($id);
        $this->load->view('admin/sellers/view', $this->data);
    }
}