$(function() {
  // var Location = window.location.pathname;
  // console.log(Location);

  // var view = "app/authentication/login/login.php";

  $("")



});
function setView(a) {
  // $(this)
  view = "app/authentication/login/login.php";
  console.log($(a).val());

    $("main").load(view);
}
