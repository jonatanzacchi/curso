<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct( )
    {
        //parent::__construct( ); 
        //$this->load->library('session');
        
        //call CodeIgniter's default Constructor
            parent::__construct();
            $this->load->library('session');
            //load database libray manually
            $this->load->database();
            //load Model
            $this->load->model('Pessoa_model');
    }

	public function index()
	{
            //$this->load->view('pessoa');
            
            //Executa o método get_produtos
            $data['lista'] = $this->Pessoa_model->get_alunos();
            $data['listaestados'] = $this->Pessoa_model->get_estados();
            $data['titulo'] = "Pessoa";
 
            $data['pagina']='pessoa';
            $this->load->view('principal', $data);
	}
        
        public function save_userinput()
        {
          //code goes here
          // for example: getting the post values of the form:
          $nome = $this->input->post("nome");
          // or just the username:
          $dt_nasc = $this->input->post("dt_nasc");
	  $documento = $this->input->post("documento");
	  $fone = $this->input->post("fone");
	  $endereco = $this->input->post("endereco");
	  $pais = $this->input->post("pais");
	  $cidade = $this->input->post("cidade");
	  $uf = $this->input->post("uf");
	  $email = $this->input->post("email");
	  

      // then do whatever you want with it :)
	echo "Nome: " . $nome . "<br>".
		"Data de Nascimento: " . $dt_nasc . "<br>" .
		"Documento: " . $documento . "<br>" .
		"Data de Nascimento: " . $dt_nasc . "<br>" .
		"Fone: " . $fone . "<br>" .
		"Endereço: " . $endereco . "<br>" .
		"País: " . $pais . "<br>" .
		"Cidade: " . $cidade . "<br>" .
		"UF: " . $uf . "<br>" .
		"E-Mail: " . $email;
    }
    
    public function salvar(){
        $dados = array();
        $this->Pessoa_model->nome = $this->input->post('nome');
        $this->Pessoa_model->documento = $this->input->post('documento');
        $this->Pessoa_model->endereco = $this->input->post('endereco');
        $this->Pessoa_model->pais = $this->input->post('pais');
        $this->Pessoa_model->cidade = $this->input->post('cidade');
        $this->Pessoa_model->uf = $this->input->post('uf');
        $this->Pessoa_model->email = $this->input->post('email');
        $this->Pessoa_model->fone = $this->input->post('fone');
        $this->Pessoa_model->numero = $this->input->post('numero');
        $this->Pessoa_model->data_nasc = $this->input->post('dt_nasc');
        
        
        $this->Pessoa_model->inserir();
        
        //$this->load->view('pessoa');
        
        echo "<script>      
                    alert('Salvo com Sucesso.');
                    location.href='http://localhost/aula/codeigniter/pessoa';   
                </script>";
    }

    public function deletedata(){
            $id=$this->input->get('id');
            $this->Pessoa_model->deletarAluno($id);
            echo "Date deleted successfully !";
            echo "<script>      
                    alert('Aluno Deletado com Sucesso.');
                    location.href='http://localhost/aula/codeigniter/pessoa';   
                </script>";
        }
        
        public function dispdata()
        {
            $result['data']=$this->Pessoa_model->display_records();
            $this->load->view('update_dados',$result);
        }
        public function updatedata()
        {
            $id=$this->input->get('id');
            $result['data']=$this->Pessoa_model->displayrecordsById($id);
            $this->load->view('update_dados',$result);  
            if($this->input->post('update'))
        {
            $nome=$this->input->post('nome');
            $documento=$this->input->post('documento');
            $email=$this->input->post('email');
            $this->Pessoa_model->update_records($nome,$documento,$email,$id);
            echo "Date updated successfully !";
           }
        }
}
