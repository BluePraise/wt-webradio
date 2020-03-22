var img;
var pointillize = 10;
var $audio = document.getElementById("main-audio");

function preload() {
    img = loadImage("img/anphantomvoices.jpg");
}

function setup() {
    let cnv = createCanvas(800, 635);
    cnv.parent('p5js-anphantomvoices');

    img.resize(800, 635);
    background(255);
}

function draw() {
    for (var i = 0; i < 1; i++) {
        // Pick a random point
        var x = floor(random(img.width));
        var y = floor(random(img.height));
        var loc = (x + y * img.width) * 4;

        // Look up the RGB color in the source image
        img.loadPixels();
        var r = img.pixels[loc];
        var g = img.pixels[loc + 1];
        var b = img.pixels[loc + 2];
        noStroke();

        // Back to shapes! Instead of setting a pixel, we use the color
        // from a pixel to draw a circle.

        fill(r, g, b, 255);
        ellipse(x, y, 2, 2);

    }
}
$(".icon-play").hide();

// set click event to this audio element.
$(".play-pause-special").on("click", function() {

    if(!$audio.paused && !$audio.ended) {
        console.log("pause");
        $(".icon-pause").hide();
        $(".icon-play").show();
        $audio.pause();
    }
    else if ($audio.paused) {
        console.log("play");
        $(".icon-pause").show();
        $(".icon-play").hide();
        $audio.play();
    }
    return false;

});




