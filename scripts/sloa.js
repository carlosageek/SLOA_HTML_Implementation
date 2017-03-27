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
    $('#search').popover();
    $(document).popover({
        selector: '[data-toggle="popover"]',
        html:true
    });
});

var images = [];
images[0] = "/images/book1.jpeg";
images[1] = "/images/book2.jpeg";
images[2] = "/images/book3.jpeg";
images[3] = "/images/book4.jpeg";
images[4] = "/images/book5.jpeg";

var step = 1;
//noinspection InfiniteRecursionJS
function slideIt(){

    document.getElementById("slide").src = images[step];
    if (step < images.length-1)
        step++;
    else {
        step = 0;
    }
}
window.onload=setInterval(slideIt(), 1500);