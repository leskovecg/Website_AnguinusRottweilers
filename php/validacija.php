<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //
    //validacija

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "";
      }
      else {
        $emailErr = "* Email ".$email." ni pravilen.\n";
        $napaka++;
      }





      if (isset($telefon)){
        if (is_numeric($telefon)) {
          $telefonErr = "";
        }
        else {
          $telefonErr = "* Napaka pri tel. št.! Vnesti morate številke.";
          $napaka++;
        }
      }





      if (strlen($_POST["sporocilo"]) < 20)
      {
         $sporociloErr = "* Sporočilo je prekratko, minimalna dolžina sporočila je 20 (200 max).";
         $napaka++;
      }
      elseif(strlen($_POST["sporocilo"]) > 200)
      {
         $sporociloErr = "* Sporočilo je predolgo, maksimalna dolžina sporočila je 200.";
         $napaka++;
      }






      if (strlen($_POST["upIme"]) < 5)
      {
         $upImeErr = "* Vaše uporabniško ime je prekratko (pričakovana dolžina je od 5 do 12 znakov).";
         $napaka++;
      }
      elseif(strlen($_POST["upIme"]) > 12)
      {
         $upImeErr = "* Vaše uporabniško ime je predolgo (pričakovana dolžina je od 5 do 12 znakov).";
         $napaka++;
      }






      if (strlen($_POST["geslo"]) < 5)
      {
         $gesloErr = "* Vaše geslo je prekratko (pričakovana dolžina je od 5 do 12 znakov).";
         $napaka++;
      }
      elseif(strlen($_POST["geslo"]) > 12)
      {
         $gesloErr = "* Vaše geslo je predolgo (pričakovana dolžina je od 5 do 12 znakov).";
         $napaka++;
      }


    //konec validacije
    //
    //
    ?>

  </body>
</html>
