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
        <title>MyPage</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <div class="d-flex first-blocks">
                <div class="d-flex user-block">
                    <div class="jumbotron user-jumbot">
                        <img class="user-photo" src="media/photo.jpg" alt="">
                    </div>
                    <div class="jumbotron d-flex about-jumbot">
                        <div class="about-block">
                            <h4>Резуан Хамуков</h4>
                            <hr>
                            <p>Компания <span class="badge badge-secondary">GoGame_Project</span></p>
                            <p>Уровень <span class="badge badge-secondary">10</span></p>
                            <hr>
                            <p>Хочешь мира готовься к войне</p>
                            <p>Город: <span>Москва</span></p>
                            <p>Возраст: <span>24 года</span></p>
                            <p>О себе: <span>Делаю сайт</span></p>
                        </div>
                    </div>
                </div> 
                <div class="jumbotron items-jumbot">
                    <h4>Предметы</h4>
                    <hr>
                    <table class="table-bordered table-dark tables">
                        <tbody>
                            <tr>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                            </tr>
                            <tr>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                            </tr>
                            <tr>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                                <td><img class="item-img" src="../media/armor.png" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex">
                <div class="jumbotron rate-jumb">
                    <div class ="container rate-block">
                        <h4>Рейтинг</h4>
                        <hr>
                        <h1><span class="badge badge-secondary">75</span></h1>
                        <table class="table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Unity</th>
                                    <th scope="col">Unreal Engine</th>
                                    <th scope="col">2D Art</th>
                                    <th scope="col">3D Modeling</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge badge-warning">30</span></td>
                                    <td><span class="badge badge-warning">40</span></td>
                                    <td><span class="badge badge-warning">0</span></td>
                                    <td><span class="badge badge-warning">5</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="jumbotron completion-jumb">    
                    <div class ="container rate-block">
                            <h4>Прохождение</h4>
                            <hr>
                            <table class="table-bordered table-dark">
                                <tbody>
                                    <tr>
                                        <td class="td-completion">Unity</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-completion"> Unreal Engine</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-completion">2D Art</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100">74%</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-completion">3D Modeling</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>       
                </div>
                <div class="jumbotron achive-jumb">
                    <h4>Достижения</h4>
                    <hr>
                    <div class="d-flex">
                        <img src="media/1.png" alt="" class = "achiv-img">
                        <img src="media/2.png" alt="" class = "achiv-img">
                        <img src="media/3.png" alt="" class = "achiv-img">
                        <img src="media/1.png" alt="" class = "achiv-img">
                        <img src="media/2.png" alt="" class = "achiv-img">
                        <img src="media/3.png" alt="" class = "achiv-img">
                        <img src="media/1.png" alt="" class = "achiv-img">
                        <img src="media/2.png" alt="" class = "achiv-img">
                    </div>
                </div>
            </div>

            <div class="jumbotron align-center photo-jumb">
                <h4>Фото</h4>
                <div class="row">
                    <div class="col-3 bg-warning video-block">Фото 1</div>
                    <div class="col-3 bg-white video-block">Фото 2</div>
                    <div class="col-3 bg-white video-block">Фото 3</div>
                </div>
            </div>
            <!--<div class="jumbotron align-center">
                <h3>Обучение</h3>
                <div class="row">
                    <div class="col-3 bg-warning video-block">Видео 1</div>
                    <div class="col-3 bg-white video-block">Видео 2</div>
                    <div class="col-3 bg-white video-block">Видео 3</div>
                </div>
                <div class="row">
                    <div class="col-3 bg-white video-block">Видео 4</div>
                    <div class="col-3 bg-warning video-block">Видео 5</div>
                    <div class="col-3 bg-warning video-block">Видео 6</div>
                </div>
            </div> -->

        </div>
        
    </main>

    <?php require "footer.php"?>
    
</body>
</html>