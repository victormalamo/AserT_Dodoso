
<!------------------- 1.0 LOCATION ------------------>

<tr> 
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">1.0</div></td>
  <td colspan="5"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">LOCATION</td>
  
  <!--td rowspan="" style="vertical-align:middle" class="border-mdblue first_row_col"></td-->
  <td style="vertical-align:top" class="border-mdblue first_row_col borderless-bottom"></td>
</tr>

<!-- 1.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; width:16px; font-weight:bold" class="border-mdblue borderless-bottom row_1_1"><div ng-class="{number_pre:true}">1.1</div></td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top">SUITABILITY OF THE LOCATION</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td style="vertical-align:middle;" align="center" class="border-mdblue borderless-bottom"></td>
</tr>

<!-- 1.1.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Compliance with local plans for the area</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_1_text" name="location_1_1_1_text" ng-model="location_1_1_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.1.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel conform to the Development Plans for the area?</td>
  
  <!--td style="vertical-align:middle" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Yes <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; width:24px!important; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_1_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_1_A" ng-model="location_1_1_1_A" ng-focus="check_location_1_1_1_A_cm()"  value="2" ng-checked="location_1_1_1_A_a" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>								
  </td>							  
  <td rowspan="2" style="vertical-align:middle; width:24px!important; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_1_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_1_A_cm" ng-model="location_1_1_1_A_cm" ng-focus="check_location_1_1_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">No <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_1_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_1_A" ng-model="location_1_1_1_A" ng-focus="check_location_1_1_1_A_cm()" value="0" ng-checked="location_1_1_1_A_b" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.2 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Safety</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_2_text" name="location_1_1_2_text" ng-model="location_1_1_2_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.2.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the general safety of this location?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonably safe<span class="marks_weight">(2)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_2_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_2_A" ng-model="location_1_1_2_A" value="2" ng-checked="location_1_1_2_A_a" ng-focus="check_location_1_1_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_2_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_2_A_cm" ng-model="location_1_1_2_A_cm" ng-focus="check_location_1_1_2_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very safe <span class="marks_weight">(4)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_2_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_2_A" ng-model="location_1_1_2_A" value="4" ng-checked="location_1_1_2_A_b" ng-focus="check_location_1_1_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.3 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Scenery/Aesthetics of the Area</td>
 
  <!--td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <td rowspan="7" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_3_text" name="location_1_1_3_text" ng-model="location_1_1_3_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="7" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.3.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the surrounding area attractive?</td>
  
  <!--td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Attractive <span class="marks_weight">(1)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_3_A" ng-model="location_1_1_3_A" value="1" ng-checked="location_1_1_3_A_a" ng-focus="check_location_1_1_3_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_1_3_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_3_A_cm" ng-model="location_1_1_3_A_cm" ng-focus="check_location_1_1_3_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very attractive<span class="marks_weight">(2)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_3_A" ng-model="location_1_1_3_A" value="2" ng-checked="location_1_1_3_A_b" ng-focus="check_location_1_1_3_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.3.B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the facility in harmony with the surrounding environment?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No harmony <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_B_a" class="sum_vacation_hotel" type="radio" name="location_1_1_3_B" ng-model="location_1_1_3_B" value="0" ng-checked="location_1_1_3_B_a" ng-focus="check_location_1_1_3_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_3_B_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_3_B_cm" ng-model="location_1_1_3_B_cm" ng-focus="check_location_1_1_3_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Blends in well <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_B_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_3_B" ng-model="location_1_1_3_B" value="3" ng-checked="location_1_1_3_B_b" ng-focus="check_location_1_1_3_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.4 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Comfort and Tranquillity</td>
 
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <td rowspan="8" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_4_text" name="location_1_1_4_text" ng-model="location_1_1_4_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.4.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the serenity offered by this location?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair <span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_4_A" ng-model="location_1_1_4_A" value="1" ng-checked="location_1_1_4_A_a" ng-focus="check_location_1_1_4_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_1_4_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_4_A_cm" ng-model="location_1_1_4_A_cm" ng-focus="check_location_1_1_4_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_4_A" ng-model="location_1_1_4_A" value="2" ng-checked="location_1_1_4_A_b" ng-focus="check_location_1_1_4_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Excellent <span class="marks_weight">(3)</span> </td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_A_c" class="sum_vacation_hotel" type="radio"  name="location_1_1_4_A" ng-model="location_1_1_4_A" value="3" ng-checked="location_1_1_4_A_c" ng-focus="check_location_1_1_4_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.4.B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the establishment located in an up-market area?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_B_a" class="sum_vacation_hotel" type="radio" name="location_1_1_4_B" ng-model="location_1_1_4_B" value="0" ng-checked="location_1_1_4_B_a" ng-focus="check_location_1_1_4_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_4_B_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_4_B_cm" ng-model="location_1_1_4_B_cm" ng-focus="check_location_1_1_4_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes <span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_B_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_4_B" ng-model="location_1_1_4_B" value="1" ng-checked="location_1_1_4_B_b" ng-focus="check_location_1_1_4_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.5 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Accessibility</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_5_text" name="location_1_1_5_text" ng-model="location_1_1_5_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.5.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the facility easily accessible?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_5_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_5_A" ng-model="location_1_1_5_A" value="0" ng-checked="location_1_1_5_A_a" ng-focus="check_location_1_1_5_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_5_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_5_A_cm" ng-model="location_1_1_5_A_cm" ng-focus="check_location_1_1_5_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>							
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_5_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_5_A" ng-model="location_1_1_5_A" value="3" ng-checked="location_1_1_5_A_b" ng-focus="check_location_1_1_5_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.1.6 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Signage</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_6_text" name="location_1_1_6_text" ng-model="location_1_1_6_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.6.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel have clear directional signage?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_6_A_a" class="sum_vacation_hotel" type="radio" name="location_1_1_6_A" ng-model="location_1_1_6_A" value="0" ng-checked="location_1_1_6_A_a" ng-focus="check_location_1_1_6_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_6_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_1_6_A_cm" ng-model="location_1_1_6_A_cm" ng-focus="check_location_1_1_6_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>							
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_6_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_1_6_A" ng-model="location_1_1_6_A" value="2" ng-checked="location_1_1_6_A_b" ng-focus="check_location_1_1_6_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 1.2 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; width:16px; font-weight:bold" class="border-mdblue borderless-bottom row_1_1"><div ng-class="{number_pre:true}">1.2</div></td>
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top">SITE AND ENVIRONMENT</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td style="vertical-align:middle;" align="center" class="border-mdblue borderless-bottom"></td>
</tr>

<!-- 1.2.1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Environmental Impact Assessment</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_2_1_text" name="location_1_2_1_text" ng-model="location_1_2_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.2.1.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the Hotel have an Environmental Impact Assessment Report and/or an Environmental Audit Report?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Yes<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_1_A_a" class="sum_vacation_hotel" type="radio" name="location_1_2_1_A" ng-model="location_1_2_1_A" value="10" ng-checked="location_1_2_1_A_a" ng-focus="check_location_1_2_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_2_1_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_1_A_cm" ng-model="location_1_2_1_A_cm" ng-focus="check_location_1_2_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_1_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_1_A" ng-model="location_1_2_1_A" value="0" ng-checked="location_1_2_1_A_b" ng-focus="check_location_1_2_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.2 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Architectural Features</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="5" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_2_2_text" name="location_1_2_2_text" ng-model="location_1_2_2_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="5" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.2.2.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">To what extent do the external architectural features of the hotel incorporate environmental friendly practices?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_2_A_a" class="sum_vacation_hotel" type="radio" name="location_1_2_2_A" ng-model="location_1_2_2_A" value="3" ng-checked="location_1_2_2_A_a" ng-focus="check_location_1_2_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_2_2_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_2_A_cm" ng-model="location_1_2_2_A_cm" ng-focus="check_location_1_2_2_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(7)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_2_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_2_A" ng-model="location_1_2_2_A" value="7" ng-checked="location_1_2_2_A_b" ng-focus="check_location_1_2_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Excellent<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_2_A_c" class="sum_vacation_hotel" type="radio"  name="location_1_2_2_A" ng-model="location_1_2_2_A" value="10" ng-checked="location_1_2_2_A_c" ng-focus="check_location_1_2_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.3 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Harmony with Built-up Environment</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="10" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_2_3_text" name="location_1_2_3_text" ng-model="location_1_2_3_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="10" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.2.3.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel construction blend in with the natural and/or existing built up area?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No harmony<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_3_A_a" class="sum_vacation_hotel" type="radio" name="location_1_2_3_A" ng-model="location_1_2_3_A" value="0" ng-checked="location_1_2_3_A_a" ng-focus="check_location_1_2_3_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_3_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_A_cm" ng-model="location_1_2_3_A_cm" ng-focus="check_location_1_2_3_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Blends in well<span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_3_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_3_A" ng-model="location_1_2_3_A" value="1" ng-checked="location_1_2_3_A_b" ng-focus="check_location_1_2_3_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.3.B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the placement of windows take consideration of</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum lighting/ventilation requirements for habitable spaces<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="location_1_2_3_B_a" class="sum_vacation_hotel" type="checkbox" name="location_1_2_3_B_a" ng-model="location_1_2_3_B_a" value="2" ng-checked="location_1_2_3_B_aTT" ng-focus="check_location_1_2_3_B_a_cm()"/>
		<!--div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div-->
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
		<!--div class="state" style="width:13px!important; margin-left:2px">
		<i class="icon mdi mdi-close"></i>
		<label></label>
		</div-->
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="location_1_2_3_B_a_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_B_a_cm" ng-model="location_1_2_3_B_a_cm" ng-focus="check_location_1_2_3_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Weather elements<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="location_1_2_3_B_b" class="sum_vacation_hotel" type="checkbox"  name="location_1_2_3_B_b" ng-model="location_1_2_3_B_b" value="2" ng-checked="location_1_2_3_B_bTT" ng-focus="check_location_1_2_3_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="location_1_2_3_B_b_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_B_b_cm" ng-model="location_1_2_3_B_b_cm" ng-focus="check_location_1_2_3_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Offer aesthetic view<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="location_1_2_3_B_c" class="sum_vacation_hotel" type="checkbox"  name="location_1_2_3_B_c" ng-model="location_1_2_3_B_c" value="2" ng-checked="location_1_2_3_B_cTT" ng-focus="check_location_1_2_3_B_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="location_1_2_3_B_c_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_B_c_cm" ng-model="location_1_2_3_B_c_cm" ng-focus="check_location_1_2_3_B_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Privacy<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="location_1_2_3_B_d" class="sum_vacation_hotel" type="checkbox"  name="location_1_2_3_B_d" ng-model="location_1_2_3_B_d" value="2" ng-checked="location_1_2_3_B_dTT" ng-focus="check_location_1_2_3_B_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="location_1_2_3_B_d_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_B_d_cm" ng-model="location_1_2_3_B_d_cm" ng-focus="check_location_1_2_3_B_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Security<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="location_1_2_3_B_e" class="sum_vacation_hotel" type="checkbox"  name="location_1_2_3_B_e" ng-model="location_1_2_3_B_e" value="2" ng-checked="location_1_2_3_B_eTT" ng-focus="check_location_1_2_3_B_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_2_3_B_e_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_3_B_e_cm" ng-model="location_1_2_3_B_e_cm" ng-focus="check_location_1_2_3_B_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<!-- 1.2.4 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Environmental Awareness Initiatives</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="10" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_2_4_text" name="location_1_2_4_text" ng-model="location_1_2_4_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="10" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.2.4.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel participate in any local environmental improvement program?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_A_a" class="sum_vacation_hotel" type="radio" name="location_1_2_4_A" ng-model="location_1_2_4_A" value="0" ng-checked="location_1_2_4_A_a" ng-focus="check_location_1_2_4_A_cm()"/>
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_4_A_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_4_A_cm" ng-model="location_1_2_4_A_cm" ng-focus="check_location_1_2_4_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_A_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_4_A" ng-model="location_1_2_4_A" value="3" ng-checked="location_1_2_4_A_b" ng-focus="check_location_1_2_4_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.4.B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel educate and sensitize its staff on environmental issues?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_B_a" class="sum_vacation_hotel" type="radio" name="location_1_2_4_B" ng-model="location_1_2_4_B" value="0" ng-checked="location_1_2_4_B_a" ng-focus="check_location_1_2_4_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_4_B_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_4_B_cm" ng-model="location_1_2_4_B_cm" ng-focus="check_location_1_2_4_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_B_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_4_B" ng-model="location_1_2_4_B" value="3" ng-checked="location_1_2_4_B_b" ng-focus="check_location_1_2_4_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.4.C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel educate or encourage guests on conservation measures through promotional materials?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_C_a" class="sum_vacation_hotel" type="radio" name="location_1_2_4_C" ng-model="location_1_2_4_C" value="0" ng-checked="location_1_2_4_C_a" ng-focus="check_location_1_2_4_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_2_4_C_cm" class="sum_vacation_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_4_C_cm" ng-model="location_1_2_4_C_cm" ng-focus="check_location_1_2_4_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_4_C_b" class="sum_vacation_hotel" type="radio"  name="location_1_2_4_C" ng-model="location_1_2_4_C" value="3" ng-checked="location_1_2_4_C_b" ng-focus="check_location_1_2_4_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.5 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Conservation Initiatives</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="13" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_2_5_text" name="location_1_2_5_text" ng-model="location_1_2_5_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="13" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.2.5.A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel have in use water saving devices?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_A_a" class="sum_town_hotel" type="radio" name="location_1_2_5_A" ng-model="location_1_2_5_A" value="0" ng-checked="location_1_2_5_A_a" ng-focus="check_location_1_2_5_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_5_A_cm" class="sum_town_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_5_A_cm" ng-model="location_1_2_5_A_cm" ng-focus="check_location_1_2_5_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_A_b" class="sum_town_hotel" type="radio"  name="location_1_2_5_A" ng-model="location_1_2_5_A" value="5" ng-checked="location_1_2_5_A_b" ng-focus="check_location_1_2_5_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.5.B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel have energy efficiency enhancing systems?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_B_a" class="sum_town_hotel" type="radio" name="location_1_2_5_B" ng-model="location_1_2_5_B" value="0" ng-checked="location_1_2_5_B_a" ng-focus="check_location_1_2_5_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_5_B_cm" class="sum_town_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_5_B_cm" ng-model="location_1_2_5_B_cm" ng-focus="check_location_1_2_5_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_B_b" class="sum_town_hotel" type="radio"  name="location_1_2_5_B" ng-model="location_1_2_5_B" value="5" ng-checked="location_1_2_5_B_b" ng-focus="check_location_1_2_5_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.5.C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel use alternative means of conserving energy?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_C_a" class="sum_town_hotel" type="radio" name="location_1_2_5_C" ng-model="location_1_2_5_C" value="0" ng-checked="location_1_2_5_C_a" ng-focus="check_location_1_2_5_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_2_5_C_cm" class="sum_town_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_5_C_cm" ng-model="location_1_2_5_C_cm" ng-focus="check_location_1_2_5_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_C_b" class="sum_town_hotel" type="radio"  name="location_1_2_5_C" ng-model="location_1_2_5_C" value="5" ng-checked="location_1_2_5_C_b" ng-focus="check_location_1_2_5_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 1.2.5.D -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Does the hotel practice supplies policies that incorporate social and environmental considerations?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_D_a" class="sum_town_hotel" type="radio" name="location_1_2_5_D" ng-model="location_1_2_5_D" value="0" ng-checked="location_1_2_5_D_a" ng-focus="check_location_1_2_5_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_2_5_D_cm" class="sum_town_hotel_cm assessor_custom_marks_field" type="text" name="location_1_2_5_D_cm" ng-model="location_1_2_5_D_cm" ng-focus="check_location_1_2_5_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_2_5_D_b" class="sum_town_hotel" type="radio"  name="location_1_2_5_D" ng-model="location_1_2_5_D" value="5" ng-checked="location_1_2_5_D_b" ng-focus="check_location_1_2_5_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>