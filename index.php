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

            // Убераем лишние пробелы и делаем двойное хеширование
            $password = md5(md5(trim($_POST['password'])));
            mysqli_query($link,"INSERT INTO users SET user_name='".$name."', user_mail='".$mail."', user_password='".$password."'");
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame | Регистрация</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <img class="mainphoto" src="../media/mainphoto.png" alt="">
        <div class="container-fluid" style="display: flex;">
            <div class="main-block">
                <div class="mainlogo-block">
                    
                    <h1 class="mainlogo-title"><img class="mainlogo-img" src="../media/logo.png" alt="">GoGame</h1>
                </div>
                <div>
                    <h3 class="maintext-top">Открой мир разработки игр с <br>GoGame</h3>
                    <h5 class="maintext-bottom">Изучай программирование, 3D моделирование <br> и 2D рисунок в игровой форме. <br>Изучай GameDev, играя!</h5>
                </div>
            </div>
            
            <form class="reg-form" id="form-reg" method="post" >
                <h2 class="text-center">Регистрация</h2>
                <div class="form-group">
                    <label for="exampleInputname1">Имя</label>
                    <input type="name" class="form-control" required  name="name" id="exampleInputname1" placeholder="Виктор Цой">
                    <small id="emailHelp" class="form-text text-muted">Ваши данные не передаются 3-м лицам.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputmail1">Email</label>
                    <input type="email" class="form-control" required name="mail" id="exampleInputmail1"  placeholder="Введите email">
                </div>
                <!--<div class="form-group">
                    <label for="exampleInputEmail1" >Email</label>
                    <input type="email" class="form-control" required  name="mail" id="mailReg" placeholder="Введите email">
                </div>-->
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control" required  name="password" id="exampleInputPassword1" placeholder="Пароль">
                </div>
                
                <div class="form-check">
                    <span>
                        <p>Уже есть аккаунт? <a class="enter-link" href="login.php" id="enter">Войти</a></p>
                    </span>
                </div>
                <div class="text-right">
                    <input type="submit" name="submit" class="btn btn-primary" value="Создать" style="width:150px">
                </div>
            </form>
            <!--<a href="firstpage.php" style="color:black;">Давид</a>
            <a href="game.php" style="color:black;">Игра</a> -->
        </div>
        
    </main>

    <?php require "footer.php"?>

</body>
</html>