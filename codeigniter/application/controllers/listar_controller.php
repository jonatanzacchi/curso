<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class listar_controller extends CI_Controller {

    public function __construct() {
        //parent::__construct( ); 
        //$this->load->library('session');
        //call CodeIgniter's default Constructor
        parent::__construct();
        $this->load->library('session');
        //load database libray manually
        $this->load->database();
        //load Model
        $this->load->model('pessoa_model');
    }

    public function index() {
        $dados['listaPessoa'] = $this->pessoa_model->get_pessoas();
        //Carrega a View
        $this->load->view('listar_view', $dados);
    }
}