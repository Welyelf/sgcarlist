<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modified_model');
    }

    public function index()
    {
        // get vehicles data
        $get_vehicles = array(
            'table' => 'vehicles',
            'select' => '*',
        );
        $this->data['vehicles'] = $this->general_model->get_data_with_param($get_vehicles);
        $this->load->view('admin/vehicles/index', $this->data);
    }

    public function view($id=null)
    {
        $this->data['vehicle_data'] = $this->modified_model->get_vehicle_info($id);
        $this->load->view('admin/vehicles/view', $this->data);
    }

    public function add()
    {
        $this->data['title'] = '';
        $this->load->view('admin/vehicles/add', $this->data);
    }
}