
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
                        <source src="/audio/dec/december-phantomvoices-sonicmeditation.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="play--title">
                    <div class="ticker-wrap">
                    <div class="ticker">SONIC MEDITATION “TEACH YOURSELF TO FLY”</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>


    <div id="p5js-dec" class="canvas-container"></div>
    <div class="full-height">
        <header class="mast-head">

            <nav class="main-nav">
                <ul>
                    <li><a class="main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                    <li><a class="active" href="december.php">December</a></li>
                    <li><a href="january.php">January</a></li>
                    <li><a href="february.php">February</a></li>
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
                    <p>This month’s reading:</p>
                    <p>“The Transformation of Silence into Language and Action” from “Your Silence Will Not Protect You” by Audre Lorde.</p>

                    <p>Additional texts in the reader: “Silence, Feminism, Power. Reflections at the Edges of Sound.” by Sheena Malhotra, Aimee Carrillo Rowe (Ed.), “Can the Subaltern Speak?” by Gayatri Chakravorty Spivak, “Word and Silence” from “Listening and Voice: Phenomenologies of Sound” by Don Ihde.</p>
                </div>
                <div class="panel" data-panel="entry-b">
                    <p>This month, we followed the Sonic Meditation “Teach yourself to fly” until the sound of the sirens went off.</p>

                    <p>Sonic Meditation meetings are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
                    <br>
                    <p>TEACH YOURSELF TO FLY</p>

                    <p>WE SIT IN A CIRCLE FACING THE CENTER. THE SPACE IS ILLUMINATED WITH DIM BLUE LIGHT. BEGIN BY SIMPLY OBSERVING YOUR OWN BREATHING. ALWAYS BE ON OBSERVER. GRADUALLY ALLOW YOUR BREATHING TO BECOME AUDIBLE. THEN GRADUALLY INTRODUCE YOUR VOICE, ALLOW YOUR VOCAL CORDS TO VIBRATE IN ANY MODE WHICH OCCURS NATURALLY. ALLOW THE INTENSITY TO INCREASE VERY SLOWLY. CONTINUE AS LONG AS POSSIBLE NATURALLY, AND UNTIL ALL OTHERS ORE QUIET, ALWAYS OBSERVING YOUR OWN BREATH CYCLE.</p>
                </div>
                <div class="panel" data-panel="entry-c">
                    <p>Besides our voices, this inaugural audio essay to the project "An Phantom Voices" echoes some of our references, interweaving them into each other:<br><br>
                    Pamela Z (Breathing), Samuel Beckett (Not I), Anthony Whiteread (Pressures of the Unspeakable, with the Institute for Screamscape Studies), Kathy Acker in an interview, Cathy Berberian (Stripsody), Kamala Sankaram (Ololyga), Meredith Monk (Tablet/Songs from a Hill), Susan Howe (Frolic Architecture), Pauline Oliveros in an interview and (Ghostdance). Alvin Lucier (I am Sitting in a Room), Friedrich Jürgenson (From The Studio For Audioscopic Research), Frank Sumption (Ghost Box #13 - Random Sweep), Mark Bain (The Live Room), Jacob Kirkegaard (Aion, Church), Radio Ragazza (Born in Flames), Fred Moten (On “Figuring it out”).</p>
                </div>
                <div class="panel" data-panel="entry-d">
                    <p>Hosted by the WT Food Poetics Club (WTFPC), we excersised an Straw Phonation and Collective Gargle ritual, followed by a Silent Lunch.
                    This month's WTFPC supper, along with the other WTFPC activities, can be tracked <a target="_blank" href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>

                </div>
                <div class="panel entry-e" data-panel="entry-e">
                </div>
            </div>

            <div class="content--right">
                <ul class="audio-menu">
                    <li>
                        <a class="play-pause" data-panel="entry-a" data-amplitude-song-index="0">MARGINS AS THE SILENT SILENCED CENTER</a>
                    </li>
                        <li><a class="amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-b">SONIC MEDITATION “TEACH YOURSELF TO FLY”</a>
                    </li>
                        <li><a class="amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-c">“AN PHANTOM VOICES” introductory broadcast<br> by
                        TABEA NIXDORFF and GERARDO MADERA</a>
                    </li>
                        <li><a class="amplitude-play-pause" data-amplitude-song-index="3" data-panel="entry-d">WT FOOD POETICS CLUB</a>
                    </li>
                        <li><a class="amplitude-play-pause" data-amplitude-song-index="4" data-panel="entry-e">“GHOSTBOXING FROM THE ATTIC”<br> broadcast by GERARDO MADERA and BRYANT WELLS</a>
                    </li>
                    </ul>
                </div>

            </main>

            <?php include "footer.php"; ?>
        </div>



</div> <!-- .end of wrapper -->

<script> window.countDownDate = new Date("Dec 02, 2019 12:00").getTime(); </script>
<script src="js/p5/dec.js"></script>
<script src="script.js"></script>

</body>

</html>
