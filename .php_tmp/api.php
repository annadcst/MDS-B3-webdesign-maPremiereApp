<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cat's API</title>
</head>
<body>

<?php

define('CAT_API_KEY', 'live_brzQjpPeQjZ1ZHaB0W56Ski9hdBPByg0o0WtG5SloheUb2P6i2xwzyftP2cKhQ4x');

// preparation de l'appel d'API
$curl = curl_init();

//parametrage de l'appel d'API
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search?has_breeds=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

// on ajoute la clef d'API optenue sur le site cat's API
// cela permet d'avoir plus de fonctionnalites sur cette API
$headers = [
  'x-api-key: ' . CAT_API_KEY
];
// on ajoute l'inforamation dans les headers de l'appel d'API
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// on execute l'appel d'API
$response = curl_exec($curl);

// on ferme la liaison avec l'API
curl_close($curl);

// on decode la reponse de l'API
$responseJson = json_decode($response);
// on extrait l'objet "cat" de la reponse d'API
$cat = $responseJson[0];
// on extrait l'url de l'image du chat
$imgUrl = $cat->url;
// DEBUG : afficher le contenu d'une variable
$breed = $cat->breeds[0];
//echo '<pre>';
//print_r($cat);
//echo '</pre>';

?>

<h1><?php echo $breed->name; ?></h1>
<p><?php echo $breed->description ?></p>
<p><i>Caractère : <?php echo $breed->temperament ?></i></p>
<p>Origine : <?php echo $breed->origin ?></p>

<img src="<?php echo $imgUrl ?>" width="400"/>

</body>
</html>