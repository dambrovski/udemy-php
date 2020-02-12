<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");



$login = "juca";
$password = "2321567";
$id = 2;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo $login . "<br>";

echo "Dados alterados com sucesso!" . "<br>";

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        if ($value == "juca") {
            foreach ($row as $key => $value) {
                echo $key . ": " . $value . "<br>";
            }
        } else {
            echo "";
        }
    
    }
}


?>