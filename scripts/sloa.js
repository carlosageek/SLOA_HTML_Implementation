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

var image1 = new Image("/images/book1.jpeg");
var image2 = new Image();
image2.src = "/images/book2.jpeg";
var image3 = new Image();
image3.src = "/images/book3.jpeg";
var image4 = new Image();
image4.src = "/images/book4.jpeg";
var image5 = new Image();
image5.src = "/images/book5.jpeg";

var step = 1;
function slideIt(){

    document.images.slide.src = eval("image"+step+".src");
    if (step < 5)
        step++;
    else {
        step = 1;

    }
    setTimeout("slideIt()",1500)
}
slideIt();