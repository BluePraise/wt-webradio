var img;
var pointillize = 10;

function preload() {
    img = loadImage("img/f1.jpg");
}

function setup() {
    let cnv = createCanvas(1000, 500);
    cnv.parent("p5js-feb");

    img.resize(1000, 500);
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
        "bindings": {
            32: 'play_pause'
        },

        "songs": [
            {
                // data-amplitude-song-index="0"
                "name": "THE “FIG.” OF WOMAN AS THE WHITE NOISE OF HISTORY",
                "url": "audio/feb/february-phantomvoices-sonicmediation.mp3"
            },
            {
                // data-amplitude-song-index="1"
                "name": "SONIC MEDITATION “SEX CHANGE / EAR LY” [19:25 mins.]",
                "url": "audio/feb/february-phantomvoices-sonicmediation.mp3"
            },
            {
                // data-amplitude-song-index="2"
                "name": "SILENT LUNCH by the WT FOOD POETICS CLUB [13:25 mins.]",
                "url": "audio/feb/february-phantomvoices-silentlunch.mp3"
            },
            {
                // data-amplitude-song-index="3"
                "name": "“REFLECTIONS ON HER VOICE” visual score by HANNAH SAKAI [2:40 mins.]",
                "url": "audio/feb/february-phantomvoices-hannah-sakai.mp3"
            },
            {
                // data-amplitude-song-index="4"
                "name": "INTERMEZZO [15:59 mins.]",
                "url": "audio/feb/february-phantomvoices-intermezzo.mp3"
            }
        ],
            "autoplay": true
    });

});