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

    public function actionIndex() {
        echo 'index';
    }

    public function actionHelloWorld() {
        echo 'Hello World';
    }

    public function actionCoba1() {
        echo '<p>hello world</p>';
    }

    public function actionCoba2() {
        print_r($_GET);

        echo '<br/>';
        echo $_GET['angka1'] + $_GET['angka2'];

        echo '<form method="get">';
        echo '<input type="hidden" name="r" value="coba/coba2" />';
        echo '<p><input type="text" name="angka1" /></p>';
        echo '<p><input type="text" name="angka2" /></p>';
        echo '<p><input type="submit" value="ok" /></p>';
        echo '</form>';
    }

    public function actionCoba3() {
        $angka1 = isset($_GET['angka1']) ? $_GET['angka1'] : 0;
        $angka2 = isset($_GET['angka2']) ? $_GET['angka2'] : 0;
        $hasil = $angka1 + $angka2;

        //cek angka1 tidak boleh kosong
        if ($angka1 == '') {
            echo 'angka1 tidak boleh kosong';
        }

        $this->render('coba3', [
            'var1' => $hasil,
        ]);
    }

    public function actionCoba4() {
        //buat objek form
        $form = new PenjumlahanForm();

        //cek apakah ada input
        if (isset($_POST['PenjumlahanForm'])) {
            //kalo ada, input dibaca, terus nilai property objek diisi dari input
            
            //cara ngga cepet
//            $post = $_POST['PenjumlahanForm'];
//            $form->angka1 = $post['angka1'];
//            $form->angka2 = $post['angka2'];
            
            //cara cepet
            $form->attributes = $_POST['PenjumlahanForm'];
            
            //jalankan validasi
            if ($form->validate()) {
                //kirim email
                
            }
        }

        //kalo ngga ada langsung render view
        $this->render('coba4', [
            'form' => $form,
        ]);
    }

}
