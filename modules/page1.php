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
    <main class="d-flex">
        <div class="content-wrapper learn__read-block">
            <div class="jumbotron mb-5">
                <div class="learn-progress">
                    <div class="circle active">
                        <span class="label">1</span>
                        <p class="title">Физика 1</p>
                    </div>
                    <span class="bar"></span>
                    <div class="circle">
                        <span class="label">2</span>
                        <p class="title">Физика 2</p>
                    </div>
                    <span class="bar half"></span>
                    <div class="circle">
                        <span class="label">3</span>
                        <p class="title">Физика 3</p>
                    </div>
                    <span class="bar"></span>
                    <div class="circle">
                        <span class="label">4</span>
                        <p class="title">Физика 4</p>
                    </div>
                    <span class="bar"></span>
                    <div class="circle">
                        <span class="label">5</span>
                        <p class="title">Физика 5</p>
                    </div>
                </div>
            </div>
            <h1 class="first-title">День 4 лагеря GoGame</h1><hr>
            <h4 class="second-title">Лекция "Моделирование и анимация. Работа со звуком"</h4>
            <p class="paragraph">Есть много методов вычисления отражённого освещения, два самых известных — это Global Illumination (GI) и Final Gather (FG). Их можно использовать по отдельности, но вместе они выдают особенно хороший результат. Однако за всё приходится платить: рендер, то есть процесс вычисления сложного освещения и последующей его визуализации, займёт уйму времени.
            Global Illumination (GI) представляет из себя наиболее “честный” способ симуляции отражённого света. Из источника света вылетают фотоны — частички, несущие информацию о цвете и яркости света. Ударяясь о какую-либо поверхность, они освещают её, но теряют часть энергии, вследствие чего их цвет и яркость изменяются. Затем фотоны отскакивают и ударяются о следующую поверхность, повторно теряя часть энергии. Так происходит несколько раз в зависимости от настроек рендерера.
            Final Gather (FG) раскидывает по сцене точки, — final gather points, — из которых в разные стороны вылетают лучи. После столкновения с какой-либо поверхностью, лучи возвращают в родительскую точку информацию о цвете и его яркости. Представьте себе такую картину: вечер, солнце почти зашло за горизонт; становится темно, но небольшая часть комнаты ещё залита оранжевым закатным светом. Находящаяся на полу final gather point отправляет в разные стороны несколько лучей, некоторые из них дотягиваются до освещённой части комнаты и с этой информацией возвращаются в исходную точку, тем самым слегка освещая пол «отражённым» оранжевым светом. Это не такой “честный” способ, как GI, но он производит хороший результат, и им часто пользуются, чтобы заполнять сцены красивым мягким освещением.</p>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bEw9XZB_qwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
                <div class="btn-nav_block d-flex justify-content-between p-2">
                    <a href=""><button class="btn btn-success disabled btn-lg">Назад</button></a>
                    <a href="page2.php"><button class="btn btn-success btn-lg">Вперед</button></a>
                </div>
        </div>
        <div class="learn__content-plan">
            <div class="p-1">
                <h3 class="module-title">Unity Start</h3>
                <p class="text-left text-white-50 mb-1">Прогресс: 0/25</p>
                <div class="progress mb-4 bg-secondary">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68">15/68</div>
                </div>
            </div>
            <hr class="bg-secondary mb-0">
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>
            <a class="btn module-sections p-0" href="page1.php">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> 1. Знакомство с интерфейсом</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </a>

            <hr class="bg-secondary mb-4">
            <button class="btn btn-outline-secondary disabled module-reward mb-2">Получить награду</button>
        </div>
    </main>
    
    <?php require "../footer.php"?>
    
</body>
</html>