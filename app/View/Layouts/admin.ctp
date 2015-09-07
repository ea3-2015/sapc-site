<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        
        
        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('jquery.min'));
        echo $this->Html->script(array('bootstrap.min'));
        echo $this->Html->script(array('scripts'));
       //echo $this->Html->script(array('scripts2'));
    ?>
    <?= $this->Html->meta('icon'); ?>

    <title>
        S.A.P.C.:<?= $this->fetch('title'); ?>
    </title>
    
    <style type="text/css">
      .navbar-static-top {
        margin-bottom:20px;
      }

      i {
        font-size:16px;
      }

      .nav > li > a {
        color:#787878;
      }

      footer {
        margin-top:20px;
        padding-top:20px;
        padding-bottom:20px;
        background-color:#efefef;
      }

      /* count indicator near icons */
      .nav>li .count {
        position: absolute;
        bottom: 12px;
        right: 6px;
        font-size: 9px;
        background: rgba(51,200,51,0.55);
        color: rgba(255,255,255,0.9);
        line-height: 1em;
        padding: 2px 4px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;
      }

      /* indent 2nd level */
      .list-unstyled li > ul > li {
         margin-left:10px;
         padding:8px;
      }
    </style>
</head>

<body class="left-sidebar">



        <!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">S.A.P.C del Estado G&uacutearico</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><?= $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login'));?></li>
          </ul>
        </li>
        <li><?= $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout'));?></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
<div class="row">
    <div class="col-sm-3">
      <!-- Left column -->

     

      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Menu <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <?php echo $this->Html->link(__(' Inicio'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'glyphicon glyphicon-home')); ?>  </li>
                <li class="active"> <?php echo $this->Html->link(__(' Noticias'), array('controller' => 'noticias', 'action' => 'index'), array('class'=>'glyphicon glyphicon-plus')); ?>  </li>
                <li class="active"> <?php echo $this->Html->link(__(' Personas'), array('controller' => 'people', 'action' => 'index'), array('class'=>'glyphicon glyphicon-tint')); ?>  </li>
                <li class="active"> <?php echo $this->Html->link(__(' Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class'=>'glyphicon glyphicon-screenshot')); ?>  </li>

                <!-- <li><a href="#"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li> -->
            </ul>
        </li>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reportes <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>

            <ul class="list-unstyled collapse" id="menu2">
                <li><?php echo $this->Html->link(__(' Registro de Usuarios'), array('controller' => 'pages', 'action' => 'graficas'), array('class'=>'glyphicon glyphicon-home')); ?>
                </li>
                

            </ul>
        </li>
        <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>

            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
            </ul>
        </li> 
      </ul>
      <hr>
         <a href="#"><strong>Devolpers:</strong></a></br>
         <a href="https://www.facebook.com/emanuel.torresclemente"><strong>Emanuel Torres</strong></a><br>
         <a href="https://www.facebook.com/nelson6e65"><strong>Nelson Martell</strong></a></br>


      <hr>




    </div><!-- /col-3 -->
    <div class="col-sm-9">

      <!-- column 2 -->
      <ul class="list-inline pull-right">
         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
         <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li> -->
      </ul>
      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Panel Principal</strong></a>
                <div class="alert alert-info">
                    <?php echo $this->Flash->render(); ?>
                  </div>
        <hr>

        <div class="row">



            <!-- center left-->


            </div><!--/col-->
            <div class="col-md-12">
                <div class="panel panel-default">
                  <!--<div class="panel-heading"></h4></div>-->
                  <div class="panel-body">



                    <?php echo $this->fetch('content'); ?>



                  </div>
                </div>



                <div class="panel panel-default">


                  </div><!--/panel content-->
                </div><!--/panel-->

                <div class="panel panel-default">

               </div><!--/panel-->

            </div><!--/col-span-6-->

      </div><!--/row-->



      <div class="row">
        <div class="col-md-12">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center">Desarrollado por :<a href="https://www.facebook.com/emanuel.torresclemente"><strong> Emanuel Torres Clemente</strong></a> & <a href="https://www.facebook.com/nelson6e65"><strong> Nelson Martell</strong></a></footer>







    


        







    </body>


</html>
