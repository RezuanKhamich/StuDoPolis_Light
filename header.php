<header>
    <div class="nav-badge">
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                <li class="nav-item active" id="lk-logo">
            
                    <?php
                        if(isset($_COOKIE["id"])){
                            $asd = 23;
                            echo'
                            <script>
                                let elem = document.getElementById("lk-logo");
                                elem.innerHTML = "";
                                
                                elem.innerHTML = `
                                    <a class="nav-link" href="../index.php"><img class="nav-img-photo" src="../media/player-head.png" alt="">
                                        <p class="nav-title">'.$_COOKIE["name"].'</p>
                                    </a>`
                            </script>
                            ';
                        }else{
                            echo'
                            <script>
                                let elem = document.getElementById("lk-logo");
                                elem.innerHTML = "";
                                elem.innerHTML = `<a class="nav-link" href="../index.php"><img class="nav-img-photo" src="../media/LOGO.png" alt=""></a>`   
                            </script>
                            ';
                        }
                    ?>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="../lk.php"><img class="nav-img" src="../media/home_new.png" alt="">
                        <p class="nav-title">Кабинет</p>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="../learning.php"><img class="nav-img" src="../media/learn_new.png" alt="">
                        <p class="nav-title">Обучение</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="../freelance.php"><img class="nav-img" src="../media/freelance_new.png" alt="">
                        <p class="nav-title">Фриланс</p>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="../rating.php"><img class="nav-img" src="../media/rating_new.png" alt="">
                        <p class="nav-title">Рейтинг</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="../plan.php"><img class="nav-img" src="../media/company_new.png" alt="">
                        <p class="nav-title">Карьера</p>
                    </a>
                </li>
                
                <li class="nav-item">     
                    <a class="nav-link" href="../workzone.php"><img class="nav-img" src="../media/news_new.png" alt="">
                        <p class="nav-title">Новости</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="message.php"><img class="nav-img" src="media/message_new.png" alt=""></a>
                    <p class="nav-title">Почта</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="message.php"><img class="nav-img" src="media/help_new.png" alt=""></a>
                    <p class="nav-title">Помощь</p>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php"><img class="nav-img" src="../media/exit_new.png" alt="">
                        <p class="nav-title">Выйти</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav> 
</header>
<?php require "ajax.php"?>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>