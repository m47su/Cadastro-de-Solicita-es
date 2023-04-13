<?php
    require('../conn.php');

    $id_prod = $_POST['id_prod'];
    $assunto = $_POST['assunto'];
    $nomecompleto = $_POST['nomecompleto'];
    $descricao = $_POST['descricao'];


    if(empty($assunto) || empty($nomecompleto) || empty($descricao) || empty($id_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_prod = $pdo->prepare("UPDATE produtos set 
        assunto = :assunto, 
        nomecompleto = :nomecompleto, 
        descricao = :descricao WHERE 
        id_produto = :id_prod;");
    

    $update_prod->execute(array(
        ':id_prod' => $id_prod,
        ':assunto'=> $assunto,
        ':nomecompleto'=> $nomecompleto,
        ':descricao'=> $descricao
    ));

    echo 'sucesso';
    }

?>