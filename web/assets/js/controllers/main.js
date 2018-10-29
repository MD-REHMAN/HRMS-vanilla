define(['jquery'], function( $ ) {
  $(function() {

    // Getting JSON Constants
    $.getJSON( "assets/json/constant.json", function( data ) {
      // Setting Constant in LocalStorage
      localStorage.setItem("constant", JSON.stringify(data.constant));
      // Getting Constant from LocalStorage
      var _constant = JSON.parse(localStorage.getItem('constant'));
    });


  });
});










// Function to set View
// function setView(a) {
//   // $(this)
//   // view = "app/authentication/login/login.php";
//   var view = {data: "dashboard"};
//   // console.log($(a).val());
//   // console.log(view);
//   // $("main").append(view);
//   // console.log($("form"));
//
//   // ajax to route
//   // $.post('../web/index.php', {data: view})
//   $.ajax({
//     method: "POST",
//     url: "http://localhost/Project/HRMS v1.0/web/index.php",
//     data: view
//   })
//   .done(function(data) {
//     console.log("hurry");
//     // $("main").load("app/dashboard/dashboard.php");
//   })
//   .fail(function() {
//     console.log("Wrong Request");
//   });
//
// }
