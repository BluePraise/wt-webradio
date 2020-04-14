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
                    <!-- <audio id="main-audio" autoplay preload>
                        <source src="/audio/may/may-phantomvoices-sonicmeditation.mp3" type="audio/mpeg">
                    </audio> -->
                </div>
                <div class="play--title">
                    <div class="ticker-wrap">
                    <div class="ticker">SONIC MEDITATIONS (SINGING WITH THE SIRENS)</div>
                    </div>
                </div>
            </div>
            <div class="topbar--right">
                <div class="counter"></div>
            </div>
        </div>



<div id="p5js-may" class="canvas-container"></div>
<div class="full-height">
    <header class="mast-head">
        <nav class="main-nav">
            <ul>
                <li><a class="main-title" href="anphantomvoices.php">An Phantom Voices</a></li>
                <li><a href="december.php">December</a></li>
                <li><a href="january.php">January</a></li>
                <li><a href="february.php">February</a></li>
                <li><a href="march.php">March</a></li>
                <li><a href="april.php">April</a></li>
                <li><a class="active" href="may.php">May</a></li>
                <li><a href="june.php">June</a></li>
            </ul>
        </nav>
    </header>

    <main class="content--container may">
        <div class="counter"></div>

        <!-- <div class="content--left content--txt">

        </div>
        <div class="content--right">
            <ul class="audio-menu">
                <li>
                    <a>MARGINS AS THE SILENT SILENCED CENTER</a>

                </li>
                <li><a>SONIC MEDITATIONS (SINGING WITH THE SIRENS)</a>
                </li>
                <li>

                </li>
                <li>

                </li>
            </ul>
        </div> -->

    </main>

    <?php include "footer.php"; ?>

</div>

</div> <!-- .end of wrapper -->

    <script> window.countDownDate = new Date("May 04, 2020 12:00").getTime(); </script>
    <script src="script.js"></script>
    s<script src="js/p5/may.js"></script>
</body>

</html>
