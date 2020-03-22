# wt-webradio An Phantom Voices
A project for Werkplaats Typografie in Arnhem.

## About


### Structure of this site
There's a page per month. A month needs to have an active class in the corresponding month and a p5 js file. The content container holds a left and a right side.

Every month also has a js file for the pixilation of the images.
For the "anphantomvoices.php" page I have added a special button for the play and the pause in the top bar.

### Changing the images
In the img folder please put images. Then take the name of the image and replace it in the respective .js file. For example: if you'd like to change the image for March, you can simply drag and drop a file in that image folder "/img". Then
in the "/js" folder you can change the path or file name in march.js.

### Audio direction
Because I could not get the autoplay to work with [amplitude.js](https://521dimensions.com/), I have chosen to use the web api audio for the autoplay. The rest is still used by amplitude.js. This means that the audio that is used for autoplay, needs to be implemented with an ```<audio>``` tag. You can find an example in the january.php file in the right content column. For the An Phantom Voices page I've implemented it near the ```<div class="topbar">``` area.

For the implementation of the other audio, you can keep on using the /js monthly file. Please keep in mind that the pathnames are a bit buggy. I suggest using the full URL. For example "http://phantomradio.werkplaatstypografie.org/anphantomvoices/mar/audiofile.mp3".

### Removing the counter.
In the pages "april.php", "may.php" and "june.php", I've commented the code that is used to create the two columns.
You can simply remove the ```<div class="counter"></div>``` and proceed to fill the two columns. I suggest copying a previous month. Don't forget to add the audio for the respective months.


## Sources
The base template for this is based off my [blank static template](https://github.com/BluePraise/blank-static-html)

We've used [P5.js](https://p5js.org/) from [Lauren Lee McCarthy](https://lauren-mccarthy.com/Info) and also
[amplitude.js](https://521dimensions.com/) by 52idimensions.com



