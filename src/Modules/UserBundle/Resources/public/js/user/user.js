(function(angular,JSON, undefined) {
    "use strict";
    var user = angular.module("UserNew",[]);

    user.controller("UserController",["$http", "$scope", function($http,$scope){
        $scope.data = {};
        $scope.save = function(){
            $http.post(Routing.generate("modules.user.save"),{params:$scope.data}).success(function(data){
                if(data.success) {
                } else {
                }
            });
        }
    }]);
})(angular);