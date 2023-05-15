<?php
    require_once('./php/conexao.php');
    $altera = "UPDATE usuario 
    SET usu_status = 'desativado'
    WHERE usu_id = '$id'
    ";
    mysqli_query($con,$altera);   
    echo "usuario inativado";
    mysqli_close($con);            
?>