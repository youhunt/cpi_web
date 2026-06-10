<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Berita', 'News') ?></div>
    <h1 class="section-title"><?= tx('Informasi dan Insight Terbaru', 'Latest Updates and Insights') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Informasi terbaru seputar produk, aplikasi, dan kegiatan Chugoku Paints Indonesia.', 'Latest information about products, applications, and activities from Chugoku Paints Indonesia.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>