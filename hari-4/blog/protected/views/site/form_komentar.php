<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'komentar-form',
    'enableAjaxValidation' => false,
        ));
?>

<?php echo $form->textFieldRow($model, 'nama', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'komentar', array('class' => 'span5', 'maxlength' => 500)); ?>
<br/>

<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Tambah',
));
?>

<?php $this->endWidget(); ?>