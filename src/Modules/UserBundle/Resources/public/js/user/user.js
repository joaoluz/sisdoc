(function(angular,JSON, undefined) {
    "use strict";
    var user = angular.module("UserNew",["Main"]);

    user.controller("UserController",["$http", "$scope", function($http,$scope){
        console.log($scope);
        $scope.salvar = function(){
            $http.post(Routing.generate("modules.usuario.cadastro"),{params:$scope}).success(function(data){
                if(data.success) {
                } else {
                }
            });
        }
    }]);

})(angular);