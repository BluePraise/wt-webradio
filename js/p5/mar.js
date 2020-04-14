var img;
var pointillize = 10;

function preload() {
    img = loadImage("img/m1.jpg");
}

function setup() {
    let cnv = createCanvas(1000, 500);
    cnv.parent("p5js-mar");

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

            "songs": [
                {
                    // data-amplitude-song-index="0"
                    "name": "THE THING WITH TRANSMITTING IS (BLABLA)",
                    "url": "/audio/mar/march-phantomvoices-sonicmeditation.mp3"
                },
                {
                    // data-amplitude-song-index="1"
                    "name": "SONIC MEDITATION “BREATHE IN BREATHE OUT / MENTAL IMAGE (09:06 mins.)”",
                    "url": "/audio/mar/march-phantomvoices-sonicmeditation.mp3"
                },
                {
                    // data-amplitude-song-index="2"
                    "name": "STRAW PHONATION by the WT FOOD POETICS CLUB (00:50 mins.)",
                    "url": "/audio/mar/march-phantomvoices-silentlunch-straws.mp3"
                },
                {
                    // data-amplitude-song-index="3"
                    "name": "“TREMBLING EARTH” sonic contribution by JANNETE MARK (18:50 mins.)",
                    "url": "/audio/mar/march-phantomvoices-jannete-mark.mp3"
                },
                {
                    // data-amplitude-song-index="4"
                    "name": "“ATTITUDE #1” visual score by TJOBO KHO (audio soon)",
                    "url": "" // AUDIO FOLLOWS
                },
                {
                    // data-amplitude-song-index="5"
                    "name": "INTERMEZZO (54:06 mins.)",
                    "url": "/audio/mar/march-phantomvoices-intermezzo.mp3" // AUDIO FOLLOWS
                }
            ],
            "autoplay": true
        });

