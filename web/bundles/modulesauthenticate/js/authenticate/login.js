(function(angular,JSON, undefined) {
    "use strict";

    var login = angular.module("login",[]);

    login.controller("loginCtrl",["$http", "$scope", function($http,$scope){
        $scope.logar = function(){
            $http.post(Routing.generate("modules_authenticate_logar"),{cpf:$scope.cpf,senha:$scope.senha}).success(function(data){
                if(data.success) {
                    window.location = Routing.generate("start");
                } else {
                    alert("login ou senha errada");
                }
            });
        }
    }]);
})(angular);