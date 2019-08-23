<!Doctype html>

<html>
  <head>
    <title>pagina inicial</title>
    <meta charset="utf-8">
    <link stylesheet="css/index.css">
    <!ainda não estou usando jquerry!script src="jquery-1.11.3.min.js"></script>
  
  </head>
  
  <body>
      <form method="POST" action="gravarCadastro.php">
          <label>Email</label>
            <input name="UsrEmail" id="UsrEmail" type="email" placeholder=""><br>
          <label>Senha</label>
            <input name="UsrSenha" id="UsrSenha" type="password" placeholder=""><br>
          <label>Nome</label>
            <input name="Nome" id="Nome" type="text" placeholder=""><br>
            <button type="submit">Gravar</button>
          
      </form>
      
    
  </body>

</html>