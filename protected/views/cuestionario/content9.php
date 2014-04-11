<div id="content9">
    <div id="sec-formulario2">
    <?php
    if (isset(Yii::app()->session['formulario2'])){
        $model1 = Yii::app()->session['formulario2'];
        $model = new Formulario2();
        $model->attributes = $model1->attributes;
    }else    
        $model = new Formulario2();
    echo $this->renderPartial('_formulario2', array('model'=>$model), true);
    ?>
</div>
    <div class="flechas">
        <a onclick="" id="anterior" class="load" href="content8">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Anterior.png"><span>Anterior</span></a>
        <a onclick="" class="load" href="content10" id="siguiente">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Siguiente.png"><span>Siguiente</span></a>
    </div>
</div>


<style type="text/css">
    #content9 {
        background: url('themes/multimedia/imagenes/multimedia/9_MUILTIMEDIA GRANDE-01.jpg') no-repeat;

    }
</style>