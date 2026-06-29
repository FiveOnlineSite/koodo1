<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $siteName; ?> - About Us</title>
  <meta name="description"
    content="Building lasting financial value through thoughtful guidance, institutional insights, and investment strategies aligned with evolving client goals.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .about-page { font-family: 'Inter', system-ui, sans-serif; color: #111111; }
    .about-page section { box-sizing: border-box; }
    .about-page img { max-width: 100%; }
    .about-faq details { background: #fafafa; border: 0.6px solid rgba(0, 0, 0, 0.1); }
    .about-faq summary { list-style: none; cursor: pointer; display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 13px 16px; }
    .about-faq summary::-webkit-details-marker { display: none; }
    .about-faq summary .q { font-family: 'Playfair Display', serif; font-weight: 400; font-size: 16px; line-height: 24px; color: #111111; }
    .about-faq .ic { position: relative; flex: none; width: 24px; height: 24px; border-radius: 9999px; background: #002156; }
    .about-faq .ic::before, .about-faq .ic::after { content: ""; position: absolute; left: 50%; top: 50%; background: #fff; transform: translate(-50%, -50%); }
    .about-faq .ic::before { width: 10px; height: 1.6px; }
    .about-faq .ic::after { width: 1.6px; height: 10px; transition: opacity .15s ease; }
    .about-faq details[open] .ic::after { opacity: 0; }
    .about-faq .answer { padding: 0 16px 16px; }
    /* About page has a light hero, so the navbar must stay solid (it is transparent/white-text by default for the dark home hero). */
    body.about-body .koodo-navbar { background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(12px); }
    body.about-body .koodo-navbar .nav-link { color: var(--heading, #111); text-shadow: none; }
    body.about-body .koodo-navbar .nav-link:hover { color: #002156; opacity: .75; }
  </style>
</head>

<body class="about-body">

  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top koodo-navbar">
      <div class="container-fluid page-pad">
        <a class="navbar-brand" href="index.php#home" aria-label="Koodo India">
          <img src="assets/images/logo.png" alt="Koodo Logo" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
          aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="mainMenu">
          <ul class="navbar-nav align-items-lg-center gap-lg-4">
            <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#career">Career</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="about-page" style="overflow:hidden">

    <section id="home" style="background:#fffffa; padding:clamp(104px,9vw,140px) clamp(24px,5.5vw,80px) clamp(48px,6vw,72px)">
      <span style="display:block; font-size:16px; line-height:24px; color:#333333; margin-bottom:24px">About Us</span>
      <h1 style="font-family:'Playfair Display',serif; font-weight:600; font-size:clamp(34px,4.6vw,48px); line-height:1.25; color:#111111; max-width:505px; margin:0 0 24px">Building Wealth With Confidence</h1>
      <p style="font-size:16px; line-height:28px; letter-spacing:0.64px; color:#333333; max-width:687px; margin:0">Building lasting financial value through thoughtful guidance, institutional insights, and investment strategies aligned with evolving client goals.</p>
      <div style="margin-top:clamp(40px,5vw,64px); border-radius:12px; overflow:hidden; box-shadow:0 28px 64px rgba(17,33,64,0.12)">
        <img src="assets/images/about-hero.png" alt="Koodo India team" style="display:block; width:100%; height:clamp(220px,29vw,428px); object-fit:cover" />
      </div>
    </section>

    <section id="about" style="background:#fafafa; padding:clamp(56px,6vw,80px) clamp(24px,5.5vw,80px)">
      <div style="display:flex; flex-wrap:wrap; gap:clamp(40px,4vw,54px); align-items:flex-start">
        <div style="flex:1 1 520px; min-width:280px; max-width:738px">
          <p style="font-size:16px; line-height:24px; color:#333333; margin:0 0 16px">The Company</p>
          <h2 style="font-family:'Playfair Display',serif; font-weight:500; font-size:24px; line-height:36px; letter-spacing:0.96px; color:#111111; max-width:415px; margin:0 0 28px">A Relationship-Driven Approach to Wealth Creation</h2>
          <p style="font-size:16px; line-height:28px; color:#444444; margin:0 0 24px">Founded in 2020, Koodo India Pvt. Ltd. is a financial services firm committed to helping clients navigate investment opportunities with clarity, discipline, and a long-term perspective. We believe wealth represents more than financial capital &mdash; it creates future opportunities, supports family aspirations, and builds enduring legacies across generations.</p>
          <p style="font-size:16px; line-height:28px; color:#444444; margin:0">Our approach is centered on trust, transparency, and meaningful long-term relationships, ensuring that every strategy remains aligned with our clients' evolving financial objectives. Whether serving individual investors, entrepreneurs, family offices, or ultra-high-net-worth families, Koodo India remains committed to delivering thoughtful guidance, professional expertise, and dependable service at every stage of the wealth journey.</p>
        </div>
        <div style="flex:0 1 484px; min-width:280px">
          <img src="assets/images/about-building.jpg" alt="Corporate building" style="display:block; width:100%; height:clamp(360px,37vw,536px); object-fit:cover" />
        </div>
      </div>
    </section>

    <section style="background:#ffffff; padding:0 clamp(24px,5.5vw,80px) clamp(56px,6vw,80px)">
      <div style="max-width:1380px; margin:0 auto; padding-top:34px">
        <img src="assets/images/about-approach.jpg" alt="Financial analysis" style="display:block; width:100%; height:clamp(280px,29vw,416px); object-fit:cover" />
        <div style="width:min(596px,100%); margin-left:auto; margin-top:clamp(-180px,-13vw,-122px); position:relative; background:#ad0a1d; color:#ffffff; padding:clamp(28px,3vw,40px)">
          <p style="font-size:16px; line-height:24px; color:rgba(255,255,255,0.95); margin:0 0 24px">Our Approach</p>
          <h3 style="font-family:'Playfair Display',serif; font-weight:500; font-size:24px; line-height:36px; letter-spacing:0.96px; color:#ffffff; max-width:384px; margin:0 0 24px">A Disciplined Process Built Around Your Goals</h3>
          <p style="font-size:16px; line-height:28px; color:#ffffff; max-width:540px; margin:0">We believe successful wealth management begins with understanding your goals, priorities, and aspirations. Through research-driven insights, professional expertise, and personalized guidance, we help clients make informed decisions that support long-term financial growth and lasting value.</p>
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
    <section id="team" style="background:#fafafa; padding:clamp(56px,6vw,80px) clamp(24px,5.5vw,80px)">
      <p style="text-align:center; font-size:16px; line-height:28px; letter-spacing:0.64px; color:#333333; margin:0 0 18px">Team</p>
      <h2 style="text-align:center; font-family:'Playfair Display',serif; font-weight:500; font-size:clamp(22px,2.4vw,28px); line-height:1.7; letter-spacing:0.96px; color:#111111; max-width:900px; margin:0 auto">Since 2020, we're a team<img src="assets/images/about-team-rajasvi.jpg" alt="" style="display:inline-block; width:88px; height:50px; object-fit:cover; border-radius:8px; vertical-align:middle; margin:0 10px; transform:rotate(-11deg)" />of all-in, all-experienced<img src="assets/images/about-team-saswat.jpg" alt="" style="display:inline-block; width:88px; height:50px; object-fit:cover; border-radius:8px; vertical-align:middle; margin:0 10px; transform:rotate(10deg)" />people</h2>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:24px; max-width:1280px; margin:clamp(40px,5vw,52px) auto 0">
        <?php foreach ($team as $member): ?>
          <article style="text-align:center">
            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" style="display:block; width:100%; aspect-ratio:305/319; object-fit:cover; object-position:top" />
            <h4 style="font-family:'Playfair Display',serif; font-weight:400; font-size:20px; line-height:30px; letter-spacing:1.6px; color:#111111; margin:16px 0 6px"><?php echo $member['name']; ?></h4>
            <p style="font-size:16px; line-height:24px; color:#333333; margin:0"><?php echo $member['role']; ?></p>
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
    <section id="faq" class="about-faq" style="background:#ffffff; padding:clamp(56px,6vw,80px) clamp(24px,5.5vw,80px)">
      <p style="text-align:center; font-size:16px; line-height:28px; letter-spacing:0.64px; color:#333333; margin:0 0 12px">Knowledge Center</p>
      <h2 style="text-align:center; font-family:'Playfair Display',serif; font-weight:500; font-size:24px; line-height:36px; letter-spacing:0.96px; color:#111111; margin:0 0 clamp(36px,4vw,48px)">Frequently Asked Questions</h2>
      <div style="max-width:735px; margin:0 auto; display:flex; flex-direction:column; gap:16px">
        <?php foreach ($faqs as $i => $faq): ?>
          <details<?php echo $i === $openIndex ? ' open' : ''; ?>>
            <summary>
              <span class="q"><?php echo $faq['q']; ?></span>
              <span class="ic" aria-hidden="true"></span>
            </summary>
            <div class="answer">
              <p style="font-size:16px; line-height:28px; color:#333333; margin:0; max-width:695px"><?php echo $faq['a']; ?></p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact" style="background:#002156; color:#ffffff; text-align:center; padding:clamp(48px,5vw,56px) clamp(24px,5.5vw,80px) clamp(48px,5vw,60px)">
      <h2 style="font-family:'Playfair Display',serif; font-weight:500; font-size:clamp(24px,2.6vw,28px); line-height:36px; letter-spacing:1.92px; color:#ffffff; margin:0 0 16px">Let's Start a Conversation</h2>
      <p style="font-size:16px; line-height:24px; color:#ffffff; max-width:604px; margin:0 auto 36px">Connect with Koodo India and discover how a disciplined, long-term approach can help create opportunities and build lasting value.</p>
      <a href="mailto:<?php echo $email; ?>" style="display:inline-flex; align-items:center; white-space:nowrap; gap:12px; background:#ffffff; color:#002156; font-size:18px; line-height:24px; text-decoration:none; padding:12px 30px">Contact Us<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#002156" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:block"><line x1="6" y1="18" x2="18" y2="6"></line><polyline points="9 6 18 6 18 15"></polyline></svg></a>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container-fluid page-pad">
      <div class="footer-top">
        <div class="footer-about">
          <img src="assets/images/logo.png" alt="Koodo Logo" class="footer-logo">
          <p>Thoughtful financial solutions focused on long-term wealth creation, preservation, and strategic financial
            guidance</p>
        </div>
        <div class="footer-links-wrap">
          <ul class="footer-links">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#career">Career</a></li>
            <li><a href="index.php#contact">Contact Us</a></li>
          </ul>
          <div class="social-row">
            <span>Follow Us</span>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div><a href="#">Privacy Policy</a> <a href="#">Terms &amp; Condition</a></div>
        <p>&copy; 2026 Koodo India Pvt. Ltd. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
