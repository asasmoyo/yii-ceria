<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormLoginCustomUser
 *
 * @author asasmoyo
 */
class FormLoginCustomUser extends CFormModel {

    public $username;
    public $password;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {
            $this->_identity = new CustomUserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
            switch ($this->_identity->errorCode) {
                case CustomUserIdentity::ERROR_NONE:
                    $duration = 0;
                    Yii::app()->user->login($this->_identity, $duration);
                    break;
                case CustomUserIdentity::ERROR_INVALID_USERNAME_OR_PASSWORD:
                    $this->username = '';
                    $this->password = '';
                    $this->addError("username", "Username or password is incorrect.");
                    break;
            }
        }
    }

}
