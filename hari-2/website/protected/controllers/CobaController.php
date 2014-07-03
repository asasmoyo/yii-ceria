<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CobaController
 *
 * @author asasmoyo
 */
class CobaController extends Controller {

    public function actionHelloWorld() {
        echo 'Hello World!';
    }

    public function actionCoba1() {
        echo 1 + 2 + 3;
    }

    public function actionCoba2() {
        var_dump($_GET);

        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $hasil = $angka1 + $angka2;
        echo '<br/>hasil = ' . $hasil;

        echo '<form action="/index.php?r=coba/coba2" method="get">';
        echo '<input type="hidden" name="r" value="coba/coba2" />';
        echo '<p><input type="text" name="angka1" /></p>';
        echo '<p><input type="text" name="angka2" /></p>';
        echo '<p><input type="submit" value="ok" /></p>';
        echo '</form>';
    }

    public function actionCoba3() {
        var_dump($_GET);

        $angka1 = isset($_GET['angka1']) ? $_GET['angka1'] : 0;
        $angka2 = isset($_GET['angka2']) ? $_GET['angka2'] : 0;
        $hasil = $angka1 + $angka2;

        $this->render('coba3', [
            'hasil' => $hasil,
        ]);
    }

    public function actionCoba4() {
        $form = new PenjumlahanForm();

        if (isset($_POST['PenjumlahanForm'])) {
            $form->attributes = $_POST['PenjumlahanForm'];
            $form->validate();
        }

        $this->render('coba4', [
            'form' => $form
        ]);
    }

}
