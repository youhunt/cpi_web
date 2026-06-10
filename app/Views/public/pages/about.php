<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Tentang Kami', 'About Us') ?></div>
    <h1 class="section-title"><?= tx('Lebih dari 100 Tahun Keunggulan Coating', 'Over 100 Years of Coating Excellence') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('PT. Chugoku Paints Indonesia menyediakan solusi coating berkualitas Jepang untuk kebutuhan marine, heavy duty, infrastruktur, dan industri.', 'PT. Chugoku Paints Indonesia provides Japanese-quality coating solutions for marine, heavy duty, infrastructure, and industrial applications.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>