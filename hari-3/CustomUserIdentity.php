<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomUserIdentity
 *
 * @author Arba
 */
class CustomUserIdentity extends CUserIdentity {

    const ERROR_INVALID_USERNAME_OR_PASSWORD = 3;

    private $_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = User::model()->findByAttributes(array(
            'username' => $this->username,
        ));

        if (!$user) {
            $this->errorCode = self::ERROR_INVALID_USERNAME_OR_PASSWORD;
        } elseif (!$this->validatePassword($user->hashed_password, $this->password)) {
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

