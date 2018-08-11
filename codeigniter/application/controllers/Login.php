<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function efetua_login() {
        echo 'teste';
    }
}
//http://blog.thiagobelem.net/criando-um-sistema-de-login-com-php-e-mysql
