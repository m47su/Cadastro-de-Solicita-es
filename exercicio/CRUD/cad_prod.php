<?php
    require('../conn.php');

    $assunto = $_POST['assunto'];
    $nomecompleto = $_POST['nomecompleto'];
    $descricao = $_POST['descricao'];
   
   
    if(empty($assunto) || empty($nomecompleto) || empty($descricao)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_prod = $pdo->prepare("INSERT INTO produtos(assunto, nomecompleto, descricao) 
        VALUES(:assunto, :nomecompleto, :descricao)");
        $cad_prod->execute(array(
            ':assunto'=> $assunto,
            ':nomecompleto'=> $nomecompleto,
            ':descricao'=> $descricao,
             
        ));

        echo "<script>
        alert('Solicitação feita com sucesso!');
        </script>";
    }
?>