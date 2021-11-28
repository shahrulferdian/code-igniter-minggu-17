<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>
<h1> <?php= $judul; ?></h1>

<?php foreach $kategori as key =>value): ?>
<h2><?= $value['kategori'] ?></h2>
<?php endforeach ?>

<h1><?= $kategori[0]['kategori'] ?></h1>

<? $this->endsection() ?>
