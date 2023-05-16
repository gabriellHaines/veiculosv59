<?php
    require_once('./php/conexao.php');
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    if (!isset($marca)) {
        echo 'oi';
    }


    if ($marca != "" && $modelo != "" && $ano != ""){

        //procura no banco de dados veículos da mesma marca, modelo e ano
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE ( vei_marca = '$marca' && vei_modelo = '$modelo' && vei_ano = '$ano' && vei_status = 'ativo')
        ";

    //caso os campos marca e modelo forem preenchidos
    }else if($marca != "" && $modelo != ""){
        
        //procura no banco de dados veículos da mesma marca e modelo 
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE ( vei_marca = '$marca' && vei_modelo = '$modelo' && vei_status = 'ativo')
        ";

    //caso os campos marca e ano forem preenchidos
    }else if($marca != "" && $ano != ""){

    //procura no banco de dados veículos da mesma marca e ano
    $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
    FROM veiculo 
    WHERE ( vei_marca = '$marca' && vei_ano = '$ano' && vei_status = 'ativo' )
    ";
    
    //caso os campos modelo e ano forem preenchidos  
    }else if ($modelo != "" && $ano != ""){

        //procura no banco de dados veículos da mesma marca, modelo e ano
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE (vei_modelo = '$modelo' && vei_ano = '$ano' && vei_status = 'ativo' )
        ";

    //caso apenas marca for preenchida
    }else if ($marca != "") {
    
        //procura no banco de dados veículos da mesma marca
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE ( vei_marca = '$marca' && vei_status = 'ativo' && vei_status = 'ativo' )
        ";

    //caso apenas modelo for preenchida
    }else if ($modelo != "") {

        //procura no banco veículos do mesmo modelo
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE ( vei_modelo = '$modelo' && vei_status = 'ativo'  )
        ";

    //caso apenas ano  for preenchida
    }else if ($ano != "") {

        //procura no banco veículos do mesmo ano
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE ( vei_ano = '$ano' && vei_status = 'ativo' )
        ";
    }else {

        //SE não colocar nenhum dado exibe todos os veículos
        $veiculo = " SELECT vei_marca, vei_modelo, vei_ano , vei_preco, vei_quilometragem, vei_historico
        FROM veiculo 
        WHERE vei_status = 'ativo'";
    }

    //atribui a resposta do banco a uma variável
    $resultado = mysqli_query($con,$veiculo);

    //SE alguma informação não for encontrada 
    if (mysqli_num_rows($resultado) == 0) {

        echo "Nenhum veículo encontrado com os dados informados.";

    //exibe a resposta
    } else {

        while ($informacao = mysqli_fetch_assoc($resultado)) {
            echo "marca: " . $informacao["vei_marca"] . "<br>";
            echo "ano: " . $informacao["vei_modelo"] . "<br>";
            echo "ano: " . $informacao["vei_ano"] . "<br>";
            echo "preço: " . $informacao["vei_preco"] . "<br>";
            echo "quilometragem: " . $informacao["vei_quilometragem"] . "<br>";
            echo "historico: " . $informacao["vei_historico"] . "<br><br>";
        }
    }

    //fecha a conexão
    mysqli_close($con); 

?>