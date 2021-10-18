<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->model('modified_model');
        $this->load->library('carlist');
    }

    public function index()
    {
        // get car images data
        $get_sellers = array(
            'table' => 'sg_sellers',
            'select' => '*',
        );
        $this->data['sellers'] = $this->general_model->get_data_with_param($get_sellers);

        $this->load->view('admin/sellers/index', $this->data);
    }

    public function view($id=null)
    {
        $this->data['seller_data'] = $this->modified_model->get_specific_seller($id);
        $this->load->view('admin/sellers/view', $this->data);
    }
}