<?php 
    include_once "config.php";
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="media/logo.png"/>
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "header.php"?>
    <main class="d-flex">
        <div class="content-wrapper learn__read-block text-center">
            <h1 class="first-title mt-5">Заказы</h1>
            <div class="btn-group" role="group" aria-label="basic example">
                <button type="button" class="btn btn-success">Все заказы</button>
                <button type="button" class="btn btn-success">Выполненные</button>
            </div>

            <div class="mt-5">
                <div class="course-btn shadow-lg mb-5 bg-white rounded d-flex">
                    <img class="direction-img" src="../media/joystick.png" alt="">
                    <div class="p-3 text-start w-100">
                        <div class="d-flex justify-content-between">
                            <h5>#2 Создать скрипт управления персонажем</h5>
                            <div class="btn-group" role="group" aria-label="basic example">
                                <button type="button" class="btn btn-primary">Легко</button>
                                <button type="button" class="btn btn-outline-primary">Сложно</button>
                            </div>
                        </div>
                        <p>Написать скрипт управления персонажем, используя...</p>
                        <div class="d-flex justify-content-between">
                            <p>Награда: 1500<img class="freelance-reward__img" src="media/coin_new_dark.png" alt=""> </p>
                            <button class="btn btn-success w-25">Принять заказ</button>
                        </div>
                    </div>
                </div>

                <div class="course-btn shadow-lg mb-5 bg-white rounded d-flex">
                    <img class="direction-img" src="../media/joystick.png" alt="">
                    <div class="p-3 text-start w-100">
                        <div class="d-flex justify-content-between">
                            <h5>#2 Создать скрипт управления персонажем</h5>
                            <div class="btn-group" role="group" aria-label="basic example">
                                <button type="button" class="btn btn-primary">Легко</button>
                                <button type="button" class="btn btn-outline-primary">Сложно</button>
                            </div>
                        </div>
                        <p>Написать скрипт управления персонажем, используя...</p>
                        <div class="d-flex justify-content-between">
                            <p>Награда: 1500<img class="freelance-reward__img" src="media/coin_new_dark.png" alt=""> </p>
                            <button class="btn btn-success w-25">Принять заказ</button>
                        </div>
                    </div>
                </div>

                <div class="course-btn shadow-lg mb-5 bg-white rounded d-flex">
                    <img class="direction-img" src="../media/joystick.png" alt="">
                    <div class="p-3 text-start w-100">
                        <div class="d-flex justify-content-between">
                            <h5>#2 Создать скрипт управления персонажем</h5>
                            <div class="btn-group" role="group" aria-label="basic example">
                                <button type="button" class="btn btn-primary">Легко</button>
                                <button type="button" class="btn btn-outline-primary">Сложно</button>
                            </div>
                        </div>
                        <p>Написать скрипт управления персонажем, используя...</p>
                        <div class="d-flex justify-content-between">
                            <p>Награда: 1500<img class="freelance-reward__img" src="media/coin_new_dark.png" alt=""> </p>
                            <button class="btn btn-success w-25">Принять заказ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="learn__content-plan">
            <div class="p-1 text-start">
                <h3 class="module-title text-center">Фриланс</h3>
                <!--<p class="text-white-50 mb-1">Мой рейтинг: 5<img class="freelance-rate__img" src="media/FreelanceRate.png" alt=""></p>-->
                <p class="text-white-50 mb-1">Открытых заказов: 15/200</p>
                <p class="text-white-50 mb-1">Выполнено заказов: 10/200</p>
                <div class="progress mb-4 bg-secondary">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68">15/68</div>
                </div>
            </div>
            <hr class="bg-secondary mb-0">
            <div class="btn module-sections p-0 text-center">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> #1 Заказы Unity Go</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </div>
            
            <div class="btn module-sections p-0 text-center">
                <div class="lesson-block mb-2">
                    <p class="lesson-title"> #2 Заказы Unity Pro</p>
                </div>
                <div class="progress bg-secondary wide-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require "footer.php"?>
    
    <script>
        let blockBtnType = [0, 0, 0, 1, 2];
        let materialArray = ['<h4 class="second-title"><span class="badge bg-secondary">1</span> Моделирование и анимация. Работа со звуком</h4>'+
            '<p class="paragraph">Есть много методов вычисления отражённого освещения, два самых известных — это Global Illumination (GI) и Final Gather (FG). Их можно использовать по отдельности, но вместе они выдают особенно хороший результат. Однако за всё приходится платить: рендер, то есть процесс вычисления сложного освещения и последующей его визуализации, займёт уйму времени.</p>'+
            '<p class="paragraph">Global Illumination (GI) представляет из себя наиболее “честный” способ симуляции отражённого света. Из источника света вылетают фотоны — частички, несущие информацию о цвете и яркости света. Ударяясь о какую-либо поверхность, они освещают её, но теряют часть энергии, вследствие чего их цвет и яркость изменяются. Затем фотоны отскакивают и ударяются о следующую поверхность, повторно теряя часть энергии. Так происходит несколько раз в зависимости от настроек рендерера.</p>'+
            '<h4 class="second-title"><span class="badge bg-secondary">1</span> Моделирование и анимация. Работа со звуком</h4>'+
            '<p class="paragraph">Final Gather (FG) раскидывает по сцене точки, — final gather points, — из которых в разные стороны вылетают лучи. После столкновения с какой-либо поверхностью, лучи возвращают в родительскую точку информацию о цвете и его яркости. Представьте себе такую картину: вечер, солнце почти зашло за горизонт; становится темно, но небольшая часть комнаты ещё залита оранжевым закатным светом. Находящаяся на полу final gather point отправляет в разные стороны несколько лучей, некоторые из них дотягиваются до освещённой части комнаты и с этой информацией возвращаются в исходную точку, тем самым слегка освещая пол «отражённым» оранжевым светом. Это не такой “честный” способ, как GI, но он производит хороший результат, и им часто пользуются, чтобы заполнять сцены красивым мягким освещением.</p>'+

            '<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #e6db74">&quot;use strict&quot;</span><span style="color: #f8f8f2">;</span>\n'+
            '<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">arr</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[];</span>\n\n'+

            '<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">getProto</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">Object.</span><span style="color: #a6e22e">getPrototypeOf</span><span style="color: #f8f8f2">;</span>\n\n'+

            '<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">slice</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">arr</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">slice</span><span style="color: #f8f8f2">;</span>\n'+
            '<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">flat</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">arr</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">flat</span> <span style="color: #f92672">?</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">array</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>\n'+
                '<span style="color: #66d9ef">return</span> <span style="color: #a6e22e">arr</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">flat</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">call</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">array</span> <span style="color: #f8f8f2">);</span>\n'+
            '<span style="color: #f8f8f2">}</span> <span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">array</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>\n'+
                '<span style="color: #66d9ef">return</span> <span style="color: #a6e22e">arr</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">concat</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">apply</span><span style="color: #f8f8f2">(</span> <span style="color: #f8f8f2">[],</span> <span style="color: #a6e22e">array</span> <span style="color: #f8f8f2">);</span>\n'+
            '<span style="color: #f8f8f2">};</span>\n'+
            '</pre></div>',



            ' <div class="text-center">'+
                '<iframe width="560" height="315" src="https://www.youtube.com/embed/bEw9XZB_qwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
            '</div>',




            ' <div class="text-center">'+
                '<iframe width="560" height="315" src="https://www.youtube.com/embed/bEw9XZB_qwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
            '</div>',



            ' <div class="text-center">'+
                '<iframe width="560" height="315" src="https://www.youtube.com/embed/bEw9XZB_qwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
            '</div>',



            ' <div class="text-center">'+
                '<iframe width="560" height="315" src="https://www.youtube.com/embed/bEw9XZB_qwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
            '</div>'];

        // Добавление переходом между блоками урока
        let content = "";
        for(let i = 0; i < blockBtnType.length; i++){
            if(blockBtnType[i] == 0){
                content += '<button class="btn btn-outline-secondary lesson-block__btn" id="'+ i +'">&#8194</button>';
            }else if(blockBtnType[i] == 1){
                content += '<button class="btn btn-outline-secondary lesson-block__btn" id="'+ i +'">?</button>';
            }else if(blockBtnType[i] == 2){
                content += '<button class="btn btn-outline-secondary lesson-block__btn" id="'+ i +'">П</button>';
            }
        }
        $('#lesson-block').append(content);
        //--------------------------------------

        //Обязательный вывод первого блока
        $("#lesson-content").append(materialArray[0]);

        //Прослушивание нажатия кнопки блока и выдача материала
        let currentBlockId = 0;

        $("#0").bind("click", function(){
            $("#lesson-content").empty();
            currentBlockId = 0;
            $("#lesson-content").append(materialArray[0]);
        });
        $("#1").bind("click", function(){
            $("#lesson-content").empty();
            currentBlockId = 1;
            $("#lesson-content").append(materialArray[1]);
        });
        $("#2").bind("click", function(){
            $("#lesson-content").empty();
            currentBlockId = 2;
            $("#lesson-content").append(materialArray[2]);
        });
        $("#3").bind("click", function(){
            $("#lesson-content").empty();
            currentBlockId = 3;
            $("#lesson-content").append(materialArray[3]);
        });
        $("#4").bind("click", function(){
            $("#lesson-content").empty();
            currentBlockId = 4;
            $("#lesson-content").append(materialArray[4]);
        });
        //--------------------------------------

        $("#undestand-btn").bind("click", function(){
            if(currentBlockId < blockBtnType.length){
                $(`#${currentBlockId}`).removeClass("btn-outline-secondary");
                $(`#${currentBlockId}`).addClass("btn-success");
                currentBlockId++;
                console.log(currentBlockId);
                $("#lesson-content").empty();
                $("#lesson-content").append(materialArray[currentBlockId]);
            }
        });

    </script>
</body>
</html>