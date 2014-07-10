<?php foreach ($list_artikel as $artikel): ?>
    <a href="<?php echo $this->createUrl('/site/artikel', array('id' => $artikel->id)); ?>">        
        <h2><?php echo $artikel->judul; ?> <small><?php echo $artikel->tanggal; ?></small></h2>
    </a>
    <?php echo $artikel->isi; ?>
<?php endforeach; ?>
