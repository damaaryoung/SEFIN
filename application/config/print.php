<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['wkhtml_bin'] = APPPATH.'vendor\bin\wkhtmltopdf.exe.bat';
$config['print_report_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/polling_tangsel/api/report/compile_template/';
$config['print_one_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/polling_tangsel/api/report/compile_one/';
$config['print_bad_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/polling_tangsel/api/report/compile_bad/';
// $config['print_one_url'] = 'google.com';