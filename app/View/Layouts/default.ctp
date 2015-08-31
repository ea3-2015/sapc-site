<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?= $this->Html->meta('icon'); ?>

    <title>
        S.A.P.C.:<?= $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>

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
      <a class="navbar-brand" href="#">S.A.P.C Estado G&uacutearico</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Salir</a></li>
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

      <hr>

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
                <li><a href="#">Informacion General</a>
                </li>
                <li><a href="#">Registros de Acceso</a>
                </li>
                <li><a href="#">Alertas</a>
                </li>
            </ul>
        </li>
        <!-- <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>

            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
            </ul>
        </li> -->
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
                    <?php echo $this->Session->flash(); ?>
                  </div>
        <hr>

        <div class="row">



            <!-- center left-->


            </div><!--/col-->
            <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading"></h4></div>
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

<footer class="text-center">Desarrollado por :<a href="https://www.facebook.com/emanuel.torresclemente"><strong> Emanuel Torres Clemente</strong></a></footer>







        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>







        <!-- JavaScript jQuery code from Bootply.com editor  -->

        <script type='text/javascript'>

        $(document).ready(function() {

            $(".alert").addClass("in").fadeOut(8000);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
    // toggle icon
    $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});

        });

        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>


        <style>
            .ad {
              position: absolute;
              bottom: 70px;
              right: 48px;
              z-index: 992;
              background-color:#f3f3f3;
              position: fixed;
              width: 155px;
              padding:1px;
            }

            .ad-btn-hide {
              position: absolute;
              top: -10px;
              left: -12px;
              background: #fefefe;
              background: rgba(240,240,240,0.9);
              border: 0;
              border-radius: 26px;
              cursor: pointer;
              padding: 2px;
              height: 25px;
              width: 25px;
              font-size: 14px;
              vertical-align:top;
              outline: 0;
            }

            .carbon-img {
              float:left;
              padding: 10px;
            }

            .carbon-text {
              color: #888;
              display: inline-block;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              height: 60px;
              margin-left: 9px;
              width: 142px;
              padding-top: 10px;
            }

            .carbon-text:hover {
              color: #666;
            }

            .carbon-poweredby {
              color: #6A6A6A;
              float: left;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              margin-left: 10px;
              margin-top: 13px;
              text-align: center;
            }
        </style>



    </body>


</html>
