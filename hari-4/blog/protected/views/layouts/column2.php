<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span3">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'list',
            'items' => $this->sidebar_items,
        ));
        ?>
    </div>
    <div class="span8">
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>