<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login"> 
            <h1>Seja Bem vindo,<br> Faça o Seu Cadastro</h1> 
            <img src="carasentado.svg" alt="" class="left-login-image"> 
        </div>
        <div class="right-login">
            <div class="card-login"> 
                <h1>Cadastro</h1>
                  <form action="cadastroBd.php" method="post">
                      <div class="textfield">
                        <label for="usuario"> Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">

                        <label for="email"> Email</label>
                        <input type="text" name="email" placeholder="email">

                      </div>
                      <div class="textfield">
                          <label for="senha">Senha</label>
                          <input type="password" name="senha" placeholder="Senha" id="password">
                          
                          <label for="senha">Confirmar senha</label>
                          <input type="password" name="senha" placeholder="Confirmar senha" id="confirm_password">
                      </div>
                    <input type="submit" value="Cadastrar" class="btn-login"> 
                    <!--<button class="btn-login">Login</button>-->
                  </form>
             </div>
        </div>
    </div> 
    <script>
        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

    </script>
</body>
</html>