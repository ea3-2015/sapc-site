<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página administrativa des SAPC del estado Guárico">
    <meta name="author" content="Nelson Martell (nelson6e65-dev@yahoo.es)">

    <?= $this->fetch('meta'); ?>

    <title>SAPC - Administración</title>

    <?=  $this->Html->css('/libs/bootstrap/dist/css/bootstrap.min.css');?>

    <?=  $this->Html->css('/libs/bootstrap-social/bootstrap-social.css');?>

    <?=  $this->Html->css('/libs/font-awesome/css/font-awesome.css');?>

    <?=  $this->Html->css('/libs/metisMenu/dist/metisMenu.min.css');?>

    <?=  $this->Html->css('/libs/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css');?>

    <?= $this->fetch('css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?= $this->element('Admin/navbar'); ?>

            <?= $this->element('Admin/sidebar'); ?>

        </nav>
        <!-- /.navbar-static-side -->



        <!-- Content -->
        <div id="page-wrapper">

            <?= $this->fetch('content') ?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Carga de scripts -->
    <?= $this->Html->script('/libs/jquery/dist/jquery.min.js'); ?>

    <?= $this->Html->script('/libs/bootstrap/dist/js/bootstrap.js'); ?>

    <?= $this->Html->script('/libs/metisMenu/dist/metisMenu.min.js'); ?>

    <?= $this->Html->script('/libs/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js'); ?>

    <?= $this->fetch('script'); ?>

</body>

</html>
