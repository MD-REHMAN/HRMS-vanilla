(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['leaveRequest-template'] = template({"1":function(container,depth0,helpers,partials,data) {
    var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=helpers.helperMissing, alias3="function", alias4=container.escapeExpression;

  return "    <tr>\r\n      <!-- <td>"
    + alias4(((helper = (helper = helpers.key || (data && data.key)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"key","hash":{},"data":data}) : helper)))
    + "</td> -->\r\n      <td>"
    + alias4(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"id","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.leaveType || (depth0 != null ? depth0.leaveType : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"leaveType","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.createdBy || (depth0 != null ? depth0.createdBy : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"createdBy","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.dateFrom || (depth0 != null ? depth0.dateFrom : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"dateFrom","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.dateTo || (depth0 != null ? depth0.dateTo : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"dateTo","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.numOfDays || (depth0 != null ? depth0.numOfDays : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"numOfDays","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>"
    + alias4(((helper = (helper = helpers.status || (depth0 != null ? depth0.status : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"status","hash":{},"data":data}) : helper)))
    + "</td>\r\n      <td>\r\n        <a href=\"#\" class=\"approveBtn\" value="
    + alias4(((helper = (helper = helpers.key || (data && data.key)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"key","hash":{},"data":data}) : helper)))
    + ">Approve</a> / <a href=\"#\" onclick=\"blah()\">Reject</a>\r\n      </td>\r\n    </tr>\r\n";
},"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1;

  return "<thead>\r\n  <tr>\r\n    <!-- <th>#</th> -->\r\n    <th>ID</th>\r\n    <th>Leave Type</th>\r\n    <th>Applicant</th>\r\n    <th>From</th>\r\n    <th>To</th>\r\n    <th>Number Of Days</th>\r\n    <th>Status</th>\r\n    <th>Action</th>\r\n  </tr>\r\n</thead>\r\n<tbody>\r\n"
    + ((stack1 = helpers.each.call(depth0 != null ? depth0 : (container.nullContext || {}),depth0,{"name":"each","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data})) != null ? stack1 : "")
    + "</tbody>\r\n";
},"useData":true});
})();