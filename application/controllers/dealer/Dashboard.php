<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->model('modified_model');

    }

    public function index()
    {
       // print_r($this->session);
        //setcookie("d_id", "", time()-3600);
        //print_r(parent::getUserInfo());
        $this->data['sellers'] = '';
        $this->load->view('dealer/dashboard/index', $this->data);
    }

    public function view($id=null)
    {
        $this->data['seller_data'] = $this->modified_model->get_specific_seller($id);
        $this->load->view('admin/sellers/view', $this->data);
    }
}