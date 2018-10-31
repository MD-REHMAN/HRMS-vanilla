<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HRMS</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/module/bootstrap/css/bootstrap.css">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="app/components/header/header.css">
  <link rel="stylesheet" href="app/components/navbar/navbar.css">

  <link rel="stylesheet" href="app/authentication/login/login.css">
  <link rel="stylesheet" href="app/user/user.css">

  <link rel="stylesheet" href="app/components/footer/footer.css">
  <!-- RequireJS -->
  <script src="assets/js/require.js" charset="utf-8"></script>
  <script src="assets/js/config.js" charset="utf-8"></script>

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
          case 'userList':
            include 'app/user/userList.php';
            break;
          case 'addPaySlip':
            include 'app/paySlip/addPaySlip.php';
            break;
          case 'paySlipList':
            include 'app/paySlip/paySlipList.php';
            break;
          case 'addLeaveRequest':
            include 'app/leaveRequest/addLeaveRequest.php';
            break;
          case 'leaveRequestList':
            include 'app/leaveRequest/leaveRequestList.php';
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
