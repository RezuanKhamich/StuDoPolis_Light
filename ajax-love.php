<?php
      include("config.php");
      $ip=$_SERVER['REMOTE_ADDR'];//client ip address
      if($_POST['id'])
      {
        $id=$_POST['id'];
        //IP-address verification 
        $ip_sql=mysqli_query($link, "select ip_add from image_IP where img_id_fk='$id' and ip_add='$ip'");
        $count=mysqli_num_rows($ip_sql);
        if($count==0)
        {
            // Updateing Love Value
            $sql = "update images set love=love+1 where img_id='$id'";
            mysqli_query( $sql);
            // Inserting Client IP-address
            $sql_in = "insert into image_IP (ip_add,img_id_fk) values ('$ip','$id')";
            mysqli_query( $sql_in);
            $result=mysqli_query($link, "select love from images where img_id='$id'");
            $row=mysqli_fetch_array($result);
            $love=$row['love'];
        ?>
            <span class="on_img" text-align="left"><?php echo $love; ?></span>
            <?php
        }
        else
        {
            // Already Loved
            echo 'NO !';
        }
      }
?>