<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://seller-api.takealot.com/v2/offers?Key=b34c6e60420aeec262346d1d5a7384da1bba3d474f09ff299fdd8325f3f16e6e75787d5b0af0c95b006bed7163f005fc554e7b59309a8395adb58c4eb4e6477b",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$client = new http\Client;
$request = new http\Client\Request;
$request->setRequestUrl('https://seller-api.takealot.com/v2/offers?Key=b34c6e60420aeec262346d1d5a7384da1bba3d474f09ff299fdd8325f3f16e6e75787d5b0af0c95b006bed7163f005fc554e7b59309a8395adb58c4eb4e6477b');
$request->setRequestMethod('GET');
$request->setOptions(array());

$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();
?>
