<?php
$servername = "216.158.230.154";
$username = "wsboxnet_pibd";
$password = "wsboxnet_pibd";
$dbname = "wsboxnet_pibd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
        $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO cafe_grupo1 (bebida, descricao) 
VALUES (:bebida, :descricao)");
    $stmt->bindParam(':bebida', $bebida);
    $stmt->bindParam(':descricao', $descricao);
    
// insert a row
    $bebida = $_POST["bebida"];
    $descricao = $_POST["descricao"];
    $stmt->execute();


    echo "Dados enviados com sucesso";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>