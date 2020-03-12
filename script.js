$(document).ready(function() {
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

  // ACCORDION
  $(".accordion--toggle").on("click", function() {
    $(this).toggleClass("active");
    $(this)
      .next()
      .toggle();

    // find the List Item that's been activated
    li = $(this).closest("li");
    li.toggleClass("grow");
  });

  // AUDIO PLAYER
  // hide the pause button
  $(".icon-pause").hide();
  // $("audio").play();
  // find the audio element
  // var audio = $('.player');

  // set click event to this audio element.
  $(".icon-play").on("click", function() {
    // play the audio

    // show the pause icon
    $(".icon-pause").show();
  });

  $(".colophon__link").click(function(e) {
    var $this = $(this);
    var $colophon = $this.closest(".colophon");
    $colophon.toggleClass("colophon--active");

    return false;
  });

  function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
  }

  $(".audio-menu")
    .find("a")
    .click(function() {
      // set ticker text to clicked menu item
      $(".ticker").text($(this).text());
      // make ticker to move
      $(".ticker-wrap").addClass("ticker-wrap--active");

      // prevent default link action
      return false;
    });
});
