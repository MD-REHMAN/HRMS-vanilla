$(function() {
  // Varible Declaration
  var loginData = {
    email: "ironman17@gmail.com",
    password: "pass"
  };

  $.ajax({
    method: "POST",
    url: "http://localhost/Project/HRMS v1.0/api/user/user2.php",
    data: JSON.parse(loginData),
    dataType: "json"
  })
  .done(function(data) {
    console.log(data);
  })
  .fail(function(error) {
    console.log(error);
  });

});
