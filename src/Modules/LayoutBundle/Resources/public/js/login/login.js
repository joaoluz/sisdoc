function loginCtrl($scope, $http){
    $scope.logar = function(){
        $http.post(Routing.generate("logar"),{cpf:$scope.cpf,senha:$scope.senha}).success(function(){
            alert('Joazinho cabra da peste');
        });
    }
}