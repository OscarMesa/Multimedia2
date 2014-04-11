<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="message flash-' . $key . '">' . $message . "</div>\n";
}
?>
<article id="contenido-multimedia">
    <img class="personaje-derecha" src="themes/multimedia/imagenes/multimedia/FONDO MULTIMEDIA-03.png" width="300" height="500">
    <img class="personaje-izquierda" src="themes/multimedia/imagenes/multimedia/FONDO MULTIMEDIA-02.png" width="300" height="500">
    <div id="controles" class="grid-100">
        <div class="icono icono1">
            <img src="themes/multimedia/imagenes/multimedia/Botones-01.png">
        </div>
        <div class="icono icono2">
            <img src="themes/multimedia/imagenes/multimedia/Botones-02.png">
        </div>

        <div class="icono icono3" href="" onclick="icono(this)">
            <img src="themes/multimedia/imagenes/multimedia/Botones-03.png">
        </div>
        <div class="icono icono4" href="" onclick="icono(this)">
            <img src="themes/multimedia/imagenes/multimedia/Botones-04.png">
        </div>
        <div class="icono icono5" href="" onclick="icono(this)">
            <img src="themes/multimedia/imagenes/multimedia/Botones-05.png">
        </div>
    </div>
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
