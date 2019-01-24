<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 21/01/2019
 * Time: 11:59
 */



$ville=$_GET['ville'];

$curl = curl_init();


curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://api.openweathermap.org/data/2.5/weather?q='. $ville .',fr&appid=78b728174e7951bfc687c178f3c871eb',
    CURLOPT_USERAGENT => 'dede',
    CURLOPT_POST => 1,



));

$resp = curl_exec($curl);



curl_close($curl);


echo json_encode($resp);