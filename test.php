<?php

$date = new DateTime('2014-05-14');
$date->modify('+1 day');
$result = $date->format('Y-m-d');

echo $result;
?>