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
        <div class="content-wrapper learn__read-block">
            <h1 class="first-title mt-5" id="section-title"></h1>

            <div id="lesson-block">
                <!-- Добавление кода из js -->
            </div>
            <hr>

            <div id="lesson-content">

            </div>
            

            <div class="p-2 mt-5 text-center" id="understand-btn__box">
                <button class='btn btn-success btn-lg w-50 m-auto' id='undestand-btn'>Понятно!</button>
            </div>
        </div>



        





        <div class="learn__content-plan" id="section-btns">
            <div class="p-1">
                <h3 class="module-title">Unity Start</h3>
                <p class="text-left text-white-50 mb-1">Прогресс: 0/25</p>
                <div class="progress mb-4 bg-secondary">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68">15/68</div>
                </div>
            </div>
            <hr class="bg-secondary mb-0">
            <!--<hr class="bg-secondary mb-4">-->
            <!--<button class="btn btn-outline-secondary disabled module-reward mb-2">Получить награду</button>-->
        </div>

        <script src="modules/unity_go_s1.json"></script>
        <script src="modules/unity_go_s2.json"></script>
        <script src="modules/unity_go_s3.json"></script>
        <script src="modules/unity_go_s4.json"></script>
    </main>
    
    <?php require "footer.php"?>

    <script>
        
        let jsonCurrentPath = '';
        let jsonFileCount = 4;
        let sectionTitles = ["Переменные в С#", "Условные конструкции","Переменные в С#", "Переменные в С#"];
        let successBtn_array = []
        let successBtn_row = []
        let numCurrentPage = 1;

        //локальный объект для данных json файлов
        let data = {};
        getAllDataFromJson();

        function getAllDataFromJson(){
            // устанавливаем синхронность
            $.ajaxSetup({
                async: false
            });

            
            for(let i = 1; i <= jsonFileCount; i++){
                data[`json${i}`] = {};
                $.getJSON(`modules/unity_go_s${i}.json`, function(json){
                    Object.assign(data[`json${i}`] , json);
                    
                })
            }
            console.log("Сохранили данные в локальный объект Data");

            // Возвращаемся к асинхронности
            $.ajaxSetup({
                async: true
            });
        }

        //Создаем боковые кнопки под разделы
        AddSectionBtn()
        //Слушаем боковые кнопки
        ListenClickOnSection(); 

        //Первичная загрузка стартового контента
        AddSectionContent(data[`json${1}`], 0);

        //Заполнение массива успешного прохождения страницы
        // for(i = 0; i < jsonFileCount; i++){
        //     successPassingBtn[i] = successBtn_row[data[`json${i+1}`].pageCount]
        // }
        // for(i = 0; i < )
        let k = []
        let l = []
        for(i = 0; i < jsonFileCount; i++){
            successBtn_array.push(new Array(data[`json${i+1}`].pageCount));
        }
                

        function AddSectionBtn(){
            //Проход по всем json файлам
            for(let i = 0; i < sectionTitles.length; i++){
                $('#section-btns').append(`<a class="btn module-sections p-0" id="section-btn-${i+1}">
                    <div class="lesson-block mb-2">
                        <p class="lesson-title">${i+1}. ${data[`json${i+1}`].sectionName}</p>
                    </div>
                    <div class="progress bg-secondary wide-progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="68"></div>
                    </div>
                </a>`);
            }
            console.log('Добавляем боковые кнопки с данными всех json')
        }// Добавление кнопок секций
                   
        function AddSectionContent(jsonPath, numOfSection){
            numCurrentPage = 1;
            //Очистка контента страницы
            ClearContent(); 
            //Добавление кнопок перехода между страницами
            SetPageBtn(jsonPath);
            //Прослушиваем кнопки перехода между страницами
            PageBtnListener(jsonPath);
            //Добавляем данные первой страницы
            AddContentToPage(1, jsonPath);
            jsonCurrentPath = jsonPath;
            
            //Устанавливаем название раздела
            $('#section-title').text(jsonPath.sectionName);
            $("#undestand-btn").bind("click", function(){
                successBtn_array[numOfSection][numCurrentPage] = 1
                for(i = 0; i < jsonPath.pageCount; i++){
                    if(successBtn_array[numOfSection][numCurrentPage] == 1){
                        //перекрашиваем кнопки страниц
                        $(`#${numCurrentPage-1}`).removeClass("btn-outline-secondary");
                        $(`#${numCurrentPage-1}`).addClass("btn-success");
                    }
                }
                console.log(successBtn_array)

                //очищаем блок от материала
                $("#lesson-content").empty();
                //Добавляем новый материал
                AddContentToPage(numCurrentPage+1, jsonPath);  
            });
            console.log(numCurrentPage)
        }// Добавление контента на страницу

        // function SuccessPassingPageContent(){
        //     successPassingBtn[]
        // }

        function SetPageBtn(jsonData){
            let content = "";
            for(let i = 0; i < jsonData.pageCount; i++){
                content += `<button class="btn btn-outline-secondary lesson-block__btn" id="${i}">${jsonData.pageType[i] == "" ? '&#8194' : jsonData.pageType[i]}</button>`;
            }
            $('#lesson-block').append(content);
            console.log('Добавляем кнопки перехода между страницами')
        }// Добавление кнопок перехода между страницами
        
        function PageBtnListener(jsonData){
            for(let i = 0; i < jsonData.pageCount; i++){
                $(`#${i}`).bind("click", function(){
                    $("#lesson-content").empty();
                    currentBlockId = i;
                    AddContentToPage(i+1, jsonData);
                    //фиксируем текущий номер страницы
                    numCurrentPage = i+1;
                });
            }
            console.log('Прослушиваем кнопки перехода между страницами')
        }// Прослушивание кнопок перехода между страницами

        function AddContentToPage(numPage, jsonData) {
            let titleId, theoryId, codeId;
            titleId = 0;
            theoryId = 0;
            codeId = 1;
            numCurrentPage = numPage;
            let flowData = jsonData.pageFlow;
            for(let i = 0; i < flowData[`page${numPage}`].length; i++){
                if(flowData[`page${numPage}`][i] == "pageSecondTitles"){
                    $("#lesson-content").append(jsonData.pageSecondTitles[`page${numPage}`][titleId++])
                    $("#understand-btn__box").show();
                }else if(flowData[`page${numPage}`][i] == "pageParagraphs"){
                    $("#lesson-content").append(jsonData.pageParagraphs[`page${numPage}`][theoryId++])
                    $("#understand-btn__box").show();
                }else if(flowData[`page${numPage}`][i] == "pageCode"){
                    let code = '';
                    for(let j = 0; j < jsonData.pageCode[`page${numPage}`][`code${codeId}`].length; j++){
                        code += jsonData.pageCode[`page${numPage}`][`code${codeId}`][j];
                    }
                    $("#lesson-content").append(code)
                    codeId++;
                    $("#understand-btn__box").show();
                }else if(flowData[`page${numPage}`][i] == "pageTest"){
                    $("#lesson-content").empty();
                    $("#lesson-content").append(`
                        <div class="learning-test jumbotron">
                            <h4 class="second-title">Тест "${jsonData.pageTest[`page${numPage}`].title}" <span id="questNum"></span></h4>
                            <h4 id="question"></h4>
                            <div class="learning-testblock">
                                <img class="test-img" src="media/m_UnityJunior.png" alt="">
                                <button class="test-btn" id="ans1"></button>
                                <button class="test-btn" id="ans2"></button>
                                <button class="test-btn" id="ans3"></button>
                                <button class="test-btn" id="ans4"></button>
                            </div>
                        </div>
                    `);
                    $("#understand-btn__box").hide();
                    console.log('Добавляем тест');
                    AddTest(0, jsonData, numPage, 0);
                    ListenTestBtn(jsonData, numPage);
                }
            }
            console.log('Формируем контент страницы');
        }// Разбиение контента из json и добавление на страницу
                
        function ListenClickOnSection(){
            for(let i = 1; i <= jsonFileCount; i++){
                $(`#section-btn-${i}`).click("click", function(){
                    AddSectionContent(data[`json${i}`], i);
                    console.log(`номер секции ${i}`)
                });
            }
            console.log('Прослушивание боковых кнопок на нажатие')
        }// Прослушивание боковых кнопок на нажатие
    
        function ClearContent(){
            console.log('Очищаем данные страницы')
            currentBlockId = 1;
            $('#lesson-block').empty();
            $("#lesson-content").empty();
        }// Очистка элементов страницы

        let questNum = 0;
        let result = 0;

        function AddTest(ans, jsonData, numPage){
            let test = jsonData.pageTest[`page${numPage}`];

            //Увлеичиваем очки за правильные ответы
            if(ans != 0 && ans == test.trueAnswers[questNum-1]) result++;

            //Вывод окна результатов
            if(questNum == test.questions.length){
                //alert(`Вы набрали ${result} из ${test.questions.length}!`);
                AddSectionContent(jsonData);
                $('#lesson-content').empty();
                $('#lesson-content').append(`<div class="learning-test jumbotron">
                    <h4 class="second-title">Тест "${jsonData.pageTest[`page${numPage}`].title}" <span id="questNum"></span></h4>
                    <h4 id="question">Поздравляем! Вы ответили верно на ${result}/${test.questions.length}</h4>
                    <div class="test-result-block">
                    <svg class="radial-progress" data-percentage="${result==0 ? 0 : result/test.questions.length*100}" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">${result}/${test.questions.length}</text>
                        </svg>
                    </div>
                    <div class="p-2 mt-5 text-center" id="understand-btn">
                        <button class='btn btn-success btn-lg w-50 m-auto' id='repeat-test'>Пройти еще раз!</button>
                    </div>
                </div>`);

                ProgressBarStart();

                $('#repeat-test').click("click", function(){
                    $('#lesson-content').empty();
                    questNum = 0;
                    result = 0;
                    AddContentToPage(numPage, jsonData);
                });

                //$("#understand-btn__box").show();
                return 0;
            } 
            $("#questNum").html(`(Вопрос ${(questNum+1)}/${test.questions.length})`);
            $("#question").html(`Вопрос ${(questNum+1)}: ${test.questions[questNum]}`);
            $("#ans1").html(`1. ${test.answers[0 + 4 * questNum]}`);
            $("#ans2").html(`2. ${test.answers[1 + 4 * questNum]}`);
            $("#ans3").html(`3. ${test.answers[2 + 4 * questNum]}`);
            $("#ans4").html(`4. ${test.answers[3 + 4 * questNum]}`);
            questNum++;
        }//Добавляем тест в сцену

        function ListenTestBtn(jsonData, numPage){
            for(let i = 1; i <= 4; i++){
                $(`#ans${i}`).click("click", function(){
                    console.log('слушаем тест')
                    AddTest(i, jsonData, numPage);
                });
            }
            
        }//Прослушиваем состояние кнопок Теста
        

        function ProgressBarStart(){
            $('svg.radial-progress').each(function( index, value ) { 
                $(this).find($('circle.complete')).removeAttr( 'style' );
            });
            $('svg.radial-progress').each(function( index, value ) { 
                // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                if ( 
                    $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                    $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                ) {
                    // Get percentage of progress
                    percent = $(value).data('percentage');
                    // Get radius of the svg's circle.complete
                    radius = $(this).find($('circle.complete')).attr('r');
                    // Get circumference (2πr)
                    circumference = 2 * Math.PI * radius;
                    // Get stroke-dashoffset value based on the percentage of the circumference
                    strokeDashOffset = circumference - ((percent * circumference) / 100);
                    // Transition progress for 1.25 seconds
                    $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
                }
            })
        }
        /*
        $(window).scroll(function(){
            $('svg.radial-progress').each(function( index, value ) { 
                $(this).find($('circle.complete')).removeAttr( 'style' );
            });
            $('svg.radial-progress').each(function( index, value ) { 
                // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                if ( 
                    $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                    $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                ) {
                    // Get percentage of progress
                    percent = $(value).data('percentage');
                    // Get radius of the svg's circle.complete
                    radius = $(this).find($('circle.complete')).attr('r');
                    // Get circumference (2πr)
                    circumference = 2 * Math.PI * radius;
                    // Get stroke-dashoffset value based on the percentage of the circumference
                    strokeDashOffset = circumference - ((percent * circumference) / 100);
                    // Transition progress for 1.25 seconds
                    $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
                }
                
            });
        }).trigger('scroll');*/   //Радиальный прогресс бар

    </script>
</body>
</html>