<?php
    require ("conn.php");

    if (isset($_GET['produto'])){
        $produto = $_GET['produto'];
    }
    else{
        header("Location: index.php");
    }
    
    $tabela = $pdo->prepare("SELECT * FROM produtos WHERE id_produto=:produto;");
    $tabela->execute(array(':produto'=>$produto));
    $rowTable = $tabela->fetchAll();

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de Solicitações</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Edição de Solicitações</h1>
            <br>
            <form action="CRUD/update_prod.php" method="post" id="formulario">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Assunto do problema: </label>
                        <input type="text" name="name_prod" id="" class="form-control" value=<?php echo $rowTable[0]['name_prod']?>>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Nome de usuário: </label>
                        <input type="text" name="qtd_prod" id="" class="form-control" value=<?php echo $rowTable[0]['qtd_prod']?>>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Descrição do problema: </label>
                        <input type="text" name="valor_prod" id="" class="form-control" value=<?php echo $rowTable[0]['valor_prod']?>>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="SALVAR ALTERAÇÕES">
                        <a href="tabela.php" type="button" class="btn btn-primary float-end">Suas solicitações</a>
                    </div>
                </div>
                <input type="hidden" name='id_prod' value=<?php echo $rowTable[0]['id_produto']?>>
            </form>
            <div id="resultado"></div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>