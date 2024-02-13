<?php
session_start();
require_once('conn.php');
error_reporting(0);
ini_set("display_errors", 0 );

if($_SESSION['email'] == True){

  $email_cliente= $_SESSION['email'];
  $busca_email = "SELECT * FROM login WHERE email = '$email_cliente'";
  $resultado_busca = mysqli_query($conn, $busca_email);
  $total_clientes = mysqli_num_rows($resultado_busca);

  while($dados_usuario = mysqli_fetch_array($resultado_busca)){
$email_cliente = $dados_usuario['email'];
$senha_cliente= $dados_usuario['senha'];


  }




}else{
  #echo "<meta http-equiv='refresh' content='0;url=login.php'>";

?>


<script type="text/javascript">
	window.location="login.php";
	</script>


<?php

}
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTC-8">
        <meta name="viewport" content="width=device-width">
        <title>Clinica Fisioterapia</title>
        <
        <link rel="stylesheet" href="css/style_agenda.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    </head>

    <body>
        <h1 class="titulo">Clinica Fisioterapia </h1>
        <div class="container_data">
        <?php include "data-atual.php";?>

        <span class="data-atual"><?php echo $data_formatada;?></span>
        </div>
        <div class="flex-container">
        <header>
            <div class="caixa">
                
                <nav>
                    <ul>
                        <li><a href="index.php"><img class="img_menu" src="img/inicio.png"></a></li>
                        <li><a href="agenda.php"><img class="img_menu_ativo" src="img/calen.png"></a></li>
                        <li><a href="pacientes.php"><img class="img_menu" src="img/pacientes.png"></a></li>
                        <li><a href="config.php"><img class="img_menu" src="img/config.png"></a></li>
                        <li><a href="login.php"><img class="img_menu" src="img/sair.png"></a></li>
                    </ul>
                </nav>
            </div>    
        </header> 
        <div class="caixa_2">
        <div class="container_pesquisa">
        <h1 class="titulo">AGENDA</h1>
        </div> 
        <div class="paciente_home">
            <table>
            <thead>
                <tr>
                <th>Nome</th>
                <th>Doenças</th>
                <th>Horário</th>
                <th>Procedimento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Murilo Schali</td>
                <td>Não</td>
                <td>7:00</td>
                <td>Fisioterapia</td>
                </tr>
                <tr>
                <td>Caique P.</td>
                <td>Não</td>
                <td>7:30</td>
                <td>Avaliação</td>
                </tr>
                <tr>
                <td>Gianluca M.</td>
                <td>Não</td>
                <td>8:00</td>
                <td>Pilates</td>
                </tr>
                <tr>
                <td>Miriam Z.</td>
                <td>Não</td>
                <td>8:30</td>
                <td>Ventosa</td>
                </tr>
            </tbody>
            </table>
        </div>  
    

    

        
        <footer>
            <p class="copyrigth">&copy; Copyright Ovnis Solutions – 2024</p>
        </footer> 
    </body>

</html>


<script>

</script>