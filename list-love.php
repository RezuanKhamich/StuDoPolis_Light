<?php
include('config.php');
$sql=mysqli_query($link, "select * from images");
echo'Не раб';
while($row = mysqli_fetch_array($sql))
{
    $img_id=$row['img_id'];
    $img_url=$row['img_url'];
    $love=$row['love'];
    ?>
    <div>
        <div class="box" text-align="left">
            <a href="#" class="love" id="<?php echo $img_id; ?>">
                <span class="on_img" text-align="left"> <?php echo $love; ?> </span>
            </a>
        </div>
        <img src='<?php echo $img_url; ?>' />
    </div>
    <?php
}
?>