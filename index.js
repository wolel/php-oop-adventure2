/**
 * Voir la tuto dans mon word: (Angular js)
 */

var app = angular.module('forumComm',[]);


app.controller('monControleur', function ($scope) {
    $scope.comments = ["comm1","comm2"];


    $scope.addComments = function () {
//$scope.comments.push($scope.addComm);

        var div = document.createElement('div');
        div.innerHTML += "<h1>"+ $scope.comments.push($scope.addComm)+"</h1>";
//document.getElementById('divComm').appendChild(div);
    };

    $scope.suppComm = function () {
        $scope.comments.pop($scope.suppComm);
    }
});