// funkcija za dodavanje is-active klase ukoliko je url i href linka identican
$(function($) {
    let url = window.location.href;
    $('nav ul li a').each(function() {
      if (this.href === url) {
        $(this).closest('li').addClass('is-active');
      }
    });
  });