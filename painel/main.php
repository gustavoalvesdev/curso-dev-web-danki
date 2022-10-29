<?php if (class_exists('MySql')) {

?>

<h2>Bem-vindo ao painel <?php echo $_SESSION['user']; ?></h2>

<?php 
} else {
    header('Location: ./painel');
    exit;
}
?>