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

      <!-- GRUPNA FAZA TABELA -->
      <div class="rasporedMain" id="grupnaFaza">
        <button class="collapseDugme">
          <span>GRUPNA FAZA</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20 Novembar</td>
                <td>19:00</td>
                <td>Qatar</td>
                <td><img class="zastavaImg" src="img/zastave/qatar.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/ecuador.png" alt=""></td>
                <td>Ecuador</td>
                <td>
                  <a href="stadioni.php#alBayt" target="_blank">
                    <p>Al Bayt stadion</p> 
                    <img class="stadionImg" src="img/stadium/al-bayt-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <td>21 Novembar</td>
                <td>16:00</td>
                <td>England</td>
                <td><img class="zastavaImg" src="img/zastave/england.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/iran.png" alt=""></td>
                <td>Iran</td>
                <td>
                  <a href="stadioni.php#khalifaInternational" target="_blank">
                  <p>Khalifa International stadion</p>
                    <img class="stadionImg" src="img/stadium/khalifa-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumama" target="_blank">
                  <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
              <tr>
                <td>21 Novembar</td>
                <td>22:00</td>
                <td>USA</td>
                <td><img class="zastavaImg" src="img/zastave/united-states.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/wales.png" alt=""></td>
                <td>Wales</td>
                <td>
                  <a href="stadioni.php#ahmadBinAli" target="_blank">
                  <p>Ahmad Bin Ali stadion</p>
                    <img class="stadionImg" src="img/stadium/ahmad-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- TOP16 TABELA-->
      <div class="rasporedMain" id="top16">
        <button class="collapseDugme">
          <span>TOP16</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumana" target="_blank">
                    <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- CETVRTFINALE TABELA -->
      <div class="rasporedMain" id="cetvrtinaFinala">
        <button class="collapseDugme">
          <span>ČETVRTFINALE</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumana" target="_blank">
                  <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- POLUFINALE TABELA -->
      <div class="rasporedMain" class="rasporedMain" id="polufinale">
        <button class="collapseDugme">
          <span>POLUFINALE</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumana" target="_blank">
                  <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- TRECE MESTO TABELA -->
      <div class="rasporedMain" id="treceMesto">
        <button class="collapseDugme">
          <span>TRECE MESTO</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumana" target="_blank">
                  <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- FINALE TABELA -->
      <div class="rasporedMain" id="finale">
        <button class="collapseDugme">
          <span>FINALE</span>
          <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <div class="collapseDiv">
          <table class="rasporedUtakmicaTabela">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Vreme</th>
                <th colspan="2">Domaćin</th>
                <th colspan="2">Gost</th>
                <th>Stadion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>21 Novembar</td>
                <td>19:00</td>
                <td>Senegal</td>
                <td><img class="zastavaImg" src="img/zastave/senegal.png" alt=""></td>
                <td><img class="zastavaImg" src="img/zastave/netherlands.png" alt=""></td>
                <td>Netherlands</td>
                <td>
                  <a href="stadioni.php#alThumana" target="_blank">
                  <p>Al Thumama stadion</p>
                    <img class="stadionImg" src="img/stadium/al-thumana-transparent.webp" alt="">
                  </a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </section>

  </main>

  <!-- FOOTER -->
  <?php
  include 'includes/inc.footer.php';
  ?>

  <script src="js/scriptPocetna.js"></script>
</body>

</html>