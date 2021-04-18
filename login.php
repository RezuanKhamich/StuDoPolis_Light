<?
require_once 'config.php';

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_mail='".mysqli_real_escape_string($link,$_POST['mail'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");

        $result_stats = mysqli_query($link, "SELECT * FROM stats WHERE user_id = '{$_COOKIE["id"]}'");
        $stats = mysqli_fetch_array($result_stats);
        /*setcookie("money", $stats['user_money'], time()+60*60*24*30, "/");
        setcookie("box_count", $stats['user_box_count'], time()+60*60*24*30, "/");
        setcookie("lvl", $stats['user_lvl'], time()+60*60*24*30, "/");*/

        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: checkhesh.php"); exit();
    }
    else
    {
        print "<div class='text-center'>Вы ввели неправильный логин/пароль</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <title>GoGame | Вход</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <img class="mainphoto" src="../media/mainphoto.png" alt="">
        <div class="container-fluid" style="display: flex;">
            <div class="main-block">
                <div class="mainlogo-block">
                    
                    <h1 class="mainlogo-title"><img class="mainlogo-img" src="../media/logo.png" alt="">GoGame</h1>
                </div>
                <div>
                    <h3 class="maintext-top">Открой мир разработки игр с <br>GoGame</h3>
                    <h5 class="maintext-bottom">Изучай программирование, 3D моделирование <br> и 2D рисунок в игровой форме. <br>Изучай GameDev, играя!</h5>
                </div>
            </div>
            
            <form class="reg-form"  id="form-input" action="" method="post">
                <h2>Вход</h2>
                <!--<div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" required name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                </div>-->
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" required name="mail" id="exampleInputName1"  placeholder="Введите email" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                </div>
                <div class="form-check">
                    <input hidden type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label hidden class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                    <a class="enter-link" href="index.php" id="clickme">Создать профиль</a>
                </div>
                
                <div class="text-right">
                    <input type="submit" name="submit" value="Войти" class="btn btn-primary" style="width:150px">
                </div>
            </form>
        </div>
        
    </main>

    <?php require "footer.php"?>

</body>
</html>