$(function() {
    var header = $('.jumbotron');
    var backgrounds = new Array(
      'url(../uploads/img/1.jpeg)',
      'url(../uploads/img/11.jpeg)',
      'url(../uploads/img/14.jpeg)',
      'url(../uploads/img/2.jpeg)',
      'url(../uploads/img/3.jpeg)');
    var current = 0;

    function nextBackground() {
        header.css('background',backgrounds[current = ++current % backgrounds.length]);
        setTimeout(nextBackground, 5000);
    }

    setTimeout(nextBackground, 5000);
    header.css('background', backgrounds[0]);
    header.css('transitionDelay','1s');
    header.css('transition','1s');
});
