
<?php include "head.php";?>
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
                </div>
                <div class="panel" data-panel="entry-c">
                    <p>Besides our voices, this inaugural audio essay to the project "An Phantom Voices" echoes some of our references: Pamela Z (Breathing), Samuel Beckett (Not I), Anthony Whiteread (Pressures of the Unspeakable, with the Institute for Screamscape Studies), Kathy Acker in an interview, Cathy Berberian (Stripsody), Kamala Sankaram (Ololyga), Meredith Monk (Tablet/Songs from a Hill), Susan Howe (Frolic Architecture), Pauline Oliveros in an interview and (Ghostdance). Alvin Lucier (I am Sitting in a Room), Friedrich Jürgenson (From The Studio For Audioscopic Research), Frank Sumption (Ghost Box #13 - Random Sweep), Mark Bain (The Live Room), Jacob Kirkegaard (Aion, Church), Radio Ragazza (Born in Flames), Fred Moten (On “Figuring it out”).</p>
                </div>
                <div class="panel" data-panel="entry-d">
                    <p>Straw Phonation and Collective Gargle led by the WTFPC, followed by a Silent Lunch.
                    Monthly supper, along with other WTFPC activities, can be tracked <a href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a></p>

                </div>
                <div class="panel entry-e" data-panel="entry-e">
                </div>
            </div>

            <div class="content--right">
                <ul class="audio-menu">
                    <li>
                        <a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-a">MARGINS AS THE SILENT SILENCED CENTER</a>
                    </li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-b">Sonic Meditation “Teach yourself to fly”</a>
                    </li>
                        <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-c">“An Phantom Voices” Introductory broadcast by Tabea Nixdorff and Gerardo Madera</a>
                    </li>
                        <li>
                            <a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-d">Food Poetics Club</a>
                        </li>
                        <li>
                            <a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="3" data-panel="entry-e">“Ghostboxing from the Attic” broadcast by Gerardo Madera and Bryant Wells</a>
                        </li>
                    </ul>
                </div>

            </main>

            <?php include "footer.php"; ?>
        </div>



</div> <!-- .end of wrapper -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script> window.countDownDate = new Date("Feb 03, 2020 12:00").getTime(); </script>
<script src="script.js"></script>
<script src="js/p5/dec.js"></script>
<script src="js/amplitude.js"></script>

</body>

</html>
