<!doctype html>
<html lang="pt-br">
    <header>
        <link href="bootstrap-4/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome-5/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet"/>
        <meta charset="utf-8" width=device-width, initial-scale=1.0>
        <title>Cadastro de Pessoas</title>
        <style type="text/css">
            #div {
                font-family: "Arial";
                margin: auto;
                width: 1100px;
                height: 750px;
                border: 1px solid black;
                font-size: 18px;
            }
            .button {
                border: 2px solid black;
                color: black;
                background-color: white; 
                padding: 8px 20px;
                text-align: center;
                display: inline-block;
                font-size: 14px;
                font-weight: bold;
                margin: 2px 2px;
                cursor: pointer;
                border-radius: 8px;
            }
            .button:hover {
                background-color: gray;
                color: white;
                border: 2px solid black;
            }
            a {
                text-decoration:none;
            }
            table, td {
                margin: auto;
                border-collapse: collapse;
                padding: 15px;
            }
            th {
                text-align: center;
            }
            input {
                width: 200px
            }
            label {
                text-align: left;

            }
            #menu {
                width:100%;
                overflow:hidden;
                height:30px;
                text-decoration:none;
                border: 1px solid black;
                padding: 0px 20px;
            }
        </style>
    </header>
    <body>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">
            <form method="post" action="<?php echo base_url() . 'listar_controller/recebe_dados' ?>">
                <br>
                <h2 style="text-align: center">Cadastro</h2>
                <br>
                <div class="row form-group">
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                        <label>Nome Completo</label>
                        <br>
                        <input type="text" placeholder="Nome Completo" name="nome" id="nome" required>
                    </div>
                    
                        <table width="90%" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td align=center class="success"> Nome </td>
                <td align=center class="success"> CPF/Passaporte </td>
                <td align=center class="success"> E-mail </td>
                <td align=center class="success"> Telefone </td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listaPessoa as $listarPessoa) {
                ?>
                <tr>
                    <td align=center><?php echo $listarPessoa->nome ?> </td>
                    <td align=center><?php echo $listarPessoa->documento ?> </td>
                    <td align=center><?php echo $listarPessoa->email ?> </td>
                    <td align=center><?php echo $listarPessoa->fone ?> </td>
                </tr>		
                <?php
            }
            ?>
        </tbody>
    </table>