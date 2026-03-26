<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Edwin Nord — Front-End Web Developer specialising in HTML5, CSS, JavaScript, React, and WordPress. Based in Canada.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- MOBILE NAV OVERLAY -->
<nav class="nav-mobile" id="nav-mobile" aria-label="Mobile navigation">
  <button class="nav-hamburger open" id="nav-close" aria-label="Close menu">
    <span></span><span></span><span></span>
  </button>
  <a href="#about"    class="mobile-link" onclick="closeMobileNav()">About</a>
  <a href="#services" class="mobile-link" onclick="closeMobileNav()">Services</a>
  <a href="#skills"   class="mobile-link" onclick="closeMobileNav()">Skills</a>
  <a href="#projects" class="mobile-link" onclick="closeMobileNav()">Projects</a>
  <a href="#contact"  class="mobile-link" onclick="closeMobileNav()">Contact</a>
</nav>

<!-- MAIN NAV -->
<nav id="site-nav" aria-label="Primary navigation">
  <div class="nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
      Edwin Nord<span>&nbsp;/</span>
    </a>

    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="https://www.linkedin.com/in/edwin-nord/" target="_blank" rel="noopener">LinkedIn</a></li>
      <li><a href="https://github.com/enorddev" target="_blank" rel="noopener">GitHub</a></li>
      <li><a href="#contact" class="nav-cta">Hire Me</a></li>
    </ul>

    <button class="nav-hamburger" id="nav-open" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>
