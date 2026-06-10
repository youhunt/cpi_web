<header class="site-header">
  <div class="container nav">
    <a href="<?= localized_url('') ?>" class="logo" aria-label="Chugoku Paints">
      <picture>
        <source media="(max-width: 640px)" srcset="<?= base_url('assets/images/logo_small.png') ?>">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Chugoku Paints Indonesia">
      </picture>
    </a>

    <nav class="menu">
      <a href="<?= localized_url('about') ?>"><?= tx('Tentang Kami', 'About Us') ?></a>
      <a href="<?= localized_url('products') ?>"><?= tx('Produk', 'Products') ?></a>
      <a href="<?= localized_url('solutions') ?>"><?= tx('Solusi', 'Solutions') ?></a>
      <a href="<?= localized_url('projects') ?>"><?= tx('Proyek', 'Projects') ?></a>
      <a href="<?= localized_url('sustainability') ?>"><?= tx('Keberlanjutan', 'Sustainability') ?></a>
      <a href="<?= localized_url('news') ?>"><?= tx('Berita', 'News') ?></a>
    </nav>

    <div class="nav-actions">
      <a href="<?= lang_url('id') ?>" class="<?= current_lang() === 'id' ? 'active-lang' : '' ?>">ID</a>
      <span>/</span>
      <a href="<?= lang_url('en') ?>" class="<?= current_lang() === 'en' ? 'active-lang' : '' ?>">EN</a>
      <a href="<?= localized_url('contact') ?>" class="btn-dark">
        <?= tx('Hubungi Kami', 'Contact Us') ?>
      </a>
    </div>
  </div>
</header>