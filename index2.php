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
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1>Main Content</h1>
            <a href="mypage.php">MyPage</a>
            <a href="reg.php">Reg</a>
            <a href="learning.php">Learning</a>
            <a href="register.php">reg</a>
            <a href="login.php">log</a>
            <a href="shop.php">shop</a>
            <a href="message.php">Сообщения</a>
            <a href="logout.php">Выйти</a>
            <p>Боксы</p>
            <button onclick="Spin()">Открыть</button>
        </div>
        
    </main>

    <?php require "footer.php"?>
    
    <script>
        function Spin(){
            var g100 = 0;
            var g500 = 0;
            var g1000 = 0;
            var achieve = 0;
            var course = 0;
            for(var i = 0; i < 100000; i++){
                var d = Math.random();
                if (d < 0.6)
                    //alert("100G"); 
                    g100++;
                else if (d < 0.85)
                    //alert("500G");
                    g500++; 
                else if(d < 0.98)
                    //alert("1000G"); 
                    g1000++;
                    //alert("-24000");
                else if(d < 0.997)
                    //alert("Achieve!!!");
                    achieve++;
                else if(d < 0.999){
                    //alert("ОСНОВНОЙ КУРС!!!!");
                    course++;
                    
                } 
            } 
            alert("g100: " + g100 + "g500: " + g500 + "g1000: " + g1000 + "achieve: " + achieve + "course: " + course);
        }
    </script>
</body>
</html>