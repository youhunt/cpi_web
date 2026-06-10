<header class="site-header">
  <div class="container nav">
    <a href="<?= base_url('/') ?>" class="logo" aria-label="Chugoku Paints">
      <picture>
        <source media="(max-width: 640px)" srcset="<?= base_url('assets/images/logo_small.png') ?>">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Chugoku Paints Indonesia">
      </picture>
    </a>

    <nav class="menu">
      <a href="<?= base_url(current_lang() . '/about') ?>">About Us</a>
      <a href="<?= base_url(current_lang() . '/products') ?>">Products</a>
      <a href="<?= base_url(current_lang() . '/solutions') ?>">Solutions</a>
      <a href="<?= base_url(current_lang() . '/projects') ?>">Projects</a>
      <a href="<?= base_url(current_lang() . '/sustainability') ?>">Sustainability</a>
      <a href="<?= base_url(current_lang() . '/news') ?>">News</a>
    </nav>

    <div class="nav-actions">
      <a href="<?= lang_url('id') ?>" class="<?= current_lang() === 'id' ? 'active-lang' : '' ?>">
        ID
      </a>

      <span>/</span>

      <a href="<?= lang_url('en') ?>" class="<?= current_lang() === 'en' ? 'active-lang' : '' ?>">
        EN
      </a>

      <a href="<?= base_url(current_lang() . '/contact') ?>" class="btn-dark">
        Contact Us
      </a>
    </div>
  </div>
</header>