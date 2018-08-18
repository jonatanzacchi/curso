<?php

class Pessoa_model extends CI_Model {

    public $id;
    public $nome;
    public $documento;
    public $endereco;
    public $numero;    
    public $pais;
    public $cidade;
    public $uf;
    public $fone;
    public $email;
    public $data_nasc;   
   

    public function __construct() {
        parent::__construct();
    }

    public function inserir($dados) {
        $dados = array("nome" => $this->nome);

        return $this->db->insert('cadastro', $dados);
    }
    
    public function get_pessoa() {
        //obter dados
        $sql = "SELECT id, nome, documento, fone, email FROM cadastro";
        return $this->db->query($sql)->result();
    }
    
    public function editaPessoa($id){
        $sql = "SELECT * FROM cadastro WHERE id = '$id'";
        echo json_encode($this->db->query($sql)->result());
        exit();
    }

    public function get_alunos(){
		$this->db->select("*, DATE_FORMAT(data_nasc,'%d/%m/%Y') AS data_nasc");
                $this->db->join('estados', 'cadastro.uf = estados.idEstado');
		$this->db->from("cadastro");

		$query = $this->db->get();


        //$query = $this->db->get('cadastro');
        return $query->result();
    }
    
    public function get_estados(){
		$this->db->select("*");
		$this->db->from("estados");

		$query = $this->db->get();


        //$query = $this->db->get('cadastro');
        return $query->result();
    }
    
    function deletarAluno($id){
            //$this->db->query("delete from cadastro where id='".$id
            
            $this->db->where('id', $id);
            $this->db->delete('cadastro');
        }
        
        //Display
        function display_records()  {
        $query=$this->db->query("select * from cadastro");
        return $query->result();
        }
        function displayrecordsById($id)
        {
        $query=$this->db->query("select * from cadastro where id='.$id.'");
        return $query->result();
        }
        //Update
        function update_records($nome,$documento,$email,$id)
        {
        $query=$this->db->query("update form SET nome='$nome',documento='$documento',email='$email' where id='$id'");
        }

}
