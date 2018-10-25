<section class="addUser">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <form action="" name="myForm">
            <div class="horizontal-form">
              <h3>Personal Details</h3>
              <span class="horizontal-ruler"></span>
              <fieldset>
                <input type="text" name="firstName" placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
              </fieldset>
              <fieldset>
                <input type="email" name="email" placeholder="Email">
                <input type="tel" name="telNumber" placeholder="Tel Number">
              </fieldset>
              <fieldset>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirmPassword" placeholder="Confirm Password">
              </fieldset>
              <h3>Resume</h3>
              <span class="horizontal-ruler"></span>
              <label class="upload-btn"> Upload Resume
                <input type="file">
              </label>
              <h3>Declaration</h3>
              <span class="horizontal-ruler"></span>
              <input type="checkbox" name="agree" value="agree"> I here by declare that above information is correct.
              <br><br>
              <input type="button" value="Submit" onclick="validateForm(myForm)">
            </div>
          </form>
      </div>
    </div>
  </div>
</section>
