<?php
$cityKey = 31868;
$apiKey = 'Dyd8r7xElmHtJuRka4vBindpQ2SsdssL';
$url = "http://dataservice.accuweather.com/currentconditions/v1/31868?apikey=Dyd8r7xElmHtJuRka4vBindpQ2SsdssL&language=en-us&details=true";
$client = curl_init($url);
//Initializes a new CURL and prepares for next step
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
//Set an option for a CURL transfer
$response = curl_exec($client);
//Executes the CURL and return the response, normally a JSON/string
curl_close($client);
//Closes a CURL session and frees all resources.
echo $response;
//Returns the information to the client