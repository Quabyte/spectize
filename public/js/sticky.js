window.onscroll = function () { stickyMenu() };

var navbar = $('#review-menu');

var offset = navbar.offset();
var topOffset = offset.top;

function stickyMenu() {
    if (window.pageYOffset >= topOffset) {
        navbar.addClass('sticky');
    } else {
        navbar.removeClass('sticky');
    }
}