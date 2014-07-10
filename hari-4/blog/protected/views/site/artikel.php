<h1><?php echo $artikel->judul; ?> <small><?php echo $artikel->tanggal; ?></small></h1>
<?php echo $artikel->isi; ?>

<div class="komentar" style="margin-top: 30px;">
    <h4>Komentar:</h4>
    <?php echo $this->renderPartial('form_komentar', ['model' => $model]); ?>
</div>

<?php foreach ($artikel->komentars as $komentar): ?>
    <p><strong><?php echo $komentar->tanggal; ?> <?php echo $komentar->nama; ?>:</strong> <?php echo $komentar->komentar; ?></p>
<?php endforeach; ?>
