<!-- head sa stilovima koji su zajednicki -->
<?php
include 'includes/inc.head.php';
?>
<link rel="stylesheet" href="css/spisakReprezentacija.css">

<title>Spisak Reprezentacija</title>
</head>

<body>
  <!-- Navigacija -->
  <?php
  include 'includes/inc.navigacija.php';
  ?>
  <!-- niz sa spiskom reprezentacija -->
  <?php
  include 'includes/inc.spisakReprezentacijaArray.php';
  ?>


  <div id="spisakReprezentacija">
    <?php

    // petlja za ispisivanje diva sa podacima iz niza reprezentacija
    foreach ($reprezentacije as $reprezentacija) {
      echo '<div class="reprezentacija">
            <img src="' . $reprezentacija[3] . '" alt="' . $reprezentacija[0] . '">
            <h2>' . $reprezentacija[0] . '</h2>
            <p>Head coach: <b>' . $reprezentacija[1] . '</b></p>
            <p>Captain: <b>' . $reprezentacija[2] . '</b></p>
            </div>';
    }
    ?>

  </div>



  <!-- FOOTER -->
  <?php
  include 'includes/inc.footer.php';
  ?>


</body>

</html>