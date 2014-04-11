<?php

class Formulario2 extends CFormModel
{
    public $quienEres;
    public $porqueEstudiar;
    public $queSerasEnOneYear;
    public $queSerasEnFiveYear;
    public $queSerasEnTenYear;
    
    public function rules()
	{
		return array(   
                        array('queSerasEnTenYear', 'required', 'message'=>'El campo Quien eres, es obligatorio.'),
                        array('queSerasEnFiveYear', 'required', 'message'=>'El campo Que seras en 5 años, es obligatorio.'),
                        array('queSerasEnOneYear', 'required', 'message'=>'El campo Que seras en 1 años, es obligatorio.'),
                        array('porqueEstudiar', 'required', 'message'=>'El campo Por que estudias, es obligatorio.'),
                        array('quienEres', 'required', 'message'=>'El campo Quien eres, es obligatorio.'),
		);
	}
        
        public function attributeLabels()
	{
		return array(
			'queSerasEnTenYear'=>'¿Quién quieres ser en 10 años?',
			'queSerasEnFiveYear'=>'¿Quién quieres ser en 5 años?',
			'queSerasEnOneYear'=>'¿Quién quieres ser en 1 año?'  ,
			'porqueEstudiar'=>'¿Para qué estudias?',
			'quienEres'=>'¿Quién eres ahora?',
		);
	}
}

?>