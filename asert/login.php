<?php require_once('Connections/connmnrtsafari.php'); ?>
<?php session_start();?>
<?php

//$_SESSION['mtumiaji_tbl'] = "wafanyakazi";
//$_SESSION['mtumiaji_tbl'] = "afcg_registered_facilities";
//$_SESSION['mtumiaji_tbl'] = "afcg_assessors";


$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($accesscheck)) {
  $GLOBALS['PrevUrl'] = $accesscheck;
  session_register('PrevUrl');
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index_routing.php";
  $MM_redirectLoginFailed = "login.php?loginFailed=true";
  $MM_redirecttoReferrer = false;
  
  //////////////////////////////////////////////////
  $LoginRS__query=sprintf("SELECT username, password FROM ".$_SESSION['mtumiaji_tbl']." WHERE username='%s' AND password='%s'",
  get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : md5($password)); //TAZAMA MD5
   
  $LoginRS = mysqli_query($conntscpME,$LoginRS__query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
	$_SESSION['MM_Username'] = $loginUsername;
	$_SESSION['MM_Password'] = md5($password);
    //$GLOBALS['MM_Username'] = $loginUsername;
    //$GLOBALS['MM_UserGroup'] = $loginStrGroup;	      

    //register the session variables
    //session_register("MM_Username");
    //session_register("MM_UserGroup");

    if (isset($_SESSION['PrevUrl']) && false) {
	  $_SESSION['muda_wa_mwisho'] = time();
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>AserT | Maliasili na Utalii</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link href="css/style-resp.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/spinner_full_page.css" rel="stylesheet">
<link href="css/font_krona_one.css" rel="stylesheet">
<link href="css/font_rajdhani.css" rel="stylesheet">
<link href="css/font_sansation.css" rel="stylesheet">
<link href="css/font_restade_icons.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/w3.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/angular_1_3_15.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!--script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default',         
			            width: 'auto',
			            fit: true 
			        });
			    });
				
</script-->
<!--onLoad="document.getElementById('username').focus();"-->
<style>

.modal-content {
  border: 0px!important;
  border-radius: 0px!important;

}
.modal.modal_full_page_spinner .modal-dialog {
		position: fixed;
		margin: auto;
		width: 100%;
		height: 100%;
		border-radius:8px!important;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
}
.modal.modal_full_page_spinner .modal-content {
		height: 100%;
		overflow-y: hidden;
}

.modal.funika_kurasa .modal-dialog {
		position: fixed;
		margin: auto;
		width: 100%;
		height: 100%;
		border-radius:8px!important;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
}
.modal.funika_kurasa .modal-content {
		height: 100%;
		overflow-y: hidden;
}

.form-control{
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
}
.form-control {
  background-color: #fff;
  background-image: none;
  border: 1px solid #fff;
  height: 45px;
  padding: 6px 12px;
  font-size:1.375rem;
  line-height: 1.5;
}
.glyphicon-light{
 /* font-weight: 100;*/
  -webkit-text-stroke: 1px white;
}
/*@media (min-width:700px){.form-control{font-size:1.125rem}}
@media (min-width:1000px){.form-control{font-size:1.25rem}}*/
/*.btn_add_on{
  border-color: #fff;
  border-left-color: #ccc;
  height: 45px;
  background-color: #fff;
  color: #333;
}
.btn_add_on:hover {
  color: #fff;
  background-color: #f0ad4e;
  border-left-color: #fff;
}
*/
.btn-login{ font-size:1.375rem!important;}
.form-group{
margin-bottom:0px!important;
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=100);
  opacity: 1;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.kosa {
  padding: 10px 15px;
}
</style>
</head>
<body class="ng-scope" ng-app="loginApp" ng-controller="loginController" ng-init="focus_username()">
<div class="wrap_outer"> 
  <div class="head"> 
    <div class="logo w3-white"> 
      <div class="logo-top"></div>
      <div class="logo-bottom"> <!--span style="display:inline-block"><img src="images/icons/wajibika_ico.png"></img></span--> AserT </div>
    </div>
    <div class="tablet"> 
      <div class="login"> 
        <!--JOIN-->
        <!--form name="loginForm" method="POST" action="<php echo $loginFormAction;?>" novalidate-->
        <form name="loginForm" novalidate>
          <!--input name="usernameTTTT" type="text" class="email" id="usernameTTTT" placeholder="Username" ng-show="false"/>
							<input name="passwordTTTT" type="password" class="password" id="passwordTTTT" placeholder="Password" ng-show="false"/-->
          <div class="login_input_wrap"> 
            <div class="login-top_username_text"> 
              <div class="" ng-show="usernamesuccess"> {{confirmed_username}} 
              </div>
            </div>
            <div class="form-group"> 
              <div class="input-group" style="width:100%" ng-show="onesha_username_field"> 
                <input name="username" id="username" ng-model="username" class=" login__form__field form-control" type="text" placeholder="Username" ng-required="true" ng-minlength="2" autocomplete="off">
                <div class="input-group-btn"> 
                  <button type="button" class="btn btn-login btn_add_on" ng-click="kaguaUsername()" ng-disabled="loginForm.username.$invalid"><span ng-hide="hajarudi_kagua_username" class="glyphicon glyphicon-search" style="padding-top:4px;"></span> 
                  <div class="rstd_spinner_thin" ng-show="hajarudi_kagua_username" style="padding-top:3px"> 
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  </button>
                </div>
              </div>
              <div class="input-group" style="width:100%" ng-show="onesha_password_field"> 
                <input name="password" id="password" ng-model="password" class="form-control login__form__field" type="password" placeholder="Password" ng-required="true" ng-minlength="6" autocomplete="off">
                <div class="input-group-btn"> 
                  <button type="button" class="btn btn-login btn_add_on" ng-click="kaguaPassword()" ng-disabled="loginForm.password.$invalid"><span ng-hide="hajarudi_kagua_password">Login</span> 
                  <div class="rstd_spinner_thin" ng-show="hajarudi_kagua_password" style="padding-top:3px"> 
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  </button>
                </div>
              </div>
            </div>
            <div class="login-top_text w3-text-yellow"> 
              <div class="kosa" ng-show="usernameerror"> 
                <button type="button" class="close" ng-click="clearusernameerrorMsg()"><span aria-hidden="true">&times;</span></button>
                {{usernameerrorMessage}}</div>
              <div class="kosa" ng-show="passworderror"> 
                <button type="button" class="close" ng-click="clearpassworderrorMsg()"><span aria-hidden="true">&times;</span></button>
                {{passworderrorMessage}}</div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--div class="clear"></div-->
<!--------------------------div class="login__bottom__links"> 
<div class="login-bottom_text_right" ng-hide="passwordsuccess">
<div class="page-wrap">

	<nav>
		<ul class="nav">
				
			<li><a href="#" class="icon-home"></a></li>
				
			<li><a href="#" class="icon-menu"></a></li>
				
			<li><a href="#" class="icon-lock-open"></a></li>
				
			<li><a href="#" class="icon-help"></a></li>
		</ul>
	</nav>

</div>
</div>
</div-------------------->

<!-----------------------------------------div class="login__bottom__links"> 
<!--div class="login-bottom_text_right" ng-hide="passwordsuccess">
<span class="btn_text" ng-click="check_resettNywila_request()">Badili Nywila</span>
</div-->
<!-----------------------------------------div class="login-bottom_text_right" ng-hide="passwordsuccess">
<span class="restade_btn kijani_3" ng-click="check_resettNywila_request()">Forgot Password</span>
<!--span class="btn_text" ng-click="check_resettNywila_request()">Badili Nywila</span-->
<!----------------------------/div>

</div------------------>

 
	
</div>

<div class="login__bottom__links">
<!--div class="login-bottom_tools_left" ng-hide="passwordsuccess"><span>© </span></div-->
<div class="login-bottom_text_right" ng-hide="passwordsuccess">
<div class="page-wrap">

	<nav>
		<ul class="nav icon_normal_size">
				
			<!--li><a href="<php echo $_SESSION['home'];?>" class="icon-home"></a></li-->
			<li><a href="index.php" class="icon-home"></a></li>
				
			<li><a href="#" class="icon-menu"></a></li>
				
			<li><a href="#" class="icon-lock-open"></a></li>
				
			<li><a href="#" class="icon-help"></a></li>
		</ul>
	</nav>

</div>
</div>
</div>
<!--div class="login__bottom__matangazo"></div-->

</div>
<div class="login-bottom_text_left" ng-hide="passwordsuccess"><span>© 2021 Wizara ya Maliasili na Utalii</span></div>
 
  <?php include('funika_kurasa.php');?>
  <?php include('full_page_spinner.php');?>
  <!-- POPUP RESET NYWILA -->
  <div class="modal fade" tabindex="-1" role="dialog" id="reset_nywilaModal" data-keyboard="false" data-backdrop="static"> 
    
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
      <form name="reset_nywilaForm" novalidate>
        <div class="modal-body"> 
          <div class="alert alert-danger small" ng-show="error"> 
            <button type="button" class="close" ng-click="clearMsg()"><span aria-hidden="true">&times;</span></button>
            {{errorMessage}}</div>
          <div class="form-group"> 
            <input name="reset_nywila_user_request" ng-model="reset_nywila_user_request" class="form-control" type="text" placeholder="Namba ya cheki.." ng-required="true" ng-minlength="2">
            <!--div class="error validationerror" ng-show="reset_nywilaForm.reset_nywila_user_request.$invalid && reset_nywilaForm.reset_nywila_user_request.$touched">Namba imekosewa..</div-->
          </div>
          <button type="submit" class="btn btn-info" ng-click="submitRequest()" ng-disabled="reset_nywilaForm.$invalid">Tuma</button>
          <button type="button" class="btn btn-default" ng-click="ficha_nywilaModal()">Ondoka</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!-- END POPUP PASSWORD RESET -->
  <!-- NAMBA YA UHAKIKI -->
  <div class="modal fade" tabindex="-1" role="dialog" id="confirmModal" data-keyboard="false" data-backdrop="static"> 
    
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
      <form name="confirmForm" novalidate>
        <div class="modal-body"> 
          <div class="alert alert-success small" ng-show="smssuccess"> 
            <button type="button" class="close" ng-click="clearsmssuccessMsg()"><span aria-hidden="true">&times;</span></button>
            {{smssuccessMessage}}</div>
          <div class="alert alert-danger small" ng-show="confirmerror"> 
            <button type="button" class="close" ng-click="clearconfirmerrorMsg()"><span aria-hidden="true">&times;</span></button>
            {{confirmerrorMessage}}</div>
          <div class="form-group"> 
            <input name="userspns_namba_ya_uhakiki" ng-model="userspns_namba_ya_uhakiki" class="form-control" type="text" placeholder="Ingiza namba ya uhakiki.." ng-required="true" ng-minlength="4">
          </div>
          <button type="submit" class="btn btn-info" ng-click="allowLogin()" ng-disabled="confirmForm.$invalid">Tuma</button>
          <button type="button" class="btn btn-default" ng-click="ficha_confirmModal()">Ondoka</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!-- END NAMBA YA UHAKIKI -->
  <!-- SMS ERROR TAARIFA-->
  <div class="modal fade" tabindex="-1" role="dialog" id="smstaarifaModal" data-keyboard="false" data-backdrop="static"> 
    
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
      <div class="modal-body"> 
        <div class="alert alert-danger small" ng-show="smserror"> 
          <!--button type="button" class="close" ng-click="clearsmserrorMsg()"><span aria-hidden="true">&times;</span></button-->
          {{smserrorMessage}}</div>
        <div class="alert alert-success small" ng-show="confirmsuccess"> 
          <!--button type="button" class="close" ng-click="clearconfirmsuccessMsg()"><span aria-hidden="true">&times;</span></button-->
          {{confirmsuccessMessage}}</div>
        <div class="alert alert-danger small" ng-show="confirmerror"> 
          <!--button type="button" class="close" ng-click="clearconfirmerrorMsg()"><span aria-hidden="true">&times;</span></button-->
          {{confirmerrorMessage}}</div>
        <button type="button" class="btn btn-default" ng-click="ficha_smstaarifaModal()">Ondoka</button>
      </div>
    </div>
  </div>
  </div>
  <!--END SMS ERROR TAARIFA-->
<script>
var app = angular.module('loginApp', []);

app.factory('focus', function($timeout, $window) {
    return function(id) {
      $timeout(function() {
        var element = $window.document.getElementById(id);
        if(element)
          element.focus();
      });
    };
});
app.directive('eventFocus', function(focus) {
    return function(scope, elem, attr) {
      elem.on(attr.eventFocus, function() {
        focus(attr.eventFocusId);
      });

      scope.$on('$destroy', function() {
        elem.off(attr.eventFocus);
      });
    };
});

app.controller('loginController', function($scope, $http, focus){

    $scope.focus_username = function() {
      focus('username');
    };
	$scope.focus_password = function() {
      focus('password');
    };


//KAGUA ANAYELOGIN
	
	$scope.usernamesuccess = false;
	$scope.usernameerror = false;
	$scope.passwordsuccess = false;
	$scope.passworderror = false;
	$scope.onesha_username_field = true;
	$scope.onesha_password_field = false;
	
	$scope.clearusernameerrorMsg = function(){
		$scope.usernameerror = false;
		$scope.focus_username();
	};
	$scope.clearpassworderrorMsg = function(){
		$scope.passworderror = false;
		$scope.focus_password();
	};
	
	$scope.show_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('show');
	};
	$scope.close_funika_kurasa = function(){
		var modal_popup = angular.element('#funika_kurasa_panel');
		modal_popup.modal('hide');
	};
	$scope.show_full_page_spinner = function(){
		var modal_popup = angular.element('#full_page_spinner_panel');
		modal_popup.modal('show');
	};
	$scope.close_full_page_spinner = function(){
		var modal_popup = angular.element('#full_page_spinner_panel');
		modal_popup.modal('hide');
	};
	
	$scope.form_data = {};
	$scope.kaguaUsername = function(){
	$scope.show_funika_kurasa();
	$scope.hajarudi_kagua_username = true;
		$http({
			method:"POST",
			url:"kagua_mtumiaji/kagua_mtumiaji.php",
			data:{
			'posted_username':$scope.username, 'action':'kagua_username'
			}
		}).success(function(data){
			$scope.close_funika_kurasa();
			$scope.hajarudi_kagua_username = false;
			if(data.error != '')
			{
				$scope.usernamesuccess = false;
				$scope.usernameerror = true;
				$scope.onesha_username_field = true;
				$scope.onesha_password_field = false;
				$scope.username = '';
				$scope.focus_username();
				$scope.usernameerrorMessage = data.error;				
			}
			else
			{
				$scope.usernamesuccess = true;
				$scope.usernameerror = false;
				$scope.onesha_username_field = false;
				$scope.onesha_password_field = true;
				$scope.username = '';
				$scope.password = '';
				$scope.focus_password();
				$scope.confirmed_username = data.confirmed_username;
				$scope.form_data = {};
			}
		});
	};
	
		$scope.kaguaPassword = function(){
		$scope.show_funika_kurasa();
		$scope.hajarudi_kagua_password = true;
		$http({
			method:"POST",
			url:"kagua_mtumiaji/kagua_mtumiaji.php",
			data:{
			'confirmed_username':$scope.confirmed_username, 'posted_password':$scope.password, 'action':'kagua_password'
			}
		}).success(function(data){			
			$scope.hajarudi_kagua_password = false;
			$scope.close_funika_kurasa();
			if(data.error != '')
			{
				$scope.passwordsuccess = false;
				$scope.passworderror = true;
				$scope.onesha_username = false;
				$scope.onesha_password = true;
				$scope.password = '';
				$scope.focus_password();
				$scope.passworderrorMessage = data.error;				
			}
			else
			{
				$scope.show_full_page_spinner();
				$scope.passwordsuccess = true;
				$scope.passworderror = false;
				$scope.usernamesuccess = false;
				$scope.onesha_username_field = false;
				$scope.onesha_password_field = false;
				$scope.username = '';
				$scope.password = '';
				$scope.form_data = {};				
				window.location.href='index_routing.php';
			}
		});
	};

//ALIYESAHAU PASSWORD
	$scope.check_resetNywila_request = function(){
		$scope.open_reset_nywilaModal();				
	};
	
	$scope.open_reset_nywilaModal = function(){
		var modal_popup = angular.element('#reset_nywilaModal');
		modal_popup.modal('show');
	};

	$scope.close_reset_nywilaModal = function(){
		var modal_popup = angular.element('#reset_nywilaModal');
		modal_popup.modal('hide');
	};
	
	$scope.success = false;
	$scope.error = false;
	$scope.smssuccess = false;
	$scope.smserror = false;
	//$scope.confirmsuccess = false;
	$scope.confirmerror = false;
	
	$scope.clearMsg = function(){
		$scope.error = false;
	};
	$scope.clearsmssuccessMsg = function(){
		$scope.smssuccess = false;
	};
	$scope.clearsmserrorMsg = function(){
		$scope.smserror = false;
	};
	$scope.clearconfirmerrorMsg = function(){
		$scope.confirmerror = false;
	};
	/*$scope.clearconfirmsuccessMsg = function(){
		$scope.confirmsuccess = false;
	};*/
	
	$scope.ficha_nywilaModal = function(){
		$scope.clearMsg();
		$scope.close_reset_nywilaModal();
	};

	$scope.open_confirmModal = function(){
		var modal_popup = angular.element('#confirmModal');
		modal_popup.modal('show');
	};
	$scope.close_confirmModal = function(){
		var modal_popup = angular.element('#confirmModal');
		modal_popup.modal('hide');
	};
	$scope.ficha_confirmModal = function(){
		$scope.clearsmssuccessMsg();
		$scope.clearconfirmerrorMsg();
		$scope.close_confirmModal();
	};
	$scope.open_smstaarifaModal = function(){
		var modal_popup = angular.element('#smstaarifaModal');
		modal_popup.modal('show');
	};
	$scope.close_smstaarifaModal = function(){
		var modal_popup = angular.element('#smstaarifaModal');
		modal_popup.modal('hide');
	};
	$scope.ficha_smstaarifaModal = function(){
		$scope.clearsmserrorMsg();
		$scope.clearconfirmerrorMsg();
		$scope.close_smstaarifaModal();
	};
	
	$scope.form_data = {};
	$scope.submitRequest = function(){
		$http({
			method:"POST",
			url:"reset_request/check_request.php",
			data:{
			'request_input':$scope.reset_nywila_user_request, 'action':'check_existance'
			}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.reset_nywila_user_request = '';
				$scope.errorMessage = data.error;
			}
			else
			{
				//$scope.success = true;
				$scope.error = false;
				$scope.reset_nywila_user_request = '';
				$scope.form_data = {};
				$scope.close_reset_nywilaModal();
				$scope.sendSMS();
			}
		});
	};

	$scope.sendSMS = function(){
		$http({
			method:"POST",
			url:"reset_request/smsApp.php",
			data:{'action':'tuma_sms'}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.smssuccess = false;
				$scope.smserror = true;
				$scope.smserrorMessage = data.error;
				$scope.open_smstaarifaModal();
			}
			else
			{
				$scope.smssuccess = true;
				$scope.smserror = false;
				$scope.smssuccessMessage = data.message;
				$scope.open_confirmModal();
				$scope.form_data = {};
			}
		});
	};
	
	$scope.allowLogin = function(){
		$scope.smssuccess = false;
		$http({
			method:"POST",
			url:"reset_request/confirmApp.php",
			data:{'userspns_namba_ya_uhakiki':$scope.userspns_namba_ya_uhakiki,'action':'confirm_namba_ya_uhakiki'}
		}).success(function(data){
			if(data.error_namba_ya_uhakiki_imekosewa != '')
			{
				$scope.confirmsuccess = false;
				$scope.confirmerror = true;
				$scope.userspns_namba_ya_uhakiki = '';
				$scope.confirmerrorMessage = data.error_namba_ya_uhakiki_imekosewa;
				//OPTION YA KURESEND KAMA KAKOSEA MARA "n" TIMES IWEKWE HAPA
			}
			else if(data.error_muda_wa_kusubiri != '')
			{
				$scope.confirmsuccess = false;
				$scope.confirmerror = true;
				$scope.userspns_namba_ya_uhakiki = '';
				$scope.confirmerrorMessage = data.error_muda_wa_kusubiri;
				//OPTION YA KURESEND NAMBA KAMA MUDA UMEKWISHA IWEKWE HAPA
				$scope.close_confirmModal();
				$scope.form_data = {};
				$scope.open_smstaarifaModal();
			}else{
				$scope.userspns_namba_ya_uhakiki = '';
				$scope.confirmsuccess = true;
				$scope.confirmerror = false;
				$scope.smserror = false;
				$scope.confirmsuccessMessage = data.message;	
				$scope.close_confirmModal();
				$scope.form_data = {};							
				$scope.open_smstaarifaModal();
			}
		});
	};


});

</script>
</body>
</html>