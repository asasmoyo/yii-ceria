<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomWebUser
 *
 * @author asasmoyo
 */
class CustomWebUser extends CWebUser {

    protected $_model;

    protected function loadUser() {
        if ($this->_model === NULL) {
            $this->_model = User::model()->findByPk($this->getId());
        }
        return $this->_model;
    }

    public function getUsername() {
        $user = $this->loadUser();
        if ($user) {
            return $user->username;
        }
    }

    public function getNama() {
        $user = $this->loadUser();
        if ($user) {
            return $user->nama;
        }
    }

}
