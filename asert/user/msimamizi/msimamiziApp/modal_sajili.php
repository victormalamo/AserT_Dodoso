<div class="modal left fade" id="sajili_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content" style="background-color:#f1f1f1">
			<div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background:rgb(3,127,81,1); border-bottom:1px solid rgba(0,0,0,.1"> 
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
			<!--div class="ongeza_mtumiaji" ng-click="addData()">+</div-->
			<div class="ongeza_mtumiaji" ng-click="addData()">+</div>
			<!--div class="ongeza_mtumiaji" ng-click="showTuma()">+</div-->
				<div class="modal_main_body font-sm"> 
				<!----------div class="card-body"---------------->
					  <div class="table-responsive" style="overflow-x: unset;"> 
						<table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered border-mdblue">
						  <thead>
							<tr style="height:35px"> 
							  <th style="vertical-align:middle" class="border-mdblue">JINA</th>
							  <th style="vertical-align:middle" class="border-mdblue">CHEO</th>
							  <th style="vertical-align:middle" class="border-mdblue">IDARA_KITENGO</th>
							  <th style="vertical-align:middle" class="border-mdblue">SEHEMU</th>
							  <th data-orderable="false" style="vertical-align:middle" class="border-mdblue"></th>
							</tr>
						  </thead>
						  <tbody>
							<tr ng-repeat="mtumiaji in watumiajiData"> 
							  <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.f_name}} {{mtumiaji.m_name | limitTo: 1}}. {{mtumiaji.l_name}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.jina_la_cheo}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.div_unit}}</td>
							  <td style="vertical-align:middle" class="border-mdblue">{{mtumiaji.section_name}}</td>
							  <td style="vertical-align:middle" align="right" class="border-mdblue">
							  <button type="button" ng-click="tazamaMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs border-mdblue"><span class="glyphicon glyphicon-eye-open"></span></button>
							  <button type="button" ng-click="editMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-default btn-xs border-mdblue"><span class="glyphicon glyphicon-edit"></span></button>
							  <button type="button" ng-click="deleteMtumiaji(mtumiaji.mfanyakazi_id)" class="btn btn-danger btn-xs border-mdblue"><span class="glyphicon glyphicon-remove"></span></button>
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