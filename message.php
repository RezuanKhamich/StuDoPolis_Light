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
        <title>GoGame | Shop</title>
    </head>
<body>
    
    <?php require "header.php"?>
    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Сообщения</h1>
            <div class="bg-secondary p-2 m-5">
                <h3><span class="bg-warning">1.</span> Вы прошли курс Unity AI</h3>
                <span>05.07.2020</span>
                <p>Теперь вы можете настроить.....</p>
                <div class="d-flex">
                    <p><img class="loot-img" src="media/box.png" alt=""> +3 </p>
                    <p><img class="loot-img" src="media/coin.png" alt=""> +500 </p> 
                </div>
                <div class="d-flex text-right">
                    <button class="btn btn-danger">Удалить</button>
                    <button class="btn btn-success">Получить</button>
                </div>
            </div>
            <div class="bg-secondary p-2 m-5">
                <h3><span class="bg-warning">1.</span> Вы прошли курс Unity AI</h3>
                <span>05.07.2020</span>
                <p>Теперь вы можете настроить.....</p>
                <div class="d-none">
                    <p><img class="loot-img" src="media/box.png" alt=""> +3 </p>
                    <p><img class="loot-img" src="media/coin.png" alt=""> +500 </p> 
                </div>
                <div class="d-flex text-right">
                    <button class="btn btn-danger">Удалить</button>
                    <button class="btn btn-success" disabled>Получить</button>
                </div>
            </div>
            <div class="bg-secondary p-2 m-5">
                <h3><span class="bg-warning">1.</span> Вы прошли курс Unity AI</h3>
                <span>05.07.2020</span>
                <p>Теперь вы можете настроить.....</p>
                <div class="d-flex">
                    <p><img class="loot-img" src="media/box.png" alt=""> +3 </p>
                    <p><img class="loot-img" src="media/coin.png" alt=""> +500 </p> 
                </div>
                <div class="d-flex text-right">
                    <button class="btn btn-danger">Удалить</button>
                    <button class="btn btn-success">Получить</button>
                </div>
            </div>
            
        </div>
        
    </main>

    <?php require "footer.php"?>
</body>
</html>