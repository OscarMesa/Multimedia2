<div class="form form-horizontal">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'formulario3',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'objetivosVida', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'objetivosVida', array('value' => $model->objetivosVida)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'vinisteAlMundo', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'vinisteAlMundo', array('value' => $model->vinisteAlMundo)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'motivacionASeguir', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'motivacionASeguir', array('value' => $model->motivacionASeguir)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'metas', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'metas', array('value' => $model->metas)); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <?php echo CHtml::submitButton('Enviar', array('class' => 'btn', 'id' => 'btn-frm3','onclick'=>'enviar3()')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>


<script type="text/javascript">
    ex = false;
    $(document).on('submit','#formulario3',function(e){ e.preventDefault();});
     function enviar3(e) {
        if (!ex) {
            ex = true;
            jQuery.ajax({
                'success': function(e) {
                    if (e.respuesta == true) {
                        alert('los datos se han almacenado correctamete');
                        $('#finalizar').click();
                        //$(body).load("<?php //echo Yii::app()->getBaseUrl(true);   ?>/lugar/nuevoSitio", 'id_lugar_new=' + e.id_lugar);
                    } else {
                        $("#sec-formulario3").html(e.content);
                    }
                },
                error: function(e){
                    alert(e);
                    return false;
                },
                'type': 'POST',
                'url': '<?php echo Yii::app()->getBaseUrl(true) . '/cuestionario/content11'; ?>',
                'cache': false,
                'data': $('#formulario3').serialize(),
                'dataType': 'JSON'
            });
        }
        return false;
    };
</script>