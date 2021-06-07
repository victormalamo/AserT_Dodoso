<?php require_once('../../Connections/connmnrtsafari.php'); ?>
<?php
require_once('../../ruhusa.php');
//require_once('../../update_zimebaki_siku.php');

//$_SESSION['kutoka_link'] = "mafuta_ya_safari_list.php";

?>
<?php 
//include('status.php');
//include('aina_ya_kibali.php');

?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sajili Mtumiaji</title>
<meta charset="utf-8">
<link rel="icon" href="http://localhost/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/w3.css">
<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">
<link rel="stylesheet" type="text/css" href="/css/resp_form.css">
<link rel="stylesheet" type="text/css" href="/css/toggle.css">
<script src="http://localhost/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/js/toggle.js"></script>

<!--script src="sajili_mtumiaji/js/jquery.js"></script-->
<script src="sajili_mtumiaji/js/angular_1_3_15.js"></script>
<script src="sajili_mtumiaji/js/jquery_002.js"></script>
<script src="sajili_mtumiaji/js/angular-datatables.js"></script>
<script src="sajili_mtumiaji/js/bootstrap.js"></script>
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="sajili_mtumiaji/css/datatables.css">
<link rel="stylesheet" href="sajili_mtumiaji/css/ng_form_validation_style.css">

<script src="sajili_mtumiaji/js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="sajili_mtumiaji/js/select.js"></script>
<link rel="stylesheet" href="sajili_mtumiaji/css/select.css">

</head>
<body class="kwa_body_1 ng-scope" ng-app="watumiajiApp" ng-controller="watumiajiController" ng-init="fetchData()">
<div id="mainContent"> 
  <!--div class="w3-container top"> 
    <!--a class="w3schools-logo notranslate" href="http://localhost/"><img src="/images/logo-main.png"></a>
    <div class="w3schools-logo notranslate"><img src="/images/logo-main.png"></div>
    <!--div class="w3-right w3-hide-small w3-wide toptext" style="font-family:'Segoe UI',Arial,sans-serif">Wizara ya Maliasili na Utalii</div>
  </div-->
  <!-- TOP!-->
  <div class="w3-card-2 topnav notranslate" id="topnav" style="position: relative; top: 0px;"> 
    <div style="overflow:auto;"> 
      <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px"> 
        <a href="javascript:void(0);" class="topnav-icons w3-hide-large w3-left w3-bar-item w3-button" onclick="open_menu()" title="Menu"><img src="/images/menu.png"></a> 
        <a href="http://localhost" class="topnav-icons w3-left w3-button" title="Home"><img src="/images/home.png"></a> 
        <a href="<?php echo $logoutAction; ?>" class="topnav-icons w3-right w3-button" title="Ondoka"><img src="/images/ondoka.png"></a> 
        <a href="http://localhost/changepwd.php" class="topnav-icons w3-right w3-button" title="Badilisha"><img src="/images/badilisha.png"></a> 
        <div class="topnavtext_lname w3-right w3-opacity"> 
          <?php echo $_SESSION['l_name'];?>
        </div>
        <div class="topnavtext_fname w3-right w3-opacity"> 
          <?php echo $_SESSION['f_name']."&nbsp;"?>
        </div>
        <div class="w3-right topnicons-nolink w3-opacity" title="Mtumiaji"><img src="/images/mtumiaji.png"></div>
      </div>
      <div id='nav_tutorials' class='w3-bar-block w3-card-2' style="display:none;"></div>
      <div id='nav_references' class='w3-bar-block w3-card-2'></div>
      <div id='nav_exercises' class='w3-bar-block w3-card-2'></div>
    </div>
  </div>
  <!-- SIDE BAR !-->
  <div class="w3-sidebar w3-collapse" id="sidenav" style="top: 112px; display: none;"> 
    <div id="leftmenuinner" style="padding-top: 0px;"> 
      <div class="w3-light-greyQ" id="leftmenuinnerinner"> <br class="w3-hide-large">
        <br>
        <br>
        <!--h2>Menus</h2-->
        <div id="sidenav-title" class="show_teuzi content_teuzi mkono">Usimamizi wa Watumiaji</div>
        <div class="menu_teuzi" style="display: block;">
		<div id="sidenav-imechaguliwa_2">Sajili Mtumiaji</div>
		<!--a href="panga_gari_afisa_dereva.php">Afisa | Dereva</a-->
		</div>
        <br>
        <br>
      </div>
    </div>
  </div>
  <!--BELOW  TOPNAV-->
  <div class="w3-main" id="belowtopnav" style="margin-left: 221px; padding-top:0px;"> 
    <div class="w3-row" style="padding: 0px 0px 0px 0px;"> 
      <div class="w3-container top w3-white muhtasari_karibu"> 
        <div class="w3schools-logo notranslate"><img src="/images/logo-main.png"></div>
      </div>
      <div class="w3-col l10 m12" id="main"> 
        <div id="mainLeaderboard" style="overflow:hidden;"> 
          <div class="container_form_kichwa"> 
            <div class="kichwa_ndogo form_link"><a href="http://localhost/user/msimamizi/index.php">Mwanzo</a>&nbsp;<span class="kichwa_ndogo_sana">/</span>&nbsp;Sajili Mtumiaji</div>
          </div>
          <div class="container_form"> 
		  
<!------------------SAJILI MTUMIAJI------------------------------------------------------------------------>
		  
<div class="container">
	
	<div class="row">	
    <div class="col-md-9 w3-white w3-border restade_1"> 
      <!--br>
      <h3 align="center">Orodha ya Magari</a></h3>
      <br-->
      <!--div class="alert alert-success alert-dismissible" ng-show="success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
        {{successMessage}} </div-->
      <div align="left" class="sajili"> 
        <button type="button" name="add_button" ng-click="addData()" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> 
        Sajili Mtumiaji</button>
        <!--button type="button" name="add_button" ng-click="addData()" class="btn btn-default">Sajili Gari</button>
		<button type="button" name="add_button" ng-click="addData()" class="btn btn-default">Sajili Gari</button>
		<button type="button" name="add_button" ng-click="addData()" class="btn btn-default">Sajili Gari</button-->
        <span>{{successMessage}}</span> </div>
      <br>
      <div class="table-responsive" style="overflow-x: unset;"> 
        <table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered" style="background-color:#">
          <thead>
            <tr> 
              <th>Jina</th>
              <th>Cheo</th>
              <th>Idara/Kitengo</th>
              <th>Section</th>
              <th data-orderable="false" style="width:95px"></th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="mtumiaji in watumiajiData"> 
              <td>{{mtumiaji.f_name}} {{mtumiaji.m_name | limitTo: 1}}. {{mtumiaji.l_name}}</td>
              <td>{{mtumiaji.jina_la_cheo}}</td>
              <td>{{mtumiaji.div_unit}}</td>
              <td>{{mtumiaji.section_name}}</td>
              <td align="right" class="w3-pale-yellow">
			  <button type="button" ng-click="tazamaMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button>
			  <button type="button" ng-click="editMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
              <button type="button" ng-click="deleteMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
			  </td>
            </tr>
          </tbody>
          <!--tfoot>
            	<tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
				<th></th>
            	</tr>
        	</tfoot-->
        </table>
      </div>
    </div>	
	</div>
	
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="mtumiajimodal">
	
              <div class="modal-dialog" role="document"> 
                <div class="modal-content"> 
                  <!--form method="post" ng-submit="submitForm()"-->
				  <form name="sajiliForm" novalidate>
                    <div class="modal-header"> 
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">{{modalTitle}}</h4>
                    </div>
                    <div class="modal-body"> 
                      <div class="alert alert-danger alert-dismissible" ng-show="error"> 
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                        {{errorMessage}}</div>
						
						<div class="form-group" ng-init="loadIdara()">
							<div class="input-group">
							<ui-select name="idara" ng-model="idara.selected" theme="bootstrap" ng-change="loadSections()"> 
							  <ui-select-match placeholder="Idara..">{{$select.selected.div_unit_kirefu}}</ui-select-match>
							  <ui-select-choices repeat="item in idaraData | filter: $select.search"> 
							  <span ng-bind-html="item.div_unit_kirefu | highlight: $select.search"></span> 
							  <span ng-bind-html=" item.div_unit_ID | highlight: $select.search"></span> 
							  </ui-select-choices>
							  </ui-select> 
							  <div class="input-group-btn"> 
								<button type="button" class="btn btn-default" ng-click="safishaIdara()"><span class="glyphicon glyphicon-remove"></span></button>
							  </div>
							</div>
							<!--p class="error validationerror" ng-show="sajiliForm.idara.$invalid && sajiliForm.idara.$touched">Chagua idara..</p-->
						</div>						
						<div class="form-group">
							<ui-select name="section" ng-model="section.selected" theme="bootstrap" ng-disabled="!idara.selected || section_disabled">  
							<ui-select-match placeholder="Section..">{{$select.selected.section_name}}</ui-select-match>
							<ui-select-choices repeat="item in sectionData | filter: $select.search"> 
							<span ng-bind-html="item.section_name | highlight: $select.search"></span>
							<span ng-bind-html=" item.section_ID | highlight: $select.search"></span>
							</ui-select-choices> 
							</ui-select>
						</div>
						<div class="form-group" ng-init="loadLevels()">
							<ui-select name="levelID" ng-model="levelID.selected" theme="bootstrap" ng-change="tazamaMtumiaji()"> 
							<ui-select-match placeholder="User level...">{{$select.selected.label}}</ui-select-match>
							<ui-select-choices repeat="item in levelIDData | filter: $select.search"> 
							<span ng-bind-html="item.label | highlight: $select.search"></span>
							</ui-select-choices> 
							</ui-select>
						</div>
						<div class="form-group">
                        <input name="f_name" ng-model="f_name" class="form-control" type="text" placeholder="Jina la kwanza..">
                      </div>
                      <div class="form-group">
                        <input name="m_name" ng-model="m_name" class="form-control" type="text" placeholder="Jina la kati..">
                      </div>
                      <div class="form-group">
                        <input name="l_name" ng-model="l_name" class="form-control" type="text" placeholder="Jina la mwisho..">
                      </div>
					  <div class="form-group">
                        <input name="mob" ng-model="mob" class="form-control" type="text" placeholder="Simu..">
                      </div>
					  <div class="form-group">
                        <input name="e_add" ng-model="e_add" class="form-control" type="email" placeholder="Email..">
						<p ng-show="sajiliForm.$dirty && sajiliForm.e_add.$invalid">This field is invalid </p>
                      </div>
					  <div class="form-group">
                        <input name="username" ng-model="username" class="form-control" type="text" placeholder="Cheque no..">
                      </div>
					  <div class="form-group">
                        <input name="leseni" ng-model="leseni" class="form-control" type="text" placeholder="Leseni ya udereva..." ng-show="showing_leseni">
                      </div>
					  <div class="form-group">
                        <input name="pf_no" ng-model="pf_no" class="form-control" type="text" placeholder="PF No.." ng-required="true">
						<p class="error validationerror" ng-show="sajiliForm.pf_no.$invalid && sajiliForm.pf_no.$touched">PF.No inahitajika...</p>
                      </div>
					  <div class="form-group" ng-init="loadVyeo()">
							<ui-select name="cheo_ID" ng-model="cheo_ID.selected" theme="bootstrap"> 
							<ui-select-match placeholder="Cheo...">{{$select.selected.jina_la_cheo}}</ui-select-match>
							<ui-select-choices repeat="item in vyeoData | filter: $select.search"> 
							<span ng-bind-html="item.jina_la_cheo | highlight: $select.search"></span>
							<span ng-bind-html="item.cheo_ID | highlight: $select.search"></span>
							</ui-select-choices> 
							</ui-select>
						</div>
					  <div class="form-group" ng-init="loadNgazi()">
							<ui-select name="ngazi_ya_mshahara" ng-model="ngazi_ya_mshahara.selected" theme="bootstrap"> 
							<ui-select-match placeholder="Ngazi ya mshahara..">{{$select.selected.ngazi_ya_mshahara}} {{ngazi_ya_mshahara.selected.daraja_la_mshahara}}</ui-select-match>
							<ui-select-choices repeat="item in ngaziData | filter: $select.search"> 
							<span ng-bind-html="item.ngazi_ya_mshahara | highlight: $select.search"></span>
							<span ng-bind-html="item.daraja_la_mshahara | highlight: $select.search"></span>
							</ui-select-choices> 
							</ui-select>
						</div>
					 </div>
					 <div class="modal-footer"> 
                      <input type="hidden" name="hidden_mfanyakazi_id" value="{{hidden_mfanyakazi_id}}" />
                      <!--input type="submit" name="submit" id="submit" class="btn btn-info" value="{{submit_button}}" /-->
					  <button type="button" class="btn btn-info" ng-click="submitForm()">{{submit_button}}</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>  

</div>

<script>

var app = angular.module('watumiajiApp', ['datatables', 'ngSanitize', 'ui.select']);



	app.filter('propsFilter', function() {
	  return function(items, props) {
		var out = [];
	
		if (angular.isArray(items)) {
		  items.forEach(function(item) {
			var itemMatches = false;
	
			var keys = Object.keys(props);
			for (var i = 0; i < keys.length; i++) {
			  var prop = keys[i];
			  var text = props[prop].toLowerCase();
			  if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
				itemMatches = true;
				break;
			  }
			}
	
			if (itemMatches) {
			  out.push(item);
			}
		  });
		} else {
		  // Let the output be the input untouched
		  out = items;
		}
	
		return out;
	  }
	});


app.controller('watumiajiController', function($scope, $http){

	  
	$scope.success = false;
	$scope.error = false;

	$scope.fetchData = function(){
		$http.get('sajili_mtumiaji/fetch_data.php').success(function(data){
			$scope.watumiajiData = data;
		});
	};

	$scope.openModal = function(){
		var modal_popup = angular.element('#mtumiajimodal');
		modal_popup.modal('show');
	};

	$scope.closeModal = function(){
		var modal_popup = angular.element('#mtumiajimodal');
		modal_popup.modal('hide');
	};
	
	$scope.levelID = {};
		$scope.loadLevels = function(){
			$http.get('sajili_mtumiaji/levelsAPI.php').success(function(data){
			$scope.levelIDData = data;
		});
	};	

	  $scope.showing_leseni = undefined;
	  $scope.show_leseni = function() {
		$scope.showing_leseni = true;
	  };	  
	  $scope.hide_leseni = function() {
	  $scope.showing_leseni = false;
	  };
	  
	  $scope.tazamaMtumiaji = function(){ 	  
	  if($scope.levelID.selected.levelID == 'driver' ) {
		$scope.show_leseni();
		}else{
		$scope.hide_leseni();
		};
	   };		  
		  
	  $scope.ngazi_ya_mshahara = {};
	  $scope.loadNgazi = function(){
				$http.get('sajili_mtumiaji/mshahara_posho_ngazi_darajaAPI.php').success(function(data){
				$scope.ngaziData = data;
				});
	  };
	  
	  $scope.cheo_ID = {};
	  $scope.loadVyeo = function(){
				$http.get('sajili_mtumiaji/vyeoAPI.php').success(function(data){
				$scope.vyeoData = data;
				});
	  };

	$scope.form_data = {};
	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"sajili_mtumiaji/insert.php",
			data:{
			'f_name':$scope.f_name, 
			'l_name':$scope.l_name,
			'm_name':$scope.m_name,
			'pf_no':$scope.pf_no, 
			'mob':$scope.mob,
			'e_add':$scope.e_add, 
			'div_unit_ID':$scope.idara.selected.div_unit_ID,
			'section_ID':$scope.section.selected.section_ID,
			'cheo_ID':$scope.cheo_ID.selected.cheo_ID, 
			'ngazi_ya_mshahara':$scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara,
			'daraja_la_mshahara':$scope.ngazi_ya_mshahara.selected.daraja_la_mshahara,
			'levelID':$scope.levelID.selected.levelID, 
			'leseni':$scope.leseni,
			'username':$scope.username,
			'action':$scope.submit_button, 'mfanyakazi_id':$scope.hidden_mfanyakazi_id
			}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}
			else
			{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.fetchData();
			}
		});
	};
	
 	  
	  	$scope.safishaIdara = function() {
			//$scope.idara.selected = undefined;
			//$scope.section.selected = undefined;
			//$scope.idara.placeholder = 'Idara........';
			$scope.idara.selected.div_unit_kirefu = 'Idara..';
			$scope.idara.selected.div_unit_ID = '';
			//$scope.section.placeholder = 'Section..';
			$scope.section.selected.section_name = 'Section..';
			$scope.section.selected.section_ID = '999999';	
		  };
		
		  $scope.idara = {};
		  $scope.loadIdara = function(){
		  			$http.get('sajili_mtumiaji/idaraAPI.php').success(function(data){
				    $scope.idaraData = data;
					});
		  };		  
		
		  $scope.section_disabled = undefined;
		  $scope.enable_section = function() {
			$scope.section_disabled = false;
		  };	  
		  $scope.disable_section = function() {
		  	$scope.section_disabled = true;
		  };
		    
		  $scope.section = {};
		  $scope.loadSections = function(){		  
		  //$scope.section.placeholder = 'Section..';
		  $scope.section.selected.section_name = 'Section..';
		  $scope.section.selected.section_ID = '999999';			
		  //$scope.section.selected = undefined;		  
		  if($scope.idara.selected.div_au_unit == 'unit' ) {
		  	$scope.disable_section();
			}else{
			$scope.enable_section();
			};
		  $http.post("sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
		   .success(function(data){ 
				$scope.sectionData = data;		
		   });
		   };
		     
		  $scope.oneditloadSections = function(){
		  //$scope.section.placeholder = 'Section..';
		  //$scope.section.selected.section_name = 'Section..';
		 // $scope.section.selected.section_ID = '999999';	
		  if($scope.idara.selected.div_au_unit == 'unit' ) {
		  	$scope.disable_section();
			}else{
			$scope.enable_section();
			};
		   $http.post("sajili_mtumiaji/sectionAPI.php", {'div_unit_ID':$scope.idara.selected.div_unit_ID})
		   .success(function(data){ 
				$scope.sectionData = data;					
		   });
		   };
		
		
		$scope.addData = function(){
			$http.get('sajili_mtumiaji/fetch_data.php').success(function(data){
				$scope.idara.selected = data;
				$scope.section.selected = data;	
				$scope.idara.selected.div_unit_kirefu = 'Idara..';
				$scope.idara.selected.div_unit_ID = '';
				$scope.section.selected.section_name = 'Section..';
		 		$scope.section.selected.section_ID = '999999';
				
				$scope.f_name = '';
				$scope.l_name = '';
				$scope.m_name = '';
				$scope.pf_no = '';
				$scope.mob = '';
				$scope.e_add = '';
				$scope.leseni = '';
				$scope.pf_no = '';
				$scope.username = '';
				
				$scope.levelID.selected = data;
				$scope.ngazi_ya_mshahara.selected = data;
				$scope.cheo_ID.selected = data;
				$scope.levelID.selected.label = 'User level..';
				$scope.levelID.selected.levelID = '';
				$scope.ngazi_ya_mshahara.selected.daraja_la_mshahara = 'Ngazi ya mshahara..';
				$scope.ngazi_ya_mshahara.selected.ngazi_ya_mshahara = '';
				$scope.cheo_ID.selected.jina_la_cheo = 'Cheo..';
				$scope.cheo_ID.selected.cheo_ID = '';
				
				$scope.successMessage = '';
				$scope.modalTitle = 'Sajili Mtumiaji';
				$scope.submit_button = 'Insert';
				$scope.openModal();
			});			
		};

		$scope.editMtumiaji = function(mfanyakazi_id){
		$http({
			method:"POST",
			url:"sajili_mtumiaji/insert.php",
			data:{'mfanyakazi_id':mfanyakazi_id, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.f_name = data.f_name;
			$scope.m_name = data.m_name;
			$scope.l_name = data.l_name;
		    $scope.mob = data.mob;
		    $scope.e_add = data.e_add;
		    $scope.leseni = data.leseni;
		    $scope.pf_no = data.pf_no;
		    $scope.username = data.username;
			$scope.idara.selected = data;
			$scope.section.selected = data;
			$scope.levelID.selected = data;
			$scope.ngazi_ya_mshahara.selected = data;
			$scope.cheo_ID.selected = data;
			$scope.oneditloadSections();
			$scope.tazamaMtumiaji();
			$scope.hidden_mfanyakazi_id = mfanyakazi_id;
			$scope.modalTitle = 'Rekebisha Taarifa';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};

	$scope.deleteMtumiaji = function(mfanyakazi_id){
		if(confirm("Unataka kumuondoa mtumiaji?"))
		{
			$http({
				method:"POST",
				url:"sajili_mtumiaji/insert.php",
				data:{'mfanyakazi_id':mfanyakazi_id, 'action':'Delete'}
			}).success(function(data){
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.fetchData();
			});
		}
	};
	
	


});

</script>
		     
          </div>
          <!-- footer-->
        </div>
        <script src="http://localhost/js/w3schools_footer.js"></script>
        <!--script src="http://localhost/js/baka_pandisha_faili.js"></script-->
      </div>
    </div>
  </div>
</div>
</body>
</html>