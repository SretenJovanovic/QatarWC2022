<?php

    
    $reprezentacije = array(
      array("Qatar", "Félix Sánchez", "Hassan Al-Haydos", "img/zastave/qatar.png"),
      array("Ecuador", "Gustavo Alfaro", "Enner Valencia", "img/zastave/ecuador.png"),
      array("Senegal", "Aliou Cissé", "Kalidou Koulibaly", "img/zastave/senegal.png"),
      array("Netherlands", "Louis van Gaal", "Virgil van Dijk", "img/zastave/netherlands.png"),
      array("England", "Gareth Southgate", "Harry Kane", "img/zastave/england.png"),
      array("Iran", "Carlos Queiroz", "Ehsan Hajsafi", "img/zastave/iran.png"),
      array("USA", "Gregg Berhalter", "Christian Pulisic", "img/zastave/usa.png"),
      array("Wales", "Rob Page", "Gareth Bale", "img/zastave/wales.png"),
      array("Argentina", "Lionel Scaloni", "Lionel Messi", "img/zastave/argentina.png"),
      array("Saudi_Arabia", "Hervé Renard", "Salman Al-Faraj", "img/zastave/saudi-arabia.png"),
      array("Mexico", "Gerardo Martino", "Andrés Guardado", "img/zastave/mexico.png"),
      array("Poland", "Czesław Michniewicz", "Robert Lewandowski", "img/zastave/poland.png"),
      array("France", "Didier Deschamps", "Hugo Lloris", "img/zastave/france.png"),
      array("Australia", "Graham Arnold", "Mathew Ryan", "img/zastave/australia.png"),
      array("Denmark", "Kasper Hjulmand", "Simon Kjær", "img/zastave/denmark.png"),
      array("Tunisia", "Jalel Kadri", "Youssef Msakni", "img/zastave/tunisia.png"),
      array("Spain", "Luis Enrique", "Sergio Busquets", "img/zastave/spain.png"),
      array("Costa_Rica", "Luis Fernando Suárez", "Bryan Ruiz", "img/zastave/costa-rica.png"),
      array("Germany", "Hansi Flick", "Manuel Neuer", "img/zastave/germany.png"),
      array("Japan", "Hajime Moriyasu", "Maya Yoshida", "img/zastave/japan.png"),
      array("Belgium", "Roberto Martínez", "Eden Hazard", "img/zastave/belgium.png"),
      array("Canada", "John Herdman", "Atiba Hutchinson", "img/zastave/canada.png"),
      array("Morocco", "Walid Regragui", "Romain Saïss", "img/zastave/morocco.png"),
      array("Croatia", "Zlatko Dalić", "Luka Modrić", "img/zastave/croatia.png"),
      array("Brazil", "Tite", "Thiago Silva", "img/zastave/brazil.png"),
      array("Serbia", "Dragan Stojković", "Dušan Tadić", "img/zastave/serbia.png"),
      array("Switzerland", "Murat Yakin", "Granit Xhaka", "img/zastave/switzerland.png"),
      array("Cameroon", "Rigobert Song", "Vincent Aboubakar", "img/zastave/cameroon.png"),
      array("Portugal", "Fernando Santos", "Cristiano Ronaldo", "img/zastave/portugal.png"),
      array("Ghana", "Otto Addo", "André Ayew", "img/zastave/ghana.png"),
      array("Uruguay", "Diego Alonso", "Diego Godín", "img/zastave/uruguay.png"),
      array("South_Korea", "Paulo Bento", "Son Heung-min", "img/zastave/south-korea.png")
      
    );

    // Pravljenje varijabli sa nazivom $reprezentacija pa nulti element iz niza, npr reprezentacijaQatar
    foreach ($reprezentacije as $reprezentacija) {
      ${'reprezentacija' . $reprezentacija[0]} = [];
      ${'reprezentacija' . $reprezentacija[0]} = $reprezentacija;
  };

    
    ?>