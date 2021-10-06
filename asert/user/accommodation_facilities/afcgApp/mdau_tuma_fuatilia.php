<div id="wrap" class="hideMeInPrint">
<div class="modal left fade" id="tuma_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content facility_reg_modal_bg" style="background-color: rgba(0,0,0,0)">
	  
	  <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:65px; background-color: rgba(0,0,0,0); border-bottom:0px solid #f1f1f1"> 
			<span>
			<!--button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu_T()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button-->
			</span>
			<div class="pull-right not_in_mobiles">
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="closeTuma()">
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
						<div class="footer__site__title" style="color:#ffffff">FACILITY REGISTRATION</div>
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
          <div class="container reg_form_shadow" style="max-width:610px; border-radius:4px; padding:4px 4px 4px 4px; background: url(../images/facility_reg_form.png) repeat"> 
            <div class="" style="max-width:610px; border:1px solid #d0a92c; border-radius:2px; padding: 5px 40px 10px 40px; margin-left:auto; margin-right:auto; background-color: rgba(0,0,0,0)"> 
              <div class="facility_reg_form_title" style="width:100%; height:55px"></div>
                <div>
				
                  <form id="wateja_request_form" name="wateja_request_form" ng-submit="send_verification_code('facility')" enctype="multipart/form-data" novalidate>

				  
				  <div class="bordered__box__outer outer_responsive">
				  <div class="bordered__box__inner inner_responsive" style="padding-bottom:15px">
				  
                    
                    <!--div class="alert  alert-dismissible alert-danger" ng-show="connection_error"> 
                      <a href="#" class="close" ng-click="close_connection_errorMessage()" aria-label="close">×</a> 
                      {{connection_errorMessage}} </div-->
					  
					 <div class="w3-row form-group" ng-init="loadMikoa()"> 
                      <div class="w3-col s12">
					  <div class="input_label ">Region</div>
                        <div class="input-group input-group_rstd pull-right-600" style="width:100%">
                          <ui-select name="mikoa" ng-model="mikoa.selected" theme="bootstrap" ng-change="loadHalmashauri()"> 
                          <ui-select-match placeholder="">{{$select.selected.regNam}}</ui-select-match> 
                          <ui-select-choices position="down" repeat="item in mikoaData | filter: $select.search"> 
                          <span ng-bind-html="item.regNam | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaMikoa()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12">
					  <div class="input_label ">Council</div>
                        <div class="input-group input-group_rstd" style="width:100%">
                          <ui-select name="halmashauri" ng-model="halmashauri.selected" theme="bootstrap" ng-disabled="!mikoa.selected"> 
                          <ui-select-match placeholder="">{{$select.selected.lgaNam}}</ui-select-match> 
                          <ui-select-choices repeat="item in halmashauriData | filter: $select.search"> 
                          <span ng-bind-html="item.lgaNam | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaHalmashauri()" ng-disabled="!mikoa.selected"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					<div class="w3-row form-group" ng-init="load_location_group()"> 
                      <div class="w3-col s12"> 
					  <div class="input_label ">Facility Location</div>
                        <div class="input-group input-group_rstd pull-right-600" style="width:100%">
                          <ui-select name="location_group" ng-model="location_group.selected" theme="bootstrap" ng-change="load_type_of_accomodation_facilities()" ng-required="true"> 
                          <ui-select-match placeholder="">{{$select.selected.location_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in location_group_data | filter: $select.search"> 
                          <span ng-bind-html="item.location_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_location_group()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
					  <div class="input_label ">Type of Accomodation</div>
                        <div class="input-group input-group_rstd" style="width:100%"> 
                          <ui-select name="type_of_accomodation_facilities" ng-model="type_of_accomodation_facilities.selected" theme="bootstrap" ng-disabled="!location_group.selected"> 
                          <ui-select-match placeholder="">{{$select.selected.acc_facility_type}}</ui-select-match> 
                          <ui-select-choices repeat="item in type_of_accomodation_facilities_data | filter: $select.search"> 
                          <span ng-bind-html="item.acc_facility_type | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safisha_type_of_accomodation_facilities()" ><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label "><span ng-show="!checking_dup_trading_name">Trading Name</span><span ng-show="checking_dup_trading_name" class="custom_yellow">Checking ...</span><span ng-show="!wateja_request_form.trading_name.$invalid && trading_name_already_taken" class="custom_red">&nbsp is already used!</span><span ng-show="!wateja_request_form.trading_name.$invalid && trading_name_not_taken" class="custom_yellow">&nbsp is available!</span></div>
                        <input id="trading_name" name="trading_name" ng-model="trading_name" placeholder="" class="form-control rounded"  type="text" ng-minlength="3" ng-required="true" ng-change="!wateja_request_form.trading_name.$invalid?check_dup_trading_name():null" ng-blur="clear_trading_name_availability_message()">
                        <div class="input-group-btn" ng-show="checking_dup_trading_name">
								<div class="verify_input_field" style="margin-top:21px"> 
									<div class="rstd_spinner_thin spinner_green" style="padding-top:3px"> 
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									</div>
								</div>
							</div>
						</div>
                      </div>
					  </div>
					  <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						<div class="input_label "><span ng-show="!checking_dup_tin">TIN</span><span ng-show="checking_dup_tin" class="custom_yellow">Checking ...</span><span ng-show="!wateja_request_form.tin.$invalid && tin_already_taken" class="custom_red">&nbsp is already used!</span><span ng-show="!wateja_request_form.tin.$invalid && tin_not_taken" class="custom_yellow">&nbsp is available!</span></div>
						<input id="tin" name="tin" ng-model="tin" placeholder="" class="form-control rounded" type="text" ng-minlength="3" ng-required="true" ng-change="!wateja_request_form.tin.$invalid?check_dup_tin():null" ng-blur="clear_tin_availability_message()">
                        <div class="input-group-btn" ng-show="checking_dup_tin">
							<div class="verify_input_field" style="margin-top:21px"> 
									<div class="rstd_spinner_thin spinner_green" style="padding-top:3px"> 
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									</div>
								</div>
							</div>
						</div>
                      </div>
					</div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
						 <div class="input_label ">Facility Name</div>
						<input  id="facility_name" name="facility_name" ng-model="facility_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})+\ ([a-zA-Z\.\-\ ])+$/" placeholder="" class="form-control rounded"  type="text" ng-required="true">
                        </div>
                      </div>
					  </div>
					  <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input_label ">Physical Address</div>
                          <textarea name="physical_address" ng-model="physical_address" placeholder="" rows="4" class="form-control rounded" ng-minlength="10" ng-required="true"></textarea>
                        </div>
                      </div>
                    </div>
					  <div class="w3-row form-group">
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input_label ">Postal Address</div>
                          <input name="postal_address" ng-model="postal_address" placeholder="" class="form-control rounded" type="text">
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%">
						  <div class="input_label"><span ng-show="!checking_dup_username">Mobile Number</span><span ng-show="checking_dup_username" class="custom_yellow">Checking ...</span><span ng-show="!wateja_request_form.simu_mobile.$invalid && username_already_taken" class="custom_red">&nbsp is already used!</span><span ng-show="!wateja_request_form.simu_mobile.$invalid && username_not_taken" class="custom_yellow">&nbsp is available!</span></div>
						   <input name="simu_mobile" ng-model="simu_mobile" placeholder="" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control rounded" type="text"  ng-minlength="10" ng-required="true" ng-blur="!wateja_request_form.simu_mobile.$invalid?clear_username_availability_message():null" ng-change="!wateja_request_form.simu_mobile.$invalid?check_dup_username():null">						  
							<div class="input-group-btn" ng-show="checking_dup_username">
								<div class="verify_input_field" style="margin-top:21px"> 
									<div class="rstd_spinner_thin spinner_green" style="padding-top:3px"> 
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									</div>
								</div>
							</div>
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%">
						  <div class="input_label ">Telephone Number (Landline)</div>
                          <input name="simu_landline" ng-model="simu_landline" placeholder="" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control rounded" type="text"  ng-minlength="10" ng-required="true">
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%">
						<div class="input_label ">Email Address</div>
                          <input name="barua_pepe" ng-model="barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="" class="form-control rounded" type="text" ng-required="true">
                        </div>
                      </div>
					  </div>

					</div>
                    </div>
					
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					  <button type="submit" class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_left" style="width:100px; margin-top:0px" ng-disabled="wateja_request_form.$invalid || hajarudi_wateja_request_form || disable_other_actions">Register</button>
                      <div class="rstdbtn rstdbtn-outline-warning confirmation_button top_menu_item_button_right" style="width:100px; margin-top:0px" ng-click="futa_requestForm()">Reset</div>
                    </div>
                  </form>                 
                </div>				
                
             

            </div>
          </div>
		  
			<div class="reg_tools_bottom form-group" align="center" style="margin-top:15px; padding:15px">
			<div class="afcg_modal_col_center_center reg_tools_bottom_circle" style="margin-bottom:0px" ng-click="closeTuma()"><span class="mdi mdi-home"></span></div>
			</div>
		  
        </div>
				
      </div>
    </div>
	</div>
</div>