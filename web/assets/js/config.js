//config.js
requirejs.config({
  baseUrl: 'assets/js',
  paths: {
    'jquery': 'module/jquery/dist/jquery',
    'bootstrap': 'module/bootstrap/js/bootstrap',

    'main': 'controllers/main',
    'authCtrl': 'controllers/authCtrl',
    'componentsCtrl': 'controllers/componentsCtrl',
    'dashboardCtrl': 'controllers/dashboardCtrl',
    'userCtrl': 'controllers/userCtrl',
    'leaveRequestCtrl': 'controllers/leaveRequestCtrl',
    'paySlipCtrl': 'controllers/paySlipCtrl',

    'navbar-template': 'template/navbar-template',
    'user-template': 'template/user-template',
    'leaveRequest-template': 'template/leaveRequest-template'

  },
  shim: {
    'bootstrap': ['jquery'],
    'main': ['jquery', 'bootstrap'],
    'componentsCtrl': ['main', 'navbar-template'],
    'authCtrl': ['componentsCtrl'],
    'dashboardCtrl': ['componentsCtrl'],
    'userCtrl': ['componentsCtrl', 'user-template'],
    'leaveRequestCtrl': ['componentsCtrl', 'leaveRequest-template'],
    'paySlipCtrl': ['componentsCtrl']
  }
});
