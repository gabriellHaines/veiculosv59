<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veículos do Usuário</title>
        
    </head>
    <body>
        <div>
            <?php
                session_start();
                $nome = $_SESSION['usu_nome'];
                $usuario = $_SESSION['usu_usuario'];
                $usu_id = $_SESSION['usu_id'];
                echo "nome: " . $nome . ' usuário: ' . $usuario . ' id: '. $usu_id;
                if (!isset($nome) && !isset($id)) {
                    header('location:../index.php');
                }
            ?>   
        </div>

        <form method="post">
            <button name = 'voltar'>Voltar</button>
        </form>

        <table >
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Quilometragem</th>
            <th>Histórico</th>
            <th>Alterar Dados</th>
            <th>Excluir Veículo</th>
        </tr>
        <?php
            require_once('./php/veiUsuario.php')
        ?>
        </table>
    </body>
</html>