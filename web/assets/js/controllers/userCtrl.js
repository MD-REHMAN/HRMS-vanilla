define(['jquery', 'handlebars'], function($, Handlebars) {
  $(function() {
    // Variable Declaration
    var setCtrl = window.location.search;
    var selectItem = {};
    var tableData = {};
    var tableHtmlData = "";
    var listData = {
      Filter: "",
      Operation: "GetUser"
    }
    var userData = {
      firstName: "",
      lastName: "",
      email: "",
      telNumber: "",
      password: "",
      branch: 0,
      department: 0,
      role: 0
    };

    // Getting Constant from LocalStorage
    var _constant = JSON.parse(localStorage.getItem('constant'));

    switch (setCtrl) {
      case '?page=addUser':
        // Add User Controller
        // Select element are filled
        var branch = $('select[name=branch]');
        var department = $('select[name=department]');
        var role = $('select[name=role]');
        $.fn.fillSelectItem = function() {
          // Appending Function
          var appendSelectItem = function(key, value) {
            $(this).append($("<option value=" + value + "></option>").text(key));
          };
          // selectItem = _constant.$(this).attr('name');
          switch ($(this).attr('name')) {
            case 'branch':
              selectItem = _constant.branch;
              selectItem.forEach(appendSelectItem.bind(branch));
              break;
            case 'department':
              selectItem = _constant.department;
              selectItem.forEach(appendSelectItem.bind(department));
              break;
            case 'role':
              selectItem = _constant.role;
              selectItem.forEach(appendSelectItem.bind(role));
              break;
            default:
              console.log("wrong");
              break;
          }
        };
        branch.fillSelectItem();
        department.fillSelectItem();
        role.fillSelectItem();

        // Adding user
        $('.submitBtn').click(function(e) {
          e.preventDefault();
          $.each(userData, function(key, value) {
            // console.log("input[name="+key+"]");
            if (key == 'branch' || key == 'department' || key == 'role') {
              userData[key] = $("select[name=" + key + "]").val();
            } else {
              userData[key] = $("input[name=" + key + "]").val();
            }
          });
          userData.Operation = "Register";
          console.log(userData);
          userData = JSON.stringify(userData);

          console.log(userData);
          $.ajax({
              method: "POST",
              url: "http://localhost/Project/HRMS v1.0/api/user/user2.php",
              data: userData,
              dataType: "json"
            })
            .done(function(data) {
              console.log("welcome");
              window.location.href = "index.php?page=dashboard";
            })
            .fail(function() {
              console.log("Incorrect email or password");
            });
          // userData.firstName = $("input[name=firstName]")
        });
        break;
      case '?page=userList':
        // UserList List
        function createTableStructure() {
          for (i = 0; i < tableData.length; i++) {
            tableHtmlData = tableHtmlData + "<tr><td>" + tableData[i].id + "</td><td>" + tableData[i].firstName + "</td><td>" + tableData[i].lastName + "</td><td>" + tableData[i].email + "</td><td>" + tableData[i].telNumber + "</td></tr>";
          }
          $("tbody").append(tableHtmlData);
        }
        function createTableStructure_handlebars() {
          handlebarsScript = $('#handlebars-userList').html();
          // console.log($('#handlebars-userList').html());
          compiled_handlebarsScript = Handlebars.compile(handlebarsScript);
          //   console.log(tableData);
          //   console.log(compiled_handlebarsScript);
          // console.log(compiled_handlebarsScript(tableData));
          $("tbody").append(compiled_handlebarsScript(tableData));
        }
        // Getting User
        listData = JSON.stringify(listData);
        $.ajax({
            method: "POST",
            url: "http://localhost/Project/HRMS v1.0/api/user/user2.php",
            data: listData,
            dataType: "json"
          })
          .done(function(data) {
            // console.log(data);
            tableData = data;
            // createTableStructure();
            createTableStructure_handlebars();
          })
          .fail(function() {
            console.log("Incorrect email or password");
          });
        break;
      }
  });
});
