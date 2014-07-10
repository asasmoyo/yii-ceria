<?php

/** @var TbActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'login-form',
        ));

echo $form->textFieldRow($model, 'username', array('class' => 'span3'));
echo $form->passwordFieldRow($model, 'password', array('class' => 'span3'));
echo $form->checkboxRow($model, 'rememberMe');
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'label' => 'Login')
);

$this->endWidget();
unset($form);
?>