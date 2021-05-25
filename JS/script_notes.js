$(document).ready(function(){
    
  
    $(".Footer button").on("click",function(){
       
        var myID = $(this).attr('id');
        
       $('.'+myID).fadeIn();
        
    });

    $(".close").on("click",function(){
       
        var btn_Close = $(this).attr("id");
        
        $('.'+btn_Close).fadeOut();
        
    });
   
    
    $(".Pop_up .Suppression").click(function(e){
       
        e.stopPropagation();
        
    });
    
    
    $(".Pop_up").click(function(){
       
        $(this).fadeOut();
        
    });
    
    
    
});
