<?php
	
	if ((!isset($_SESSION['idUsuario']) == true) and (!isset ($_SESSION['usuario']) == true)) {
		unset($_SESSION['idUsuario']);
		unset($_SESSION['usuario']);
		header('location:login');
	}
?>

    <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">            
        <div id="container">
            <h1 align="center">Usuários</h1>
            
            <hr>	
            <form action="<?php echo base_url() . 'usuario/novo' ?>" name="formulario" method="post">
                <div class="row">
                    <div id="container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h5><i class="fas fa-address-card"></i> Cadastro de Usuários </h5>
                        <hr>
                    </div>
                    <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <label>ID:</label>
                        <input type="text" name="idUsuario" id="idUsuario" class="form-control" <?php echo (empty($idUsuario) ? "" : "readonly='yes'"); ?> value="<?php echo (!isset($idUsuario) ? "" : $idUsuario); ?>">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">			
                        <label>Usuário:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" <?php echo (empty($idUsuario) ? "" : "readonly='yes'"); ?> value="<?php echo (!isset($usuario) ? "" : $usuario); ?>" required>
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label>Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" <?php echo (empty($idUsuario) ? "" : "readonly='yes'"); ?> value="<?php echo (!isset($senha) ? "" : $senha); ?>" required>
                    </div>
                    <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <label>Status:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1" <?php if(@$status == "1"){echo "checked=\"checked\"";} ?>>
                            <label class="form-check-label" for="status">Ativo</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="2" <?php if(@$status == "2"){echo "checked=\"checked\"";} ?>>
                        <label class="form-check-label" for="status">Desativado</label>
                      </div>

                    </div>

                    <div class="form-group col-md-12" align="right">				
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>			
                </div>
            </form>
            <?php
            if ($listaUsuario == NULL) {
                ?>
                <div class="alert alert-success" role="alert">
                    <span>Para incluir informações acesse a página inicial.</span>
                </div>
                <?php
            } else {
                ?>
                <div class="col-md-12">
                    <div class="card card-success">                        
                        <div class="card-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td align=center class="success"> ID </td>
                                        <td align=center class="success"> Usuário </td>
                                        <td align=center class="success"> Status </td>
                                        <td align=center class="success"> Ações </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listaUsuario as $listaUsuario) {
                                        ?>
                                        <tr>
                                            <td align=center><?php echo $listaUsuario->idUsuario; ?> </td>
                                            <td align=center><?php echo $listaUsuario->usuario; ?> </td>
                                            <td align=center><?php echo $listaUsuario->status; ?> </td>
                                            <td align=center>
                                                <a href="<?php echo base_url() . "usuario/edit/$listaUsuario->idUsuario"?>"><button class="btn btn-success">Editar</button></a>
                                                <a href="<?php echo base_url() . "usuario/deleteUsuario?idUsuario=" . $listaUsuario->idUsuario ?>"><button class="btn btn-danger">Deletar</button></a>
                                            </td>																		
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
    </div>
<?php
    $this->load->view('footer');
?>