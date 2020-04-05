<!DOCTYPE html>
<html>

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
                        <source src="/audio/feb/february-phantomvoices-sonicmediation.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="play--title">
                    <div class="ticker-wrap">
                    <div class="ticker">SONIC MEDITATION “SEX CHANGE / EAR LY”</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>

    <div id="p5js-feb" class="canvas-container"></div>
    <div class="full-height">
        <header class="mast-head">
            <nav class="main-nav">
                <ul>
                    <li><a class="main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                    <li><a href="december.php">December</a></li>
                    <li><a href="january.php">January</a></li>
                    <li><a class="active" href="february.php">February</a></li>
                    <li><a href="march.php">March</a></li>
                    <li><a href="april.php">April</a></li>
                    <li><a href="may.php">May</a></li>
                    <li><a href="june.php">June</a></li>
                </ul>
            </nav>
        </header>

        <main class="content--container">

            <div class="content--left content--txt">
                 <div class="panel show" data-panel="entry-a">
                    <p>This month’s reading:<br><br>
                    “The Gender of Sound” by Anne Carson.</p>
                    <p>Additional texts in the <a href="#" class="hover-link">reader<img class="hover-img" src="img/reader_feb.jpg" alt="An Phantom Voices"></a>: “Cry, Scream, Shout, Sing” from “Lexicon of the Mouth” by Brandon LaBelle, “When Our Lips Speak Together” by Luce Irigaray, “The Laugh of the Medusa” by Hélène Cixous, “A Phenomenology of Voice” from “Listening and Voice: Phenomenologies of Sound” by Don Ihde, “The Sounds of Feminist Theory” by Ruth Salvaggio, “Deep Listening” from “Deep Listening: A Composer’s Sound Practice” by Pauline Oliveros</p>
                </div>
                <div class="panel" data-panel="entry-b">
                    <p>This month, we followed the Sonic Meditation “Sex Change / Ear Ly” until the sound of the sirens went off.</p>
                    <p>Sonic Meditation <a href="#" class="hover-link">meetings<img class="hover-img" src="img/february_meditationcarpet.jpg" alt="An Phantom Voices"></a> are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
                    <br>
                    <p>SEX CHANGE</p>
                    <p>LISTEN INWARDLY TO THE SOUND OF YOUR VOICE. LISTEN INWARDLY TO THE SOUND OF YOUR VOICE CHANGED TO ANOTHER SEX. LISTEN INWARDLY TO THE SOUND OF BOTH OR MULTIPLE VOICES TOGETHER. LISTEN INWARDLY AS IF THERE WERE MANY OF YOU. LISTEN INWARDLY FREELY AS YOUR VOICES CHANGE RANDOMLY. EXPRESS YOUR VOICES ALOUD.</p>

                    <p>EAR LY</p>
                    <p>LIE FLAT ON YOUR BACK  OR SIT COMFORTABLY. OPEN YOUR EYES WIDELY, THEN LET YOUR EYELIDS CLOSE EXTREMELY SLOWLY. BECOME AWARE OF HOW YOUR EYELIDS ARE CLOSING. WHEN YOUR EYELIDS ORE CLOSED, TURN YOUR  EYES SLOWLY FROM LEFT TO RIGHT, AROUND, UP AND DOWN. LET  YOUR  EYES REST COMFORTABLY IN THEIR SOCKETS. TRY TO BE AWARE OF THE  MUSCLES   BEHIND THE EYES AND OF THE DISTANCE FROM THESE MUSCLES TO THE BACK OF THE HEAD. COVER YOUR EYES WITH YOUR  PALMS AND SHUT OUT ALL THE LIGHT. BECOME AWARE OF ALL THE SOUNDS IN THE ENVIRONMENT. WHEN YOU THINK YOU HOVE ESTABLISHED CONTACT WITH ALL OF THE SOUNDS IN THE EXTERNAL ENVIRONMENT, VERY GRADUALLY, INTRODUCE YOUR FINGERS INTO YOUR EARS OR COVER THEM WITH YOUR PALMS. TRY TO SHUT OUT ALL EXTERNAL SOUND. LISTEN CAREFULLY TO THE INTERNAL SOUNDS OF YOUR OWN BODY WORKING. AFTER A LONG TIME GRADUALLY OPEN YOUR EARS AND EMPHAZISE THE SOUNDS OF THE EXTERNAL ENVIRONMENT WITH YOUR VOICE.
                    </p>
                </div>
                <div class="panel" data-panel="entry-c">
                    <p>Hosted by the WT Food Poetics Club (WTFPC), we excersised an Straw Phonation and Collective Gargle ritual, followed by a Silent Lunch.
                    This month's WTFPC supper, along with the other WTFPC activities, can be tracked <a target="_blank" href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>
                </div>
                <div class="panel" data-panel="entry-d">
                    <p>(engraved <a href="#" class="hover-link">mirrors<img class="hover-img" src="img/february-hannah_mirror.jpeg" alt="An Phantom Voices"></a>, performed with torch)</p>
                    <p>“Reflections on her voice” shares a selection of images, engraved into mirrors, chosen while looking at the presence of female voicesin early Japanese theatre. Actresses were forbidden from the stage; all roles were played by men. Thus, femininity being marked by makeup, wigs, costumes and gestures. Visual representation compensated the absence of her voice.  The mirrors host a <a href="#" class="hover-link">reflection<img class="hover-img" src="img/february_hannah_mirror3.jpg" alt="An Phantom Voices"></a> of her voice into current space (music by Koppi Mizrahi).</p>
                </div>
                <div class="panel" data-panel="entry-e">
                    <p>“Macht Kaputt”</p>
                    <p>“An Phantom Voices” closes out each of its monthly sessions with “Intermezzo,” a platform for spontaneous collective listening, to close the week, yet also already point to the next one: Intermezzo, as in between two sonic entities.

                    “Macht Kaputt” is a sonic contribution by Marcus Wachter.
                    </p>
                </div>
            </div> <!-- .content--left -->

            <div class="content--right">
                <ul class="audio-menu">
                    <li>
                        <a href="" class="js-show-panel amplitude-play-pause"  data-amplitude-song-index="0"data-panel="entry-a">THE “FIG.” OF WOMAN AS THE WHITE NOISE OF HISTORY</a>
                    </li>
                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-b">SONIC MEDITATION “SEX CHANGE / EAR LY” </a></li><!-- Audio: february-phantomvoices-sonicmeditation.mp3] -->
                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-c">WT FOOD POETICS CLUB</a></li><!-- Audio: later -->
                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="3" data-panel="entry-d">“REFLECTIONS ON HER VOICE” visual score <br>by HANNAH SAKAI</a></li><!-- Audio: later -->
                    <li><a class="amplitude-play-pause js-show-panel" data-amplitude-song-index="4" data-panel="entry-e">INTERMEZZO</a></li><!-- Audio: february_phantomvoices-intermezzo.mp3]-->

                </ul>
            </div>

        </main>

            <?php include "footer.php"; ?>
        </div>
    </div> <!-- .end of wrapper -->

<script> window.countDownDate = new Date("Feb 03, 2020 12:00").getTime(); </script>
<script src="js/p5/feb.js"></script>
<script src="script.js"></script>


</body>

</html>
