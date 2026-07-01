<?php
$siteName = 'Koodo India';
$phone = '+91 00000 00000';
$email = 'info@koodoindia.com';
$address = 'Mumbai, India';

$pageTitle = 'Contact Us';
$metaDescription = 'Get in touch with Koodo India — reach our Mumbai headquarters or Pune office, or send us a message to start a conversation about your financial goals.';
$currentPage = 'contact';
$bodyClass = 'about-body';
$includeSplide = false;

include __DIR__ . '/includes/header.php';
?>

  <main class="contact-page about-page">

    <section id="home" class="about-hero">
      <span class="about-hero-eyebrow">Contact Us</span>
      <h1 class="about-hero-title">Let's Start a Conversation</h1>
      <p class="about-hero-text">Whether you're planning for the future or exploring new opportunities, our team is here to listen and guide you with clarity and discipline.</p>
      <div class="about-hero-media">
        <img src="assets/images/partnership.webp" alt="Koodo India team discussing with a client">
      </div>
    </section>

    <section id="contact-form" class="contact-form-section">
      <div class="section-head text-center">
        <span>Get In Touch</span>
        <h2>Tell Us About Your Goals</h2>
      </div>

      <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
        <div class="form-alert form-alert-success" role="status">Thank you — your message has been sent. We'll get back to you shortly.</div>
      <?php elseif (isset($_GET['sent']) && $_GET['sent'] === '0'): ?>
        <div class="form-alert form-alert-error" role="alert">Sorry, something went wrong while sending your message. Please try again or email us directly.</div>
      <?php endif; ?>

      <form class="site-form contact-form" action="send-contact.php" method="post" novalidate>
        <div class="form-row">
          <div class="form-field">
            <label for="cf-name">Name <span class="req">*</span></label>
            <input type="text" id="cf-name" name="name" placeholder="Your full name" minlength="2" maxlength="100" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="form-field">
            <label for="cf-phone">Phone <span class="req">*</span></label>
            <input type="tel" id="cf-phone" name="phone" placeholder="+91 00000 00000" pattern="^[0-9+\-\s()]{7,15}$" required>
            <div class="invalid-feedback">Please enter a valid phone number.</div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label for="cf-email">Email <span class="req">*</span></label>
            <input type="email" id="cf-email" name="email" placeholder="you@example.com" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
          </div>
          <div class="form-field">
            <label for="cf-location">Location</label>
            <input type="text" id="cf-location" name="location" placeholder="City, Country" maxlength="100">
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label for="cf-for-whom">For Whom <span class="req">*</span></label>
            <select id="cf-for-whom" name="for_whom" required>
              <option value="" disabled selected>Select an option</option>
              <option value="family">Family</option>
              <option value="business">Business</option>
              <option value="individual">Individual</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
          </div>
          <div class="form-field"></div>
        </div>
        <div class="form-field">
          <label for="cf-message">Message <span class="req">*</span></label>
          <textarea id="cf-message" name="message" rows="5" placeholder="Tell us a little about what you're looking for" minlength="10" maxlength="2000" required></textarea>
          <div class="invalid-feedback">Please enter a message of at least 10 characters.</div>
        </div>
        <button type="submit" class="primary-btn btn-with-icon">
          Send Message
          <span class="btn-icon" aria-hidden="true">
            <img src="assets/images/up-right.png" alt="" class="icon-default">
            <img src="assets/images/up-right-blue.png" alt="" class="icon-hover">
          </span>
        </button>
      </form>
    </section>

    <section id="headquarters" class="headquarters-section">
      <div class="section-head text-center">
        <span>Headquarters</span>
        <h2>Visit Our Office</h2>
      </div>
      <div class="headquarters-wrap">
        <div class="headquarters-details">
          <ul>
            <li><i class="fa-solid fa-location-dot"></i><span><?php echo $address; ?></span></li>
            <li><i class="fa-solid fa-phone"></i><a href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>"><?php echo $phone; ?></a></li>
            <li><i class="fa-solid fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
            <li><i class="fa-solid fa-clock"></i><span>Mon &ndash; Fri, 10:00 AM &ndash; 6:00 PM</span></li>
          </ul>
        </div>
        <div class="headquarters-map">
          <iframe src="https://www.google.com/maps?q=Mumbai,+Maharashtra,+India&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Koodo India Headquarters Map"></iframe>
        </div>
      </div>
    </section>

    <?php
    $presence = [
      ['city' => 'Mumbai', 'tag' => 'Headquarters', 'address' => 'Mumbai, Maharashtra, India', 'image' => 'assets/images/about-building.jpg'],
      ['city' => 'Pune', 'tag' => 'Branch Office', 'address' => 'Pune, Maharashtra, India', 'image' => 'assets/images/services-why-us.png'],
    ];
    ?>
    <section id="presence" class="presence-section">
      <div class="section-head text-center">
        <span>Our Presence</span>
        <h2>Where To Find Us</h2>
      </div>
      <div class="presence-grid">
        <?php foreach ($presence as $loc): ?>
          <div class="presence-card">
            <img src="<?php echo $loc['image']; ?>" alt="<?php echo $loc['city']; ?> office">
            <div class="presence-card-body">
              <span class="presence-tag"><?php echo $loc['tag']; ?></span>
              <h3><?php echo $loc['city']; ?></h3>
              <p><?php echo $loc['address']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
