<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$dataArray = explode(';', $data);
$capitales = [];
$final = [];

foreach ($dataArray as $parejas) {
    $capitales = explode(',', $parejas);
    $final['country'] = $capitales[1];
    $final['capital'] = $capitales[0];
    echo "<pre>";
    var_dump($final);
    echo "</pre>";
}


?>