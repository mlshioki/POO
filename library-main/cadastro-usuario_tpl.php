<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Index</title>    
        <?php require './require/head_links.php'; ?>
    </head>
    <body>
        <?php require './require/header.php'; ?>
        <main class="container my-5">
            <h2 class="mb-3">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Cadastro
            </h2>

        <form method="post" action="./cadastro.php">
            <div class="text-danger">
                <?php 
                    $erros = [];
                    if(count($erros) > 0){//conta quantos indices tem num vetor, ou seja se for 0, não tem mensagem, se for 1 ou mais ja tem, e como pode ter + q 1 fazemos um foreach para criar um looping que exibe todos
                        foreach ($erros as $erro) { 
                            echo $erro.''; 
                        }
                    }
                ?>
            <div class="text-success"> <?php if(isset($msg)){ echo $msg;} ?> </div>
            </div>
                    
                <div class="form-row">
                    <div class="form-group col-7">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" required autofocus>
                    </div>
                    <div class="form-group col-5">
                        <label for="CPF">CPF</label>
                        <input type="text" name="CPF" class="form-control" id="CPF" required>
                    </div>
                </div>    
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="dataNasc">Data de nascimento</label>
                            <input type="date" name="dataNasc" class="form-control" id="dataNasc" required>
                        </div>

                    <div class="form-group col">
                          <label class="mr-sm-2" for="sexo">Sexo</label>
                          <select class="custom-select mr-sm-2" name="sexo" id="sexo">
                            <option selected>Escolha...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Prefiro não dizer">Prefiro não dizer</option>
                          </select>
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" required>
                    </div>
                    <div class="form-group">
                        <label for="conf_senha">Repetir senha</label>
                        <input type="password" name="conf_senha" class="form-control" id="conf_senha" required>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="endereco" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" id="telefone" required>
                    </div>
                    <input type="submit" name="cadastrar" class="btn btn-primary" value="CADASTRAR">
            </form>
        </main>
        <?php require './require/footer.php';?>
    </body>
</html>