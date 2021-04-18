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
            <div class="row mt-3 mb-5 block">
                <div class="col block brick"><h1 class="work-plus">+</h1></div>
                <div class="col block brick"><h1 class="work-plus">+</h1></div>  
                <div class="col block brick"></div>  
                <div class="col block brick"></div>          
            </div>
            <div class="block">
                <h3 class="p-2 text-light">Разработка игр на Unity</h3>
                <div class="row">
                    <div class="col block brick">
                        <span class="new-content">*</span>
                        <h3>Создать скрипт перемещения</h3>
                        <div class="mb-4">
                            <span class="mr-2"><img class="lesson-icon" src="../media/task.png" alt=""> 7 уроков</span>
                            <span class="mr-2"><img class="lesson-icon" src="../media/clock.png" alt="" title="Время"> 3 часа</span>
                            <span class="mr-2"><img class="lesson-icon" src="../media/test.png" alt="" title="Тесты"> 4 тестов</span>
                            <span class="mr-2"><img class="lesson-icon" src="../media/work.png" alt="" title="Задания"> 3 заданий</span>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Подробней</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Создать скрипт перемещения</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Класс: <span>Unity</span></h3>
                                        <p>Создать скрипт на перемещение персонажа в Unity. Использовать rigidbody или character controller</p>
                                        <a href="#">Теория</a>
                                        <hr>
                                        <div class="work-taskcheckbox d-block">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Перемещение на WASD и стрелки 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Не более 50 строк
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                                <label class="form-check-label" for="defaultCheck3">
                                                    Был использован Input
                                                </label>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Текст скрипта</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Фото</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <input type="submit" value="Отправить" name="Отправить">
                                        </form>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        <button type="button" class="btn btn-primary">Взять заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<button class="btn btn-warning les-btn">Подробнее</button>-->
                    </div>
                    <div class="col block brick"><h1 class="work-plus">+</h1></div>  
                    <div class="col block brick"></div>  
                    <div class="col block brick"></div>   
                </div>
                       
            </div>
            <div class="row mt-3">
                <div class="block">
                    <div class="lesson-content">
                        <iframe width="600" height="225" src="https://www.youtube.com/embed/mQW6rN-hXxo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="lesson-teaser">
                            <h3 class="lesson-title">1. Основы программирования на C#</h3>
                            <p class="lesson-text">Научитесь создавать сайты, серверные приложения и десктопные приложения с помощью языка C# от Microsoft</p>
                            <br>
                            <div class="mb-4">
                                <span class="mr-2"><img class="lesson-icon" src="../media/task.png" alt=""> 7 уроков</span>
                                <span class="mr-2"><img class="lesson-icon" src="../media/clock.png" alt="" title="Время"> 3 часа</span>
                                <span class="mr-2"><img class="lesson-icon" src="../media/test.png" alt="" title="Тесты"> 4 тестов</span>
                                <span class="mr-2"><img class="lesson-icon" src="../media/work.png" alt="" title="Задания"> 3 заданий</span>
                            </div>
                            
                            <button class="btn btn-warning les-btn">Изучать</button>
                        </div>
                    </div>
                    <div class="progress less-progress" style="height:20px">
                        <div class="progress-bar less-bar bg-warning" style="width:100%;height:20px"></div>
                    </div>        
                </div>
            </div>
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>