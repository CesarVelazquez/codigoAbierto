<!DOCTYPE html>
<html lang="es-MX" ng-app="inicio">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo ?></title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div ng-controller="controlador1">
          {{nombre}}
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script>
        var aplicacion=angular.module('prueba', []);
        aplicacion.controller('controlador1', ['$scope', function($scope){
                $scope.nombre='César Velázquez';
                
                $scope.prueba=function(){
                    
                };
        }]);
    </script>
    <!--
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    -->
  </body>
</html>