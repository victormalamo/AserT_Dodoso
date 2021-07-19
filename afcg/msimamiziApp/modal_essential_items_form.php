<!--div id="wrap" class="hideMeInPrint"-->
<div class="modal left fade" id="essential_items_entry_form" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color:#ffffff">
	  
	  <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(255,255,255,1); border-bottom:1px solid #f1f1f1"> 
			<!--span>
			<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button>
			</span-->
			
			<div class="pull-right">
				<div class="btn_text top_menu_item_button_text" style="width:115px; text-align:left; color:rgba(0,0,0,.5); font-weight:normal">Scores:&nbsp;<span id="total" ng-bind="essential_item_score" style="font-size:1.125rem!important" ng-class="(essential_item_score >= 75)?'custom_green_text':'custom_red_text'">0</span><span ng-class="(essential_item_score >= 75)?'custom_green_text':'custom_red_text'">%</span></div>
				<div class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_left" ng-click="submit_essential_items_form()">Save <span id="form_save_status" ng-bind="show_asteric"></span></div>
				<div id="reset_btn" class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_right" ng-click="futa_radio_values()">Reset</div>
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="check_for_essential_items_entry_form_changes()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>				
			</div>
	   </div>
	  	  
	   <div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:120px; margin-left:auto; margin-right:auto">
		<center>
            <!--div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div-->
			<div class="page-header__subtitle w3-text-black">ESSENTIAL ITEMS</div>
			<!--div class="footer__site__title w3-text-gray" style="margin:-5px 0px 28px 0px;">Ministry of Natural Resources and Tourism</div-->
            <span class="divider" style="margin-bottom:7px"> 
            <hr>
            <hr>
            </span> 
        </center>
		</div>
		
						  
				<div class="" style="padding:10px 0px 10px 0px; margin:0px auto 0px; max-width:800px;"> 
					<center>
						<div class="footer__site__title w3-text-black">{{facility_name}}</div>
						<div class="confirmation_item_3 thin_line_height" style="margin-top:10px; margin-bottom:0px; padding:0px 10px 0px 10px; color:rgba(0,0,0,.8);">{{trading_name}} {{physical_address}} {{postal_address}} </div>
					</center>
				</div>
		
        <div class="modal-body"> 
          <div class="container" style="max-width:850px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,0)"> 
            <div class="" style="max-width:850px; border:1px solid #fff; border-radius:2px; padding: 0px 0px 20px 0px; margin-left:auto; margin-right:auto"> 
              
                		
                  <form  id="essential_items_form" name="essential_items_form" ng-submit="submit_essential_items_form()" enctype="multipart/form-data" novalidate>

				  
				  
					<table id="" class="table table-bordered border-mdblue">
						  <thead>						  	
						  	<tr style="height:80px"> 
							  <th colspan="5" style="vertical-align:middle; text-align:center" class="border-left-right font-lg"><span style="float:left; width:200px; text-align:left; margin-left:-8px">&nbsp </span>{{}}<span style="float:right; width:200px; text-align:right; color:rgba(0,0,0,.5); font-weight:normal">{{}}</span></th>
							</tr>
							<tr style="height:80px"> 
							  <th colspan="2" style="vertical-align:middle" class="border-mdblue">DESCRIPTION</th>
							  <th style="vertical-align:middle" class="border-mdblue">COMPLIANCE LEVEL</th>
							  <th style="vertical-align:middle" class="border-mdblue">DECISION</th>
							  <th data-orderable="false" style="vertical-align:middle; width:100px!important; font-weight:normal" class="border-mdblue">Repair or improvement reqired</th>
							</tr>							
						  </thead>
						  <tbody style="font-size:15px">
						  
						  <!------------------- ITEM 1 ------------------>
						  
							<tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">1.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom first_row_col">Occupational Permit</td>
							  <td rowspan="2" style="vertical-align:middle" class="border-mdblue first_row_col">
							  </td>
							  <td rowspan="2" style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="6" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_1_text" name="item_1_text" ng-model="item_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="8" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel have approved:</td>
							  <!--td style="vertical-align:middle" class="border-mdblue"></td>
							  <td style="vertical-align:middle" class="border-mdblue"></td>
							  <td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top" class="border-mdblue borderless-bottom">(a) Building Plan</td>
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with the building law </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_1_a_i_yes" class="sum" type="radio" name="item_1_a_i" ng-model="item_1_a_i" value="3" ng-checked="item_1_a_i_yes">
								<label for="item_1_a_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_1_a_i_no" class="sum" type="radio"  name="item_1_a_i" ng-model="item_1_a_i" value="0" ng-checked="item_1_a_i_no">
								<label for="item_1_a_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top" class="border-mdblue borderless-top"></td>
							  <td style="vertical-align:middle" class="border-mdblue">Copy availability </td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_1_a_ii_yes" class="sum" type="radio" name="item_1_a_ii" ng-model="item_1_a_ii" value="3" ng-checked="item_1_a_ii_yes">
								<label for="item_1_a_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_1_a_ii_no" class="sum" type="radio"  name="item_1_a_ii" ng-model="item_1_a_ii" value="0" ng-checked="item_1_a_ii_no">
								<label for="item_1_a_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top" class="border-mdblue borderless-bottom">(b) Valid occupational certificate</td>
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with the building law </td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_1_b_i_yes" class="sum" type="radio" name="item_1_b_i" ng-model="item_1_b_i" value="3" ng-checked="item_1_b_i_yes">
								<label for="item_1_b_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_1_b_i_no" class="sum" type="radio"  name="item_1_b_i" ng-model="item_1_b_i" value="0" ng-checked="item_1_b_i_no">
								<label for="item_1_b_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <td style="vertical-align:top" class="border-mdblue borderless-top last_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Copy availability </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_1_b_ii_yes" class="sum" type="radio" name="item_1_b_ii" ng-model="item_1_b_ii" value="3" ng-checked="item_1_b_ii_yes">
								<label for="item_1_b_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_1_b_ii_no" class="sum" type="radio"  name="item_1_b_ii" ng-model="item_1_b_ii" value="0" ng-checked="item_1_b_ii_no">
								<label for="item_1_b_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 2------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">2.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Valid Operating Licenses</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_2_text" name="item_2_text" ng-model="item_2_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have operational licenses required under regulatory laws?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with the regulatory law</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_2_i_yes" class="sum" type="radio" name="item_2_i" ng-model="item_2_i" value="6" ng-checked="item_2_i_yes">
								<label for="item_2_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_2_i_no" class="sum" type="radio"  name="item_2_i" ng-model="item_2_i" value="0" ng-checked="item_2_i_no">
								<label for="item_2_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Copy availability </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_2_ii_yes" class="sum" type="radio" name="item_2_ii" ng-model="item_2_ii" value="6" ng-checked="item_2_ii_yes">
								<label for="item_2_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_2_ii_no" class="sum" type="radio"  name="item_2_ii" ng-model="item_2_ii" value="0" ng-checked="item_2_ii_no">
								<label for="item_2_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 3------------------>
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">3.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Valid EIA Reports/Audits</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_3_text" name="item_3_text" ng-model="item_3_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have a certified EIA and/or current EA report? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with the regulatory law</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_3_i_yes" class="sum" type="radio" name="item_3_i" ng-model="item_3_i" value="6" ng-checked="item_3_i_yes">
								<label for="item_3_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_3_i_no" class="sum" type="radio"  name="item_3_i" ng-model="item_3_i" value="0" ng-checked="item_3_i_no">
								<label for="item_3_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Copy availability </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_3_ii_yes" class="sum" type="radio" name="item_3_ii" ng-model="item_3_ii" value="6" ng-checked="item_3_ii_yes">
								<label for="item_3_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_3_ii_no" class="sum" type="radio"  name="item_3_ii" ng-model="item_3_ii" value="0" ng-checked="item_3_ii_no">
								<label for="item_3_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 4 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">4.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Drainage</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_4_text" name="item_4_text" ng-model="item_4_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is there adequate & functional drains especially within and around the Kitchen area? Connected to soakage pit, with provision for grease trap? Properly covered & Maintained in good working condition? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with the public health Act & the building code </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_4_i_yes" class="sum" type="radio" name="item_4_i" ng-model="item_4_i" value="4" ng-checked="item_4_i_yes">
								<label for="item_4_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_4_i_no" class="sum" type="radio"  name="item_4_i" ng-model="item_4_i" value="0" ng-checked="item_4_i_no">
								<label for="item_4_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functionality </td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_4_ii_yes" class="sum" type="radio" name="item_4_ii" ng-model="item_4_ii" value="4" ng-checked="item_4_ii_yes">
								<label for="item_4_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_4_ii_no" class="sum" type="radio"  name="item_4_ii" ng-model="item_4_ii" value="0" ng-checked="item_4_ii_no">
								<label for="item_4_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good state of Repair/Maintenance</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_4_iii_yes" class="sum" type="radio" name="item_4_iii" ng-model="item_4_iii" value="4" ng-checked="item_4_iii_yes">
								<label for="item_4_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_4_iii_no" class="sum" type="radio"  name="item_4_iii" ng-model="item_4_iii" value="0" ng-checked="item_4_iii_no">
								<label for="item_4_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 5 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">5.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Room Designation</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_5_text" name="item_5_text" ng-model="item_5_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Are the rooms clearly designated? With signs showing the location of rooms in the hotel </td>
							  <td style="vertical-align:middle" class="border-mdblue">Guest rooms numbered</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_5_i_yes" class="sum" type="radio" name="item_5_i" ng-model="item_5_i" value="4" ng-checked="item_5_i_yes">
								<label for="item_5_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_5_i_no" class="sum" type="radio"  name="item_5_i" ng-model="item_5_i" value="0" ng-checked="item_5_i_no">
								<label for="item_5_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functional and stylish</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_5_ii_yes" class="sum" type="radio" name="item_5_ii" ng-model="item_5_ii" value="4" ng-checked="item_5_ii_yes">
								<label for="item_5_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_5_ii_no" class="sum" type="radio"  name="item_5_ii" ng-model="item_5_ii" value="0" ng-checked="item_5_ii_no">
								<label for="item_5_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good State of Repair/Maintenance</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_5_iii_yes" class="sum" type="radio" name="item_5_iii" ng-model="item_5_iii" value="4" ng-checked="item_5_iii_yes">
								<label for="item_5_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_5_iii_no" class="sum" type="radio"  name="item_5_iii" ng-model="item_5_iii" value="0" ng-checked="item_5_iii_no">
								<label for="item_5_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 6 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">6.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Safe Deposit</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_6_text" name="item_6_text" ng-model="item_6_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is there provision for safe deposit, either in the rooms or centrally placed? Are guests informed?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_6_i_yes" class="sum" type="radio" name="item_6_i" ng-model="item_6_i" value="4" ng-checked="item_6_i_yes">
								<label for="item_6_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_6_i_no" class="sum" type="radio"  name="item_6_i" ng-model="item_6_i" value="0" ng-checked="item_6_i_no">
								<label for="item_6_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functional</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_6_ii_yes" class="sum" type="radio" name="item_6_ii" ng-model="item_6_ii" value="4" ng-checked="item_6_ii_yes">
								<label for="item_6_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_6_ii_no" class="sum" type="radio"  name="item_6_ii" ng-model="item_6_ii" value="0" ng-checked="item_6_ii_no">
								<label for="item_6_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good State of Repair/Maintenance </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_6_iii_yes" class="sum" type="radio" name="item_6_iii" ng-model="item_6_iii" value="4" ng-checked="item_6_iii_yes">
								<label for="item_6_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_6_iii_no" class="sum" type="radio"  name="item_6_iii" ng-model="item_6_iii" value="0" ng-checked="item_6_iii_no">
								<label for="item_6_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 7 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">7.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Hand Wash Basin</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_7_text" name="item_7_text" ng-model="item_7_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is there provision for adequate & separate wash hand basins appropriately located at the Kitchen entry for staff? Hygienically controlled & means of hand drying? Hot & cold running water?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability & appropriately located </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_7_i_yes" class="sum" type="radio" name="item_7_i" ng-model="item_7_i" value="4" ng-checked="item_7_i_yes">
								<label for="item_7_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_7_i_no" class="sum" type="radio"  name="item_7_i" ng-model="item_7_i" value="0" ng-checked="item_7_i_no">
								<label for="item_7_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functionality</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_7_ii_yes" class="sum" type="radio" name="item_7_ii" ng-model="item_7_ii" value="4" ng-checked="item_7_ii_yes">
								<label for="item_7_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_7_ii_no" class="sum" type="radio"  name="item_7_ii" ng-model="item_7_ii" value="0" ng-checked="item_7_ii_no">
								<label for="item_7_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good state of Repair/Maintenance</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_7_iii_yes" class="sum" type="radio" name="item_7_iii" ng-model="item_7_iii" value="4" ng-checked="item_7_iii_yes">
								<label for="item_7_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_7_iii_no" class="sum" type="radio"  name="item_7_iii" ng-model="item_7_iii" value="0" ng-checked="item_7_iii_no">
								<label for="item_7_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 8 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">8.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Wash Rooms</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_8_text" name="item_8_text" ng-model="item_8_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is there a provision of public wash rooms conveniently located to public areas? Gender segregated to ensure privacy? Clean & functional?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability & segregated for male & female</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_8_i_yes" class="sum" type="radio" name="item_8_i" ng-model="item_8_i" value="4" ng-checked="item_8_i_yes">
								<label for="item_8_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_8_i_no" class="sum" type="radio"  name="item_8_i" ng-model="item_8_i" value="0" ng-checked="item_8_i_no">
								<label for="item_8_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Clean & Functional</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_8_ii_yes" class="sum" type="radio" name="item_8_ii" ng-model="item_8_ii" value="4" ng-checked="item_8_ii_yes">
								<label for="item_8_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_8_ii_no" class="sum" type="radio"  name="item_8_ii" ng-model="item_8_ii" value="0" ng-checked="item_8_ii_no">
								<label for="item_8_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good State of Repair/Maintenance </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_8_iii_yes" class="sum" type="radio" name="item_8_iii" ng-model="item_8_iii" value="4" ng-checked="item_8_iii_yes">
								<label for="item_8_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_8_iii_no" class="sum" type="radio"  name="item_8_iii" ng-model="item_8_iii" value="0" ng-checked="item_8_iii_no">
								<label for="item_8_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 9 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">9.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Waste/Refuse Disposal</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_9_text" name="item_9_text" ng-model="item_9_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have sufficient number of waste bins? Lined with appropriate bags & covered? A system of separation, storage and disposal conforming to public health standards & environmental laws? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Waste bins, lined & well Covered with storage area available </td></td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_9_i_yes" class="sum" type="radio" name="item_9_i" ng-model="item_9_i" value="4" ng-checked="item_9_i_yes">
								<label for="item_9_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_9_i_no" class="sum" type="radio"  name="item_9_i" ng-model="item_9_i" value="0" ng-checked="item_9_i_no">
								<label for="item_9_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Waste separation done correctly</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_9_ii_yes" class="sum" type="radio" name="item_9_ii" ng-model="item_9_ii" value="4" ng-checked="item_9_ii_yes">
								<label for="item_9_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_9_ii_no" class="sum" type="radio"  name="item_9_ii" ng-model="item_9_ii" value="0" ng-checked="item_9_ii_no">
								<label for="item_9_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Conform to legislative laws</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_9_iii_yes" class="sum" type="radio" name="item_9_iii" ng-model="item_9_iii" value="4" ng-checked="item_9_iii_yes">
								<label for="item_9_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_9_iii_no" class="sum" type="radio"  name="item_9_iii" ng-model="item_9_iii" value="0" ng-checked="item_9_iii_no">
								<label for="item_9_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 10 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">10.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Sewage Disposal and Treatment</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_10_text" name="item_10_text" ng-model="item_10_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have a system of sewage disposal and/or treatment? Connected to soakage pit? Approved & Certified by relevant authorities?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_10_i_yes" class="sum" type="radio" name="item_10_i" ng-model="item_10_i" value="4" ng-checked="item_10_i_yes">
								<label for="item_10_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_10_i_no" class="sum" type="radio"  name="item_10_i" ng-model="item_10_i" value="0" ng-checked="item_10_i_no">
								<label for="item_10_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functionality</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_10_ii_yes" class="sum" type="radio" name="item_10_ii" ng-model="item_10_ii" value="4" ng-checked="item_10_ii_yes">
								<label for="item_10_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_10_ii_no" class="sum" type="radio"  name="item_10_ii" ng-model="item_10_ii" value="0" ng-checked="item_10_ii_no">
								<label for="item_10_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Approved & Certified by relevant authority </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_10_iii_yes" class="sum" type="radio" name="item_10_iii" ng-model="item_10_iii" value="4" ng-checked="item_10_iii_yes">
								<label for="item_10_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_10_iii_no" class="sum" type="radio"  name="item_10_iii" ng-model="item_10_iii" value="0" ng-checked="item_10_iii_no">
								<label for="item_10_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							  <!------------------- ITEM 11------------------>
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">11.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Vermin Proofing</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_11_text" name="item_11_text" ng-model="item_11_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Is the hotel regularly fumigated??Fumigation conforms to local public health & environmental regulations? Have a certificate as proof of most recent fumigation? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Conforms to the relevant laws </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_11_i_yes" class="sum" type="radio" name="item_11_i" ng-model="item_11_i" value="6" ng-checked="item_11_i_yes">
								<label for="item_11_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_11_i_no" class="sum" type="radio"  name="item_11_i" ng-model="item_11_i" value="0" ng-checked="item_11_i_no">
								<label for="item_11_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Certificates availability to evidence the service </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_11_ii_yes" class="sum" type="radio" name="item_11_ii" ng-model="item_11_ii" value="6" ng-checked="item_11_ii_yes">
								<label for="item_11_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_11_ii_no" class="sum" type="radio"  name="item_11_ii" ng-model="item_11_ii" value="0" ng-checked="item_11_ii_no">
								<label for="item_11_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 12 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">12.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Water Supply</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_12_text" name="item_12_text" ng-model="item_12_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel water supply conform to local & WHO standards, treated & certified by competent authority?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_12_i_yes" class="sum" type="radio" name="item_12_i" ng-model="item_12_i" value="4" ng-checked="item_12_i_yes">
								<label for="item_12_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_12_i_no" class="sum" type="radio"  name="item_12_i" ng-model="item_12_i" value="0" ng-checked="item_12_i_no">
								<label for="item_12_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Water supply certified</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_12_ii_yes" class="sum" type="radio" name="item_12_ii" ng-model="item_12_ii" value="4" ng-checked="item_12_ii_yes">
								<label for="item_12_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_12_ii_no" class="sum" type="radio"  name="item_12_ii" ng-model="item_12_ii" value="0" ng-checked="item_12_ii_no">
								<label for="item_12_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Reservoir Adequate commensurate to capacity </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_12_iii_yes" class="sum" type="radio" name="item_12_iii" ng-model="item_12_iii" value="4" ng-checked="item_12_iii_yes">
								<label for="item_12_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_12_iii_no" class="sum" type="radio"  name="item_12_iii" ng-model="item_12_iii" value="0" ng-checked="item_12_iii_no">
								<label for="item_12_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 13 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">13.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Communication Systems</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_13_text" name="item_13_text" ng-model="item_13_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have appropriate system for guest bedroom communication? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Availability</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_13_i_yes" class="sum" type="radio" name="item_13_i" ng-model="item_13_i" value="4" ng-checked="item_13_i_yes">
								<label for="item_13_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_13_i_no" class="sum" type="radio"  name="item_13_i" ng-model="item_13_i" value="0" ng-checked="item_13_i_no">
								<label for="item_13_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Functionality</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_13_ii_yes" class="sum" type="radio" name="item_13_ii" ng-model="item_13_ii" value="4" ng-checked="item_13_ii_yes">
								<label for="item_13_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_13_ii_no" class="sum" type="radio"  name="item_13_ii" ng-model="item_13_ii" value="0" ng-checked="item_13_ii_no">
								<label for="item_13_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good State of Repair/Maintenance</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_13_iii_yes" class="sum" type="radio" name="item_13_iii" ng-model="item_13_iii" value="4" ng-checked="item_13_iii_yes">
								<label for="item_13_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_13_iii_no" class="sum" type="radio"  name="item_13_iii" ng-model="item_13_iii" value="0" ng-checked="item_13_iii_no">
								<label for="item_13_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 14 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">14.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Fire Safety</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_14_text" name="item_14_text" ng-model="item_14_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel building material fire resistant or retardant? Have firefighting equipment? Well maintained in working condition? Conducting fire drills often?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Fire safety measures Availability</td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_14_i_yes" class="sum" type="radio" name="item_14_i" ng-model="item_14_i" value="4" ng-checked="item_14_i_yes">
								<label for="item_14_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_14_i_no" class="sum" type="radio"  name="item_14_i" ng-model="item_14_i" value="0" ng-checked="item_14_i_no">
								<label for="item_14_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Equipment functionality</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_14_ii_yes" class="sum" type="radio" name="item_14_ii" ng-model="item_14_ii" value="4" ng-checked="item_14_ii_yes">
								<label for="item_14_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_14_ii_no" class="sum" type="radio"  name="item_14_ii" ng-model="item_14_ii" value="0" ng-checked="item_14_ii_no">
								<label for="item_14_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Good State of Repair/Maintenance </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_14_iii_yes" class="sum" type="radio" name="item_14_iii" ng-model="item_14_iii" value="4" ng-checked="item_14_iii_yes">
								<label for="item_14_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_14_iii_no" class="sum" type="radio"  name="item_14_iii" ng-model="item_14_iii" value="0" ng-checked="item_14_iii_no">
								<label for="item_14_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 15 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">15.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">First Aid</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_15_text" name="item_15_text" ng-model="item_15_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is there provision for first aid kits located in essential areas? Are there trained staffs on first aid procedure and in-house nurse or doctor on call?</td>
							  <td style="vertical-align:middle" class="border-mdblue">First aid kit & content expiry dates valid Availability in key areas </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_15_i_yes" class="sum" type="radio" name="item_15_i" ng-model="item_15_i" value="4" ng-checked="item_15_i_yes">
								<label for="item_15_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_15_i_no" class="sum" type="radio"  name="item_15_i" ng-model="item_15_i" value="0" ng-checked="item_15_i_no">
								<label for="item_15_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Staff capable of administering first aid </td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_15_ii_yes" class="sum" type="radio" name="item_15_ii" ng-model="item_15_ii" value="4" ng-checked="item_15_ii_yes">
								<label for="item_15_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_15_ii_no" class="sum" type="radio"  name="item_15_ii" ng-model="item_15_ii" value="0" ng-checked="item_15_ii_no">
								<label for="item_15_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">In-house nurse or doctor on call </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_15_iii_yes" class="sum" type="radio" name="item_15_iii" ng-model="item_15_iii" value="4" ng-checked="item_15_iii_yes">
								<label for="item_15_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_15_iii_no" class="sum" type="radio"  name="item_15_iii" ng-model="item_15_iii" value="0" ng-checked="item_15_iii_no">
								<label for="item_15_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							 <!------------------- ITEM 16 ------------------>
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">16.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Electrical Safety </td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_16_text" name="item_16_text" ng-model="item_16_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel electric installation well maintained? Electric fittings conform to safety laws and certified? Fittings regularly inspected? </td>
							  <td style="vertical-align:middle" class="border-mdblue">TANESCO certificate Availability </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_16_i_yes" class="sum" type="radio" name="item_16_i" ng-model="item_16_i" value="6" ng-checked="item_16_i_yes">
								<label for="item_16_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_16_i_no" class="sum" type="radio"  name="item_16_i" ng-model="item_16_i" value="0" ng-checked="item_16_i_no">
								<label for="item_16_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Compliant with regular inspection requirement </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_16_ii_yes" class="sum" type="radio" name="item_16_ii" ng-model="item_16_ii" value="6" ng-checked="item_16_ii_yes">
								<label for="item_16_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_16_ii_no" class="sum" type="radio"  name="item_16_ii" ng-model="item_16_ii" value="0" ng-checked="item_16_ii_no">
								<label for="item_16_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM  17 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">17.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Security Systems </td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_17_text" name="item_17_text" ng-model="item_17_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have security arrangement? Functional alarm systems? Professionally trained security personnel? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Security measures Availability </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_17_i_yes" class="sum" type="radio" name="item_17_i" ng-model="item_17_i" value="4" ng-checked="item_17_i_yes">
								<label for="item_17_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_17_i_no" class="sum" type="radio"  name="item_17_i" ng-model="item_17_i" value="0" ng-checked="item_17_i_no">
								<label for="item_17_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Security equipments</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_17_ii_yes" class="sum" type="radio" name="item_17_ii" ng-model="item_17_ii" value="4" ng-checked="item_17_ii_yes">
								<label for="item_17_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_17_ii_no" class="sum" type="radio"  name="item_17_ii" ng-model="item_17_ii" value="0" ng-checked="item_17_ii_no">
								<label for="item_17_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Security personnel trained </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_17_iii_yes" class="sum" type="radio" name="item_17_iii" ng-model="item_17_iii" value="4" ng-checked="item_17_iii_yes">
								<label for="item_17_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_17_iii_no" class="sum" type="radio"  name="item_17_iii" ng-model="item_17_iii" value="0" ng-checked="item_17_iii_no">
								<label for="item_17_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 18 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">18.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Qualification/ experience of Management Staff </td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_18_text" name="item_18_text" ng-model="item_18_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Is the hotel property managed by a professionally qualified person, certified by recognized institutions/authority? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Manager Qualified </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_18_i_yes" class="sum" type="radio" name="item_18_i" ng-model="item_18_i" value="4" ng-checked="item_18_i_yes">
								<label for="item_18_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_18_i_no" class="sum" type="radio"  name="item_18_i" ng-model="item_18_i" value="0" ng-checked="item_18_i_no">
								<label for="item_18_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Certified by relevant Authority</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_18_ii_yes" class="sum" type="radio" name="item_18_ii" ng-model="item_18_ii" value="4" ng-checked="item_18_ii_yes">
								<label for="item_18_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_18_ii_no" class="sum" type="radio"  name="item_18_ii" ng-model="item_18_ii" value="0" ng-checked="item_18_ii_no">
								<label for="item_18_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Competence</td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_18_iii_yes" class="sum" type="radio" name="item_18_iii" ng-model="item_18_iii" value="4" ng-checked="item_18_iii_yes">
								<label for="item_18_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_18_iii_no" class="sum" type="radio"  name="item_18_iii" ng-model="item_18_iii" value="0" ng-checked="item_18_iii_no">
								<label for="item_18_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 19 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">19.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Qualification/experience of Departmental Heads</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_19_text" name="item_19_text" ng-model="item_19_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">The hotel has suitably qualified & experienced staff supervising departments/section operations?</td>
							  <td style="vertical-align:middle" class="border-mdblue">Key departments supervised by qualified person </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_19_i_yes" class="sum" type="radio" name="item_19_i" ng-model="item_19_i" value="4" ng-checked="item_19_i_yes">
								<label for="item_19_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_19_i_no" class="sum" type="radio"  name="item_19_i" ng-model="item_19_i" value="0" ng-checked="item_19_i_no">
								<label for="item_19_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Certified by relevant authority</td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_19_ii_yes" class="sum" type="radio" name="item_19_ii" ng-model="item_19_ii" value="4" ng-checked="item_19_ii_yes">
								<label for="item_19_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_19_ii_no" class="sum" type="radio"  name="item_19_ii" ng-model="item_19_ii" value="0" ng-checked="item_19_ii_no">
								<label for="item_19_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Competence </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_19_iii_yes" class="sum" type="radio" name="item_19_iii" ng-model="item_19_iii" value="4" ng-checked="item_19_iii_yes">
								<label for="item_19_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_19_iii_no" class="sum" type="radio"  name="item_19_iii" ng-model="item_19_iii" value="0" ng-checked="item_19_iii_no">
								<label for="item_19_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 20 ------------------>
							 
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">20.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Health Medical Examination</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_20_text" name="item_20_text" ng-model="item_20_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="3" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel staff especially food handlers undergo routine medical examination? Compliant with the county regulations? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Food handlers examined </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_20_i_yes" class="sum" type="radio" name="item_20_i" ng-model="item_20_i" value="4" ng-checked="item_20_i_yes">
								<label for="item_20_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_20_i_no" class="sum" type="radio"  name="item_20_i" ng-model="item_20_i" value="0" ng-checked="item_20_i_no">
								<label for="item_20_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue">Compliant with 6 months medical examination </td>
							  <td style="vertical-align:middle" class="border-mdblue">
							  
							  	<input id="item_20_ii_yes" class="sum" type="radio" name="item_20_ii" ng-model="item_20_ii" value="4" ng-checked="item_20_ii_yes">
								<label for="item_20_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_20_ii_no" class="sum" type="radio"  name="item_20_ii" ng-model="item_20_ii" value="0" ng-checked="item_20_ii_no">
								<label for="item_20_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Medical certificates available </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_20_iii_yes" class="sum" type="radio" name="item_20_iii" ng-model="item_20_iii" value="4" ng-checked="item_20_iii_yes">
								<label for="item_20_iii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_20_iii_no" class="sum" type="radio"  name="item_20_iii" ng-model="item_20_iii" value="0" ng-checked="item_20_iii_no">
								<label for="item_20_iii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 21 ------------------>
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">21.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Emergency Evacuation</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_21_text" name="item_21_text" ng-model="item_21_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Does the hotel have in place provision for emergency evacuation? Oral or written information on emergency provided to guests? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Emergency procedures provided </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_21_i_yes" class="sum" type="radio" name="item_21_i" ng-model="item_21_i" value="6" ng-checked="item_21_i_yes">
								<label for="item_21_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_21_i_no" class="sum" type="radio"  name="item_21_i" ng-model="item_21_i" value="0" ng-checked="item_21_i_no">
								<label for="item_21_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Information on emergency procedures given to guests </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_21_ii_yes" class="sum" type="radio" name="item_21_ii" ng-model="item_21_ii" value="6" ng-checked="item_21_ii_yes">
								<label for="item_21_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_21_ii_no" class="sum" type="radio"  name="item_21_ii" ng-model="item_21_ii" value="0" ng-checked="item_21_ii_no">
								<label for="item_21_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							
							<!------------------- ITEM 22 ------------------>
							 <tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom first_row_col"><div ng-class="{number_pre:true}">22.</div></td>
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue first_row_col">Insurance</td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td style="vertical-align:middle" class="border-mdblue first_row_col"></td>
							  <td rowspan="3" style="vertical-align:top" align="left" class="border-mdblue first_row_col last_row_col">
							  <textarea id="item_22_text" name="item_22_text" ng-model="item_22_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="3" placeholder="Type here.." class=""></textarea>
							  </td>
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td rowspan="2" style="vertical-align:top" class="border-mdblue last_row_col">Is the hotel comprehensively insured under public liability insurance policy? </td>
							  <td style="vertical-align:middle" class="border-mdblue">Property properly insured </td>
							  <td style="vertical-align:middle; width:150px" class="border-mdblue">
							  <!--input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="5"><span ng-class="{radio_label_left:true}">Yes</span>
							  <input type="radio" style="display:table-cell; vertical-align:middle" ng-model="1_1_a" value="0"><span ng-class="{radio_label_right:true}">No</span-->
								
								<input id="item_22_i_yes" class="sum" type="radio" name="item_22_i" ng-model="item_22_i" value="6" ng-checked="item_22_i_yes">
								<label for="item_22_i_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_22_i_no" class="sum" type="radio"  name="item_22_i" ng-model="item_22_i" value="0" ng-checked="item_22_i_no">
								<label for="item_22_i_no"><span><span></span></span>No</label>
								
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
							  <!--td style="vertical-align:top" class="border-mdblue borderless-top"></td-->
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">Copy of insurance contract available </td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col">
							  
							  	<input id="item_22_ii_yes" class="sum" type="radio" name="item_22_ii" ng-model="item_22_ii" value="6" ng-checked="item_22_ii_yes">
								<label for="item_22_ii_yes" style="margin-right:20px"><span><span></span></span>Yes</label>
								<input id="item_22_ii_no" class="sum" type="radio"  name="item_22_ii" ng-model="item_22_ii" value="0" ng-checked="item_22_ii_no">
								<label for="item_22_ii_no"><span><span></span></span>No</label>
							  
							  </td>
							  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
							</tr>
							 
						  </tbody>
						</table>
						
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div class="btn_ukubwa_wrap" style="margin-top:40px!important">
					  <input type="text" class="" id="essential_item_score" name="essential_item_score" ng-model="essential_item_score" value="" style="display: none;"/>
					  <input type="text" class="" id="show_asteric" name="show_asteric" ng-model="show_asteric" value="" style="display: none;"/>
					  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request">Save</button>
                      <button type="button" id="reset_btn_bottom" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="futa_radio_values()">Reset</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="check_for_essential_items_entry_form_changes()">Cancel</button>
                    </div>
                    </div>
                  </form>				
                
             

            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
<!--/div-->