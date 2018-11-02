(function() {
    var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
  templates['user-template'] = template({"1":function(container,depth0,helpers,partials,data) {
      var helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=helpers.helperMissing, alias3="function", alias4=container.escapeExpression;

    return "  <tr>\r\n    <td>"
      + alias4(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"id","hash":{},"data":data}) : helper)))
      + "</td>\r\n    <td>"
      + alias4(((helper = (helper = helpers.firstName || (depth0 != null ? depth0.firstName : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"firstName","hash":{},"data":data}) : helper)))
      + "</td>\r\n    <td>"
      + alias4(((helper = (helper = helpers.lastName || (depth0 != null ? depth0.lastName : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"lastName","hash":{},"data":data}) : helper)))
      + "</td>\r\n    <td>"
      + alias4(((helper = (helper = helpers.email || (depth0 != null ? depth0.email : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"email","hash":{},"data":data}) : helper)))
      + "</td>\r\n    <td>"
      + alias4(((helper = (helper = helpers.telNumber || (depth0 != null ? depth0.telNumber : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"telNumber","hash":{},"data":data}) : helper)))
      + "</td>\r\n  </tr>\r\n";
  },"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
      var stack1;

    return "<thead>\r\n  <tr>\r\n    <th>ID</th>\r\n    <th>First Name</th>\r\n    <th>Last Name</th>\r\n    <th>Email</th>\r\n    <th>Tel Number</th>\r\n  </tr>\r\n</thead>\r\n<tbody>\r\n"
      + ((stack1 = helpers.each.call(depth0 != null ? depth0 : (container.nullContext || {}),depth0,{"name":"each","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data})) != null ? stack1 : "")
      + "</tbody>\r\n";
  },"useData":true});
  })();
