<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main>
  <section class="section">
    <div class="container">
      <div class="eyebrow"><?= esc(tx('Halaman', 'Page')) ?></div>
      <h1 class="section-title"><?= esc(localized_field($pageData, 'title')) ?></h1>

      <?php if (! empty(localized_field($pageData, 'excerpt'))): ?>
        <p class="section-copy" style="max-width:820px">
          <?= esc(localized_field($pageData, 'excerpt')) ?>
        </p>
      <?php endif; ?>

      <?php if (! empty(localized_field($pageData, 'content'))): ?>
        <div class="section-copy" style="max-width:900px; margin-top:24px">
          <?= nl2br(esc(localized_field($pageData, 'content'))) ?>
        </div>
      <?php endif; ?>

      <div style="margin-top:30px">
        <a href="<?= localized_url('') ?>" class="btn-blue">
          <?= esc(tx('Kembali ke Beranda', 'Back to Home')) ?> <span>→</span>
        </a>
      </div>
    </div>
  </section>
</main>

<?= $this->endSection() ?>
