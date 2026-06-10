<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Proyek', 'Projects') ?></div>
    <h1 class="section-title"><?= tx('Aplikasi Proyek', 'Project Applications') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Contoh aplikasi coating Chugoku pada berbagai kebutuhan industri, marine, dan infrastruktur.', 'Examples of Chugoku coating applications for industrial, marine, and infrastructure requirements.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>