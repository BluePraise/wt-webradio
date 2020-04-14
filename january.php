<!DOCTYPE html>
<html>
    
<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: white; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: white; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>An Phantom Voices</title>
    <meta name="author" content="Werkplaats Typgrafie Arnhem">
    <link href="https://fonts.googleapis.com/css?family=Caudex:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>
    <script src="js/amplitude.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="topbar">
            <div class="topbar--left">
                <div class="play-toggle amplitude-play-pause">
                    <img id="play" class="icon-play" src="icon-play.svg" alt="play icon">
                    <img id="pause" class="icon-pause" src="icon-pause.svg" alt="play icon">
                    <audio id="main-audio" autoplay preload>
                        <source src="/audio/jan/january-phantomvoices-sonicmeditation.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="play--title">
                    <div class="ticker-wrap">
                    <div class="ticker">SONIC MEDITATION “TUMBLING SONG”</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>


        <div id="p5js-jan" class="canvas-container"></div>
        <div class="full-height">
        <header class="mast-head">
            <nav class="main-nav">
                <ul>
                    <li><a class="main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                    <li><a href="december.php">December</a></li>
                    <li><a class="active" href="january.php">January</a></li>
                    <li><a href="february.php">February</a></li>
                    <li><a href="march.php">March</a></li>
                    <li><a href="april.php">April</a></li>
                    <li><a href="may.php">May</a></li>
                    <li><a href="june.php">June</a></li>
                </ul>
            </nav>
        </header>
        <main class="content--container jan">

            <div class="content--left content--txt">
                <div class="panel show" data-panel="entry-a">
                    <p>This month’s reading:<br><br>
                    “Bite, Chew, Eat” from “Lexicon of the Mouth” by Brandon LaBelle.</p>

                    <p>Additional texts in the reader: “Yurokon” by Wilson Harris, “Liner Notes on Lick Piece” by Fred Moten, “Columbus and the Cannibals” by Peter Hulme, “Mother Tongue” by Amy Tan, “Dreaming in Foreign” by Safiya Sinclair, “A Tempest” by Aimé Césaire, “All You Can’t Eat: Derrida’s Course “Rhétorique Du Cannibalisme” (1990–1991)” by David Farrell Krell.</p>
                </div>
                <div class="panel" data-panel="entry-b">
                    <p>This month, we followed the Sonic Meditation “Tumbling Song” until the sound of the sirens went off.</p>

                    <p>Sonic Meditation meetings are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
                    <br>
                    <p>TUMBLING SONG </p>

                    <p>MAKE ANY VOCAL SOUND, BUT ALWAYS GO DOWNWARD IN PITCH FROM THE INITIAL ATTACK. THE INITIAL ATTACK MAY BEGIN AT ANY PITCH LEVEL. GO DOWNWARD IN A GLISSANDO OR IN DISCRETE STEPS CONTINUOUSLY. GO ANY DISTANCE IN RANGE, AT ANY SPEED, DYNAMIC OR QUALITY, BUT THE BREATH DETERMINES THE MAXIMUM TIME LENGTH OF ANY DOWNWARD GESTURE.</p>
                </div>
                <div class="panel" data-panel="entry-c">
                    <p>Straw Phonation and Collective Gargle, exercises led by the WTFPC, followed by a Silent Lunch. This month’s WTFPC supper, along with other WTFPC activities, can be tracked <a target="_blank" href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>
                </div>

                <div class="panel" data-panel="entry-d">
                    <p>“My mother’s tongue” is a game, in which dots are connected by different mouths, breath, and saliva.
                    <br><br>
                    It is a response to Brandon ­LaBelle’s “Lexicon of the Mouth — Bite, Chew, Eat”, acknowledging a violence which remains disturbingly clear today; how the history of how we bite, chew, and eat (another), is a primal habit.
                    <br><br>
                    Words associated with the mouth and its abilities become infinite—though social boundaries restrain the mouth and create strict distinctions or: definitions of what is “law and taboo”. “My mother’s tongue” is an interactive performance,<span class="footnote">1</span> in which a lexicon is read. A lexicon which partly draws from LaBelle’s politics of the mouth, exploring its contemporary relevance, merged with definitions that arose from my own voice. This created both a messy<span class="footnote">2</span> trajectory to be chewed, and a bodily connection through the sounds of mouths blowing ink.<span class="footnote">3</span>
                    <br><br>
                    (Credits for the title go to “Mother Tongue” by Amy Tan, a text which strongly informed my own politics of the mouth, developed during this project).
                    <br><br><br>
                    <ol class="footnotes">
                    <li><a href="#" class="hover-link">performance<img class="hover-img" src="img/jan_yunie1-web.jpg" alt="An Phantom Voices"></a></li>
                    <li><a href="#" class="hover-link">messy<img class="hover-img" src="img/jan_yunie4-web.jpg" alt="An Phantom Voices"></a> traces.</li>
                    <li><a href="#" class="hover-link">ink<img class="hover-img" src="img/jan_yunie2-web.jpg" alt="An Phantom Voices"></a> on paper</li>
                    </p>
                    <p></p><!-- Audio by Yuni will come later-->
                </div>
            </div>
            <div class="content--right">
                <ul class="audio-menu">
                    <li>
                        <a class="amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-a">ORAL IMAGINARIES, STRATEGIES AND TRUTHS</a>
                    </li>
                    <li><a class="amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-b">SONIC MEDITATION “TUMBLING SONG”</a></li><!--  [Audio: january-phantomvoices-sonicmeditation.mp3]-->

                    <li><a class="amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-c">SILENT LUNCH by the WT FOOD POETICS CLUB</a></li><!-- [Audio: january-phantomvoices-silentlunch.mp3] -->

                    <li><a class="amplitude-play-pause" data-amplitude-song-index="3" data-panel="entry-d">“MY MOTHER’S TONGUE” visual score by YUNIE CHAE</a></li>
                </ul>
            </div>

        </main>

        <?php include "footer.php"; ?>

        </div>


</div> <!-- .end of wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script> window.countDownDate = new Date("Jan 06, 2020 12:00").getTime(); </script>
<script src="js/p5/jan.js"></script>
<script src="script.js"></script>

</body>

</html>
