<?php $this->beginContent('//layouts/main'); ?>
<div class="span3">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'list',
        'items' => $this->menu
    ));
    ?>
</div>
<div class="span9">
    <h2><?php echo $this->page_header; ?> <small><?php echo $this->sub_page_header; ?></small></h2>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array('links' => $this->breadcrumbs)); ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'block' => true,
        'fade' => true,
        'closeText' => '&times;',
        'events' => array(),
        'htmlOptions' => array(),
        'userComponentId' => 'user',
        'alerts' => array(
            'success',
            'info',
            'warning' => array('block' => false,),
            'error' => array('block' => false,)
        ),
    ));
    ?>

    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>