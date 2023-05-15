<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <label for="login">Login</label>
        <form method="post">
            <label for = "usuario">Digite seu Usuário:</label><br>
            <input type = "text" id = "usuario" name = "usuario"  maxlength = "20"><br>
            <label for = "senha">Digite sua Senha:</label><br>
            <input type = "password" id = "senha" name = "senha"  maxlength = "20"><br>
            <button type = "submit" name = "Enviar">Enviar</button>
            <button type = "submit" name = "cadastrar">Cadastrar</button>    
        </form>
    </div>
    <?php    
        if (isset($_POST["cadastrar"])) {
            header('location:./cadUsuario.php');
        }     
        if (isset($_POST["Enviar"])) { 
            require_once('./php/login.php');
        }
    ?>
</body>
</html>