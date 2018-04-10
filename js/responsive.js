console.log("Ce programme JS vient d'être chargé");
$(document).ready(function()
{
    console.log("Le document est prêt");
    

    
    
    function resizePage() {
        var Largeur = $(window).width();
	
        if (Largeur < 1024 && $("#date").length == 0) {

            $("<h5 id='date'>Depuis 2017</h5>").insertBefore(".dut>h4");
            $("<h5>2015</h5>").insertBefore(".bts>h4");
            $("<h5>2012</h5>").insertBefore(".bac>h4");
            $('h5').css({ margin: '0'})
            $("<hr>").insertBefore(".timeline-item-details-description>h4");

            

        }
        if (Largeur > 1024) {
            $("h5").remove();
            $(".timeline-item-details-description>hr").remove();
        }

        

	
    }
    
    $(window).resize(resizePage);
    resizePage(); // Appel de la fonction à l'affichage de la page
});
