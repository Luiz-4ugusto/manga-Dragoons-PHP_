<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>SIGAA</title>
  </head>
  <body>

  <nav>
        <ul>
          <li><a href="login.html">LOGIN</a></li>
          <li><a href="CONTATOS.HTML">CONTATOS</a></li>
          <li><a href="SOBRE_NÓS.html">SOBRE NÓS</a></li>
          <li><a href="produtos02.html">PRODUTOS</a></li>
          <li><a href="carrinho.html">CARRINHO</a></li>
          <li><a href="secret.php">EXTRA</a></li>
        </ul>
      </nav>

        
    <h2>O que fazer em Garopaba sc: praias e pontos</h2>
    <h3>Garopaba oferece praias belíssimas, algumas delas, as melhores do Brasil para práticar do surf.</h3>
    <H1>O que fazer em Garopaba SC: praias e pontos turísticos</H1>

    <p><em>Garopaba</em> oferece praias belíssimas, algumas delas, as melhores do Brasil para práticar do surf.</p>
      <p>Localizada 75 KM ao sul de Floríanopolis, Garopaba fica numa região onde a Serra do Mar encontra o Ocenao Atlântico.<br>
        Com isso as praias são marcadas por belas paisagens com morros e vegetação, algumas delas muito preservados.</p>
    <H2>Quando ir a garopaba-sc</H2>
      <p>Com o destino possui atrações diversifiicados há épocas diferentes, conforme as atividades Na alta temporada (época de .<br>
        de férias e de praia) que vai do final de desembro ao final de fevereiro os preços das hospedagens sobem bastante.</p>
      <p><strong>Para pegar a praia</strong>: Vá entre o final de dezembro e final de março</p>
      <p><strong>Para ver as baleias</strong>: Vá entre julho e novembro (o pico é em setembro) </p>
      <p><strong>Para fazer trilhas e curtis as paisagens</strong>:Em qualquer época do ano </p>
    </div>

            <img src="img/1.png" height="350" width="450">

  </body>
</html>
