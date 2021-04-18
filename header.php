<header>
    <div class="nav-badge">
        <?php
            if(isset($_COOKIE["id"])){
                echo'
                    <div class="box-header">
                        <div class="d-flex nav-stats">
                            <div id="content"></div>
                            <div class="d-flex rate-stats">
                                <img class="box-img-hed rate-img" src="../media/star.png" alt="">
                                <h5  id="score-bang"></h5>
                            </div> 
                            <h5 class="lvl-stats" id="lvl-bang"></h5>
                            <img src="" alt="">
                            <img class="box-img-hed" src="../media/pngwave.png" alt="">
                            <h5 class="gem-stats" id="money-bang"></h5>
                            <img class="box-img-hed" src="../media/box.png" alt="">
                            <h5 class="gem-stats last-stats" id="box_count-bang"></h5>
                        </div>
                    </div>
                ';
            }
        ?>
        
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
        <li class="nav-item active">
            <a class="nav-link" href="../index.php"><img class="nav-img-photo" src="../media/LOGO.png" alt=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../home.php"><img class="nav-img" src="../media/playerHome.png" alt="">
                <p class="nav-title">Профиль</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../learning.php"><img class="nav-img" src="../media/icon1.png" alt="">
                <p class="nav-title">Обучение</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../work.php"><img class="nav-img" src="../media/work.png" alt="">
                <p class="nav-title">Заказы</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../plan.php"><img class="nav-img" src="../media/plan.png" alt="">
                <p class="nav-title">План</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../game.php"><img class="nav-img" src="../media/town.png" alt="">
                <p class="nav-title">Город</p>
            </a> 
        </li>
        <!--<li class="nav-item">
            <a class="nav-link" href="#"><img class="nav-img" src="../media/palatka.png" alt="">
                <p class="nav-title">Лагерь</p>
            </a>
        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="../companywork.php"><img class="nav-img" src="../media/icon2.png" alt="">
                <p class="nav-title">Компания</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../rating_passing.php"><img class="nav-img" src="../media/icon3.png" alt="">
                <p class="nav-title">Рейтинг</p>
            </a>
            <!-- Внутреннее меню
            <a
                class="nav-link nav-link-collapse"
                href="#"
                id="hasSubItems"
                data-toggle="collapse"
                data-target="#collapseSubItems2"
                aria-controls="collapseSubItems2"
                aria-expanded="false"
                >Item 2</a>
            <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span class="nav-link-text">Item 2.1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span class="nav-link-text">Item 2.2</span>
                </a>
            </li>
            </ul>-->
        </li>
        <li class="nav-item">     
            <a class="nav-link" href="../workzone.php"><img class="nav-img" src="../media/icon4.png" alt="">
                <p class="nav-title">Магазин</p>
            </a>
            
        </li>
        <!--<li class="nav-item">
            <a class="nav-link" href="message.php"><img class="nav-img" src="media/icons_news.jpg" alt=""></a>
            <p class="nav-title">Сообщения</p>
        </li>-->

        <li class="nav-item">
            <a class="nav-link" href="../logout.php"><img class="nav-img" src="../media/icon5.png" alt="">
                <p class="nav-title">Выйти</p>
            </a>
        </li>
        </ul>
    </div>
    
    </nav>
    
</header>
<?php require "ajax.php"?>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/three.js"></script>
<script src="../js/GLTFLoader.js"></script>
<script src="../js/OrbitControls.js"></script>


<script>

    function score()  
    {  
        $.ajax({  
            url: "../score_bang.php",  
            cache: false,  
            success: function(date){  
                $("#score-bang").html(date);  
            }  
        });  
    }  
    $(document).ready(function(){  
        score();  
        setInterval('score()',60000);  
    }); 

    function money()  
    {  
        $.ajax({  
            url: "../money_bang.php",  
            cache: false,  
            success: function(date){  
                $("#money-bang").html(date);  
            }  
        });  
    }  
    $(document).ready(function(){  
        money();  
        setInterval('money()',60000);  
    }); 

    function lvl()  
    {  
        $.ajax({  
            url: "../lvl_bang.php",  
            cache: false,  
            success: function(date){  
                $("#lvl-bang").html("Уровень " + date);  
            }  
        });  
    }  
    $(document).ready(function(){  
        lvl();  
        setInterval('lvl()',60000);  
    });

    function box_count()  
    {  
        $.ajax({  
            url: "../box_count_bang.php",  
            cache: false,  
            success: function(date){  
                $("#box_count-bang").html(date);  
            }  
        });  
    }  
    $(document).ready(function(){  
        box_count();  
        setInterval('box_count()',60000);  
    }); 
</script>