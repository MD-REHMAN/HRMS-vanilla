$(function() {

  $.getJSON( "assets/json/constant.json", function( data ) {
    // console.log(data.constant);
    // console.log(data.constant.role[1]);
    // Setting Constant in LocalStorage
    localStorage.setItem("constant", JSON.stringify(data.constant));
    // Getting Constant in LocalStorage
    var _constant = JSON.parse(localStorage.getItem('constant'));
    console.log(_constant);
  });

});
function setView(a) {
  // $(this)
  view = "app/authentication/login/login.php";
  console.log($(a).val());
  console.log(view)

    $("main").load(view);
}
