<script type="text/javascript">
  require(['authCtrl'], function() {
    console.log("Login - authCtrl");
  });
  // require(['config'], function() {
  //   console.log("Index - config");
  //   require(['authCtrl'], function() {
  //     console.log("Auth - dsadad");
  //   });
  // });
</script>
<div class="col-xs-3 col-md-4 col-lg-5"></div>
<section class="col-xs-6 col-md-4 col-lg-2 login">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <h4>Login</h4>
        <form name="loginForm">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" laceholder="Enter password" name="password" required>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <button class="btn btn-default submitBtn">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<div class="col-xs-3 col-md-4 col-lg-5"></div>
