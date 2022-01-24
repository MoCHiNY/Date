<?php
$arr = [
  'Date',
  'Tag',
];

foreach ($arr as $item) {
  require_once($item . ".php");
}

$tag = new Tag('div');
echo $tag->open() . "Привіт". $tag->close();