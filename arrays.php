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
    //je declare un tableau
    $montableau = array('voiture', 5, 'toto', 78, 'document');
    echo '<pre>';
      print_r($montableau);
    echo '</pre>';

    echo $montableau[2];
    echo '<br/>';

    foreach ($montableau as $valeur) {
      echo $valeur .'<br/>';
    }

    $montableauassociatif = array(
      'clef' => 'valeur',
      'nom' => 'Smith',
      'prenom' => 'John',
      'age' => 25,
    );

    echo '<pre>';
    print_r($montableauassociatif);
    echo '</pre>';

    echo $montableauassociatif['prenom'];
    echo '<br/>';

    $tailledemontableau = sizeof($montableauassociatif);
    echo $tailledemontableau;

    for ($i = 0; $i < $tailledemontableau; $i ++) {
      echo '<br/>';
      echo $i;
    }

  ?>
</body>
</html>