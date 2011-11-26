$(document).ready(function() {
    
    checkTopButtonVisibility();
    
});

$(window).scroll().checkTopButtonVisibility();


function checkTopButtonVisibility() {
    if(scrollTop() >= 30) {
        $('#topButton').hide();
    } else {
        $('#topButton').show();
    }
}
