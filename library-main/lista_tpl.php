<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista</title>
    <?php require './require/head_links.php'; ?>
</head>

<body>
    <?php require './require/header.php'; ?>

    <main class="container">
        <div class="text-center">    
            <div class="text-danger">
            <?php 
            if(isset($erro)){
                echo "$erro";
            }
            ?> 
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Apagar</th>
                    <th>Editar</th>
                </tr>
                </thead>
        <?php foreach ($lista as $usuario) {

            echo "<tbody>
                        <tr>
                            <td>{$usuario['ID']}</td>
                            <td>{$usuario['Nome']}</td>
                            <td>{$usuario['CPF']}</td>
                            <td>{$usuario['Email']}</td>
                            <td>{$usuario['Endereco']}</td>
                            <td>{$usuario['Telefone']}</td>
                            <td><a href='?apagar={$usuario['ID']}'>apagar</a></td>
                            <td><a href='?editar={$usuario['ID']}'>editar</a></td>
                        </tr>
                </tbody>";

        }
        ?>

            </table>
        </div>
    </main>
        <?php require './require/footer.php'; ?>
    </body>
</html>
