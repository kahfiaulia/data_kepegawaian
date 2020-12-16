<?php
Class Overview extends CI_Controller{
    var $API ="";
    function __construct() {
        parent::__construct();
        $this->API="https://hris.dev.azuralabs.id/api/referensi/pendidikan-jenjang";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    function index(){
        $data['pendidikan'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('pendidikan/overview', $data);
    }
}