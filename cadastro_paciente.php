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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width">
        <title>Clinica Fisioterapia</title>
        
        <link rel="stylesheet" href="css/style_cadastro_paciente.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    </head>

    <body>
        <h1 class="titulo">Clinica Fisioterapia</h1>
        
        <div class="container_data">
        <?php include "data-atual.php";?>

        <span class="data-atual"><?php echo $data_formatada;?></span>
        </div>
        <h2 class="titulo2" >Formulário de Cadastro</h2>  
        <div class="flex-container">
        <header>
            <div class="caixa">
                
                <nav>
                    <ul>
                        <li><a href="index.php"><img class="img_menu" src="img/inicio.png"></a></li>
                        <li><a href="agenda.php"><img class="img_menu" src="img/calen.png"></a></li>
                        <li><a href="pacientes.php"><img class="img_menu_ativo" src="img/pacientes.png"></a></li>
                        <li><a href="config.php"><img class="img_menu" src="img/config.png"></a></li>
                        <li><a href="login.php"><img class="img_menu" src="img/sair.png"></a></li>
                    </ul>
                </nav>
            </div>    
        </header>
          
        <div class="caixa_1">
        
  <div class="caixa_2">
  <div class="container_cadastro">
  <div class="coluna-1">
  <div class="input-group">
    <label for="nome">Nome Completo:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
  </div>

  <div class="input-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Digite seu email">
  </div>

  <div class="input-group">
    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento">
  </div>

  <div class="input-group">
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero">
      <option value="">Selecione...</option>
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
      <option value="outro">Outro</option>
    </select>
  </div>
</div>
<div class="coluna-2">
  <div class="input-group">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
  </div>

  <div class="input-group">
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" placeholder="Digite seu RG">
  </div>
  

  <div class="input-group">
    <label for="rg">Telefone:</label>
    <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone">
  </div>


  <div class="input-group">
    <label for="rg">Endereço:</label>
    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço">
  </div>
    </select>
    
  </div>
  
</div>
<button type="submit">Enviar</button>
</div>
  
</div>

        </div>
        
    </div>
    

        
        <footer>
            
            <p class="copyrigth">&copy; Copyright Ovnis Solutions – 2024</p>
        </footer> 
    </body>

</html>


<script>

</script>