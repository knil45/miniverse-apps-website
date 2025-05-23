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
              <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Unity</title>
                <path d="m12.9288 4.2939 3.7997 2.1929c.1366.077.1415.2905 0 .3675l-4.515 2.6076a.4192.4192 0 0 1-.4246 0L7.274 6.8543c-.139-.0745-.1415-.293 0-.3675l3.7972-2.193V0L1.3758 5.5977V16.793l3.7177-2.1456v-4.3858c-.0025-.1565.1813-.2682.318-.1838l4.5148 2.6076a.4252.4252 0 0 1 .2136.3676v5.2127c.0025.1565-.1813.2682-.3179.1838l-3.7996-2.1929-3.7178 2.1457L12 24l9.6954-5.5977-3.7178-2.1457-3.7996 2.1929c-.1341.082-.3229-.0248-.3179-.1838V13.053c0-.1565.087-.2956.2136-.3676l4.5149-2.6076c.134-.082.3228.0224.3179.1838v4.3858l3.7177 2.1456V5.5977L12.9288 0Z" />
              </svg>
            </span>
            <span>
              <img title="C#" src="/images/technologies/c-sharp.png">
            </span>
            <span>
              <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Google Play</title>
                <path d="M22.018 13.298l-3.919 2.218-3.515-3.493 3.543-3.521 3.891 2.202a1.49 1.49 0 0 1 0 2.594zM1.337.924a1.486 1.486 0 0 0-.112.568v21.017c0 .217.045.419.124.6l11.155-11.087L1.337.924zm12.207 10.065l3.258-3.238L3.45.195a1.466 1.466 0 0 0-.946-.179l11.04 10.973zm0 2.067l-11 10.933c.298.036.612-.016.906-.183l13.324-7.54-3.23-3.21z" />
              </svg>
            </span>
            <span>
              <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Android</title>
                <path d="M18.4395 5.5586c-.675 1.1664-1.352 2.3318-2.0274 3.498-.0366-.0155-.0742-.0286-.1113-.043-1.8249-.6957-3.484-.8-4.42-.787-1.8551.0185-3.3544.4643-4.2597.8203-.084-.1494-1.7526-3.021-2.0215-3.4864a1.1451 1.1451 0 0 0-.1406-.1914c-.3312-.364-.9054-.4859-1.379-.203-.475.282-.7136.9361-.3886 1.5019 1.9466 3.3696-.0966-.2158 1.9473 3.3593.0172.031-.4946.2642-1.3926 1.0177C2.8987 12.176.452 14.772 0 18.9902h24c-.119-1.1108-.3686-2.099-.7461-3.0683-.7438-1.9118-1.8435-3.2928-2.7402-4.1836a12.1048 12.1048 0 0 0-2.1309-1.6875c.6594-1.122 1.312-2.2559 1.9649-3.3848.2077-.3615.1886-.7956-.0079-1.1191a1.1001 1.1001 0 0 0-.8515-.5332c-.5225-.0536-.9392.3128-1.0488.5449zm-.0391 8.461c.3944.5926.324 1.3306-.1563 1.6503-.4799.3197-1.188.0985-1.582-.4941-.3944-.5927-.324-1.3307.1563-1.6504.4727-.315 1.1812-.1086 1.582.4941zM7.207 13.5273c.4803.3197.5506 1.0577.1563 1.6504-.394.5926-1.1038.8138-1.584.4941-.48-.3197-.5503-1.0577-.1563-1.6504.4008-.6021 1.1087-.8106 1.584-.4941z" />
              </svg>
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