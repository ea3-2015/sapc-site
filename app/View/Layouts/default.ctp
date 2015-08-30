<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        SAPC:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Secretaría de Asuntos Parroquiales y Comunales del Estado Guárico</h1>
        </header>

        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>

    </div>
</body>
</html>
