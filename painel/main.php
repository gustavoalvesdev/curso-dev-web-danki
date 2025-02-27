<?php if (class_exists('MySql')) {

?>

<?php 
    if (isset($_GET['loggout'])) {
        Painel::loggout();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link rel="stylesheet" href="<?= INCLUDE_PATH_PAINEL ?>css/style.css">
</head>
<body>
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php 
                    if ($_SESSION['img'] == '') {
        ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                        <!-- fa -->
                    </div>
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="<?php echo $_SESSION['nome']; ?>">
                    </div>
                    <!-- imagem-usuario -->
                <?php } ?>
                <!-- avatar-usuario -->
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
                <!-- nome-usuario -->
            </div>
            <!-- box-usuario -->
            <div class="items-menu">
                <h2>Cadastro</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviço</a>
                <a href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a href="">Listar Depoimento</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a href="">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>
                <h2>Configuração Geral</h2>
                <a href="">Editar</a>
            </div>
            <!-- items-menu -->
        </div>
        <!-- menu-wraper -->
    </div>    
    <!-- menu -->

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
                <!-- fa -->
            </div>
            <!-- menu-btn -->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa fa-home"></i> <span>Página Inicial</span></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"></i> <span>Sair</span></a>
            </div>
            <!-- loggout -->

            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </header>

    <div class="content">
        <?php Painel::carregarPagina(); ?>
    </div>
    <!-- content -->
    
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>

</html>

<?php 
} else {
    header('Location: ./');
    exit;
}
?>