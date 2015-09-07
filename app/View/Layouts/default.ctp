
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <?php
        echo $this->Html->css(array('blog-min'));
        echo $this->Html->css(array('blog-bootstrap'));
       // echo $this->Html->css(array('bootstrap.min'));
        echo $this->Html->css(array('blog-post'));
        echo $this->Html->css(array('full-slider'));
        echo $this->Html->css(array('modern-business'));
        echo $this->Html->css(array('hover'));
        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('jquery.min'));
        echo $this->Html->script(array('blog-jquery'));
        echo $this->Html->script(array('blog-bootstrap'));
        echo $this->Html->script(array('blog-bootstrap.min'));
        echo $this->Html->script(array('bootstrap.min'));
        echo $this->Html->script(array('scripts'));
        
        
    ?>
  </head>
  <body>
  
       <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                    <center>
                    <img src="/html/sapc-site/app/webroot/img/foto1.jpg" class="img-responsive">
                    </center>
                </div>
                <div class="carousel-caption">
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" >
                     <center>
                    <img src="/html/sapc-site/app/webroot/img/foto2.jpg" class="img-responsive">
                    </center>
                </div>
                <div class="carousel-caption">
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" >
                    <center>
                    <img src="/html/sapc-site/app/webroot/img/foto3.jpg" class="img-responsive">
                    </center>
                </div>
                <div class="carousel-caption">
                    <h2>&nbsp;</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    
<!-- /.navbar -->
<!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">S.A.P.C DEL GU&Aacute;RICO</a>
            </div>
            
      </a>
      <div id= "navbarCollapse" class="nav-collapse collase">
        <ul class="nav navbar-nav">  
          <li ><?php echo $this->Html->link(__(' INICIO'), array('controller' => 'noticias', 'action' => 'npublic'),array('class'=>'hvr-sweep-to-top')); ?></li>
          <li><?php echo $this->Html->link(__(' MISION'), array('controller' => 'pages', 'action' => 'mision'),array('class'=>'hvr-sweep-to-top')); ?> </li>
          <li><?php echo $this->Html->link(__(' VISION'), array('controller' => 'pages', 'action' => 'vision'),array('class'=>'hvr-sweep-to-top')); ?> </li>
          <li><a href="#">LEYES</a></li>
          <li><a href="#">CONTACTENOS</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search">
                     <div class="input-group-btn">
                       <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                     </div>
                  </div>
                </form>
              </ul>
          </li>
              <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="#">About</a></li>
                </ul>
              </li>  
        </ul>

      </div>        
            
        </div>
        
</nav>
    
<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
              <?php echo $this->fetch('content'); ?>
              <center>
            <paginador><!-- etiqueta personalidad-->
                <?php echo $this->fetch('paginador'); ?>
            </paginador>
            </center>
                
            </div>

            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    
                    <div class="row">
                        <div class="col-lg-12">
                       
                            <a class="twitter-timeline" href="https://twitter.com/rerchacin" data-widget-id="639724662407172096">Tweets por el @rerchacin.</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                          
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">

                    <h4>Paginas Amigas</h4>

                    <h4>Side Widget Well</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
        <!-- Footer -->

        
    </div>
   
        <footer class= "footer">
            
                <div class="pull-4">
                        <ul class="footer-links">
                            <li class="li-footer"><a href="#" class="link-footer">INICIO</a></li>
                            <li class="li-footer"><a href="#">MISION</a></li>
                            <li class="li-footer"><a href="#">VISION</a></li>
                            <li class="li-footer"><a href="#">LEYES</a></li>
                            <li class="li-footer"><a href="#">CONTACTENOS</a></li>
                            
                        </ul>
             
                       <p id="pfooter">Copyright &copy; Sitio web 2015</p>
                </div>
                <div class="pull-8">
               <table>
               <tr>        
                    <td><?= $this->Html->image('EmanuelTorres.jpg');?></td>
                    <td><p id="name">EMANUEL TORRES C.</p>
                    <p id="name">Frontend</p></td>
              
                    <td><?= $this->Html->image('NelsonMartell.jpg');?></td> 
                    <td><p id="name">Nelson Martell</p>
                    <p id="name">Backend</p></td>
              </tr>
              </table>
                        </div>
              
  
  </footer>

    </div>

  
</body>

</html>