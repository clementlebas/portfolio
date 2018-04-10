
	$(document).ready(function () {

		//DEREOULEMENT
        $('.nav, .verscontact').on('click', function () { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
			return false;
		})
    
		//BARRE NAV TOP
		window.onscroll = function () {
			var scroll = (document.documentElement.scrollTop ||
				document.body.scrollTop);
			if (scroll > 50)
				document.getElementById('nav-fixe').style.top = scroll + 'px';
		}

	});