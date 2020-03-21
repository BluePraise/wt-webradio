<?php include "head.php";?>

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

    <main class="content--container">

        <div class="content--left content--txt">
            <div class="panel show" data-panel="entry-a">
            <p>This month’s reading:</p>
                    <p>“The Transformation of Silence into Language and Action” from “Your Silence Will Not Protect You” by Audre Lorde.</p>

                    <p>Additional texts in the reader: “Silence, Feminism, Power. Reflections at the Edges of Sound.” by Sheena Malhotra, Aimee Carrillo Rowe (Ed.), “Can the Subaltern Speak?” by Gayatri Chakravorty Spivak, “Word and Silence” from “Listening and Voice: Phenomenologies of Sound” by Don Ihde.</p>
            </div>
            <div class="panel" data-panel="entry-b">
                <p>This month, we followed the Sonic Meditations “Breathe In Breathe Out" and "Mental Image” until the sound of the sirens went off.</p>

                 <p>Sonic Meditation meetings are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
            </div>
            <div class="panel" data-panel="entry-c">
                 <p>Straw Phonation and Collective Gargle led by the WTFPC, followed by a Silent Lunch.
                 Monthly supper, along with other WTFPC activities, can be tracked <a href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>
            </div>
            <div class="panel" data-panel="entry-d">
                 <p>“Title” visual score by Tjobo Kho</p>
            </div>
            <div class="panel" data-panel="entry-e">
                 <p>“Title” sonic contribution by Jannete Mark</p>
                 <audio src=""></audio>
            </div>
            <div class="panel" data-panel="entry-f">
                 <p>“Radio Romantique Urbain, Radio Privacy, Radio Open Ear, Radio Random, Radio Bug, Radio Alfabet, Radio Adventure”</p>
                <p>“An Phantom Voices” closes out each of its monthly sessions with “Intermezzo,” a platform for spontaneous collective listening, to close the week, yet also already point to the next one: Intermezzo, as in between two sonic entities.

                “Radio Romantique Urbain, Radio Privacy, Radio Open Ear, Radio Random, Radio Bug, Radio Alfabet, Radio Adventure” is a sonic collage in form of a collective listening session to different radio stations, shared by participants as their “first favorites.”
                </p>
            </div>

        </div>
        <div class="content--right">
            <ul class="audio-menu">
                    <li>
                        <a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-a">THE THING WITH TRANSMITTING IS
                        (BLABLA)</a>
                    </li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-b">Sonic Meditation “Breathe In Breathe Out" and "Mental Image” </a></li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-c">Food Poetics Club</a></li>
                        <li><a class="js-show-panel" data-panel="entry-d">“Title” visual score by Tjobo Kho</a></li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-e">“Title” sonic contribution by Jannete Mark</a></li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="3" data-panel="entry-f">Intermezzo</a></li>
                    </ul>
        </div>

        </main>

        <?php include "footer.php"; ?>

    </div>

</div> <!-- .end of wrapper -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script> window.countDownDate = new Date("Feb 03, 2020 12:00").getTime(); </script>
<script src="script.js"></script>
<script src="js/p5/feb.js"></script>
<script src="js/amplitude.js"></script>

 <script>

    $(document).ready(function() {
        Amplitude.setDebug( true );
        Amplitude.init({

                
            "songs": [
                {
                    // data-amplitude-song-index="0"
                    "name": "Phantom Voices - March Sonic Meditation",
                    "url": "/audio/mar/march-phantomvoices-sonicmeditation.mp3"
                },
                {
                    // data-amplitude-song-index="1"
                    "name": "Phantom Voices - March Sonic Meditation",
                    "url": "/audio/mar/march-phantomvoices-silentlunch-straws.mp3"
                },
                {
                    // data-amplitude-song-index="2"
                    "name": "Phantom Voices - March - Jannette Mark",
                    "url": "/audio/mar/march-phantomvoices-contribution_jannete_mark.mp3"
                },
                {
                    // data-amplitude-song-index="3"
                    "name": "Phantom Voices - March - Intermezzo",
                    "url": "/audio/mar/march-phantomvoices-intermezzo.mp3"
                }
            ],
                "autoplay": true
            });

    });
    </script>


</body>

</html>
