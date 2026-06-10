<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main>
    <section class="hero">
      <div class="hero-bg"></div>

      <div class="container">
        <div class="hero-content">
          <h1>CHUGOKU Paints<br>Indonesia</h1>
          <p>Marine paints, heavy duty coatings, underwater coating, flooring systems, and industrial protection solutions.</p>
          <a href="#" class="btn-blue">View Products <span>→</span></a>

          <div class="hero-number">
            <span>01</span>
            <span class="hero-line"></span>
            <span>03</span>
          </div>
        </div>
      </div>

      <aside class="hero-card">
        <h3>Over 100 Years<br>of Coating Excellence</h3>
        <p>Since 1917, Chugoku Paints has been delivering innovative coating solutions with Japanese expertise and quality.</p>
        <a href="#" class="link-white">Learn More About Us →</a>
      </aside>
    </section>

    <section class="features">
      <div class="container feature-grid">
        <div class="feature">
          <svg class="feature-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M24 5l16 6v12c0 10-6.8 17.5-16 20-9.2-2.5-16-10-16-20V11l16-6z"/>
            <path d="M17 24l5 5 10-11"/>
          </svg>
          <div>
            <h4>High Performance</h4>
            <p>Durable protection for extreme environments</p>
          </div>
        </div>

        <div class="feature">
          <svg class="feature-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="24" cy="24" r="18"/>
            <path d="M6 24h36M24 6c6 6 6 30 0 36M24 6c-6 6-6 30 0 36"/>
          </svg>
          <div>
            <h4>Trusted Quality</h4>
            <p>Japanese technology & global standards</p>
          </div>
        </div>

        <div class="feature">
          <svg class="feature-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M39 8C20 9 10 20 10 34c0 4 3 7 7 7 15 0 24-15 22-33z"/>
            <path d="M18 31c5-7 11-12 19-17"/>
          </svg>
          <div>
            <h4>Sustainable Future</h4>
            <p>Environmentally conscious coating solutions</p>
          </div>
        </div>

        <div class="feature">
          <svg class="feature-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="24" cy="14" r="7"/>
            <path d="M12 42c1-9 6-15 12-15s11 6 12 15"/>
            <circle cx="10" cy="26" r="4"/>
            <circle cx="38" cy="26" r="4"/>
          </svg>
          <div>
            <h4>Global Support</h4>
            <p>Worldwide network local commitment</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section solutions">
      <div class="container solutions-wrap">
        <div>
          <div class="eyebrow">Our Solutions</div>
          <h2 class="section-title">Coatings that Protect What Matters</h2>
          <p class="section-copy">We provide a wide range of high performance coatings and lining systems to protect assets and extend their service life.</p>
          <a href="#" class="btn-blue">View All Products <span>→</span></a>
        </div>

        <div class="solution-cards">
          <article class="solution-card">
            <img src="<?= base_url('assets/images/cpi06.jpg') ?>" alt="">
            <div class="solution-content">
              <div class="round-icon">⚙</div>
              <h3>Industrial<br>Coatings</h3>
              <p>Protecting steel structures and industrial equipment.</p>
              <a class="learn" href="#">Learn More →</a>
            </div>
          </article>

          <article class="solution-card">
            <img src="<?= base_url('assets/images/cpi02.jpg') ?>" alt="">
            <div class="solution-content">
              <div class="round-icon">●</div>
              <h3>Marine<br>Coatings</h3>
              <p>Superior protection for marine and offshore applications.</p>
              <a class="learn" href="#">Learn More →</a>
            </div>
          </article>

          <article class="solution-card">
            <img src="<?= base_url('assets/images/cpi05.jpg') ?>" alt="">
            <div class="solution-content">
              <div class="round-icon">▧</div>
              <h3>Protective<br>Coatings</h3>
              <p>Long-term corrosion protection for harsh environments.</p>
              <a class="learn" href="#">Learn More →</a>
            </div>
          </article>

          <article class="solution-card">
            <img src="<?= base_url('assets/images/cpi04.png') ?>" alt="">
            <div class="solution-content">
              <div class="round-icon">⌂</div>
              <h3>Flooring<br>Systems</h3>
              <p>High performance flooring for industrial facilities.</p>
              <a class="learn" href="#">Learn More →</a>
            </div>
          </article>
        </div>
      </div>
    </section>


    <section class="product-showcase">
      <div class="container">
        <div class="showcase-head">
          <div>
            <div class="eyebrow">Product & Application</div>
            <h2 class="section-title">Chugoku Coating Applications</h2>
          </div>
          <p class="section-copy">Showcase produk dan aplikasi coating Chugoku untuk kebutuhan marine, heavy duty coating, flooring, tank, pipe protection, dan area infrastruktur.</p>
        </div>

        <div class="showcase-grid">
          <article class="showcase-card large">
            <img src="<?= base_url('assets/images/cpi01.jpg') ?>" alt="Chugoku Marine Paints">
            <div class="showcase-caption">
              <h3>Marine Paints</h3>
              <p>Solusi coating untuk kapal, marine, dan perlindungan korosi area laut.</p>
            </div>
          </article>

          <article class="showcase-card">
            <img src="<?= base_url('assets/images/cpi06.jpg') ?>" alt="Tank coating application">
            <div class="showcase-caption">
              <h3>Tank Coating</h3>
              <p>Perlindungan permukaan tangki dan fasilitas industri.</p>
            </div>
          </article>

          <article class="showcase-card">
            <img src="<?= base_url('assets/images/cpi05.jpg') ?>" alt="Pipe coating application">
            <div class="showcase-caption">
              <h3>Pipe Protection</h3>
              <p>Heavy duty coating untuk jaringan pipa dan struktur industri.</p>
            </div>
          </article>

          <article class="showcase-card">
            <img src="<?= base_url('assets/images/cpi04.png') ?>" alt="Flooring system application">
            <div class="showcase-caption">
              <h3>Flooring System</h3>
              <p>Industrial floor coating dengan tampilan clean dan durable.</p>
            </div>
          </article>

          <article class="showcase-card">
            <img src="<?= base_url('assets/images/cpi03.jpeg') ?>" alt="Infrastructure coating application">
            <div class="showcase-caption">
              <h3>Infrastructure Protection</h3>
              <p>Aplikasi coating untuk struktur beton, kolom, dan area infrastruktur.</p>
            </div>
          </article>
        </div>

        <div class="promo-banner">
          <img src="<?= base_url('assets/images/cpi02.jpg') ?>" alt="Chugoku Marine Paints product banner" style="object-fit:contain;background:#fff;">
          <img src="<?= base_url('assets/images/cpi01.jpg') ?>" alt="Chugoku Underwater Coating banner">
        </div>
      </div>
    </section>

    <?= $this->include('public/partials/meeting_demo') ?>

    <section class="projects">
      <div class="project-band">
        <div class="project-left">
          <div class="eyebrow">Our Projects</div>
          <h2>Proven in Demanding Environments</h2>
          <p>From infrastructure and marine to industrial plants, our coatings are trusted in projects worldwide.</p>
          <a class="link-white" href="#">View All Projects →</a>
          <div class="project-arrows">
            <a href="#" class="arrow-btn">←</a>
            <a href="#" class="arrow-btn">→</a>
          </div>
        </div>

        <div class="project-right">
          <div style="width:100%">
            <div class="project-cards">
              <article class="project-card">
                <img src="<?= base_url('assets/images/cpi03.jpeg') ?>" alt="">
                <div class="project-info">
                  <h3>Akashi Kaikyo Bridge</h3>
                  <p>Japan</p>
                </div>
              </article>

              <article class="project-card">
                <img src="<?= base_url('assets/images/cpi02.jpg') ?>" alt="">
                <div class="project-info">
                  <h3>Offshore Platform</h3>
                  <p>Malaysia</p>
                </div>
              </article>

              <article class="project-card">
                <img src="<?= base_url('assets/images/cpi06.jpg') ?>" alt="">
                <div class="project-info">
                  <h3>Power Plant Project</h3>
                  <p>Thailand</p>
                </div>
              </article>
            </div>
            <div class="dots"><span>•</span><span>•</span><span>•</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section news">
      <div class="container news-wrap">
        <div>
          <div class="eyebrow">Latest News</div>
          <h2 class="section-title">Latest Updates<br>and Insights</h2>
        </div>

        <div class="news-grid">
          <article class="news-card">
            <img src="<?= base_url('assets/images/cpi01.jpg') ?>" alt="">
            <div class="news-body">
              <div class="date">May 20, 2024</div>
              <h3>Chugoku Paints Launches New High Performance Marine Coating</h3>
              <a class="read-more" href="#">Read More →</a>
            </div>
          </article>

          <article class="news-card">
            <img src="<?= base_url('assets/images/cpi03.jpeg') ?>" alt="">
            <div class="news-body">
              <div class="date">Apr 15, 2024</div>
              <h3>Supporting Sustainable Infrastructure Development</h3>
              <a class="read-more" href="#">Read More →</a>
            </div>
          </article>

          <article class="news-card">
            <img src="<?= base_url('assets/images/cpi04.png') ?>" alt="">
            <div class="news-body">
              <div class="date">Mar 10, 2024</div>
              <h3>Chugoku Paints Indonesia Celebrates 20th Anniversary</h3>
              <a class="read-more" href="#">Read More →</a>
            </div>
          </article>
        </div>

        <a href="#" class="view-all">View All News →</a>
      </div>
    </section>
  </main>

<?= $this->endSection() ?>
