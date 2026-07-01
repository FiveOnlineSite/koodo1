<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';

$pageTitle = 'Our Services';
$metaDescription = 'Comprehensive financial solutions spanning portfolio restructuring, equity, mutual funds, alternative investments, bonds, and real estate structures.';
$currentPage = 'services';
$includeSplide = false;

include __DIR__ . '/includes/header.php';
?>

  <main class="services-page">

    <section id="home" class="services-hero">
      <div class="services-hero-overlay"></div>
      <div class="services-hero-inner">
        <h1>Building Wealth With Purpose</h1>
      </div>
    </section>

    <?php
    $services = [
      ['title' => 'Portfolio Restructuring', 'desc' => 'We assist clients in reviewing and restructuring existing portfolios to better align with evolving financial goals, market conditions, risk appetite, and long-term investment strategies.', 'image' => 'assets/images/services-portfolio.png'],
      ['title' => 'Equity Investments', 'desc' => 'Participate in India’s long-term growth story through carefully selected equity investment opportunities and market access solutions.', 'image' => 'assets/images/services-equity.png'],
      ['title' => 'Mutual Funds', 'desc' => 'Build diversified portfolios through professionally managed mutual fund strategies aligned with long-term financial objectives and evolving investment needs.', 'image' => 'assets/images/services-mutual.png'],
      ['title' => 'Alternative Investment Funds', 'desc' => 'Explore differentiated investment opportunities across alternative asset classes tailored for qualified investors seeking portfolio diversification beyond traditional markets.', 'image' => 'assets/images/services-alt-funds.png'],
      ['title' => 'Specialized Investment Funds (SIFs)', 'desc' => 'Access differentiated investment strategies designed for investors seeking greater flexibility beyond traditional mutual fund structures. SIFs offer professionally managed solutions with broader portfolio construction approaches aligned with evolving investment objectives.', 'image' => 'assets/images/services-sif.png'],
      ['title' => 'Bonds & Fixed Deposits', 'desc' => 'Access fixed income solutions including bonds and fixed deposits designed to support capital preservation, income generation, and portfolio stability.', 'image' => 'assets/images/services-bonds.png'],
      ['title' => 'Unlisted Equity', 'desc' => 'Access select pre-IPO and unlisted investment opportunities for investors seeking exposure to emerging and high-growth businesses beyond public markets.', 'image' => 'assets/images/services-unlisted-equity.png'],
      ['title' => 'Real Estate Structures', 'desc' => 'In addition to financial solutions, we assist clients in evaluating select real estate structures and opportunities that may complement broader wealth creation, diversification, and long-term asset planning objectives.', 'image' => 'assets/images/services-real-estate.png'],
    ];
    ?>

    <section class="services-grid-section section-space">
      <div class="container-fluid page-pad">
        <div class="section-head text-center">
          <span>Our Services</span>
          <h2>Comprehensive Financial Solutions</h2>
        </div>

        <div class="services-grid">
          <?php foreach ($services as $service): ?>
            <div class="service-card">
              <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
              <h3><?php echo $service['title']; ?></h3>
              <p><?php echo $service['desc']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $trustPoints = [
      ['title' => 'Strategic Partnership', 'desc' => 'Our partnership with Kotak Neo gives clients access to a trusted execution platform with seamless, secure, and transparent transactions.'],
      ['title' => 'Long-Term Perspective', 'desc' => 'We focus on disciplined, research-driven strategies built for sustainable wealth creation over time, not short-term speculation.'],
      ['title' => 'Client-Centric Approach', 'desc' => 'Every recommendation is guided by a clear understanding of each client’s goals, priorities, and evolving financial objectives.'],
      ['title' => 'Transparency & Integrity', 'desc' => 'We believe enduring relationships are built through honesty, accountability, transparency, and trust.'],
      ['title' => 'Personalized Attention', 'desc' => 'Clients receive dedicated relationship management tailored to their unique circumstances and long-term aspirations.'],
    ];
    $openTrustIndex = 0;
    ?>
    <section class="services-why section-space">
      <div class="container-fluid page-pad">
        <div class="services-why-wrap">
          <div class="services-why-media">
            <img src="assets/images/services-why-us.png" alt="Built on trust and expertise">
          </div>
          <div class="services-why-copy">
            <span class="eyebrow">Why Koodo India</span>
            <h2>Built on Trust. Backed by Expertise</h2>
            <div class="services-why-list">
              <?php foreach ($trustPoints as $i => $point): ?>
                <details<?php echo $i === $openTrustIndex ? ' open' : ''; ?>>
                  <summary>
                    <span class="q"><?php echo $point['title']; ?></span>
                    <span class="ic" aria-hidden="true"></span>
                  </summary>
                  <div class="answer">
                    <p><?php echo $point['desc']; ?></p>
                  </div>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $faqs = [
      ['q' => 'What services does Koodo India offer?', 'a' => 'We provide investment advisory, portfolio management, and long-term wealth planning for individuals, entrepreneurs, family offices, and ultra-high-net-worth families.'],
      ['q' => "Who can benefit from Koodo India's services?", 'a' => 'Individual investors, entrepreneurs, family offices, and ultra-high-net-worth families seeking disciplined, research-driven, long-term wealth creation.'],
      ['q' => 'How does Koodo India approach investment decisions?', 'a' => "Our recommendations are guided by research, market insights, disciplined analysis, and each client's unique financial objectives."],
      ['q' => "What is the benefit of Koodo India's partnership with Kotak Neo?", 'a' => 'Our partnership with Kotak Neo gives clients access to a trusted execution platform with seamless, secure, and transparent transactions.'],
      ['q' => 'How do I get started with Koodo India?', 'a' => 'Reach out through our contact page and our team will schedule an introductory conversation to understand your goals and priorities.'],
    ];
    $openIndex = 2;
    ?>
    <section id="faq" class="about-faq">
      <p class="about-faq-eyebrow">Knowledge Center</p>
      <h2 class="about-faq-title">Frequently Asked Questions</h2>
      <div class="about-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
          <details<?php echo $i === $openIndex ? ' open' : ''; ?>>
            <summary>
              <span class="q"><?php echo $faq['q']; ?></span>
              <span class="ic" aria-hidden="true"></span>
            </summary>
            <div class="answer">
              <p><?php echo $faq['a']; ?></p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact" class="about-contact">
      <h2>Let's Start a Conversation</h2>
      <p>Connect with Koodo India and discover how a disciplined, long-term approach can help create opportunities and build lasting value.</p>
      <a href="contact.php" class="about-contact-btn">Contact Us<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#002156" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="18" x2="18" y2="6"></line><polyline points="9 6 18 6 18 15"></polyline></svg></a>
    </section>

  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
