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
The audio of an phantom voices resides in the /audio folder. It is organised in months. In the folder js/p5 you can find a js file with the month. In there you can add audio and a name. The audio needs a path and the name is needed for the switches ticker.

In the html file > .topbar you can place the path of audio file and also the name.

To add a new audio entry in left content, all you need to do is add a `<li>` with the data attributes. You can see examples in the other html files.

#### An example:

`<li data-panel="entry-a">
    <a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-info="name" data-amplitude-song-index="0"></a>
    <div class="song_descr"></div>
</li>`

`data-panel="entry-a"` => is used to toggle the content and description. Plus it is needed for mobile.
`data-amplitude-song-info="name"` => imports the name from the .js file. If you choose to put the name/title in the `<a>` manually that's possible, but please take out `data-amplitude-song-info="name"` (`<a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-index="0">THE “FIG.” OF WOMAN AS THE WHITE NOISE OF HISTORY</a>`)

`data-amplitude-song-index="0"` this is the index number of the file. Counting starts with 0. So the first audio session always has an index of 0.

### Removing the counter.
In the pages "april.php", "may.php" and "june.php", I've commented the code that is used to create the two columns.
You can simply remove the ```<div class="counter"></div>``` and proceed to fill the two columns. I suggest copying a previous month. Don't forget to add the audio for the respective months.


## Sources
The base template for this is based off my [blank static template](https://github.com/BluePraise/blank-static-html)

We've used [P5.js](https://p5js.org/) from [Lauren Lee McCarthy](https://lauren-mccarthy.com/Info) and also
[amplitude.js](https://521dimensions.com/) by 52idimensions.com



