<?php
    $placa = $_POST["placa"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $preco = $_POST["preco"];
    $quilometragem = $_POST["quilometragem"];
    $historico = $_POST["historico"];
    require_once('./php/conexao.php');
    $vei = "SELECT vei_placa
    FROM veiculo
    WHERE ( vei_placa = '$placa')
    ";
    $resultado = mysqli_query($con , $vei);
    if (mysqli_num_rows($resultado) > 0){   
        echo "A placa $placa já existe no banco de dados";
    } else {
        $veiculo = "INSERT INTO veiculo
        (vei_id, usu_id, vei_placa, vei_marca, vei_modelo, vei_ano, vei_preco, vei_quilometragem, vei_historico)
        VALUES 
        (DEFAULT, '$id', '$placa', '$marca', '$modelo', '$ano', '$preco', '$quilometragem', '$historico') 
        ";
        mysqli_query($con,$veiculo);
        if (mysqli_error($con)) {
            echo "Erro ao executar a query: ". mysqli_error($con);
        } else {
            echo "Dados inseridos com sucesso!";
        }
    }
    mysqli_close($con); 
?>