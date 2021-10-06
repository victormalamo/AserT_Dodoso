<div class="modal modal_full_page_spinner fade" id="save_changes" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color: rgba(0,0,0,.8)">
        <div class="modal-body full_page_spinner_wrap"> 
			<div class="full_page_spinner_inner" style="width:100%"> 
			
			<div class="container" style="max-width:700px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1); margin-top:-10px; margin-bottom:5px"> 
            <div class="div-content-inner-confirmation" style="max-width:700px; border:1px solid #fff; border-radius:2px; padding: 40px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
			
			<div class="">			  
			<div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">			
			</div>		 
			
				<div class="bordered__box__outer">
				<div class="bordered__box__inner" style="padding:0px; height:295px">				
				<div class="confirmation_box_body" style="height:100%">
				<div class="confirmation_save_changes">
				<span class="glyphicon glyphicon-alert" style="font-size:40px; color:#ffcc66"></span>
				<span class="confirmation_message" style="margin-top:15px!important; color:#ffcc66">Save changes?</span>
				
					<!--essential items-->
					<div ng-show="essential_items_form_changes">				
					<div style="margin-top:15px!important">				
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_left" ng-click="save_and_exit()">Yes</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_middle" ng-click="close_without_save()">No</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_right" ng-click="cancel_save_changes()">Cancel</div>
					</div>
					</div>
					<!--town_hotel-->
					<div ng-show="assessment_town_hotel_form_changes">				
					<div style="margin-top:15px!important">				
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_left" ng-click="save_and_exit_town_hotel()">Yes</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_middle" ng-click="close_without_save_town_hotel()">No</div>
						<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_right" ng-click="cancel_save_changes()">Cancel</div>
					</div>
					</div>			

				</div>											
				</div>				
				</div>
				</div>							
			  </div>		  
            </div>
          </div>
				
				
			</div>
          
        </div>
  
	  
    </div>
  </div>
</div>