//config.js
requirejs.config({
  baseUrl: 'assets/js',
  paths: {
    'jquery': 'module/jquery/dist/jquery',
    'bootstrap': 'module/bootstrap/js/bootstrap',
    'main': 'controllers/main',
    'authCtrl': 'controllers/authCtrl',
    'componentsCtrl': 'controllers/componentsCtrl',
    'userCtrl': 'controllers/userCtrl'
  },
  shim: {
    'bootstrap': ['jquery'],
    'main': ['jquery', 'bootstrap'],
    'authCtrl': ['main'],
    'componentsCtrl': ['main'],
    'userCtrl': ['main']
  }
});

console.log(requirejs.config.paths);
