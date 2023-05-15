<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Veículo</title>
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
        <form method = 'post'>
            <label for = "placa">Digite a Placa: (max:10)</label>
            <input type = "text" id = "placa" name = "placa"  maxlength = "10"><br>
            <label for = "marca">Digite a Marca: (max:20)</label>
            <input type = "text" id = "marca" name = "marca"  maxlength = "20"><br>
            <label for = "modelo">Digite o Modelo: (max:50)</label>
            <input type = "text" id = "modelo" name = "modelo"  maxlength = "50"><br>
            <label for = "ano">Digite o Ano: (max:10)</label>
            <input type = "text" id = "ano" name = "ano"  maxlength = "10"><br>
            <label for = "preco">Digite o Preço: (max:15)</label>
            <input type = "text" id = "preco" name = "preco"  maxlength = "15"><br>
            <label for = "quilometragem">Digite a Quilometragem: (max:10)</label>
            <input type = "text" id = "quilometragem" name = "quilometragem"  maxlength = "10"><br>
            <label for = "historico">Digite o Hístorico: (max:200)</label>
            <input type = "text" id = "historico" name = "historico"  maxlength = "200"><br>
            <input type="submit" value="Enviar" name="Enviar">
        </form>
        <a href="./index.php"><button>Voltar</button></a> <br>
    </div>
    <div>
        <?php
            $vei_id = $_GET['vei_id'];
             
            if (isset($_POST["Enviar"])) {
                require_once('./php/conexao.php'); 
                $placa = $_POST["placa"];
                $marca = $_POST["marca"];
                $modelo = $_POST["modelo"];
                $ano = $_POST["ano"];
                $preco = $_POST["preco"];
                $quilometragem = $_POST["quilometragem"];
                $historico = $_POST["historico"];
                if ($placa != "") {
                    $altera = "UPDATE veiculo
                    SET vei_placa = '$placa'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($marca != "") {
                    $altera = "UPDATE veiculo
                    SET vei_marca = '$marca'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($modelo != "") {
                    $altera = "UPDATE veiculo
                    SET vei_modelo = '$modelo'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($ano != "") {
                    $altera = "UPDATE veiculo
                    SET vei_ano = '$ano'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($preco != "") {
                    $altera = "UPDATE veiculo
                    SET vei_preco = '$preco'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($quilometragem != "") {
                    $altera = "UPDATE veiculo
                    SET vei_quilometragem = '$quilometragem'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
                if ($historico != "") {
                    $altera = "UPDATE veiculo
                    SET vei_historico = '$historico'
                    WHERE vei_id = '$vei_id'
                    ";
                    mysqli_query($con,$altera);
                }
            mysqli_close($con);     
            }
           
        ?>
    </div>
</body>
</html>