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
                    <audio id="main-audio" autoplay preload loop>
                        <source src="/audio/mar/march-phantomvoices-sonicmeditation.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="play--title">
                    <div class="ticker-wrap ticker-wrap--active">
                    <div class="ticker">SONIC MEDITATION “BREATHE IN BREATHE OUT / MENTAL IMAGE”</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>

<div id="p5js-mar" class="canvas-container"></div>
<div class="full-height">
    <header class="mast-head">

        <nav class="main-nav">
            <ul>
                <li><a class="main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                <li><a href="december.php">December</a></li>
                <li><a href="january.php">January</a></li>
                <li><a href="february.php">February</a></li>
                <li><a class="active" href="march.php">March</a></li>
                <li><a href="april.php">April</a></li>
                <li><a href="may.php">May</a></li>
                <li><a href="june.php">June</a></li>
            </ul>
        </nav>
    </header>

    <main class="content--container mar">

        <div class="content--left content--txt">
            <div class="panel show" data-panel="entry-a">
            <p>This month’s reading:<span class="footnote">1</span></p>
                    <p>“Radio Phantasms, Phantasmic Radio” by Allen S. Weiss.</p>

                    <p>Additional texts in the reader: “Voices from the Air” by Adrienne Rich, “The Eidophone Voice Figures” by Margaret Watts, “Radio Physiognomics” from “Current of Music. Elements of a Radio Theory” by T. W. Adorno, “The Thing” by Martin Heidegger, “About the Poetics and Politics of the Voice” from “Acts of Voicing” by Iris Dressler, “Is Audio a Thing?” from “Figures in Air: Essays Toward a Philosophy of Audio” by Micah Silver.<br><br><br>
                    <ol class="footnotes">
                    <li><a href="#" class="hover-link">reading<img class="hover-img" src="img/mar_reading-web.jpg" alt="An Phantom Voices"></a> collectively in the Meeting Room.</li>
                    </p>
            </div>
            <div class="panel" data-panel="entry-b">
                <p>This month, we followed the Sonic Meditations “Breathe In Breathe Out" and "Mental Image” until the sound of the sirens went off.</p>

                 <p>Sonic Meditation meetings<span class="footnote">1</span> are inspired by Pauline Oliveros, who introduced them as non-verbal group work,<span class="footnote">2</span> as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
                 <br>
                 <p>BREATHE IN BREATHE OUT / MENTAL IMAGE</p>
                 <p>WE SIT IN A CIRCLE WITH OUR EYES CLOSED. BEGIN BY LISTENING TO YOUR OWN BREATHING. AMPLIFY THE SOUND OF YOUR BREATH BY PLACING THE PALMS OF YOUR HANDS OVER YOUR EARS. LISTEN AS THE SOUND OF YOUR BREATH TURNS INTO THE SOUND OF WIND. IT MIGHT BE A GENTLE WIND, A GUSTY WIND, A HOWLING WIND, OR SOME OTHER KIND OF WIND. OPEN YOUR EARS GRADUALLY AGAIN, LISTEN FOR THE CALM.<p>

                 <p>GRADUALLY FORM A MENTAL IMAGE OF ONE PERSON WHO IS SITTING IN THE CIRCLE. SING A LONG TONE TO THAT PERSON. THEN SING THE PITCH THAT PERSON IS SINGING, CHANGE YOUR MENTAL IMAGE TO ANOTHER PERSON AND REPEAT UNTIL YOU HAVE CONTACTED EVERY PERSON IN THE CIRCLE ONE OR MORE TIMES.<br><br><br>
                    <ol class="footnotes">
                    <li><a href="#" class="hover-link">meetings<img class="hover-img" src="img/mar_meditation2-web.jpg" alt="An Phantom Voices"></a> supplied with a carpet by Nicha Keeratiphanthawong and Tabea Nixdorff. </li>
                    <li><a href="#" class="hover-link">group work<img class="hover-img" src="img/mar_meditation-web.jpg" alt="An Phantom Voices"></a></li>
                    <p>
            </div>
            <div class="panel" data-panel="entry-c">
                 <p>Straw Phonation and Collective Gargle, exercises led by the WTFPC, followed by a Silent Lunch. This month’s WTFPC supper, along with other WTFPC activities, can be tracked <a target="_blank" href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>
            </div>
            <div class="panel" data-panel="entry-d">
                 <p>The meaning of the living and the non-meaning of things converge in the muteness of the world; this meaning and non-meaning plunge there and come out, the ultimate eddy. Mundus patet: through a fissure, through an opening, a fault, a cleft come noises,<span class="footnote">1</span> calls as small as these apertures. I’m listening, attentive, I’m translating, I’m advancing in the scaled-down meaning and science. Mundus patet: should the world open greatly, it will launch me into its silence. The totality remains silent. Knowledge expanded in elation. White origin of meaning, fountain of joy.<br><br><br>
                    <ol class="footnotes">
                    <li><a href="#" class="hover-link">noises<img class="hover-img" src="img/mar_jannete-web.jpg" alt="An Phantom Voices"></a> in the backgound, performed during the WT Food Poetics Club Silent Lunch. Voice amplified through the WT hallway speakers.</li>
                </p>
                 <audio src=""></audio>
            <div class="panel hide" data-panel="entry-e">
                 <p>“Attitude #1” visual score by Tjobo Kho</p>
            </div>
            </div>
            <div class="panel" data-panel="entry-f">
                 <p>“Radio Romantique Urbain, Radio Privacy, Radio Open Ear,<br>
                Radio Random, Radio Bug, Radio Alfabet, Radio Adventure”</p>
                <p>“An Phantom Voices” closes out each of its monthly sessions with “Intermezzo,” a platform for spontaneous collective listening, to close the week, yet also already point to the next one: Intermezzo, as in between two sonic entities.

                “Radio Romantique Urbain, Radio Privacy, Radio Open Ear, Radio Random, Radio Bug, Radio Alfabet, Radio Adventure” is a sonic collage in form of a collective listening session to different radio stations, shared by participants as their “first favorites.”
                </p>
            </div>

        </div>
        <div class="content--right">
            <ul class="audio-menu">
                    <li>
                        <a class="amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-a">THE THING WITH TRANSMITTING IS
                        (BLABLA)</a>
                    </li>
                        <li><a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-index="1" data-panel="entry-b">SONIC MEDITATION “BREATHE IN BREATHE OUT / <br>MENTAL IMAGE”</a></li>
                        <li><a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-index="2" data-panel="entry-c">STRAW PHONATION by the WT FOOD POETICS CLUB</a></li>
                        <li><a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-index="3" data-panel="entry-d">“TREMBLING EARTH” sonic contribution <br>by JANNETE MARK</a></li>
                        <li><a class="amplitude-play-pause amplitude-repeat-song" data-panel="entry-e">“ATTITUDE #1” visual score by TJOBO KHO</a></li>
                        <li><a class="amplitude-play-pause amplitude-repeat-song" data-amplitude-song-index="4"
                        data-panel="entry-f">INTERMEZZO</a></li>
                    </ul>
        </div>

        </main>

        <?php include "footer.php"; ?>

    </div>

</div> <!-- .end of wrapper -->

<script> window.countDownDate = new Date("Mar 02, 2020 12:00").getTime(); </script>
<script src="js/p5/mar.js"></script>
<script src="script.js"></script>

</body>

</html>
