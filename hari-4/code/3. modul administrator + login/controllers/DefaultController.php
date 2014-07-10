<?php

class DefaultController extends BaseAdministratorController {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogin() {
        $this->layout = '//layouts/column1';
        $model = new FormLoginAdministrator;

        // jika ada ajax request untuk validasi
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // cek user input 
        if (isset($_POST['FormLoginAdministrator'])) {
            $model->attributes = $_POST['FormLoginAdministrator'];
            // validasi inputan user and redirect ke homeUrl 
            if ($model->validate()) {
                $this->redirect(Yii::app()->homeUrl);
            }
        }
        // menampilkan halaman login
        $this->render('login', array('model' => $model));
    }

    public function actionLogout() {
        Yii::app()->user->logout(FALSE);
        $this->redirect(array('/site'));
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else {
                $this->render('error', $error);
            }
        }
    }

}
