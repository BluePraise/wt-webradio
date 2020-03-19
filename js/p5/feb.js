var img;
var pointillize = 10;

function preload() {
    img = loadImage("img/february.jpg");
}

function setup() {
    let cnv = createCanvas(windowWidth, windowHeight);
    cnv.parent("p5js-feb");

    img.resize(windowWidth, windowHeight);
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



$(document).ready(function() {
    Amplitude.setDebug( true );
    Amplitude.init({

        "songs": [
            {
                // data-amplitude-song-index="0"
                "name": "Phantom Voices - February Sonic Meditation",
                "url": "/audio/feb/february-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="0"
                "name": "Phantom Voices - February Sonic Meditation",
                "url": "/audio/feb/february-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="1"
                "name:" "",
                "url": "/audio/feb/february-phantomvoices-silentlunch.mp3"
            },
            {
                // data-amplitude-song-index="2"
                "name": "Phantom Voices - February - Silent Lunch",
                "url": "/audio/feb/february-phantomvoices-intermezzo.mp3"
            }
        ],
            "autoplay": true
    });

});