var app = angular.module('appBtn', []);
    app.controller('alertController', ['$scope', '$window', function ($scope, $window) {
        $scope.alertClick = function () {
            $window.alert('CA MARCHE !');
            };
       }]);

