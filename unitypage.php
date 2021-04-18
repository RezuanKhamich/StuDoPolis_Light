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
    
    <?php
        
    ?>

    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Летний онлайн-лагерь 2020</h1>
            <?php
                if(!isset($_COOKIE['id'])){
                    echo '
                    <br>
                    <div class="d-flex border">
                        <h3 style="margin:auto;">Авторизуйтесь для прохождения обучения</h3>
                        <button class="btn btn-warning" onclick="location.href = \'login.php\'">Войти</button>
                    </div>
                    ';
                }
            ?>
            <div class="row mt-5 justify-content-center">
            <div class="vl"></div>
                <div class="card-box free-content">
                    <?php
                        if(true){
                            echo'
                                <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                <h5 class="card-title">День 1</h5>
                            ';
                        }else{
                            echo'
                                <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                <h5 class="card-title">День 1</h5>
                            ';
                        }
                    ?>
                </div>
            </div>
            
            <div class="row mt-5 justify-content-center">
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <h5 class="card-title">C# Урок 1</h5>
                    </form>
                </div>
                <div class="card-box pay-content">
                    <?php
                            if(true){
                                echo'
                                    <a href="blocks/lesson2.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                    <h5 class="card-title">День 2</h5>
                                ';
                            }else{
                                echo'
                                    <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                    <h5 class="card-title">День 2</h5>
                                ';
                            }
                        ?>
                </div>
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <h5 class="card-title">Unity</h5>
                    <!--<form class="form-buy" action="#">
                        <button type="submit" class="btn btn-success buy-card">
                            <img class="box-img-hed buy" src="../media/pngwave.png" alt="">
                            100
                        </button>-->
                    </form>
                    
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <h5 class="card-title">C# Урок 2</h5>
                    </form>
                </div>
                <div class="card-box free-content">
                    <?php
                        if(true){
                            echo'
                                <a href="blocks/lesson3.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                <h5 class="card-title">День 3</h5>
                            ';
                        }else{
                            echo'
                                <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                <h5 class="card-title">День 3</h5>
                            ';
                        }
                    ?>
                </div>
                <div class="card-box pay-content" style="filter:grayscale(100%); opacity: 0;
                        border: none;
    background-color: white;">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0;
                        border: none;
    background-color: white;" alt="">

                    </form>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <h5 class="card-title">2D Ассет</h5>
                    </form>
                </div>
                <div class="card-box free-content">
                    <?php
                        if(true){
                            echo'
                                <a href="blocks/lesson4.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                <h5 class="card-title">День 4</h5>
                            ';
                        }else{
                            echo'
                                <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                <h5 class="card-title">День 4</h5>
                            ';
                        }
                    ?>
                </div>
                <div class="card-box pay-content" style="filter:grayscale(100%); opacity: 0;
                        border: none;
    background-color: white;">
                    <img class="courseblock-img" src="media/cardImg.jpg"  style="filter:grayscale(100%); opacity: 0;
                        border: none;
    background-color: white;" alt="">

                    </form>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box free-content">
                    <?php
                        if(true){
                            echo'
                                <a href="blocks/lesson5.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                <h5 class="card-title">День 5</h5>
                            ';
                        }else{
                            echo'
                                <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                <h5 class="card-title">День 5</h5>
                            ';
                        }
                    ?>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box free-content">
                    <?php
                        if(true){
                            echo'
                                <a href="blocks/lesson6.php"><img class="courseblock-img" src="media/cardImg.jpg" alt=""></a>
                                <h5 class="card-title">День 6</h5>
                            ';
                        }else{
                            echo'
                                <img class="courseblock-img" src="media/cardImg.jpg" alt="">
                                <h5 class="card-title">День 6</h5>
                            ';
                        }
                    ?>
                </div>
            </div>
            <!--<div class="row mt-5 justify-content-center">
                <div class="card-box free-content">
                    <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/AIMain.png" alt=""></a>
                    <h5 class="card-title">День 3</h5>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/AIMain.png"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <button>100Coin</button>
                </div>
                <div class="card-box free-content">
                    <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/AIMain.png" alt=""></a>
                    <h5 class="card-title">День 4</h5>
                </div>
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/AIMain.png"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <button>100Coin</button>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/AIMain.png"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <button>100Coin</button>
                </div>
                <div class="card-box free-content">
                    <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/AIMain.png" alt=""></a>
                    <h5 class="card-title">День 5</h5>
                </div>
                <div class="card-box pay-content">
                    <img class="courseblock-img" src="media/AIMain.png"  style="filter:grayscale(100%); opacity: 0.3;" alt="">
                    <button>100Coin</button>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box free-content">
                    <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/AIMain.png" alt=""></a>
                    <h5 class="card-title">День 6</h5>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="card-box free-content">
                    <a href="blocks/lesson1.php"><img class="courseblock-img" src="media/AIMain.png" alt=""></a>
                    <h5 class="card-title">День 7</h5>
                </div>
            </div>-->
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>