
<div class="modal modal_full_page_spinner fade" id="delete_confirmation_box" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color: rgba(255,255,255,.8)">

		
        <div class="modal-body full_page_spinner_wrap"> 
          
			<div class="full_page_spinner_inner" style="width:100%"> 
			
			<div class="container" style="max-width:700px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1); margin-top:-10px; margin-bottom:5px"> 
            <div class="div-content-inner-confirmation" style="max-width:700px; border:1px solid #fff; border-radius:2px; padding: 40px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
			
			<div class="">
			  
			<div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">
				<!--span class="modal__top__title" style="vertical-align:middle">{{modalTitle}}</span-->
				<!--span class="btn btn-danger pull-right" style="border:1px solid #fff; margin-top:0px" ng-click="closeModal()"><i class="glyphicon glyphicon-remove"></i></span-->
			
			
			
			</div>
			
		 
			
				<div class="bordered__box__outer">
				<div class="bordered__box__inner" style="padding:0px; height:295px">
				
				<!--div class="alert alert-danger alert-dismissible" ng-show="error"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{errorMessage}}</div-->
				
			
				<div class="confirmation_box_logo_wrap" style="background-color: rgba(61,138,101,1)">				
				<div class="confirmation_box_logo">
				<span class="glyphicon glyphicon-alert" style="font-size:48px; color:#ffcc66"></span>
				</div>
				</div>				
				<div class="confirmation_box_body">				
				<div class="confirmation_box_body_description_status" ng-show="show_deleting_window">				
					<div class="rstd_spinner_medium">
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:loaded_successfully, load_error:loaded_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:loaded_successfully, load_error:loaded_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:loaded_successfully, load_error:loaded_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:loaded_successfully, load_error:loaded_unsuccessfully }'></div>
						<div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
						<div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
					</div>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="deleting_in_progress">Deleting ...</span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="loaded_successfully">Done!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="loaded_successfully">Facility deleted successfully</span></span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="loaded_successfully && show_default_selection">Please wait ...</span>					
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="loaded_unsuccessfully">Failed!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="loaded_unsuccessfully">Unable to delete user</span></span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="delete_denied()" ng-show="(loaded_successfully || loaded_unsuccessfully) && !show_default_selection">OK</div>
				</div>
								
				<div class="confirmation_box_body_description" ng-show="!show_deleting_window && !show_deleting_reason  && !show_default_selection">
					<span class="confirmation_message w3-text-white">Delete this facility?</span>
					<span class="confirmation_item_1 w3-text-white thin_line_height">{{facility_details_facility_name}}</span>
					<span class="confirmation_item_2" style="margin-top:-5px thin_line_height">{{facility_details_halmashauri}}, {{facility_details_mkoa}}</span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-show="!default_is_selected" ng-click="delete_reason()">Delete</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-show="default_is_selected" ng-click="default_selection()">Delete</div>
					<div class="btn_text confirmation_cancel_button w3-text-white" ng-click="delete_denied()">Cancel</div>
				</div>
				<form id="delete_default_record_Form" name="delete_default_record_Form" novalidate>
				<div class="confirmation_box_body_description" ng-show="!show_deleting_window  && !show_deleting_reason && show_default_selection">
				 
					<span class="confirmation_message w3-text-white" ng-show="kuna_facility_nyingine">Select default facility</span>
					<span class="confirmation_message w3-text-white" ng-show="!kuna_facility_nyingine">WARNING</span>
					<span class="confirmation_item_2" style="margin-top:-5px" ng-show="kuna_facility_nyingine">Use same username and password</span>
					<span class="confirmation_item_1 custom_yellow thin_line_height" style="margin-top:15px" ng-show="!kuna_facility_nyingine">Deleting this facility will remove your access to this system.</span>
					  
					  <div class="w3-row form-group" style="margin-top:15px; margin-bottom:0px" ng-show="kuna_facility_nyingine">
                      <div class="w3-col s12"> 
					  <!--div class="input_label "></div-->
                        <div class="input-group input-group_rstd confirmation_box_select"> 
                          <ui-select name="facility_default_replace" ng-model="facility_default_replace.selected" theme="bootstrap" ng-required="true"> 
                          <ui-select-match placeholder="Select facility">{{$select.selected.facility_name}}</ui-select-match> 
                          <ui-select-choices position="down" repeat="item in facilities_not_default_data | filter: $select.search"> 
                          <span ng-bind-html="item.facility_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_facility_default_replace()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					  					  
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-click="!delete_default_record_Form.$invalid?delete_reason():null" ng-disabled="delete_default_record_Form.$invalid" ng-show="kuna_facility_nyingine">OK</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-click="delete_reason()" ng-show="!kuna_facility_nyingine">Remove</div>
					<div class="btn_text confirmation_cancel_button w3-text-white" ng-click="delete_denied()">Cancel</div>
				
				</div>
				</form>
				<form id="deleteForm" name="deleteForm"  novalidate>
				<div class="confirmation_box_body_description" ng-show="!show_deleting_window && show_deleting_reason">
				 
				 <span class="confirmation_message w3-text-white">Reason</span>
					<span class="confirmation_item_2 thin_line_height" style="margin-top:-5px">Reason for deleting {{facility_details_facility_name}}</span>
					  
					  <div class="w3-row form-group" ng-init="" style="margin-top:15px; margin-bottom:0px"> 
                      <div class="w3-col s12"> 
                        <div class="input-group input-group_rstd confirmation_box_select"> 
                          <ui-select name="facility_delete_reason" ng-model="facility_delete_reason.selected" theme="bootstrap" ng-required="true"> 
                          <ui-select-match placeholder="Select reason">{{$select.selected.facility_delete_reason_details}}</ui-select-match> 
                          <ui-select-choices position="down" repeat="item in facility_delete_reason_data | filter: $select.search"> 
                          <span ng-bind-html="item.facility_delete_reason_details | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_facility_delete_reason()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>					  
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-click="!deleteForm.$invalid?delete_confirmed(hidden_id):null" ng-disabled="deleteForm.$invalid">OK</div>
					<div class="btn_text confirmation_cancel_button w3-text-white" ng-click="delete_denied()">Cancel</div>
				
				</div>
				</form>
								
				</div>
				
				</div>
				</div>
						
			
			
			<!--div class="w3-text-light-grey" style="width:100%; padding:18px 0px 0px 0px; border:0px solid #fff; border-radius:4px; margin:0px 0px 0px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__bottom__text">WAJIBIKA</span>
				<span class="pull-right"></span>
			</div-->
							
			  </div>		  
            </div>
          </div>
				
				
			</div>
          
        </div>
  
	  
    </div>
  </div>
</div>