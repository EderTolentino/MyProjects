<?php 
    include "config.php";
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>EDER TOLENTINO</title>
        <link href="_css/reset.css" rel="stylesheet">       
        <link href="_css/header.css" rel="stylesheet">       
    </head>

    <body onload="orderLanguages()">    
        <div id="header_container">
            <div id="header_container_left">
                <div id="logo">
                    <h2><?php echo $lang['header_name'] ?></h2>
                    <p>&lt; &nbsp;<?php echo $lang['header_job'] ?>&nbsp; &gt;</p>
                </div>
            </div> <!-- header_container_left -->

            <div id="header_container_right">
                <ul id="menu-desktop">
                  <li><a href="index.php"><?php echo $lang['header_home'] ?></a></li>
                  <li><a href="aboutme.php"><?php echo $lang['header_aboutme'] ?></a></li>
                  <li><a href="portfolio.php"><?php echo $lang['header_portfolio'] ?></a></li>
                  <li><a href="contacts.php"><?php echo $lang['header_contacts'] ?></a></li>
                  <li>
                      <a href="" >
                          <img src=<?php echo $lang['header_flag'] ?> alt="Language selected" height="15px">
                          <span id="selected_language"><?php echo $lang['header_language'] ?></span>
                      </a>        
                      
                    <ul>                        
                        <li id="lang_en">
                            <a href="index.php?lang=en"><img src="_img/english.jpg" alt="Portuguese flag" width="20px"> ENGLISH</a>
                        </li>
                        <li id="lang_pt">
                            <a href="index.php?lang=pt"><img src="_img/portuguese.jpg" alt="Portuguese flag" height="15px"> PORTUGUÊS</a>
                        </li>
                        <li id="lang_sp">
                            <a href="index.php?lang=sp"><img src="_img/spanish.jpg" alt="Portuguese flag" width="20px"> ESPAÑOL</a>
                        </li>
                        <li id="lang_fr">
                            <a href="index.php?lang=fr"><img src="_img/french.jpg" alt="Portuguese flag" width="20px"> FRANÇAIS</a>
                        </li>
                        
                    </ul>
                  </li>
                </ul>
                
                <ul id="menu-mobile">
                  <li><a href="index.php"><?php echo $lang['header_home'] ?></a></li>
                  <li><a href="aboutme.php"><?php echo $lang['header_aboutme'] ?></a></li>
                  <li><a href="portfolio.php"><?php echo $lang['header_portfolio'] ?></a></li>
                  <li><a href="contacts.php"><?php echo $lang['header_contacts'] ?></a></li>
                  <li>
                      <span >
                          
                          <img src=<?php echo $lang['header_flag'] ?> alt="Language selected" height="15px"><span id="selected_language_Mob"><?php echo $lang['header_language'] ?></span>
                      </span>        
                      
                    <ul id="options_Mob">                        
                        <li id="lang_en_Mob">
                            <a href="index.php?lang=en"><img src="_img/english.jpg" alt="Portuguese flag" width="20px"> ENGLISH</a>
                        </li>
                        <li id="lang_pt_Mob">
                            <a href="index.php?lang=pt"><img src="_img/portuguese.jpg" alt="Portuguese flag" height="15px"> PORTUGUÊS</a>
                        </li>
                        <li id="lang_sp_Mob">
                            <a href="index.php?lang=sp"><img src="_img/spanish.jpg" alt="Portuguese flag" width="20px"> ESPAÑOL</a>
                        </li>
                        <li id="lang_fr_Mob">
                            <a href="index.php?lang=fr"><img src="_img/french.jpg" alt="Portuguese flag" width="20px"> FRANÇAIS</a>
                        </li>
                        
                    </ul>
                  </li>
                </ul>

                <div id="menu-btn">
                    <svg width="30" height="30">
                        <path d="M0,5 30,5"     stroke="#fff" stroke-width="4"/>
                        <path d="M0,15 30,15"   stroke="#fff" stroke-width="4"/>
                        <path d="M0,25 30,25"   stroke="#fff" stroke-width="4"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <script src="_js/jquery.js"></script>
        
        <script>
            $(function() {
                $("div#menu-btn").click(function() {
                    $("#header_container ul#menu-mobile").toggle();
                });
                
                $(window).resize(function() {
                    var largura = $(window).width();
                    
                    if (largura >= 701) {
                        $("#header_container ul#menu-mobile").hide();
                    }
                });
            });
            
            
            $(function() {
                $("#selected_language_Mob").click(function() {
                    $("#header_container ul#options_Mob").toggle();
                });
                
                
            });
            
            
            
        </script>
        <script src="_js/languages.js"></script>
    </body>

</html>



