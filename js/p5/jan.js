var img;
var pointillize = 10;

function preload() {
    img = loadImage("img/j1.jpg");
}

function setup() {
    let cnv = createCanvas(1000, 500);
    cnv.parent("p5js-jan");

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
    Amplitude.init({
        "bindings": {
            32: 'play_pause'
        },
        "songs": [
            {
                // data-amplitude-song-index="0"
                "name": "ORAL IMAGINARIES, STRATEGIES AND TRUTHS",
                "url": "/audio/jan/january-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="1"
                "name": "SONIC MEDITATION “TUMBLING SONG (3:28 mins.)",
                "url": "/audio/jan/january-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="2"
                "name": "SILENT LUNCH by the WT FOOD POETICS CLUB (16:11 mins.)",
                "url": "/audio/jan/january-phantomvoices-silentlunch.mp3"
            },
            {
                // data-amplitude-song-index="3"
                "name": "“MY MOTHER’S TONGUE” visual score by YUNIE CHAE (audio soon)",
                "url": ""
            }
        ],
            "autoplay": true
    });

});