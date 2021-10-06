<div class="modal funika_kurasa" id="funika_kurasa_with_status_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color: rgba(255,255,255,.8)">
	  
	  
	  <!--div class="modal-body full_page_spinner_wrap"> 
          
			<div class="full_page_spinner_inner" style="width:100px; height:100px"> 
				<div class="rstd_spinner">
				  <div></div>
				  <div></div>
				  <div></div>
				  <div></div>
				</div>
			</div>
          
        </div-->


		
		 <div class="modal-body full_page_spinner_wrap">
		 				
					<!--div class="full_page_spinner_inner" style="width:50px; height:50px; background-color:#ccc;"--> 
					
					<div class="rstd_spinner_status full_page_spinner_inner" style="">
						<div ng-class='{ rstd_spinner_status_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_status_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_status_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ rstd_spinner_status_div:true, load_success:submitted_successfully, load_error:submitted_unsuccessfully }'></div>
						<div ng-class='{ animated_exclamation_icon:true }' ng-show="show_animated_exclamation_icon"></div>
						<div ng-class='{ checkmark:true, draw:true }' ng-show="show_checkmark"></div>
					</div>
					
					<!--/div-->
					
					<div class="" style="color:#000;" ng-show="submitting_in_progress">Please wait ...</div>
					<div class="" style="color:#000;" ng-show="submitted_successfully">{{status_success_message}}</div>
					<div class="" style="color:#ff0000;" ng-show="submitted_unsuccessfully">{{status_error_message}}</div>
					<!--span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_successfully">Done!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully && from_insert">Registration successfully</span></span>					
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully && from_editing">Sent successfully</span></span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_unsuccessfully">Failed!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully && from_insert">Facility not registered</span></span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully && from_editing">Information not sent</span></span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="close_submit_confirmation_box()" ng-show="(submitted_successfully && from_editing) || submitted_unsuccessfully">OK</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="more_info()" ng-show="submitted_successfully && from_insert">OK</div-->
		</div>
	  
	  
    </div>
  </div>
</div>