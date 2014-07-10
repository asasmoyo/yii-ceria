<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseAdministratorController
 *
 * @author asasmoyo
 */
class BaseAdministratorController extends Controller {

    public $sidebar_items;
    public $layout = '//layouts/column2';

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array(
                'allow',
                'actions' => array('login', 'logout'),
                'users' => array('*'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    protected function beforeAction($action) {
        $this->sidebar_items = array(
            array(
                'label' => 'Navigasi',
                'itemOptions' => array('class' => 'nav-header')
            ),
            array(
                'label' => 'Home',
                'url' => $this->createUrl('/administrator/default/index'),
                'visible' => !Yii::app()->user->isGuest,
                'active' => $this->id == 'default' && $this->action->id == 'index',
                'icon' => 'home',
            ),
            array(
                'label' => 'Artikel',
                'url' => $this->createUrl('/administrator/artikel/index'),
                'visible' => !Yii::app()->user->isGuest,
                'active' => $this->id == 'artikel',
                'icon' => 'th-list',
            ),
            array(
                'label' => 'Logout',
                'url' => $this->createUrl('/administrator/default/logout'),
                'visible' => !Yii::app()->user->isGuest,
                'icon' => 'off',
            ),
        );

        return parent::beforeAction($action);
    }

}
