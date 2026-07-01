<?php
// Expects the following variables to be set before including this file:
// $siteName, $pageTitle, $metaDescription, $currentPage ('home' | 'about'),
// $bodyClass (optional), $includeSplide (optional bool)

$navItems = [
  'home' => 'Home',
  'services' => 'Services',
  'about-us' => 'About Us',
  'career' => 'Career',
  'contact' => 'Contact Us',
];

function koodo_nav_href($key, $currentPage)
{
  if ($key === 'home') {
    return $currentPage === 'home' ? '#home' : 'index.php#home';
  }
  if ($key === 'about-us') {
    return 'about-us.php';
  }
  if ($key === 'services') {
    return 'services.php';
  }
  if ($key === 'career') {
    return 'career.php';
  }
  if ($key === 'contact') {
    return 'contact.php';
  }
  return 'index.php#' . $key;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $siteName; ?> - <?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $metaDescription; ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php if (!empty($includeSplide)): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <?php endif; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body<?php echo !empty($bodyClass) ? ' class="' . $bodyClass . '"' : ''; ?>>

  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top koodo-navbar">
      <div class="container-fluid page-pad">
        <a class="navbar-brand" href="<?php echo koodo_nav_href('home', $currentPage); ?>" aria-label="Koodo India">
          <img src="assets/images/logo.png" alt="Koodo Logo" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMenu"
          aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="mainMenu" aria-labelledby="mainMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mainMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#mainMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav align-items-lg-center gap-lg-4 justify-content-lg-end flex-grow-1">
              <?php foreach ($navItems as $key => $label): ?>
                <?php $isActive = $currentPage !== 'home' && ($key === $currentPage || ($currentPage === 'about' && $key === 'about-us')); ?>
                <li class="nav-item">
                  <a class="nav-link<?php echo $isActive ? ' active' : ''; ?>"<?php echo $isActive ? ' aria-current="page"' : ''; ?> href="<?php echo koodo_nav_href($key, $currentPage); ?>"><?php echo $label; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
