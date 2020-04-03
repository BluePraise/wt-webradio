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
                    "name": "Phantom Voices - March - Sonic Meditation",
                    "url": "./audio/mar/march-phantomvoices-sonicmeditation.mp3"
                },
                {
                    // data-amplitude-song-index="0"
                    "name": "Phantom Voices - March - Sonic Meditation",
                    "url": "./audio/mar/march-phantomvoices-sonicmeditation.mp3"
                },
                {
                    // data-amplitude-song-index="1"
                    "name": "Phantom Voices - March - Silent Lunch",
                    "url": "./audio/mar/march-phantomvoices-silentlunch-straws.mp3"
                },
                {
                    // data-amplitude-song-index="2"
                    "name": "Phantom Voices - March - Jannette Mark",
                    "url": "./audio/mar/march-phantomvoices-jannete-mark.mp3"
                },
                {
                    // data-amplitude-song-index="3"
                    "name": "Phantom Voices - March - Intermezzo",
                    "url": "./audio/mar/march-phantomvoices-intermezzo.mp3"
                }
            ],
            "autoplay": true
        });

