<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Keberlanjutan', 'Sustainability') ?></div>
    <h1 class="section-title"><?= tx('Pendekatan Coating yang Berkelanjutan', 'Sustainable Coating Approach') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Komitmen terhadap perlindungan aset, lingkungan, dan solusi coating yang lebih bertanggung jawab.', 'Commitment to asset protection, environmental responsibility, and more sustainable coating solutions.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>