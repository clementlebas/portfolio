$(document).ready(function () {
        
    $('.popup-projet').mouseover(function (event)  {
        
        console.log("Clique sur un projet");
        $('.popup').val() === 'montrer';
        var projet=$(this); //projet cliké
        var id="popup-"+projet.attr('data-popup'); //creation id du popup-projet choisi
        var popup=$('#'+id); // popup= popup-c
        console.log("le popup selectionné est:", id);

        var pos=projet.offset(); //gere la position du popup
        console.log(pos);
        
        pos.top-=popup.outerHeight()+30; //decalage verticale popup 
        pos.left -= popup.outerWidth()-250;

        popup.fadeIn();
        popup.offset(pos);
        
        
        $('.popup-projet').mouseleave(function (event)  {
                popup.fadeOut();

        })  

        // Prevent events from getting pass .popup
       

    // If an event gets to the body
    
        
   
   
        
    // If an event gets to the body
    

    
	/*$('body').click(function (event){
		$('.popup').hide();
    });*/

        
}); 
        

    
    

});
