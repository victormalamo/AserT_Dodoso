
<div class="modal modal_full_page_spinner fade" id="verification_box" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
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
			
		  <form id="verification_form" name="verification_form"  ng-submit="submit_verification_formTTTT()" novalidate>
			
				<div class="bordered__box__outer outer_responsive_2">
				<div class="bordered__box__inner inner_responsive_2" style="padding:0px; height:295px">
				
				<div class="confirmation_box_body">
				<!--Sending SMS-->
				<div class="confirmation_box_body_description_status" ng-show="generating_verification">
				    <div class="rstd_spinner_medium"> 
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:generating_successfully, load_error:generating_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:generating_successfully, load_error:generating_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:generating_successfully, load_error:generating_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:generating_successfully, load_error:generating_unsuccessfully }'></div>
                    <div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
                    <div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
                  	</div>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="generating_verification">Please wait..</span>
				</div>
				<!--Sending VN-->	
				<div class="confirmation_box_body_description_status" ng-show="authenticating_verification">
					<div class="confirmation_item_1 w3-text-white" style="margin-bottom:20px; font-size:18px" ng-show="!resend_button_visibility && !wrong_code">Authentication</div>
					<div class="" style="font-size:14px; margin-bottom:-5px; color:#5785cc!important" ng-show="resend_button_visibility">Didn't Get</div>
					<div class="confirmation_item_1 w3-text-white" style="margin-bottom:15px; font-size:18px" ng-show="resend_button_visibility">Verification Code?</div>
					<div class="confirmation_item_1 w3-text-white" style="margin-bottom:15px; font-size:18px" ng-show="(wrong_code && !resend_button_visibility)">Wrong code! Try again..</div>										
					<div class="align_row_center_center" style="width:39px; text-align:center" ng-show="!resend_button_visibility">
					<input id="vn_1" name="vn_1" ng-model="vn_1" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_2" name="vn_2" ng-model="vn_2" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_3" name="vn_3" ng-model="vn_3" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_4" name="vn_4" ng-model="vn_4" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_5" name="vn_5" ng-model="vn_5" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text verification_input_box_margin bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					<input id="vn_6" name="vn_6" ng-model="vn_6" placeholder="" class="focus_next_vn form-control rounded one_char center_input_text bold_verification_input_text" type="text" ng-required="true" ng-change="" ng-blur="" maxlength="1">
					</div>					
					<div class="confirmation_item_2 verification_info_text_in_mobiles_1" style="margin-top:15px; text-align:center" ng-show="!resend_button_visibility">A verification code has been sent to your mobile number. Enter the code to continue.</div>
					<div class="wrap_boxes_row_const" style="margin-top:15px">
						<div class="afcg_home_col_center_center" style="font-size:14px; height:36px; cursor:pointer; color:#5785cc!important" ng-show="!resend_button_visibility" ng-click="show_resend_button()">Didn't get a verification code?</div>
						<!--div class="afcg_home_col_center_center" style="width:36px; height:36px; cursor:pointer; color:#d0a92c!important" ng-show="resend_button_visibility" ng-click="resend_new_code()"><span class="mdi mdi-restore mdi-48px"></span></div-->
						<div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_left" style="width:100px; margin-top:0px" ng-show="resend_button_visibility" ng-click="resend_new_code()">Resend</div>
                      	<div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_right" style="width:100px; margin-top:0px; margin-left:5px" ng-show="resend_button_visibility" ng-click="show_code_entry_window()">Back</div>
					</div>
				</div>
				<div class="confirmation_box_body_description_status" ng-show="user_blocked">
					<div class="confirmation_item_1 w3-text-red" style="margin-bottom:10px; font-size:22px">Blocked!</div>									
					<div class="confirmation_item_2 verification_info_text_in_mobiles_1" style="text-align:center">Contact us at mobile number <span class="w3-text-white">0715115300</span> or e-mail address <span class="w3-text-white">asert@maliasili.go.tz</span> for help.</div>					
				</div>
				<div class="confirmation_box_body_description_status" ng-show="verifying_code">
					
                  <div class="rstd_spinner_medium"> 
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ rstd_spinner_medium_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
                    <div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
                    <div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
                  </div>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="verifying_code">Verifying ..</span>
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
			
			
		<!--div class="reg_tools_bottom form-group" align="center" style="margin-top:15px; padding:15px">
			<div class="afcg_modal_col_center_center reg_tools_bottom_circle" style="margin-bottom:0px" ng-click="close_verification_box()"><span class="mdi mdi-close"></span></div>
		</div-->
			
          
        </div>
  

	  
    </div>
  </div>
</div>