<form method="POST">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php



if (isset($_POST["busca"])){
    echo $_POST["busca"];
}


?>