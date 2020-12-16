<?php
Class Overview extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://hris.dev.azuralabs.id/api/auth/login/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data kontak
    function index(){
        $data['login'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('utama/overview');
    }
}