<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuestionarioController
 *
 * @author omesa
 */
class CuestionarioController extends Controller {

    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('generador', 'inicio', 'content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10', 'content11'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionGenerador() {
        include (Yii::import('application.vendor.mpdf.*') . '/mpdf.php');
        $formulario1 = null;
        $formulario2 = null;
        $formulario3 = null;
        if (isset(Yii::app()->session['formulario1']) && ($formulario1 = Yii::app()->session['formulario1']) instanceof Formulario1) {
            if ($formulario1->validate()) {
                if (isset(Yii::app()->session['formulario2']) && ($formulario2 = Yii::app()->session['formulario2']) instanceof Formulario2) {
                    if ($formulario2->validate()) {
                        if (isset(Yii::app()->session['formulario3']) && ($formulario3 = Yii::app()->session['formulario3']) instanceof Formulario3) {
                            if ($formulario3->validate()) {
                                $pdf = new mPDF('c');
                                $pdf->SetDisplayMode('fullpage');
                                $pdf->WriteHTML($this->renderPartial('_pdfCuestionario', array(
                                            'formulario1' => $formulario1,
                                            'formulario2' => $formulario2,
                                            'formulario3' => $formulario3,
                                                ), true));
                                unset(Yii::app()->session['formulario1']);
                                unset(Yii::app()->session['formulario2']);
                                unset(Yii::app()->session['formulario3']);
                                $pdf->Output();
                            } else {
                                Yii::app()->user->setFlash('error', "Debe completar los campos obligatorios de esta encuesta.");
                                $this->redirect(Yii::app()->getBaseUrl(true) . '/content11');
                            }
                        } else {
                            Yii::app()->user->setFlash('error', "Debe iniciar esta encuesta.");
                            $this->redirect(Yii::app()->getBaseUrl(true) . '/content11');
                        }
                    } else {
                        Yii::app()->user->setFlash('error', "Debe completar los campos obligatorios de esta encuesta.");
                        $this->redirect(Yii::app()->getBaseUrl(true) . '/content9');
                    }
                } else {
                    Yii::app()->user->setFlash('error', "Debe iniciar esta encuesta.");
                    $this->redirect(Yii::app()->getBaseUrl(true) . '/content9');
                }
            } else {
                Yii::app()->user->setFlash('error', "Debe completar los campos obligatorios de esta encuesta.");
                $this->redirect(Yii::app()->getBaseUrl(true) . '/content5');
            }
        } else {
            Yii::app()->user->setFlash('error', "Debe iniciar esta encuesta.");
            $this->redirect(Yii::app()->getBaseUrl(true) . '/content5');
        }
    }

    public function actionInicio($view = 'content1') {
        foreach ($_GET as $key => $value) {
            $view = $key;
            break;
        }
        $this->render('inicio', array('view' => $view));
    }

    public function actionContent1() {
        echo $this->renderPartial('content1', array(), true);
    }

    public function actionContent2() {
        echo $this->renderPartial('content2', array(), true);
    }

    public function actionContent3() {
        echo $this->renderPartial('content3', array(), true);
    }

    public function actionContent4() {
        echo $this->renderPartial('content4', array(), true);
    }

    public function actionContent5() {
        if (isset($_POST['Formulario1'])) {
            $model = new Formulario1();
            $model->attributes = $_POST['Formulario1'];
            $model->foto = CUploadedFile::getInstance($model, 'foto');
            $model->fotoFamiliar = CUploadedFile::getInstance($model, 'fotoFamiliar');
            if (isset(Yii::app()->session['formulario1']))
                Yii::app()->session['formulario1'] = $model;
            else
                Yii::app()->getSession()->add('formulario1', $model);
            if ($model->validate()) {

                Yii::app()->getSession()->add('formulario1', $model);
                echo json_encode(array('respuesta' => true));
                exit();
            } else {
                echo json_encode(array('respuesta' => false, 'content' => $this->renderPartial('_formulario1', array('model' => $model), true)));
                exit();
            }
        }
        echo $this->renderPartial('content5', array(), true);
    }

    public function actionContent6() {
        echo $this->renderPartial('content6', array(), true);
    }

    public function actionContent7() {
        echo $this->renderPartial('content7', array(), true);
    }

    public function actionContent8() {
        echo $this->renderPartial('content8', array(), true);
    }

    public function actionContent9() {
        if (isset($_POST['Formulario2'])) {
            $model = new Formulario2();
            $model->attributes = $_POST['Formulario2'];
            if (isset(Yii::app()->session['formulario2']))
                Yii::app()->session['formulario2'] = $model;
            else
                Yii::app()->getSession()->add('formulario2', $model);
            if ($model->validate()) {
                echo json_encode(array('respuesta' => true));
                exit();
            } else {
                echo json_encode(array('respuesta' => false, 'content' => $this->renderPartial('_formulario2', array('model' => $model), true)));
                exit();
            }
        }
        echo $this->renderPartial('content9', array(), true);
    }

    public function actionContent10() {
        echo $this->renderPartial('content10', array(), true);
    }

    public function actionContent11() {
        if (isset($_POST['Formulario3'])) {
            $model = new Formulario3();
            $model->attributes = $_POST['Formulario3'];
            if (isset(Yii::app()->session['formulario3']))
                Yii::app()->session['formulario3'] = $model;
            else
                Yii::app()->getSession()->add('formulario3', $model);
            if ($model->validate()) {

                Yii::app()->getSession()->add('formulario3', $model);
                echo json_encode(array('respuesta' => true));
                exit();
            } else {
                echo json_encode(array('respuesta' => false, 'content' => $this->renderPartial('_formulario3', array('model' => $model), true)));
                exit();
            }
        }
        echo $this->renderPartial('content11', array(), true);
    }

}

?>
