<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormLoginAdministrator
 *
 * @author Arba
 */
class FormLoginAdministrator extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
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
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
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
            $this->_identity = new AdministratorUserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
            switch ($this->_identity->errorCode) {
                case AdministratorUserIdentity::ERROR_NONE:
                    $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
                    Yii::app()->user->login($this->_identity, $duration);
                    break;
                case AdministratorUserIdentity::ERROR_INVALID_USERNAME_OR_PASSWORD:
                    $this->username = '';
                    $this->password = '';
                    $this->addError("username", "Username or password is incorrect.");
                    break;
                case AdministratorUserIdentity::ERROR_PERMISSION_DENIED:
                    $this->username = '';
                    $this->password = '';
                    $this->addError("username", "Anda tidak diperbolehkan mengakses halaman ini");
                    break;
            }
        }
    }

}
