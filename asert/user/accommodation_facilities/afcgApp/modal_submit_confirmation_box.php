
<div class="modal modal_full_page_spinner fade" id="submit_confirmation_box" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color: rgba(0,0,0,1)">

		
        <div class="modal-body full_page_spinner_wrap"> 
          
			<div class="full_page_spinner_inner" style="width:100%"> 
			
			<div class="container" style="max-width:700px; border-radius:4px; padding:4px 4px 4px 4px; background: url(../images/facility_reg_form.png) repeat; margin-top:-10px; margin-bottom:5px"> 
            <div class="div-content-inner-confirmation" style="max-width:700px; border:1px solid #d0a92c; border-radius:2px; padding: 5px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
			<div class="facility_reg_form_title" style="width:100%; height:55px"></div>
			<div class="">
			  
			<!--div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">
				<!--span class="modal__top__title" style="vertical-align:middle">{{modalTitle}}</span-->
				<!--span class="btn btn-danger pull-right" style="border:1px solid #fff; margin-top:0px" ng-click="closeModal()"><i class="glyphicon glyphicon-remove"></i></span-->
			
			
			
			<!--/div-->
			
		  <form id="sajiliForm" name="sajiliForm"  ng-submit="submitForm()" novalidate>
			
				<div class="bordered__box__outer">
				<div class="bordered__box__inner" style="padding:0px; height:295px">
				
				<!--div class="alert alert-danger alert-dismissible" ng-show="error"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{errorMessage}}</div-->
				
			
				<!--div class="confirmation_box_logo_wrap" style="background-color: rgba(61,138,101,1)">				
				<div class="confirmation_box_logo">
				<span class="" style="font-size:1.125rem; color:#d0a92c">Registration</span>
				</div>
				</div-->				
				<div class="confirmation_box_body">				
				<div class="confirmation_box_body_description_status" ng-show="show_submitting_window">				
					<div class="rstd_spinner_medium">
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
						<div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
					</div>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitting_in_progress">Submitting ...</span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_successfully">Done!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully">Successful registration</span></span>					
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_unsuccessfully">Failed!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully">Usuccessful registration</span></span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="close_submit_confirmation_box()" ng-show="submitted_unsuccessfully">OK</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="more_info()" ng-show="submitted_successfully">OK</div>
				</div>				
				<div class="confirmation_box_body_description" ng-show="!show_submitting_window">
					<div class="confirmation_item_1 w3-text-white" style="margin-top:0px">YOUR LOGIN CREDENTIALS<span class="confirmation_item_1_no">{{ticket_number}}</span></div>
					<div class="confirmation_item_2" style="margin-top:-5px; margin-bottom:15px">* Please write down this info for reference</div>
					<div class="confirmation_item_1 thin_line_height custom_yellow" style="padding:0px 15px; max-width:400px">Your login credentials have been sent to the mobile number {{username_hide_some_chars}}</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-click="show_login(recipient_category)">Login</div>
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
  
	  
    </div>
  </div>
</div>