<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logout extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
         redirect('login');
    }
    
//    function index(){
//        
//        redirect('login');
//        $this->session->sess_destroy();
//    }
}