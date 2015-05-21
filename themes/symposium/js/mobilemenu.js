$(document).ready(function() {
   
    $('.mobilemenubutton').click(function() {
        
        $('ul.mobilemenu').slideToggle();
        $('div.header').toggleClass('fixed-menu');
        $('div.header').parent().toggleClass('mobile-menu-padded');
        
    });
    
});