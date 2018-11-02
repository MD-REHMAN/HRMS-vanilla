define(['jquery'], function($) {
  $(function() {
    // console.log("I'm working");
    // Getting Constant from LocalStorage
    var _constant = JSON.parse(localStorage.getItem('constant'));
    var _loggedUser = JSON.parse(localStorage.getItem('loggedUser'));
    // Variable Declaration
    var setCtrl = window.location.search;
    var selectItem = {};
    var tableData = {};
    var tableHtmlData = "";
    var listData = {
      Filter: "",
      Operation: "GetLeaveRequest"
    }
    var leaveRequestData = {
      leaveType: "",
      reason: "",
      dateFrom: "",
      dateTo: "",
      numOfDays: ""
    };
    var statusData = {
      Operation: "ManageLeaveRequest",
      updatedBy: _loggedUser.id
    };


    switch (setCtrl) {
      case '?page=addLeaveRequest':
        // Add User Controller
        // Select element are filled
        var leaveType = $('select[name=leaveType]');
        $.fn.fillSelectItem = function() {
          // Appending Function
          var appendSelectItem = function(key, value) {
            $(this).append($("<option value=" + value + "></option>").text(key));
          };
          // selectItem = _constant.$(this).attr('name');
          switch ($(this).attr('name')) {
            case 'leaveType':
              // console.log(_constant.leaveType);
              selectItem = _constant.leaveType;
              selectItem.forEach(appendSelectItem.bind(leaveType));
              break;
            default:
              console.log("wrong");
              break;
          }
        };
        leaveType.fillSelectItem();

        // Adding user
        $('.submitBtn').click(function(e) {
          e.preventDefault();
          $.each(leaveRequestData, function(key, value) {
            // console.log("input[name="+key+"]");
            if (key == 'leaveType') {
              leaveRequestData[key] = $("select[name=" + key + "]").val();
            } else if (key == 'reason') {
              leaveRequestData[key] = $("textarea[name=" + key + "]").val();
            } else {
              leaveRequestData[key] = $("input[name=" + key + "]").val();
            }
          });
          leaveRequestData.Operation = "RequestLeave";
          leaveRequestData.createdBy = _loggedUser.id;
          leaveRequestData.status = 0;

          console.log(leaveRequestData);
          leaveRequestData = JSON.stringify(leaveRequestData);

          console.log(leaveRequestData);
          $.ajax({
              method: "POST",
              url: "http://localhost/Project/HRMS v1.0/api/leaveRequest/leaveRequest.php",
              data: leaveRequestData,
              dataType: "json"
            })
            .done(function(data) {
              console.log("welcome");
              window.location.href = "index.php?page=dashboard";
            })
            .fail(function() {
              console.log("Something is wrong");
            });
          // leaveRequestData.firstName = $("input[name=firstName]")
        });
        break;
      case '?page=leaveRequestList':
        // UserList List
        function createTableStructure_handlebars() {
          // handlebarsScript = $('#handlebars-userList').html();
          // compiled_handlebarsScript = Handlebars.compile(handlebarsScript);
          // $("table").append(compiled_handlebarsScript(tableData));
          tableData.role = 1;
          compiled_handlebarsScript = Handlebars.templates['leaveRequest-template'](tableData);
          $("table").append(compiled_handlebarsScript);
        }
        // Getting User
        listData = JSON.stringify(listData);
        $.ajax({
            method: "POST",
            url: "http://localhost/Project/HRMS v1.0/api/leaveRequest/leaveRequest.php",
            data: listData,
            dataType: "json"
          })
          .done(function(data) {
            // console.log(data);
            tableData = data;
            createTableStructure_handlebars();
          })
          .fail(function() {
            console.log("Incorrect email or password");
          });

          // Accept and Reject Leave Request
          $(".grid-wrapper").on("click",".approveBtn", function(e) {
            e.preventDefault();
            // console.log($(this).attr("value"));
            // console.log(tableData[$(this).attr("value")]);
            selectedRequest = tableData[$(this).attr("value")];
            statusData.leaveRequestId = selectedRequest.id;
            statusData.status = "3";
            statusData = JSON.stringify(statusData);
            console.log(statusData);
            $.ajax({
                method: "POST",
                url: "http://localhost/Project/HRMS v1.0/api/leaveRequest/leaveRequest.php",
                data: statusData,
                dataType: "json"
              })
              .done(function(data) {
                console.log(data);
              })
              .fail(function() {
                console.log("Incorrect email or password");
              });
          });

        break;
      }
  });
});
