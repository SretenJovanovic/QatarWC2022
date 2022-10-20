<!-- head sa stilovima koji su zajednicki -->
<?php
include 'includes/inc.head.php';
?>


<!-- Stil za pocetnu stranicu -->
<link rel="stylesheet" href="css/pocetnaStranica.css" />
<!-- Title u tabu -->
<title>Svetsko prvenstvo 2022</title>
</head>

<body>

  <!-- Spisak Reprezentacija niz -->
  <?php
  include 'includes/inc.spisakReprezentacijaArray.php';
  ?>
  <!-- NAVIGACIJA -->
  <?php
  include 'includes/inc.navigacija.php';
  ?>

  <!-- MAIN -->
  <main>

    <!-- SECTION COUNTDOWN -->
    <section id="sectionCountdown">
      <div id="countdownImg">
        <img src="img/qatarWC2022.jpg" alt="qatarWC" />
      </div>
      <div id="countdownDiv">
        <h1>World Cup 2022 Qatar</h1>
        <sup>November 20 - December 18, 2022</sup>
        <h3 id="timer"></h3>
      </div>
    </section>



    <!-- SECTION RASPORED UTAKMICA -->
    <section id="rasporedUtakmica">


      <!-- TEBELA -->
      <?php
      include 'includes/tabela/inc.tabelaGrupa.php';
      include 'includes/tabela/inc.tabelaTop16.php';
      include 'includes/tabela/inc.tabelaCetvrtfinale.php';
      include 'includes/tabela/inc.tabelaPolufinale.php';
      include 'includes/tabela/inc.tabelaFinale.php';
      ?>


    </section>

  </main>

  <!-- FOOTER sa jquery cdn i skriptama koje se koriste na svim stranicama-->
  <?php
  include 'includes/inc.footer.php';
  ?>

  <script src="js/scriptPocetna.js"></script>
</body>

</html>