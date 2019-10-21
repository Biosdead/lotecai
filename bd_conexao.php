<?php

function conecta(){
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'loteca';

$conexao = mysqli_connect($server,$user,$pass,$db);

if (!$conexao) {
    echo 'Error ao acessar o BD';
} else {
    // echo 'Conexão estabelecida com sucesso';
}

return $conexao;

}

function consultar($query){
    $con = conecta();
    $arr = array();
    $dados = mysqli_query($con, $query) or die(mysqli_error($con));
    
    

    while ($imprimir = mysqli_fetch_assoc($dados)) {
        foreach ($imprimir as $key) {
            array_push($arr,$key);
        }
    }
    
    
    mysqli_close($con);
   
    return $arr;

    
    
  
    
}

function cadastrar($query){
    $con = conecta();

    $dados = mysqli_query($con, $query) or die(mysqli_error($con));
    
    mysqli_close($con);
    
    header('Location: ./index.php');
    
}



?>
