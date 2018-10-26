<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HRMS</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="module/bootstrap/css/bootstrap.css">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="app/components/header/header.css">
  <link rel="stylesheet" href="app/components/navbar/navbar.css">

  <link rel="stylesheet" href="app/authentication/login/login.css">
  <link rel="stylesheet" href="app/user/user.css">

  <link rel="stylesheet" href="app/components/footer/footer.css">
  <!-- Scripts -->
  <script src="module/jquery/dist/jquery.js" charset="utf-8"></script>
  <script src="module/bootstrap/js/bootstrap.js" charset="utf-8"></script>
  <!-- Custom Scripts -->
  <script src="assets/js/index.js" charset="utf-8"></script>
  <script src="app/components/header/header.js" charset="utf-8"></script>
  <script src="app/components/navbar/navbar.js" charset="utf-8"></script>



  <script src="app/components/footer/footer.js" charset="utf-8"></script>
</head>
<body>
  <div class="grid-wrapper">
    <?php include 'app/components/header/header.php'?>
    <?php include 'app/components/navbar/navbar.php'?>
    <main>
      <?php
        $pageName = "login";
        $pageName = $_REQUEST['page'];
        switch ($pageName) {
          case 'dashboard':
            include 'app/dashboard/dashboard.php';
            break;
          case 'addUser':
            include 'app/user/addUser.php';
            break;
          case 'login':
            include 'app/authentication/login/login.php';
            break;
          default:
            break;
        }
      ?>
    </main>
    <?php include 'app/components/footer/footer.php'?>
  </div>

</body>
</html>
