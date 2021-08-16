<?php
session_start();

$host = 'localhost'; // адрес сервера
$database = 'studopolis'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

// Подключение к БД
$link = mysqli_connect($host, $user, $password, $database);

if (!$link) {
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}

// Ставим кодировку utf8
mysqli_set_charset($link, "utf8");
// Ставим русскую локаль
setlocale(LC_ALL, "ru_RU.UTF-8");
?>