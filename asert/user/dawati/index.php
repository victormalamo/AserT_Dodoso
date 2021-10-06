<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Demo - Dawati</title>

<link rel="stylesheet" href="css/bootstrap_custom.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script src="js/angular.js"></script>
<style>
.border-mdblue{border-color:#74b8ee!important}
</style>
</head>
<body ng-app="msimamiziApp" ng-controller="watumiajiController" ng-init="fetchData()">

    <div class="table-responsive" style="overflow-x: unset;"> 
        <table id="orodha_ya_watumishi" class="table table-bordered border-mdblue">
          <thead>
            <tr style="height:35px"> 
              <th style="vertical-align:middle" class="border-mdblue">JINA</th>
              <th style="vertical-align:middle" class="border-mdblue">CHEO</th>
              <th style="vertical-align:middle" class="border-mdblue">IDARA_KITENGO</th>
              <th style="vertical-align:middle" class="border-mdblue">SEHEMU</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="mtumiaji in watumiajiData"> 
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.f_name}} {{mtumiaji.m_name | limitTo: 1}}. {{mtumiaji.l_name}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.jina_la_cheo}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.div_unit}}</td>
              <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.section_name}}</td>
            </tr>
          </tbody>
        </table>
      </div>  

<!--msimamiziApp-->
<script>
var app = angular.module('msimamiziApp', []);

app.controller('watumiajiController', function($scope, $http){

	$scope.fetchData = function(){
		$http.get('fetch_data.php').success(function(data){	
			$scope.watumiajiData = data;					
		});
	};

	
});
</script>
</body></html>