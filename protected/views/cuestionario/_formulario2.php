<div class="form form-horizontal">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'formulario2',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'quienEres', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'quienEres', array('value' => $model->quienEres)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'porqueEstudiar', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'porqueEstudiar', array('value' => $model->porqueEstudiar)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'queSerasEnOneYear', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'queSerasEnOneYear', array('value' => $model->queSerasEnOneYear)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'queSerasEnFiveYear', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'queSerasEnFiveYear', array('value' => $model->queSerasEnFiveYear)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'queSerasEnTenYear', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'queSerasEnTenYear', array('value' => $model->queSerasEnTenYear)); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <?php echo CHtml::submitButton('Enviar', array('class' => 'btn', 'id' => 'btn-frm2','onclick'=>'enviar2()')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>


<script type="text/javascript">
    ex = false;
    $(document).on('submit','#formulario2',function(e){ e.preventDefault();});
     function enviar2(e) {
        if (!ex) {
            ex = true;
            jQuery.ajax({
                'success': function(e) {
                    if (e.respuesta == true) {
                        alert('los datos se han almacenado correctamete');
                        $('#siguiente').click();
                        //$(body).load("<?php //echo Yii::app()->getBaseUrl(true);   ?>/lugar/nuevoSitio", 'id_lugar_new=' + e.id_lugar);
                    } else {
                        $("#sec-formulario2").html(e.content);
                    }
                },
                error: function(e){
                    alert(e);
                    return false;
                },
                'type': 'POST',
                'url': '<?php echo Yii::app()->getBaseUrl(true) . '/cuestionario/content9'; ?>',
                'cache': false,
                'data': $('#formulario2').serialize(),
                'dataType': 'JSON'
            });
        }
        return false;
    };
</script>