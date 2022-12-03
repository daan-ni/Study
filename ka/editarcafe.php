<!DOCTYPE html>
<html>
<head>
<title>Formulário</title>
</head>
<style>
  textarea {
    width:40%;
    height:30vh;
    margin-top:1rem;
    margin-bottom:1rem;
  }

  button {
    width:10rem;
    padding:1rem;
    margin-top:0.5rem;
  }

  select {
    width:10rem;
    padding:0.5em;
  }
</style>
<body>
  <div class="form">
    <form class="container-form" action="atualizarcafe.php" method="post">
      <select name="bebida">
        <option value="Doppio">Doppio</option>
        <option value="Macchiato">Macchiato</option>
        <option value="Cortado">Cortado</option>
        <option value="Cappuccino">Cappuccino</option>
        <option value="Americano">Americano</option>
        <option value="Mocha">Mocha</option>
        <option value="Latte">Latte</option>
        <option value="Breve">Breve</option>
        <option value="Mocha Breve">Mocha Breve</option>
        <option value="Flat White">Flat White</option>
        <option value="Café BomBón">Café BomBón</option>
      </select><br>
      <textarea name="descricao"></textarea><br>
      <button name='botao' type='submit'>Enviar</button>
    </form>
  </div>
</body>
</html>