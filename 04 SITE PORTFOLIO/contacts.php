<?php require_once("_include/function.php"); ?>

<?php
    if ( isset($_POST['send']) ) {
        if ( enviarMensagem($_POST) ) {
            $mensagem = "Mensagem enviada com sucesso.";
        } else {
            $mensagem = "Erro no envio.";
        }
    }
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>EDER TOLENTINO</title>
        <link href="_css/reset.css" rel="stylesheet">       
        <link href="_css/contacts.css" rel="stylesheet">    
    </head>
    <body>
        
        <?php include_once("header.php"); ?>
                
        <div id="content"> 
            <div id="content_left">
                
                <div id="content_top">
                    <h1><?php echo $lang['contacts_hello'] ?></h1>
                </div>
                <p><?php echo $lang['contacts_p1'] ?></p> 
                <p><?php echo $lang['contacts_p2'] ?></p>
                
                    <span class="fa fa-home"></span><span>Lisboa, Portugal</span><br>
                    <span class="fa fa-phone"></span><span>(+351) 910 116 613</span><br>
                    <span class="fa fa-envelope"></span><span>tolentino.webdev@gmail.com</span><br>
            </div>
            
            
            
            <div id="content_right">
                <form action="contacts.php" method="post">
                    <input type="text" name="name" placeholder="<?php echo $lang['contacts_formName'] ?>">
                    <input type="email" name="email" placeholder="<?php echo $lang['contacts_formEmail'] ?>">
                    <label><?php echo $lang['contacts_formLabel'] ?></label>
                    <textarea name="message"></textarea>
                    <input type="submit" name="send" value="<?php echo $lang['contacts_send'] ?>">
                    
                    <?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>                     
                </form>
            </div>
        </div>
        
        
        <?php include_once('footer.php'); ?>
        
        <script src="_js/jquery.js"></script>
    </body>
</html>