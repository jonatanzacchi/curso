<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap-3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-4/css/formLogin.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome-5/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet"/>
        <script src="bootstrap-3/js/jquery.js"></script> 
        <script src="bootstrap-3/js/bootstrap.min.js"></script>        
        <script src="fontawesome-5/svg-with-js/js/fontawesome.min.js"/></script>
    <title>Login</title>
</head>
<body>
    <form method="post" class="formLogin" action="<?php echo base_url() . 'Login/efetua_login' ?>">
        <div class="panel panel-info col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-0 col-sm-8 col-xs-offset-0 col-xs-12">
            <div class="panel panel-title-">
                <h4>LOGIN</h4>
            </div>
            <div class="panel panel-body">
                <div class="input-group-md">
                    <span class="input-group-text" for="usuario">Usuário</span>
                    <input type="text" class="form-control" id="usuario">
                </div>
                <br>
                <div class="input-group-md">
                    <span class="input-group-text" for="senha">Senha</span>
                    <input type="password" class="form-control" id="senha">
                </div>
                <br>
                <div class="float-right">
                    <button type="submit" class="btn btn-info">ENTRAR</button>                        
                </div>
            </div>
            <div class="panel panel-footer">
                <span style="text-align: right">Curso Web 2018 ©</span>
            </div>
        </div>
    </form>
</body>
</html>
