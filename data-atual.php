<?php
header('Content-type: text/html; charset=iso-8859-1');


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$data_atual = date("Y-m-d"); // Obtém a data atual no formato YYYY-MM-DD
$data_formatada = strftime("%A, %d de %B de %Y", strtotime($data_atual));



//echo "Hoje é " . $string_iso88591 . ".";

?>