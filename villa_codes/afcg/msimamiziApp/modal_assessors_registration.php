
<div id="wrap" class="hideMeInPrint">
<div class="modal left fade" id="assessors_registration_selection_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document"> 
      <div class="modal-content dawati-bgTTTT" style="background-color:#ffffff">
	  
	  <div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(61,138,101,0); border-bottom:1px solid #f1f1f1"> 
			<!--span>
			<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button>
			</span-->
			<div class="pull-right">
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_assessors_registration_selection_panel()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>
			</div>
	   </div>
	  	  
	   <!--div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:-30px; margin-left:auto; margin-right:auto">
		<center>
            <div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div>
			<div class="page-header__subtitle w3-text-black">UNITED REPUBLIC OF TANZANIA</div>
			<div class="footer__site__title w3-text-gray" style="margin:-5px 0px 28px 0px;">Ministry of Natural Resources and Tourism</div>
            <span class="divider" style="margin-bottom:7px"> 
            <hr>
            <hr>
            </span> 
        </center>
		</div-->
		
						  
		<div class="" style="padding:10px 0px 10px 0px; margin:20px auto 0px"> 
			<center>
				<div class="footer__site__title w3-text-black" style="font-weight:700; font-size:2rem">ASSESSORS </div>
				<div class="confirmation_item_3" style="margin-top:5px; margin-bottom:0px; color:rgba(0,0,0,.5)">Registration for self assessment</div>
			</center>
		</div>
		
        <div class="modal-body"> 
          <div class="container" style="max-width:610px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1)"> 
            <div class="" style="max-width:610px; border:1px solid #fff; border-radius:2px; padding: 60px 40px 10px 40px; margin-left:auto; margin-right:auto"> 
              
                <div class="" style="margin-top:-20px; margin-bottom:10px; width:100%; height:30px; text-align:center; color:rgba(255,255,255,.9)">
					<div class="pull-left" ng-show="!show_create_new_assessor_form">
					<div style="margin-top:-18px; border-bottom:1px solid #ffc107; text-align:left">ALLOCATE ASSESSORS</div>
					<div class="confirmation_item_3" style="margin-top:-2px; margin-bottom:0px; text-align:left">{{facility_details_facility_name}}, {{facility_details_physical_address}}</div>										
					</div>
					<div class="w3-text-white" style="width:100%;text-align:center; font-weight:700" ng-show="show_create_new_assessor_form">
					REGISTER ASSESSOR {{assessor_group_id}}										
					</div>
					<div class="pull-right">
						<!--div class="w3-text-white div_hover" ng-click="show_create_new_assessor_form = !show_create_new_assessor_form"-->
						<div class="w3-text-white div_hover" ng-click="show_create_new_assessor_form = !show_create_new_assessor_form" ng-show="!show_create_new_assessor_form">
						<span style="font-size:24px" class="mdi mdi-account-plus btn_text btn_text_no_hover top_menu_item_button_text"></span>
						<div class="btn_text btn_text_no_hover top_menu_item_button_text" style="padding:0px 5px 0px 5px; margin-left:-3px; font-weight:normal">New</div>					
						</div>				
					</div>									
				</div>				
					
				  
				  <!---------------------------- CREATE NEW ASSESSOR ---------------------------------------------------------------->
				  
				  <div ng-show="show_create_new_assessor_form">
				  
				  <form  id="create_new_assessor_form" name="create_new_assessor_form"  enctype="multipart/form-data" novalidate>
				  
				  <div class="bordered__box__outer outer_responsive">
				  <div class="bordered__box__inner inner_responsive" style="padding-bottom:15px">
				  
                    
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label ">Assessor's Full Names</div>
                          <input  id="new_assessor_full_name" name="new_assessor_full_name" ng-model="new_assessor_full_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})+\ ([a-zA-Z\.\-\ ])+$/" placeholder="Full Names" class="form-control rounded"  type="text" ng-required="true">
                        </div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label ">Assessor's Qualifications</div>
                          <input  id="new_assessor_qualification" name="new_assessor_qualification" ng-model="new_assessor_qualification" ng-pattern="/^([a-zA-Z0-9_\.\-\ ]{2,4})+$/" placeholder="Qualifications" class="form-control rounded"  type="text" ng-required="true">
                        </div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label ">Assessor's Firm </div>
                          <input  id="new_assessor_firm" name="new_assessor_firm" ng-model="new_assessor_firm" ng-pattern="/^([a-zA-Z0-9_\.\-\ ]{2,4})+$/" placeholder="Firm, Company, Institution" class="form-control rounded"  type="text" ng-required="true">
                        </div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label ">Assessor's Mobile Phone</div>
                          <input name="new_assessor_mobile_number" ng-model="new_assessor_mobile_number" placeholder="Mobile Phone Number" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control rounded" type="text"  ng-minlength="10" ng-required="true">
                        </div>
                      </div>
					</div>	
					
					
					

					</div>
                    </div>
					
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div style="margin-top:15px!important">				
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_left" ng-disabled="create_new_assessor_form.$invalid" ng-click="!create_new_assessor_form.$invalid?submit_new_created_assessors_form():''">Register</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_middle" ng-click="reset_create_new_assessor()">Reset</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_right" ng-click="show_create_new_assessor_form = !show_create_new_assessor_form">Cancel</div>
					</div>
					
                    </div>
					
                  </form>
				  
				  </div>
				  
				  <!---------------------------- END CREATE NEW ASSESSOR ------------------------------------------------------------>
				  
				  
				  	
                  <!---------------------------- ASSIGN ASSESSORS ------------------------------------------------------------------->
				  
				  <div ng-show="!show_create_new_assessor_form">
				  
				  <form  id="assigned_assessors_form" name="assigned_assessors_form"  enctype="multipart/form-data" novalidate>
				  
				  <div class="bordered__box__outer outer_responsive">
				  <div class="bordered__box__inner inner_responsive" style="padding-bottom:15px">
				  
                    
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12">
					  <div class="input_label ">Filter Assessors</div>
                        <div class="input-group input-group_rstd" style="width:50%">
                          <ui-select name="assessors_filter" ng-model="assessors_filter.selected" theme="bootstrap" ng-change="load_assessors()"> 
                          <ui-select-match placeholder="Select">{{$select.selected.assessor_group_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in assessors_filter_data | filter: $select.search"> 
                          <span ng-bind-html="item.assessor_group_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_assessors_filter()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>					  
					<div class="w3-row form-group"> 
                      <div class="w3-col s12">
					  <div class="input_label ">Assessor 1 (Leader)</div>
                        <div class="input-group input-group_rstd pull-right-600" style="width:100%">
                          <ui-select name="assessor_1" ng-model="assessor_1.selected" theme="bootstrap" ng-disabled="!assessors_filter.selected" ng-required="true"> 
                          <ui-select-match placeholder="Select">{{$select.selected.assessor_full_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in assessors_data | filter:$select.search" ui-disable-choice = "((item.reg_assessor_id == assessor_2.selected.reg_assessor_id) || (item.reg_assessor_id == assessor_3.selected.reg_assessor_id))"> 
                          <span ng-bind-html="item.assessor_full_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-disabled="!assessors_filter.selected" ng-click="safisha_assessor_1()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12">
					  <div class="input_label ">Assessor 2</div>
                        <div class="input-group input-group_rstd" style="width:100%">
                          <ui-select name="assessor_2" ng-model="assessor_2.selected" theme="bootstrap" ng-disabled="!assessor_1.selected"> 
                          <ui-select-match placeholder="Select">{{$select.selected.assessor_full_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in assessors_data | filter: $select.search" ui-disable-choice = "((item.reg_assessor_id == assessor_1.selected.reg_assessor_id) || (item.reg_assessor_id == assessor_3.selected.reg_assessor_id))"> 
                          <span ng-bind-html="item.assessor_full_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_assessor_2()" ng-disabled="!assessor_1.selected"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					 <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
					  <div class="input_label ">Assessor 3</div>
                        <div class="input-group input-group_rstd pull-right-600" style="width:100%">
                          <ui-select name="assessor_3" ng-model="assessor_3.selected" theme="bootstrap" ng-disabled="!assessor_2.selected" ng-required="assessor_2.selected"> 
                          <ui-select-match placeholder="Select">{{$select.selected.assessor_full_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in assessors_data | filter: $select.search" ui-disable-choice = "((item.reg_assessor_id == assessor_2.selected.reg_assessor_id) || (item.reg_assessor_id == assessor_1.selected.reg_assessor_id))"> 
                          <span ng-bind-html="item.assessor_full_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_assessor_3()" ng-disabled="!assessor_2.selected"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
					
					
					

					</div>
                    </div>
					
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div style="margin-top:15px!important">				
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_left" ng-disabled="assigned_assessors_form.$invalid" ng-click="!assigned_assessors_form.$invalid?submit_assigned_assessors_form():''">Assign</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_middle" ng-click="reset_selected_assessors()">Reset</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_right" ng-click="close_assessors_registration_selection_panel()">Cancel</div>
					</div>
					
                    </div>
					
                  </form>
				  
				  </div>
				  
				  <!--------------------------------------------- END ASSIGN ASSESSORS ------------------------------------------------->           

            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>