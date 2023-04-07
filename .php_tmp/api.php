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

// preparation de l'appel d'API
$curl = curl_init();

//parametrage de l'appel d'API
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

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
// var_dump($cat->url);

?>

<img src="<?php echo $imgUrl ?>"/>

</body>
</html>