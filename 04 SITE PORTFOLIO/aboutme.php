<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>EDER TOLENTINO</title>
        <link href="_css/reset.css" rel="stylesheet">       
        <link href="_css/aboutme.css" rel="stylesheet"> 
    </head>
    <body>
        
        <?php include_once('header.php') ?>
        
        <div class="content">
            <div id="content_left">
                <p><?php echo $lang['aboutme_p1'] ?></p>
                <p><?php echo $lang['aboutme_p2'] ?></p>
                <p><?php echo $lang['aboutme_p3'] ?></p>
                <p><?php echo $lang['aboutme_p4'] ?></p>                     
            </div>
            <div id="content_right">
                <img src="_img/photoEder.jpg" alt="<?php echo $lang['aboutme_img'] ?>">
            </div>
            
            <div id="content_bottom">
                
                <h2 class="frontEndColor"><?php echo $lang['aboutme_frontEnd'] ?></h2>
                <div class="frontEnd frontEndColor">
                    <div class="apps html">
                        <h6><?php echo $lang['aboutme_html5'] ?></h6>
                        <img src="_img/_icons/html5.png" alt="HTML5 icon">
                    </div>
                    <div class="apps css">
                        <h6><?php echo $lang['aboutme_css3'] ?></h6>
                        <img src="_img/_icons/css3.png" alt="CSS3 icon">
                    </div>
                    <div class="apps javascript">
                        <h6><?php echo $lang['aboutme_javaScript'] ?></h6>
                        <img src="_img/_icons/javascript.png" alt="Java Script icon">
                    </div>
                    <div class="apps responsive">
                        <h6><?php echo $lang['aboutme_responsive'] ?></h6>
                        <img src="_img/_icons/responsive.png" alt="Responsividade image">
                    </div>                    
                    <div class="apps bootstrap">
                        <h6><?php echo $lang['aboutme_bootstrap'] ?></h6>
                        <img src="_img/_icons/bootstrap.png" alt="Bootstrap icon">
                    </div>
                    <div class="apps jquery">
                        <h6><?php echo $lang['aboutme_jQuery'] ?></h6>
                        <img src="_img/_icons/jquery.png" alt="jQuery icon">
                    </div>
                    <div class="apps ajax">
                        <h6><?php echo $lang['aboutme_ajax'] ?></h6>
                        <img src="_img/_icons/ajax.png" alt="AJAX icon">
                    </div>
                </div>
                                
                <h2 class="backEndColor"><?php echo $lang['aboutme_backEnd'] ?></h2>
                <div class="backEnd backEndColor">
                    <div class="apps php">
                        <h6><?php echo $lang['aboutme_php'] ?></h6>
                        <img src="_img/_icons/php.png" alt="PHP icon">
                    </div>
                    <div class="apps c">
                        <h6><?php echo $lang['aboutme_c'] ?></h6>
                        <img src="_img/_icons/c.png" alt="C icon">
                    </div>
                    <div class="apps database">
                        <h6><?php echo $lang['aboutme_database'] ?></h6>
                        <img src="_img/_icons/database.png" alt="Database icon">
                    </div>
                    <div class="apps git">
                        <h6><?php echo $lang['aboutme_git'] ?></h6>
                        <img src="_img/_icons/git.png" alt="Git icon">
                    </div>
                    <div class="apps github">
                        <h6><?php echo $lang['aboutme_github'] ?></h6>
                        <img src="_img/_icons/github.png" alt="Github icon">
                    </div>
                </div>
                
                <h2 class="toolsColor"><?php echo $lang['aboutme_tools'] ?></h2>
                <div class="tools toolsColor">
                    <div class="apps brackets">
                        <h6><?php echo $lang['aboutme_brackets'] ?></h6>
                        <img src="_img/_icons/brackets.png" alt="Brackets icon">
                    </div>
                    <div class="apps visualstudio">
                        <h6><?php echo $lang['aboutme_visualStudio'] ?></h6>
                        <img src="_img/_icons/visualstudio.png" alt="Visual Studio icon">
                    </div>
                    <div class="apps netbeans">
                        <h6><?php echo $lang['aboutme_netBeans'] ?></h6>
                        <img src="_img/_icons/netbeans.png" alt="NetBeans icon">
                    </div>
                    <div class="apps navicat">
                        <h6><?php echo $lang['aboutme_naviCat'] ?></h6>
                        <img src="_img/_icons/navicat.png" alt="NaviCat icon">
                    </div>
                    <div class="apps xampp">
                        <h6><?php echo $lang['aboutme_xampp'] ?></h6>
                        <img src="_img/_icons/xampp.png" alt="XAMPP icon">
                    </div>
                </div>
                
                
                <h2 class="interestsColor"><?php echo $lang['aboutme_nextSteps'] ?></h2>
                <div class="interests interestsColor">
                    <div class="apps seo">
                        <h6><?php echo $lang['aboutme_seo'] ?></h6>
                        <img src="_img/_icons/seo.png" alt="SEO icon">
                    </div>
                    <div class="apps nodejs">
                        <h6><?php echo $lang['aboutme_nodeJS'] ?></h6>
                        <img src="_img/_icons/nodejs.png" alt="NodeJS icon">
                    </div>
                    <div class="apps java">
                        <h6><?php echo $lang['aboutme_java'] ?></h6>
                        <img src="_img/_icons/java.png" alt="Java icon">
                    </div>
                    <div class="apps python">
                        <h6><?php echo $lang['aboutme_python'] ?></h6>
                        <img src="_img/_icons/python.png" alt="Python icon">
                    </div>
                </div>
            </div>
        </div>
        
        <?php include_once('footer.php'); ?>
        
        <script src="_js/jquery.js"></script>
    </body>
</html>