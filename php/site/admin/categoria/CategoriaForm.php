<?php
include "../db.class.php";

    $db=new db(); //objeto

    if(!empty($_POST)){
        $db->insert(['nome'=>"Aventura"]);
        echo "<b>Registro inserido com sucesso</b>";
        header("location:CategoriaList.php");
    }
    
?>


<form action="" method="post">
    <h4>Formulário Categoria</h4>

    <label for="">Nome</label> <br>
    <input type="text" name="nome"> <br>

    <button type='submit'>Salvar</button>

</form>