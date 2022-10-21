// funkcija za dodavanje is-active klase ukoliko je url i href linka identican
// Prepisana funkcija sa weba
// $(function($) {
//     let url = window.location.href;
//     $('nav ul li a').each(function() {
//       if (this.href === url) {
//         $(this).closest('li').addClass('is-active');
//       }
//     });
//   });

// Nacin na koji sam uspeo da resim
  (function () {
    let url = window.location.href;
    let links = document.querySelectorAll('nav ul li a');
    links.forEach((link) => {
      if (link.href === url) {
        link.parentElement.classList.add('is-active');
        console.log(link.parentElement.classList);
      }
    });
  }());