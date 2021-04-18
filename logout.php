<?
// Страница разавторизации

// Удаляем куки
setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true); // httponly !!!

/*setcookie("money", "", time() - 3600*24*30*12, "/");
setcookie("lvl", "", time() - 3600*24*30*12, "/");
setcookie("box_count", "", time() - 3600*24*30*12, "/");*/

session_unset();
unset($_SESSION['money']);

// Переадресовываем браузер на страницу проверки нашего скрипта
header("Location: /"); exit;

?>
<form method="POST">
    Email <input name="mail" type="text" required><br>
    Пароль <input name="password" type="password" required><br>
    Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
    <input name="submit" type="submit" value="Войти">
</form>