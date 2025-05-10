<?php
include '../php/set_language.php';
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
  <link rel="stylesheet" href="/assets/css/main.css" />
  <noscript>
    <link rel="stylesheet" href="/assets/css/noscript.css" />
  </noscript>
</head>

<body class="is-preload">
  <!-- Header -->
  <section id="header">
    <div class="inner">
      <span class="icon solid major"></span>
      <h1>Sudoku Classic</h1>
      <p>
        <?php echo $translations['sudoku-classic']['header']['description']; ?>
      </p>
    </div>
  </section>

  <!-- Five -->
  <section id="five" class="main style1">
    <div class="container">
      <section>
        <p>
          <?php echo $translations['sudoku-classic']['description']; ?>
        </p>
        <ul class="actions">
          <li>
            <a
              href="https://play.google.com/store/apps/details?id=com.miniverseapps.sudoku"
              class="button primary">
              <?php echo $translations['generic']['download-google-play']; ?>
            </a>
          </li>
        </ul>
        <ul class="actions">
          <li>
            <a href="/sudoku-classic/privacy.php" class="button">
              <?php echo $translations['generic']['privacy-policy']; ?>
            </a>
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