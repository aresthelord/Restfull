var app = angular.module("CRM", ['ngRoute']);

/**
 * Configure Angular ngApp with route and cache the needed providers
 */
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
                .when('/', {
                    templateUrl: 'client/view/welcome.html',
                    controller: 'WelcomeCtrl'
                })
                .when('/home', {
                    templateUrl: 'client/view/welcome.html',
                    controller: 'WelcomeCtrl'
                })
                .when('/admin', {
                    templateUrl: 'client/view/admin.html',
                    controller: 'WelcomeCtrl'
                })
                .otherwise({redirectTo: '/home'})
                ;
    }]);
app.apiKey = 'cd05584c167f05cb9c6303d445a13e91a94a3ed050b9';


















    