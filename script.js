$(document).ready(function() {

    // Set the date we're counting down to
    var countDownDate = new Date("Mar 02, 2020 12:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        // Display the result in the element with id="demo"
        $(".counter").text("NEXT SESSION IN " + days + " DAYS~" + hours + " HOURS~" + minutes + " MINUTES ");

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $(".counter").innerHTML = "EXPIRED";
        }
    }, 1000);

    // ACCORDION
    $('.accordion--toggle').on('click', function() {
        $(this).toggleClass('active');
        $(this).next().toggle();

        // find the List Item that's been activated
        li = $(this).closest('li');
        li.toggleClass('grow');
    });

    // AUDIO PLAYER
    // hide the pause button
    $('.icon-pause').hide();
    $('audio').play();
    // find the audio element
    // var audio = $('.player');

    // set click event to this audio element.
    $('.icon-play').on('click', function() {
    	// play the audio

    	// show the pause icon
    	$('.icon-pause').show();
    });

})

