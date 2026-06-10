<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow">News</div>
    <h1 class="section-title">Latest Updates and Insights</h1>
    <p class="section-copy" style="max-width:760px">Informasi terbaru seputar produk, aplikasi, dan kegiatan Chugoku Paints Indonesia.</p>
    <a href="<?= base_url('/') ?>" class="btn-blue">Back to Home <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>
