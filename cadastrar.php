<?php 
// print_r($_POST);
require_once('bd_conexao.php');
$camposTemp = array_keys($_POST);
$campos = implode(',',$camposTemp);
$valoresTemp = array_values($_POST);


foreach ($valoresTemp as &$values) {
    $values = "'".$values."'";
}

$valores = implode(",",$valoresTemp);


// cadastrar("INSERT INTO concursos (".$campos.") VALUES('".$_POST['concurso']."','".$_POST["jogo1"]."','".$_POST["probabilidade1"]."')");
cadastrar("INSERT INTO concursos (".$campos.") VALUES(".$valores.")");
?>