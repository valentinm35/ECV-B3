var clone1, num1, nb1, interval1;

$(function(){

    //$('.box_diapo').css('background', '#000')
    //$('.box_diapo img').addClass('diapo');
    clone1 = $('.box_diapo img').eq(0).clone();
    clone1.removeClass('diapo');
    clone1.addClass('hidden');
    clone1.css('visibility', 'hidden');
    clone1.css('display', 'block');
    $('.box_diapo').prepend(clone1);
    //$('.box_diapo .diapo').css('position', 'absolute');
    //$('.box_diapo .diapo').css('width', '100%');
    //$('.box_diapo .diapo').css('display', 'none');
    //$('.box_diapo .diapo').css('top', '0');
    nb1 = $('.box_diapo .diapo').length;
    num1 = 0;
    $('.box_diapo .diapo').eq(num1).css('display', 'block');
    
    interval1 = setInterval('diapo_suivante()', 5000);

});

function diapo_suivante(){

    $('.box_diapo .diapo').eq(num1).fadeOut(1000);
    
    num1++;
    if(num1 >= nb1){
        num1 = 0;
    }
    
    $('.box_diapo .diapo').eq(num1).fadeIn(1000);

}