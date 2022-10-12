// Datum do pocetka Svetskog prvenstva
let WC2022_date = new Date("Nov 20, 2022 12:00:00").getTime();
let timer = document.getElementById("timer");

// Pozivanje funkcije prvi put da bi se odmah ispisao datum do pocetka prvenstva
let firstCountdown = (function () {
  // Trenutno vreme
  let now = new Date().getTime();

  // Razlika izmedju vremena do kog odbrojavamo i trenutnog vremena
  let distance = WC2022_date - now;
  // Ispis kada je odbrojavanje gotovo

  // Izracunavanje dana sati minuta i sekundi radi ispisivanja na stranicu
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Ispis podataka u element "timer"
  timer.innerHTML =
    days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  // Ispis ukoliko je prvenstvo pocelo
  if (distance < 0) {
    timer.innerHTML = "Svetsko Prvenstvo je u toku...";
    timer.style.fontSize = "1.2rem";
    timer.style.padding = "13px";
  }
})();

// Funkcija koja se poziva svake sekunde i automatski je pozvana kada se otvori stranica
// Self invoked function (function(){}());
let countdownWithInterval = setInterval(function () {
  // Trenutno vreme
  let now = new Date().getTime();

  // Razlika izmedju vremena do kog odbrojavamo i trenutnog vremena
  let distance = WC2022_date - now;
  // Ispis kada je odbrojavanje gotovo

  // Izracunavanje dana sati minuta i sekundi radi ispisivanja na stranicu
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Ispis podataka u element "timer"
  timer.innerHTML =
    days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  // Ispis ukoliko je prvenstvo pocelo i brisanje intervala za funkciju
  if (distance < 0) {
    clearInterval(countdownWithInterval);

    timer.innerHTML = "Svetsko Prvenstvo je u toku...";
    timer.style.fontSize = "1.2rem";
    timer.style.padding = "13px";
  }
}, 1000);
