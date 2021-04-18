<?php 
    include_once "config.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
        <div class="1">
            <h1>Летний лагерь от школы разработки игр GoGame</h1>
            <p>7 дней полного погружения в мир GameDev</p>
            <span>Бесплатный онлайн-лагерь</span>
            <span>Старт 20.07.2020</span>
            <p>Запишись сейчас и получи секретный гайд и ранний доступ!</p>
            <button>Записаться</button>
        </div>
        <div class="jumbotron 2">
            <h1>Для кого мы запускаем лагерь?</h1>
            <div class="row">
                <div class="col-2">Тебе интересно играть в игры, ты мечтаешь создать свою игру</div>
                <div class="col-2">Тебе нравится следить за новостями игровой индустрии</div>
                <div class="col-2">Хочешь попробовать себя в самой интересной сфере</div>
            </div>
            <div class="row">
                <div class="col-2">Ты красавчик, который чисто решил залететь на топ марафон</div>
                <div class="col-2">Этот марафон подойдет детям, склонным к программированию</div>
            </div>
        </div>
        <div class="2">
            <h1>Игра, которую соберешь за 7 дней</h1>
            <video width="400" height="300" controls="controls" poster="video/duel.jpg">
                <source src="https://www.youtube.com/watch?v=YApuEWtG30w" type='video/ogg; codecs="theora, vorbis"'>
                <source src="https://www.youtube.com/watch?v=YApuEWtG30w" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="https://www.youtube.com/watch?v=YApuEWtG30w" type='video/webm; codecs="vp8, vorbis"'>
                Тег video не поддерживается вашим браузером. 
                <!--<a href="video/duel.mp4">Скачайте видео</a>-->
                <a href="https://www.youtube.com/watch?v=YApuEWtG30w">Скачайте видео</a>
            </video>
            <p>7 дней полного погружения в мир GameDev</p>
            <span>Бесплатный онлайн-лагерь</span>
            <span>Старт 20.07.2020</span>
            <p>Запишись сейчас и получи секретный гайд и ранний доступ!</p>
            <button>Записаться</button>
        </div>
            <a href="mypage.php">MyPage</a>
            <a href="reg.php">Reg</a>
            <a href="learning.php">Learning</a>
            <a href="register.php">reg</a>
            <a href="login.php">log</a>
            <a href="shop.php">shop</a>
            <a href="message.php">Сообщения</a>
            <a href="logout.php">Выйти</a>
            <a href="list-love.php">love</a>
            <p>Боксы</p>
            <button onclick="Spin()">Открыть</button>
        </div>
        
    </main>
    
    <?php require "footer.php"?>
    
</body>
</html>