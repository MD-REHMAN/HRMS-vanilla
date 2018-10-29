define(['jquery'], function($) {

  $(function() {
    // Varible Declaration
    var loginData = {
    };


    // var loginData = {
    //   Filter: "where email='ironman17@gmail.com'",
    //   Operation: "Login",
    //   firstName: "Tony",
    //   lastName: "Stark",
    //   email: "ironman17@gmail.com",
    //   password: "pass",
    //   telNumber: "7845963214",
    //   role: 0,
    //   department: 0,
    //   branch: 0
    // };

    $('.submitBtn').click(function (e) {
      e.preventDefault();
      //ajax call here
      var loginData = {
        Operation: "Login",
        email: $("input[name=email]").val(),
        password: $("input[name=password]").val()
      };
      loginData = JSON.stringify(loginData);
      $.ajax({
        method: "POST",
        url: "http://localhost/Project/HRMS v1.0/api/user/user2.php",
        data: loginData,
        dataType: "json"
      })
      .done(function(data) {
        console.log("welcome");
        window.location.href="index.php?page=dashboard";
      })
      .fail(function() {
        console.log("Incorrect email or password");
      });
    });


    // Login Function
    // function authenticationUser (e) {
    //   e.preventDefault();
    //    //ajax call here
    //    alert( $("input[name=email]").val() );
    //
    //    loginData = JSON.stringify(loginData);
    //    $.ajax({
    //      method: "POST",
    //      url: "http://localhost/Project/HRMS v1.0/api/user/user2.php",
    //      data: loginData,
    //      dataType: "json"
    //    })
    //    .done(function(data) {
    //      console.log("Welcome to HRMS");
    //    })
    //    .fail(function() {
    //      console.log("Incorrect email or password");
    //    });
    // }
  });
});
