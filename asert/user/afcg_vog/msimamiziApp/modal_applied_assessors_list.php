<div class="modal left fade" id="applied_assessors_list_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content" style="background-color:#f1f1f1">
			<div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background:rgba(3,127,81,1); border-bottom:1px solid rgba(0,0,0,.1"> 
				<div class="" ng-show="amerudisha_watumiaji">
				<span>
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_applied_assessors_list()">
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
			<!--div class="ongeza_assessor" ng-click="addData()" ng-hide="other_accounts">+</div-->
				<div class="modal_main_body font-sm"> 
				<!----------div class="card-body"---------------->
					  <div class="table-responsive" style="overflow-x: unset;"> 
						<table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table_fit border-mdblue">
						  <thead>						  	
						  	<tr style="height:50px"> 
							  <th colspan="5"></th>
							</tr>
							<tr style="height:35px"> 
							  <th style="vertical-align:middle" class="border-mdblue">TICKET</th>
							  <th style="vertical-align:middle" class="border-mdblue">FULL NAMES</th>
							  <th style="vertical-align:middle" class="border-mdblue">PROFESSION</th>
							  <th style="vertical-align:middle" class="border-mdblue">LOCATION</th>
							  <th style="vertical-align:middle" class="border-mdblue">PHONE, E-MAIL</th>
							  <th data-orderable="false" style="vertical-align:middle" class="border-mdblue"></th>
							</tr>							
						  </thead>
						  <tbody>

							<tr ng-repeat="assessor in applied_assessors_data">
							  <td style="vertical-align:middle" class="border-mdblue">{{assessor.ticket_id}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{assessor.assessor_full_name | titleCase}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{assessor.assessor_profession | titleCase}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{assessor.assessor_mkoa}}, {{assessor.assessor_halmashauri}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{assessor.assessor_simu_mobile}}, {{assessor.assessor_barua_pepe}}</td>
							  <td style="vertical-align:middle" align="right" class="border-mdblue">
							  	<button type="button" ng-click="view_applied_assessor_details(assessor.reg_assessor_id)" class="btn btn-default btn-xs border-mdblue btn_afcg_2">Review and Approve</button>
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