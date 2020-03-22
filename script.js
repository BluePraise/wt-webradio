
$(document).ready(function() {

    // $("body").fadeIn(5500);

    // Set the date we're counting down to
    var countDownDate = window.countDownDate || getMonday();
    // console.log(countDownDate);
    var now = new Date().getTime();

    function getMonday() {
        var d = new Date(),
            monday;

        d.setDate(1);

        // Get the first Monday in the month
        while (d.getDay() !== 1) {
            monday = d.setDate(d.getDate() + 1);
        }

        if (monday < Date.now()) {
            d.setMonth(d.getMonth() + 1);
            d.setDate(1);
            while (d.getDay() !== 1) {
                monday = d.setDate(d.getDate() + 1);
            }
        }

        return monday;
    }

    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = Date.now();
        var isPassed = false;

        if (now > countDownDate) {
            isPassed = true;
        }

        // Find the distance between now and the count down date
        var distance = isPassed ? now - countDownDate : countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        // Display the result in the element with id="demo"
        if (isPassed) {
            $(".counter").text(
                "THIS SESSION WAS " +
                days +
                " DAYS~" +
                hours +
                " HOURS~" +
                minutes +
                " MINUTES AGO"
            );
        } else {
            $(".counter").text(
                "NEXT SESSION IN " +
                days +
                " DAYS~" +
                hours +
                " HOURS~" +
                minutes +
                " MINUTES "
            );
        }

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $(".counter").innerHTML = "EXPIRED";
        }
    }, 1000);

    // AUDIO PLAYER
    // hide the pause button
    $(".icon-play").hide();

    // set click event to this audio element.
    $(".play-toggle").on("click", function() {
        // play the audio
        // show the pause icon
        $(".icon-pause").show();
        $(".icon-play").hide();

    });

    $(".play-toggle").on("click", function(){
    	$(".icon-pause").hide();
        $(".icon-play").show();
    });

    if ( $(".amplitude-play-pause").hasClass('amplitude-paused')) {

		$(".icon-play").hide();
		$(".icon-pause").show();
    }
	if ($(".amplitude-play-pause").hasClass('amplitude-playing')) {

    	$(".icon-pause").hide();
    	$(".icon-play").show();
	}

    $(".colophon__link").click(function(e) {
        var $this = $(this);
        var $colophon = $this.closest(".colophon");
        $colophon.toggleClass("colophon--active");

        return false;
    });


    $(".audio-menu")
        .find("a")
        .click(function() {

            // set ticker text to clicked menu item
            $(".ticker").text($(this).text());
            // make ticker to move
            $(".ticker-wrap").addClass("ticker-wrap--active");

            // add class to make link on the right bold
            $(this).addClass('clicked');
            // remove the classnames on the other links
            $('.clicked').not(this).removeClass('clicked');
            var data = $(this).data("panel");
            var leftpanel = $('.content--left').find('[data-panel="' + data + '"]')
            var anypanel = $('.content--left').find('.panel.show');

            leftpanel.addClass('show');
            anypanel.not(leftpanel).removeClass('show');

            // prevent default link action
            return false;
        });

    $('.play-pause').click(function(e) {
        console.log("hi");
        var $audio = document.getElementById("main-audio");
        if(!$audio.paused && !$audio.ended) {
            console.log("boo");
            $audio.pause();
        }
        else if ($audio.paused) {
            $audio.play();
        }
        return false;
    });

});