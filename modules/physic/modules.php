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
        <div class="container text-center">
            <h1 class="text-center">Обучение</h1>
            <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Направления
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Модули
                </label>
            </div>
            <div class="input-group mb-3 pl-2 pr-2">
                <input type="text" class="form-control" placeholder="Программирование на С#" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary bg-primary text-light" type="button">Найти</button>
                </div>
            </div>
            
            <div class="course-row">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Разработка игр</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Работа с искусственным интеллектом</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </button>
                </a>
            </div>
            <div class="course-row">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Создание простых десктомных приложений на C#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Работа с искусственным интеллектом</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </button>
                </a>
            </div>
            <div class="course-row">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Разработка игр</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <p class="direction-text">Работа с искусственным интеллектом</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </button>
                </a>
            </div>
            <!--<div class="grid-container">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-case btn-outline-secondary big-plate">
                        <div class="direction-progress"><span>0%</span></div>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-outline-secondary btn-case">
                        <p><span class="direction-progress">0%</span></p>
                        <p class="direction-text">Программирование на С#</p> 
                        <p class="direction-param">
                            <span>5 <img src="media/module_black.png" alt=""></span>
                            <span>24 часа <img src="media/clock_black.png" alt=""></span>
                            <span>4/22 <img src="media/test_black.png" alt=""></span>
                            <span>15/45 <img src="media/work_black.png" alt=""></span>
                        </p>
                    </button>
                </a>
            </div>-->
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>