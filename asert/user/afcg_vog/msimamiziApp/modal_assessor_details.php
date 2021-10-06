<div id="wrap" class="hideMeInPrint">
<div class="modal left fade" id="assessor_details_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content assessor_reg_modal_bg" style="background-color:rgba(255,255,255,0)">
	  
	  <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:65px; background-color: rgba(0,0,0,0); border-bottom:0px solid #f1f1f1"> 
			<span>
			<!--button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu_T()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button-->
			</span>
			<div class="pull-right not_in_mobiles">
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_assessor_details_panel()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>
			</div>
	   </div>	  	  
	   <!--div class="" style="max-width:100%; height:65px; border:0px solid #fff; padding: 30px 40px 10px 40px; margin-top:; margin-left:auto; margin-right:auto"-->
	   <div style="max-width:100%; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:50px; margin-left:auto; margin-right:auto">
		<center>
			<div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div>
			<div class="page-header__subtitle w3-text-white">UNITED REPUBLIC OF TANZANIA</div>
			<div class="footer__site__title w3-text-white" style="margin:-5px 0px 28px 0px;">Ministry of Natural Resources and Tourism</div>
            <span class="divider divider__white" style="margin-top:0px; margin-bottom:7px"> 
            <hr>
            <hr>
            </span> 
        </center>
		</div>
		
						  
				<div class="" style="padding:10px 0px; margin:0px auto 0px; border-top:1px solid rgba(208,169,44,0); background-color: rgba(208,169,44,0)"> 
					
					<center>
					<div style="display:inline-block">
						<div class="footer__site__title" style="color:#ffffff">ASSESSOR APPROVAL</div>
						<!--div class="confirmation_item_3" style="margin-top:0px; margin-bottom:0px; color:#d0a92c">Registration for self assessment</div-->					
					</div>					
					<!--div class="w3-red pull-righTTTTt not_in_mobilesTTTTT" style="display:inline-block">
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="closeTuma()">
					<span class="rstdnavbar-toggler-icon_close"></span>
					</button>
					</div-->
					</center>
				</div>
		
        <div class="modal-body"> 
          <div class="container reg_form_shadow" style="max-width:610px; border-radius:4px; padding:4px 4px 4px 4px; background: url(../../../images/facility_reg_form.png) repeat"> 
            <div class="" style="max-width:610px; border:1px solid #d0a92c; border-radius:2px; padding: 5px 40px 10px 40px; margin-left:auto; margin-right:auto; background-color: rgba(0,0,0,0)"> 
              <div class="facility_reg_form_title" style="width:100%; height:55px"></div>
                <div>
				
                  <form id="assessor_registration_form" name="assessor_registration_form" enctype="multipart/form-data" novalidate>

				  
				  <div class="bordered__box__outer outer_responsive">
				  <div class="bordered__box__inner inner_responsive w3-text-white" style="padding-bottom:15px">
				  
                    
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
						<div class="input_label ">Full Names</div>
                          <!--input  id="assessor_full_name" name="assessor_full_name" ng-model="assessor_full_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})+\ ([a-zA-Z\.\-\ ])+$/" placeholder="" class="form-control rounded"  type="text" ng-required="true"-->
                        {{assessor_full_name}}
						</div>
					</div>
					<div class="w3-row form-group">
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input_label ">Profession</div>
                          <!--input name="assessor_profession" ng-model="assessor_profession" placeholder="" class="form-control rounded" type="text"-->
                        {{assessor_profession}}
						</div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
						<div class="input_label ">Mobile Number</div>
                          <!--input  id="assessor_full_name" name="assessor_full_name" ng-model="assessor_full_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})+\ ([a-zA-Z\.\-\ ])+$/" placeholder="" class="form-control rounded"  type="text" ng-required="true"-->
                        {{simu_mobile}}
						</div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%">
						<div class="input_label ">Email Address</div>
                          <!--input name="assessor_barua_pepe" ng-model="assessor_barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="" class="form-control rounded" type="text" ng-required="true"-->
                        {{assessor_barua_pepe}}
						</div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%">
						<div class="input_label ">Region</div>
                          <!--input name="assessor_barua_pepe" ng-model="assessor_barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="" class="form-control rounded" type="text" ng-required="true"-->
                        {{mkoa}}
						</div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%">
						<div class="input_label ">Council</div>
                          <!--input name="assessor_barua_pepe" ng-model="assessor_barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="" class="form-control rounded" type="text" ng-required="true"-->
                        {{halmashauri}}
						</div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%">
						<div class="input_label">Qualification</div>
                          <!--input name="assessor_barua_pepe" ng-model="assessor_barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="" class="form-control rounded" type="text" ng-required="true"-->
                        {{assessor_qualification_name}}
						</div>
                      </div>
					</div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input_label ">* Information about your qualification</div>
                          <!--textarea name="qualification_others" ng-model="qualification_others" placeholder="" rows="4" class="form-control rounded" ng-minlength="10" ng-required="assessor_qualification.selected && (assessor_qualification.selected.qualification_id == '2')"></textarea-->
                        {{qualification_others}}
						</div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input_label ">Certificates</div>
                          <!--textarea name="qualification_others" ng-model="qualification_others" placeholder="" rows="4" class="form-control rounded" ng-minlength="10" ng-required="assessor_qualification.selected && (assessor_qualification.selected.qualification_id == '2')"></textarea-->
                        <a href="../accommodation_facilities/afcgApp/apis/viambatanisho/0715115300_certificates_afcg_essential_itemstttt.sql" target="_blank">View Certificate</a>
						</div>
                      </div>
                    </div>
					


					</div>
                    </div>
					
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					  <button type="submit" class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_left" style="width:100px; margin-top:0px" ng-click="approve_applied_assessor()">Approve</button>
                      <div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_right" style="width:100px; margin-top:0px">Disapprove</div>
                    </div>
					
                  </form>                 
                </div>				
                
             

            </div>
          </div>
		  
			<div class="reg_tools_bottom form-group" align="center" style="margin-top:15px; padding:15px">
			<div class="afcg_modal_col_center_center reg_tools_bottom_circle" style="margin-bottom:0px" ng-click="close_assessor_details_panel()"><span class="mdi mdi-home"></span></div>
			</div>
		  
        </div>
				
      </div>
    </div>
	</div>
</div>