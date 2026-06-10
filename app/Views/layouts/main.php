<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Chugoku Paints Indonesia') ?></title>
  <meta name="description" content="<?= esc($metaDescription ?? 'Chugoku Paints Indonesia - Marine paints, heavy duty coatings, underwater coating, flooring systems, and industrial protection solutions.') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo_small.png') ?>">
  <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo_small.png') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/chugoku.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/logo-fix.css') ?>">
</head>
<body>
<?= $this->include('partials/floating_social') ?>
<?= $this->include('partials/header') ?>
<?= $this->renderSection('content') ?>
<?= $this->include('partials/footer') ?>
<script src="<?= base_url('assets/js/chugoku.js') ?>"></script>
</body>
</html>