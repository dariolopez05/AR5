<?php
$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$capitals =[];

for ($i=0; $i < count($city); $i++) { 
    for ($j=0; $j < 2; $j++) { 
        $capitals[$i]["country"] = $country[$i];
        $capitals[$i]["city"] = $city[$i];  
    } 
}

echo "<pre>";
var_dump($capitals);
echo "</pre>";
?>