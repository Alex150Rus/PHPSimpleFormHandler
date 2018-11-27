<?php ##Демонстрация работы с массивом $_COOKIES
// Вначале счётчик равен нулю
$count = 0;
// если в Cookies что-то есть, берём счётчик оттуда

if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
$count++;

// Записываем в Cookie новое значение счётчика

setcookie("count", $count, 0x7FFFFFFF, "/");

echo $count;

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 27.11.2018
 * Time: 11:47
 */