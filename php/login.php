<?php
    $usuario = $_POST["usuario"];
    require_once('./php/conexao.php');
    $usu =  "SELECT usu_usuario, usu_senha , usu_id, usu_nome
    FROM usuario
    WHERE ( usu_usuario = '$usuario'  )
    ";
    $resultado = mysqli_query($con , $usu);
    if (mysqli_num_rows($resultado) == 0){
        echo "Usuário inexistente";
    }else{
        $row = mysqli_fetch_assoc($resultado);
        $usu_senha = $row["usu_senha"];
        $senha = $_POST["senha"];
        if ($senha == $usu_senha) {
            $usu_id = $row["usu_id"];
            $usu_usuario = $row['usu_usuario'];
            $usu_nome = $row["usu_nome"];
            session_start();
            $_SESSION['usu_usuario'] = $usu_usuario;
            $_SESSION['usu_nome'] = $usu_nome;
            $_SESSION['usu_id'] = $usu_id;
            header('location:./logado/index.php');
        } else {
            echo "Senha incorreta";
        }
    }
    mysqli_close($con);
?>