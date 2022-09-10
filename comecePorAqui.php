<?php require_once("validaregistro.php") ?> 

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title> 
    <link rel="stylesheet" href="./estilos/style2.css">
    <link rel="icon" href="./imagens/logo.png">
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.container{
  max-width: 1500px;
  width: auto;
  background-color: #fff;
  padding: 100px 30px 50px 20px;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
 
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #201b2c, #9b59b6);
 }
 form .button input:hover{
  background: linear-gradient(-135deg, #201b2c, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

    </style>
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./imagens/logo2.png" alt="">
            </div>

            <span class="logo_name">Gerenciamento</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="primeira.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="vendas.php">
                    <i class="uil uil-shopping-cart"></i>
                    <span class="link-name">Vendas</span>
                </a></li>
                <li><a href="graficos.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Gráficos</span>
                </a></li>
                <li><a href="cadastrarFuncionarios.php">
                    <i class="uil uil-user-md"></i>
                    <span class="link-name">Cadastrar Funcionário</span>
                </a></li>
                <li><a href="funcionarios.php">
                    <i class="uil uil-chat-info"></i>
                    <span class="link-name">Funcionário</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="sair.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-brightness"></i>
                    <span class="link-name">Modo Claro</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar...">
            </div>
        </div>
        <div class="container">
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/-Ku4VyOwsZM?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
         </div>


    </section>
     <script src="./javascript/script.js"></script>
   
    
    
</body>
</html>