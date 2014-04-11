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


<div id="dialog4" title="Dialog #4 (modal)">
    <p>Another sample of modal dialogs - login forms. The dialog using 'highlight/scale' methods to 'show/hide'. Can be moved and closed with the 'x' icon.</p>
    <form>
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" /><br />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" />
        </fieldset>
    </form>
</div>


<script type="text/javascript">


            $('#dialog4').dialog({
                autoOpen: false,
                show: 'highlight',
                hide: 'scale',
                modal: true,
                buttons: {
                    'Login': function() {
                        var name = $('#name').val(), password = $('#password').val();
                        var mydialog4 = $(this);

                        if (name != '' && password != '') {
                            $.ajax({
                                type: 'POST',
                                url: 'some.php',
                                data: 'name=' + name + '&pass=' + password,
                                success: function(msg) {
                                    alert(msg);
                                    $(mydialog4).dialog('close');
                                }
                            });
                        }
                    },
                    'Close': function() {
                        $(this).dialog('close');
                    }
                },
                resizable: false,
                width: '400px'
            });

            // dialog 4 open/close
            $('.icono').click(function() {
                if ($('#dialog4').dialog('isOpen') == true)
                    $('#dialog4').dialog('close');
                else
                    $('#dialog4').dialog('open');
                return false;
            });

</script>
