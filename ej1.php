<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$cityArray = explode(',', $city);
$capitals = [];

for ($i=0; $i < count($cityArray); $i++) { 
    $country["city"] = $cityArray[$i];
    array_push($capitals, $country); 
}

var_dump($cityArray);
?>