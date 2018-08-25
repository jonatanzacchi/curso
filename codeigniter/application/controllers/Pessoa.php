<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        //load Model
        $this->load->model('pessoa_model','pessoaModel');
    }

    public function index() {
        $data['listaPessoa'] = $this->pessoaModel->get_pessoa();
        $data['pagina'] = 'pessoa';
        $this->load->view('principal', $data);
    }
    
    public function get_pessoa(){
        $this->pessoaModel->get_pessoa();
    }
    
    public function editaPessoa($id){
        /*
         * Busca Cadastro de Pessoa para editar no Modal.
        */
        $this->pessoaModel->editaPessoa($id);
        
    }

    public function recebe_dados() {

        $nome = $this->input->post("nome", TRUE);
        $documento = $this->input->post("documento", TRUE);
        $email = $this->input->post("email", TRUE);
        $fone = $this->input->post("fone", TRUE);
        $nascimento = $this->input->post("nascimento", TRUE);
        $endereco = $this->input->post("endereco", TRUE);
        $numero = $this->input->post("numero", TRUE);
        $cidade = $this->input->post("cidade", TRUE);
        $uf = $this->input->post("uf", TRUE);
        $pais = $this->input->post("pais", TRUE);

        $dados = array(
            "nome" => $nome,
            "documento" => $documento,
            "email" => $email,
            "fone" => $fone,
            "dt_nasc" => $nascimento,
            "endereco" => $endereco,
            "numero" => $numero,
            "cidade" => $cidade,
            "uf" => $uf,
            "pais" => $pais
        );
        
        //$resultado =
        $this->pessoaModel->inserir($dados);
        
        
    }
    
    public function deleteCadastro(){
        $id=$this->input->get('id');
        $this->pessoaModel->deletarAluno($id);
            
        $data['listaPessoa'] = $this->pessoaModel->get_pessoa();
        $data['pagina'] = 'pessoa';
        $this->load->view('principal', $data);
            
    }

}
