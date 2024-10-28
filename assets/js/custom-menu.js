jQuery(document).ready(function($) {
    $('.custom-menu-class li').hover(function() {
        $(this).find('ul').slideDown();
    }, function() {
        $(this).find('ul').slideUp();
    });
});
