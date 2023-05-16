<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busca de veículo</title>
</head>
<body>      
    <div>
        <?php
            session_start();
            $nome = $_SESSION['usu_nome'];
            $usuario = $_SESSION['usu_usuario'];
            $id = $_SESSION['usu_id'];
            echo "nome: " . $nome . ' usuário: ' . $usuario . ' id: '. $id;
            if (!isset($nome) && !isset($id)) {
                header('location:../index.php');
            }
        ?>   
    </div>
    <form method="post">
        <label for = "marca">Digite a Marca: (max:20)</label>
        <input type = "text" id = "marca" name = "marca"  maxlength = "20"><br>
        <label for = "modelo">Digite o Modelo: (max:50)</label>
        <input type = "text" id = "modelo" name = "modelo"  maxlength = "50"><br>
        <label for = "ano">Digite o Ano: (max:10)</label>
        <input type = "text" id = "ano" name = "ano"  maxlength = "10"><br>
        
        <input type = "submit" value = "Enviar" name = "Enviar">
        <button name = 'voltar'>voltar</button>
    </form><br>
    <?php
        if (isset($_POST['voltar'])) {
            header('location:./index.php');
        }
        if (isset($_POST["Enviar"])){
            
            require_once('./php/veiBusca.php');
            
        }

        

    ?>
</body>
</html>