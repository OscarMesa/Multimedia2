<div id="content11">
    <div id="sec-formulario3">
    <?php
    if (isset(Yii::app()->session['formulario3'])){
        $model1 = Yii::app()->session['formulario3'];
        $model = new Formulario3();
        $model->attributes = $model1->attributes;
    }else    
        $model = new Formulario3();
    echo $this->renderPartial('_formulario3', array('model'=>$model), true);
    ?>
</div>
    <div class="flechas">
        <a onclick="" id="anterior" class="load" href="content10">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Anterior.png"><span>Anterior</span></a>
        <a onclick="" class="" href="" id="finalizar">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Siguiente.png"><span>Finalizar</span></a>
    </div>
</div>

<style type="text/css">
    #content11 {
        background: url('themes/multimedia/imagenes/multimedia/11_MUILTIMEDIA GRANDE-01.jpg') no-repeat;

    }
</style>