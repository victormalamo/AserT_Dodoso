<!DOCTYPE html>
<html class="restade" lang="en">
<head>
<title>AserT</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../../../images/favicon.ico" type="image/x-icon">
		<link href="../../../css/spinner_full_page.css" rel="stylesheet">
		<link href="../../../css/font-awesome.css" rel="stylesheet">
		<link href="../../../css/coreui-docs.css" rel="stylesheet">
		<link href="../../../css/coreui-icons.css" rel="stylesheet">
		<link href="../../../css/font_mdi.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../../css/mnrt-resp-main.css">
		<link rel="stylesheet" type="text/css" href="../../../css/w3.css">
		<link rel="stylesheet" type="text/css" href="../../../css/resp_form.css">
		<link rel="stylesheet" href="../../../bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../../../css/pandisha_faili_wateja.css">
		<link rel="stylesheet" type="text/css" href="../../../css/letter_head.css">
		<link rel="stylesheet" href="../../../css/font_merriweather.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../../css/font_source_sans_pro.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../../css/font_sansation.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../../css/menu_dawati_la_mteja.css" type="text/css" media="all">
		<link href="css/font_mdi.css" rel="stylesheet" type="text/css" media="all"/>
		
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>
	
<script src="../../../js/jquery-1.11.1.min.js"></script>
<script src="../../../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../../js/angular_1_3_15.js"></script>

<link rel="stylesheet" href="../../../css/ng_form_validation_style.css">

<script src="../../../js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="../../../js/select.js"></script>
<link rel="stylesheet" href="../../../css/select.css">
<style type="text/css" media="print">
.hideMeInPrint { display: none; }

.modal-content {
  border: 0px!important;
  border-radius: 0px!important;

}
</style>

<style>
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

	/*#success_message{ display: none;}*/
	
	.modal.left .modal-dialog {
		position: fixed;
		margin: auto;
		width: 100%;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.left .modal-body {
		padding: 15px;
	}

/*Left*/
	/*.modal.left.fade .modal-dialog{
		left: 0%;
		-webkit-transition: opacity 0.0s linear, left 0.0s ease-out;
		   -moz-transition: opacity 0.0s linear, left 0.0s ease-out;
		     -o-transition: opacity 0.0s linear, left 0.0s ease-out;
		        transition: opacity 0.0s linear, left 0.0s ease-out;
	}*/
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}
	
/* ----- v CAN BE DELETED v ----- */

.has-error
		{
			border-color:#cc0000;
			background-color:#ffff99;
		}
		
.dawati-bg {
/*height:100vh; width:calc(100vw - 200px); margin-left:200px; z-index:-1; */
  background: url(tembo.jpg) no-repeat center center fixed;
  /*opacity:0.50;*/
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; /*font-family: 'Open Sans', sans-serif;*/
}

.form-control {
  background-color: #e6e6e6;
  background-image: none;
  border: 1px solid #fff;
  height: 45px;
  padding: 6px 12px;
  font-size:1rem;
  line-height: 1.5;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #e6e6e6!important;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 0 8px rgba(102, 175, 233, 0);
    filter: alpha(opacity=100);
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
@media (min-width:700px){.form-control{font-size:1.125rem}}
@media (min-width:1000px){.form-control{font-size:1.25rem}}
.btn_add_on{
  border-color: #fff;
  border-left-color: #ccc;
  height: 45px;
  background-color: #d0a92c;
  border-left-color: #ffffff;
  color: #1f1516;
}
.btn_add_on:hover {
  color: #574712;
  background-color: #d0a92c;
  border-left-color: #ffffff;
}
.btn_add_on.disabled,
.btn_add_on[disabled],
fieldset[disabled] .btn_add_on {
  cursor: not-allowed;
  filter: alpha(opacity=100);
  opacity: 1;
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn_add_on.disabled,
fieldset[disabled] a.btn_add_on {
  pointer-events: none;
}
.confirmation_button.disabled,
.confirmation_button:disabled,
.confirmation_button[disabled],
fieldset[disabled] .confirmation_button {

	cursor: not-allowed;
	filter: alpha(opacity=100);
	opacity:1;
	color:#ffffff;
	background-color:transparent
}

.w3_light_green{color:#fff!important;background-color:#8bc34a!important}
.inafanyiwa_kazi{animation:fading 2s infinite}@keyframes fading{0%{opacity:0.4}50%{opacity:0.7}100%{opacity:0.4}}
.bado{opacity:0.4}
</style>
</head>

<body ng-app="tuma_fuatilia_app" ng-controller="tuma_fuatilia_controller" class="ng-scope" style="background-color:#f5f5f5" ng-init="focus_vn_1()">
<div class="full_page_spinner_inner" style="width:100%"> 
			
			<div class="container" style="max-width:700px; border-radius:4px; padding:4px 4px 4px 4px; background: url(../../../images/facility_reg_form.png) repeat; margin-top:10px; margin-bottom:5px"> 
            <div class="div-content-inner-confirmation" style="max-width:700px; border:1px solid #d0a92c; border-radius:2px; padding: 5px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
			<div class="facility_reg_form_title" style="width:100%; height:55px"></div>
			<div class="">
			  
			<!--div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">
				<!--span class="modal__top__title" style="vertical-align:middle">{{modalTitle}}</span-->
				<!--span class="btn btn-danger pull-right" style="border:1px solid #fff; margin-top:0px" ng-click="closeModal()"><i class="glyphicon glyphicon-remove"></i></span-->
			
			
			
			<!--/div-->
			
		  <form id="verification_form" name="verification_form"  ng-submit="submit_verification_formTTTT()" novalidate>
			
				<div class="bordered__box__outer outer_responsive_2">
				<div class="bordered__box__inner inner_responsive_2" style="padding:0px; height:295px">
				
				<div class="confirmation_box_body">	
				<div class="confirmation_box_body_description_status" ng-show="!submitting_verification">
					<div class="confirmation_item_1 w3-text-white" style="margin-bottom:20px; font-size:18px" ng-show="true">Authentication</div>										
					<div class="align_row_center_center" style="width:39px; text-align:center">
					<input id="vn_1" name="vn_1" ng-model="vn_1" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_2" name="vn_2" ng-model="vn_2" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_3" name="vn_3" ng-model="vn_3" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_4" name="vn_4" ng-model="vn_4" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_5" name="vn_5" ng-model="vn_5" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_6" name="vn_6" ng-model="vn_6" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					</div>					
					<div class="confirmation_item_2 verification_info_text_in_mobiles_1" style="margin-top:15px; text-align:center">A verification code has been sent to your mobile number. Enter the code to continue.</div>
					<div class="wrap_boxes_row_const" style="margin-top:15px">
						<div class="afcg_home_col_center_center" style="font-size:14px; height:36px; cursor:pointer; color:#5785cc!important" ng-show="!resend_button_visibility" ng-click="show_resend_button()">Didn't get a verification code?</div>
						<div class="afcg_home_col_center_center" style="width:36px; height:36px; cursor:pointer; color:#d0a92c!important" ng-show="resend_button_visibility" ng-click="resend_new_code()"><span class="mdi mdi-restore mdi-48px"></span></div>
						<!--div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:0px; text-align:left; padding-left:20px!important" ng-click="addData()">Facility</div-->
					</div>
					<!--div class="verification_box_buttons_margin" align="center">
					  <div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_left" style="width:100px; margin-top:0px" ng-disabled="true">Re-send</div>
                      <div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_right" style="width:100px; margin-top:0px" ng-disabled="true">Cancel</div>
                    </div-->
				</div>
				<div class="confirmation_box_body_description_status" ng-show="submitting_verification">
					
                  <div class="rstd_spinner_medium"> 
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
                    <div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
                  </div>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitting_verification">Verifying ...</span>
					<!--span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_successfully">Done!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully">Registration successfully</span></span>					
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_unsuccessfully">Failed!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully">Facility not registered</span></span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="close_submit_confirmation_box()" ng-show="submitted_unsuccessfully">OK</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="more_info()" ng-show="submitted_successfully">OK</div-->
				</div>
			
				</div>
				
				</div>
				</div>
						
			</form>
			
			<!--div class="w3-text-light-grey" style="width:100%; padding:18px 0px 0px 0px; border:0px solid #fff; border-radius:4px; margin:0px 0px 0px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__bottom__text">WAJIBIKA</span>
				<span class="pull-right"></span>
			</div-->
							
			  </div>		  
            </div>
          </div>
		</div>
	</div>
				
<!--app-->
<script src="afcgApp.js"></script>
<!--controllers-->
<script src="controllers/afcg_Ctrl.js"></script>
<script>
    $(document).ready(function() {
        $('.one_char').on('input propertychange', function() {
            CharLimit(this, 1);
        });
    });
    /*function CharLimit(input, maxChar) {
        var len = $(input).val().length;
        if (len > maxChar) {
            $(input).val($(input).val().substring(0, maxChar));
        }
    }*/

</script>
<script>
$(".focus_next_vn").bind("input propertychange", function() {
        var $this = $(this);
        setTimeout(function() {
            if ( $this.val().length >= parseInt($this.attr("maxlength"),10) )
                $this.next("input").focus();
        },0);
    });
</script>

</body>
</html>
