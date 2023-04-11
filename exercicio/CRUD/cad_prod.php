<?php
    require('../conn.php');

    $name_prod = $_POST['name_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $valor_prod = $_POST['valor_prod'];
   
   
    if(empty($name_prod) || empty($qtd_prod) || empty($valor_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_prod = $pdo->prepare("INSERT INTO produtos(name_prod, qtd_prod, valor_prod) 
        VALUES(:name_prod, :qtd_prod, :valor_prod)");
        $cad_prod->execute(array(
            ':name_prod'=> $name_prod,
            ':qtd_prod'=> $qtd_prod,
            ':valor_prod'=> $valor_prod,
             
        ));

        echo "<script>
        alert('Solicitação feita com sucesso!');
        </script>";
    }
?>