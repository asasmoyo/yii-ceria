<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PenjumlahanForm
 *
 * @author asasmoyo
 */
class PenjumlahanForm extends CFormModel {

    public $angka1;
    public $angka2;

    public function rules() {
        return [
//            ['list property (nek banyak dipisah ,)', 'rule', 'opsi (opsional)'],
            ['angka1, angka2', 'required'],
            ['angka1, angka2', 'numerical'],
            ['angka1', 'length', 'min' => 2, 'max' => 4]
        ];
    }

    public function attributeLabels() {
        return [
            'angka1' => 'Angka 1',
            'angka2' => 'Angka 2',
        ];
    }

    public function getHasil() {
        return $this->angka1 + $this->angka2;
    }

}
