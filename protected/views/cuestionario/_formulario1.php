<div class="form form-horizontal">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'formulario1',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'nombre', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'nombre', array('value' => $model->nombre)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'foto', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->fileField($model, 'foto', array('value' => $model->foto)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'constitucionFamiliar', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'constitucionFamiliar', array('value' => $model->constitucionFamiliar)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'fotoFamiliar', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->fileField($model, 'fotoFamiliar', array('value' => $model->fotoFamiliar)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'logrosPersonales', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'logrosPersonales', array('value' => $model->logrosPersonales)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'personaAdmirada_motivos', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'personaAdmirada_motivos', array('value' => $model->personaAdmirada_motivos)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'limitaciones', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'limitaciones', array('value' => $model->limitaciones)); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'fortalezas', array('class' => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'fortalezas', array('value' => $model->fortalezas)); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <?php echo CHtml::submitButton('Enviar', array('class' => 'btn', 'id' => 'btn-frm1','onclick'=>'enviar()')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>


<script type="text/javascript">
    ex = false;
    $(document).on('submit','#formulario1',function(e){ e.preventDefault();});
     function enviar(e) {
        if (!ex) {
            ex = true;
            var fileFoto = document.getElementById('Formulario1_foto');
            var fileFoto = fileFoto.files[0];

            var fileFotoFamiliar = document.getElementById('Formulario1_fotoFamiliar');
            var fileFotoFamiliar = fileFotoFamiliar.files[0];

            var formData = new FormData();
            formData = new FormData();
            formData.append('Formulario1[fotoFamiliar]', fileFotoFamiliar);
            formData.append('Formulario1[foto]', fileFoto);
            var other_data = $('#formulario1').serializeArray();
            $.each(other_data, function(key, input) {
                formData.append(input.name, input.value);
            });
            jQuery.ajax({
                'success': function(e) {
                    if (e.respuesta == true) {
                        alert('los datos se han almacenado correctamete');
                        $('#siguiente').click();
                        //$(body).load("<?php //echo Yii::app()->getBaseUrl(true);   ?>/lugar/nuevoSitio", 'id_lugar_new=' + e.id_lugar);
                    } else {
                        $("#sec-formulario1").html(e.content);
                    }
                },
                error: function(e){
                    alert(e);
                    return false;
                },
                'type': 'POST',
                'url': '<?php echo Yii::app()->getBaseUrl(true) . '/cuestionario/content5'; ?>',
                'cache': false,
                'data': formData,
                'contentType': false,
                'processData': false,
                'dataType': 'JSON'
            });
        }
        return false;
    };
</script>