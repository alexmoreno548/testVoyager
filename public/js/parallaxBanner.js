$(document).ready(function(){
    $(window).scroll(function(){
        barra = $(this).scrollTop(),
            posicion = barra * .60
        
        $('.banner').css({
            "background-position" : "0 -" + posicion + "px"
        })

    })

    $(window).scroll(function(){
        barra2 = $(this).scrollTop(),
        posicion = barra2 * .50

        $('.triangle-img').css({
            "background-position" : "0 -" + posicion + "px"
        })

    })
})