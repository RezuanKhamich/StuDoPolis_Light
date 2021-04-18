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
            <div class="jumbotron mb-5">
                <div class="progress">
                    <div class="circle done">
                        <span class="label">1</span>
                        <p class="title">Физика 1</p>
                    </div>
                    <span class="bar done"></span>
                    <div class="circle done">
                        <span class="label">2</span>
                        <p class="title">Физика 1</p>
                    </div>
                    <span class="bar done"></span>
                    <div class="circle done ">
                        <span class="label">3</span>
                        <p class="title">Физика 1</p>
                    </div>
                    <span class="bar half"></span>
                    <div class="circle active">
                        <span class="label">4</span>
                        <p class="title">Физика 1</p>
                    </div>
                    <span class="bar"></span>
                    <div class="circle">
                        <span class="label">5</span>
                        <p class="title">Физика 1</p>
                    </div>
                </div>
            </div>
            <h1 class="first-title">День 4 лагеря GoGame</h1><hr>
            <h4 class="second-title">Лекция "Моделирование и анимация. Работа со звуком"</h4>
            
            <div class="learning-test jumbotron">
                <h4 class="second-title">Тест "Физика в Unity?" <span id="questNum"></span></h4>
                <h4 id="question"></h4>
                <div class="learning-testblock">
                    <img class="test-img" src="../media/m_UnityJunior.png" alt="">
                    <button class="test-btn" onclick="learningTest(1)" id="ans1"></button>
                    <button class="test-btn" onclick="learningTest(2)" id="ans2"></button>
                    <button class="test-btn" onclick="learningTest(3)" id="ans3"></button>
                    <button class="test-btn" onclick="learningTest(4)" id="ans4"></button>
                </div>
            </div>
            
                <div class="btn-nav_block d-flex justify-content-between p-2">
                    <a href="page3.php"><button class="btn btn-success">Назад</button></a>
                    <a href="page5.php"><button class="btn btn-success">Вперед</button></a>
                </div>
            </div>
        </div>
        <script>
            let questions = {};
            let questNum = 0;
            let i = 0;
            let result = 0;
            questions[0]={
                quest: "За что отвечает компонент Rigidbody?",
                ans1: "1. За динамику физических объектов",
                ans2: "2. Отвечает за трение материалов",
                ans3: "3. За плотность объекта",
                ans4: "4. Отвечает за качество столкновений",
                trueAns: 1
            };
            questions[1]={
                quest: "Какой параметр выключает гравитацию для объекта?",
                ans1: "1. Collider > UseGravity",
                ans2: "2. TerrainCollider > Gravity",
                ans3: "3. Rigidbody > UseGravity",
                ans4: "4. Joint > Gravity",
                trueAns: 3
            };
            questions[2]={
                quest: "Как сделать boxCollider триггером?",
                ans1: "1. Программно или инспектор",
                ans2: "2. Только программно",
                ans3: "3. boxCollider нельзя сделать триггером",
                ans4: "4. С помощью доп плагинов",
                trueAns: 1
            };

            learningTest(0);

            function learningTest(ans){
                if(ans != 0 && ans == questions[questNum-1].trueAns) result++;
                if(questNum == 3){
                    alert("Вы набрали " + result + " из 3!");
                    return 0;
                } 
                $("#questNum").html("("+ (questNum+1) + "/3)");
                $("#question").html(questions[questNum].quest);
                $("#ans1").html(questions[questNum].ans1);
                $("#ans2").html(questions[questNum].ans2);
                $("#ans3").html(questions[questNum].ans3);
                $("#ans4").html(questions[questNum].ans4);
                questNum++;
            }
        </script>
    </main>

    
    <?php require "../footer.php"?>
    
</body>
</html>