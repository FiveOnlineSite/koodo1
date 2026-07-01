<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';

$pageTitle = 'Career';
$metaDescription = 'Explore open positions at Koodo India and start building your career with a team committed to disciplined, long-term wealth creation.';
$currentPage = 'career';
$bodyClass = 'about-body';
$includeSplide = false;

include __DIR__ . '/includes/header.php';
?>

  <main class="career-page about-page">

    <section id="home" class="about-hero">
      <span class="about-hero-eyebrow">Career</span>
      <h1 class="about-hero-title">Build Your Career With Purpose</h1>
      <p class="about-hero-text">Join a team dedicated to disciplined, long-term wealth creation. We look for people who bring integrity, curiosity, and a client-first mindset.</p>
      <div class="about-hero-media">
        <img src="assets/images/philosophy-guidance.webp" alt="Koodo India team collaborating">
      </div>
    </section>

    <?php
    $positions = [
      ['title' => 'Relationship Manager', 'location' => 'Mumbai', 'type' => 'Full-time', 'desc' => 'Manage and grow client relationships, understanding their financial goals and guiding them toward the right investment strategies.'],
      ['title' => 'Investment Analyst', 'location' => 'Mumbai', 'type' => 'Full-time', 'desc' => 'Research markets and investment opportunities to support portfolio recommendations across equity, mutual funds, and alternative assets.'],
      ['title' => 'Client Servicing Associate', 'location' => 'Pune', 'type' => 'Full-time', 'desc' => 'Support client onboarding, documentation, and day-to-day servicing to ensure a seamless client experience.'],
    ];
    ?>
    <section id="positions" class="positions-section">
      <div class="section-head text-center">
        <span>Open Positions</span>
        <h2>Current Opportunities</h2>
      </div>
      <div class="positions-list">
        <?php foreach ($positions as $job): ?>
          <div class="position-card">
            <div class="position-info">
              <h3><?php echo $job['title']; ?></h3>
              <div class="position-meta">
                <span><i class="fa-solid fa-location-dot"></i> <?php echo $job['location']; ?></span>
                <span><i class="fa-solid fa-briefcase"></i> <?php echo $job['type']; ?></span>
              </div>
              <p><?php echo $job['desc']; ?></p>
            </div>
            <a href="#apply" class="position-apply-btn">Apply Now</a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="apply" class="application-section">
      <div class="section-head text-center">
        <span>Apply Now</span>
        <h2>Send Us Your Application</h2>
      </div>

      <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
        <div class="form-alert form-alert-success" role="status">Thank you — your application has been submitted. We'll be in touch if there's a match.</div>
      <?php elseif (isset($_GET['sent']) && $_GET['sent'] === '0'): ?>
        <div class="form-alert form-alert-error" role="alert">Sorry, something went wrong while submitting your application. Please try again or email us directly.</div>
      <?php endif; ?>

      <form class="site-form application-form" action="send-application.php" method="post" enctype="multipart/form-data" novalidate>
        <div class="form-row">
          <div class="form-field">
            <label for="af-name">Name <span class="req">*</span></label>
            <input type="text" id="af-name" name="name" placeholder="Your full name" minlength="2" maxlength="100" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="form-field">
            <label for="af-email">Email <span class="req">*</span></label>
            <input type="email" id="af-email" name="email" placeholder="you@example.com" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label for="af-phone">Phone <span class="req">*</span></label>
            <input type="tel" id="af-phone" name="phone" placeholder="+91 00000 00000" pattern="^[0-9+\-\s()]{7,15}$" required>
            <div class="invalid-feedback">Please enter a valid phone number.</div>
          </div>
          <div class="form-field">
            <label for="af-position">Position Applying For <span class="req">*</span></label>
            <select id="af-position" name="position" required>
              <option value="" disabled selected>Select a position</option>
              <?php foreach ($positions as $job): ?>
                <option value="<?php echo $job['title']; ?>"><?php echo $job['title']; ?></option>
              <?php endforeach; ?>
              <option value="other">Other</option>
            </select>
            <div class="invalid-feedback">Please select a position.</div>
          </div>
        </div>
        <div class="form-field">
          <label for="af-resume">Resume / CV <span class="req">*</span></label>
          <input type="file" id="af-resume" name="resume" accept=".pdf,.doc,.docx" required>
          <div class="invalid-feedback">Please attach your resume (PDF or Word, max 5MB).</div>
        </div>
        <div class="form-field">
          <label for="af-message">Message</label>
          <textarea id="af-message" name="message" rows="5" placeholder="Tell us why you'd be a great fit" maxlength="2000"></textarea>
        </div>
        <button type="submit" class="primary-btn btn-with-icon">
          Submit Application
          <span class="btn-icon" aria-hidden="true">
            <img src="assets/images/up-right.png" alt="" class="icon-default">
            <img src="assets/images/up-right-blue.png" alt="" class="icon-hover">
          </span>
        </button>
      </form>
    </section>

  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
