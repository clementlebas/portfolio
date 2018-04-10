$(document).ready(function () {
        
    $('.popup-projet').mousedown(function (event)  {
        
        console.log("Clique sur un projet");
        $('.popup').val() === 'montrer';
        var projet=$(this); //projet cliké
        var id="popup-"+projet.attr('data-popup'); //creation id du popup-projet choisi
        var popup=$('#'+id); // popup= popup-c
        console.log("le popup selectionné est:", id);

        var pos=projet.offset(); //gere la position du popup
        console.log(pos);
        
        pos.top-=popup.outerHeight()+20; //decalage verticale popup 
        pos.left -= popup.outerWidth()-250;

        popup.fadeIn();
        popup.offset(pos);
        
        
        // IF CLICK CLOSE
        $('.popup>.fermer').mousedown(function () {
            console.log("Clique sur X, fermeture popup ");
            $(this).parent().fadeOut();
            
        });
        // IF CLICK BODY
        $('body').click(function (e) {
            if ($(e.target).attr('id') != id)
                popup.fadeOut();
            else
            popup.fadeIn();
        });

        //IF WIDTH CHANGE
        var lastWidth = $(window).width();
        $(window).resize(function () {
            if ($(window).width() != lastWidth) {
                //execute code here.
                lastWidth = $(window).width();
                popup.fadeOut();

            }
            else
                popup.fadeIn();

        })  

        // Prevent events from getting pass .popup
       

    // If an event gets to the body
    
        
   
   
        
    // If an event gets to the body
    

    
	/*$('body').click(function (event){
		$('.popup').hide();
    });*/

        
}); 
        

    
    

});
