<?php
include 'php/set_language.php';
?>
<!DOCTYPE html>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
  <title>Miniverse Apps</title>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/navbar.css" />
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
  </noscript>
</head>

<body class="is-preload">
  <!-- Navbar -->
  <?php include 'php/navbar.php'; ?>

  <!-- Header -->
  <section id="header">
    <div class="inner">
      <span class="icon solid major"></span>
      <h1>Miniverse Apps</h1>
      <p>
        <?php echo $translations['index']['header']['description']; ?>
      </p>
      <ul class="actions special">
        <li><a href="#one" class="button scrolly"><?php echo $translations['index']['about-me']['title']; ?></a></li>
      </ul>
    </div>
  </section>

  <!-- One -->
  <section id="one" class="main style1">
    <div class="container">
      <div class="row gtr-150">
        <div class="col-6 col-12-medium">
          <header class="major">
            <h2><?php echo $translations['index']['about-me']['title']; ?></h2>
          </header>
          <p>
            <?php echo $translations['index']['about-me']['description'][0]; ?>
          </p>
          <p>
            <?php echo $translations['index']['about-me']['description'][1]; ?>
          </p>
          <p>
            <?php echo $translations['index']['about-me']['description'][2]; ?>
          </p>
        </div>
        <div class="col-6 col-12-medium imp-medium">
          <span id="banner" class="image fit"><img src="images/me.jpg" alt="" /></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Four -->
  <section id="four" class="main style2 special">
    <div class="container">
      <ul class="actions special">
        <li><a href="#contact" class="button wide scrolly">
            <?php echo $translations['generic']['contact']; ?>
          </a></li>
      </ul>
    </div>
  </section>

  <!-- Three -->
  <section id="three" class="main style1 special">
    <div class="container">
      <h2>
        <?php echo $translations['index']['my-projects']['title']; ?>
      </h2>
      <br /><br />
      <div class="row gtr-150">
        <div class="col-4 col-12-medium">
          <span id="apps" class="image fit"><img src="/images/nova-ai-icon-512x512.png" alt="" /></span>
          <h3>Nova AI</h3>
          <p>
            <?php echo $translations['index']['my-projects']['nova-ai']['description']; ?>
          </p>
          <ul class="actions special">
            <li>
              <a href="https://novaai.es" class="button">
                <?php echo $translations['generic']['discover-more']; ?>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-4 col-12-medium">
          <span id="apps" class="image fit"><img src="/images/sudoku-image.png" alt="" /></span>
          <h3>Sudoku Classic</h3>
          <p>
            <?php echo $translations['index']['my-projects']['sudoku-classic']['description']; ?>
          </p>
          <ul class="actions special">
            <a href="/sudoku-classic" class="button">
              <?php echo $translations['generic']['discover-more']; ?>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Two -->
  <section id="two" class="main style2">
    <div class="container">
      <div class="row gtr-150">
        <div class="col-6 col-12-medium">
          <ul class="major-icons">
            <li><span class="icon solid style1 major fa-code"></span></li>
            <li><span class="icon solid style2 major fa-bolt"></span></li>
            <li><span class="icon solid style4 major fa-cog"></span></li>
            <li><span class="icon solid style5 major fa-desktop"></span></li>
          </ul>
        </div>
        <div class="col-6 col-12-medium">
          <header class="major">
            <h2>
              <?php echo $translations['index']['my-values']['title']; ?>
            </h2>
          </header>
          <p>
            <?php echo $translations['index']['my-values']['description'][0]; ?>
          </p>
          <p>
            <?php echo $translations['index']['my-values']['description'][1]; ?>
          </p>
          <p>
            <?php echo $translations['index']['my-values']['description'][2]; ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'php/footer.php'; ?>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.scrolly.min.js"></script>
  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>