<?php 
    include('config.php');

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    if (empty($mail)) {
        // экранирования символов для mysql
        $name = htmlentities(mysqli_real_escape_string($link, $name));
        $mail = htmlentities(mysqli_real_escape_string($link, $mail));
        $pass = htmlentities(mysqli_real_escape_string($link, $pass));
        $age = htmlentities(mysqli_real_escape_string($link, $age));
        $skill = htmlentities(mysqli_real_escape_string($link, $skill));
        $text = htmlentities(mysqli_real_escape_string($link, $text));

        $arr = explode('-', $mail); 
        $title = $arr[0];

        $q = trim($mail); 
        $q = mysqli_real_escape_string($link, $q);
        $q = htmlspecialchars($q);

        // выполняем запрос
        //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
         //echo 'Поле не заполнено';
        
        $result = mysqli_query($link, "SELECT * FROM `users` WHERE `mail` = '$q'");
        $myrow = mysqli_fetch_array($result);
        //echo($myrow['mail']);
        if (!empty($myrow['id'])) {
            unset($saveMe, $text, $name, $mail, $pass, $age, $skill, $text, $myrow, $result);
            echo'<script>
                alert("Профиль данным email существует!")
            </script>';
            
            //header('location: index.php'); 
            //echo'<script>alert("Профиль с таким e-mail уже существует!")</script>';
            //exit;
            //header('location: index.php');
            //exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }
        else{
            echo'<script>
                alert("Профиль данным email существует!")
            </script>';
            $query ="INSERT INTO users VALUES(NULL, '$name','$mail','$pass', '100','0','0','1')";
            $result = mysqli_query($link, $query);
            
            echo'<script>alert("Вы успешно зарегистрированы!")</script>'; 
            //echo'<script> document.getElementById("useName").innerHTML="'.$name.'";</script>';  
            
            //создание данных для истории
            $histResult = mysqli_query($link, "SELECT * FROM `users` WHERE `mail` = '$q'");
            $myrowHist = mysqli_fetch_array($histResult);
            $idHist = $myrowHist['id'];
            //$history ="INSERT INTO hist VALUES(NULL, '$idHist')";
            $history ="INSERT INTO hist (`id`, `timeans0`, `timeans1`, `timeans2`, `timeans3`, `timeans4`, `timeans5`, `timeans6`, `timeans7`, `timeans8`, `timeans10`, `timeans11`, `timeans12`, `timeans13`, `timeans14`, `timeans15`, `timeans16`, `timeans17`, `timeans18`, `timeans19`, `timeans20`) VALUES ('$idHist', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
            $result1 = mysqli_query($link, $history);
            unset($saveMe, $text, $name, $mail, $pass, $age, $skill, $text, $myrow, $result);
        }
        
        
    
    }
    $mailent = $_POST['mailent'];
    $passent = $_POST['passent'];
    //setcookie('')
    if(!empty($mailent)){
        $mailent = htmlentities(mysqli_real_escape_string($link, $mailent));
        $passent = htmlentities(mysqli_real_escape_string($link, $passent));

        $arr1 = explode('-', $mailent); 
        $arr2 = explode('-', $passent); 
        $title1 = $arr1[0];
        $title1 = $arr2[0];

        $m = trim($mailent); 
        $m = mysqli_real_escape_string($link, $m);
        $m = htmlspecialchars($m);

        $p = trim($passent); 
        $p = mysqli_real_escape_string($link, $p);
        $p = htmlspecialchars($p);

        // выполняем запрос
        //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
         //echo 'Поле не заполнено';
        
        $result1 = mysqli_query($link, "SELECT * FROM `users` WHERE `mail` = '$m' AND `password` = '$p'");
        $myrow1 = mysqli_fetch_array($result1);

        //echo($myrow['mail']);
        if (empty($myrow1['mail'])) {
            echo'<script>alert("Неверно введёны данные!")</script>';
            unset($mailent);
        }
        else{
            echo'<script> document.getElementById("useName").innerHTML="'.$myrow1["name"].'";</script>';  

            $_SESSION['name'] = $myrow1["name"];
            $_SESSION['text'] = $myrow1["text"];
            $_SESSION['age'] = $myrow1["age"];
            $_SESSION['skill'] = $myrow1["skill"];
        }
    }
    if(isset($_SESSION['name'])){
        echo'<script> document.getElementById("useName").innerHTML="'.$_SESSION['name'].'";</script>';  
    }
        //header('location: index.php'); 
    // закрываем подключение
    //mysqli_close($link);



?>