<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_tele_sales_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_activity_tele_sales');        
    }
}