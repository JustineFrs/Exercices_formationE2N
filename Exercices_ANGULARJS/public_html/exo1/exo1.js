//déclaration de l'objet angular, qui a une méthode module avec 2param: Nom du module (ng app) + tableaux de dépendances
var app = angular.module("appMail", []);
//déclaration du controller "validationEmail" objet + methode controller 
//1er param: controller, 2e param: function qui prend $scope
//$scope = objet de liaison du controller et la vue (récupération de valeurs)
app.controller("validationEmail", function ($scope) {
//déclaration de la variable comportant la Regex permetant la saisi d'un @
    var email = new RegExp('[@]{1}');
//déclaration de la méthode "analyse€mail"(à retrouver dans la vue) dans l'objet $scope
//application de la function "value"
    $scope.analyseEmail = function (value) {
//création de l'attribut "isOkay" à l'objet $scope
        $scope.isOkay = false;
//vérification de l'adresse mail
        if (email.test(value)) {
            $scope.isOkay = true;
        }
    };

});


