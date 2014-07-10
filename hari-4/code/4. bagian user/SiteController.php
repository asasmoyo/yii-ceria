<?php

session_start();

class SiteController extends Controller {

    public function init() {
        $path = Yii::app()->basePath . '/vendor/facebook-php-sdk/autoload.php';
        require_once $path;

        \Facebook\FacebookSession::setDefaultApplication('539087272880106', 'df57322ce0478580e538043188e544e6');
        return parent::init();
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $list_artikel = Artikel::model()->findAll(array('order' => 'tanggal desc'));
        $this->render('index', ['list_artikel' => $list_artikel]);
    }

    public function actionArtikel($id) {
        //ambil list artikel
        $artikel = Artikel::model()->findByPk($id);
        if (!$artikel) {
            throw new CHttpException(404, 'Artikel not found');
        }

        $model_komentar = new Komentar();
        $model_komentar->id_artikel = $id;

        if (isset($_POST['Komentar'])) {
            $model_komentar->attributes = $_POST['Komentar'];

            if ($model_komentar->save()) {
                $this->redirect(array('/site/artikel', 'id' => $id));
            }
        }

        $this->render('artikel', [
            'artikel' => $artikel,
            'model' => $model_komentar,
        ]);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}
