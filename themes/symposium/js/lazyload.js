$(window).ready(function() {
    $('.backgroundimage').each(function() {
        
        $(this).parent().css('background-color', $(this).attr('colour'));
           
        var src = $(this).attr('data-background');
        if (src === null || src === '') { return; }

        var image = new Image();
        image.ref = $(this);
        
        image.onload = function() {
            var reg = image.ref;
            $(reg).css('background-image', 'url(' + image.src + ')');
            $(reg).css('opacity', '1');
        };

        image.src = src;

    });
});