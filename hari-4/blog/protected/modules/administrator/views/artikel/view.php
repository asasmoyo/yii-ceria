<h1>View Artikel #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'judul',
        'tanggal',
    ),
));
?>

<?php echo $model->isi; ?>
