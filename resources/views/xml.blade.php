<!doctype html>
<html lang="pt-br" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.x-git.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-animate.js"></script>--}}
    <title>Document</title>
    <script type="text/javascript">
        <!--
        (function() {
            var app = angular.module('app', []);
            app.controller('Controller', ['$scope', '$http', '$window', function($scope, $http, $window) {
                $scope.xml = '';
                $http({
                    method  : 'GET',
                    url     : 'rest',
                    timeout : 10000,
                    params  : {},  // Query Parameters (GET)
                    transformResponse : function(data) {
                        // string -> XML document object
                        return $.parseXML(data);
                    }
                }).success(function(data, status, headers, config) {
                    console.dir(data);  // XML document object
                    $scope.xml = data.documentElement.innerHTML;
                }).error(function(data, status, headers, config) {
                    $window.alert('Não foi possível carregar os dados.');
                });
            }]);
        })();
        //-->
    </script>
    <script type="application/javascript">
        $(function() {
            $('#update-target').ready(function() {
                $.ajax({
                    type: "GET",
                    url: "rest",
                    dataType: "xml",
                    success: function(xml) {
                        $(xml).find('prestashop').each(function(){
                            var id_text = $(this).attr('store')
                            var text_1 = $(this).find('id').text(),
                                text_2 = $(this).find('id_country').text(),
                                text_3 = $(this).find('id_state').text(),
                                text_4 = $(this).find('hours').text(),
                                text_5 = $(this).find('name').text(),
                                text_6 = $(this).find('address1').text()
                            $('<li></li>')
                                    .html('ID - ' + text_1 + '<br>'+ 'Id-Country  ' + text_2+ '<br>' + text_3+ '<br>' + text_4+ '<br>' + text_5 + '<br>' + text_6 + '<br>' )
                                    .appendTo('#update-target ul');
                        }); //close each(
                    }
                }); //close $.ajax(
            }); //close click(
        }); //close $(
    </script>
</head>
<body>
<p>
<div id='update-target'>
    <a href="#">Click here to load addresses</a>
    <ul class="list">
    </ul>
</div>
</p>
<div ng-controller="Controller">
    <section>
        {{--<h1>Succcess GET (Response is XML)</h1>--}}
        <p ng-bind="xml"></p>
    </section>
</div>
</body>
</html>