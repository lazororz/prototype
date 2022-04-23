$(document).ready(function () {
    //console.log('dsdsd');

    $( "form" ).submit(function (e) { 
        e.preventDefault();

        var message = $('#message').val();
        
        $.post("../php/add.php",{message, id:"<?php echo $token;?>" } )  
        .done(function(message){
            alert('toegevoegd!');
        });
    }); 
     
    
});