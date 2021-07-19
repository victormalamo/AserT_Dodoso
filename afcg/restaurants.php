<!DOCTYPE html>
<html ng-app="msimamiziApp" ng-controller="watumiajiController" class="restade" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>AserT</title>

<!--link href="../../css/spinner_full_page.css" rel="stylesheet">
<link href="../../css/font-awesome.css" rel="stylesheet">
<link href="../../css/font_krona_one.css" rel="stylesheet">
<link href="../../css/font_rajdhani.css" rel="stylesheet">
<link href="../../css/font_sansation.css" rel="stylesheet"-->
<link href="../../css/font_restade_icons_1.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/font_merriweather.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/font_source_sans_pro.css" type="text/css" media="all">
<link href="../../css/coreui-docs.css" rel="stylesheet">
<link href="../../css/coreui-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/mnrt-resp-main.css">
<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css" />
<link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../css/pandisha_faili_wateja.css">

<!-- checkbox, radio, icons -->
<link href="../../css/pretty-checkbox.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../css/font_mdi.css" rel="stylesheet" type="text/css" media="all"/>
<!-- end checkbox, radio, icons -->

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)restade(\s|$)/,"$1js$2")})(document,window,0);</script>

<link rel="stylesheet" type="text/css" href="../../css/w3.css">
<script src="../../js/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/resp_form.css">

<script src="../../js/angular_1_3_15.js"></script>
<script src="../../js/jquery_002.js"></script>
<script src="../../js/angular-datatables.js"></script>
<script src="../../js/bootstrap.js"></script>
<link rel="stylesheet" href="../../css/datatables.css">
<link rel="stylesheet" href="../../css/ng_form_validation_style.css">

<script src="../../js/angular-sanitize.js"></script>
<!-- ui-select files -->
<script src="../../js/select.js"></script>
<link rel="stylesheet" href="../../css/select.css">

</head>

<body>
<!--div class="modal left fade" id="assessment_sheet_for_restaurant_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color:#ffffff"-->

	   <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(255,255,255,1); border-bottom:1px solid #f1f1f1"> 
			<div class="pull-right">
				<div class="btn_text top_menu_item_button_text" style="width:115px; text-align:left; color:rgba(0,0,0,.5); font-weight:normal">Scores:&nbsp;<span id="total_restaurant" ng-bind="assessment_score_restaurant" style="font-size:1.125rem!important">0</span><span ng-class="(assessment_score_restaurant >= 75)?'custom_green_text':'custom_red_text'"></span></div>
				<div class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_left" ng-click="submit_assessment_restaurant_form()">Save <span id="form_save_status_restaurant" ng-bind="show_asteric_restaurant"></span></div>
				<div id="reset_btn_restaurant" class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_right" ng-click="futa_radio_check_values_restaurant()">Reset</div>
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="check_for_assessment_form_changes_restaurant()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>				
			</div>
	   </div>
	  	  
	   <div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:120px; margin-left:auto; margin-right:auto">
		<center>
            <!--div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div-->
			<div class="page-header__subtitle w3-text-black" style="font-size:30px">ASSESSMENT SHEET</div>
			<div class="footer__site__title w3-text-black" style="margin:0px 0px 28px 0px; color:">(Restaurant)</div>
            <span class="dividerTTT" style="margin-bottom:7px"> 
            <hr style="width:100px; border:4px solid;">
            </span>  
        </center>
		</div>
		
						  
				<div class="" style="padding:10px 0px 10px 0px; margin:0px auto 0px; max-width:800px;"> 
					<center>
						<div class="footer__site__title w3-text-black">{{facility_name}}</div>
						<div class="confirmation_item_3 thin_line_height" style="margin-top:10px; margin-bottom:0px; padding:0px 10px 0px 10px; color:rgba(0,0,0,.8);">{{trading_name}} {{physical_address}} {{postal_address}} </div>
					</center>
				</div>
		
        <div class="modal-body"> 
          <div class="container" style="max-width:850px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,0)"> 
            <div class="" style="max-width:850px; border:1px solid #fff; border-radius:2px; padding: 0px 0px 20px 0px; margin-left:auto; margin-right:auto"> 
              
                		
                  <form  id="assessment_sheet_restaurant_form" name="assessment_sheet_restaurant_form" ng-submit="submit_assessment_restaurant_form()" enctype="multipart/form-data" novalidate>

					<table id="" class="table table-bordered border-mdblue">
						  <thead>						  	
						  	<tr style="height:80px"> 
							  <th colspan="7" style="vertical-align:middle; text-align:center" class="border-left-right font-lg"><span style="float:left; width:200px; text-align:left; margin-left:-8px">&nbsp </span>{{}}<span style="float:right; width:200px; text-align:right; color:rgba(0,0,0,.5); font-weight:normal">{{}}</span></th>
							</tr>
							<tr style="height:80px"> 
							  <th colspan="6" style="vertical-align:middle" class="border-mdblue">ITEMS AND GUIDELINES</th>
							  
							  <!--th style="vertical-align:middle" class="border-mdblue">DECISION</th-->
							  <th data-orderable="false" style="vertical-align:middle; width:150px!important" class="border-mdblue">ASSESSOR'S COMMENTS</th>
							</tr>							
						  </thead>
						  <tbody style="font-size:15px">
						  
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_location.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_building.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_reception.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_dining_area.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_service.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_entertainment.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_bar.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_kitchen.php');?>
						  <!--?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_guest_rooms.php');?-->
						  <!--?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_guest_bathrooms.php');?-->
						  <!--php include('msimamiziApp/modal_assessment_sheet_for_restaurant_suites.php');?-->
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_hygiene_and_sanitation.php');?>		
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_safety_and_security.php');?> 
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_sundry_services.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_human_resources.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_restaurant_general.php');?>
						  
						  </tbody>
						</table>
						
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div class="btn_ukubwa_wrap" style="margin-top:40px!important">
					  <input type="text" class="" id="assessment_score_restaurant" name="assessment_score_restaurant" ng-model="assessment_score_restaurant" style="display: none;"/>
					  <input type="text" class="" id="show_asteric_restaurant" name="show_asteric_restaurant" ng-model="show_asteric_restaurant" value="" style="display: none;"/>
					  <input class="sum_restaurant" type="checkbox" ng-model="for_checkbox" value="0" ng-checked="true" style="display: none;"/>
					  <!--the above is for miss-behaving last unchecked checkbox when nothing is checked-->
					  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request">Save</button>
                      <button type="button" id="reset_btn_bottom_restaurant" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="futa_radio_check_values_restaurant()">Reset</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="check_for_assessment_form_changes_restaurant()">Cancel</button>
                    </div>
                    </div>
                  </form>				
                
             

            </div>
          </div>
        <!--/div>
      </div>
    </div-->
</div>

<!--app-->
<script src="msimamiziApp/msimamiziApp.js"></script>
<!--controllers-->
<script src="msimamiziApp/controllers/restaurant_watumiaji_Ctrl.js"></script>
<!--restaurant-->
<script src="msimamiziApp/controllers/restaurant_ctrl.js"></script>
<script src="msimamiziApp/controllers/restaurant_tallying_ctrl.js"></script>
<script src="msimamiziApp/controllers/restaurant_custom_marks_filter.js"></script>
<!--</body></html-->
</body>
</html>
