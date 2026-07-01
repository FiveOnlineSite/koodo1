<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';

$pageTitle = 'About Us';
$metaDescription = 'Building lasting financial value through thoughtful guidance, institutional insights, and investment strategies aligned with evolving client goals.';
$currentPage = 'about';
$bodyClass = 'about-body';
$includeSplide = false;

include __DIR__ . '/includes/header.php';
?>

  <main class="about-page">

    <section id="home" class="about-hero">
      <span class="about-hero-eyebrow">About Us</span>
      <h1 class="about-hero-title">Building Wealth With Confidence</h1>
      <p class="about-hero-text">Building lasting financial value through thoughtful guidance, institutional insights, and investment strategies aligned with evolving client goals.</p>
      <div class="about-hero-media">
        <img src="assets/images/about-hero.png" alt="Koodo India team" />
      </div>
    </section>

    <section id="about" class="about-company">
      <div class="about-company-row">
        <div class="about-company-text">
          <p class="about-company-eyebrow">The Company</p>
          <h2 class="about-company-title">A Relationship-Driven Approach to Wealth Creation</h2>
          <p>Founded in 2020, Koodo India Pvt. Ltd. is a financial services firm committed to helping clients navigate investment opportunities with clarity, discipline, and a long-term perspective. We believe wealth represents more than financial capital &mdash; it creates future opportunities, supports family aspirations, and builds enduring legacies across generations.</p>
          <p>Our approach is centered on trust, transparency, and meaningful long-term relationships, ensuring that every strategy remains aligned with our clients' evolving financial objectives. Whether serving individual investors, entrepreneurs, family offices, or ultra-high-net-worth families, Koodo India remains committed to delivering thoughtful guidance, professional expertise, and dependable service at every stage of the wealth journey.</p>
        </div>
        <div class="about-company-media">
          <img src="assets/images/about-building.jpg" alt="Corporate building" />
        </div>
      </div>
    </section>

    <section class="about-approach">
      <div class="about-approach-wrap">
        <img src="assets/images/about-approach.jpg" alt="Financial analysis" />
        <div class="about-approach-card">
          <p class="about-approach-eyebrow">Our Approach</p>
          <h3 class="about-approach-title">A Disciplined Process Built Around Your Goals</h3>
          <p class="about-approach-text">We believe successful wealth management begins with understanding your goals, priorities, and aspirations. Through research-driven insights, professional expertise, and personalized guidance, we help clients make informed decisions that support long-term financial growth and lasting value.</p>
        </div>
      </div>
    </section>

    <?php
    $team = [
      ['name' => 'Sarthak Sinha', 'role' => 'Designation', 'image' => 'assets/images/about-team-sarthak.jpg'],
      ['name' => 'Rajasvi Singh', 'role' => 'Designation', 'image' => 'assets/images/about-team-rajasvi.jpg'],
      ['name' => 'Mitali Raj', 'role' => 'Designation', 'image' => 'assets/images/about-team-mitali.jpg'],
      ['name' => 'Saswat Singh', 'role' => 'Designation', 'image' => 'assets/images/about-team-saswat.jpg'],
    ];
    ?>
    <section id="team" class="about-team">
      <p class="about-team-eyebrow">Team</p>
      <h2 class="about-team-title">Since 2020, we're a team<img src="assets/images/about-team-rajasvi.jpg" alt="" />of all-in, all-experienced<img src="assets/images/about-team-saswat.jpg" alt="" />people</h2>

      <div class="about-team-grid">
        <?php foreach ($team as $member): ?>
          <article class="about-team-member">
            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" />
            <h4><?php echo $member['name']; ?></h4>
            <p><?php echo $member['role']; ?></p>
          </article>
        <?php endforeach; ?>
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
