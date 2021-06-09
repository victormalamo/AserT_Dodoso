<div class="modal left fade" id="assessment_sheet_for_cottage_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color:#ffffff">

	   <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(255,255,255,1); border-bottom:1px solid #f1f1f1"> 
			<!--span>
			<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button>
			</span-->
			
			<div class="pull-right">
				<div class="btn_text top_menu_item_button_text" style="width:115px; text-align:left; color:rgba(0,0,0,.5); font-weight:normal">Scores:&nbsp;<span id="total_cottage" ng-bind="assessment_score_cottage" style="font-size:1.125rem!important">0</span><span ng-class="(assessment_score_cottage >= 75)?'custom_green_text':'custom_red_text'"></span></div>
				<div class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_left" ng-click="submit_assessment_cottage_form()">Save <span id="form_save_status_cottage" ng-bind="show_asteric_cottage"></span></div>
				<div id="reset_btn_cottage" class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_right" ng-click="futa_radio_check_values_cottage()">Reset</div>
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="check_for_assessment_form_changes_cottage()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>				
			</div>
	   </div>
	  	  
	   <div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:120px; margin-left:auto; margin-right:auto">
		<center>
            <!--div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div-->
			<div class="page-header__subtitle w3-text-black" style="font-size:30px">ASSESSMENT SHEET</div>
			<div class="footer__site__title w3-text-black" style="margin:0px 0px 28px 0px; color:">(Cottages)</div>
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
              
                		
                  <form  id="assessment_sheet_cottage_form" name="assessment_sheet_cottage_form" ng-submit="submit_assessment_cottage_form()" enctype="multipart/form-data" novalidate>

				  
				  
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
						  
						  <?php include('msimamiziApp/modal_assessment_sheet_for_cottage_location.php');?>
						  <?php include('msimamiziApp/modal_assessment_sheet_for_cottage_building.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_front_office.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_lobby_lounge_other_public_areas.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_function_rooms.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_restaurants.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_bar.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_kitchen.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_guest_rooms.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_guest_bathrooms.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_suites.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_hygiene_and_sanitation.php');?>		
						  <php include('msimamiziApp/modal_assessment_sheet_for_vill_safety_and_security.php');?> 
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_sundry_services.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_human_resources.php');?>
						  <php include('msimamiziApp/modal_assessment_sheet_for_cottage_general.php');?-->
						  
						  </tbody>
						</table>
						
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div class="btn_ukubwa_wrap" style="margin-top:40px!important">
					  <input type="text" class="" id="assessment_score_cottage" name="assessment_score_cottage" ng-model="assessment_score_cottage" style="display: none;"/>
					  <input type="text" class="" id="show_asteric_cottage" name="show_asteric_cottage" ng-model="show_asteric_cottage" value="" style="display: none;"/>
					  <input class="sum_cottage" type="checkbox" ng-model="for_checkbox" value="0" ng-checked="true" style="display: none;"/>
					  <!--the above is for miss-behaving last unchecked checkbox when nothing is checked-->
					  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request">Save</button>
                      <button type="button" id="reset_btn_bottom_cottage" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="futa_radio_check_values_cottage()">Reset</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="check_for_assessment_form_changes_cottage()">Cancel</button>
                    </div>
                    </div>
                  </form>				
                
             

            </div>
          </div>
        </div>
      </div>
    </div>
</div>