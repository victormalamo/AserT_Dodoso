<div class="modal left fade" id="sajili_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content" style="background-color:#f1f1f1">
			<div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background:rgba(3,127,81,1); border-bottom:1px solid rgba(0,0,0,.1"> 
				<div class="" ng-show="amerudisha_watumiaji">
				<span>
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_sajili()">
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
			<div class="ongeza_mtumiaji" ng-click="addData()" ng-hide="other_accounts">+</div>
				<div class="modal_main_body font-sm"> 
				<!----------div class="card-body"---------------->
					  <div class="table-responsive" style="overflow-x: unset;"> 
						<table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered border-mdblue">
						  <thead>						  	
						  	<tr style="height:50px"> 
							  <th colspan="4" style="vertical-align:middle; text-align:center" class="border-left-right font-lg"><span style="float:left; width:200px; text-align:left; margin-left:-8px">&nbsp </span>{{trading_name | uppercase}}<span style="float:right; width:200px; text-align:right; color:rgb(0,0,0,.5); font-weight:normal">TIN: <span style="font-size:1.125rem!important">{{tin}}</span></span></th>
							</tr>
							<tr style="height:35px"> 
							  <th style="vertical-align:middle" class="border-mdblue">ESTABLISHMENT NAME</th>
							  <th style="vertical-align:middle" class="border-mdblue">LOCATION</th>
							  <th style="vertical-align:middle" class="border-mdblue">PHONE</th>
							  <th data-orderable="false" style="vertical-align:middle" class="border-mdblue"></th>
							</tr>							
						  </thead>
						  <tbody>

							<tr ng-repeat="mtumiaji in watumiajiData" ng-class="(mtumiaji.general_status == 'sent_for_approval')?'style_sent_for_approval':(mtumiaji.general_status == 'approved')?'style_approved':''"> 
							  <td style="vertical-align:middle" class="border-mdblue"><div ng-class="(mtumiaji.username == mtumiaji.group_admin_username)?'default_account_pre':((mtumiaji.username | limitTo:-5) == 'child')?'managed_by_me_pre':other_accounts?'other_accounts_pre_on':'other_accounts_pre'"></div>{{mtumiaji.facility_name}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.mkoa}}, {{mtumiaji.halmashauri}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{(mtumiaji.simu_mobile | limitTo:-5) === "child"?"This Account":mtumiaji.simu_mobile}}</td>
							  <!--td style="vertical-align:middle" class="border-mdblue">{{ mtumiaji.simu_mobile.substr(mtumiaji.simu_mobile.length - 5) }}</td-->
							  <!--td style="vertical-align:middle" class="border-mdblue">{{ mtumiaji.simu_mobile.substr(10) }}</td-->
							  <!--td style="vertical-align:middle" class="border-mdblue">{{ mtumiaji.simu_mobile.substr(3, 6) }}</td-->
							  <td style="vertical-align:middle" align="right" class="border-mdblue">
							  <span ng-hide="(mtumiaji.general_status == 'sent_for_approval')">
							  <!--button type="button" ng-click="tazamaMtumiaji(mtumiaji.id)" class="btn btn-default btn-xs border-mdblue"><span class="glyphicon glyphicon-eye-open"></span></button-->
							  <span ng-hide="other_accounts">
							  <span ng-init="fetch_assigned_assessors_per_facility(mtumiaji.id)">
							  <span ng-show="(mtumiaji.general_status == 'approved')" style="">APPROVED!</span>
							  <!--button type="button" ng-click="(mtumiaji.essential_item_score >= 75)?access_assessment_sheet(mtumiaji.id, assessor_category):enter_essential_items(mtumiaji.id)" class="btn btn-default btn-xs border-mdblue btn_afcg_1" ng-show="(mtumiaji.general_status == 'approved')" ng-disabled="(mtumiaji.username != assessor_3_mobile_number)">{{(mtumiaji.essential_item_score >= 75)?"Assessment Sheet":"Essential Items"}}</button-->
							  <button type="button" ng-click="(mtumiaji.essential_item_score >= 75)?access_assessment_sheet(mtumiaji.id):enter_essential_items(mtumiaji.id)" class="btn btn-default btn-xs border-mdblue btn_afcg_1" ng-show="(mtumiaji.general_status == 'approved')" ng-disabled="(mtumiaji.username != assessor_1_mobile_number) && (mtumiaji.username != assessor_2_mobile_number) && (mtumiaji.username != assessor_3_mobile_number)">{{(mtumiaji.essential_item_score >= 75)?"Assessment Sheet":"Essential Items"}}</button>
							  <button type="button" ng-click="editMtumiaji(mtumiaji.id)" class="btn btn-default btn-xs border-mdblue btn_afcg_1" ng-hide="(mtumiaji.general_status == 'approved')"><!--span class="glyphicon glyphicon-edit"></span-->Review and Send</button>
							  <button type="button" ng-click="deleteMtumiaji(mtumiaji.id)" class="btn btn-success btn-xs border-mdblue" ng-show="{{ mtumiaji.username == mtumiaji.group_admin_username }}"><!--span class="glyphicon glyphicon-remove"></span-->Delete</button>
							  <button type="button" ng-click="deleteMtumiaji(mtumiaji.id)" class="btn btn-danger btn-xs border-mdblue" ng-hide="{{ mtumiaji.username == mtumiaji.group_admin_username }}"><!--span class="glyphicon glyphicon-remove"></span-->Delete</button>
							  </span>
							  </span>
							  </span>
							  <span ng-show="(mtumiaji.general_status == 'sent_for_approval')">
							  <button type="button" class="btn btn-default btn-xs border-mdblue btn_afcg_1" ng-disabled="true">Sent for approval</button>
							  <button type="button" class="btn btn-success btn-xs border-mdblue" ng-show="{{ mtumiaji.username == mtumiaji.group_admin_username }}" ng-disabled="true"><!--span class="glyphicon glyphicon-remove"></span-->Delete</button>
							   <button type="button" class="btn btn-danger btn-xs border-mdblue" ng-hide="{{ mtumiaji.username == mtumiaji.group_admin_username }}" ng-disabled="true"><!--span class="glyphicon glyphicon-remove"></span-->Delete</button>
							  <!--span ng-show="(mtumiaji.general_status == 'sent_for_approval')" style="font-style:italic">Sent for approval</span-->
							  </span>
							  </td>
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