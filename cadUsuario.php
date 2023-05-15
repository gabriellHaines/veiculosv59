<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro usuário</title>
</head>
<body>
    <form action="" method = "post">
        <label for="usuario">Digite um Usuário: </label><br>
        <input type = "text" name = "usuario"  ><br>
        <label for="senha">Digite uma Senha: </label><br>
        <input type = "password" name = "senha"  ><br>
        <label for="senha">Repita a Senha: </label><br>
        <input type = "password" name = "senhaR"  ><br>
        <label for="nome">Digite seu Nome Completo: </label><br>
        <input type="text" name = "nome"  ><br>
        <label for="celular">Digite seu Telefone: </label><br>
        <input type="text" name = "celular" ><br>
        <label for="cpf">Digite seu CPF: </label><br>
        <input type="text" name = "cpf"  ><br>
        <label for="idade">Digite sua Idade: </label><br>
        <input type="text" name = "idade"  ><br>
        <button  type="submit" name = "enviar">Cadastrar Usuário</button>
        <button type = "submit" name = "login">Ir Para Login</button>
    </form>
    <?php 
        
        if(isset($_POST["login"])){
            header('location:./index.php');
        }
        
        if (isset($_POST["enviar"])) {
            require_once('./php/cadUsuario.php');    
        }
    ?>
</body>
</html>