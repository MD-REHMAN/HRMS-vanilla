<script type="text/javascript">
  require(['componentsCtrl'], function() {
    console.log("navbar - componentsCtrl");
  });
</script>
<aside class="asideLogo">

</aside>
<nav class="navbar leftNav">
  <ul class="navList">
    <li class="navItem active"><a href="index.php?page=dashboard">Dashboard</a></li>
    <li class="navItem"><a href="index.php?page=login">Login</a></</li>
    <!-- <li class="navItem"><a href="index.php?page=addUser">User</a></</li> -->
    <li class="dropdown navItem">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="index.php?page=addUser">Add User</a></</li>
        <li><a href="index.php?page=userList">User List</a></</li>
        <!-- <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li> -->
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">One more separated link</a></li>
      </ul>
    </li>
  </ul>
</nav>
<nav class="leftNavCorner"></nav>
<nav class="rightNavCorner"></nav>
<nav class="navbar rightNav">
  <ul class="navList pull-right">
    <li class="dropdown navItem active">
      <a href="#" class="dropdown-toggle userAvatar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="index.php?page=addUser">Edit Profile</a></</li>
        <li><a href="index.php?page=userList">Something else</a></</li>
        <!-- <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li> -->
        <li role="separator" class="divider"></li>
        <li><a class="logoutLink">Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
<aside class="themeChanger">
  <span class="trigger"></span>
  <span class="themeButton blueLightThemeButton"></span>
  <span class="themeButton moonNightThemeButton"></span>
  <span class="themeButton duskThemeButton"></span>
</aside>

<script id="handlebars-navbar" type="text/x-handlebars-template">
  <div>
    <span>{{firstName}}</span>
  </div>
</script>
