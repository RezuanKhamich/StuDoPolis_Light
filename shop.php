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
        <title>GoGame | Shop</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Магазин</h1>
            <?php 
                if(!isset($_COOKIE['id'])){
                    echo '
                    <div class="d-flex border">
                        <h3>Авторизуйтесь для проверки вашего баланса</h3>
                        <button class="btn btn-warning" onclick="location.href = \'login.php\'">Войти</button>
                    </div>
                    ';
                }
            ?>
            <div class="jumbotron achive-jumb">
                <h4>Лут-Боксы</h4>
                <hr>
                <div class="d-flex">
                    <div class="d-block shop-box-block">
                        <h4>+1 Лут-Бокс</h4>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/box.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB 90</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyBox('1')">Пополнить</button>
                    </div>
                    <div class="d-block shop-box-block">
                        <h4>+5 Лут-Бокс</h4>
                        <div>
                            <p>Скидка 10%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/box.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB <s>450</s> 405</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyBox('5')">Пополнить</button>
                    </div>
                    <div class="d-block shop-box-block">
                        <h4>+25 Лут-Бокс</h4>
                        <div>
                            <p>Скидка 15%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/box.png" alt="">
                        </div>
                        
                        <div>
                        <span class="">RUB <s>2250</s> 1912</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyBox('25')">Пополнить</button>
                    </div>
                </div>
            </div>
            <div class="jumbotron achive-jumb">
                <h4>Пополнение Gcoin</h4>
                <hr>
                <div class="row">
                    <div class="col shop-item-block">
                        <h4>+100 Gcoin</h4>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB 35</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('100')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+250 Gcoin</h4>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB 85</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('250')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+500 Gcoin</h4>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB 167</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('500')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+1.000 Gcoin</h4>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB 334</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('1000')">Пополнить</button>
                    </div>
            </div>
            <div class="row">
                    <div class="col shop-item-block">
                        <h4>+5.000 Gcoin</h4>
                        <div>
                            <p>Скидка 10%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB <s>1665</s> 1521</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('5000')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+10.000 Gcoin</h4>
                        <div>
                            <p>Скидка 10%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB <s>3335</s> 3045</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('10000')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+50.000 Gcoin</h4>
                        <div>
                            <p>Скидка 15%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB <s>16666</s> 14492</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('50000')">Пополнить</button>
                    </div>
                    <div class="col shop-item-block">
                        <h4>+100.000 Gcoin</h4>
                        <div>
                            <p>Скидка 10%</p>
                        </div>
                        <div>
                            <img class="loot-img" src="media/coin.png" alt="">
                        </div>
                        <div>
                        <span class="">RUB <s>33333</s> 28985</span>
                        </div>
                        <button class="btn btn-success" onclick="BuyGCoin('100000')">Пополнить</button>
                    </div>
            </div>
        </div>
        
    </main>

    <?php require "footer.php"?>

    <script>
        function BuyBox(count){
            $.ajax({
                    url: '/paySession.php',
                    method: 'post',
                    dataType: 'html',
                    data: {NextBox: count},
                    success: function(data){
                    }
                });
            location.href = "paypage.php";
        }

        function BuyGCoin(count){
            $.ajax({
                    url: '/paySession.php',
                    method: 'post',
                    dataType: 'html',
                    data: {NextMoney: count},
                    success: function(data){
                    }
                });
            location.href = "paypage.php";
        }
            
        function BuyError(){
            alert("Ошибка! Отмена платежа.");
        }
    </script>
</body>
</html>