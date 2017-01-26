<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mustache</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/> 
        <link rel="stylesheet" href="must.css"/> 
        
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div id="first">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                      <a id="one" href="#">  
                          <img  class="img-responsive" src="logo.jpg">
                      </a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    
                            <ul class="nav navbar-nav">
                                <li role="presentation"><a href="#">Home</a></li>
                                <li role="presentation"><a href="#">About</a></li>
                                <li role="presentation"><a href="#">Gallery</a></li>
                                <li role="presentation"><a href="#">Blog</a></li>
                                <li role="presentation"><a href="#">Contact</a></li>
                            </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
        </div>
        <div id="second">
            <h2 class="pull-left">THE BEACON TO ALL MANKIND</h2><br>
            <h3 class="pull-left">Our website templates are created with</h3><br>
            <h3 class="pull-left">inspiration, checked for quality and originality</h3><br>
            <h3 class="pull-left">and meticulously sliced and coded.</h3><br>
            <a class="pull-left"><button class="btn btn-lg btn-info">Read More</button></a>
        </div>
        <div id="third" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="the-father.jpg">
                        <div class="caption">
                            <h3>The Father</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="the-nerd.jpg">
                        <div class="caption">
                            <h3>The Author</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="the-actor.jpg">
                        <div class="caption">
                            <h3>The Nerd</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <p class="pull-left">© 2023 by Mustacchio. All rights reserved.</p>
            <div class="pull-right" id="img">
                <a href="#" id="bg1"></a>
                <a href="#" id="bg2"></a>
                <a href="#" id="bg3"></a>
                <a href="#" id="bg4"></a>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
