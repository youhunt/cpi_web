<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Produk', 'Products') ?></div>
    <h1 class="section-title"><?= tx('Marine Paints & Heavy Duty Coatings', 'Marine Paints & Heavy Duty Coatings') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Daftar produk coating untuk marine, underwater coating, protective coating, tank coating, pipe protection, dan flooring system.', 'Product portfolio for marine paints, underwater coating, protective coating, tank coating, pipe protection, and flooring systems.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>