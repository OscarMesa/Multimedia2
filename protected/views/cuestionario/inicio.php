<?php
$host = new CHttpRequest();
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

        <div class="icono icono3" href="">
            <img src="themes/multimedia/imagenes/multimedia/Botones-03.png">
        </div>
        <div class="icono icono4" href="">
            <img src="themes/multimedia/imagenes/multimedia/Botones-04.png">
        </div>
        <div class="icono icono5" href="">
            <img src="themes/multimedia/imagenes/multimedia/Botones-05.png">
        </div>
    </div>
</article>


<div id="dialog1" title="Videos inicial">
    <div style="">
        <div style="" id="accordion1" class="accordion">
            <h3>Video Introducción</h3>
            <div>
                <video controls preload="none" width="700px" height="400px" name="media1"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/02_Video Introduccion y caso central/Comic-Introducción.mp4" type="video/mp4"></video>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/02_Video Introduccion y caso central/" target="_blank">¡Ver aquí!</a>
            </div>
            <h3>Video Caso central</h3>
            <div>
                <video controls preload="none" width="700px" height="400px" name="media2"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/02_Video Introduccion y caso central/CasoCentral.mp4" type="video/mp4"></video>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/02_Video Introduccion y caso central/CasoCentral.mp4" target="_blank">¡Ver aquí!</a>
            </div>
            <h3>Elementos de Introducción</h3>
            <div>
                <p>
                    <a href="<?php echo $host->getHostInfo(); ?>/ElementosIntroduccion.php" target="_blank">¡Ver aquí!</a>
                </p>
            </div>
        </div>
    </div>    
</div>


<div id="dialog2" title="Momento 1">
    <div style="">
        <div id="accordion2">
            <h3>Introduccion</h3>
            <div>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/01_Introduccion al momento 1/comic_momento_01/Comic1.pdf" target="_blank">Abrir comic</a>
            </div>
            <h3>Guía de aprendizaje</h3>
            <div>
                <video controls preload="none" width="700px" height="400px" name="media3"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/02_Guia de aprendizaje/Momento_1.mp4" type="video/mp4"></video>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/02_Guia de aprendizaje/Momento_1.mp4" target="_blank">¡Ver aquí!</a>
            </div>
            <h3>Infográfico</h3>
            <div>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/03_Infograficos/01_Infografico/INFROGRAFICO1.pdf" target="_blank">¡Ver aquí!</a>
            </div>
            <h3>Proyecto de Vida</h3>
            <div>
                    <a href="<?php echo $host->getHostInfo(); ?>/ProyectoDeVida/" target="_blank">¡Abrir aquí!</a>
            </div>
            <h3>Mapa de evidencia</h3>
            <div>
                <img style="width: 102%;" src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/05_Mapa de evidencia/01_evidencia/evidencia 1-01.jpg"/>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/05_Mapa de evidencia/01_evidencia/evidencia 1-01.jpg" target="_blank">¡Ampliar!</a>
            </div>
            <h3>Infográfico</h3>
            <div>
                <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/03_Momento 1/03_Infograficos/01_Infografico/INFROGRAFICO1.pdf" target="_blank">¡Abrir aquí!</a>
            </div>
        </div>
    </div>    
</div>




<div id="dialog3" title="Momento 2">
    <div style="">
        <div id="accordion3">
            <h3>Introducción</h3>
            <div>
                <p>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/01_Introduccion al momento 2/comic_momento_02/comic2.pdf" target="_blank">Abrir comic</a>
                </p>
            </div>
            <h3>Guía de aprendizaje</h3>
            <div>
                <p>
                    <video controls preload="none" width="700px" height="400px" name="media4"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/02_Guia de aprendizaje/Momento_2.mp4" type="video/mp4"></video>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/02_Guia de aprendizaje/Momento_2.mp4" target="_blank">¡Ver aquí!</a>
                </p>    
            </div>
            <h3>Mapa de evidencia</h3>
            <div>
                <p>
                    <img style="width: 102%;" src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/04_Mapa de evidencia/02_evidencia/evidencia 2-01.jpg"/>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/04_Mapa de evidencia/02_evidencia/evidencia 2-01.jpg" target="_blank">¡Ampliar!</a>
                </p>
            </div>
            <h3>Infográfico</h3>
            <div>
                <p>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/03_Infograficos/02_infografico/INFROGRAFICO2.pdf" target="_blank">1. Abrir aquí</a><br/>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/04_Momento 2/03_Infograficos/02_infografico/INFROGRAFICO2-1.pdf" target="_blank">2. Abrir aquí</a>
                </p>
            </div>      
        </div>
    </div>    
</div>





<div id="dialog4" title="Momento 3">
    <div style="">
        <div id="accordion4">
            <h3>Introducción</h3>
            <div>
                <p>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/01_Introduccion al momento 3/comic_momento_03/comic3.pdf" target="_blank">Abrir comic</a>
                </p>
            </div>
            <h3>Guía de aprendizaje</h3>
            <div>
                <p>
                    <video controls preload="none" width="700px" height="400px" name="media5"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/02_Guia de aprendizaje/Momento_3.mp4" type="video/mp4"></video>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/02_Guia de aprendizaje/Momento_3.mp4" target="_blank">¡Ver aquí!</a>
                </p>
            </div>
            <h3>Mapa de evidencia</h3>
            <div>
                <p>
                    <img style="width: 102%;" src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/04_Mapa de evidencia/03_evidencia/evidencia 3-01.jpg"/>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/04_Mapa de evidencia/03_evidencia/evidencia 3-01.jpg" target="_blank">¡Ampliar!</a>
                </p>
            </div>
            <h3>Infográfico</h3>   
            <div>
                <p>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/05_Momento 3/03_Infograficos/03_infografico/INFROGRAFICO3.pdf" target="_blank">¡Abrir aquí!</a><br/>
                </p>
            </div> 
        </div>
    </div>    
</div>





<div id="dialog5" title="Video final">
    <div style="">
        <div id="accordion5">
            <h3>Video Comic Final</h3>
            <div>
                <p>
                    <video controls preload="none" width="700px" height="400px" name="media6"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/06_Video Final y Conclucion/Comic-Final.mp4" type="video/mp4"></video>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/06_Video Final y Conclucion/Comic-Final.mp4" target="_blank">¡Ver aquí!</a>
                </p>
            </div>
            <h3>Video Comic Conclusión</h3>
            <div>
                <p>
                    <video controls preload="none" width="700px" height="400px" name="media7"><source src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/06_Video Final y Conclucion/Comic-Conclusión.mp4" type="video/mp4"></video>
                    <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/multimedia/multimedia_dvd/06_Video Final y Conclucion/Comic-Conclusión.mp4" target="_blank">¡Ver aquí!</a>
                </p>
            </div>

        </div>
    </div>    
</div>  




<script type="text/javascript">



    $('#dialog1').dialog({
        width: 800,
        height: 600,
        autoOpen: false,
        show: 'highlight',
        hide: 'scale',
        modal: true,
        buttons: {
            'Salir': function() {
                $(this).dialog('close');
            }
        },
        resizable: false,
    });




    $('#dialog2').dialog({
        width: 800,
        height: 600,
        autoOpen: false,
        show: 'highlight',
        hide: 'scale',
        modal: true,
        buttons: {
            'Salir': function() {
                $(this).dialog('close');
            }
        },
        resizable: false,
    });



    $('#dialog3').dialog({
        width: 800,
        height: 600,
        autoOpen: false,
        show: 'highlight',
        hide: 'scale',
        modal: true,
        buttons: {
            'Salir': function() {
                $(this).dialog('close');
            }
        },
        resizable: false,
    });

    $('#dialog4').dialog({
        width: 800,
        height: 600,
        autoOpen: false,
        show: 'highlight',
        hide: 'scale',
        modal: true,
        buttons: {
            'Salir': function() {
                $(this).dialog('close');
            }
        },
        resizable: false,
    });


    $('#dialog5').dialog({
        width: 800,
        height: 600,
        autoOpen: false,
        show: 'highlight',
        hide: 'scale',
        modal: true,
        buttons: {
            'Salir': function() {
                $(this).dialog('close');
            }
        },
        resizable: false,
    });

    $("#accordion1").accordion({
        heightStyle: "content",
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false,
        activate: function( event, ui ) {
            pauseVideo();
        }
    });
    $("#accordion2").accordion({
        heightStyle: "content",
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false,
        activate: function( event, ui ) {
            pauseVideo();
        }
    });
    $("#accordion3").accordion({
        heightStyle: "content",
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false,
        activate: function( event, ui ) {
            pauseVideo();
        }
    });
    $("#accordion4").accordion({
        heightStyle: "content",
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false,
        activate: function( event, ui ) {
            pauseVideo();
        }
    });
    $("#accordion5").accordion({
        heightStyle: "content",
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false,
        activate: function( event, ui ) {
            pauseVideo();
        }
    });

    $('.icono1').click(function() {
        if ($('#dialog1').dialog('isOpen') == true)
            $('#dialog1').dialog('close');
        else
            $('#dialog1').dialog('open');
        return false;
    });
    $('.icono2').click(function() {
        if ($('#dialog2').dialog('isOpen') == true)
            $('#dialog2').dialog('close');
        else
            $('#dialog2').dialog('open');
        return false;
    });
    $('.icono3').click(function() {
        if ($('#dialog3').dialog('isOpen') == true)
            $('#dialog3').dialog('close');
        else
            $('#dialog3').dialog('open');
        return false;
    });
    $('.icono4').click(function() {
        if ($('#dialog4').dialog('isOpen') == true)
            $('#dialog4').dialog('close');
        else
            $('#dialog4').dialog('open');
        return false;
    });
    $('.icono5').click(function() {
        if ($('#dialog5').dialog('isOpen') == true)
            $('#dialog5').dialog('close');
        else
            $('#dialog5').dialog('open');
        return false;active:2
    });
    
    function pauseVideo()
    {
        $("video").each(function(e,i){
        i.pause();
    });
    }
</script>
