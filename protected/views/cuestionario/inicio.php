<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="message flash-' . $key . '">' . $message . "</div>\n";
}
?>
<article id="contenido-multimedia">
    <img class="personaje-derecha" src="themes/multimedia/imagenes/multimedia/FONDO MULTIMEDIA-03.png" width="300" height="500">
    <img class="personaje-izquierda" src="themes/multimedia/imagenes/multimedia/FONDO MULTIMEDIA-02.png" width="300" height="500">
    <div id="controles" class="grid-100">
        <div class="icono icono1" href="bienvenida.html" onclick="icono(this)">
            <img src="themes/multimedia/imagenes/multimedia/Botones-01">
        </div>
    </div>
    <area class="bnt1" shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
</article>


<script type="text/javascript">
            var ex = false;
            $(document).on('click', '.load', function(e) {
                var button = $(this);
                $('#contenido-multimedia').fadeOut('slow', function() {
                    $('#contenido-multimedia').load('<?php echo Yii::app()->createAbsoluteUrl('cuestionario') ?>/' + button.attr('href'), function() {
                        $('#contenido-multimedia').fadeIn('slow');
                        window.history.pushState('', 'Multimedia', '<?php echo Yii::app()->getBaseUrl(true) ?>/' + button.attr('href'));
                    });
                })

                e.preventDefault();
            });

            $(document).on('click', '#finalizar', function(e) {
                window.location.href = "<?php echo Yii::app()->getBaseUrl(true) ?>/cuestionario/generador";
                e.preventDefault();
            });
            setTimeout(function() {
                $('.message').hide(600);
            }, 5000);
</script>


<style type="text/css">
    .bnt1{
         border: 1px solid #FF0000;
        bottom: 104px;
        left: -56px;
        position: absolute;
    }
    .personaje-derecha{
        bottom: -162px;
        left: -72px;
        position: absolute;
        z-index: 10;
    }
    .personaje-izquierda{
        bottom: -162px;
        position: absolute;
        right: -81px;
    }
    #contenido-multimedia{
        background: url("themes/multimedia/imagenes/multimedia/FONDO MULTIMEDIA-01.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        background-size:858px 525px ;
        position: relative;
        height: 525px;
        width:858px; 
        margin:0 auto;
    }
    .flechas {
        position: absolute;
        left: 44%;
        bottom: 0px;
        width: 125px;
        z-index: 999;

    }
    .flechas img {
        width: 40px;
    }

    .flechas span {
        display: block;
        font-size: 10px;
    }
    .flechas a {
        color: #000000;
        display: inline-block;
        text-decoration: none;
    }
</style>