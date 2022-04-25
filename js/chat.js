$(document).ready(function () {
    //console.log('dsdsd');

    $("form").submit(function (e) {
        e.preventDefault();

        var message = $('#message').val();

        $.post("php/process/add.php", { message, id: "<?php echo $token;?>" })
            .done(function (message) {
                if (message !== '') {
                    alert("Toegevoed");
                }else alert('iets invullen');
            })
            .fail(function(){
                alert('erroe');
            });

    });

        function name(params) {
            $.getJSON("url", data,
                function (data, textStatus, jqXHR) {
                    
                }
            );
        }
});