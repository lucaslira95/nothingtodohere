$(document).ready(function(){
    $('.load').click(function(event){
        event.preventDefault();

        $('#dynamic').fadeOut('fast');


        $('#dynamic').load($(this).attr('href'), function(){
            $('#dynamic').fadeIn('fast');
        });

        return false;
    });
});