//déclaration du module appMail
//la fonction run permet de d'initialiser le tableau messageList
app = angular.module('appMail', ['ngRoute']).run(function ($rootScope) {
    //$rootScope est un objet global qui permet d'échanger des données entre tous les controleurs
    $rootScope.messageList = [];
});
//fonction qui permet de gérer plusieurs vues
app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {templateUrl: 'partials/form.html', controller: 'appCtrl'})
            .when('/mailcontent/:id', {templateUrl: 'partials/mailcontent.html', controller: 'contentCtrl'})
            .otherwise({redirectTo: '/'});
});
//déclaration du controleur appCtrl qui est appelé dans la vue formulaire
app.controller('appCtrl', ['$rootScope', function ($rootScope) {
        var msg;
        //addMessage prend en parametre l'objet message et l'ajoute au tableau messageList
        $rootScope.addMessage = function (message) {
            msg = angular.copy(message);
            $rootScope.messageList.push(msg);
        };
    }]);
// déclaration du controleur contentCtrl qui est appelé dans la vue contenu mail
app.controller('contentCtrl', ['$rootScope', '$routeParams', function ($rootScope, $routeParams) {
        //récupération de l'id du message à afficher et passage du message dans messageDetail
        $rootScope.messageDetail = $rootScope.messageList[$routeParams.id];
    }]);
