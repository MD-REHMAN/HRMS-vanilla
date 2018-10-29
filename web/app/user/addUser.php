<script type="text/javascript">
  require(['userCtrl'], function() {
    console.log("addUser - userCtrl");
  });
</script>
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
                                          <option value="" selected disabled>Branch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-11">
                                        <select class="form-control" name="department" required>
                                          <option value="" selected disabled>Department</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-11">
                                        <select class="form-control" name="role" required>
                                          <option value="" selected disabled>Role</option>
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
