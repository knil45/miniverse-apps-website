<?php
include '../php/set_language.php';
$page = "alabanza-facil";
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
      <h1>Alabanza Fácil</h1>
      <p>
        <?php echo $translations[$page]['header']['description']; ?>
      </p>
    </div>
  </section>

  <!-- Five -->
  <section id="five" class="main style1">
    <div class="container">
      <section>
        <p>
          <?php echo $translations[$page]['description']; ?>
        </p>
        <p>
        <h5>Languages</h5>
        <blockquote>
          C#
        </blockquote>
        </p>
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