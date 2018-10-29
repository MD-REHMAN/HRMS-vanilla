define(['jquery'], function($) {
  $(function() {
    // Variable Declaration


    // Theme Changer
    $(".moonNightThemeButton").click(function () {
      $("html").removeClass().addClass("moonNight");
    });
    $(".blueLightThemeButton").click(function () {
      $("html").removeClass().addClass("blueLight");
    });
    $(".duskThemeButton").click(function () {
      $("html").removeClass().addClass("dusk");
    });

    function open() {
      $.each($(".themeButton"), function( index, value ) {
        var move = (index+1) * 7;
        $(value).animate({right: move+"px"}, {queue: false, duration: 300});
        $(value).css("z-index", 10-index);
      });
    };
    function close() {
      $.each($(".themeButton"), function( index, value ) {
        var move = (index+1) * 35;
        $(value).animate({right: move+"px"}, {queue: false, duration: 300});

      });
    };
    $(".trigger").click(function() {
      return (this.tog = !this.tog) ? close() : open();
    });



    // $(".blueLightThemeButton").mouseenter(function () {
    //   $(".moonNightThemeButton").animate({right: "35px"}, {queue: false, duration: 300});
    //   $(".duskThemeButton").animate({right: "70px"}, {queue: false, duration: 300});
    // });
    // $(".themeChanger").mouseleave(function () {
    //   $(".duskThemeButton").animate({right: "20px"});
    //   $(".moonNightThemeButton").animate({right: "10px"});
    // });
  });
})
