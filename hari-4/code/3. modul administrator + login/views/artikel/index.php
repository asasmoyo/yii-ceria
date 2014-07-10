<h1>Manage Artikels <small>list artikel</small></h1>

<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'label' => 'Tambah Artikel',
    'type' => 'primary',
    'htmlOptions' => [
        'class' => 'pull-right',
    ],
    'url' => $this->createUrl('/administrator/artikel/create'),
    'icon' => 'plus white'
));
?>
<br/>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'artikel-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'judul',
        'tanggal',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
