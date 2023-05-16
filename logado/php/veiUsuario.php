<?php
    if (isset($_POST['voltar'])) {
        header('location:./index.php');
    }
    require_once('./php/conexao.php');
    $veiculoUsuario = "SELECT usu_id,vei_id , vei_placa , vei_marca , vei_modelo , vei_ano , vei_preco , vei_quilometragem , vei_historico
    FROM veiculo
    WHERE ( usu_id = '$usu_id' AND vei_status = 'ativo')
    ";
    $resultado = mysqli_query($con,$veiculoUsuario);
    if (mysqli_num_rows($resultado) == 0) {
        echo "Nenhum veículo do usuário encontrado.";
    } else {
        while ($informacao = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $informacao["vei_placa"] . "</td>";
            echo "<td>" . $informacao["vei_marca"] . "</td>";
            echo "<td>" . $informacao["vei_modelo"] . "</td>";
            echo "<td>" . $informacao["vei_ano"] . "</td>";
            echo "<td>" . $informacao["vei_preco"] . "</td>";
            echo "<td>" . $informacao["vei_quilometragem"] . "</td>";
            echo "<td>" . $informacao["vei_historico"] . "</td>";
            echo "<td><a href='./veiAltera.php?vei_id=" . $informacao['vei_id'] . "'><button>Alterar</button></a></td>";
            echo "<td><form method='post'><input type='hidden' name='vei_id' value='" . $informacao['vei_id'] . "'><button type='submit' name='excluir'>Excluir</button></form></td>";
            echo "</tr>";
        }
    } 
    if (isset($_POST['excluir'])) {
        $vei_id = $_POST['vei_id'];
        require_once('./php/conexao.php');
        $altera = "UPDATE veiculo 
        SET vei_status = 'desativado'
        WHERE vei_id = '$vei_id'
        ";
        mysqli_query($con,$altera);   
        if ($altera) {
            echo "Veículo excluído com sucesso.";
        } else {
            echo "Erro ao excluir veículo.";
        }
    
    }
    mysqli_close($con);    
?>