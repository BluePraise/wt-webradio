<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>An Phantom Voices</title>
    <meta name="author" content="Werkplaats Typgrafie Arnhem">
    <link href="https://fonts.googleapis.com/css?family=Caudex:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>

    <script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>

</head>

<body>
    <div class="wrapper">
        <header class="mast-head">
            <div class="topbar">
                <div class="topbar--left">
                    <div class="play-toggle">
                        <audio class="player">
                            <source src="audiofile.mp3" type="audio/mp3"></audio>
                        <img id="play" class="icon-play" src="icon-play.svg" alt="play icon">
                        <img id="pause" class="icon-pause" src="icon-pause.svg" alt="play icon">

                    </div>
                    <div class="play--title">
                        SONIC MEDITATIONS (SINGING WITH THE
                    </div>

                </div>
                <div class="topbar--right">
                    <div class="counter"></div>
                </div>
            </div>
