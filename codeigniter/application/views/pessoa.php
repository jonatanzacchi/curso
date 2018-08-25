<script src="<?php echo base_url(); ?>bootstrap-3/js/personalizados/pessoa.js"></script>
        
<title>Cadastro de Pessoas</title>

<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-2 main">

</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalId"><i class="fas fa-user-plus"></i> NOVO </button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" id="modalId" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="gridSystemModalLabel" style="text-align: center">Cadastro</h2>
            </div>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-2 main ">
                    <form method="post" action="<?php echo base_url() . 'Pessoa/recebe_dados' ?>">
                        <div class="row form-group"></div>
                        <div class="row form-group"></div>
                        <div class="row form-group">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="nome">Nome Completo</label>
                                <input class="form-control" type="text" placeholder="Nome Completo" name="nome" id="nome" required>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="documento">CPF/Passaporte</label>
                                <br>
                                <input class="form-control" type="text" placeholder="CPF/Passaporte" name="documento" id="documento" required>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="email">E-mail</label>
                                <br>
                                <input class="form-control" type="text" placeholder="E-mail" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="fone">Telefone</label>
                                <br>
                                <input class="form-control" type="text" placeholder="Telefone" name="fone" id="fone" required>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="nascimento">Data de Nascimento</label>
                                <br>
                                <input class="form-control" type="date" name="nascimento" id="nascimento" required>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="pais">País</label>
                                <br>
                                <input class="form-control" type="text" placeholder="País" name="pais" id="pais" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> 
                                <label for="endereco">Endereço</label>
                                <br>
                                <input class="form-control" type="text" placeholder="Endereço" name="endereco" id="endereco" required>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="numero">Número</label>
                                <br>
                                <input class="form-control" type="number" placeholder="Número" name="numero" id="numero">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="cidade">Cidade</label>
                                <br>
                                <input class="form-control" type="text" placeholder="Cidade" name="cidade" id="cidade" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <label for="uf">UF</label>
                                <br>
                                <input class="form-control" type="text" placeholder="UF" name="uf" id="uf" required>
                            </div>
                        </div>
                </div>

                <div class="modal-footer"> <!-- não está enviando pois o body deve fechar antes-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="enviar" value="ENVIAR" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
            
        </div>
    </div><!-- /.modal body -->
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container">
    <table class="table table-striped table-bordered table-hover" id="tabelaClientes">
        <thead>            
            <th>Nome</th>
            <th>Documento</th>
            <th>Fone</th>
            <th>E-Mail</th>
            <th>Funções</th>            
        </thead>
        <tbody>
            <?php foreach ($listaPessoa as $row){ ?>
                <tr>
                    <td><?php echo $row->nome; ?></td>
                    <td><?php echo $row->documento; ?></td>
                    <td><?php echo $row->fone; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><button type="button" id="btnEditar" class="btn btn-warning btnEditar" data-toggle="modal" data-target="#modalId" value="<?php echo $row->id; ?>">Editar</button>
                    <button type="button" class="btn btn-danger" value="<?php echo $row->id; ?>">Deletar</button>
                    <a href="<?php echo base_url()."Pessoa/deleteCadastro?id=". $row->id ?>"><button class="btn btn-danger">Deletar</button></a></td>			
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>    
</div>