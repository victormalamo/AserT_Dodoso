<div class="modal left fade" id="tallying_sheet_for_town_hotel_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog" role="document"> 
      <div class="modal-content" style="background-color:#ffffff">

	   <div class="fixed-top" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(255,255,255,1); border-bottom:1px solid #f1f1f1"> 
			<!--span>
			<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button>
			</span-->
			
			<div class="pull-right">
				<div class="btn_text top_menu_item_button_text" style="width:130px; text-align:left!important; color:rgba(0,0,0,.5); font-weight:normal">Scores:&nbsp;&nbsp;<span style="">{{overall_total_average | number:2}}</span></div>
				<!--div class="btn_text top_menu_item_button_text w3-green" style="width:50px; text-align:left; color:rgba(0,0,0,.5); font-weight:normal">Grade:&nbsp;&nbsp;</div-->
				
			  
          <div class="btn_text top_menu_item_button_text" style="display:inline-block; width:105px; height:30px; text-align:left!important; position:relative; font-weight:normal" ng-hide="overall_not_reconciled"> 
            <div class="stars_rating_color" style="width:105px; position:absolute; left:0; top:0; opacity:.5"> 
              <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
              <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
              <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
              <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
              <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
            </div>
            <div class="stars_rating_color" style="width:{{filled_small_size_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
              <span style="color:{{color_one}}" class="mdi mdi-star mdi-18px"></span> 
              <span style="color:{{color_two}}" class="mdi mdi-star mdi-18px"></span> 
              <span style="color:{{color_three}}" class="mdi mdi-star mdi-18px"></span> 
              <span style="color:{{color_four}}" class="mdi mdi-star mdi-18px"></span> 
              <span style="color:{{color_five}}" class="mdi mdi-star mdi-18px"></span> 
            </div>
          </div>
				<!--div class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_left" ng-click="submit_assessment_town_hotel_form()">Save <span id="form_save_status_town_hotel" ng-bind="show_asteric_town_hotel"></span></div>
				<div id="reset_btn_town_hotel" class="rstdbtn rstdbtn-outline-brown top_menu_item_button top_menu_item_button_right" ng-click="futa_radio_check_values_town_hotel()">Reset</div-->
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_tallying_sheet_for_town_hotel()">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>				
			</div>
	   </div>
	  	  
	   <div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-top:120px; margin-left:auto; margin-right:auto">
		<center>
            <!--div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div-->
			<div class="page-header__subtitle w3-text-black" style="font-size:30px">TALLYING SHEET</div>
			<div class="footer__site__title w3-text-black" style="margin:0px 0px 28px 0px; color:">(Town Hotel)</div>
            <span class="dividerTTT" style="margin-bottom:7px"> 
            <hr style="width:100px; border:4px solid;">
            <!--hr-->
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
              
                		
                  <form id="assessment_sheet_town_hotel_form" name="assessment_sheet_town_hotel_form" ng-submit="submit_assessment_town_hotel_form()" enctype="multipart/form-data" novalidate>

				  
				  
					<table id="" class="table table-bordered border-mdblue">
						  <thead>						  	
						  	<tr style="height:75px"> 
							  <th colspan="9" style="vertical-align:middle; text-align:center" class="border-left-right font-lg"><span style="float:left; width:200px; text-align:left; margin-left:-8px">&nbsp </span>{{}}<span style="float:right; width:200px; text-align:right; color:rgba(0,0,0,.5); font-weight:normal">{{}}</span></th>
							</tr>
							<tr style="height:25px"> 
							  <th colspan="3" rowspan="3" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">ITEMS</th>
							  <th colspan="{{scores_columns}}" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">SCORES</th>
							</tr>
							<tr style="height:25px">
							  <th style="vertical-align:middle; text-align:center" align="center" class="border-mdblue borderless-bottom"></th>
							  <th  colspan="4" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">Assessors</th>
							  <th style="vertical-align:middle" class="border-mdblue borderless-bottom"></th>
							</tr>
							<tr style="height:25px">
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue last_row_col_sub_section">Max</th>
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue one_assessor_column last_row_col_sub_section" ng-show="show_one_assessor_column">Single</th>
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue last_row_col_sub_section">1</th>
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue last_row_col_sub_section">2</th>
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue last_row_col_sub_section">3</th>
							  <th style="vertical-align:middle; text-align:center; width:60px!important" align="center" class="border-mdblue last_row_col_sub_section">Av</th>
							</tr>							
						  </thead>
						  <tbody style="font-size:15px">
						  
							<!------------------- 1.0 LOCATION ------------------>
							
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">1.0</div></td>
							  <td colspan="2" style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">LOCATION</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="location_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_location_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">80</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{location_1_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_0_self_assessor_1_not_reconciled}'>{{location_1_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_0_self_assessor_1_not_reconciled}'>{{location_1_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_0_self_assessor_1_not_reconciled}'>{{location_1_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{location_1_0_average | number:2}}</td>
							</tr>							
							<!-- 1.0 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">1.0</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Location</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{location_1_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:location_1_1_self_assessor_1_not_reconciled}'>{{location_1_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:location_1_1_self_assessor_2_not_reconciled}'>{{location_1_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:location_1_1_self_assessor_3_not_reconciled}'>{{location_1_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{location_1_1_average | number:2}}</td>
							</tr>							
							<!-- 1.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">1.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Site and Environment</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column last_row_col_sub_section" ng-show="show_one_assessor_column">{{location_1_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:location_1_2_self_assessor_1_not_reconciled}'>{{location_1_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:location_1_2_self_assessor_2_not_reconciled}'>{{location_1_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:location_1_2_self_assessor_3_not_reconciled}'>{{location_1_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{location_1_2_average | number:2}}</td>
							</tr>
							
							
							<!------------------- 2.0 BUILDING ------------------>
							
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">2.0</div></td>
							  <td colspan="2" style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">BUILDING</div>								
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="building_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_building_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">200</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{building_2_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_0_average | number:2}}</td>
							</tr>							
							<!-- 2.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">2.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Autonomy of Building</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">90</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{building_2_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_1_self_assessor_1_not_reconciled}'>{{building_2_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_1_self_assessor_2_not_reconciled}'>{{building_2_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_1_self_assessor_3_not_reconciled}'>{{building_2_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_1_average | number:2}}</td>
							</tr>							
							<!-- 2.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">2.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Design and Architectural Features</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{building_2_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_2_self_assessor_1_not_reconciled}'>{{building_2_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_2_self_assessor_2_not_reconciled}'>{{building_2_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_2_self_assessor_3_not_reconciled}'>{{building_2_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_2_average | number:2}}</td>
							</tr>							
							<!-- 2.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">2.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Capacity</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column" ng-show="show_one_assessor_column">{{building_2_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_3_self_assessor_1_not_reconciled}'>{{building_2_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_3_self_assessor_2_not_reconciled}'>{{building_2_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:building_2_3_self_assessor_3_not_reconciled}'>{{building_2_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{building_2_3_average | number:2}}</td>
							</tr>							
							<!-- 2.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">2.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Corridors, Staircases and Hallways/Walkways</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue one_assessor_column last_row_col_sub_section" ng-show="show_one_assessor_column">{{building_2_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:building_2_4_self_assessor_1_not_reconciled}'>{{building_2_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:building_2_4_self_assessor_2_not_reconciled}'>{{building_2_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:building_2_4_self_assessor_3_not_reconciled}'>{{building_2_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{building_2_4_average | number:2}}</td>
							</tr>
							
							<!------------------- 3.0 FRONT OFFICE ------------------>
							
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">3.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">FRONT OFFICE</div>								
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="front_office_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_front_office_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">240</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_0_average | number:2}}</td>
							</tr>							
							<!-- 3.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">3.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Reception Area</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_1_self_assessor_1_not_reconciled}'>{{front_office_3_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_1_self_assessor_2_not_reconciled}'>{{front_office_3_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_1_self_assessor_3_not_reconciled}'>{{front_office_3_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_1_average | number:2}}</td>
							</tr>							
							<!-- 3.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">3.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Information Services</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_2_self_assessor_1_not_reconciled}'>{{front_office_3_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_2_self_assessor_2_not_reconciled}'>{{front_office_3_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_2_self_assessor_3_not_reconciled}'>{{front_office_3_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_2_average | number:2}}</td>
							</tr>							
							<!-- 3.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">3.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Hours of Service</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_3_self_assessor_1_not_reconciled}'>{{front_office_3_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_3_self_assessor_2_not_reconciled}'>{{front_office_3_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_3_self_assessor_3_not_reconciled}'>{{front_office_3_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_3_average | number:2}}</td>
							</tr>							
							<!-- 3.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">3.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Paging Systems</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_4_self_assessor_1_not_reconciled}'>{{front_office_3_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_4_self_assessor_2_not_reconciled}'>{{front_office_3_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_4_self_assessor_3_not_reconciled}'>{{front_office_3_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_4_average | number:2}}</td>
							</tr>
							<!-- 3.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">3.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Safe Deposit Service</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_5_self_assessor_1_not_reconciled}'>{{front_office_3_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_5_self_assessor_2_not_reconciled}'>{{front_office_3_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_5_self_assessor_3_not_reconciled}'>{{front_office_3_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_5_average | number:2}}</td>
							</tr>
							<!-- 3.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">3.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Foreign Exchange Services</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_6_self_assessor_1_not_reconciled}'>{{front_office_3_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_6_self_assessor_2_not_reconciled}'>{{front_office_3_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_6_self_assessor_3_not_reconciled}'>{{front_office_3_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_6_average | number:2}}</td>
							</tr>
							<!-- 3.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">3.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Concierge Services</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_7_self_assessor_1_not_reconciled}'>{{front_office_3_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_7_self_assessor_2_not_reconciled}'>{{front_office_3_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_7_self_assessor_3_not_reconciled}'>{{front_office_3_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_7_average | number:2}}</td>
							</tr>
							<!-- 3.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">3.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Languages</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{front_office_3_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_8_self_assessor_1_not_reconciled}'>{{front_office_3_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_8_self_assessor_2_not_reconciled}'>{{front_office_3_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:front_office_3_8_self_assessor_3_not_reconciled}'>{{front_office_3_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{front_office_3_8_average | number:2}}</td>
							</tr>
							<!-- 3.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">3.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Communication Services</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{front_office_3_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:front_office_3_9_self_assessor_1_not_reconciled}'>{{front_office_3_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:front_office_3_9_self_assessor_2_not_reconciled}'>{{front_office_3_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{last_row_col_sub_section:true, w3_red:front_office_3_9_self_assessor_3_not_reconciled}'>{{front_office_3_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{front_office_3_9_average | number:2}}</td>
							</tr>
							
							<!------------------- 4.0 LOBBY LOUNGE AND OTHER PUBLIC AREAS ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">4.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">LOBBY LOUNGE AND OTHER PUBLIC AREAS</div>								
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="lobby_lounge_other_public_areas_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_lobby_lounge_other_public_areas_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">410</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_0_average | number:2}}</td>
							</tr>							
							<!-- 4.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">4.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Lobby/Lounge/Public Area</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_1_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_1_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_1_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_1_average | number:2}}</td>
							</tr>							
							<!-- 4.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">4.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Size of Lobby/Lounge</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_2_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_2_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_2_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_2_average | number:2}}</td>
							</tr>							
							<!-- 4.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">4.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Amenities and Accessories</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_3_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_3_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_3_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_3_average | number:2}}</td>
							</tr>							
							<!-- 4.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">4.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Furniture and Decoration</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_4_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_4_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_4_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_4_average | number:2}}</td>
							</tr>
							<!-- 4.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">4.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Regulation of Temperature</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_5_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_5_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_5_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_5_average | number:2}}</td>
							</tr>
							<!-- 4.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">4.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Floors, Walls and Ceilings</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_6_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_6_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_6_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_6_average | number:2}}</td>
							</tr>
							<!-- 4.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">4.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Lighting</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_7_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_7_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_7_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_7_average | number:2}}</td>
							</tr>
							<!-- 4.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">4.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Telephone Facilities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_8_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_8_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_8_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_8_average | number:2}}</td>
							</tr>
							<!-- 4.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">4.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Refreshments</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_9_self_assessor_1_not_reconciled}'>{{lobby_lounge_other_public_areas_4_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_9_self_assessor_2_not_reconciled}'>{{lobby_lounge_other_public_areas_4_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_9_self_assessor_3_not_reconciled}'>{{lobby_lounge_other_public_areas_4_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{lobby_lounge_other_public_areas_4_9_average | number:2}}</td>
							</tr>
							<!-- 4.10 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">4.10</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Minimum size of public rooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{lobby_lounge_other_public_areas_4_10_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_10_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{lobby_lounge_other_public_areas_4_10_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_10_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{lobby_lounge_other_public_areas_4_10_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:lobby_lounge_other_public_areas_4_10_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{lobby_lounge_other_public_areas_4_10_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{lobby_lounge_other_public_areas_4_10_average | number:2}}</td>
							</tr>
							
							<!------------------- 5.0 FUNCTION ROOMS ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">5.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">							   
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">FUNCTION ROOMS</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="function_rooms_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_function_rooms_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{function_rooms_5_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{function_rooms_5_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{function_rooms_5_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{function_rooms_5_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{function_rooms_5_0_average | number:2}}</td>
							</tr>							
							<!-- 5.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">5.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Features and Facilities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{function_rooms_5_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:function_rooms_5_1_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{function_rooms_5_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:function_rooms_5_1_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{function_rooms_5_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:function_rooms_5_1_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{function_rooms_5_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{function_rooms_5_1_average | number:2}}</td>
							</tr>
							
							<!------------------- 6.0 RESTAURANTS ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">6.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							  <div style="display:table">
								<div class="" style="display:table-cell; width:auto; padding-right:10px">RESTAURANTS</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="restaurants_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_restaurants_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">410</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_0_average | number:2}}</td>
							</tr>							
							<!-- 6.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">6.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Features and Facilities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_1_self_assessor_1_not_reconciled}'>{{restaurants_6_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_1_self_assessor_2_not_reconciled}'>{{restaurants_6_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_1_self_assessor_3_not_reconciled}'>{{restaurants_6_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_1_average | number:2}}</td>
							</tr>							
							<!-- 6.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">6.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Furniture and Equipment</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">80</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_2_self_assessor_1_not_reconciled}'>{{restaurants_6_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_2_self_assessor_2_not_reconciled}'>{{restaurants_6_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_2_self_assessor_3_not_reconciled}'>{{restaurants_6_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_2_average | number:2}}</td>
							</tr>							
							<!-- 6.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">6.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Interior decoration</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_3_self_assessor_1_not_reconciled}'>{{restaurants_6_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_3_self_assessor_2_not_reconciled}'>{{restaurants_6_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_3_self_assessor_3_not_reconciled}'>{{restaurants_6_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_3_average | number:2}}</td>
							</tr>							
							<!-- 6.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">6.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Floors, Walls and Ceilings</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_4_self_assessor_1_not_reconciled}'>{{restaurants_6_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_4_self_assessor_2_not_reconciled}'>{{restaurants_6_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_4_self_assessor_3_not_reconciled}'>{{restaurants_6_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_4_average | number:2}}</td>
							</tr>
							<!-- 6.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">6.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Menu</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_5_self_assessor_1_not_reconciled}'>{{restaurants_6_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_5_self_assessor_2_not_reconciled}'>{{restaurants_6_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_5_self_assessor_3_not_reconciled}'>{{restaurants_6_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_5_average | number:2}}</td>
							</tr>
							<!-- 6.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">6.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Lighting</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_6_self_assessor_1_not_reconciled}'>{{restaurants_6_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_6_self_assessor_2_not_reconciled}'>{{restaurants_6_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_6_self_assessor_3_not_reconciled}'>{{restaurants_6_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_6_average | number:2}}</td>
							</tr>
							<!-- 6.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">6.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Service stations</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{restaurants_6_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_7_self_assessor_1_not_reconciled}'>{{restaurants_6_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_7_self_assessor_2_not_reconciled}'>{{restaurants_6_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_7_self_assessor_3_not_reconciled}'>{{restaurants_6_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{restaurants_6_7_average | number:2}}</td>
							</tr>
							<!-- 6.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">6.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Regulation of Temperature</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{restaurants_6_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_8_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{restaurants_6_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_8_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{restaurants_6_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:restaurants_6_8_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{restaurants_6_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{restaurants_6_8_average | number:2}}</td>
							</tr>
							
							<!------------------- 7.0 BAR ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">7.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">							  
						<div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">BAR</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="bar_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_bar_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">380</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_0_average | number:2}}</td>
							</tr>							
							<!-- 7.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">7.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">General Features and Facilities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_1_self_assessor_1_not_reconciled}'>{{bar_7_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_1_self_assessor_2_not_reconciled}'>{{bar_7_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_1_self_assessor_3_not_reconciled}'>{{bar_7_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_1_average | number:2}}</td>
							</tr>							
							<!-- 7.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">7.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Walls, Floors, Ceiling and Decorations</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_2_self_assessor_1_not_reconciled}'>{{bar_7_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_2_self_assessor_2_not_reconciled}'>{{bar_7_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_2_self_assessor_3_not_reconciled}'>{{bar_7_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_2_average | number:2}}</td>
							</tr>							
							<!-- 7.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">7.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Lighting and Ventilation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_3_self_assessor_1_not_reconciled}'>{{bar_7_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_3_self_assessor_2_not_reconciled}'>{{bar_7_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_3_self_assessor_3_not_reconciled}'>{{bar_7_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_3_average | number:2}}</td>
							</tr>							
							<!-- 7.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">7.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Regulation of Temperature</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_4_self_assessor_1_not_reconciled}'>{{bar_7_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_4_self_assessor_2_not_reconciled}'>{{bar_7_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_4_self_assessor_3_not_reconciled}'>{{bar_7_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_4_average | number:2}}</td>
							</tr>
							<!-- 7.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">7.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Furniture and Equipment </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_5_self_assessor_1_not_reconciled}'>{{bar_7_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_5_self_assessor_2_not_reconciled}'>{{bar_7_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_5_self_assessor_3_not_reconciled}'>{{bar_7_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_5_average | number:2}}</td>
							</tr>
							<!-- 7.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">7.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Beverage Cooling Systems</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_6_self_assessor_1_not_reconciled}'>{{bar_7_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_6_self_assessor_2_not_reconciled}'>{{bar_7_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_6_self_assessor_3_not_reconciled}'>{{bar_7_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_6_average | number:2}}</td>
							</tr>
							<!-- 7.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">7.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Glassware</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{bar_7_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_7_self_assessor_1_not_reconciled}'>{{bar_7_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_7_self_assessor_2_not_reconciled}'>{{bar_7_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_7_self_assessor_3_not_reconciled}'>{{bar_7_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{bar_7_7_average | number:2}}</td>
							</tr>
							<!-- 7.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">7.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Selection of Drinks and Snacks</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{bar_7_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_8_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{bar_7_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_8_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{bar_7_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:bar_7_8_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{bar_7_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{bar_7_8_average | number:2}}</td>
							</tr>
							
							<!------------------- 8.0 KITCHEN ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">8.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							  <div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">KITCHEN</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="kitchen_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_kitchen_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">505</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_0_average | number:2}}</td>
							</tr>							
							<!-- 8.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">8.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Size</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_1_self_assessor_1_not_reconciled}'>{{kitchen_8_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_1_self_assessor_2_not_reconciled}'>{{kitchen_8_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_1_self_assessor_3_not_reconciled}'>{{kitchen_8_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_1_average | number:2}}</td>
							</tr>							
							<!-- 8.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">8.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Relation to Restaurant</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_2_self_assessor_1_not_reconciled}'>{{kitchen_8_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_2_self_assessor_2_not_reconciled}'>{{kitchen_8_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_2_self_assessor_3_not_reconciled}'>{{kitchen_8_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_2_average | number:2}}</td>
							</tr>							
							<!-- 8.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">8.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Flow of Food Handling</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_3_self_assessor_1_not_reconciled}'>{{kitchen_8_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_3_self_assessor_2_not_reconciled}'>{{kitchen_8_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_3_self_assessor_3_not_reconciled}'>{{kitchen_8_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_3_average | number:2}}</td>
							</tr>							
							<!-- 8.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">8.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Organization of the Kitchen</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_4_self_assessor_1_not_reconciled}'>{{kitchen_8_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_4_self_assessor_2_not_reconciled}'>{{kitchen_8_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_4_self_assessor_3_not_reconciled}'>{{kitchen_8_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_4_average | number:2}}</td>
							</tr>
							<!-- 8.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Kitchen Equipment</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">80</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_5_self_assessor_1_not_reconciled}'>{{kitchen_8_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_5_self_assessor_2_not_reconciled}'>{{kitchen_8_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_5_self_assessor_3_not_reconciled}'>{{kitchen_8_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_5_average | number:2}}</td>
							</tr>
							<!-- 8.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Hand Wash Basin</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_6_self_assessor_1_not_reconciled}'>{{kitchen_8_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_6_self_assessor_2_not_reconciled}'>{{kitchen_8_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_6_self_assessor_3_not_reconciled}'>{{kitchen_8_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_6_average | number:2}}</td>
							</tr>
							<!-- 8.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Ventilation and Fume Extraction</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_7_self_assessor_1_not_reconciled}'>{{kitchen_8_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_7_self_assessor_2_not_reconciled}'>{{kitchen_8_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_7_self_assessor_3_not_reconciled}'>{{kitchen_8_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_7_average | number:2}}</td>
							</tr>
							<!-- 8.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Waste Collection and Storage</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_8_self_assessor_1_not_reconciled}'>{{kitchen_8_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_8_self_assessor_2_not_reconciled}'>{{kitchen_8_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_8_self_assessor_3_not_reconciled}'>{{kitchen_8_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_8_average | number:2}}</td>
							</tr>
							<!-- 8.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Drainage</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_9_self_assessor_1_not_reconciled}'>{{kitchen_8_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_9_self_assessor_2_not_reconciled}'>{{kitchen_8_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_9_self_assessor_3_not_reconciled}'>{{kitchen_8_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_9_average | number:2}}</td>
							</tr>
							<!-- 8.10 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.10</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Kitchen Floors and Walls</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_10_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_10_self_assessor_1_not_reconciled}'>{{kitchen_8_10_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_10_self_assessor_2_not_reconciled}'>{{kitchen_8_10_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_10_self_assessor_3_not_reconciled}'>{{kitchen_8_10_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_10_average | number:2}}</td>
							</tr>
							<!-- 8.11 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">8.11</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Kitchen Food Storage</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{kitchen_8_11_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_11_self_assessor_1_not_reconciled}'>{{kitchen_8_11_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_11_self_assessor_2_not_reconciled}'>{{kitchen_8_11_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_11_self_assessor_3_not_reconciled}'>{{kitchen_8_11_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{kitchen_8_11_average | number:2}}</td>
							</tr>
							<!-- 8.12 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">8.12</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Lighting</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">25</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{kitchen_8_12_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_12_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{kitchen_8_12_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_12_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{kitchen_8_12_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:kitchen_8_12_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{kitchen_8_12_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{kitchen_8_12_average | number:2}}</td>
							</tr>
							
							<!------------------- 9.0 GUEST ROOMS ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">9.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							  <div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">GUEST ROOMS</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="guest_rooms_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_guest_rooms_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">700</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_0_average | number:2}}</td>
							</tr>							
							<!-- 9.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">9.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Minimum Size</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_1_self_assessor_1_not_reconciled}'>{{guest_rooms_9_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_1_self_assessor_2_not_reconciled}'>{{guest_rooms_9_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_1_self_assessor_3_not_reconciled}'>{{guest_rooms_9_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_1_average | number:2}}</td>
							</tr>							
							<!-- 9.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">9.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Regulation of Temperature</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_2_self_assessor_1_not_reconciled}'>{{guest_rooms_9_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_2_self_assessor_2_not_reconciled}'>{{guest_rooms_9_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_2_self_assessor_3_not_reconciled}'>{{guest_rooms_9_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_2_average | number:2}}</td>
							</tr>							
							<!-- 9.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">9.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Balconies/Terraces</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_3_self_assessor_1_not_reconciled}'>{{guest_rooms_9_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_3_self_assessor_2_not_reconciled}'>{{guest_rooms_9_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_3_self_assessor_3_not_reconciled}'>{{guest_rooms_9_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_3_average | number:2}}</td>
							</tr>							
							<!-- 9.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">9.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Fittings, Furniture and Equipment</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_4_self_assessor_1_not_reconciled}'>{{guest_rooms_9_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_4_self_assessor_2_not_reconciled}'>{{guest_rooms_9_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_4_self_assessor_3_not_reconciled}'>{{guest_rooms_9_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_4_average | number:2}}</td>
							</tr>
							<!-- 9.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Furnishing and Linen</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_5_self_assessor_1_not_reconciled}'>{{guest_rooms_9_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_5_self_assessor_2_not_reconciled}'>{{guest_rooms_9_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_5_self_assessor_3_not_reconciled}'>{{guest_rooms_9_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_5_average | number:2}}</td>
							</tr>
							<!-- 9.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Change of Linen</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_6_self_assessor_1_not_reconciled}'>{{guest_rooms_9_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_6_self_assessor_2_not_reconciled}'>{{guest_rooms_9_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_6_self_assessor_3_not_reconciled}'>{{guest_rooms_9_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_6_average | number:2}}</td>
							</tr>
							<!-- 9.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Decor</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_7_self_assessor_1_not_reconciled}'>{{guest_rooms_9_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_7_self_assessor_2_not_reconciled}'>{{guest_rooms_9_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_7_self_assessor_3_not_reconciled}'>{{guest_rooms_9_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_7_average | number:2}}</td>
							</tr>
							<!-- 9.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Floors, Walls and Ceilings</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_8_self_assessor_1_not_reconciled}'>{{guest_rooms_9_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_8_self_assessor_2_not_reconciled}'>{{guest_rooms_9_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_8_self_assessor_3_not_reconciled}'>{{guest_rooms_9_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_8_average | number:2}}</td>
							</tr>
							<!-- 9.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Lighting and Ventilation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_9_self_assessor_1_not_reconciled}'>{{guest_rooms_9_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_9_self_assessor_2_not_reconciled}'>{{guest_rooms_9_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_9_self_assessor_3_not_reconciled}'>{{guest_rooms_9_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_9_average | number:2}}</td>
							</tr>
							<!-- 9.10 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.10</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Soundproofing</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_10_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_10_self_assessor_1_not_reconciled}'>{{guest_rooms_9_10_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_10_self_assessor_2_not_reconciled}'>{{guest_rooms_9_10_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_10_self_assessor_3_not_reconciled}'>{{guest_rooms_9_10_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_10_average | number:2}}</td>
							</tr>
							<!-- 9.11 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.11</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Information in Bedrooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_11_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_11_self_assessor_1_not_reconciled}'>{{guest_rooms_9_11_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_11_self_assessor_2_not_reconciled}'>{{guest_rooms_9_11_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_11_self_assessor_3_not_reconciled}'>{{guest_rooms_9_11_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_11_average | number:2}}</td>
							</tr>
							<!-- 9.12 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.12</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Bedroom Communication Systems</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_12_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_12_self_assessor_1_not_reconciled}'>{{guest_rooms_9_12_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_12_self_assessor_2_not_reconciled}'>{{guest_rooms_9_12_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_12_self_assessor_3_not_reconciled}'>{{guest_rooms_9_12_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_12_average | number:2}}</td>
							</tr>
							<!-- 9.13 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.13</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Room Designations</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_13_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_13_self_assessor_1_not_reconciled}'>{{guest_rooms_9_13_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_13_self_assessor_2_not_reconciled}'>{{guest_rooms_9_13_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_13_self_assessor_3_not_reconciled}'>{{guest_rooms_9_13_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_13_average | number:2}}</td>
							</tr>
							<!-- 9.14 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">9.14</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Room Security</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_rooms_9_14_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_14_self_assessor_1_not_reconciled}'>{{guest_rooms_9_14_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_14_self_assessor_2_not_reconciled}'>{{guest_rooms_9_14_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_14_self_assessor_3_not_reconciled}'>{{guest_rooms_9_14_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_rooms_9_14_average | number:2}}</td>
							</tr>
							<!-- 9.15 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">9.15</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Supplies in Bedrooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{guest_rooms_9_15_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_15_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{guest_rooms_9_15_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_15_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{guest_rooms_9_15_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_9_15_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{guest_rooms_9_15_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{guest_rooms_9_15_average | number:2}}</td>
							</tr>
							
							<!------------------- 10 GUEST BATHROOM(S) ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">10.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							  
							<div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">GUEST BATHROOM(S)</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="guest_bathrooms_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_guest_bathrooms_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>

							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">360</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_0_average | number:2}}</td>
							</tr>							
							<!-- 10.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">10.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Bathroom(s)</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_1_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_1_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_1_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_1_average | number:2}}</td>
							</tr>							
							<!-- 10.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">10.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Size</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_2_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_2_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_2_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_2_average | number:2}}</td>
							</tr>							
							<!-- 10.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">10.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Fittings, Equipment and Amenities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">90</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_3_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_3_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_3_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_3_average | number:2}}</td>
							</tr>							
							<!-- 10.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">10.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Floors, Walls and Ceilings</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_4_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_4_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_4_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_4_average | number:2}}</td>
							</tr>
							<!-- 10.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">10.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Towels and Bathrobes</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_5_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_5_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_5_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_5_average | number:2}}</td>
							</tr>
							<!-- 10.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">10.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Lighting and Ventilation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_6_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_6_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_6_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_6_average | number:2}}</td>
							</tr>
							<!-- 10.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">10.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Shaver Outlet and Sockets</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_7_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_7_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_7_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_7_average | number:2}}</td>
							</tr>
							<!-- 10.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">10.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Supplies in Bathrooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{guest_bathrooms_10_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_8_self_assessor_1_not_reconciled}'>{{guest_bathrooms_10_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_8_self_assessor_2_not_reconciled}'>{{guest_bathrooms_10_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_bathrooms_10_8_self_assessor_3_not_reconciled}'>{{guest_bathrooms_10_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{guest_bathrooms_10_8_average | number:2}}</td>
							</tr>
							<!-- 10.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">10.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Sanitation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{guest_bathrooms_10_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_10_9_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{guest_bathrooms_10_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_10_9_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{guest_bathrooms_10_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:guest_rooms_10_9_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{guest_bathrooms_10_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{guest_bathrooms_10_9_average | number:2}}</td>
							</tr>
							
							<!------------------- 11.0 SUITES ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">11.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  <div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">SUITES</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="suites_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_suites_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">1,020</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_0_self_assessor_1_not_reconciled}'>{{suites_11_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_0_self_assessor_2_not_reconciled}'>{{suites_11_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_0_self_assessor_3_not_reconciled}'>{{suites_11_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_0_average | number:2}}</td>
							</tr>							
							<!-- 11.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">11.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Minimum Size</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_1_self_assessor_1_not_reconciled}'>{{suites_11_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_1_self_assessor_2_not_reconciled}'>{{suites_11_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_1_self_assessor_3_not_reconciled}'>{{suites_11_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_1_average | number:2}}</td>
							</tr>							
							<!-- 11.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">11.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Regulation of Temperature</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_2_self_assessor_1_not_reconciled}'>{{suites_11_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_2_self_assessor_2_not_reconciled}'>{{suites_11_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_2_self_assessor_3_not_reconciled}'>{{suites_11_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_2_average | number:2}}</td>
							</tr>							
							<!-- 11.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">11.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Facilities and Amenities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_3_self_assessor_1_not_reconciled}'>{{suites_11_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_3_self_assessor_2_not_reconciled}'>{{suites_11_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_3_self_assessor_3_not_reconciled}'>{{suites_11_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_3_average | number:2}}</td>
							</tr>							
							<!-- 11.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">11.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Balcony/Terraces</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_4_self_assessor_1_not_reconciled}'>{{suites_11_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_4_self_assessor_2_not_reconciled}'>{{suites_11_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_4_self_assessor_3_not_reconciled}'>{{suites_11_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_4_average | number:2}}</td>
							</tr>
							<!-- 11.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Fittings, Furniture and Equipment</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">90</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_5_self_assessor_1_not_reconciled}'>{{suites_11_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_5_self_assessor_2_not_reconciled}'>{{suites_11_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_5_self_assessor_3_not_reconciled}'>{{suites_11_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_5_average | number:2}}</td>
							</tr>
							<!-- 11.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Decor</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_6_self_assessor_1_not_reconciled}'>{{suites_11_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_6_self_assessor_2_not_reconciled}'>{{suites_11_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_6_self_assessor_3_not_reconciled}'>{{suites_11_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_6_average | number:2}}</td>
							</tr>
							<!-- 11.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Furnishings and Linen</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_7_self_assessor_1_not_reconciled}'>{{suites_11_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_7_self_assessor_2_not_reconciled}'>{{suites_11_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_7_self_assessor_3_not_reconciled}'>{{suites_11_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_7_average | number:2}}</td>
							</tr>
							<!-- 11.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Ventilation and Lighting</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{suites_11_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_8_self_assessor_1_not_reconciled}'>{{suites_11_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_8_self_assessor_2_not_reconciled}'>{{suites_11_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_8_self_assessor_3_not_reconciled}'>{{suites_11_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{suites_11_8_average | number:2}}</td>
							</tr>
							<!-- 11.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Soundproofing</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_9_self_assessor_1_not_reconciled}'>{{suites_11_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_9_self_assessor_2_not_reconciled}'>{{suites_11_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_9_self_assessor_3_not_reconciled}'>{{suites_11_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_9_average | number:2}}</td>
							</tr>
							<!-- 11.10 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.10</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Information in Suites</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_10_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_10_self_assessor_1_not_reconciled}'>{{suites_11_10_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_10_self_assessor_2_not_reconciled}'>{{suites_11_10_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_10_self_assessor_3_not_reconciled}'>{{suites_11_10_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_10_average | number:2}}</td>
							</tr>
							<!-- 11.11 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.11</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Communication Systems</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_11_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_11_self_assessor_1_not_reconciled}'>{{suites_11_11_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_11_self_assessor_2_not_reconciled}'>{{suites_11_11_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_11_self_assessor_3_not_reconciled}'>{{suites_11_11_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_11_average | number:2}}</td>
							</tr>
							<!-- 11.12 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.12</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Supplies in Suites</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">70</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_12_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_12_self_assessor_1_not_reconciled}'>{{suites_11_12_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_12_self_assessor_2_not_reconciled}'>{{suites_11_12_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_12_self_assessor_3_not_reconciled}'>{{suites_11_12_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_12_average | number:2}}</td>
							</tr>
							<!-- 11.13 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.13</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Change of Linen</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_13_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_13_self_assessor_1_not_reconciled}'>{{suites_11_13_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_13_self_assessor_2_not_reconciled}'>{{suites_11_13_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_13_self_assessor_3_not_reconciled}'>{{suites_11_13_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_13_average | number:2}}</td>
							</tr>
							<!-- 11.14 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.14</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Door Security</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_14_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_14_self_assessor_1_not_reconciled}'>{{suites_11_14_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_14_self_assessor_2_not_reconciled}'>{{suites_11_14_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_14_self_assessor_3_not_reconciled}'>{{suites_11_14_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_14_average | number:2}}</td>
							</tr>
							<!-- 11.15 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.15</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Bathroom Size</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">90</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_15_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_15_self_assessor_1_not_reconciled}'>{{suites_11_15_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_15_self_assessor_2_not_reconciled}'>{{suites_11_15_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_15_self_assessor_3_not_reconciled}'>{{suites_11_15_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_15_average | number:2}}</td>
							</tr>
							<!-- 11.16 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.16</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Bathroom, Fittings, Equipment and  Amenities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">90</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_16_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_16_self_assessor_1_not_reconciled}'>{{suites_11_16_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_16_self_assessor_2_not_reconciled}'>{{suites_11_16_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_16_self_assessor_3_not_reconciled}'>{{suites_11_16_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_16_average | number:2}}</td>
							</tr>
							<!-- 11.17 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.17</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Bathroom Supplies</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_17_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_17_self_assessor_1_not_reconciled}'>{{suites_11_17_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_17_self_assessor_2_not_reconciled}'>{{suites_11_17_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_17_self_assessor_3_not_reconciled}'>{{suites_11_17_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_17_average | number:2}}</td>
							</tr>
							<!-- 11.18 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.18</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Bathroom Floors, Walls and Ceilings</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_18_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_18_self_assessor_1_not_reconciled}'>{{suites_11_18_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_18_self_assessor_2_not_reconciled}'>{{suites_11_18_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_18_self_assessor_3_not_reconciled}'>{{suites_11_18_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_18_average | number:2}}</td>
							</tr>
							<!-- 11.19 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.19</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Towels and Bathrobes</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_19_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_19_self_assessor_1_not_reconciled}'>{{suites_11_19_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_19_self_assessor_2_not_reconciled}'>{{suites_11_19_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_19_self_assessor_3_not_reconciled}'>{{suites_11_19_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_19_average | number:2}}</td>
							</tr>
							<!-- 11.20 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">11.20</div></td>
							  <td style="vertical-align:middle" class="border-mdblue ">Lighting and Ventilation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue " ng-show="show_one_assessor_column">{{suites_11_20_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_20_self_assessor_1_not_reconciled}'>{{suites_11_20_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_20_self_assessor_2_not_reconciled}'>{{suites_11_20_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:suites_11_20_self_assessor_3_not_reconciled}'>{{suites_11_20_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue ">{{suites_11_20_average | number:2}}</td>
							</tr>
							<!-- 11.21 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">11.21</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Shaver Outlet</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{suites_11_21_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center"  ng-class='{w3_red:suites_11_21_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{suites_11_21_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center"  ng-class='{w3_red:suites_11_21_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{suites_11_21_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center"  ng-class='{w3_red:suites_11_21_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{suites_11_21_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{suites_11_21_average | number:2}}</td>
							</tr>
							
							<!------------------- 12 HYGIENE AND SANITATION ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">12.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">							  
							  
							 <div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">HYGIENE AND SANITATION</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="hygiene_and_sanitation_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_hygiene_and_sanitation_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">240</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_0_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_0_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_0_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_0_average | number:2}}</td>
							</tr>							
							<!-- 12.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">12.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Guest Cloakrooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_1_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_1_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_1_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_1_average | number:2}}</td>
							</tr>							
							<!-- 12.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">12.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Staff Changing Rooms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_2_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_2_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_2_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_2_average | number:2}}</td>
							</tr>							
							<!-- 12.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">12.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Refuse Storage and Disposal</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_3_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_3_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_3_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_3_average | number:2}}</td>
							</tr>							
							<!-- 12.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">12.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Sewerage</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_4_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_4_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_4_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_4_average | number:2}}</td>
							</tr>
							<!-- 12.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">12.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Vermin Proofing</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_5_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_5_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_5_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_5_average | number:2}}</td>
							</tr>
							<!-- 12.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue  row_1_1"><div ng-class="{number_pre:true}">12.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Water Supply</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_6_self_assessor_1_not_reconciled}'>{{hygiene_and_sanitation_12_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_6_self_assessor_2_not_reconciled}'>{{hygiene_and_sanitation_12_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_6_self_assessor_3_not_reconciled}'>{{hygiene_and_sanitation_12_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{hygiene_and_sanitation_12_6_average | number:2}}</td>
							</tr>
							<!-- 12.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">12.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Water Storage</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{hygiene_and_sanitation_12_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_7_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{hygiene_and_sanitation_12_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_7_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{hygiene_and_sanitation_12_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:hygiene_and_sanitation_12_7_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{hygiene_and_sanitation_12_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{hygiene_and_sanitation_12_7_average | number:2}}</td>
							</tr>
							
							<!------------------- 13. SAFETY AND SECURITY ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">13.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							<div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">SAFETY AND SECURITY</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="safety_and_security_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_safety_and_security_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">160</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{safety_and_security_13_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_0_self_assessor_1_not_reconciled}'>{{safety_and_security_13_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_0_self_assessor_2_not_reconciled}'>{{safety_and_security_13_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_0_self_assessor_3_not_reconciled}'>{{safety_and_security_13_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{safety_and_security_13_0_average | number:2}}</td>
							</tr>							
							<!-- 13.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">13.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Fire Protection</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{safety_and_security_13_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_1_self_assessor_1_not_reconciled}'>{{safety_and_security_13_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_1_self_assessor_2_not_reconciled}'>{{safety_and_security_13_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_1_self_assessor_3_not_reconciled}'>{{safety_and_security_13_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{safety_and_security_13_1_average | number:2}}</td>
							</tr>							
							<!-- 13.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">13.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Electrical Safety</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{safety_and_security_13_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_2_self_assessor_1_not_reconciled}'>{{safety_and_security_13_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_2_self_assessor_2_not_reconciled}'>{{safety_and_security_13_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_2_self_assessor_3_not_reconciled}'>{{safety_and_security_13_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{safety_and_security_13_2_average | number:2}}</td>
							</tr>							
							<!-- 13.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">13.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Security</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{safety_and_security_13_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_3_self_assessor_1_not_reconciled}'>{{safety_and_security_13_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_3_self_assessor_2_not_reconciled}'>{{safety_and_security_13_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_3_self_assessor_3_not_reconciled}'>{{safety_and_security_13_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{safety_and_security_13_3_average | number:2}}</td>
							</tr>							
							<!-- 13.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">13.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Emergency Power</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{safety_and_security_13_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_4_self_assessor_1_not_reconciled}'>{{safety_and_security_13_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_4_self_assessor_2_not_reconciled}'>{{safety_and_security_13_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_4_self_assessor_3_not_reconciled}'>{{safety_and_security_13_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{safety_and_security_13_4_average | number:2}}</td>
							</tr>
							<!-- 13.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">13.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">First Aid</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{safety_and_security_13_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_5_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{safety_and_security_13_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_5_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{safety_and_security_13_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:safety_and_security_13_5_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{safety_and_security_13_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{safety_and_security_13_5_average | number:2}}</td>
							</tr>
							
							<!------------------- 14. SUNDRY SERVICES ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">14.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">
							  
							<div style="display:table">	  
						<div class="" style="display:table-cell; width:auto; padding-right:10px">SUNDRY SERVICES</div>							
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="sundry_services_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_sundry_services_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
							  </div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">80</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{sundry_services_14_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_0_self_assessor_1_not_reconciled}'>{{sundry_services_14_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_0_self_assessor_2_not_reconciled}'>{{sundry_services_14_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_0_self_assessor_3_not_reconciled}'>{{sundry_services_14_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{sundry_services_14_0_average | number:2}}</td>
							</tr>							
							<!-- 14.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">14.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Luggage, Lost and Found Room</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{sundry_services_14_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_1_self_assessor_1_not_reconciled}'>{{sundry_services_14_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_1_self_assessor_2_not_reconciled}'>{{sundry_services_14_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_1_self_assessor_3_not_reconciled}'>{{sundry_services_14_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{sundry_services_14_1_average | number:2}}</td>
							</tr>							
							<!-- 14.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">14.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Shoe Shine</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{sundry_services_14_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_2_self_assessor_1_not_reconciled}'>{{sundry_services_14_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_2_self_assessor_2_not_reconciled}'>{{sundry_services_14_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_2_self_assessor_3_not_reconciled}'>{{sundry_services_14_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{sundry_services_14_2_average | number:2}}</td>
							</tr>							
							<!-- 14.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">14.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Baby Sitter</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{sundry_services_14_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_3_self_assessor_1_not_reconciled}'>{{sundry_services_14_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_3_self_assessor_2_not_reconciled}'>{{sundry_services_14_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_3_self_assessor_3_not_reconciled}'>{{sundry_services_14_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{sundry_services_14_3_average | number:2}}</td>
							</tr>							
							<!-- 14.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">14.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Room Service</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{sundry_services_14_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_4_self_assessor_1_not_reconciled}'>{{sundry_services_14_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_4_self_assessor_2_not_reconciled}'>{{sundry_services_14_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_4_self_assessor_3_not_reconciled}'>{{sundry_services_14_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{sundry_services_14_4_average | number:2}}</td>
							</tr>
							<!-- 14.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">14.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Laundry and Dry Cleaning Service</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{sundry_services_14_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_5_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{sundry_services_14_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_5_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{sundry_services_14_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:sundry_services_14_5_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{sundry_services_14_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{sundry_services_14_5_average | number:2}}</td>
							</tr>
							
							<!------------------- 15. HUMAN RESOURCES ------------------>
		
							<tr style="font-weight:bold"> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">15.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">							  
								<div style="display:table">	  
								<div class="" style="display:table-cell; width:auto; padding-right:10px">HUMAN RESOURCES</div>							
										
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="human_resources_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_human_resources_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
								</div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">310</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_0_self_assessor_1_not_reconciled}'>{{human_resources_15_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_0_self_assessor_2_not_reconciled}'>{{human_resources_15_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_0_self_assessor_3_not_reconciled}'>{{human_resources_15_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_0_average | number:2}}</td>
							</tr>							
							<!-- 15.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Human Resource Policy</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_1_self_assessor_1_not_reconciled}'>{{human_resources_15_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_1_self_assessor_2_not_reconciled}'>{{human_resources_15_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_1_self_assessor_3_not_reconciled}'>{{human_resources_15_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_1_average | number:2}}</td>
							</tr>							
							<!-- 15.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Professional Qualifications of Management Staff</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_2_self_assessor_1_not_reconciled}'>{{human_resources_15_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_2_self_assessor_2_not_reconciled}'>{{human_resources_15_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_2_self_assessor_3_not_reconciled}'>{{human_resources_15_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_2_average | number:2}}</td>
							</tr>							
							<!-- 15.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Departmental Heads</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_3_self_assessor_1_not_reconciled}'>{{human_resources_15_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_3_self_assessor_2_not_reconciled}'>{{human_resources_15_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_3_self_assessor_3_not_reconciled}'>{{human_resources_15_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_3_average | number:2}}</td>
							</tr>							
							<!-- 15.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Professional Qualifications of Operative Staff</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">60</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_4_self_assessor_1_not_reconciled}'>{{human_resources_15_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_4_self_assessor_2_not_reconciled}'>{{human_resources_15_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_4_self_assessor_3_not_reconciled}'>{{human_resources_15_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_4_average | number:2}}</td>
							</tr>
							<!-- 15.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Languages</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_5_self_assessor_1_not_reconciled}'>{{human_resources_15_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_5_self_assessor_2_not_reconciled}'>{{human_resources_15_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_5_self_assessor_3_not_reconciled}'>{{human_resources_15_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_5_average | number:2}}</td>
							</tr>
							<!-- 15.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Health</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_6_self_assessor_1_not_reconciled}'>{{human_resources_15_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_6_self_assessor_2_not_reconciled}'>{{human_resources_15_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_6_self_assessor_3_not_reconciled}'>{{human_resources_15_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_6_average | number:2}}</td>
							</tr>
							<!-- 15.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Staff Uniforms</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_7_self_assessor_1_not_reconciled}'>{{human_resources_15_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_7_self_assessor_2_not_reconciled}'>{{human_resources_15_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_7_self_assessor_3_not_reconciled}'>{{human_resources_15_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_7_average | number:2}}</td>
							</tr>
							<!-- 15.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">15.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Personal Grooming</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">10</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{human_resources_15_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_8_self_assessor_1_not_reconciled}'>{{human_resources_15_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_8_self_assessor_2_not_reconciled}'>{{human_resources_15_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_8_self_assessor_3_not_reconciled}'>{{human_resources_15_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{human_resources_15_8_average | number:2}}</td>
							</tr>
							<!-- 15.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">15.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Dinning and Recreational Facilities for Staff</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{human_resources_15_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_9_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{human_resources_15_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_9_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{human_resources_15_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:human_resources_15_9_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{human_resources_15_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{human_resources_15_9_average | number:2}}</td>
							</tr>
							
							<!------------------- 16. GENERAL ------------------>
		
							<tr> 
							  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">16.0</div></td>
							  <td colspan="2"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">							  
							  	<div style="display:table">	  
								<div class="" style="display:table-cell; width:auto; padding-right:10px">GENERAL</div>							
										
								
                        <div class="" style="display:table-cell; width:82px; text-align:left!important; position:relative; font-weight:normal" ng-hide="general_not_reconciled"> 
                          <div class="stars_rating_color" style="width:82px; position:absolute; left:0; top:0; margin-top:-3px; opacity:.5"> 
                            <span style="" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                            <span style="margin-left:-5px" class="mdi mdi-star mdi-18px mdi-star-outline"></span> 
                          </div>
                          <div class="stars_rating_color" style="width:{{filled_size_general_stars_div_width}}px; text-align:left!important; position:absolute; left:0; top:0; margin-top:-3px; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                            <span style="color:{{section_color_first_star}}" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_second_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_third_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fourth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                            <span style="color:{{section_color_fifth_star}}; margin-left:-5px" class="mdi mdi-star mdi-18px"></span> 
                          </div>
                        </div>
								</div>
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">420</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_0_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_0_self_assessor_1_not_reconciled}'>{{general_16_0_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_0_self_assessor_2_not_reconciled}'>{{general_16_0_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_0_self_assessor_3_not_reconciled}'>{{general_16_0_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_0_average | number:2}}</td>
							</tr>							
							<!-- 16.1 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.1</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">Audio Visual</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_1_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_1_self_assessor_1_not_reconciled}'>{{general_16_1_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_1_self_assessor_2_not_reconciled}'>{{general_16_1_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_1_self_assessor_3_not_reconciled}'>{{general_16_1_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_1_average | number:2}}</td>
							</tr>							
							<!-- 16.2 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.2</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Lifts/Elevators</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_2_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_2_self_assessor_1_not_reconciled}'>{{general_16_2_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_2_self_assessor_2_not_reconciled}'>{{general_16_2_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_2_self_assessor_3_not_reconciled}'>{{general_16_2_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_2_average | number:2}}</td>
							</tr>							
							<!-- 16.3 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.3</div></td>
							  <td style="vertical-align:middle" class="border-mdblue borderless-top">General Stores</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_3_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_3_self_assessor_1_not_reconciled}'>{{general_16_3_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_3_self_assessor_2_not_reconciled}'>{{general_16_3_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_3_self_assessor_3_not_reconciled}'>{{general_16_3_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_3_average | number:2}}</td>
							</tr>							
							<!-- 16.4 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.4</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Courtesy of Choice</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_4_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_4_self_assessor_1_not_reconciled}'>{{general_16_4_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_4_self_assessor_2_not_reconciled}'>{{general_16_4_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_4_self_assessor_3_not_reconciled}'>{{general_16_4_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_4_average | number:2}}</td>
							</tr>
							<!-- 16.5 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.5</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Parking Space</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_5_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_5_self_assessor_1_not_reconciled}'>{{general_16_5_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_5_self_assessor_2_not_reconciled}'>{{general_16_5_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_5_self_assessor_3_not_reconciled}'>{{general_16_5_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_5_average | number:2}}</td>
							</tr>
							<!-- 16.6 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.6</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Shopping Facilities</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_6_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_6_self_assessor_1_not_reconciled}'>{{general_16_6_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_6_self_assessor_2_not_reconciled}'>{{general_16_6_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_6_self_assessor_3_not_reconciled}'>{{general_16_6_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_6_average | number:2}}</td>
							</tr>
							<!-- 16.7 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.7</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Taxi Services</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_7_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_7_self_assessor_1_not_reconciled}'>{{general_16_7_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_7_self_assessor_2_not_reconciled}'>{{general_16_7_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_7_self_assessor_3_not_reconciled}'>{{general_16_7_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_7_average | number:2}}</td>
							</tr>
							<!-- 16.8 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.8</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Guest Transport Service</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">20</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_8_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_8_self_assessor_1_not_reconciled}'>{{general_16_8_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_8_self_assessor_2_not_reconciled}'>{{general_16_8_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_8_self_assessor_3_not_reconciled}'>{{general_16_8_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_8_average | number:2}}</td>
							</tr>
							<!-- 16.9 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.9</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Entertainment and Recreation</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_9_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_9_self_assessor_1_not_reconciled}'>{{general_16_9_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_9_self_assessor_2_not_reconciled}'>{{general_16_9_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_9_self_assessor_3_not_reconciled}'>{{general_16_9_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_9_average | number:2}}</td>
							</tr>
							<!-- 16.10 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.10</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Outdoor Areas</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_10_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_10_self_assessor_1_not_reconciled}'>{{general_16_10_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_10_self_assessor_2_not_reconciled}'>{{general_16_10_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_10_self_assessor_3_not_reconciled}'>{{general_16_10_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_10_average | number:2}}</td>
							</tr>
							<!-- 16.11 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.11</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Swimming Pool</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">50</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_11_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_11_self_assessor_1_not_reconciled}'>{{general_16_11_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_11_self_assessor_2_not_reconciled}'>{{general_16_11_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_11_self_assessor_3_not_reconciled}'>{{general_16_11_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_11_average | number:2}}</td>
							</tr>
							<!-- 16.12 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom borderless-bottom"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue row_1_1"><div ng-class="{number_pre:true}">16.12</div></td>
							  <td style="vertical-align:middle" class="border-mdblue">Hotel Insurance</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">30</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue" ng-show="show_one_assessor_column">{{general_16_12_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_12_self_assessor_1_not_reconciled}'>{{general_16_12_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_12_self_assessor_2_not_reconciled}'>{{general_16_12_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_12_self_assessor_3_not_reconciled}'>{{general_16_12_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue">{{general_16_12_average | number:2}}</td>
							</tr>
							<!-- 16.13 -->							
							<tr ng-class=""> 
							  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td>
							  <td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"><div ng-class="{number_pre:true}">16.13</div></td>
							  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Health Club</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">40</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">{{general_16_13_self_self}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_13_self_assessor_1_not_reconciled, last_row_col_sub_section:true}'>{{general_16_13_self_assessor_1}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_13_self_assessor_2_not_reconciled, last_row_col_sub_section:true}'>{{general_16_13_self_assessor_2}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" ng-class='{w3_red:general_16_13_self_assessor_3_not_reconciled, last_row_col_sub_section:true}'>{{general_16_13_self_assessor_3}}</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">{{general_16_13_average | number:2}}</td>
							</tr>
							<tr style="height:75px; font-weight:bold"> 
							  <!--td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td-->
							  <!--td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"></td-->
							  <td colspan="3" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">OVERALL TOTAL</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">5,585</td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section" ng-show="show_one_assessor_column">
							  {{overall_total_self_self}}
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">
							  {{overall_total_self_assessor_1}}
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">
							  {{overall_total_self_assessor_2}}
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">
							  {{overall_total_self_assessor_3}}
							  </td>
							  <td style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">
							  {{ overall_total_average | number:2 }}
							  </td>
							</tr>
							<tr style="height:75px; font-weight:bold"> 
							  <!--td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td-->
							  <!--td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"></td-->
							  <td rowspan="2" colspan="3" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">GRADE</td>
							  <td colspan="6" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section">
							  
							  <div class="" style="display:inline-block; width:250px" ng-hide="overall_not_reconciled">
							  <div style="width:100%; letter-spacing:.2rem; font-size:20px; color:">{{grade}}</div>							  
							  </div>
							  
							  </td>							 
							</tr>
							<tr style="height:75px; font-weight:bold"> 
							  <!--td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col_sub_section"></td-->
							  <!--td style="vertical-align:top; width:16px;" class="border-mdblue last_row_col_sub_section row_1_1"></td-->
							  <!--td colspan="3" style="vertical-align:middle; text-align:center" align="center" class="border-mdblue last_row_col_sub_section"></td-->
							  <td colspan="6" style="vertical-align:middle; text-align:center; background-color:" align="center" class="border-mdblue last_row_col_sub_section">
							  
								<div class="" style="display:inline-block; width:200px; height:50px; text-align:left!important; position:relative" ng-hide="overall_not_reconciled"> 
                        <div class="stars_rating_color" style="width:200px; height:50px; position:absolute; left:0; top:0; opacity:.5"> 
                          <span style="" class="mdi mdi-star mdi-36px mdi-star-outline"></span> 
                          <span style="" class="mdi mdi-star mdi-36px mdi-star-outline"></span> 
                          <span style="" class="mdi mdi-star mdi-36px mdi-star-outline"></span> 
                          <span style="" class="mdi mdi-star mdi-36px mdi-star-outline"></span> 
                          <span style="" class="mdi mdi-star mdi-36px mdi-star-outline"></span> 
                        </div>
                        <div class="stars_rating_color" style="width:{{filled_medium_size_stars_div_width}}px; height:50px; text-align:left!important; position:absolute; left:0; top:0; white-space:nowrap; overflow:hidden; text-overflow:clip"> 
                          <span style="color:{{color_one}}" class="mdi mdi-star mdi-36px"></span> 
                          <span style="color:{{color_two}}" class="mdi mdi-star mdi-36px"></span> 
                          <span style="color:{{color_three}}" class="mdi mdi-star mdi-36px"></span> 
                          <span style="color:{{color_four}}" class="mdi mdi-star mdi-36px"></span> 
                          <span style="color:{{color_five}}" class="mdi mdi-star mdi-36px"></span> 
                        </div>
                      </div>
							  
							  </td>							 
							</tr>						  
					
							
						  </tbody>
						</table>
						<div class="" style="width:100%; padding:20px; margin-top:-22px">
						
						</div>
						<div class="form-group wateja_request_form_buttons_margin" align="center" style="margin-top:40px!important">										
							<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_left">Send</div>
							<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_middle">Publish</div>
							<div class="rstdbtn rstdbtn-outline-warning operation_button operation_button_right" ng-click="close_tallying_sheet_for_town_hotel()">Close</div>											
						</div>
                  </form>				
                
             

            </div>
          </div>
        </div>
      </div>
    </div>
</div>