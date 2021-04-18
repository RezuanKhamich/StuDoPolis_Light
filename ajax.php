<?php 
    require_once 'config.php';

    //Загрузка на сервер данных по box_count
    if(isset($_POST['buybox'])) {
        UploadNewBox($link, $_POST['buybox']);
    }
    //Загрузка на сервер данных по money
    if(isset($_POST['buyGcoin'])) {
        UploadNewGCoin($link, $_POST['buyGcoin']);
    }

    

    function UploadNewBox($link, $box_count){
        $result_stats = mysqli_query($link, "SELECT * FROM stats WHERE user_id = '{$_COOKIE['id']}'");
        $mystats = mysqli_fetch_array($result_stats);
        $all_my_boxes = $mystats['user_box_count'] + $box_count;
        echo ($all_my_boxes);
        mysqli_query($link, "UPDATE stats SET user_box_count = '$all_my_boxes' WHERE user_id = '{$_COOKIE['id']}'");
    }
    function UploadNewGCoin($link, $Gcoin_count){
        $result_stats = mysqli_query($link, "SELECT * FROM stats WHERE user_id = '{$_COOKIE['id']}'");
        $mystats = mysqli_fetch_array($result_stats);
        $all_my_money = $mystats['user_money'] + $Gcoin_count;
        echo ($all_my_money);
        mysqli_query($link, "UPDATE stats SET user_money = '$all_my_money' WHERE user_id = '{$_COOKIE['id']}'");
    }
?>