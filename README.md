# QatarWC2022
Web stranica za prikaz informacija o Svetskom prvenstvu 2022 u Kataru. 
Na pocetnoj stranici su informacije, tj odbrojavanje do pocetka prvenstva i raspored utakmica od grupne faze do finala i informacija na kom stadionu se igra.
U tabeli gde je raspored utakmica moguce je kliknuti na link (slika stadiona ili ime) i link vodi do osnovnih informacija o stadionu na stranici Stadioni.php.
Na stranici Stadioni su informacija o svim stadionima zajedno sa slikama stadiona.
Sledeca stranica je "Spisak reprezentacija". Tu su najosnovnije informacije, ime,slika, ime trenera i kapitena reprezentacije.
Nakon toga je stranica "Grupe" koja sadrzi informacije o grupama na prvenstvu.
Poslednja stranica je "Nagradna igra" sa nekoliko input polja. Potrebno je uneti validan email i ime i odabrati iz svake grupe po jednu reprezentaciju da bi se forma poslala. 



JavaScript:
  -tajmer za odbrojavanje
  -na pocetnoj stranici klikom na dugme se otvara div sa informacijama o utakmici menjanjem "display" atributa za taj element
  -dodavanje klase "active" na navigacione linkove
  -postavljanje required atributa na sve radio inpute
  
PHP :
  - Navigacija i footer i deo head taga su isti na svim stranicama pa su napravljeni kao posebni fajlovi  i preko "include" ubaceni na sve stranice.
  - Na stranici spisak reprezentacija je preko petlje foreach ispisan html za sve reprezentacije sa informacijama iz niza koji se nalazi u "includes" folderu.

Svi fajlovi su podeljeni u foldere, svaka stranica ima poseban css, stranica tabele je podeljena u par manjih fajlova i spojena u glavnom fajlu index.php.
