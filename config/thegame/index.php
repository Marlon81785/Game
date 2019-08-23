<!Doctype html>

<html>
  <head>
    <title>pagina inicial</title>
    <meta charset="utf-8">
    <link stylesheet="css/index.css">
    <!ainda não estou usando jquerry!script src="jquery-1.11.3.min.js"></script>
  
  </head>
  
  <body>
      joguinho blablabla<br>
      <button type="submit" onclick="clicou()">ENTRE</button>
      <button type="submit" onclick="clicou2()">CADASTRE</button><br>
      imagem do joguinho e descrição<br>
      cadastre para jogar

      <script>
          function clicou(){
              location.href='config/entrar.php';
              

          }

          function clicou2(){
              location.href='config/cadastro.php';

          }
      </script>
  </body>

</html>