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
        <div class="container">
            <h1 class="text-center">Заказы</h1>
            <div class="filter-container">
                <div>
                    <button class="btn btn-outline-info">Программирование</button>
                    <button class="btn btn-outline-info">Математика</button>
                    <button class="btn btn-outline-info">Моделирование</button>
                </div>
                <div>
                    <button class="btn btn-outline-info">Физика</button>
                    <button class="btn btn-outline-info">Геймдизайн</button>
                </div>
            </div>
            <section>
                <button class="work-block btn btn-outline-secondary mb-3">
                    <p><span>#Программирование #Python</span> </p>
                    <h3>Создание курса по Математика</h3>
                    <p class="work-info">
                        <span>Сложно<img src="media/hard.png" alt=""></span>
                        <span>1500<img src="media/virtMoney.png" alt=""></span>
                        <span>20 мин<img src="media/clock_black.png" alt=""></span>
                    </p>
                </button>
                <button class="work-block btn btn-outline-secondary mb-3">
                    <p><span>#Программирование #Python</span> </p>
                    <h3>Создание курса по Математика</h3>
                    <p class="work-info">
                        <span>Сложно<img src="media/hard.png" alt=""></span>
                        <span>1500<img src="media/virtMoney.png" alt=""></span>
                        <span>20 мин<img src="media/clock_black.png" alt=""></span>
                    </p>
                </button>
                <button class="work-block btn btn-outline-secondary mb-3">
                    <p><span>#Программирование #Python</span> </p>
                    <h3>Создание курса по Математика</h3>
                    <p class="work-info">
                        <span>Сложно<img src="media/hard.png" alt=""></span>
                        <span>1500<img src="media/virtMoney.png" alt=""></span>
                        <span>20 мин<img src="media/clock_black.png" alt=""></span>
                    </p>
                </button>
                <button class="work-block btn btn-outline-secondary mb-3">
                    <p><span>#Программирование #Python</span> </p>
                    <h3>Создание курса по Математика</h3>
                    <p class="work-info">
                        <span>Сложно<img src="media/hard.png" alt=""></span>
                        <span>1500<img src="media/virtMoney.png" alt=""></span>
                        <span>20 мин<img src="media/clock_black.png" alt=""></span>
                    </p>
                </button>
            </section>
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>