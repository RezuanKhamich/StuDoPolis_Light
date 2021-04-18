<?php
    require_once 'config.php';

    $result_stats = mysqli_query($link, "SELECT * FROM stats WHERE user_id = '{$_COOKIE["id"]}'");
    $stats = mysqli_fetch_array($result_stats);

    /*$_SESSION['money'] = $stats['user_money'];
    $_SESSION['box_count'] = $stats['user_box_count'];
    $_SESSION['lvl'] = $stats['user_lvl'];*/
    //$main_stats = $stats['user_money'] + " " + $stats['user_box_count'] + " " + $stats['user_lvl'];
    echo($stats['user_box_count']);
?>