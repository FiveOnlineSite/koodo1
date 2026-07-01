<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';

$pageTitle = 'Creating Opportunity. Building Values.';
$metaDescription = 'Thoughtful financial solutions focused on long-term wealth creation, preservation, and strategic financial guidance.';
$currentPage = 'home';
$includeSplide = true;

include __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="hero-section" id="home">
      <div class="hero-overlay"></div>
      <div class="container-fluid page-pad hero-inner">
        <h1>Creating Opportunity.<br>Building Values.</h1>
      </div>
    </section>

    <section class="services-section section-space" id="services">
      <div class="container-fluid page-pad">
        <div class="section-head text-center">
          <span>Our Services</span>
          <h2>Comprehensive Financial Solutions</h2>
        </div>

        <?php
        $services = [
          [
            'title' => 'Portfolio Restructuring',
            'desc' => 'We assist clients in reviewing and restructuring existing portfolios to better align with evolving
              financial goals, market conditions, risk appetite, and long-term investment strategies.',
            'image' => 'assets/images/service-portfolio.webp',
            'alt' => 'Portfolio Restructuring',
          ],
          [
            'title' => 'Equity Investments',
            'desc' => 'Participate in India’s long-term growth story through carefully selected equity investment opportunities
              and market access solutions.',
            'image' => 'assets/images/service-equity.webp',
            'alt' => 'Equity Investments',
          ],
          [
            'title' => 'Mutual Funds',
            'desc' => 'Build diversified portfolios through professionally managed mutual fund strategies aligned with long-term
              financial objectives and evolving investment needs.',
            'image' => 'assets/images/service-mutual.webp',
            'alt' => 'Mutual Funds',
          ],
          [
            'title' => 'Alternative Investments',
            'desc' => 'Explore curated alternative investment avenues designed to complement traditional portfolios and support
              broader wealth creation goals.',
            'image' => 'assets/images/service-alt.webp',
            'alt' => 'Alternative Investments',
          ],
        ];
        ?>

        <div class="splide koodo-splide services-splide" id="servicesSlider" aria-label="Services Slider">

          <div class="slider-toolbar splide__arrows">
            <button class="circle-btn splide__arrow splide__arrow--prev" type="button">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="circle-btn splide__arrow splide__arrow--next" type="button">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>

          <div class="splide__track">
            <ul class="splide__list">
              <?php foreach ($services as $service): ?>
                <li class="splide__slide">
                  <div class="service-card">
                    <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['alt']; ?>">
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['desc']; ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>



        <div class="text-center mt-5">
          <a href="about-us.php" class="primary-btn btn-with-icon">
            Know More
            <span class="btn-icon" aria-hidden="true">
              <img src="assets/images/up-right.png" alt="" class="icon-default">
              <img src="assets/images/up-right-blue.png" alt="" class="icon-hover">
            </span>
          </a>
        </div>
      </div>
    </section>

    <section class="partnership-section section-space" id="about">
      <div class="container-fluid page-pad">
        <div class="partnership-wrap">
          <div class="partnership-copy">
            <span class="eyebrow">Our Partnership</span>
            <h2>The Strength of a Trusted<br>Financial Ecosystem</h2>
            <p>Our partnership with Kotak Neo enhances our ability to deliver a more informed, efficient, and
              research-driven investment experience. Clients benefit from access to a robust financial ecosystem backed
              by one of India’s most trusted financial institutions, offering institutional research capabilities,
              market intelligence, analytical tools, and a comprehensive range of investment solutions under a single
              platform.</p>
            <p>By combining personalized relationship management with the strength and technological capabilities of a
              leading financial institution, we help clients make confident financial decisions with clarity and
              discipline.</p>
            <a href="#" class="read-link">Read more</a>
          </div>
          <div class="partnership-image">
            <img src="assets/images/partnership.webp" alt="Trusted financial partnership">
          </div>
        </div>
      </div>
    </section>

    <section class="philosophy-section section-space">
      <div class="container-fluid page-pad narrow-pad">
        <div class="section-head text-center">
          <span>Our Philosophy</span>
          <h2>CREATING OPPORTUNITY. BUILDING VALUE.</h2>
        </div>


        <?php
        $philosophies = [
          [
            'title' => 'Discipline',
            'desc' => 'At Koodo India, we believe successful wealth management is built on identifying meaningful opportunities
              while maintaining a disciplined focus on long-term value creation.',
            'image' => 'assets/images/philosophy-discipline.webp',
            'alt' => 'Discipline',
          ],
          [
            'title' => 'Guidance',
            'desc' => 'Our role extends beyond facilitating investments — we help clients make informed financial decisions that
              support their aspirations today while building lasting value for future generations.',
            'image' => 'assets/images/philosophy-guidance.webp',
            'alt' => 'Guidance',
          ],
          [
            'title' => 'Partnership',
            'desc' => 'By combining market access, institutional research capabilities, professional guidance, and a
              relationship-first approach, we strive to serve as a trusted long-term partner in every stage of wealth
              creation.',
            'image' => 'assets/images/philosophy-partnership.webp',
            'alt' => 'Partnership',
          ],
        ];
        ?>

        <div class="splide koodo-splide philosophy-splide" id="philosophySlider" aria-label="Philosophy Slider">

          <div class="slider-toolbar philosophy-arrows splide__arrows">
            <button class="circle-btn splide__arrow splide__arrow--prev" type="button">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="circle-btn splide__arrow splide__arrow--next" type="button">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>

          <div class="splide__track">
            <ul class="splide__list">
              <?php foreach ($philosophies as $item): ?>
                <li class="splide__slide">
                  <div class="philosophy-card">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['alt']; ?>">
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['desc']; ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>


      </div>
    </section>

    <section class="cta-section" id="contact">
      <div class="container-fluid page-pad text-center">
        <h2>Let’s Start a Conversation</h2>
        <p>Connect with Koodo India and discover how a disciplined, long-term approach<br class="d-none d-md-block"> can
          help create opportunities and build lasting value.</p>
        <a href="contact.php" class="secondary-btn btn-with-icon">
          Contact Us
          <span class="btn-icon" aria-hidden="true">
            <img src="assets/images/up-right-blue.png" alt="" class="icon-default">
            <img src="assets/images/up-right.png" alt="" class="icon-hover">
          </span>
        </a>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>