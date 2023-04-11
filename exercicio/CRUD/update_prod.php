<?php
    require('../conn.php');

    $id_prod = $_POST['id_prod'];
    $name_prod = $_POST['name_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $valor_prod = $_POST['valor_prod'];


    if(empty($name_prod) || empty($qtd_prod) || empty($valor_prod) || empty($id_prod)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_prod = $pdo->prepare("UPDATE produtos set 
        name_prod = :name_prod, 
        qtd_prod = :qtd_prod, 
        valor_prod = :valor_prod WHERE 
        id_produto = :id_prod;");
    

    $update_prod->execute(array(
        ':id_prod' => $id_prod,
        ':name_prod'=> $name_prod,
        ':qtd_prod'=> $qtd_prod,
        ':valor_prod'=> $valor_prod 
    ));

    echo 'sucesso';
    }

?>