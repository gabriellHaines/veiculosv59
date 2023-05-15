<?php
require_once('../php/conexao.php');
$deletable = "DROP TABLE veiculo";
if(mysqli_query($con, $deletable)){
    echo 'tabela deletada com sucesso';
}else{
    echo 'ERRO: '. mysqli_error($con);
}
$tabela = "CREATE TABLE 
veiculo(
vei_id INT(10) AUTO_INCREMENT PRIMARY KEY , 
usu_id INT(10), 
vei_placa VARCHAR(10), 
vei_marca VARCHAR(20), 
vei_modelo VARCHAR(50), 
vei_ano VARCHAR(10), 
vei_preco VARCHAR(15), 
vei_quilometragem VARCHAR(10), 
vei_historico VARCHAR(200),
vei_status ENUM('ativo', 'desativado') NOT NULL DEFAULT 'ativo' 
)";
if (mysqli_query($con,$tabela)) {
    echo "Tabela criada com sucesso!!";
}else {
    echo "Erro: " . mysqli_error($con);
}
mysqli_close($con);
?>