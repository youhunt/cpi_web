<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container">
    <div class="eyebrow"><?= tx('Hubungi Kami', 'Contact Us') ?></div>
    <h1 class="section-title"><?= tx('Hubungi Chugoku Paints Indonesia', 'Contact Chugoku Paints Indonesia') ?></h1>
    <p class="section-copy" style="max-width:760px">
      <?= tx('Midplaza-1 lantai 8 Jl. Jend. Sudirman Kav. 10-11 Jakarta Indonesia 10220. Call/WA 081287833400.', 'Midplaza-1 8th Floor, Jl. Jend. Sudirman Kav. 10-11 Jakarta Indonesia 10220. Call/WhatsApp 081287833400.') ?>
    </p>
    <a href="<?= localized_url('') ?>" class="btn-blue"><?= tx('Kembali ke Beranda', 'Back to Home') ?> <span>→</span></a>
  </div>
</section>

<?= $this->endSection() ?>