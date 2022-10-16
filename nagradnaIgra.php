<!-- head sa stilovima koji su zajednicki -->
<?php
include 'includes/inc.head.php';
?>
<link rel="stylesheet" href="css/nagradnaIgra.css">
<title>Nagradna igra</title>
</head>

<body>
  <?php
  include 'includes/inc.navigacija.php';
  ?>

  <div id="nagradnaIgra">

    <form action="" method="post">
      <label for="username">Korisničko ime</label>
      <input type="text" name="username" id="username">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <p>Koje reprezentacije će biti prve u svojoj grupi?</p>


      <div class="radioContainer">
        <label for="grupaA">Grupa A:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaA" id="Qatar" value="Qatar">
          <label for="Qatar">Qatar</label>
          <input type="radio" name="grupaA" id="Ecuador" value="Ecuador">
          <label for="Ecuador">Ecuador</label>
          <input type="radio" name="grupaA" id="Senegal" value="Senegal">
          <label for="Senegal">Senegal</label>
          <input type="radio" name="grupaA" id="Netherlands" value="Netherlands">
          <label for="Netherlands">Netherlands</label>
        </div>
        <label for="grupaB">Grupa B:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaB" id="England" value="England">
          <label for="England">England</label>
          <input type="radio" name="grupaB" id="Iran" value="Iran">
          <label for="Iran">Iran</label>
          <input type="radio" name="grupaB" id="USA" value="USA">
          <label for="USA">USA</label>
          <input type="radio" name="grupaB" id="Wales" value="Wales">
          <label for="Wales">Wales</label>
        </div>
        <label for="grupaC">Grupa C:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaC" id="Argentina" value="Argentina">
          <label for="Argentina">Argentina</label>
          <input type="radio" name="grupaC" id="Saudi_Arabia" value="Saudi_Arabia">
          <label for="Saudi_Arabia">Saudi_Arabia</label>
          <input type="radio" name="grupaC" id="Mexico" value="Mexico">
          <label for="Mexico">Mexico</label>
          <input type="radio" name="grupaC" id="Poland" value="Poland">
          <label for="Poland">Poland</label>
        </div>
        <label for="grupaD">Grupa D:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaD" id="France" value="France">
          <label for="France">France</label>
          <input type="radio" name="grupaD" id="Australia" value="Australia">
          <label for="Australia">Australia</label>
          <input type="radio" name="grupaD" id="Denmark" value="Denmark">
          <label for="Denmark">Denmark</label>
          <input type="radio" name="grupaD" id="Tunisia" value="Tunisia">
          <label for="Tunisia">Tunisia</label>
        </div>
        <label for="grupaE">Grupa E:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaE" id="Spain" value="Spain">
          <label for="Spain">Spain</label>
          <input type="radio" name="grupaE" id="Costa_Rica" value="Costa_Rica">
          <label for="Costa_Rica">Costa_Rica</label>
          <input type="radio" name="grupaE" id="Germany" value="Germany">
          <label for="Germany">Germany</label>
          <input type="radio" name="grupaE" id="Japan" value="Japan">
          <label for="Japan">Japan</label>
        </div>
        <label for="grupaF">Grupa F:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaF" id="Belgium" value="Belgium">
          <label for="Belgium">Belgium</label>
          <input type="radio" name="grupaF" id="Canada" value="Canada">
          <label for="Canada">Canada</label>
          <input type="radio" name="grupaF" id="Morocco" value="Morocco">
          <label for="Morocco">Morocco</label>
          <input type="radio" name="grupaF" id="Croatia" value="Croatia">
          <label for="Croatia">Croatia</label>
        </div>
        <label for="grupaG">Grupa G:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaG" id="Brazil" value="Brazil">
          <label for="Brazil">Brazil</label>
          <input type="radio" name="grupaG" id="Serbia" value="Serbia">
          <label for="Serbia">Serbia</label>
          <input type="radio" name="grupaG" id="Switzerland" value="Switzerland">
          <label for="Switzerland">Switzerland</label>
          <input type="radio" name="grupaG" id="Cameroon" value="Cameroon">
          <label for="Cameroon">Cameroon</label>
        </div>
        <label for="grupaH">Grupa H:</label>
        <div class="radioGrupe">
          <input type="radio" name="grupaH" id="Portugal" value="Portugal">
          <label for="Portugal">Portugal</label>
          <input type="radio" name="grupaH" id="Ghana" value="Ghana">
          <label for="Ghana">Ghana</label>
          <input type="radio" name="grupaH" id="Uruguay" value="Uruguay">
          <label for="Uruguay">Uruguay</label>
          <input type="radio" name="grupaH" id="South_Korea" value="South_Korea">
          <label for="South_Korea">South_Korea</label>
        </div>

      </div>
      <hr>




      <button type="submit">Posalji...</button>
    </form>


    <!-- FOOTER -->
    <?php
    include 'includes/inc.footer.php';
    ?>

    <script>
      let grupaA = document.getElementsByName("grupaA");
      console.log(grupaA[0].value);
    </script>
</body>

</html>