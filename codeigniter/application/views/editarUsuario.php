	<div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">            
            <div id="container">
                <h1 align="center">Edição de Usuário</h1>
                <hr>
                    <form action="<?php echo base_url() . 'usuario/novo' ?>" name="formulario" method="post">				
                        <div class="row">
                        <div id="container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5><i class="fas fa-address-card"></i> Cadastro de Usuários </h5>
                            <hr>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label>ID:</label>
                            <input type="text" name="idUsuario" id="idUsuario" class="form-control" value="<?php echo $idUsuario?>">
                        </div>
                        <div class="form-group form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <label for="usuario">Usuario</label><span class="erro"></span>
                                <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario?>" autofocus='true' />
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <label for="senha">Senha</label><span class="erro"></span>
                                <input type="password" name="senha" id="senha" class="form-control" readonly="readonly" value="<?php echo $senha?>" />
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label>Status:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="1" <?php if($status == "1"){echo "checked=\"checked\"";} ?>>
                                <label class="form-check-label" for="status">Ativo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="2" <?php if($status == "2"){echo "checked=\"checked\"";} ?>>
                                <label class="form-check-label" for="status">Desativado</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12" align="right">
                            <a href="<?php echo base_url(). 'usuario' ?>" class="btn btn-danger">Cancelar</a>
                            <input type="submit" class="btn btn-success" value="Enviar">
                        </div>
                    </div>
                    </form>
		</div>	
	</div>