<?php
include './header.php'; //puxa o header
?>

<?php

if (!empty($_POST)) {
    // get -> variavel global nativa do php q pega todos os dados do form (get é um vetor que pega cada dado do input)
    //var_dump($_GET['nome']); //var_dump = printf // nome -> índice pra acessar o vetor

    echo "<div class='alert alert-warning' role='alert'>
    <b>Registro salvo com sucesso!</b>
    <br>
    Nome:{$_POST['nome']} E-mail:{$_POST['email']} Mensagem:{$_POST['mensagem']}
         </div>";
}

?>

<div class="row">
    <div class="col">
        <h2>Contato</h2>

        <form action="contato.php" method="post"> <!--post oculta da url-->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-warning">Salvar</button>
        </form>


    </div>
</div>


<?php
include './footer.php'; //puxa o footer
?>
