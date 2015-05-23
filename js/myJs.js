//for the search box.. i'd use jquery $('searchbox').click(function () { put logic here } );
//logic would probably use a switch(searchterm) { case "financial": dosomething(); case "dogs": doSomethingelse() }
//var links = document.getElementsByTagName('');
//var addAttr = links.length;

//for(var i=0; i<addAttr; i++)
//{//
 // links[i].target = "_blank";
//}//

/* function searchSite() {
        var win = window;
        var txt = win.document.body;
        switch (txt) {
        case txt:
            document.getElementById("search").innerHTML = console.log("message or url");
            break;
        default:
            document.getElementById("search").innerHTML = console.log("no results were found");
        }
    }
    //(onsubmit = "return findInPage(this.string.value); in the button tag.) **/

//*Prepare
//problem: User when clicking on image goes to a dead end
//solution: Create an overlay with the large image - lightbox
//*Plan
//
var $image = $("<img>");
var $caption = $("<p></p>");
var $overlay = $('<div id="overlay"></div>');
// an image
$overlay.append($image);

// Add overlay
$("body").append($overlay);

// a caption to overlay
$overlay.append($caption);

//*Perform
//1. Capture the click event on a link to an image
$(".logo a").click(function (event) {
    "use strict";
    event.preventDefault();
    var imageLocation = $(this).attr("href");
    // Update overlay with the image linked in the link
    $image.attr("src", imageLocation);

    //Show the overlay
    $overlay.show();

    // Get child's alt atribute and set caption - see traversing
    var captionText = $(this).children("img").attr("alt");
    $caption.text(captionText);
});

// When overlay is clicked
$overlay.click(function () {
    "use strict";
    // Hide the overlay
    $overlay.hide();
});
//Jquery lightbox or overlay
$(document).ready(function () {

    //Problem: When user clicks on an image they are taken to a dead end.
    //Solution: Create an overlay with the image centered on it - Lightbox
    "use strict";
    var $lightbox = $('<div class ="lightbox"></div>');
    var $lightboxImage = $('<img>');
    var $caption = $('<p></p>');

    //Add an image to overlay
    $lightbox.append($lightboxImage);
    //Add a caption to the overlay
    $lightbox.append($caption);
    //Add overlay
    $('body').append($lightbox);
    //Capture the click event on a link to an image
    $('.slick-slide a').click(function (event) {
        event.preventDefault();
        var imageLocation = $(this).attr('href');
        // Update the overlay with the image that is clicked,
        $lightboxImage.attr('src', imageLocation);
        // Show the overlay.
        $lightbox.show();
        //1.3 Get the image alt attribute and set caption.
        var captionText = $(this).children('img').attr('alt');
        $caption.text(captionText);
    });
    //When the overlay is clicked
    //Hide the overlay.
    $lightbox.click(function () {
        $lightbox.hide();
    });
});



//print list function - Avenue Plaza Page
function printList() {
    var list = document.getElementById("listPrint").innerHTML;
    var print = window.open(list);
    print.document.write(list);
    print.print();
    print.close(list);
}

/* var image = ["../img/Challenge16.PNG",
             "../img/Challenge15.PNG",
             "../img/Challenge11.PNG",
             "../img/Challenge7.PNG",
             "../img/Challenge13.PNG",
             "../img/Challenge10.PNG",
             "../img/Challenge6.PNG",
             "../img/Slack1.PNG",
             "../img/Slack2.PNG",
             "../img/TreehouseAchievements.PNG",
             "../img/treehouseTracks.PNG",
             "../img/Gitcontribution.PNG"
            ];
var desc = ["Challenge 16, by this time i was getting the grasp of (for loops) and to iterate each item",
            "Challenge 15, this was my first Switch function and started to understand how the Switch and IF functions have similarities.",
            "Code Louisville Challenge11, Modulus and FOR statement are good for sorting and exceptions in data",
            " Challenge 7, the Bubble Sort gets a bad rep, i know it takes the sceneic view, sometimes running a program slower can be good for troubleshooting, those tricky little globals can cause run you a loop",
            "Challenge 13, creating Objects and Arrays. Organize the data to print out meaningful information",
            "Challenge 10, displaying the time in HH:MM:SS is useful for...more than a simple time-stamp, apparently, you can use it to create a Recursive function, im still wrapping my brain around that one",
            "Challenge 6, concating strings and printing them to the DOM, i enjoy the DOM",
            "On Slack.com with my peers and mentor, discussing Git, our Favorite topic of the session",
            "More Slack collaborating",
            "My Treehouse Achievements, improving is key to my success!",
            "My Treehouse Tracks, My focus is narrowing on Full Stack Developer, where as, before i was just undecided!",
            "My commits went up since Code Louisville, I appreciate Code Louisville!"
           ];
var imageNum = 0;
var imageLength = image.length - 1;

function changeImg(num) {
    imageNum = imageNum + num;
    if (imageNum > imageLength) {
        imageNum = 0;
    }
    if (imageNum < 0) {
        imageNum = imageLength;
    }
    document.slideshow.src = image[imageNum];
    document.getElementById("desc").innerHTML = desc[imageNum];
    return false;

} **/
// Carousel
//$(document).ready(function(){
//$('.slideshow').slick({
//setting-name: setting-value
//  });
//});


$(document).ready(function () {
    "use strict";
    $(".animsition").animsition({
        inClass: 'fade-in-up-sm',
        outClass: 'fade-out-up-sm',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        unSupportCss: ['animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
        //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

        overlay: false,

        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'body'
    });
});
