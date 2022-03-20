<!DOCTYPE html>
<html lang="sl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gasper Leskovec">
    <title>Anguinus ROTTWEILER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/leskovec/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap&subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <h2>Živjo <?php echo $ime." ".$priimek?> ! Hvala vam da ste se ustavili na naši strani. Zahtevane podatke ste ustrezno izpolnili.</br>Za več novic vas bomo obvestili. Do takrat pa lep pozdrav!</h2>
    </br></br>

    <div class="nas"><h2>Lahko pa nam slediš preko socialnih omrežij in tako izveš iz prve roke!</h2></div>
    <!-- logoti omrežij -->
    <div class="logoti">
      <a href="https://sl-si.facebook.com/anguinus.rottweilers" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.instagram.com/anguinus_rottweiler/" target="_blank" class="fa fa-instagram"></a>
      <a href="https://www.youtube.com/channel/UC3EM7sV9wr00JaYcWLI1CTw" target="_blank" class="fa fa-youtube"></a>
    </div>

    <h2>Obiskali so nas že:</h2>
    <div class="obiskovalci" style="color: #2c261e;text-align: center;font-size: 28px;font-family: 'Oswald', sans-serif;">
      <?php
      require 'baza.php';
      ?>
    </div>

  </body>
</html>
