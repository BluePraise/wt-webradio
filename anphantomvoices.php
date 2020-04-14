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
                <div class="play-pause-special amplitude-play-pause">
                    <img id="play" class="icon-play" src="icon-play.svg" alt="play icon">
                    <img id="pause" class="icon-pause" src="icon-pause.svg" alt="play icon">

                </div>
                <audio id="main-audio" autoplay preload>
                    <source src="https://projects.magalielinda.me/anphantomvoices/audio/dec/december-phantomvoices-intro.mp3" type="audio/mpeg">
                </audio>
                <div class="play--title">
                    <div class="ticker-wrap">
                    <div class="ticker">“AN PHANTOM VOICES” by TABEA NIXDORFF and GERARDO MADERA</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>

<div id="p5js-anphantomvoices" class="canvas-container"></div>

<div class="full-height">

    <header>

        <nav class="main-nav">
            <ul>
                <li><a class="active main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                <li><a href="december.php">December</a></li>
                <li><a href="january.php">January</a></li>
                <li><a href="february.php">February</a></li>
                <li><a href="march.php">March</a></li>
                <li><a href="april.php">April</a></li>
                <li><a href="may.php">May</a></li>
                <li><a href="june.php">June</a></li>
            </ul>
        </nav>
    </header>

    <main class="content--container__basic">
        <div class="content--txt content--left">
            <h3 class="title">AN PHANTOM VOICES</h3>
            <p>When we learn to read, we unlearn to involve our voice. To read aloud means to become bodily involved with text again. When to breathe? In silence, we in- and exhale paragraphs without getting thirsty. Your voice lifts for what [question mark]</p>
            <p>Voice, as an immediate medium for language, physically resonates—those who are deaf know best that perceiving sound means touch, means feeling vibration—connecting us to our bodies and their experiences, ­because voice is infected, not only by our mother tongues but through countless socio-political linguistic markers. So, when we speak, we express much more than what we mean to say. These other layers are often overheard, since our idea of listening is attuned to our idea of reading, constantly “making sense” of words as part of a shared language, that is to say, of a culturally and nationally charged system of codes. However, we cannot erase the biographical textures interwoven in a text when we read aloud. “Listening to everything, rather than just speech”<span class="footnote">1</span> could lead to something like a deconstruction of the domesticated voice, the linear text, which could also provoke a new perception of reading.</p>
            <p>A real reader is a writer<span class="footnote">2</span></p>
            <p>Allowing a justified text to be complicated by our own references, situational biases and mental leaps while reading, makes way for non-linear narratives to evolve and reproduce. We hope to explore the liminal space of reading as writing, listening as speaking, when the voice performs both externally expected language and internally provoked utterances—to unsettle the idea of a “shared language.”</p>
            <p>Take the word “siren”—in many languages signifying the same: a warning in the form of sound. When the siren goes off, we are expected to be alert, to escape peril, or stand still. However, when looking at the etymology, it turns out, what echoes in the word is
            a deeply embedded fear of the female voice. In Greek mythology sirens are women, who were cursed to become creatures half human, half bird. They are marooned on islands and petrify men with their “seductive” singing. Men are warned not to approach them.
            </p>
            <p>Voices from the Air<span class="footnote">3</span></p>
            <p>How high can language float? Here (Arnhem, the Netherlands), there are monthly sirens that draw a sonic signature in the air, echoing onto our bodies. Nation states have a way of reminding us of the ground we stand on, of the command they have over us, mostly through language, other times rhetorique, but also through sound. The alert of a siren,
            or of any sound—the responses elicited, or expected by them—also alert us to histories of foregone consensus. “An Phantom Voices” is an exercise in insertion, an air-borne intervention. What could a “Deep Listening” of the sirens sound like?
            </p>
            <div class="flex-table">
                <div class="col">
                    <div class="cell">Voice</div>
                    <div class="cell">Your <br> voices</div>
                    <div class="cell">(body)</div>
                </div>
                <div class="col">
                    <div class="cell">Text</div>
                    <div class="cell">A <br> text</div>
                    <div class="cell">(Language)</div>
                </div>
                <div class="col">
                    <div class="cell">Motion</div>
                    <div class="cell">How to <br> read?</div>
                    <div class="cell">(Time)</div>
                </div>
                <div class="col">
                    <div class="cell">Score</div>
                    <div class="cell">How to <br> transcribe?</div>
                    <div class="cell">(Material)</div>
                </div>

            </div>
            <p>This Listening That I Give as Well as Through Which I Take<span class="footnote">4</span></p>
            <p>A subwoofer enclosure—usually wooden, box-like—is meant to separate the front end of the speaker driver with the rearward-facing end of the speaker driver. The sound generated by the front and rear-end phase each other out. The subwoofer enclosure is then meant to muffle the back of the driver, countering the would-be distortion if front and back were to project freely. The sound waves from each end also deviate in direction, the enclosure is meant to negate, reduce, at the service of producing a deceptively singular sound.</p>
            <p>Like the frame of a stereoscope, a subwoofer enclosure presents a perceived singularity from an inherent plurality. Ironic though, how the word “audio,” as Micah Silver puts it, can be best understood as plural: “It is neither one thing or a category of a thing.”<span class="footnote">5</span> To listen then, is to parse, to find the inherent multiplicities of this thing we call audio. An active listener, listens not to necessarily record, but to instead find the recording already embedded in what’s being heard.<span class="footnote">6</span></p>
            <p>Listening can be understood as “tuning in.” Part of our everyday lexicon, to tune in, “to pay attention to, become aware of, or be responsive,” is a phrase indoctrinated by the advent of radio. As Mark Wigley puts it, “We tune in to spaces rather than simply occupy them.” Turning a radio dial—just as listening does—implies space; radiation ferrying itself through signal-filled airways, transmitting to a willful receiver. Listening—regardless if it’s mediated through transmission—whether it’s to a loved one, a passerby on the street, a speech, a piece of music, produces a site, a set of relations between ourselves and the subject being listened to. To tune in is to exchange space.
            </p>
            <p>“This listening that I give as well as through which I take.” When we listen, we broadcast by inserting ourselves into a collective exchange. How we listen then, and what we listen for—against the backdrop of the overheard, of those who dominate and oppress our society—can become a radical act of desire. An active listener reproduces what’s heard through action. To hear then, to listen, is to in fact give voice to something.
            </p>
            <ol class="footnotes">
                <li>Pauline Oliveros in an interview on Radiance: Meditation Talk Show, 2016</li>
                <li>Hélène Cixous, “Three Steps on the Ladder of Writing,” 21.</li>
                <li>Adrienne Rich. “Essential Essays: Culture, Politics, and the Art of Poetry,” 253.</li>
                <li>Brandon LeBelle, “Sonic Agency: Sound and Emergent Forms of Resistance,” 2018</li>
                <li>Micah Silver, “Figures in Air,” 2014</li>
                <li>See: “Other Dimensions in Music, Ghost-catching by Fred Moten and “Words Don't Go There: An Interview with Fred Moten” by Charles H. Rowell and Fred Moten.</li>
            </ol>
        </div>

        <div class="content--txt content--left">
            <h3 class="title">A series of events</h3>
            <p>“An Phantom Voices” is a programming platform, initiated by Gerardo Madera and Tabea Nixdorff, active from December 2019 through June 2020 at the Werkplaats Typografie in Arnhem, the Netherlands. A series of events take place every first Monday (demarcated by Arnhem’s monthly sirens) through Friday of the month. All is broadcasted on Phantom Radio, the radio plattform of Werkplaats Typografie.</p>
            <p>Each month is supplemented by a reader organized by topic, addressing different uses, strategies and implications of orality. The readers are a collection of texts, meant to be  non-canonical—to be cross(mis, counter, close)-read. Topically and referentially, the readers are points of departure, materials or resources for participants’ own research.</p>
            <p>Selecting either a sonic contribution or visual score as their output, participants of the Werkplaats Typografie respond to the various thematic propositions “An Phantom Voices” has to offer.</p>
            <p>Besides the contributions by participants and collective readings, there are other activities that reoccur every month, such as Sonic Meditations guided by Tabea Nixdorff. Sonic Meditation meetings are inspired by Pauline Oliveros, who introduced them as non-verbal group work, as a way of attuning yourself to others, through one's own voice as well as exercising to listen to each other without the pressure of daily speech, often being marked by gendered parameters. A carpet, developed by Nicha Keeratiphanthawong and Tabea Nixdorff, provides structural support for this activity, of which “music is a welcome by-product.”</p>
            <p>The WT Food Poetics Club supplies the “An Phantom Voices” weeks with exercises during shared meals, such as Straw Phonation and Collective Gargle, followed by a Silent Lunch, as well as Incorporation Rituals hosted by invited guests. WT Food Poetics Club is initiated by Gerardo Madera. Activities can be tracked <a class="content-link" target="_blank" href=https://foodpoeticsclub.werkplaatstypografie.org/>here</a>.</p>
            <p>To allow room for more general approaches to the reader prompts, each "An Phantom Voices" week concludes with an Intermezzo, an evening gathering for spontaneous sonic encounters.</p>
        </div>
    </main>

    <?php include "footer.php"; ?>
</div>
</div> <!-- .end of wrapper -->

<script> window.countDownDate = new Date("Nov 04, 2019 12:00").getTime(); </script>
<script src="script.js"></script>
<script src="js/p5/anphantomvoices.js"></script>

</body>

</html>

