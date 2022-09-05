<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="icon" href="./imagens/logo.png">
    <style>
        a{
            color: white;
            padding-left: 70px;
            text-decoration: none;
            
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login"> 
            <h1>Seja Bem vindo,<br> Faça o Seu Login</h1> 
            <img src="./imagens/logo.png" alt="" class="left-login-image"> 
        </div>
        <div class="right-login">
            <div class="card-login"> 
                <h1>LOGIN</h1>
                <form action="acesso.php" method="post">
                  <div class="textfield">
                    <label for="usuario"> Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">

                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                    
                </div>
               <input type="submit" value="Login" class="btn-login">
               <p style="padding-left:17px;color:white;">Não Possui conta ainda??</p>
               <a href="cadastro.php" style="color:#00f880;">Cadastre-se</a> 
               <!--<button class="btn-login">Login</button>-->
            </form>
            </div>
        </div>
    </div> 
</body>
</html>