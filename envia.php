<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>

<body>
    <?php 
    $conexao = mysqli_connect("localhost","root","","teste");
    // checar conexao

if(!$conexao){
    echo "não foi possivel conectar";   
    }else{
        echo "conectado ao banco de dados>>>>>>>>>>>>>>>";    
    };
    
    
    
    //recuperar e checar se ja existe os dados no db

    $cpf = $_POST['cpf'];
    $cpf = mysqli_real_escape_string($conexao,$cpf);

$sql = "SELECT cpf FROM teste.dados WHERE cpf='$cpf'"; 
$retorno = mysqli_query($conexao,$sql);

if (mysqli_num_rows($retorno)>0){
    echo "cpf ja cadastrado <br>";
}else{
    $cpf= $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "INSERT INTO teste.dados(cpf,idade,nome) VALUES('$cpf','$idade','$nome')";
    $resultado = mysqli_query($conexao,$sql);
    echo"usuario cadastrado com sucesso";
};


?>
</body>

</html>