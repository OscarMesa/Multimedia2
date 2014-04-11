<?php

class Formulario1 extends CFormModel {

    public $nombre;
    public $foto;
    public $constitucionFamiliar;
    public $fotoFamiliar;
    public $logrosPersonales;
    public $personaAdmirada_motivos;
    public $limitaciones;
    public $fortalezas;

    public function rules() {
        return array(
            array(', ,,,', 'required'),
            array('nombre', 'required', 'message' => 'El campo nombre es obligatorio.'),
            array('personaAdmirada_motivos', 'required', 'message' => 'El campo de persona que admira es obligatorio.'),
            array('logrosPersonales', 'required', 'message' => 'El campo de logros es obligatorio.'),
            array('fortalezas', 'required', 'message' => 'El campo fortalezas es obligatorio.'),
            array('limitaciones', 'required', 'message' => 'El campo limitaciones es obligatorio.'),
            array('constitucionFamiliar', 'required', 'message' => 'El campo de constitución familiar es obligatorio.'),
            array('foto', 'required', 'message' => 'La foto es obligatoria.'),
            array('fotoFamiliar', 'required', 'message' => 'La foto familiar es obligatoria.'),
            array('foto,fotoFamiliar', 'file', 'allowEmpty' => true, 'types' => 'jpg,jpeg,gif,png'),
        );
    }

    public function attributeLabels() {
        return array(
            'nombre' => '¿Cuál es tu nombre e inserta una foto tuya?',
            'foto' => 'Foto',
            'constitucionFamiliar' => 'Describe cómo está constituido tu familia actualmente e inserta una foto',
            'logrosPersonales' => '¿Cuáles son tus logros más  grandes?',
            'personaAdmirada_motivos' => '¿Cuál la persona que más admiras y porque?',
            'limitaciones' => '¿Cuáles son tus mayores limitaciones?',
            'fortalezas' => '¿Cuáles son tus mayores fortalezas?',
            'fotoFamiliar' => 'foto familiar',
        );
    }

    public function getAttributeLabel($attribute, $notLabel = false) {
        if ($notLabel) {
            switch ($attribute) {
                case 'nombre':
                    return '¿Cuál es tu nombre?';
                    break;
                case 'constitucionFamiliar':
                    return 'Describe cómo está constituido tu familia actualmente.';
                    break;
                default :
                    return parent::getAttributeLabel($attribute);
                    break;
            }
        } else {
            return parent::getAttributeLabel($attribute);
        }
    }

}

?>