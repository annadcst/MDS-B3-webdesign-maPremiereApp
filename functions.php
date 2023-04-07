<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  //procedure
    function afficherLeTexte($texte) {
      echo $texte;
      echo '<br/>';
    }

  //fonction (ou methode)
    function additionner($nombre1, $nombre2) {
      return $nombre1 + $nombre2;
    }

    function mettreEnMaj($texte) {
      return strtoupper($texte);
    }

    function afficherTabMulti($nombre) {
      $resultat ='';
      for ($i = 1; $i <= 10; $i ++) {
        $resultat = $resultat . $i . 'x' . $nombre . '=' . $i * $nombre . '<br/>';
      }
      return $resultat;
    }

    afficherLeTexte('TOTO');
    afficherLeTexte(additionner(3245678, 5678765));
    afficherLeTexte(mettreEnMaj('super'));
    afficherLeTexte(afficherTabMulti(6));
  ?>
</body>
</html>