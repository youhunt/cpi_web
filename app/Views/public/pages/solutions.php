<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Solusi', 'Solutions') ?></div>
    <h1 class="section-title"><?= tx('Solusi Coating untuk Industri', 'Coating Solutions for Industry') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Solusi perlindungan permukaan untuk kapal, tangki, pipa, lantai industri, struktur baja, dan infrastruktur.', 'Surface protection solutions for vessels, tanks, pipes, industrial floors, steel structures, and infrastructure.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>