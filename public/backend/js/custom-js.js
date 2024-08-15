/*
* MAANLMS CUSTOM characters count
 * ------------------
 * You should not use this file in production.
* */
"use strict";
/**
 * MAANLMS CUSTOM characters
 * ------------------
 * This function use all inserted data.
 * */

$("#short_description").keyup(function(){
    var characters = $(this).val().length;
    var maxlen = 255;
    var countlast = Math.ceil(maxlen - characters) ;

    if (characters>maxlen){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'This field text is too long!',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            onOpen: function() {
                var maanlms = document.getElementById("myAudio");
                maanlms.play();
            }
        })
        $('#submint').prop("disabled",true);

        $("#count").css("color","red").css("background-color","yellow");

    }else{
        $('#submint').prop("disabled",false);
        $("#count").css("color","green");
        $("#count").css("background-color","#D4FCF6");
    }
    $("#count").text("Characters: " + countlast );

});
