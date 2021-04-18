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
        <div class="container">
            <h1 class="text-center">Обучение</h1>
            <div class="row mt-5">
                <div class="col-sm"><a class="course-btn" href="blocks/unity.php"><img class="course-img" src="media/unity.png" alt=""></a></div>
                <div class="col-sm">
                    <button class="course-btn mb-4"><img class="course-img squeez-img" src="media/UE4.png" alt=""></button>
                    <button class="course-btn"><img class="course-img squeez-img" src="media/3dmodel.png" alt=""></button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="row col-sm">
                    <button class="course-btn"><img class="course-img squeez-img" src="media/2dart.png" alt=""></button>
                </div>
            </div>
        </div>
        
    </main>

    <?php require "footer.php"?>
    
</body>
</html>