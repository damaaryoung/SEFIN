<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pipeline_lending_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pipeline_lending');        
    }
}