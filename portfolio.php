<?php
    require_once 'phpScript/bootstrapColumn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!--<meta http-equiv="refresh" content="1">-->
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="css/customNavbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/portfolio.css" rel="stylesheet" type="text/css"/>
        <title> QG Portfolio </title>
        <style>
        </style>
        <script>
            $(document).ready(function(){
                $('body').scrollspy(
                    { 
                        target: '#navBarContainer'
                    }
                )
            });
        </script>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container-fluid" id="navBarContainer">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggledNav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="QG" src="...">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="toggledNav">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="#section1">About</a></li>
                        <li class=""><a href="#section2">Projects 1</a></li>
                        <li class=""><a href="#section3">Projects 2</a></li>
                        <li class=""><a href="#section4">Section 4</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="#contact"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        <!--<main>-->
        
        
        <section id="section1">
        <?php  
//            $nCol = 1;
//            $xs = 12;$sm = 8;$md = 6;$lg = 6;
//            $row ="";
//            $row1="";
//            BSColumn($xs, $sm, $md, $lg, $nCol, $row1, $row);
        ?>
        <div class="container">
            <h1 class="text-center">About Me</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1"> 
                    <div class="thumbnail">
                        <img src="img/icon/default-image-profile-facebook.jpg" alt="" class="img-circle"/>
                        <div class="caption text-center">
                            Profile Picture
                        </div>
                    </div>
                </div>
                <!--<div class="<?php // echo $row1;?>">-->
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <div>
                        <h3> part 1 </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisi ante, et posuere purus posuere eu. Nulla eu arcu lorem. Praesent auctor hendrerit nibh at dapibus. Maecenas magna ex, molestie a urna vel, sodales suscipit felis. Phasellus vehicula, tortor non porttitor convallis, mauris neque molestie nisl, sit amet dictum magna nunc sed diam. Morbi mattis magna et nisl tempor pulvinar. Aenean venenatis nisi nec turpis consequat, id finibus augue semper. Suspendisse ut convallis mi, sit amet bibendum lectus. Duis ultricies, mauris vitae euismod malesuada, lacus ligula rutrum mi, ut cursus ex massa non arcu. Pellentesque mattis tristique libero in vulputate. Curabitur orci dui, bibendum non nunc sed, vehicula aliquet massa. Quisque vitae purus ut orci eleifend laoreet. Donec quis tempus elit. Quisque ante risus, mattis non dui finibus, laoreet vulputate urna. In vulputate posuere nunc.
                        </p>
                        <h3> part 2</h3>
                        <p>
                            Nunc vitae velit lacus. Donec elementum, nibh a tincidunt laoreet, velit ante ultrices velit, vel tincidunt dui risus vel sapien. Nulla semper pharetra gravida. Proin commodo dictum dolor, nec semper augue tempor ac. Aliquam ac dictum eros, vitae molestie arcu. Donec eget semper odio. Praesent imperdiet quam est, vel elementum massa sodales fringilla. Proin porta, purus iaculis dapibus auctor, augue leo lobortis metus, at semper arcu erat id elit. Morbi eu risus id turpis placerat lacinia. Etiam tellus enim, porta at massa sit amet, ullamcorper volutpat ligula. Maecenas semper erat hendrerit, elementum eros et, tincidunt magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent eu dignissim dolor, ultrices rhoncus nibh.
                        </p>
<!--                        <h3> part 3</h3>
                        <p>
                            Nam posuere nunc sed massa facilisis, ac fringilla nisi porttitor. Praesent id odio diam. Etiam quis metus tellus. Nulla eu nibh pellentesque, tincidunt eros at, convallis nisl. Sed accumsan mattis efficitur. Nullam tincidunt elementum ipsum vitae varius. Suspendisse vitae dui justo. Maecenas fringilla vitae erat eget laoreet.
                        </p>
                        <h3> part 4</h3>
                        <p>
                            Cras tempor mauris venenatis, posuere metus in, dignissim orci. In at tellus facilisis, imperdiet orci egestas, porta leo. Duis vestibulum neque urna, vitae elementum mi tempus et. Curabitur aliquam tellus ac elit aliquam euismod. Etiam volutpat ipsum dolor, ut iaculis lacus pharetra sit amet. Ut consequat, leo nec pellentesque laoreet, est mi molestie quam, elementum iaculis lacus magna eu ipsum. Vestibulum fermentum ex sit amet porttitor volutpat. Nam sed ornare ligula. Nullam ac magna turpis. Etiam condimentum, augue at placerat congue, orci eros efficitur enim, a interdum risus orci nec nisl.
                        </p>
                        <h3> part 5</h3>
                        <p>
                            Aenean faucibus fermentum semper. Quisque sollicitudin leo dui, molestie pulvinar orci euismod nec. Praesent dictum elit sit amet erat consequat, nec eleifend leo iaculis. Vestibulum eleifend aliquet condimentum. Integer arcu tellus, congue ut pharetra sed, laoreet a sem. Ut turpis augue, hendrerit sit amet aliquam et, consectetur quis tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas hendrerit rhoncus nulla vitae fringilla. Sed quis est consectetur, fringilla turpis non, rhoncus nisl. Sed dignissim nisi sem, vitae maximus mi feugiat ac. Phasellus sagittis diam quis augue venenatis suscipit. Aliquam at elementum est. Fusce in ex a nunc dictum congue et vel orci. Suspendisse bibendum tellus at rutrum viverra. Integer semper eu purus sed congue. 
                        </p>-->
                    </div>
                </div>
            </div>
            
            
            
        </div>
        </section>
        <section id="section2">
        <?php  
            $nCol = 4;
            $xs = 12;$sm = 3;$md = 3;$lg = 3;
            $row ="";
            $row1="";
            BSColumn($xs, $sm, $md, $lg, $nCol, $row1, $row);
        ?>
        <div class="container">
            <h2 class="text-center">Projects</h2>
            <div class="row">
                <div class="<?php echo $row1?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                        </div>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            
        </div>
        </section>
        <section id="section3">
        <div class="container">

            
            
            <h2 class="text-center">Projects</h2>
            <div class="row">
                <div class="<?php echo $row1?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $row?>">
                    <div class="thumbnail">
                        <a href="http://codepen.io/" target="_blank">
                            <img src="img/icon/copePen icon transparent.png" alt="" class="img-responsive"/>
                            <div class="caption text-center">
                                my 1 project
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </section>
        <section id="section4">
        <div class="container">
        <?php  
            $nCol = 1;
            $xs = 12;$sm = 8;$md = 6;$lg = 6;
            $row ="";
            $row1="";
            BSColumn($xs, $sm, $md, $lg, $nCol, $row1, $row);
        ?>
        <div class="container">
            <div class="row">
                <div class="<?php echo $row1;?>">
                    <h1 class="text-center">Section 4</h1>
                    Test41<br>
                    Test42<br>
                    Test43<br>
                    Test44<br>
                    Test45<br>
                    Test46<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
                    Test4<br>
            
                </div>
            </div>
        </div>
            
        </div>
        </section>
        <section id="contact">
        <div class="container-fluid">
            
            <div class="row">
                <?php  
                    $nCol = 4;
                    $xs = 3;$sm = 1;$md = 1;$lg = 1;
                    $rowSet ="";
                    $rowSetFirst="";
                    BSColumn($xs, $sm, $md, $lg, $nCol, $rowSetFirst, $rowSet);
//                    $xsO=(12-($nCol*$xs))/2; $smO=(12-($nCol*$sm))/2; $mdO=(12-($nCol*$md))/2; $lgO=(12-($nCol*$lg))/2;
//                    $rowSet = "col-xs-$xs col-sm-$sm col-md-$md col-lg-$lg";
//                    $rowSetFirst = "col-xs-$xs col-sm-$sm col-md-$md col-lg-$lg col-xs-offset-$xsO col-sm-offset-$smO col-md-offset-$mdO col-lg-offset-$lgO"; 
                ?>
                <!--<div class="img-thumbnail col-xs-3 col-sm-2 col-md-1">-->
                <!--<div class="col-xs-3 col-sm-2 col-sm-offset-2 col-md-1 col-md-offset-4 col-lg-1 col-lg-offset-4">-->
                <div class="<?php echo $rowSetFirst;?>">
                    <!--<div class="img-thumbnail text-center">-->
                        <a href="https://github.com/QGfcc">
                            <!--<img src="img/homer-simpson-the-simpsons-cartoons-1920x1080-wallpaper478364.jpg" alt="" class="img-thumbnail"/>-->
                            <img src="img/icon/github.png" alt="" class="img-responsive img-circle"/>
<!--                            <div class="caption">
                                GitHub
                            </div>-->
                        </a>
                    <!--</div>-->
                </div>
                <!--<div class="col-xs-3 col-sm-2 col-md-1">-->
                <div class="<?php echo $rowSet;?>">
                    <!--<div class="img-thumbnail text-center">-->
                        <a href="https://www.freecodecamp.com/qgfcc">
                            <img src="img/icon/index_inverted transparent.png" alt="" class="img-responsive img-circle"/>
<!--                            <div class="caption">
                                FreeCodeCamp
                            </div>-->
                        </a>
                    <!--</div>-->
                </div>
                <!--<div class="col-xs-3 col-sm-2 col-md-1">-->
                <div class="<?php echo $rowSet;?>">
                    <!--<div class="img-thumbnail text-center">-->
                        <a href="https://www.linkedin.com/">
                            <img src="img/icon/linkedin-3-xxl.png" alt="" class="img-responsive img-circle"/>
<!--                            <div class="caption">
                                LinkedIn
                            </div>-->
                        </a>
                    <!--</div>-->
                </div>
                <!--<div class="col-xs-3 col-sm-2 col-md-1">-->
                <div class="<?php echo $rowSet;?>">
                    <!--<div class="img-thumbnail text-center">-->
                        <a href="https://facebook.com/">
                            <img src="img/icon/facebook-symbol_318-37686.png" alt="" class="img-responsive img-circle"/>
<!--                            <div class="caption">
                                Facebook
                            </div>-->
                        </a>
                    <!--</div>-->
                </div>
            </div>
        </div>
        </section>
        <!--</main>-->
        <!--<section id="footer">-->
            <footer class="text-center">
                <!--<div class="container">-->
                    <!--<div class="text-center">-->
                        <!--<p class="text-left">-->
                    <!--<h6 class="text-center">-->   
                        <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisi ante, et posuere purus posuere eu.-->
                        Coded by <a href="https://github.com/QGfcc/learning">QG</a>
                        <!--</p>-->
                    <!--</div>-->
                <!--</div>-->
            </footer>
        <!--</section>-->

    </body>
</html>

