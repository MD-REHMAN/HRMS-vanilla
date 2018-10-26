<!-- <section class="addUser">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <form class="form-inline" name="myForm">
            <div class="horizontal-form">
              <h4>Login</h4>
                <div class="form-group">
                  <label for="firstName">First Name:</label>
                  <input type="text" class="form-control" placeholder="First Name" name="firstName" required>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name:</label>
                  <input type="text" class="form-control" laceholder="Last Name" name="lastName" required>
                </div><br><br>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" laceholder="Enter password" name="password" required>
                </div><br><br>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" laceholder="Enter password" name="password" required>
                </div><br><br>
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div><br><br>
                <button class="btn btn-default submitBtn">Submit</button>
              <h3>Resume</h3>
              <span class="horizontal-ruler"></span>
              <label class="upload-btn"> Upload Resume
                <input type="file">
              </label>
              <h3>Declaration</h3>
              <span class="horizontal-ruler"></span>
              <input type="checkbox" name="agree" value="agree"> I here by declare that above information is correct.
              <br><br>
              <button class="btn btn-default submitBtn">Submit</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</section> -->
<br>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
       <p class="viewHeading"><strong>Add User</strong></p>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right breadCrumbStyle">
        <p>Users / Add User</p>
    </div>
</div>

<section class="viewBody">
        <form name="addUserForm" class="form-horizontal" ng-class="{'has-error' : addUserForm.$invalid, 'has-success' : addUserForm.$valid}" ng-submit="addOrEditUser()">
            <div class="panel-heading panelHeader">
                <h4><strong>User Details</strong></h4>
            </div>
            <div class="panel-body panelBody">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">First Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="firstName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">Last Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="lastName" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">Email:</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">Mobile Number:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="telNumber" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">Confirm Password:</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="confirmPassword" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-11">
                                        <select class="form-control" name="branch" required>
                                          <option value="" disabled>Branch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-11">
                                        <select class="form-control" name="department" required>
                                          <option value="" disabled>Department</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-11">
                                        <select class="form-control" name="role" required>
                                          <option value="" disabled>Role</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn submitBtn">Submit</button>
                <button type="button" class="btn cancelBtn" href="index.php?page=addUser">Cancel</button>
            </div>
        </form>

</section>
<script src="app/user/user.js" charset="utf-8"></script>
