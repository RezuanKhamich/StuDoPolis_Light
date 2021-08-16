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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>StuDopolis | Главная страница</title>
    </head>
<body>
    
    <?php require "header.php"?>
    <main class="content-wrapper">
        <section class="d-flex justify-content-around main-offset__section">
            <div class="mt-5">
                <h1 class="mt-5 service-name">StuDopolis</h1>
                <h5 class="mt-3">Изучай мир, играя</h5>
                <p class="mt-5">Выбери свое направление</p>
                <div>
                    <a class="btn btn-outline-success" href="login.php">JavaScript</a>
                    <a class="btn btn-outline-success" href="login.php">C#</a>
                    <a class="btn btn-outline-success" href="login.php">GameDev</a>
                    <a class="btn btn-outline-success" href="login.php">Unity</a>
                    <a class="btn btn-outline-success" href="login.php">FrontEnd</a>
                </div>
                <a class="mt-3 btn btn-success w-75 m-auto" href="login.php">Начать</a>
            </div>
            <img class="main-index__img" src="../media/back.png" alt="">
        </section>
        <section class="d-flex justify-content-around main-offset__section">
            <div class="text-center main-card">
                <img class="main-circle__img mb-3" src="../media/learn_new.png" alt="">
                <h5>Обучайся бесплатно</h5>
                <p class="text-secondary">Бесплатный доступ ко всем материалам</p>
            </div>
            <div class="text-center main-card">
                <img class="main-circle__img mb-3" src="../media/rating_new.png" alt="">
                <h5>Играй и учись</h5>
                <p class="text-secondary">Игровая форма эффективней</p>
            </div>
            <div class="text-center main-card">
                <img class="main-circle__img mb-3" src="../media/freelance_new.png" alt="">
                <h5>Создавай проекты</h5>
                <p class="text-secondary">Собери свое портфолио из крутых проектов</p>
            </div>
            <div class="text-center main-card">
                <img class="main-circle__img mb-3" src="../media/help_new.png" alt="">
                <h5>Общайся, помогай</h5>
                <p class="text-secondary">Играй, общайся со своими друзьями</p>
            </div>
        </section>
        <section class="main-offset__section text-center">
            <h1 class="section-title">Стань фрилансером</h1>
            <hr class="section-line">
            <p class="text-center text-secondary mb-5">Выполняй заказы, повторяй изученный материал и прокачай свои навыки</p>
            <div class="d-flex justify-content-around mb-5">
                <div class="text-center main-card">
                    <img class="main-circle__img mb-3" src="../media/learn_new.png" alt="">
                    <h5>1. Изучай материал</h5>
                </div>
                <span class="main-hor__line"></span>
                <div class="text-center main-card">
                    <img class="main-circle__img mb-3" src="../media/freelance_new.png" alt="">
                    <h5>2. Выполняй заказы</h5>
                </div>
                <span class="main-hor__line"></span>
                <div class="text-center main-card">
                    <img class="main-circle__img mb-3" src="../media/coin_new.png" alt="">
                    <h5>3. Получай вознаграждения</h5>
                </div>
            </div>
            <a class="btn btn-success w-25" href="login.php">Взять заказ</a>
        </section>
        <section class="main-offset__section text-center">
            <h1 class="section-title">Собери портфолио</h1>
            <hr class="section-line">
            <p class="text-center text-secondary mb-5">Выполняй проекты и собери свое портфолио</p>
            <div class="mb-5 ">
                <div class="d-flex w-75 m-auto">
                    <img class="avatar-img" src="../media/player-head.png" alt="">
                    <div class="d-block">
                        <h3>Рико Родригез</h3>
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-outline-success m-1">Спорт</button>
                            <button class="btn btn-outline-success m-1">Программирование</button>
                            <button class="btn btn-outline-success m-1">Отдых</button>
                            <button class="btn btn-outline-success m-1">Чтение</button>
                            <button class="btn btn-outline-success m-1">Игры</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-75 m-auto justify-content-around">
                    <div class="d-block w-50 mr-5">
                        <h6>Мои навыки</h6>
                        <div class="border border-secondary rounded d-flex justify-content-around p-2 mb-3">
                            <div class="text-center ">
                                <p class="skill-card__circle m-auto">27%</p>
                                <p class="mb-0">C#</p>
                            </div>
                            <div class="text-center ">
                                <p class="skill-card__circle m-auto">87%</p>
                                <p class="mb-0">Blender</p>
                            </div>
                            <div class="text-center ">
                                <p class="skill-card__circle m-auto">15%</p>
                                <p class="mb-0">Unity</p>
                            </div>
                            <div class="text-center ">
                                <p class="skill-card__circle m-auto">20%</p>
                                <p class="mb-0">Photoshop</p>
                            </div>
                        </div>
                        <h6>Мои проекты</h6>
                        <div class="border border-secondary rounded d-flex justify-content-around p-2">
                            <div class="text-center">
                                <img class="portfolio__img border border-secondary rounded" src="../media/freelance_new.png" alt="">
                                <p class="main-project-description mb-0">Платформер на Android</p>
                            </div>
                            <div class="text-center ">
                                <img class="portfolio__img border border-secondary rounded" src="../media/freelance_new.png" alt="">
                                <p class="main-project-description mb-0">Нейронная сеть</p>
                            </div>
                            <div class="text-center ">
                                <img class="portfolio__img border border-secondary rounded" src="../media/freelance_new.png" alt="">
                                <p class="main-project-description mb-0">3D Модель города</p>
                            </div>
                            <div class="text-center ">
                                <img class="portfolio__img border border-secondary rounded" src="../media/freelance_new.png" alt="">
                                <p class="main-project-description mb-0">3D Survival RPG</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-block">
                        <h6>Диаграмма навыков</h6>
                        <img class="main-diagramm" src="../media/radar-diagram.png" alt="">
                    </div>
                    
                </div>
            </div>
            <a class="btn btn-success w-25" href="login.php">Собрать портфолио</a>
        </section>
    </main>
    <?php require "footer.php"?>
</body>

</html>