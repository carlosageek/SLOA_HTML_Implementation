/**
 * Created by carlos on 3/19/2017.
 */
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySideNav").style.width = "20%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySideNav").style.width = "0";
}

$(function() {
    $('#no-live').popover();
    $(document).popover({
        selector: '[data-toggle="popover"]',
        html:true
    });
});