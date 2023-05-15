<?php
$usuario = $_POST["usuario"];
$senhaR = $_POST["senhaR"];
$senha = $_POST["senha"];
if($senhaR == $senha){ 
    require_once('./php/conexao.php');
    $verificaUsuario =  "SELECT usu_usuario 
    FROM usuario
    WHERE ( usu_usuario = '$usuario'  )
    ";
    $resultado = mysqli_query($con , $verificaUsuario);
    if(mysqli_num_rows($resultado) == 0){
        $nome = $_POST["nome"];
        $celular = $_POST["celular"];
        $cpf = $_POST["cpf"];
        $idade= $_POST["idade"];
        $insertTabela = "INSERT INTO usuario 
        (usu_usuario,
        usu_senha,
        usu_nome,
        usu_celular,
        usu_cpf,
        usu_idade)
        VALUES 
        ('$usuario',
        '$senha', 
        '$nome', 
        '$celular',
        '$cpf',
        '$idade')
        ";
        mysqli_query($con,$insertTabela);
        if (mysqli_error($con)) {
            echo "Erro ao executar a query: ". mysqli_error($con);
        }else{
            $buscaID =  "SELECT usu_id
            FROM usuario
            WHERE (usu_usuario = '$usuario')
            ";
            $resultado = mysqli_query($con,$buscaID);
            $row = mysqli_fetch_assoc($resultado);
            $usu_id = $row["usu_id"];
            session_start();
            $_SESSION['usu_id'] = $usu_id;
            $_SESSION['usu_usuario'] = $usuario;
            $_SESSION['usu_nome'] = $nome;
            header('location:./logado/index.php');
        }
    }else {
        echo "O usuário $usuario já esta cadastrado tente outro nome  de usuário";
    }
}else{
    echo "Senhas Diferentes, insira senha iguais" ;
}
mysqli_close($con);
?>