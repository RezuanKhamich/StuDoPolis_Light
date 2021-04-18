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
            if(isset($_COOKIE["id"])){
                echo'<a href="company.php"> <button class="btn btn-primary">Принять участие</button>';
            }
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