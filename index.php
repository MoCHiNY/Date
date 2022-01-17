<?php
$arr = [
  'Date.php',
];

foreach ($arr as $item) {
  require_once ($item);
}

$date = new Date ('2025-12-24');
// echo $date->getDay()."<br>";
// echo $date->getMonth('ru') . "<br>";
// echo $date->getWeekDay('en') . "<br>";
// echo $date->addDay(99) . "<br>";
// $date->addDay(3). "<br>";
echo (new Date('2025-12-31'))->addYear(0)->subYear(6);


