<?php
// Expects $email, $currentPage, $navItems (from header.php) and
// $includeSplide (optional bool) to already be set/available.
?>
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
            <?php foreach ($navItems as $key => $label): ?>
              <li><a href="<?php echo koodo_nav_href($key, $currentPage); ?>"><?php echo $label; ?></a></li>
            <?php endforeach; ?>
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
  <?php if (!empty($includeSplide)): ?>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <?php endif; ?>
  <script src="assets/js/main.js"></script>
</body>

</html>
