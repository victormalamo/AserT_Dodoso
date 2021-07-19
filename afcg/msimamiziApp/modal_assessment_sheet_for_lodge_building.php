
<!------------------- 2.0 BUILDING ------------------>

<tr> 
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">2.0</div></td>
  <td colspan="5"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">BUILDING</td>
  <td style="vertical-align:top" class="border-mdblue first_row_col borderless-bottom"></td>
</tr>

<!-- 2.1 -->
<!-- 2.1.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">2.1</td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_2_1_1">Design and Architectural Features</td>
  <td rowspan="38" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="building_2_1_1_text" name="building_2_1_1_text" ng-model="building_2_1_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>


<!-- 2.1.1.A -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Lodge have entrance canopy designed to allow vehicles and protect guest from weather elements?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No canopy<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_A_a" class="sum_lodge" type="radio" name="building_2_1_1_A" ng-model="building_2_1_1_A" value="0" ng-checked="building_2_1_1_A_a" ng-focus="check_building_2_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_A_cm" ng-model="building_2_1_1_A_cm" ng-focus="check_building_2_1_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Canopy available but inadequate<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_A_b" class="sum_lodge" type="radio"  name="building_2_1_1_A" ng-model="building_2_1_1_A" value="3" ng-checked="building_2_1_1_A_b" ng-focus="check_building_2_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Canopy available and inadequate<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_A_c" class="sum_lodge" type="radio"  name="building_2_1_1_A" ng-model="building_2_1_1_A" value="5" ng-checked="building_2_1_1_A_c" ng-focus="check_building_2_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.B -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Lodge allow for separation of traffic flow for guests, staff and supplies?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_B_a" class="sum_lodge" type="radio" name="building_2_1_1_B" ng-model="building_2_1_1_B" value="0" ng-checked="building_2_1_1_B_a" ng-focus="check_building_2_1_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_B_cm" ng-model="building_2_1_1_B_cm" ng-focus="check_building_2_1_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_B_b" class="sum_lodge" type="radio"  name="building_2_1_1_B" ng-model="building_2_1_1_B" value="5" ng-checked="building_2_1_1_B_b" ng-focus="check_building_2_1_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.C -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Lodge have approved building plan from the relevant authority?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_C_a" class="sum_lodge" type="radio" name="building_2_1_1_C" ng-model="building_2_1_1_C" value="0" ng-checked="building_2_1_1_C_a" ng-focus="check_building_2_1_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_C_cm" ng-model="building_2_1_1_C_cm" ng-focus="check_building_2_1_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(2)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_C_b" class="sum_lodge" type="radio"  name="building_2_1_1_C" ng-model="building_2_1_1_C" value="2" ng-checked="building_2_1_1_C_b" ng-focus="check_building_2_1_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.D -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is structure in conformity with the Approved Plan?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_D_a" class="sum_lodge" type="radio" name="building_2_1_1_D" ng-model="building_2_1_1_D" value="0" ng-checked="building_2_1_1_D_a" ng-focus="check_building_2_1_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_D_cm" ng-model="building_2_1_1_D_cm" ng-focus="check_building_2_1_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_D_b" class="sum_lodge" type="radio"  name="building_2_1_1_D" ng-model="building_2_1_1_D" value="3" ng-checked="building_2_1_1_D_b" ng-focus="check_building_2_1_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.E -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the building have a valid aoccupation certificate?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_E_a" class="sum_lodge" type="radio" name="building_2_1_1_E" ng-model="building_2_1_1_E" value="0" ng-checked="building_2_1_1_E_a" ng-focus="check_building_2_1_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_E_cm" ng-model="building_2_1_1_E_cm" ng-focus="check_building_2_1_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_E_b" class="sum_lodge" type="radio"  name="building_2_1_1_E" ng-model="building_2_1_1_E" value="5" ng-checked="building_2_1_1_E_b" ng-focus="check_building_2_1_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.F -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the quality of external and internal finishing materials?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(1)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_F_a" class="sum_lodge" type="radio" name="building_2_1_1_F" ng-model="building_2_1_1_F" value="1" ng-checked="building_2_1_1_F_a" ng-focus="check_building_2_1_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_F_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_F_cm" ng-model="building_2_1_1_F_cm" ng-focus="check_building_2_1_1_F()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_F_b" class="sum_lodge" type="radio"  name="building_2_1_1_F" ng-model="building_2_1_1_F" value="3" ng-checked="building_2_1_1_F_b" ng-focus="check_building_2_1_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_F_c" class="sum_lodge" type="radio"  name="building_2_1_1_F" ng-model="building_2_1_1_F" value="5" ng-checked="building_2_1_1_F_c" ng-focus="check_building_2_1_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.G -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Lodge building convey a theme in its features?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_G_a" class="sum_lodge" type="radio" name="building_2_1_1_G" ng-model="building_2_1_1_G" value="0" ng-checked="building_2_1_1_G_a" ng-focus="check_building_2_1_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_G_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_G_cm" ng-model="building_2_1_1_G_cm" ng-focus="check_building_2_1_1_G()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_G_b" class="sum_lodge" type="radio"  name="building_2_1_1_G" ng-model="building_2_1_1_G" value="5" ng-checked="building_2_1_1_G_b" ng-focus="check_building_2_1_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.H -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Do the Lodge building incorporate aesthetic feature that are in harmony with the narual and social environment?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No harmony<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_H_a" class="sum_lodge" type="radio" name="building_2_1_1_H" ng-model="building_2_1_1_H" value="0" ng-checked="building_2_1_1_H_a" ng-focus="check_building_2_1_1_H_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_H_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_H_cm" ng-model="building_2_1_1_H_cm" ng-focus="check_building_2_1_1_H()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Blends in well<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_H_b" class="sum_lodge" type="radio"  name="building_2_1_1_H" ng-model="building_2_1_1_H" value="5" ng-checked="building_2_1_1_H_b" ng-focus="check_building_2_1_1_H_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.I -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Do the architectural features of the Lodge incorporate use of loca heritage?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_I_a" class="sum_lodge" type="radio" name="building_2_1_1_I" ng-model="building_2_1_1_I" value="0" ng-checked="building_2_1_1_I_a" ng-focus="check_building_2_1_1_I_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_1_1_I_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_I_cm" ng-model="building_2_1_1_I_cm" ng-focus="check_building_2_1_1_I()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_I_b" class="sum_lodge" type="radio"  name="building_2_1_1_I" ng-model="building_2_1_1_I" value="5" ng-checked="building_2_1_1_I_b" ng-focus="check_building_2_1_1_I_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.J -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How  would you rate the state of repair and maintenance?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">()</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_J_a" class="sum_lodge" type="radio" name="building_2_1_1_J" ng-model="building_2_1_1_J" value="0" ng-checked="building_2_1_1_J_a" ng-focus="check_building_2_1_1_J_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="building_2_1_1_J_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_J_cm" ng-model="building_2_1_1_J_cm" ng-focus="check_building_2_1_1_J()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_J_b" class="sum_lodge" type="radio"  name="building_2_1_1_J" ng-model="building_2_1_1_J" value="3" ng-checked="building_2_1_1_J_b" ng-focus="check_building_2_1_1_J_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Well maintained<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_J_c" class="sum_lodge" type="radio"  name="building_2_1_1_J" ng-model="building_2_1_1_J" value="5" ng-checked="building_2_1_1_J_c" ng-focus="check_building_2_1_1_J_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.1.1.K -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of cleanliness?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">()</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_K_a" class="sum_lodge" type="radio" name="building_2_1_1_K" ng-model="building_2_1_1_K" value="0" ng-checked="building_2_1_1_K_a" ng-focus="check_building_2_1_1_K_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="building_2_1_1_K_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_1_1_K_cm" ng-model="building_2_1_1_K_cm" ng-focus="check_building_2_1_1_K()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_K_b" class="sum_lodge" type="radio"  name="building_2_1_1_K" ng-model="building_2_1_1_K" value="3" ng-checked="building_2_1_1_K_b" ng-focus="check_building_2_1_1_K_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very clean<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_1_1_K_c" class="sum_lodge" type="radio"  name="building_2_1_1_K" ng-model="building_2_1_1_K" value="5" ng-checked="building_2_1_1_K_c" ng-focus="check_building_2_1_1_K_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.2-->
<!-- 2.2.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">2.2</td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_2_2_1">Capacity</td>
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="building_2_2_1_text" name="building_2_2_1_text" ng-model="building_2_2_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>


<!-- 2.2.1.A -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Lodge have at least the lettable rooms?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Less than ten<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_2_1_A_a" class="sum_lodge" type="radio" name="building_2_2_1_A" ng-model="building_2_2_1_A" value="3" ng-checked="building_2_2_1_A_a" ng-focus="check_building_2_2_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_2_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_2_1_A_cm" ng-model="building_2_2_1_A_cm" ng-focus="check_building_2_2_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Ten rooms and above<span class="marks_weight">(10)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_2_1_A_b" class="sum_lodge" type="radio"  name="building_2_2_1_A" ng-model="building_2_2_1_A" value="10" ng-checked="building_2_2_1_A_b" ng-focus="check_building_2_2_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3-->
<!-- 2.3.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">2.3</td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_2_3_1">Corridors, Hallwayas, Staircases and Walkways</td>
  <td rowspan="26" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="building_2_3_1_text" name="building_2_3_1_text" ng-model="building_2_3_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>


<!-- 2.3.1.A -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the gradient of the staircases and ramp in conformity with the building code?(Staircase 550mm<2R+T<610):(Ramp 1 in 12 max.</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_A_a" class="sum_lodge" type="radio" name="building_2_3_1_A" ng-model="building_2_3_1_A" value="0" ng-checked="building_2_3_1_A_a" ng-focus="check_building_2_3_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_A_cm" ng-model="building_2_3_1_A_cm" ng-focus="check_building_2_3_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_A_b" class="sum_lodge" type="radio"  name="building_2_3_1_A" ng-model="building_2_3_1_A" value="5" ng-checked="building_2_3_1_A_b" ng-focus="check_building_2_3_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.B -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are hallways/walkways appropriate lit?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_B_a" class="sum_lodge" type="radio" name="building_2_3_1_B" ng-model="building_2_3_1_B" value="0" ng-checked="building_2_3_1_B_a" ng-focus="check_building_2_3_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_B_cm" ng-model="building_2_3_1_B_cm" ng-focus="check_building_2_3_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_B_b" class="sum_lodge" type="radio"  name="building_2_3_1_B" ng-model="building_2_3_1_B" value="5" ng-checked="building_2_3_1_B_b" ng-focus="check_building_2_3_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.C -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are the walkways well protected from animals and rain?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_C_a" class="sum_lodge" type="radio" name="building_2_3_1_C" ng-model="building_2_3_1_C" value="0" ng-checked="building_2_3_1_C_a" ng-focus="check_building_2_3_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_C_cm" ng-model="building_2_3_1_C_cm" ng-focus="check_building_2_3_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_C_b" class="sum_lodge" type="radio"  name="building_2_3_1_C" ng-model="building_2_3_1_C" value="5" ng-checked="building_2_3_1_C_b" ng-focus="check_building_2_3_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.D -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are hallways/walkways appropriately decorated with the natural and indigeneous materials?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Modest<span class="marks_weight">(1)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_D_a" class="sum_lodge" type="radio" name="building_2_3_1_D" ng-model="building_2_3_1_D" value="1" ng-checked="building_2_3_1_D_a" ng-focus="check_building_2_3_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_D_cm" ng-model="building_2_3_1_D_cm" ng-focus="check_building_2_3_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_D_b" class="sum_lodge" type="radio"  name="building_2_3_1_D" ng-model="building_2_3_1_D" value="3" ng-checked="building_2_3_1_D_b" ng-focus="check_building_2_3_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_D_c" class="sum_lodge" type="radio"  name="building_2_3_1_D" ng-model="building_2_3_1_D" value="5" ng-checked="building_2_3_1_D_c" ng-focus="check_building_2_3_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.E -->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What is the quality of finish?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair quality<span class="marks_weight">(1)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_E_a" class="sum_lodge" type="radio" name="building_2_3_1_E" ng-model="building_2_3_1_E" value="1" ng-checked="building_2_3_1_E_a" ng-focus="check_building_2_3_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_E_cm" ng-model="building_2_3_1_E_cm" ng-focus="check_building_2_3_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good quality<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_E_b" class="sum_lodge" type="radio"  name="building_2_3_1_E" ng-model="building_2_3_1_E" value="3" ng-checked="building_2_3_1_E_b" ng-focus="check_building_2_3_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very good quality<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_E_c" class="sum_lodge" type="radio"  name="building_2_3_1_E" ng-model="building_2_3_1_E" value="5" ng-checked="building_2_3_1_E_c" ng-focus="check_building_2_3_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.F-->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of repair and maintenance?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_F_a" class="sum_lodge" type="radio" name="building_2_3_1_F" ng-model="building_2_3_1_F" value="0" ng-checked="building_2_3_1_F_a" ng-focus="check_building_2_3_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_F_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_F_cm" ng-model="building_2_3_1_F_cm" ng-focus="check_building_2_3_1_F()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_F_b" class="sum_lodge" type="radio"  name="building_2_3_1_F" ng-model="building_2_3_1_F" value="3" ng-checked="building_2_3_1_F_b" ng-focus="check_building_2_3_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Well maintained<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_F_c" class="sum_lodge" type="radio"  name="building_2_3_1_F" ng-model="building_2_3_1_F" value="5" ng-checked="building_2_3_1_F_c" ng-focus="check_building_2_3_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.3.1.G-->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of cleanliness?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_G_a" class="sum_lodge" type="radio" name="building_2_3_1_G" ng-model="building_2_3_1_G" value="0" ng-checked="building_2_3_1_G_a" ng-focus="check_building_2_3_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_3_1_G_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_3_1_G_cm" ng-model="building_2_3_1_G_cm" ng-focus="check_building_2_3_1_G()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_G_b" class="sum_lodge" type="radio"  name="building_2_3_1_G" ng-model="building_2_3_1_G" value="3" ng-checked="building_2_3_1_G_b" ng-focus="check_building_2_3_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very clean<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_3_1_G_c" class="sum_lodge" type="radio"  name="building_2_3_1_G" ng-model="building_2_3_1_G" value="5" ng-checked="building_2_3_1_G_c" ng-focus="check_building_2_3_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.4-->
<!-- 2.4.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">2.4</td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_2_4_1">Site signage and Notice</td>
  <td rowspan="9" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="building_2_4_1_text" name="building_2_4_1_text" ng-model="building_2_4_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>


<!-- 2.4.1.A-->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is there signage that clearly indicate areas of interest and distances?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">None<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_A_a" class="sum_lodge" type="radio" name="building_2_4_1_A" ng-model="building_2_4_1_A" value="0" ng-checked="building_2_4_1_A_a" ng-focus="check_building_2_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_4_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_4_1_A_cm" ng-model="building_2_4_1_A_cm" ng-focus="check_building_2_4_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Inadequate<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_A_b" class="sum_lodge" type="radio"  name="building_2_4_1_A" ng-model="building_2_4_1_A" value="3" ng-checked="building_2_4_1_A_b" ng-focus="check_building_2_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Adequate<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_A_c" class="sum_lodge" type="radio"  name="building_2_4_1_A" ng-model="building_2_4_1_A" value="5" ng-checked="building_2_4_1_A_c" ng-focus="check_building_2_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>


<!-- 2.4.1.B-->
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are there notice that clearly indicate restrictions?</td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">None<span class="marks_weight">(0)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_B_a" class="sum_lodge" type="radio" name="building_2_4_1_B" ng-model="building_2_4_1_B" value="0" ng-checked="building_2_4_1_B_a" ng-focus="check_building_2_4_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="building_2_4_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="building_2_4_1_B_cm" ng-model="building_2_4_1_B_cm" ng-focus="check_building_2_4_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Inadequate<span class="marks_weight">(3)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_B_b" class="sum_lodge" type="radio"  name="building_2_4_1_B" ng-model="building_2_4_1_B" value="3" ng-checked="building_2_4_1_A_b" ng-focus="check_building_2_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Adequate<span class="marks_weight">(5)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="building_2_4_1_B_c" class="sum_lodge" type="radio"  name="building_2_4_1_B" ng-model="building_2_4_1_B" value="5" ng-checked="building_2_4_1_A_c" ng-focus="check_building_2_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
</tr>
