$( '#slider' ).on( 'cycle-before', function() {
    $('.slider>div>h1').css('transform', 'translate3d(0,+40px,0)');
    $('.slider>div>h1').css('-webkit-transform', 'translate3d(0,+40px,0)');
    $('.slider>div>h1').css('opacity', '0');

});

    $( '#slider' ).on( 'cycle-after', function() {
    $('.slider>div>h1').css('transform', 'translate3d(0,0,0)');
    $('.slider>div>h1').css('-webkit-transform', 'translate3d(0,0,0)');
    $('.slider>div>h1').css('opacity', '1');
});
