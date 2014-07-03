<?php if ($form->errors): ?>
    <ol>
        <?php foreach ($form->errors as $error): ?>
            <li><?php echo $error[0]; ?></li>
        <?php endforeach; ?>
    </ol>
<?php else: ?>
    <p>Hasil: <?php echo $form->getHasil(); ?></p>
<?php endif; ?>

<?php echo CHtml::beginForm(); ?>

<p><?php echo CHtml::activeTextField($form, 'angka1'); ?></p>

<p><?php echo CHtml::activeTextField($form, 'angka2'); ?></p>

<p><?php echo CHtml::button('ok', ['type' => 'submit']); ?></p>

<?php echo CHtml::endForm(); ?>