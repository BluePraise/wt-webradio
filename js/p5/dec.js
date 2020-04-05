var img;
var pointillize = 10;

function preload() {
    img = loadImage("img/d1.jpg");
}

function setup() {
    let cnv = createCanvas(1000, 500);
    cnv.parent("p5js-dec");

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

Amplitude.init({
        "bindings": {
            32: 'play_pause'
        },

        "songs": [
            {
                // data-amplitude-song-index="0"
                "name": "MARGINS AS THE SILENT SILENCED CENTER",
                "url": "/audio/dec/december-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="1"
                "name": "SONIC MEDITATION “TEACH YOURSELF TO FLY”",
                "url": "/audio/dec/december-phantomvoices-sonicmeditation.mp3"
            },
            {
                // data-amplitude-song-index="2"
                "name": "AN PHANTOM VOICES” introductory broadcast by TABEA NIXDORFF and GERARDO MADERA",
                "url": "/audio/dec/december-phantomvoices-intro.mp3"
            },
            {
                // data-amplitude-song-index="3"
                "name": "WT FOOD POETICS CLUB",
                "url": "/audio/dec/december-phantomvoices-silent-lunch.mp3"
            },
            {
                // data-amplitude-song-index="4"
                "name": "“GHOSTBOXING FROM THE ATTIC” broadcast by GERARDO MADERA and BRYANT WELLS",
                "url": "/audio/dec/december-phantomvoices-ghostboxing.mp3"
            }
        ],
        "start_song":3
    });



