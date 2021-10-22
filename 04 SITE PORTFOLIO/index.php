<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>EDER TOLENTINO</title>
        <link href="_css/reset.css" rel="stylesheet">       
        <link href="_css/index.css" rel="stylesheet"> 
    </head>
    <body>
        
        <?php include_once('header.php') ?>
        
        <div class="main">
            <div id="presentation">
                <p id="p1_home"><?php echo $lang['home_p1'] ?></p>
                <p id="p2_home"><?php echo $lang['home_p2'] ?></p>
                <p id="p3_home"><?php echo $lang['home_p3'] ?></p>
                <p id="p4_home"><?php echo $lang['home_p4'] ?></p>
            </div>
            <div id="photo">
                <img src="_img/photoEder.jpg" alt="<?php echo $lang['home_img'] ?>">
            </div>
        </div>
        
        <?php include_once('footer.php'); ?>
        
        <script src="_js/jquery.js"></script>
    </body>
</html>