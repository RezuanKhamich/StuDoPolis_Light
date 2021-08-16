<?php 
    include_once "config.php";

    if(isset($_POST['submit']))
    {
        $err = [];
 
        // проверям логин
        /*if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['name']))
        {
            $err[] = "Имя может состоять только из букв английского алфавита и цифр";
        }*/

        if(strlen($_POST['name']) < 3 or strlen($_POST['name']) > 30)
        {
            $err[] = "Имя должно быть не меньше 3-х символов и не больше 30";
        }

        // проверяем, не сущестует ли пользователя с таким именем
        $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_mail='".mysqli_real_escape_string($link, $_POST['mail'])."'");
        if(mysqli_num_rows($query) > 0)
        {
            $err[] = "Пользователь с таким email уже существует в базе данных";
        }

        // Если нет ошибок, то добавляем в БД нового пользователя
        if(count($err) == 0)
        {
            $start_money = 100;
            $start_lvl = 1;
            $start_box_count = 1;
            $mail = $_POST['mail'];
            $name = $_POST['name'];
            $purpose = $_POSt['purpose'];
            echo($purpose);
            // Убераем лишние пробелы и делаем двойное хеширование
            $password = md5(md5(trim($_POST['password'])));
            mysqli_query($link,"INSERT INTO users SET user_name='".$name."', user_mail='".$mail."', user_password='".$password."', user_purpose='".$purpose."'");
            $result = mysqli_query($link, "SELECT * FROM users WHERE user_mail = '$mail'");
            $myrow = mysqli_fetch_array($result);
            $id = $myrow['user_id'];
            
            mysqli_query($link,"INSERT INTO stats SET user_id='".$id."', user_name='".$name."', user_money='".$start_money."', user_lvl='".$start_lvl."', user_box_count='".$start_box_count."'");
            
            header("Location: login.php"); exit();
        }
        else
        {
            print "<div class='text-center'> <b>При регистрации произошли следующие ошибки:</b><br>";
            foreach($err AS $error)
            {
                print $error."<br> </div>";
            }
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
        <title>StuDopolis | Регистрация</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper mt-5">
        <h1 class="mt-5 service-name text-center mb-5">StuDopolis</h1>
        <form class="reg-form" id="form-reg" method="post">
            <p class="text-secondary text-center">Создай свой профиль и врывайся в безумный мир IT</p>
            <h2 class="text-center mt-5">Регистрация</h2>
            <!--<div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" required name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
            </div>-->
            <div class="form-group mb-3">
                <label for="exampleInputName1">Имя</label>
                <input type="text" class="form-control" required name="name" id="exampleInputName1"  placeholder="Рико Родригез" >
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputName1">Моя цель</label>
                <select class="form-select" aria-label="Default select example" name="purpose">
                    <option value="0" selected>Стать инди-разработчиком</option>
                    <option value="1">Создать свою студию</option>
                    <option value="2">Устроиться в компанию</option>
                    <option value="3">Создавать игры на заказ</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" required name="mail" id="exampleInputEmail1"  placeholder="Введите email" >
            </div>
            <div class="form-group mb-5">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="mb-3 w-100">
                <input class="btn btn-success w-100" type="submit" name="submit" value="Создать аккаунт" class="btn btn-primary">
            </div>
            <!--<input hidden type="checkbox" class="form-check-input" id="exampleCheck1">
            <label hidden class="form-check-label" for="exampleCheck1">Запомнить меня</label>-->
            <div class="text-center">
                <a  href="login.php" id="clickme">У меня уже есть аккаунт</a>
            </div>
        </form>
    </main>
    <?php require "footer.php"?>

</body>
</html>

