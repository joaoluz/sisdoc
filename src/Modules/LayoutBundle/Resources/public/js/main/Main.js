/**
 * Created by joao.luz on 20/01/14.
 */
(function(angular,undefined){
    var $main = angular.module("Main",["ngRoute"]);

    $main.config(function($routeProvider,$locationProvider){
        $routeProvider.when("/user/new",{module:"UserNew",controller:"UserController",templateUrl:"bundles/modulesuser/templates/new.html"});
    });
    $main.run(["$rootScope","$document",function($rootScope){
        $rootScope.$on("$routeChangeStart",function(){
           SinglePage.loadAll();
        });
        $rootScope.$on("$routeChangeSuccess",function(){
            SinglePage.hideAll();
        });
    }]);
    $main.controller('MainController',["$scope",function($scope){
        $scope.joao = 'joao';
    }]);

})(angular)