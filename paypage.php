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
        <title>GoGame | Pay</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Выбор способа оплаты</h1>
            <?php
                if(isset($_SESSION['box_count'])){
                    $box_add = $_SESSION['box_count'];
                    unset($_SESSION['box_count']);
                    echo "<h3 class='text-center'>+".$box_add." Лут-Бокс";
                }
                if(isset($_SESSION['money_count'])){
                    $money_add = $_SESSION['money_count'];
                    unset($_SESSION['money_count']);
                    echo "<h3 class='text-center'>+".$money_add." GCoin";
                }
            ?> 
            <div class="jumbotron achive-jumb">
                <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
                    <input type="hidden" name="receiver" value="4100115572775809">
                    <input type="hidden" name="formcomment" value="Проект «Железный человек»: реактор холодного ядерного синтеза">
                    <input type="hidden" name="short-dest" value="Вы получили +100G">
                    <input type="hidden" name="label" value="<?php $_COOKIE['id']?>">
                    <input type="hidden" name="quickpay-form" value="donate">
                    <input type="hidden" name="targets" value="Пополнение GCoin / LootBox">
                    <input type="hidden" name="sum" value="35" data-type="number">
                    <input type="hidden" name="comment" value="+<?php echo".$box_add.";?> GCoin">
                    <input type="hidden" name="need-fio" value="false">
                    <input type="hidden" name="need-email" value="false"> 
                    <input type="hidden" name="need-phone" value="false">
                    <input type="hidden" name="need-address" value="false">
                    <label><input type="radio" name="paymentType" value="AC">Банковской картой</label>
                    <label><input type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label>
                    <label><input type="radio" name="paymentType" value="МC">Мобильный телефон</label>
                    <input class="btn btn-primary btn-lg" type="submit" value="Пополнить">
                </form>           
            </div>
        </div>
        
    </main>

    <?php require "footer.php"?>

    <script>
        function BuyBox(count){
            if(confirm("Удалось оплатить?")){
                $.ajax({
                    url: '/ajax.php',
                    method: 'post',
                    dataType: 'html',
                    data: {buybox: count},
                    success: function(data){
                        alert(data);
                    }
                });
            }
            else{
                BuyError();
            }
        }

        function BuyGCoin(count){
            if(confirm("Удалось оплатить?")){
                $.ajax({
                    url: '/ajax.php',
                    method: 'post',
                    dataType: 'html',
                    data: {buyGcoin: count},
                    success: function(data){
                        alert(data);
                    }
                });
            }
            else{
                BuyError();
            }
        }
            
        function BuyError(){
            alert("Ошибка! Отмена платежа.");
        }
    </script>
</body>
</html>