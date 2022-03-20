<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2> Izpolnili ste nepopolni obrazec. V obrazcu smo našli toliko napak: <?php echo $napaka?></br></br>
      <?php
      echo $emailErr."<br>".$telefonErr."<br>".$sporociloErr."<br>".$gesloErr."<br>".$upImeErr;
      ?>
    </h2>

  </body>
</html>
