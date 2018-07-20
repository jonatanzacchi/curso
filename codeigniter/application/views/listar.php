<?php
	
	@$idUsuario = $_SESSION['idUsuario'];
	@$usuario = $_SESSION['usuario'];
	
	if ((!isset($_SESSION['idUsuario']) == true) and (!isset ($_SESSION['usuario']) == true)) {
		unset($_SESSION['idUsuario']);
		unset($_SESSION['usuario']);
		header('location:login');
	}
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">	
		
        <h1>Lista de Alunos</h1>
	<hr/>
		<?php
        if($lista == NULL){
    ?>
    <div class="alert alert-success" role="alert">
        Para incluir informações acesse a página inicial.
    </div>
    <?php
        }else{
    ?>
	<div class="col-md-12">
            <div class="panel panel-success">                        
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <td align=center class="success"> ID </td>
                            <td align=center class="success"> Nome </td>
                            <td align=center class="success"> Documento </td>
                            <td align=center class="success"> Data de Nascimento </td>
                            <td align=center class="success"> Ações </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($lista as $listar) {
			?>
			<tr>
                            <td align=center><?php echo $listar->id ?> </td>
                            <td align=center><?php echo $listar->nome ?> </td>
                            <td align=center><?php echo $listar->documento ?> </td>
                            <td align=center><?php echo $listar->data_nasc ?> </td>
                            <?php
				echo "<td><a href='index.php/pessoa/deletedata?id=".$listar->id."'>Delete</a> ";
                            ?>																		
			</tr>		
			<?php
                            }
			}
			?>
                    </tbody>
                </table>                           
            </div>
            </div>
	</div>
	</div>
<?php
    $this->load->view('footer');
?>