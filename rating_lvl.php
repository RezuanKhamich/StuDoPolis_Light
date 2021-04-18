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
        <title>GoGame | Rating</title>
    </head>
<body>
    <?php require "header.php"?>
    

    <main class="content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Рейтинг GoGame</h1>
            
            <div class="btn-group btn-group-toggle rating-center" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <a href="../rating_passing.php"><input type="radio" name="options" id="option1" autocomplete="off" > Прохождение</a>
                </label>
                <label class="btn btn-secondary">
                    <a href="../rating_lvl.php"><input type="radio" name="options" id="option3" autocomplete="on" checked> Уровень </a>
                </label>
                <label class="btn btn-secondary">
                    <a href="../rating_money.php"><input type="radio" name="options" id="option3" autocomplete="off"> GCoin</a>
                </label>
            </div>
            
            <div class="jumbotron rate-jumb">
                <div class="d-flex">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col-md-2 col-sm-3 col-xs-6">№</th>
                            <th scope="col"></th>
                            <th scope="col">Имя</th>
                            <th scope="col">Уровень</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $data = array();
                                $num = array();
                                $users_data = array($num, $data); 
        
                                $result = mysqli_query($link, "SELECT * FROM `stats`"); 
                                while($myrow = mysqli_fetch_assoc($result)) {
                                    $users_data[0][] = $myrow['user_id'];
                                    $users_data[2][] = $myrow['user_name']; 
                                    $users_data[1][] = $myrow['user_lvl'];
                                } 
                                // перебираем массив
                                function lvl_sort(&$array)
                                {
                                    for ($j = 0; $j < count($array[0]) - 1; $j++){
                                        for ($i = 0; $i < count($array[0]) - $j - 1; $i++){
                                            // если текущий элемент больше следующего
                                            if ($array[1][$i] < $array[1][$i + 1]){
                                                // меняем местами элементы
                                                $tmp_var = $array[1][$i + 1];
                                                $array[1][$i + 1] = $array[1][$i];
                                                $array[1][$i] = $tmp_var;
        
                                                $tmp_var = $array[0][$i + 1];
                                                $array[0][$i + 1] = $array[0][$i];
                                                $array[0][$i] = $tmp_var;

                                                $tmp_var = $array[2][$i + 1];
                                                $array[2][$i + 1] = $array[2][$i];
                                                $array[2][$i] = $tmp_var;
                                            }
                                        }
                                    }
                                }  
                                lvl_sort($users_data);
                                //вывод
                                if(count($users_data[0]) <= 50){
                                    for($j = 0; $j < count($users_data[0]); $j++){
                                        echo'
                                        <tr>
                                            <th scope="row">'.($j+1).'</th>
                                                <td><img class="nav-img-photo" src="../media/logo.png" alt=""></td>
                                                <td>'.$users_data[2][$j].'</td>
                                            <td>'.$users_data[1][$j].'</td>
                                        </tr>
                                        ';
                                    }
                                }else{
                                    for($j = 0; $j < 50; $j++){
                                        echo'
                                        <tr>
                                            <th scope="row">'.($j+1).'</th>
                                                <td><img class="nav-img-photo" src="../media/logo.png" alt=""></td>
                                                <td>'.$users_data[2][$j].'</td>
                                            <td>'.$users_data[1][$j].'</td>
                                        </tr>
                                        ';
                                    }
                                }
                            ?>

                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>