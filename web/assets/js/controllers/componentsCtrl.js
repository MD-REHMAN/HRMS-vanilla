define(['jquery', 'handlebars'], function($, Handlebars) {
  $(function() {
    // Variable Declaration
    var loggedUser;
    var handlebars_navbar = $("#handlebars-navbar").html();
    var handlebarsScript;
    var compiled_handlebarsScript;
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


    // Logout Functionality
    console.log($(".logoutLink").parent());
    $(".grid-wrapper").on('click', '.logoutLink', function() {
      localStorage.removeItem("loggedUser");
      console.log("User Logout");
      // setNavbar();
      window.location.search = '?page=login'
    });

    // User Name
    // $(".rightNav").find(".navItem").click(function() {
    //   console.log(this);
    //   this.innerHTML = "";
    //   $(this).css({"height": "4rem", "width": "4rem"});
    //   // $(this).animate({})
    // });
    // console.log("New Test");
    // console.log($(handlebars_navbar).html());
    setNavbar();
    function setNavbar() {
      loggedUser = JSON.parse(localStorage.getItem('loggedUser'))
      handlebarsScript = $(handlebars_navbar).html();
      compiled_handlebarsScript = Handlebars.compile(handlebarsScript);
      // console.log(compiled_handlebarsScript({firstName: "Tony"}));
      // $(".grid-wrapper").prepend(compiled_handlebarsScript({firstName: "Tony"}));
      console.log(loggedUser);
      $(".grid-wrapper").prepend(compiled_handlebarsScript(loggedUser));
    }

  });
})
