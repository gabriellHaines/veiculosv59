<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
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
            <form method="post">
                <button name = 'trocaUsuario'>Trocar de Usuário</button>
                <button name = 'veiUsuario'>Seus Veículos</button>
                <button name = 'buscaVeiclo'>Buscar Veículo</button>
                <button name = 'cadastrarVeiculo'>Cadastrar Veículo</button>
                <button name = 'usuInativa'>Inativar Usuário</button>
            </form>
        </div>
        <?php 
            if (isset($_POST['trocaUsuario'])) {
                session_start();
                session_unset();
                session_destroy();
                header('location:../index.php');
            }  
            if (isset($_POST['veiUsuario'])) {
                header('location:./veiUsuario.php');
            }
            if (isset($_POST['buscaVeiclo'])) {
                header('location:./veiBusca.php');
            }
            if (isset($_POST['cadastrarVeiculo'])) {
                header('location:./cadVeiculo.php');
            }
            if (isset($_POST['usuInativa'])) {
                require_once('./php/usuInativa.php');
            }
        ?>
    </body>
</html>
