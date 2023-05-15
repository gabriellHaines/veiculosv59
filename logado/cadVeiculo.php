<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Veículo</title>
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
        <div>
            <form method = 'POST'>
                <label for = "placa">Digite a Placa: </label>
                <input type = "text" id = "placa" name = "placa"  maxlength = "10"><br>
                <label for = "marca">Digite a Marca: </label>
                <input type = "text" id = "marca" name = "marca"  maxlength = "20"><br>
                <label for = "modelo">Digite o Modelo: </label>
                <input type = "text" id = "modelo" name = "modelo"  maxlength = "50"><br>
                <label for = "ano">Digite o Ano: </label>
                <input type = "text" id = "ano" name = "ano"  maxlength = "10"><br>
                <label for = "preco">Digite o Preço: </label>
                <input type = "text" id = "preco" name = "preco"  maxlength = "15"><br>
                <label for = "quilometragem">Digite a Quilometragem: </label>
                <input type = "text" id = "quilometragem" name = "quilometragem"  maxlength = "10"><br>
                <label for = "historico">Digite o Hístorico: </label>
                <input type = "text" id = "historico" name = "historico"  maxlength = "200"><br>
                <input type="submit" value="Cadastrar Veículo" name="Enviar">
                <button name = 'voltar'>Voltar</button>

            </form>
            
        </div>
        <?php            
            if (isset($_POST['voltar'])) {
                header('location:./index.php');
            }
            if (isset($_POST["Enviar"])) {
                require_once('./php/cadVeiculo.php');
            }
        ?>
    </body>
</html>