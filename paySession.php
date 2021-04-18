<?php 
    require_once 'config.php';
    if(isset($_POST['NextBox'])) {
        $_SESSION['box_count'] = $_POST['NextBox'];
    }

    if(isset($_POST['NextMoney'])) {
        $_SESSION['money_count'] = $_POST['NextMoney'];
    }
?>