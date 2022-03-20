<!DOCTYPE html>
<html lang="sl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Gasper Leskovec">
  <title>Anguinus ROTTWEILER</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/leskovec/css/style.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="/leskovec/slike/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap&subset=latin-ext" rel="stylesheet">
</head>


<body>

<?php
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$upIme = $_POST['upIme'];
$geslo = $_POST['geslo'];

$imeErr = "";
$priimekErr = "";
$emailErr = "";
$telefonErr = "";
$sporociloErr = "";
$gesloErr = "";
$upImeErr = "";

$napaka = 0;
?>


<div class="navigacija" id="navigacijaa">
  <a href="/leskovec/index.html" class="active">DOMOV</a>
  <a href="/leskovec/html/onas.html">O NAS</a>
  <a href="/leskovec/html/novice.html">NOVICE</a>
  <a href="/leskovec/html/psi.html">PSI</a>
  <a href="/leskovec/html/psice.html">PSICE</a>
  <a href="/leskovec/html/mladici.html">MLADIČI & NA PRODAJ</a>
  <a href="/leskovec/html/svet.html">SVET</a>
  <a href="/leskovec/html/kontakt.html">KONTAKT</a>
  <a href="/leskovec/index.html"></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i></a>
</div>


<div id="header">
  <img src="/leskovec/slike/header.png" width="100%" alt="header">
</div>


<div class="stopi_v_kontakt">
  <?php
  require 'validacija.php';

  if($napaka == 0){
  require 'pravilenodgovor.php';
  }
  else {
  require 'nepopolniobrazec.php';
  }
  ?>
</div>


<div id="footer">
  <img src="/leskovec/slike/footer.png" width="100%" alt="footer">
</div>

</body>
</html>
