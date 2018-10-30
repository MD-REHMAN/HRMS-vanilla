<br>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
       <p class="viewHeading"><strong>Add User</strong></p>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right breadCrumbStyle">
        <p>Users / Add User</p>
    </div>
</div>

<section class="userList">
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Tel Number</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  <!-- <div class="align-content-right">
    <a href="list.html" class="next-btn">Next</a>
  </div> -->
</section>
<script id="handlebars-userList" type="text/x-handlebars-template">
  {{#each .}}
  <tr>
    <td>{{id}}</td>
    <td>{{firstName}}</td>
    <td>{{lastName}}</td>
    <td>{{email}}</td>
    <td>{{telNumber}}</td>
  </tr>
  {{/each}}
</script>
