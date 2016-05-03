<?php
/*
   Создайте массив $bmw с ячейками: model, speed, doors, year.
   Заполните ячейки значениями соответственно: “X5”, 120, 5, “2015”.
   Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными).
   Выведите значения всех трёх массивов в виде:
   Модель: model
   Скорость: speed
   Двери: doors
   Год выпуска: year
*/
echo '<h2>dz1-6</h2>';
# ------------------------------------1------------------------------------------
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
];
$toyota = [
    "model" => "Sequoia ",
    "speed" => 160,
    "doors" => 5,
    "year" => 2014
];
$opel = [
    "model" => "Astra ",
    "speed" => 110,
    "doors" => 3,
    "year" => 2016
];
# ------------------------------------2------------------------------------------
foreach($bmw as $key => $value) {
    echo "$key: $value <br>";
}
echo '---------------<br>';
foreach($toyota as $key => $value) {
    echo "$key: $value <br>";
}
echo '---------------<br>';
foreach($opel as $key => $value) {
    echo "$key: $value <br>";
}