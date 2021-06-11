
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
		<input id="location_1_1_1_A_a" class="sum_restaurants" type="radio" name="location_1_1_1_A" ng-model="location_1_1_1_A" ng-focus="check_location_1_1_1_A_cm()"  value="2" ng-checked="location_1_1_1_A_a" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>								
  </td>							  
  <td rowspan="2" style="vertical-align:middle; width:24px!important; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_1_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_1_A_cm" ng-model="location_1_1_1_A_cm" ng-focus="check_location_1_1_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">No <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_1_A_b" class="sum_restaurants" type="radio"  name="location_1_1_1_A" ng-model="location_1_1_1_A" ng-focus="check_location_1_1_1_A_cm()" value="0" ng-checked="location_1_1_1_A_b" />
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
  <td style="vertical-align:middle" class="border-mdblue">Reasonably safe<span class="marks_weight">(1)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_2_A_a" class="sum_restaurants" type="radio" name="location_1_1_2_A" ng-model="location_1_1_2_A" value="1" ng-checked="location_1_1_2_A_a" ng-focus="check_location_1_1_2_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_2_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_2_A_cm" ng-model="location_1_1_2_A_cm" ng-focus="check_location_1_1_2_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very safe <span class="marks_weight">(2)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_2_A_b" class="sum_restaurants" type="radio"  name="location_1_1_2_A" ng-model="location_1_1_2_A" value="2" ng-checked="location_1_1_2_A_b" ng-focus="check_location_1_1_2_A_cm()" />
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
  <td rowspan="11" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
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
		<input id="location_1_1_3_A_a" class="sum_restaurants" type="radio" name="location_1_1_3_A" ng-model="location_1_1_3_A" value="1" ng-checked="location_1_1_3_A_a" ng-focus="check_location_1_1_3_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_1_3_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_3_A_cm" ng-model="location_1_1_3_A_cm" ng-focus="check_location_1_1_3_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very attractive<span class="marks_weight">(2)</span></td>
  
  <td  style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_A_b" class="sum_restaurants" type="radio"  name="location_1_1_3_A" ng-model="location_1_1_3_A" value="2" ng-checked="location_1_1_3_A_b" ng-focus="check_location_1_1_3_A_cm()" />
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

</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No harmony <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_B_a" class="sum_restaurants" type="radio" name="location_1_1_3_B" ng-model="location_1_1_3_B" value="0" ng-checked="location_1_1_3_B_a" ng-focus="check_location_1_1_3_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_3_B_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_3_B_cm" ng-model="location_1_1_3_B_cm" ng-focus="check_location_1_1_3_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Blends in well <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_B_b" class="sum_restaurants" type="radio"  name="location_1_1_3_B" ng-model="location_1_1_3_B" value="2" ng-checked="location_1_1_3_B_b" ng-focus="check_location_1_1_3_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 1.1.3.C -->

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
		<input id="location_1_1_3_C_a" class="sum_restaurants" type="radio" name="location_1_1_3_C" ng-model="location_1_1_3_C" value="1" ng-checked="location_1_1_3_C_a" ng-focus="check_location_1_1_3_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="location_1_1_3_C_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_3_C_cm" ng-model="location_1_1_3_C_cm" ng-focus="check_location_1_1_3_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_3_C_b" class="sum_restaurants" type="radio"  name="location_1_1_3_C" ng-model="location_1_1_3_C" value="2" ng-checked="location_1_1_3_C_b" ng-focus="check_location_1_1_3_C_cm()" />
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
		<input id="location_1_1_3_C_c" class="sum_restaurants" type="radio"  name="location_1_1_3_C" ng-model="location_1_1_3_C" value="3" ng-checked="location_1_1_3_C_c" ng-focus="check_location_1_1_3_C_cm()" />
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
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Accessibility</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="4" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="location_1_1_4_text" name="location_1_1_4_text" ng-model="location_1_1_4_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 1.1.4.A -->

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
		<input id="location_1_1_4_A_a" class="sum_restaurants" type="radio" name="location_1_1_4_A" ng-model="location_1_1_4_A" value="0" ng-checked="location_1_1_4_A_a" ng-focus="check_location_1_1_4_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_4_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_4_A_cm" ng-model="location_1_1_4_A_cm" ng-focus="check_location_1_1_4_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>							
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_4_A_b" class="sum_restaurants" type="radio"  name="location_1_1_4_A" ng-model="location_1_1_4_A" value="3" ng-checked="location_1_1_4_A_b" ng-focus="check_location_1_1_4_A_cm()" />
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
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Signage</td>
 
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
		<input id="location_1_1_5_A_a" class="sum_restaurants" type="radio" name="location_1_1_5_A" ng-model="location_1_1_5_A" value="0" ng-checked="location_1_1_5_A_a" ng-focus="check_location_1_1_5_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_5_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_5_A_cm" ng-model="location_1_1_5_A_cm" ng-focus="check_location_1_1_5_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>							
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Yes <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_5_A_b" class="sum_restaurants" type="radio"  name="location_1_1_5_A" ng-model="location_1_1_5_A" value="2" ng-checked="location_1_1_5_A_b" ng-focus="check_location_1_1_5_A_cm()" />
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
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Environmental Impact Assessment</td>
 
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
		<input id="location_1_1_6_A_a" class="sum_restaurants" type="radio" name="location_1_1_6_A" ng-model="location_1_1_6_A" value="10" ng-checked="location_1_1_6_A_a" ng-focus="check_location_1_1_6_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="location_1_1_6_A_cm" class="sum_restaurants_cm assessor_custom_marks_field" type="text" name="location_1_1_6_A_cm" ng-model="location_1_1_6_A_cm" ng-focus="check_location_1_1_6_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="location_1_1_6_A_b" class="sum_restaurants" type="radio"  name="location_1_1_6_A" ng-model="location_1_1_6_A" value="0" ng-checked="location_1_1_6_A_b" ng-focus="check_location_1_1_6_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
