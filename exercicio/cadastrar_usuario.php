<?php

require ('conn.php');

$login = $_POST['login'];
$senha = $_POST['senha'];


if(empty($login) || empty($senha)){
    echo "Os valores não podem ser vazios";
}else{
    $cad_prod = $pdo->prepare("INSERT INTO usuarios(login, senha) 
    VALUES(:login, :senha)");
    $cad_prod->execute(array(
        ':login'=> $login,
        ':senha'=> $senha,
    ));

    echo "<script>
    alert('Solicitação feita com sucesso!');
    </script>";
}
?>

<a href="login.php" type="button" class="btn btn-primary float-center">Entrar</a>
