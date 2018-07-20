<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Listar extends CI_Controller {
 
        public function __construct(){
            //call CodeIgniter's default Constructor
            parent::__construct();
            //load database libray manually
            $this->load->database();
            //load Model
            $this->load->model('Pessoa_model');
        }
 
	public function index(){
 
            //Executa o método get_produtos
            $data['lista'] = $this->Pessoa_model->get_alunos();
            $data['titulo'] = "Listar";
 
            $data['pagina']='listar';
            $this->load->view('principal', $data);
	}
        
        public function deletedata(){
            $id=$this->input->get('id');
            $this->Post_model->deletarAluno($id);
            echo "Date deleted successfully !";
            echo "<script>			
                    alert('OK.');
                    location.href='http://localhost/aula/codeigniter/';		
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
 
/* End of file listar_produtos.php */
/* Location: ./application/controllers/inserir_produtos.php */