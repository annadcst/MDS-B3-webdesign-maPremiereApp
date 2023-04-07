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
    //je definis ma vitesse max
    define('VITESSE_MAXIMUM', 50);

    //je definis ma vitesse
    $vitesse = 40;

    if($vitesse > VITESSE_MAXIMUM) {
      echo 'vous roulez trop vite';
    } else {
      echo 'vous roulez tranquillement';
    }


    echo '<br/> enchainement de conditions <br/>';
    $classeperso = 'elfe';
    if ($classeperso === 'elfe') {
      echo 'vous etes un elfe';
      echo '<br/>';
      echo 'j\'ai de grandes oreilles';
    }
    elseif ($classeperso === 'nain') {
      echo 'vous etes un nain';
      echo '<br/>';
      echo 'j\'aime la biere';
    }
    elseif ($classeperso === 'humain') {
      echo 'vous etes un humain';
      echo '<br/>';
      echo 'j\'ai le pied leger';
    }
    else {
      echo 'vous n\'existez pas';
    }
    echo '<br/>';

    switch($classeperso) {
      case 'elfe';
      echo 'vous etes un elfe';
      echo '<br/>';
      echo 'j\'ai de grandes oreilles';
      break;
      case 'nain';
      echo 'vous etes un nain';
      echo '<br/>';
      echo 'j\'aime la biere';
      break;
      case 'humain';
      echo 'vous etes un humain';
      echo '<br/>';
      echo 'j\'ai le pied leger';
      break;
    default:
      echo 'vous n\'existez pas';
    }

  ?>
</body>
</html>