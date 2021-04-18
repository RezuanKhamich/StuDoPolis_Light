<?php 
    include_once "../config.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "../header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text_main-title">Открытие онлайн-лагеря GoGame</h1>
            <hr>
            <h4>Предисловие</h4>
                <br>
                <p>Приветствуем тебя, друг! Этот сайт - платформа обучения школы разработки игр GoGame.
                    Здесь ты найдёшь наши видеоуроки, домашние задания, систему рейтинга (а как же без мотивации?) и достижений, чтобы наши ученики бросали себе из раза в раз более сложные вызовы. Мы надеемся, наш формат обучения придётся тебе по вкусу 🙌🏻
                    Изучай сайт, учись, вдохновляйся и никогда не сдавайся!
                    一 команда GoGame
                </p>
                <h4>Лекция "Создание GameDev студии"</h4>
                <br>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qdB_eK2WzB0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>

                <h4>В 21:00 | Практика "Знакомство с Unity ЧАСТЬ 1"</h4>
                <br>  
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6OogtzbyLHU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>
                <h4>Практика "Знакомство с Unity ЧАСТЬ 2"</h4>
                <br>  
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nNLU7nnQ9Pc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>  
                <h4>Практика "Знакомство с Unity ЧАСТЬ 3"</h4>
                <br>  
                <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/okEUVrrPIB4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <br>       
                    <!--<?php require "../test1.php"?>-->

                    <div class="jumbotron">
                        <h3>Домашнее задание</h3>
                        <p class="text-left">
                        <br>1) Скачать готовый ассет на AssetStore <kbd>1 балл</kbd>
                        <br>2) Повторить сцену с ракетой, где вы используете скаченный ассет из AssetStore или объекты из выданного ассета <kbd>2 балла</kbd>
                        <br>
                        <br><strong>Повышенная сложность:</strong> Сделать игру на поиск предметов с помощью sprite-mask <kbd>2 балла</kbd>
                        <br> Самому креативному дз в команде <kbd>2 балла</kbd>
                        </p>
                        <h5>Награда</h5>
                        <div class="d-flex text-center">
                            
                            <h5 class="lvl-stats" style="margin-right:10px;">Уровень +1</h5>
                            
                            <img class="box-img-hed" src="../media/pngwave.png" alt="">
                            <h5 class="gem-stats">+600</h5>
                            <!--<img class="box-img-hed" src="../media/box.png" alt="">
                            <h5 class="gem-stats last-stats">1</h5>-->
                        </div>
                        <a href="https://cloud.mail.ru/public/4LHH%2FnH1JwN8UU"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Скачать ассет
                        </button></a>
                        <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Получить награду
                        </button>-->
                        <h5>ДЗ отправить на почту <a href="#" style="color: #007bff;">"gogame_school@mail.ru"</a></h5>
                    </div>
                   
                </div>
        </div>
        
    </main>

    <?php require "../footer.php"?>
    
</body>
</html>