<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home/index');
    }

    public function about_us()
    {
        $this->load->view('pages/about-us');
    }

    public function terms_of_use()
    {
        $this->load->view('pages/terms-of-use');
    }

    public function contact_us()
    {
        $this->load->view('pages/contact-us');
    }

    public function location()
    {
        $this->load->view('pages/location');
    }
}
