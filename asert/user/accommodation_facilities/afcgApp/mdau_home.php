<div class="row_form" style="" >
	<div class="modal-body-to-viewport_c" style="padding-left:0px">
		<div class="" style="width:100%; margin-top:0px; padding:0px 0px 0px 0px; background-color:#f5f5f5TTTT"> 
		
		<div class="fixed-top" style="width:100%; padding:15px 15px 12px 15px; height:65px; border-bottom:0px solid #f1f1f1; background-color: rgba(255,255,255,0)">
				<span>
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menuTTTT()">
					<span class="rstdnavbar-toggler-icon_hamburger_white"></span>
					</button>
				</span>		
				<span class="pull-right">
					<button id="search_button" class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_searchTTTT()">		
					<span class="rstdnavbar-toggler-icon_search_white"></span>
					</button>
				</span>
				<span class="pull-right search_dawati_text">
					<button class="rstdnavbar-toggler rstdsidebar-toggler" style="padding-right:0px" type="button" ng-click="show_searchTTTT()">
					<span class="header__search w3-text-white">Search</span>
					</button>
				</span>
	   </div>
	   
	  <div class="afcg_slideshow position-fixed" style="width:100%; height:380px; top:0px; padding: 0px 0px 0px 0px; z-index:-1"></div>
	  	  
      
    <div class="w3-orangeTTTT" style="position:relative; width:100%; height:250px; top:65px; padding: 0px 0px 0px 0px; margin-left:auto; margin-right:auto;background-color:rgba(255,255,255,0)"> 
      <div class="" style="width:100%; padding:0px 0px 0px 0px; position:absolute; bottom:0px"> 
        <center>
          <div class="afcg_gov_logo rounded-top" style="margin:0px 0px 0px 0px; background-color:rgba(255,255,255,.5)"></div>
          <div class="afcg_logo_pic" style="border:0px solid #ffffff; color:#ffffff; background-color:rgba(0,0,0,1)"></div>
          <div class="afcg_logo_home" style="margin-top:0px; border:0px solid #ffffff; color:#ffffff; background-color:rgba(0,0,0,.1)">AserT</div>
          <div class="afcg_logo_motto" style="margin-top:0px; border:0px solid #ffffff; color:#ffffff; background-color:#d0a92c"></div>
        </center>
      </div>
    </div>
	   
      
    <div class="" style="position:relative; width:100%; height:65px; top:65px; padding: 0px 0px 0px 0px; margin-left:auto; margin-right:auto;background-color:rgba(255,255,255,.5)"> 
      <div class="" style="width:100%; padding:0px 0px 0px 0px; position:absolute; bottom:0px"> 
        <center>
          <span class="divider divider__white" style="margin-top:0px"> 
          <hr>
          <hr>
          </span> 
        </center>
      </div>
    </div>
	  				
	  <!--div class="afcg_slideshow position-fixed" style="width:100%; height:380px; top:0px; padding: 0px 0px 0px 0px"></div-->
	  
	  <!--FIRST ROW-->
	  <div class="wrap_boxes_row afcg_modal_row_border" style="width:100%; margin-top:65px;background-color:rgba(0,0,0,0); border-top:0px solid #d0a92c">			  
		  <!--REGISTRATION-->
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_reg" style="background-color:rgba(0,0,0,0)">
		  	<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-square-edit-outline" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_reg_facility_assessor()">Registration</div>    
		  </div>
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_reg_facility_assessor" ng-mouseleave="show_afcg_reg()" style="background-color:rgba(245,245,245,1)">					  
			<div class="w3-text-black" style="border-bottom:0px solid white; padding:0px 0px 0px 0px; margin-bottom:10px">REGISTRATION</div>						
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; cursor:pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-home-plus mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:0px; text-align:left; padding-left:20px!important" ng-click="addData()">Facility</div>
			</div>
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; margin-top:5px; cursor: pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-account-plus mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:5px; text-align:left; padding-left:20px!important" ng-click="assessor_registration()">Assessor</div>
			</div>
			<div class="wrap_boxes_row_const" style="margin-top:10px">
				<div class="rstd_arrow_left_md" ng-click="show_afcg_reg()"></div>
				<div class="" style="margin-top:5px; text-align:left; width:20px"></div>
				<div class="rstd_arrow_right_md rstd_arrow_disabled"></div>
			</div>				 				
		  </div>			  
		  <!--LOGIN-->			  
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_login" style="background-color:rgba(0,0,0,0)">
		  	<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-login" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_login_facility_assessor()">Login</div>   
		  </div>
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_login_facility_assessor" ng-mouseleave="show_afcg_login()" style="background-color:rgba(245,245,245,1)">					  
			<div class="w3-text-black" style="border-bottom:0px solid white; padding:0px 0px 0px 0px; margin-bottom:10px">LOGIN</div>						
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; cursor:pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-home-plus mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:0px; text-align:left; padding-left:20px!important" ng-click="show_login('facility')">Facility</div>
			</div>
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; margin-top:5px; cursor: pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-account-plus mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:5px; text-align:left; padding-left:20px!important" ng-click="show_login('assessor')">Assessor</div>
			</div>
			<div class="wrap_boxes_row_const" style="margin-top:10px">
				<div class="rstd_arrow_left_md" ng-click="show_afcg_login()"></div>
				<div class="" style="margin-top:5px; text-align:left; width:20px"></div>
				<div class="rstd_arrow_right_md rstd_arrow_disabled"></div>
			</div>				 				
		  </div>			  
		  <!--HELP-->			  
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_quick_help" style="background-color:rgba(128,128,0,0)">
			<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-help" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_quick_help_1()">Quick Help</div>    
		  </div>
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" ng-show="afcg_quick_help_1" ng-mouseleave="show_afcg_quick_help()" style="background-color:rgba(245,245,245,1)">					  
			<div class="w3-text-black" style="border-bottom:0px solid white; padding:0px 0px 0px 0px; margin-bottom:10px">QUICK HELP</div>						
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; cursor:pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-card-text-outline mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:0px; text-align:left; padding-left:20px!important" ng-click="show_maelekezo()">Read Steps</div>
			</div>
			<div class="wrap_boxes_row_const">
				<div class="afcg_home_col_center_center w3-black" style="width:36px; height:36px; margin-top:5px; cursor: pointer; padding-top:4px; color:#d0a92c!important"><span class="mdi mdi-contacts mdi-24px"></span></div>
				<div class="rstdbtn rstdbtn-outline-warning confirmation_button_2 top_menu_item_button_right" style="width:120px; margin-top:5px; text-align:left; padding-left:20px!important" ng-click="show_contacts()">Contact Us</div>
			</div>
			<div class="wrap_boxes_row_const" style="margin-top:10px">
				<div class="rstd_arrow_left_md" ng-click="show_afcg_quick_help()"></div>
				<div class="" style="margin-top:5px; text-align:left; width:20px"></div>
				<div class="rstd_arrow_right_md rstd_arrow_disabled"></div>
			</div>				 				
		  </div>			  
	  </div>
	  <!--SECOND ROW-->
	  <div class="w3-black wrap_boxes_row afcg_modal_row_border" style="width:100%; margin-top:Opx">			  
		  <!--FACILITIES-->
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" style="background-color:rgba(0,0,0,0)">
		  	<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-home-city-outline" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_reg_facility_assessor()TTTT">Facilities</div>    
		  </div>			  
		  <!--ASSESSORS-->			  
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" style="background-color:rgba(0,0,0,0)">
		  	<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-human-male-female" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_login_facility_assessor()TTTT">Assessors</div>   
		  </div>			  
		  <!--STATISTICS-->			  
		  <div class="afcg_home_col_center_center afcg_home_bottom_box_resp afcg_modal_box_border" style="background-color:rgba(128,128,0,0)">
			<div class="afcg_modal_col_center_center" style="width:80px; height:80px; border:2px solid #d0a92c; border-radius:40px;margin-bottom:5px" ng-click=""><span class="mdi mdi-chart-bar" style="font-size:48px; color:#d0a92c"></span></div>
			<div class="rstdbtn rstdbtn-outline-warning confirmation_button_3" style="width:120px" ng-click="show_afcg_quick_help_1()TTTT">Statistics</div>    
		  </div>			
	   </div>
	   <!--THIRD ROW-->
	</div>
</div>