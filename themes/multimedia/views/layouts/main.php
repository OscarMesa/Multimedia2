<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <?php
        //  Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <script type="text/javascript" src="themes/multimedia/lib/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="themes/multimedia/lib/jquery-ui-1.10.4/js/jquery-ui-1.10.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="themes/multimedia/lib/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/template.css" media="screen, projection" />
    </head>
    <body>
        <header></header>
        <section id="contenido">
<?php
echo $content;
?>
        </section>
        <footer></footer>
    </body>
</html>