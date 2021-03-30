<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login</title>
    <?php require_once './require/head_links.php'; ?>
</head>

<body>

    <?php require_once './require/header.php';?>

    <main class="container my-5">
            <h2 class="mb-3">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                </svg>
                    Editar <?php echo $nome; ?>
            </h2>
            <div class="tab-content">

                <!--Dados-->
                <form method="post" action="lista.php" id="dados" class="tab-pane fade show active" role="tabpanel" aria-labelledby="dados-tab">
                        <div class="text-sucess">
                        <?php
                            if ( isset($editado_ok) ) {
                                echo "Editado com sucesso!";
                            }
                        ?>
                        </div>
<!--                         <div class="text-danger">
                        <?php
                        if ( isset($erros) ){
                            if ( count($erros) > 0 ) {    
                                foreach ($erros as $erro) {
                                    echo $erro ."<br /> \n";
                                }
                            }
                        }
                        ?>
                        </div> -->    
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" value="<?php echo $nome; ?>" name="nome" class="form-control" id="nome" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="CPF">CPF</label>
                            <input type="text" value="<?php echo $CPF; ?>" name="CPF" class="form-control" id="CPF" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" value="****" name="senha" class="form-control" id="senha" required>
                        </div>
                        <div class="form-group">
                            <label for="conf_senha">Repetir senha</label>
                            <input type="password" value="****" name="conf_senha" class="form-control" id="conf_senha" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" value="<?php echo $endereco; ?>" name="endereco" class="form-control" id="endereco" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" value="<?php echo $telefone; ?>" name="telefone" class="form-control" id="telefone" required>
                        </div>
                        <input type="hidden" name="ID" value="<?php echo $_GET['editar']; ?>">
                        <input type="submit" class="btn btn-primary" name="gravar" value="Gravar">
                        </form>                
                    </div>	
    </main>
</body>
</html>