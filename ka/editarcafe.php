<?php
  $host = '216.158.230.154';
  $dbname = 'wsboxnet_pibd';
  $username = 'wsboxnet_pibd';
  $password = 'wsboxnet_pibd';

  $pdo = new PDO("sqlite:host=$host:$dbname",$username,$password);
?>
<html>
  <head>
    <title= Editar Café</title>
<head>
  <body>
    <form action="atualizarcafe.php" method="post">
      <select name="cafe">
        <option value="1">Doppio</option>
        <option value="2">Machiatto</option>
        <option value="3">Cortado</option>
      </select>
      <textarea name="descricao"></textarea>
      <input type="submit">
    </form>
    
  </body>
</html>