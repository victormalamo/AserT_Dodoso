
<div class="modal modal_full_page_spinner fade" id="assessors_confirmation_box" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
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
			
		  <form id="sajiliForm" name="sajiliForm"  ng-submit="" novalidate>
			
				<div class="bordered__box__outer">
				<div class="bordered__box__inner" style="padding:0px; height:305px">
				
				<!--div class="alert alert-danger alert-dismissible" ng-show="error"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{errorMessage}}</div-->
				
			
				<div class="confirmation_box_logo_wrap" style="background-color: rgba(61,138,101,1)">				
				<div class="confirmation_box_logo">
				<div class="" style="font-size:1.125rem; color:#ffcc66">Assessors</div>
				</div>
				</div>				
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
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitting_in_progress">Please wait ...</span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_successfully">Done!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully && from_insert">Registration successfully</span></span>					
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_successfully && from_editing">Updated successfully</span></span>
					<span class="confirmation_item_1 w3-text-white" style="margin-top:10px" ng-show="submitted_unsuccessfully">Failed!</span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully && from_insert">Assessor(s) not registered</span></span>
					<span class="confirmation_item_2" style="margin-top:0px; font-size:14px"><span ng-show="submitted_unsuccessfully && from_editing">Information not sent</span></span>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="close_assessors_confirmation_box()" ng-show="submitted_unsuccessfully || from_new_created_assessor">OK</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" style="margin-top:15px" ng-click="assessors_more_info()" ng-show="submitted_successfully && !from_new_created_assessor">OK</div>
				</div>				
				<div class="confirmation_box_body_description" ng-show="!show_submitting_window">
					<div class="confirmation_item_1 w3-text-white" style="margin-top:0px">ASSESSORS LOGIN CREDENTIALS<span class="confirmation_item_1_no">{{ticket_number}}</span></div>
					<div class="confirmation_item_2" style="margin-top:-5px; margin-bottom:15px">* Usernames and Passwords for Assessors</div>
					<div class="rounded-top bottom_border_less_than_width" style="width:500px; padding:15px 20px 5px 20px; background-color:#f1f1f1">
						<span class="" style="float:left">1.&nbsp;{{(assessor_1.selected.assessor_full_name.length > 20)?(assessor_1.selected.assessor_full_name | limitTo:20):assessor_1.selected.assessor_full_name}}</span>
						<span style="float:right">
							<span ng-show="!assessor_1_username_has_account">
								<span style="font-style:italic">Username&nbsp;</span>{{assessor_1_username}}
								<span style="font-style:italic">&nbsp;&nbsp;&nbsp;&nbsp;Password &nbsp;</span>{{assessor_1_password}}
							</span>
						</span>
						<span style="float:right" ng-show="assessor_1_username_has_account">
							<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
							<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
						</span>
					</div>
					<div class="bottom_border_less_than_width" style="width:500px; padding:5px 20px 5px 20px; background-color:#f1f1f1">
						<span ng-show="show_assessor_credentials">
							<span class="" style="float:left">2.&nbsp;{{(assessor_2.selected.assessor_full_name.length > 20)?(assessor_2.selected.assessor_full_name | limitTo:20):assessor_2.selected.assessor_full_name}}</span>
							<span style="" ng-show="!assessor_2_username_has_account">
								<span style="float:right">
									<span style="font-style:italic">Username&nbsp;</span>{{assessor_2_username}}
									<span style="font-style:italic">&nbsp;&nbsp;&nbsp;&nbsp;Password &nbsp;</span>{{assessor_2_password}}
								</span>
							</span>
							<span style="float:right" ng-show="assessor_2_username_has_account">
								<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
								<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
							</span>						
						</span>
						<span ng-show="!show_assessor_credentials" style="font-style:italic; float:left">2.&nbsp; Not assigned</span>						
					</div>					
					<div class="rounded-bottom" style="width:500px; padding:5px 20px 15px 20px; background-color:#f1f1f1">
						<span ng-show="show_assessor_credentials">
							<span class="" style="float:left">3.&nbsp;{{(assessor_3.selected.assessor_full_name.length > 20)?(assessor_3.selected.assessor_full_name | limitTo:20):assessor_3.selected.assessor_full_name}}</span>
							<span style="" ng-show="!assessor_3_username_has_account">
								<span style="float:right">
									<span style="font-style:italic">Username&nbsp;</span>{{assessor_3_username}}
									<span style="font-style:italic">&nbsp;&nbsp;&nbsp;&nbsp;Password &nbsp;</span>{{assessor_3_password}}
								</span>
							</span>
							<span style="float:right" ng-show="assessor_3_username_has_account">
								<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
								<span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span><span class="mdi mdi-circle-medium"></span>
							</span>						
						</span>
						<span ng-show="!show_assessor_credentials" style="font-style:italic; float:left">3.&nbsp; Not assigned</span>
					</div>
					<div class="rstdbtn rstdbtn-outline-warning confirmation_button" ng-click="close_assessors_confirmation_box()">Close</div>
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