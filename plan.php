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
        <title>GoGame | Plan</title>
    </head>
<body>
    <?php require "header.php"?>
    

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Конструктор GoGame</h1>
            <!-- План обучения -->
            <div class="jumbotron wide">
                <div class="slidecontainer">
                    <h3 class="constructor-h3">План на неделю</h3>
                    <hr>
                    <input type="range" min="1" max="10" value="5" class="slider" id="myRange">
                    <span id="sliderValue">Часов:</span>
                    <hr>
                </div>
                <div class="constructor-box">
                    <p>Награда: <img class="virt-coin__img" src="../media/pngwave.png" alt=""><span id="vCoinCount">+500</span> 
                    <span id="rCoinCount"><img class="real-coin__img" src="../media/star.png" alt="">+10</span></p>
                    <p>Занимайся в удобное время и получи награду</p>
                    <button class="btn btn-success">Принять</button>
                </div>
            </div>
            <!-- Недельный заказ -->
            <div class="jumbotron wide">
                <h3 class="constructor-h3">Недельный заказ</h3>
                <hr>
                <div class="weekCase-box">
                    <div class="weekCase-line"></div>
                    <div class="weekCase-case case-done">
                        <img class="weekCase-img " src="../media/3dmodel.jpg" alt="">
                        <p>Пройти 1 урок</p>
                    </div>
                    <div class="weekCase-case">
                        <img class="weekCase-img" src="../media/3dmodel.jpg" alt="">
                        <p>Выполнить тест на 7/7</p>
                    </div>
                    <div class="weekCase-case">
                        <img class="weekCase-img" src="../media/3dmodel.jpg" alt="">
                        <p>Выполнить 1 заказ</p>
                    </div>
                </div>
                <p>Выполни недельный заказ и получи награду</p>
                <button class="btn btn-success disabled">Получить награду</button>
            </div>
            <div class="jumbotron wide">
                <h3>Месяц Фриланса</h3>
                <hr>
                <div id="calendar">
                    <!-- Script -->
                </div>
                

                <p>Период действия акции: с 05.04.2021 по 25.04.2021</p>
            </div>
        </div>
    </main>

    <script>
        let slider = document.getElementById("myRange");
        let output = document.getElementById("sliderValue");
        //output.innerHTML = slider.value; // Display the default slider value
        output.innerHTML = `Часы обучения: ${slider.value}`;
        SetRewardForWeekPlan();
        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function() {
            output.innerHTML = `Часы обучения: ${this.value}`;
            SetRewardForWeekPlan();
        }
        function SetRewardForWeekPlan(){
            if(slider.value < 3){
            $('#vCoinCount').text(`+500 `);
            }
            else if(slider.value < 6){
                $('#vCoinCount').text(`+700`);
            }
            else if(slider.value < 9){
                $('#vCoinCount').text(`+1000`);
            }
            else{
                $('#vCoinCount').text(`+1200`);
            }
        }
        SetCalendarBlocks();
        function SetCalendarBlocks(){
            let calendar = $("#calendar");
            let dayNum = 1;
            let rewards = [
                '+500 coin', '+600 coin', '+700 coin', '+800 coin', '+Кейс',
                '+600 coin', '+700 coin', '+800 coin', '+900 coin', '+Особый заказ',
                '+700 coin', '+800 coin', '+900 coin', '+1000 coin', '+Достижение'
            ];
            let doneDays=[
                'icons_news.jpg', 'icons_news.jpg', 'icons_learning.jpg', 'icons_learning.jpg','icons_learning.jpg',
                'icons_learning.jpg', 'icons_learning.jpg', 'icons_learning.jpg', 'icons_learning.jpg','icons_learning.jpg',
                'icons_learning.jpg', 'icons_learning.jpg', 'icons_learning.jpg', 'icons_learning.jpg','icons_learning.jpg',
            ];

            for(let i = 0; i < 3; i++){
                let calendarLineBlocks = '';
                for(let j = 0; j < 5; j++){
                    calendarLineBlocks += ('\
                        <div class="calendar-block">\
                            <p class="calendar-title">День '+ dayNum +'</p>\
                            <img class="calendar-img" src="../media/'+ doneDays[j + i*5] +'" alt="">\
                            <p class="calendar-reward">'+ rewards[j + i*5] +'</p>\
                        </div>');
                    dayNum++;
                }
                calendar.append('<div class="calendar-line">' + calendarLineBlocks + '</div>');
            }
        }

        //$('#sliderValue').text(`Часы обучения: ${this.value}`);
    </script>
    <?php require "footer.php"?>
    
</body>
</html>