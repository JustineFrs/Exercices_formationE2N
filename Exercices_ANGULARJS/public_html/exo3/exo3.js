app = angular.module('app', []);

app.controller('appCtrl', ['$scope', function ($scope) {
    $scope.messages = [];

    $scope.addMessage = function (message) {
        $scope.messages.push(angular.copy(message));
    };
}]);