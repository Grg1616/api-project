<?php
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.thecatapi.com/v1/breeds",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "x-api-key: live_n6ZGlRsQ0V3n0NuczNtj8RzFaA2u7Kk3Evn3EJ8b4I7NvGbjYdQtmr6jlon3pK6k"
  ]
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
?>
