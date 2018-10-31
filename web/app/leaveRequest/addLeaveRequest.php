<br>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <p class="viewHeading"><strong>Request Leave</strong></p>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-6 text-right breadCrumbStyle">
    <p>Users / Request Leave</p>
  </div>
</div>

<section class="viewBody">
  <form name="addUserForm" class="form-horizontal" ng-class="{'has-error' : addUserForm.$invalid, 'has-success' : addUserForm.$valid}" ng-submit="addOrEditUser()">
    <div class="panel-heading panelHeader">
      <h4><strong>Request Leave</strong></h4>
    </div>
    <div class="panel-body panelBody">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <div class="col-md-11">
                  <select class="form-control" name="leaveType" required>
                    <option value="" selected disabled>Type</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <!-- <label class="col-md-4 control-label">Email:</label> -->
                <div class="col-md-12">
                  <textarea class="form-control" name="reason" rows="4" placeholder="Reason" required></textarea>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="col-md-11">
                  <input type="date" class="form-control" name="dateTo" placeholder="Date To" required></input>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-11">
                  <input type="date" class="form-control" name="dateFrom" placeholder="Date From" required></input>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-11">
                  <input type="number" class="form-control" name="numOfDays" placeholder="Number Of Days" required></input>
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
