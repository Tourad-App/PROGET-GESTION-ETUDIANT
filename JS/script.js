$(document).ready(function(){    
    
    
   $(".seconde").on('click',function(){
      
       
    var myId = $(this).attr('id');
              
              $("." + myId).fadeIn();
       
   });
    
    
    
    
    
    
    $(".Modification").on('click',function(){
       
        var myID = $(this).attr('id');
        
        $("." + myID).fadeIn();
        
    });
    
    
    
    
    $(".Pop_up").click(function(){
       
        $(this).fadeOut();
        
    });
    
    
    
    
    
    
    
   
    $(".Pop_up .Suppression").click(function(e){
       
        e.stopPropagation();
        
    });
    
    $("button.close").on('click',function(){
       
        $(".Pop_up").fadeOut(); 
        
    });
    
    
    $(".form_Update").click(function(e){
       
        e.stopPropagation();
        
    });
    
    
    $(".Actions").click(function(e){
    
    e.preventDefault();
    
    
    e.stopPropagation();
    
   var myAff = $(this).attr("id");
    
    $(".Pop_up").hide();
    
    $("." + myAff).fadeIn();

    });
    
    
    $("body").on("click",function(){
      
        $(".form_Update").fadeOut();
        
    });

   
});












