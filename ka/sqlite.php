<?php
$db = new PDO('sqlite:cafe_grupo3');
// echo $db->exec("CREATE TABLE test(id INTEGER, str TEXT)");
// echo $db->exec("INSERT INTO test VALUES(1,\"hello\")");
// echo $db->exec("INSERT INTO test VALUES(2,\"sqlite\")");
$results = $db->query("SELECT * FROM cafe_grupo3")->fetchALL(PDO::FETCH_ASSOC);
var_dump($results);
?>
