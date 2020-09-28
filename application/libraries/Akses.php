<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Akses {
    private $_CI;
    private $data;
    private $error;
    private $key;
    
    public function __construct() {
        $this->_CI = &get_instance();
        $this->key = $this->_CI->config->item('jwt_secret');
    }

    public function createToken($data = NULL)
    {
        if (empty($data['exp'])) {
            $data['exp'] = time() + (60*60*12);
        }

        $this->data = $data;

        return JWT::encode($data, $this->key);
    }

    public function isLogin()
    {
        if(!$this->decoded()){
            return false;
        }

        return true;
    }

    public function isAdmin()
    {
        if (!$this->decoded()) {
            return false;
        }

        if ('Admin' !== $this->userdata('level')) {
            $this->error = 'Akses ditolak';
            return false;
        }

        return true;
    }

    public function isPetugas()
    {
        if (!$this->decoded()){
            return false;
        }

        if('Petugas' !== $this->userdata('level')){
            $this->error = 'Akses ditolak';
            return false;
        }

        return true;
    }

    public function userdata($key = NULL)
    {
        return $this->data[$key];
    }

    public function getError()
    {
        return $this->error;
    }

    private function decoded(){
        $token = $this->_CI->input->get_request_header('Authorization');
        
        if (NULL === $token) {
            $this->error = 'Akses ditolak';
            return false;
        }

        try {
            $this->data = (array) JWT::decode($token, $this->key, array('HS256'));
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }
}