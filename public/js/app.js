'use strict';
var myApp = angular.module('myApp', [
  'ngSanitize',
  'ngRoute',
  'mainCtrl',
  'commentService'
]);

  // routing
myApp.config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html'
      })
      .when('/forgot_password', {
        templateUrl: 'views/home/home.html'
      , controller: 'forgotPasswordCtrl'
      , modal: 'views/modals/forgot_password1.html'
      })
      .when('/reset_password/:reset_token', {
        templateUrl: 'views/home/home.html'
      , controller: 'resetPasswordCtrl'
      , modal: 'views/modals/reset_password1.html'
      })
      .when('/registration/step2', {
        templateUrl: 'views/registration/step2.html'
      })
      .when('/lookscreen',{
        templateUrl: 'views/landing/lookscreen.html'
      })
      .otherwise({
        redirectTo: '/'
      });
    });