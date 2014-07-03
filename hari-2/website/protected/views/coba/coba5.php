

<p>Hasil: <?php echo $hasil; ?></p>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->label($model, 'angka1'); ?>
        <?php echo $form->textField($model, 'angka1') ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'angka2'); ?>
        <?php echo $form->textField($model, 'angka2') ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('OK'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>