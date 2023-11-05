<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryArray = explode(',', $country);
$countrys = [];

for ($i=0; $i < count($countryArray); $i++) {
    $capital["country"] = $countryArray[$i];
    array_push($capitals, $capital);
}

var_dump($countryArray);
?>