<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url();?>bootstrap-3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>bootstrap-4/css/formLogin.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>fontawesome-5/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
        <script src="<?php echo base_url();?>bootstrap-3/js/jquery.js"></script> 
        <script src="<?php echo base_url();?>bootstrap-3/js/bootstrap.min.js"></script>        
        <script src="<?php echo base_url();?>fontawesome-5/svg-with-js/js/fontawesome.min.js"/></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>home"><span class="fa fa-home"></span> Home</a></li>
                    <li><a href="<?php echo base_url(); ?>pessoa"><span class="fa fa-users"></span> Clientes</a></li>               
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <span style="font-size: 3rem;">
                        <i class="fa fa-door-open"></i>
                    </span>
                </ul>
            </div>
        </div>
    </nav>

    <!--PAGINA MEIO-->
    <div class="col-lg-12">
        <?php $this->load->view($pagina); ?>
    </div>
    <!--FIM PAGINA MEIO-->
</body>
</html>