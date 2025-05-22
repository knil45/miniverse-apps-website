<?php
include '../php/set_language.php';
$page = "sudoku-classic";
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
  <?php include '../php/head.meta.php'; ?>
</head>

<body class="is-preload">
  <!-- Navbar -->
  <?php include '../php/navbar.php'; ?>

  <!-- Header -->
  <section id="header">
    <div class="inner">
      <span class="icon solid major"></span>
      <p>
        <img id="header-icon" src="/images/sudoku-image.png" alt="">
      </p>
      <h1>Sudoku Classic</h1>
      <p>
        <?php echo $translations[$page]['header']['description']; ?>
      </p>
    </div>
  </section>

  <!-- Description -->
  <section id="five" class="main style1">
    <div class="container">
      <section>
        <p>
          <?php echo $translations[$page]['description']; ?>
        </p>
        <br>
        <ul class="actions">
          <li>
            <a
              href="https://play.google.com/store/apps/details?id=com.miniverseapps.sudoku"
              class="button primary">
              <?php echo $translations['generic']['download-google-play']; ?>
            </a>
          </li>
          <li>
            <a href="/sudoku-classic/privacy.php" class="button">
              <?php echo $translations['generic']['privacy-policy']; ?>
            </a>
          </li>
        </ul>
        <br>
        <ul class="icons">
          <li>
            <span>
              <svg class="technology-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Unity</title>
                <path d="m12.9288 4.2939 3.7997 2.1929c.1366.077.1415.2905 0 .3675l-4.515 2.6076a.4192.4192 0 0 1-.4246 0L7.274 6.8543c-.139-.0745-.1415-.293 0-.3675l3.7972-2.193V0L1.3758 5.5977V16.793l3.7177-2.1456v-4.3858c-.0025-.1565.1813-.2682.318-.1838l4.5148 2.6076a.4252.4252 0 0 1 .2136.3676v5.2127c.0025.1565-.1813.2682-.3179.1838l-3.7996-2.1929-3.7178 2.1457L12 24l9.6954-5.5977-3.7178-2.1457-3.7996 2.1929c-.1341.082-.3229-.0248-.3179-.1838V13.053c0-.1565.087-.2956.2136-.3676l4.5149-2.6076c.134-.082.3228.0224.3179.1838v4.3858l3.7177 2.1456V5.5977L12.9288 0Z" />
              </svg>
            </span>
            <span>
              <img class="technology-icon" src="/images/technologies/c-sharp.png">
            </span>
          </li>
        </ul>
      </section>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../php/footer.php'; ?>

  <!-- Scripts -->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery.scrolly.min.js"></script>
  <script src="/assets/js/browser.min.js"></script>
  <script src="/assets/js/breakpoints.min.js"></script>
  <script src="/assets/js/util.js"></script>
  <script src="/assets/js/main.js"></script>
</body>

</html>