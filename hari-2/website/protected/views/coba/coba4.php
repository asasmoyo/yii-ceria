<?php echo CHtml::errorSummary($form); ?>

<?php echo CHtml::beginForm(); ?>

<p><?php echo CHtml::activeTextField($form, 'angka1'); ?></p>

<p><?php echo CHtml::activeTextField($form, 'angka2'); ?></p>

<p><?php echo CHtml::button('ok', ['type' => 'submit']); ?></p>

<?php echo CHtml::endForm(); ?>