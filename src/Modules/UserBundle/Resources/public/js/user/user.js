(function(angular,JSON, undefined) {
    "use strict";
    var user = angular.module("UserNew",[]);

    user.controller("UserController",["$http", "$scope", function($http,$scope){
        $scope.save = function(){
            console.log(Routing.generate("modules.user.save"));
            $http.post(Routing.generate("modules.user.save"),{params:$scope}).success(function(data){
                if(data.success) {
                } else {
                }
            });
        }
    }]);
})(angular);