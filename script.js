
$(document).ready(function() {
    Amplitude.setDebug( true );

    var $leftcontent = $('.content--left');
    var $rightcontent = $('.content--right');
    var $right_li = $rightcontent.find('li');

    // if lefr content has class hide-xs
    // copy all data in left content to right content
    if ($leftcontent.hasClass('hide-xs')) {
        var $panel = $('.panel');

        $panel.each(function() {
            var source = $(this).attr('data-panel')
            var html = $(this).html()
            $right_li.each(function() {
                var target = $(this).attr('data-panel')
                //console.log(source, target)
                if (source === target) {
                    $this =$(this);
                    targetEl = $this.find('.song_descr');
                    targetEl.append(html);
                }
            })
        })
    }



    $("body").fadeIn(5500);

    // Set the date we're counting down to
    var countDownDate = window.countDownDate || getMonday();
    // console.log(countDownDate);
    var now = new Date().getTime();

    var $menutoggleactivated = $(".audio-menu").find(".clicked");

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

    // MOBILE MENU TOGGLE {
    $(".menu-icon").on("click", function(){
        $mobilenavlist = $(".mobile-nav-list");

        if ($mobilenavlist.hasClass('hide-xs')) {
            $mobilenavlist.removeClass('hide-xs')
            $mobilenavlist.show();
            $mobilenavlist.addClass('open-xs');
            $('body').addClass('noscroll');
        }
        else {
            $(".mobile-nav-list").addClass('hide-xs');
            $mobilenavlist.removeClass('open-xs');
            $('body').removeClass('noscroll');
        }
    });

    // AUDIO PLAYER
    // set click event to this audio element.
    $(".play-toggle").on("click", function() {
        $webaudio = document.getElementById('main-audio');

        // if paused show play button
        if ( $(".amplitude-play-pause").hasClass('amplitude-paused') ) {
            // if the audiomenu has the class clicked don't play
            // the audio in the top bar.

    		$(".icon-pause").hide();
    		$(".icon-play").show();

            $webaudio.pause();
        }

        // if play show pause button
    	if ($(".amplitude-play-pause").hasClass('amplitude-playing')) {

        	$(".icon-play").hide();
        	$(".icon-pause").show();
            $webaudio.play();
            $webaudio.loop = true;
            if ($menutoggleactivated) {
                console.log(this);
                $webaudio.pause();
                $webaudio.loop = false;
                $menutoggleactivated.play();
                $menutoggleactivated.loop = true;
            }
    	}
    });

    $(".colophon__link").click(function(e) {
        var $this = $(this);
        var $colophon = $this.closest(".colophon");
        $colophon.toggleClass("colophon--active");

        return false;
    });


    $(".audio-menu")
        .find("a")
        .click(function() {
            $webaudio = document.getElementById('main-audio');
            $activeSong = Amplitude.getActiveIndex();
            $metadata = Amplitude.getSongAtIndex( $activeSong );

            // console.log($activeSong);
            // set ticker text to clicked menu item
            // $(".ticker").text($(this).text());
            $(".ticker").text($metadata.name);
            // make ticker to move
            $(".ticker-wrap").addClass("ticker-wrap--active");

            // add class to make link on the right bold
            $(this).addClass('clicked');
            // remove the classnames on the other links
            $('.clicked').not(this).removeClass('clicked');
            var data = $(this).parent().data("panel");
            var leftpanel = $('.content--left').find('[data-panel="' + data + '"]');
            console.log(data);
            var anypanel = $('.content--left').find('.panel.show');

            leftpanel.addClass('show');
            anypanel.not(leftpanel).removeClass('show');
            //pause the initial audio
            $webaudio.pause();
            // $activeSong.loop = true;
            // if paused show play button
            if ( $(".amplitude-play-pause").hasClass('amplitude-paused')) {
                $webaudio.pause();
                $(".icon-pause").hide();
                $(".icon-play").show();
            }

            // if play show pause button
            if ($(".amplitude-play-pause").hasClass('amplitude-playing')) {

                $(".icon-pause").show();
                $(".icon-play").hide();
            }



            // prevent default link action
            return false;
        });


});