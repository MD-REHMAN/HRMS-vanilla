//config.js
requirejs.config({
  baseUrl: 'assets/js',
  paths: {
    'jquery': 'module/jquery/dist/jquery',
    'bootstrap': 'module/bootstrap/js/bootstrap',
    'handlebars': 'module/handlebars/handlebars-v4.0.12',
    'main': 'controllers/main',
    'authCtrl': 'controllers/authCtrl',
    'componentsCtrl': 'controllers/componentsCtrl',
    'userCtrl': 'controllers/userCtrl',
    'leaveRequestCtrl': 'controllers/leaveRequestCtrl',
    'paySlipCtrl': 'controllers/paySlipCtrl'

  },
  shim: {
    'bootstrap': ['jquery'],
    'main': ['jquery', 'bootstrap', 'handlebars'],
    'componentsCtrl': ['main'],
    'authCtrl': ['componentsCtrl'],
    'userCtrl': ['componentsCtrl'],
    'leaveRequestCtrl': ['componentsCtrl'],
    'paySlipCtrl': ['componentsCtrl']
  }
});
