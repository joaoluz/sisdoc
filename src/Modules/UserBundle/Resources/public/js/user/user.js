(function(angular,JSON, undefined) {
    "use strict";
    var usuario = angular.module("usuarioCadastro",[]);

    usuario.controller("usuarioCtrl",["$http", "$scope", function($http,$scope){
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