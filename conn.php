<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'clinica';
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn){

   # echo " deu ruim";
} else{

    #echo " deu tudo certo na conexao";
}


?>