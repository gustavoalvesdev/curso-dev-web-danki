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
    
    <div class="box-login">
        <?php 
            if (class_exists('MySql')) {
            if (isset($_POST['acao'])) {
                
                $user = $_POST['user'];
                $password = $_POST['password'];

                
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                    $sql->execute(array($user, $password));

                    if ($sql->rowCount() == 1) {
                        //Logamos com sucesso
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['password'] = $password;
                        header('Location: ' . INCLUDE_PATH_PAINEL);
                        exit;
                    } else {
                        //Falhou
                        echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorreto(s)!</div>';
                    }
                } 
            } else {

                header('Location: ./');
                exit;
            }

        ?>

        <h2>Efetue o Login</h2>

        <form method="POST">
            <input type="text" name="user" placeholder="Login..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div>
    <!-- box-login -->
</body>
</html>