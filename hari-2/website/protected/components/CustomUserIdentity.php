<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomUserIdentity
 *
 * @author asasmoyo
 */
class CustomUserIdentity extends CUserIdentity {

    const ERROR_INVALID_USERNAME_OR_PASSWORD = 3;

    private $_id;

    public function authenticate() {
        $user = User::model()->findByAttributes(array(
            'username' => $this->username,
        ));

        if (!$user) {
            $this->errorCode = self::ERROR_INVALID_USERNAME_OR_PASSWORD;
        } elseif (!$this->validatePassword($user->password, $this->password)) {
            $this->errorCode = self::ERROR_INVALID_USERNAME_OR_PASSWORD;
        } else {
            $this->_id = $user->id;
            $this->username = $this->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    private function validatePassword($password, $passwordAttempt) {
        return $password == md5($passwordAttempt);
    }

    public function getId() {
        return $this->_id;
    }

}
