<div id="content5">
    <div id="sec-formulario1">
    <?php 
    if (isset(Yii::app()->session['formulario1'])){
        $model1 = Yii::app()->session['formulario1'];
        $model = new Formulario1();
        $model->attributes = $model1->attributes;
    }else
        $model = new Formulario1();
        echo $this->renderPartial('_formulario1',array('model'=> $model));
    ?>
</div>
    <div class="flechas">
        <a onclick="" id="anterior" class="load" href="content4">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Anterior.png"><span>Anterior</span></a>
        <a onclick="" class="load" href="content6" id="siguiente">
            <img src="themes/multimedia/imagenes/multimedia/navegacion/ico_Siguiente.png"><span>Siguiente</span></a> 
    </div>
</div>


<style type="text/css">
    #content5 {
        background: url('themes/multimedia/imagenes/multimedia/5_MUILTIMEDIA GRANDE-01.jpg') no-repeat;

    }
    
    
</style>