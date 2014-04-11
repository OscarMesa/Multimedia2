<?php

class Formulario3 extends CFormModel
{
    public $objetivosVida;
    public $vinisteAlMundo;
    public $motivacionASeguir;
    public $metas;
    
    public function rules()
	{
		return array(   
                        array('metas', 'required', 'message'=>'El campo metas, es obligatorio.'),
                        array('objetivosVida', 'required', 'message'=>'El campo objetivos, es obligatorio.'),
                        array('vinisteAlMundo', 'required', 'message'=>'El campo Para que viniste al mundo, es obligatorio.'),
                        array('motivacionASeguir', 'required', 'message'=>'El campo motivación, es obligatorio.'),
		);
	}
        
        public function attributeLabels()
	{
		return array(
			'objetivosVida'=>'¿Cuáles son tus objetivos de vida?',
			'vinisteAlMundo'=>'¿Para qué viniste a este mundo?',
			'motivacionASeguir'=>'¿Qué te motiva a seguir adelante?'  ,
			'metas'=>'¿Cuáles son tus metas desde: Lo laboral, lo académico, lo corporal, emocional y espiritual?',
		);
	}
}

?>