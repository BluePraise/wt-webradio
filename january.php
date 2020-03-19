<?php include "head.php";?>
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
        <main class="content--container">

            <div class="content--left">
                <div class="entry-a panel show" data-panel="entry-a">
                    <p>This month’s reading:
                    “Bite, Chew, Eat” from “Lexicon of the Mouth” by Brandon LaBelle.</p>

                    <p>Additional texts in the reader: “Yurokon” by Wilson Harris, “Liner Notes on Lick Piece” by Fred Moten, “Columbus and the Cannibals” by Peter Hulme, “Mother Tongue” by Amy Tan, “Dreaming in Foreign” by Safiya Sinclair, *A Tempest* by Aimé Césaire, “All You Can’t Eat: Derrida’s Course *Rhétorique Du Cannibalisme* (1990–1991)” by David Farrell Krell.</p>
                </div>
                <div class="entry-b panel hide" data-panel="entry-b">
                    <p>This month, we followed the Sonic Meditation “Tumbling Song” until the sound of the sirens went off.</p>
                    <p>Sonic Meditation meetings are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters.</p>
                </div>
                <div class="entry-c panel hide" data-panel="entry-c">
                    <p>Straw Phonation and Collective Gargle led by the WTFPC, followed by a Silent Lunch.
                    Monthly supper, along with other WTFPC activities, can be tracked <a href="https://foodpoeticsclub.werkplaatstypografie.org/">here.</a>.</p>
                </div>

                <div class="entry-d panel hide" data-panel="entry-d">
                    <p>“Title” visual score by Yunie Chae</p>
                    <p></p><!-- Description and Audio by Yuni will come later-->
                </div>
            </div>
            <div class="content--right">
                <ul class="audio-menu">
                    <li>
                        <a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-a">Oral Imaginaries, Strategies and Truths</a>
                    </li>
                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="0" data-panel="entry-b">Sonic Meditation “Tumbling Song”</a></li><!--  [Audio: january-phantomvoices-sonicmeditation.mp3]-->

                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="1" data-panel="entry-c">Food Poetics Club”</a></li><!-- [Audio: january-phantomvoices-silentlunch.mp3] -->

                    <li><a class="js-show-panel amplitude-play-pause" data-amplitude-song-index="2" data-panel="entry-d">“Title” visual score by Yunie Chae</a></li>
                </ul>
            </div>

        </main>

        <?php include "footer.php"; ?>

        </div>


</div> <!-- .end of wrapper -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>window.countDownDate = new Date("Jan 06, 2020 12:00").getTime();</script>
<script src="script.js"></script>
<script src="js/p5/jan.js"></script>
<script src="js/amplitude.js"></script>

</body>

</html>
