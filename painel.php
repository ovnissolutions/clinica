<?php
include('proteger.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/css/stylepain.css">
    <title>Sidebar</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="src/images/avatar.jpg" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description">
                        Clinica
                    </span>
                    <span class="item-description">
                        Saúde
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="#section1">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Dashboard
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#section2">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Usuários
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Notificações
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Produtos
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-image"></i>
                        <span class="item-description">
                            Imagens
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Configurações
                        </span>
                    </a>
                </li>
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn" >
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Logout
                </span>                
            </button>
        </div>
    </nav>

    <main class="main">
        <h1>Editar Perfil</h1>
        
    </main>
    <script src="src/javascript/script.js"></script>
</body>
</html>