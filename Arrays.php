<?php
$My_list = array("Apple", "Orange", "Peas", "Pineapple"); //Indexed array

$list_count = count($My_list);

foreach ($My_list as $tunda) {
    echo $tunda, " " . "\n";
}

for ($k = 0; $k < $list_count; $k++) {
    echo $My_list[$k], " ", "\n";
}


// echo $My_list[0], "\n";
// $My_list[2] = "Avocado";

// echo count($My_list), "\n";

// echo $My_list[2], "\n";
// foreach ($My_list as $tunda) {
//     echo $tunda, " ";
// }

//ASSOCIATE ARRAY
$cars = array("First" => "Audi", "Second" => "Mercedes", "Third" => "Porsche Cayenne", "Fourth" => "Maserati");
echo $cars["First"];

foreach ($cars as $car => $car_name) {
    echo "My $car  car is $car_name \n";
}

$keys = array_keys($cars);
$total = count($keys);

for ($k = 0; $k < $total; $k++) {
    echo $keys[$k], "--->", $cars[$keys[$k]], "\n";
}

//Multi-dimensional arrays
$countries = array(
    array("Name" => "Kenya", "Capital" => "Nairobi", "Continent" => "Africa"),
    array("Name" => "Germany", "Capital" => "Berlin", "Continent" => "Europe"),
    array("Name" => "Japan", "Capital" => "Tokyo", "Continent" => "Asia"),
    array("Name" => "Mexico", "Capital" => "Mexico City", "Continent" => "North America"),
    array("Name" => "Argentina", "Capital" => "Buenos Aires", "Continent" => "South America"),
);
echo $countries[0]["Name"], "\n";

$id = array_keys($countries);
$jumla = count($id);

for ($k = 0; $k < $jumla; $k++) {
    echo $id[$k] . "\n";
    foreach ($countries[$id[$k]] as $code => $country) {
        echo $code . "--->" . $country . "\n";
    }
}

$nations = array(
    "One" => array("Name" => "Kenya", "Capital" => "Nairobi", "Continent" => "Africa"),
    "Two" => array("Name" => "Germany", "Capital" => "Berlin", "Continent" => "Europe"),
    "Three" => array("Name" => "Japan", "Capital" => "Tokyo", "Continent" => "Asia"),
    "Four" => array("Name" => "Mexico", "Capital" => "Mexico City", "Continent" => "North America"),
    "Five" => array("Name" => "Argentina", "Capital" => "Buenos Aires", "Continent" => "South America"),
);

$kt = array_keys($nations);
$yote = count($kt);

for ($k = 0; $k < $yote; $k++) {
    echo $kt[$k] . "\n";
    foreach ($nations[$kt[$k]] as $nchi => $jina) {
        echo $nchi . "--->" . $jina . "\n";
    }
}

?>