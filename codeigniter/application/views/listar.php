<?php
$this->load->view('home');
?>
<title>Visualizar Pessoas</title>
    <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">
            <br>
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