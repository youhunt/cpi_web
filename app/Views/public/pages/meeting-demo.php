<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main>
  <section class="meeting-section soft">
    <div class="container">
      <div class="meeting-head">
        <div>
          <div class="eyebrow">Meeting Material</div>
          <h1 class="section-title">CPI New Website Platform Concept</h1>
        </div>
        <p class="section-copy">Halaman ini khusus untuk bahan meeting dan presentasi requirement Miyaji-san. Konten ini bukan layout final homepage, tetapi direction untuk fitur platform baru.</p>
      </div>
    </div>
  </section>

  <?= $this->include('public/partials/meeting_demo') ?>
</main>

<?= $this->endSection() ?>
