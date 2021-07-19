<div class="modal left fade" id="assessors_list_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content" style="background-color:#f1f1f1">
			<div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background:rgba(3,127,81,1); border-bottom:1px solid rgba(0,0,0,.1"> 
				<div class="" ng-show="amerudisha_watumiaji">
				<span>
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_assessors_list_panel()">
					<span class="rstdnavbar-toggler-icon_close_white"></span>
					<!--span class="w3-text-white icon-cancel" style="font-size:18px!important"></span-->
					</button>
				</span>		
				<!--span class="pull-right">
					<button id="search_button" class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_search()">		
					<span class="rstdnavbar-toggler-icon_search"></span>
					</button>
				</span-->				
				</div>
			</div>
			
			<!--PC-->
			<div class="modal_main_spinner_wrap" ng-show="!amerudisha_watumiaji"> 
			<div class="modal_main_spinner_inner"> 
				<div class="rstd_spinner">
				  <div></div>
				  <div></div>
				  <div></div>
				  <div></div>
				</div>
			</div>
			</div>
			<div class="modal-body " style="padding:0px!important" ng-show="amerudisha_watumiaji">
				<div class="modal_main_body font-sm"> 
				<!----------div class="card-body"---------------->
					  <div class="table-responsive" style="overflow-x: unset;"> 
						<table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered border-mdblue">
						  <thead>						  	
						  	<tr style="height:50px"> 
							  <th colspan="3" style="vertical-align:middle; text-align:center" class="border-left-right font-lg"><span style="float:left; width:200px; text-align:left; margin-left:-8px">&nbsp </span>{{trading_name | uppercase}}<span style="float:right; width:200px; text-align:right; color:rgb(0,0,0,.5); font-weight:normal">TIN: <span style="font-size:1.125rem!important">{{tin}}</span></span></th>
							</tr>
							<tr style="height:35px"> 
							  <th style="vertical-align:middle" class="border-mdblue">ESTABLISHMENT NAME</th>
							  <th style="vertical-align:middle; width:350px!important" class="border-mdblue">ASSIGNED ASSESSORS</th>
							  <th data-orderable="false" style="vertical-align:middle" class="border-mdblue"></th>
							</tr>							
						  </thead>
						  <tbody>
						  
						  <tr ng-repeat="mtumiaji in facility_assessors_list_panel_data" class=""> 
							  <td style="vertical-align:top; padding-top:15px!important" class="border-mdblue"><div ng-class="(mtumiaji.username == mtumiaji.group_admin_username)?'default_account_pre':((mtumiaji.username | limitTo:-5) == 'child')?'managed_by_me_pre':other_accounts?'other_accounts_pre_on':'other_accounts_pre'"></div>{{mtumiaji.facility_name}}</td>
							  <td style="vertical-align:top; padding-top:15px" class="border-mdblue">							  
							  
							  <div ng-init="fetch_assigned_assessors_per_facility(mtumiaji.id)">							  
							  <div class="" style="width:100%; padding-top:0px; padding-bottom:5px"><span style="font-style:italic">Single Assessor:</span>&nbsp;&nbsp;<span ng-show="(this['_'+mtumiaji.id+'_assessor_0_name'].length > 0)">{{this['_'+mtumiaji.id+'_assessor_0_name']}},&nbsp;<span style="font-style:italic">{{this['_'+mtumiaji.id+'_assessor_0_qualification']}}, {{this['_'+mtumiaji.id+'_assessor_0_firm']}}</span></span><span ng-hide="(this['_'+mtumiaji.id+'_assessor_0_name'].length > 0)" style="font-style:italic">Not assigned</span></div>
							  <div class="" style="width:100%; padding-top:0px; padding-bottom:5px">1.&nbsp;&nbsp;<span ng-show="(this['_'+mtumiaji.id+'_assessor_1_name'].length > 0)">{{this['_'+mtumiaji.id+'_assessor_1_name']}},&nbsp;<span style="font-style:italic">{{this['_'+mtumiaji.id+'_assessor_1_qualification']}}, {{this['_'+mtumiaji.id+'_assessor_1_firm']}}</span></span><span ng-hide="(this['_'+mtumiaji.id+'_assessor_1_name'].length > 0)" style="font-style:italic">Not assigned</span></div>
							  <div class="" style="width:100%; padding-top:5px; padding-bottom:5px">2.&nbsp;&nbsp;<span ng-show="(this['_'+mtumiaji.id+'_assessor_2_name'].length > 0)">{{this['_'+mtumiaji.id+'_assessor_2_name']}},&nbsp;<span style="font-style:italic">{{this['_'+mtumiaji.id+'_assessor_2_qualification']}}, {{this['_'+mtumiaji.id+'_assessor_2_firm']}}</span></span><span ng-hide="(this['_'+mtumiaji.id+'_assessor_2_name'].length > 0)" style="font-style:italic">Not assigned</span></div>
							  <div class="" style="width:100%; padding-top:5px; padding-bottom:5px">3.&nbsp;&nbsp;<span ng-show="(this['_'+mtumiaji.id+'_assessor_3_name'].length > 0)">{{this['_'+mtumiaji.id+'_assessor_3_name']}},&nbsp;<span style="font-style:italic">{{this['_'+mtumiaji.id+'_assessor_3_qualification']}}, {{this['_'+mtumiaji.id+'_assessor_3_firm']}}</span></span><span ng-hide="(this['_'+mtumiaji.id+'_assessor_3_name'].length > 0)" style="font-style:italic">Not assigned</span></div>
							  <div class="" style="padding:5px 0px 10px; border-top:0px dotted #cccccc" >
							  <!--div class="btn_text btn_text_inlight " ng-click="((this['_'+mtumiaji.id+'_assessor_0_name'].length > 0) || (this['_'+mtumiaji.id+'_assessor_1_name'].length > 0))?edit_assigned_assessors(mtumiaji.id):assign_assessors(mtumiaji.id); fetch_assigned_assessors_per_facility(mtumiaji.id)">{{((this['_'+mtumiaji.id+'_assessor_0_name'].length > 0) || (this['_'+mtumiaji.id+'_assessor_1_name'].length > 0))?"Edit Assessors":"Assign Assessors"}}</div-->
							  <div class="btn_text btn_text_inlight " ng-click="((this['_'+mtumiaji.id+'_assessor_0_name'].length > 0) || (this['_'+mtumiaji.id+'_assessor_1_name'].length > 0))?edit_assigned_assessors(mtumiaji.id):assign_assessors(mtumiaji.id)">{{((this['_'+mtumiaji.id+'_assessor_0_name'].length > 0) || (this['_'+mtumiaji.id+'_assessor_1_name'].length > 0))?"Edit Assessors":"Assign Assessors"}}</div>
							  </div>
							  </div>
							  							  
							  </td>
							  <td style="vertical-align:middle; width:90px; height:90px" align="center" class="border-mdblue btn_in_td">Text</td>
							</tr>
							
							
						  </tbody>
						</table>
					  </div>					
				<!------/div------------->	
				</div>	
				<!--/div-->	
				<!--/div-->
				
			</div>
			<!--End PC-->
			
			<!--Mobile-->
			<!--div class="modal-body wrap_center_outer_menu_mobileTTTT">
				
			</div-->
			<!--End Mobile-->
			
		</div>
	</div>
</div>