<?php 
    include_once "config.php";
        $members = array();
        $name = array();
        $data = array($members, $name); 

        $result = mysqli_query($link, "SELECT * FROM `company_members`"); 
        while($myrow = mysqli_fetch_assoc($result)) {
            $data[0][] = $myrow['rockstar'];
            $data[0][] = $myrow['bethesda']; 
            $data[0][] = $myrow['blizzard'];
            $data[0][] = $myrow['epicgames'];
            $data[0][] = $myrow['ubisoft']; 
            $data[0][] = $myrow['valve'];
            
        }
        $data[1][] = 'rockstar';
        $data[1][] = 'bethesda'; 
        $data[1][] = 'blizzard';
        $data[1][] = 'epicgames';
        $data[1][] = 'ubisoft'; 
        $data[1][] = 'valve';

        $data[2][] = 'https://vk.me/join/AJQ1d29QURjJ2Fdbz9FUqLd4';
        $data[2][] = 'https://vk.me/join/AJQ1d0NeZhhJ7tdL0xQZhKsn'; 
        $data[2][] = 'https://vk.me/join/AJQ1d/PBZxiDQ1xs6oTcmOFA';
        $data[2][] = 'https://vk.me/join/AJQ1dxJVORgZ3MnHU62aepWt';
        $data[2][] = 'https://vk.me/join/AJQ1d0gtSxgtDEvYqJKKjsiC'; 
        $data[2][] = 'https://vk.me/join/AJQ1dxbmYBihw37fqlWLR7HN';

        function com_sort(&$array)
        {
            for ($j = 0; $j < count($array[0]) - 1; $j++){
                for ($i = 0; $i < count($array[0]) - $j - 1; $i++){
                    // если текущий элемент больше следующего
                    if ($array[0][$i] > $array[0][$i + 1]){
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

        com_sort($data); 

        /*for($i = 0; $i < 6 ; $i++){
            echo($data[0][$i]);
        }*/

        $name = $data[1][0];
        $count = $data[0][0] + 1;
        if(!isset($_COOKIE["company"])){
            mysqli_query($link, "UPDATE company_members SET ".$name." ='".$count."' WHERE id='1'"); 
            setcookie("company", $name, time()+60*60*24*30, "/");
        }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Main CSS -->
		<link href="css/style-181.css" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame</title>
    </head>
    <body>
        
        <?php require "header.php"?>

        <main class="content-wrapper">
            <div class="container-fluid text-center">
                    <!-- UI # -->
        <div class="ui-181">
        
        <div class="container-fluid">
            
            <?php require 'comp_rate.php'?>
        </div>
        <?php 
            echo('
                <h3>Твоя компания <kbd>'.$_COOKIE["company"].'</kbd></h3>
                <br>
            ');
            /*if(!isset($_COOKIE["company"])){
                echo'<a href="'.$data[2][0].'"> <button class="btn btn-primary">Вперед</button>';
            }*/
        ?>
        </div>
    </main>
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery-3.5.1.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Placeholder JS -->
    <script src="js/placeholder.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>

    <script>
        $(function() {
                
            setTimeout(function(){
            
                $('.bar-content').each(function() {
                    var me = $(this);
                    var perc = me.attr("data-limit");
                    var current_perc = 0;
                    
                    if(!$(this).hasClass('stop')){
                    
                        var progress = setInterval(function() {
                                                        
                            if (current_perc>=perc) {
                                clearInterval(progress);
                            } else {
                                current_perc +=1;
                                me.css('height', (current_perc)+'%');
                            }
                    
                        }, 15);
                        
                        me.addClass('stop');
                        
                    }
                    
                });
                
            }, 0);
            
        });

    </script>
    <?php require "footer.php"?>
    
</body>
</html>