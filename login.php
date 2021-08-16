<?php
require_once 'config.php';

    // Функция для генерации случайной строки
    function generateCode($length=6) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
                $code .= $chars[mt_rand(0,$clen)];
        }
        return $code;
    }

    if(isset($_POST['submit']))
    {
        
        // Вытаскиваем из БД запись, у которой логин равняеться введенному
        $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_mail='".mysqli_real_escape_string($link,$_POST['mail'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        // Сравниваем пароли
        if($data['user_password'] === md5(md5($_POST['password'])))
        {
            // Генерируем случайное число и шифруем его
            $hash = md5(generateCode(10));

            if(empty($_POST['not_attach_ip']))
            {
                // Если пользователя выбрал привязку к IP
                // Переводим IP в строку
                $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
            }
            // Записываем в БД новый хеш авторизации и IP
            mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

            // Ставим куки
            setcookie("id", $data['user_id'], time()+60*60*24*30, "/");

            $result_stats = mysqli_query($link, "SELECT * FROM users WHERE user_id = '{$_COOKIE["id"]}'");
            $stats = mysqli_fetch_array($result_stats);

            setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

            // Переадресовываем браузер на страницу проверки нашего скрипта
            header("Location: checkhesh.php"); exit();
        }
        else
        {
            print '
                <div>
                    <p class="text-danger mt-5 text-center" style="margin-left: 120px;">Вы ввели неправильный логин/пароль</p>
                </div>
            ';
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>StuDopolis | Вход</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper mt-5">
        <h1 class="mt-5 service-name text-center mb-5">StuDopolis</h1>
        <form class="reg-form"  id="form-input" action="" method="post">
            <p class="text-secondary text-center">Создай свой профиль и врывайся в безумный мир IT</p>
            <h2 class="text-center mt-5">Вход</h2>
            <!--<div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" required name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
            </div>-->
            <div class="form-group mb-3">
                <label for="exampleInputName1">Email</label>
                <input type="text" class="form-control" required name="mail" id="exampleInputName1"  placeholder="Введите email" >
            </div>
            <div class="form-group mb-5">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            
            <div class="mb-3 w-100">
                <input class="btn btn-success w-100" type="submit" name="submit" value="Войти" class="btn btn-primary">
            </div>
            <!--<input hidden type="checkbox" class="form-check-input" id="exampleCheck1">
            <label hidden class="form-check-label" for="exampleCheck1">Запомнить меня</label>-->
            <div class="text-center">
                <a  href="registration.php" id="clickme">Создать аккаунт</a>
            </div>
        </form>
    </main>

    <?php require "footer.php"?>

</body>
</html>



