
<!----------------------------------------------- 9.0 GUEST ROOMS ---------------------------------------------------------------->

<tr> 
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue borderless-bottom row_1_0"><div ng-class="{number_pre:true}">9.0</div></td>
  <td colspan="5"style="vertical-align:top; font-weight:bold" class="border-mdblue row_1_0">GUEST ROOMS</td>
  
  <!--td rowspan="" style="vertical-align:middle" class="border-mdblue first_row_col"></td-->
  <td style="vertical-align:top" class="border-mdblue first_row_col borderless-bottom"></td>
</tr>

<!-- 9_1 -->
							
<!-- 9_1_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.1</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Minimum Size</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="6" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_1_1_text" name="guest_rooms_9_1_1_text" ng-model="guest_rooms_9_1_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>


<!-- 9_1_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Please indicate the measurement in sq. m for all room types (Please indicate; checked against specified sizes in the Criteria)?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum 12 - 14 Sq.m<span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_1_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_1_1_A" ng-model="guest_rooms_9_1_1_A" value="20" ng-checked="guest_rooms_9_1_1_A_a" ng-focus="check_guest_rooms_9_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="4" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_1_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_1_1_A_cm" ng-model="guest_rooms_9_1_1_A_cm" ng-focus="check_guest_rooms_9_1_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum 15 - 19 Sq.m<span class="marks_weight">(30)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_1_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_1_1_A" ng-model="guest_rooms_9_1_1_A" value="30" ng-checked="guest_rooms_9_1_1_A_b" ng-focus="check_guest_rooms_9_1_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum 20 - 24 sq.m<span class="marks_weight">(40)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_1_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_1_1_A" ng-model="guest_rooms_9_1_1_A" value="40" ng-checked="guest_rooms_9_1_1_A_c" ng-focus="check_guest_rooms_9_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Minimum 25 Sq.m and above <span class="marks_weight">(50)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_1_1_A_d" class="sum_lodge" type="radio"  name="guest_rooms_9_1_1_A" ng-model="guest_rooms_9_1_1_A" value="50" ng-checked="guest_rooms_9_1_1_A_d" ng-focus="check_guest_rooms_9_1_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_2 -->

<!-- 9_2_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.2</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Regulation of Temperature</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="9" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_2_1_text" name="guest_rooms_9_2_1_text" ng-model="guest_rooms_9_2_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_2_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the provision for natural ventilation and/or air conditioning? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_2_1_A" ng-model="guest_rooms_9_2_1_A" value="3" ng-checked="guest_rooms_9_2_1_A_a" ng-focus="check_guest_rooms_9_2_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_2_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_2_1_A_cm" ng-model="guest_rooms_9_2_1_A_cm" ng-focus="check_guest_rooms_9_2_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_2_1_A" ng-model="guest_rooms_9_2_1_A" value="8" ng-checked="guest_rooms_9_2_1_A_b" ng-focus="check_guest_rooms_9_2_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_2_1_A" ng-model="guest_rooms_9_2_1_A" value="15" ng-checked="guest_rooms_9_2_1_A_c" ng-focus="check_guest_rooms_9_2_1_A9_15()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_2_1_B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the efficiency of the temperature regulation system?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_2_1_B" ng-model="guest_rooms_9_2_1_B" value="5" ng-checked="guest_rooms_9_2_1_B_a" ng-focus="check_guest_rooms_9_2_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_2_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_2_1_B_cm" ng-model="guest_rooms_9_2_1_B_cm" ng-focus="check_guest_rooms_9_2_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_2_1_B" ng-model="guest_rooms_9_2_1_B" value="8" ng-checked="guest_rooms_9_2_1_B_b" ng-focus="check_guest_rooms_9_2_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_2_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_2_1_B" ng-model="guest_rooms_9_2_1_B" value="15" ng-checked="guest_rooms_9_2_1_B_c" ng-focus="check_guest_rooms_9_2_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_3 -->

<!-- 9_3_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.3</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Balconies/Terraces</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="9" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_3_1_text" name="guest_rooms_9_3_1_text" ng-model="guest_rooms_9_3_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_3_1_A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What proportion of the rooms have balconies/terraces in relation to the capacity of the lodge? (See % specified)</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">50% <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_3_1_A" ng-model="guest_rooms_9_3_1_A" value="10" ng-checked="guest_rooms_9_3_1_A_a" ng-focus="check_guest_rooms_9_3_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_3_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_3_1_A_cm" ng-model="guest_rooms_9_3_1_A_cm" ng-focus="check_guest_rooms_9_3_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">75 % <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_3_1_A" ng-model="guest_rooms_9_3_1_A" value="15" ng-checked="guest_rooms_9_3_1_A_b" ng-focus="check_guest_rooms_9_3_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">100% <span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_3_1_A" ng-model="guest_rooms_9_3_1_A" value="20" ng-checked="guest_rooms_9_3_1_A_c" ng-focus="check_guest_rooms_9_3_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_3_1_B -->
<!-- guest_rooms_9_3_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Do the balconies have the following:-</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No furniture <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_3_1_B" ng-model="guest_rooms_9_3_1_B" value="0" ng-checked="guest_rooms_9_3_1_B_a" ng-focus="check_guest_rooms_9_3_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_3_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_3_1_B_cm" ng-model="guest_rooms_9_3_1_B_cm" ng-focus="check_guest_rooms_9_3_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Modest Furniture <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_3_1_B" ng-model="guest_rooms_9_3_1_B" value="10" ng-checked="guest_rooms_9_3_1_B_b" ng-focus="check_guest_rooms_9_3_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Functional and comfortable furniture <span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_3_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_3_1_B" ng-model="guest_rooms_9_3_1_B" value="20" ng-checked="guest_rooms_9_3_1_B_c" ng-focus="check_guest_rooms_9_3_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_4 -->

<!-- 9_4_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.4</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Fittings, Furniture and Equipment</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="38" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_4_1_text" name="guest_rooms_9_4_1_text" ng-model="guest_rooms_9_4_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_4_1_A -->
<!-- guest_rooms_9_4_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Assess the provision of the following</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum bed size 190cms x 90cms. Take actual (Measurement)<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_A" ng-model="guest_rooms_9_4_1_A" value="5" ng-checked="guest_rooms_9_4_1_A_a" ng-focus="check_guest_rooms_9_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_A_cm" ng-model="guest_rooms_9_4_1_A_cm" ng-focus="check_guest_rooms_9_4_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Two twin beds measuring 190cms x 90cms or 120 cms x 190 cms  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_A" ng-model="guest_rooms_9_4_1_A" value="5" ng-checked="guest_rooms_9_4_1_A_b" ng-focus="check_guest_rooms_9_4_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_4_1_B -->
<!-- guest_rooms_9_4_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Clarify</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fitting mattresses of not less than 15cm thick of high density <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_4_1_B_a" ng-model="guest_rooms_9_4_1_B_a" value="5" ng-checked="guest_rooms_9_4_1_B_aTT" ng-focus="check_guest_rooms_9_4_1_B_a_cm()"/>
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
  <input id="guest_rooms_9_4_1_B_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_a_cm" ng-model="guest_rooms_9_4_1_B_a_cm" ng-focus="check_guest_rooms_9_4_1_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum of two pillows; indicate number<span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_b" ng-model="guest_rooms_9_4_1_B_b" value="4" ng-checked="guest_rooms_9_4_1_B_bTT" ng-focus="check_guest_rooms_9_4_1_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_b_cm" ng-model="guest_rooms_9_4_1_B_b_cm" ng-focus="check_guest_rooms_9_4_1_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Luggage racks  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">

	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_c" ng-model="guest_rooms_9_4_1_B_c" value="4" ng-checked="guest_rooms_9_4_1_B_cTT" ng-focus="check_guest_rooms_9_4_1_B_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_c_cm" ng-model="guest_rooms_9_4_1_B_c_cm" ng-focus="check_guest_rooms_9_4_1_B_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Wardrobe of good quality with at least six hangers  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_d" ng-model="guest_rooms_9_4_1_B_d" value="4" ng-checked="guest_rooms_9_4_1_B_dTT" ng-focus="check_guest_rooms_9_4_1_B_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_d_cm" ng-model="guest_rooms_9_4_1_B_d_cm" ng-focus="check_guest_rooms_9_4_1_B_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum of two chairs provided; indicate number <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_e" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_e" ng-model="guest_rooms_9_4_1_B_e" value="4" ng-checked="guest_rooms_9_4_1_B_eTT" ng-focus="check_guest_rooms_9_4_1_B_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_e_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_e_cm" ng-model="guest_rooms_9_4_1_B_e_cm" ng-focus="check_guest_rooms_9_4_1_B_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(f)</td>
  <td style="vertical-align:middle" class="border-mdblue">Minimum of one writing /dressing table provided; indicate number<span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_f" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_f" ng-model="guest_rooms_9_4_1_B_f" value="4" ng-checked="guest_rooms_9_4_1_B_fTT" ng-focus="check_guest_rooms_9_4_1_B_f_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_f_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_f_cm" ng-model="guest_rooms_9_4_1_B_f_cm" ng-focus="check_guest_rooms_9_4_1_B_f()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(g)</td>
  <td style="vertical-align:middle" class="border-mdblue">Bedside tables  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_g" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_g" ng-model="guest_rooms_9_4_1_B_g" value="4" ng-checked="guest_rooms_9_4_1_B_gTT" ng-focus="check_guest_rooms_9_4_1_B_g_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_g_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_g_cm" ng-model="guest_rooms_9_4_1_B_g_cm" ng-focus="check_guest_rooms_9_4_1_B_g()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(h)</td>
  <td style="vertical-align:middle" class="border-mdblue">Valet service  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_h" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_h" ng-model="guest_rooms_9_4_1_B_h" value="4" ng-checked="guest_rooms_9_4_1_B_hTT" ng-focus="check_guest_rooms_9_4_1_B_h_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">

  <input id="guest_rooms_9_4_1_B_h_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_h_cm" ng-model="guest_rooms_9_4_1_B_h_cm" ng-focus="check_guest_rooms_9_4_1_B_h()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(i)</td>
  <td style="vertical-align:middle" class="border-mdblue">Mini bar  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_i" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_i" ng-model="guest_rooms_9_4_1_B_i" value="5" ng-checked="guest_rooms_9_4_1_B_iTT" ng-focus="check_guest_rooms_9_4_1_B_i_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_i_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_i_cm" ng-model="guest_rooms_9_4_1_B_i_cm" ng-focus="check_guest_rooms_9_4_1_B_i()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(j)</td>
  <td style="vertical-align:middle" class="border-mdblue">Lamp shades  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_j" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_j" ng-model="guest_rooms_9_4_1_B_j" value="4" ng-checked="guest_rooms_9_4_1_B_jTT" ng-focus="check_guest_rooms_9_4_1_B_j_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_j_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_j_cm" ng-model="guest_rooms_9_4_1_B_j_cm" ng-focus="check_guest_rooms_9_4_1_B_j()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(k)</td>
  <td style="vertical-align:middle" class="border-mdblue">Coffee tray 
 <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_k" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_k" ng-model="guest_rooms_9_4_1_B_k" value="3" ng-checked="guest_rooms_9_4_1_B_kTT" ng-focus="check_guest_rooms_9_4_1_B_k_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_k_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_k_cm" ng-model="guest_rooms_9_4_1_B_k_cm" ng-focus="check_guest_rooms_9_4_1_B_k()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(l)</td>
  <td style="vertical-align:middle" class="border-mdblue">Telephone 
 <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_l" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_l" ng-model="guest_rooms_9_4_1_B_l" value="5" ng-checked="guest_rooms_9_4_1_B_lTT" ng-focus="check_guest_rooms_9_4_1_B_l_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_l_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_l_cm" ng-model="guest_rooms_9_4_1_B_l_cm" ng-focus="check_guest_rooms_9_4_1_B_l()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(m)</td>
  <td style="vertical-align:middle" class="border-mdblue">Waste paper basket 
 <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_m" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_m" ng-model="guest_rooms_9_4_1_B_m" value="4" ng-checked="guest_rooms_9_4_1_B_mTT" ng-focus="check_guest_rooms_9_4_1_B_m_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_4_1_B_m_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_m_cm" ng-model="guest_rooms_9_4_1_B_m_cm" ng-focus="check_guest_rooms_9_4_1_B_m()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(n)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Computer data point 
 <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_4_1_B_n" class="sum_lodge" type="checkbox"  name="guest_rooms_9_4_1_B_n" ng-model="guest_rooms_9_4_1_B_n" value="5" ng-checked="guest_rooms_9_4_1_B_nTT" ng-focus="check_guest_rooms_9_4_1_B_n_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_B_n_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_B_n_cm" ng-model="guest_rooms_9_4_1_B_n_cm" ng-focus="check_guest_rooms_9_4_1_B_n()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<!-- 9_4_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the adequacy and appropriateness of the equipment provided?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_C" ng-model="guest_rooms_9_4_1_C" value="2" ng-checked="guest_rooms_9_4_1_C_a" ng-focus="check_guest_rooms_9_4_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_C_cm" ng-model="guest_rooms_9_4_1_C_cm" ng-focus="check_guest_rooms_9_4_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_C" ng-model="guest_rooms_9_4_1_C" value="5" ng-checked="guest_rooms_9_4_1_C_b" ng-focus="check_guest_rooms_9_4_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_C" ng-model="guest_rooms_9_4_1_C" value="8" ng-checked="guest_rooms_9_4_1_C_c" ng-focus="check_guest_rooms_9_4_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>



<!-- 9_4_1_D -->
<!-- guest_rooms_9_4_1_D -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are the provisions suitably arranged for ease of use?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_D" ng-model="guest_rooms_9_4_1_D" value="0" ng-checked="guest_rooms_9_4_1_D_a" ng-focus="check_guest_rooms_9_4_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_D_cm" ng-model="guest_rooms_9_4_1_D_cm" ng-focus="check_guest_rooms_9_4_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(6)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_D" ng-model="guest_rooms_9_4_1_D" value="6" ng-checked="guest_rooms_9_4_1_D_b" ng-focus="check_guest_rooms_9_4_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_4_1_E -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How do you rate the quality of materials and fittings?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_E_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_E" ng-model="guest_rooms_9_4_1_E" value="1" ng-checked="guest_rooms_9_4_1_E_a" ng-focus="check_guest_rooms_9_4_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_E_cm" ng-model="guest_rooms_9_4_1_E_cm" ng-focus="check_guest_rooms_9_4_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_E_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_E" ng-model="guest_rooms_9_4_1_E" value="4" ng-checked="guest_rooms_9_4_1_E_b" ng-focus="check_guest_rooms_9_4_1_E_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(7)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_E_c" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_E" ng-model="guest_rooms_9_4_1_E" value="7" ng-checked="guest_rooms_9_4_1_E_c" ng-focus="check_guest_rooms_9_4_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_4_1_F -->
<!-- guest_rooms_9_4_1_F -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the state of repair?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_F_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_F" ng-model="guest_rooms_9_4_1_F" value="0" ng-checked="guest_rooms_9_4_1_F_a" ng-focus="check_guest_rooms_9_4_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_4_1_F_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_F_cm" ng-model="guest_rooms_9_4_1_F_cm" ng-focus="check_guest_rooms_9_4_1_F()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_F_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_F" ng-model="guest_rooms_9_4_1_F" value="5" ng-checked="guest_rooms_9_4_1_F_b" ng-focus="check_guest_rooms_9_4_1_F_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Well maintained <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_F_c" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_F" ng-model="guest_rooms_9_4_1_F" value="8" ng-checked="guest_rooms_9_4_1_F_c" ng-focus="check_guest_rooms_9_4_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_4_1_G -->
<!-- guest_rooms_9_4_1_G -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of general cleanliness?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Untidy<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_G_a" class="sum_lodge" type="radio" name="guest_rooms_9_4_1_G" ng-model="guest_rooms_9_4_1_G" value="0" ng-checked="guest_rooms_9_4_1_G_a" ng-focus="check_guest_rooms_9_4_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_4_1_G_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_4_1_G_cm" ng-model="guest_rooms_9_4_1_G_cm" ng-focus="check_guest_rooms_9_4_1_G()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_G_b" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_G" ng-model="guest_rooms_9_4_1_G" value="5" ng-checked="guest_rooms_9_4_1_G_b" ng-focus="check_guest_rooms_9_4_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very clean <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_4_1_G_c" class="sum_lodge" type="radio"  name="guest_rooms_9_4_1_G" ng-model="guest_rooms_9_4_1_G" value="8" ng-checked="guest_rooms_9_4_1_G_c" ng-focus="check_guest_rooms_9_4_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_5 -->


<!-- 9_5_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.5</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Furnishings and Linen</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="20" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_5_1_text" name="guest_rooms_9_5_1_text" ng-model="guest_rooms_9_5_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_5_1_A -->
<!-- guest_rooms_9_5_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What is the size of window curtains: minimum ratio should be 1:2<sup>1</sup>&frasl;<sub>2</sub> and length of 5 cm above floor. </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Less than the minimum <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_5_1_A" ng-model="guest_rooms_9_5_1_A" value="2" ng-checked="guest_rooms_9_5_1_A_a" ng-focus="check_guest_rooms_9_5_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_5_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_A_cm" ng-model="guest_rooms_9_5_1_A_cm" ng-focus="check_guest_rooms_9_5_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">At least the minimum <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_A" ng-model="guest_rooms_9_5_1_A" value="10" ng-checked="guest_rooms_9_5_1_A_b" ng-focus="check_guest_rooms_9_5_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">More than the minimum <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_A" ng-model="guest_rooms_9_5_1_A" value="15" ng-checked="guest_rooms_9_5_1_A_c" ng-focus="check_guest_rooms_9_5_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_5_1_B -->
<!-- guest_rooms_9_5_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Assess the availability of the following:- </td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">A minimum of two bed sheets of appropriate size <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_5_1_B_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_5_1_B_a" ng-model="guest_rooms_9_5_1_B_a" value="5" ng-checked="guest_rooms_9_5_1_B_aTT" ng-focus="check_guest_rooms_9_5_1_B_a_cm()"/>
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
  <input id="guest_rooms_9_5_1_B_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_B_a_cm" ng-model="guest_rooms_9_5_1_B_a_cm" ng-focus="check_guest_rooms_9_5_1_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">An under blanket and at least two top blankets or duvets  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_5_1_B_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_5_1_B_b" ng-model="guest_rooms_9_5_1_B_b" value="5" ng-checked="guest_rooms_9_5_1_B_bTT" ng-focus="check_guest_rooms_9_5_1_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_5_1_B_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_B_b_cm" ng-model="guest_rooms_9_5_1_B_b_cm" ng-focus="check_guest_rooms_9_5_1_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Mosquito nets  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_5_1_B_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_5_1_B_d" ng-model="guest_rooms_9_5_1_B_d" value="5" ng-checked="guest_rooms_9_5_1_B_dTT" ng-focus="check_guest_rooms_9_5_1_B_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_5_1_B_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_B_d_cm" ng-model="guest_rooms_9_5_1_B_d_cm" ng-focus="check_guest_rooms_9_5_1_B_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Two pillows/ pillowcases  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_5_1_B_e" class="sum_lodge" type="checkbox"  name="guest_rooms_9_5_1_B_e" ng-model="guest_rooms_9_5_1_B_e" value="5" ng-checked="guest_rooms_9_5_1_B_eTT" ng-focus="check_guest_rooms_9_5_1_B_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_5_1_B_e_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_B_e_cm" ng-model="guest_rooms_9_5_1_B_e_cm" ng-focus="check_guest_rooms_9_5_1_B_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_5_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the quality of furnishings and linen? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Poor quality  <span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_5_1_C" ng-model="guest_rooms_9_5_1_C" value="1" ng-checked="guest_rooms_9_5_1_C_a" ng-focus="check_guest_rooms_9_5_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="5" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_5_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_C_cm" ng-model="guest_rooms_9_5_1_C_cm" ng-focus="check_guest_rooms_9_5_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good quality  <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_C" ng-model="guest_rooms_9_5_1_C" value="5" ng-checked="guest_rooms_9_5_1_C_b" ng-focus="check_guest_rooms_9_5_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">High quality  <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_C" ng-model="guest_rooms_9_5_1_C" value="10" ng-checked="guest_rooms_9_5_1_C_c" ng-focus="check_guest_rooms_9_5_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Very High quality  <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_C_d" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_C" ng-model="guest_rooms_9_5_1_C" value="15" ng-checked="guest_rooms_9_5_1_C_d" ng-focus="check_guest_rooms_9_5_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Excellent and luxurious quality  <span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_C_e" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_C" ng-model="guest_rooms_9_5_1_C" value="20" ng-checked="guest_rooms_9_5_1_C_e" ng-focus="check_guest_rooms_9_5_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_5_1_D -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the harmony of room set up and colour scheme along the following categories? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_5_1_D" ng-model="guest_rooms_9_5_1_D" value="5" ng-checked="guest_rooms_9_5_1_D_a" ng-focus="check_guest_rooms_9_5_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_5_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_5_1_D_cm" ng-model="guest_rooms_9_5_1_D_cm" ng-focus="check_guest_rooms_9_5_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_D" ng-model="guest_rooms_9_5_1_D" value="10" ng-checked="guest_rooms_9_5_1_D_b" ng-focus="check_guest_rooms_9_5_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_5_1_D_c" class="sum_lodge" type="radio"  name="guest_rooms_9_5_1_D" ng-model="guest_rooms_9_5_1_D" value="15" ng-checked="guest_rooms_9_5_1_D_c" ng-focus="check_guest_rooms_9_5_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_6 -->

<!-- 9_6_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.6</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Change of Linen</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="8" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_6_1_text" name="guest_rooms_9_6_1_text" ng-model="guest_rooms_9_6_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_6_1_A -->
<!-- guest_rooms_9_6_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How often is linen changed?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Every other day <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_6_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_6_1_A" ng-model="guest_rooms_9_6_1_A" value="10" ng-checked="guest_rooms_9_6_1_A_a" ng-focus="check_guest_rooms_9_6_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_6_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_6_1_A_cm" ng-model="guest_rooms_9_6_1_A_cm" ng-focus="check_guest_rooms_9_6_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Daily, upon use or as per guest request <span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_6_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_6_1_A" ng-model="guest_rooms_9_6_1_A" value="20" ng-checked="guest_rooms_9_6_1_A_b" ng-focus="check_guest_rooms_9_6_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_6_1_B -->
<!-- guest_rooms_9_6_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What is the Par stock of bed linen?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">One<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_6_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_6_1_B" ng-model="guest_rooms_9_6_1_B" value="2" ng-checked="guest_rooms_9_6_1_B_a" ng-focus="check_guest_rooms_9_6_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_6_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_6_1_B_cm" ng-model="guest_rooms_9_6_1_B_cm" ng-focus="check_guest_rooms_9_6_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Two<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_6_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_6_1_B" ng-model="guest_rooms_9_6_1_B" value="5" ng-checked="guest_rooms_9_6_1_B_b" ng-focus="check_guest_rooms_9_6_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Three or more <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_6_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_6_1_B" ng-model="guest_rooms_9_6_1_B" value="10" ng-checked="guest_rooms_9_6_1_B_c" ng-focus="check_guest_rooms_9_6_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_7 -->
<!-- 9_7_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.7</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Decor</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="21" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_7_1_text" name="guest_rooms_9_7_1_text" ng-model="guest_rooms_9_7_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_7_1_A -->
<!-- guest_rooms_9_7_1_A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the general impression of the decor?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Modest<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_7_1_A" ng-model="guest_rooms_9_7_1_A" value="2" ng-checked="guest_rooms_9_7_1_A_a" ng-focus="check_guest_rooms_9_7_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_7_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_7_1_A_cm" ng-model="guest_rooms_9_7_1_A_cm" ng-focus="check_guest_rooms_9_7_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_A" ng-model="guest_rooms_9_7_1_A" value="5" ng-checked="guest_rooms_9_7_1_A_b" ng-focus="check_guest_rooms_9_7_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_A" ng-model="guest_rooms_9_7_1_A" value="10" ng-checked="guest_rooms_9_7_1_A_c" ng-focus="check_guest_rooms_9_7_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>



<!-- 9_7_1_B -->


<!-- guest_rooms_9_7_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the decor and colour scheme based on any specific theme?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_7_1_B" ng-model="guest_rooms_9_7_1_B" value="0" ng-checked="guest_rooms_9_7_1_B_a" ng-focus="check_guest_rooms_9_7_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_7_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_7_1_B_cm" ng-model="guest_rooms_9_7_1_B_cm" ng-focus="check_guest_rooms_9_7_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_B" ng-model="guest_rooms_9_7_1_B" value="5" ng-checked="guest_rooms_9_7_1_B_b" ng-focus="check_guest_rooms_9_7_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_7_1_C -->
<!-- 3 RADIOS-->

<!-- guest_rooms_9_7_1_C -->



<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How does the decor blend in with the room environment? 
</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Blends fairly well <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_7_1_C" ng-model="guest_rooms_9_7_1_C" value="5" ng-checked="guest_rooms_9_7_1_C_a" ng-focus="check_guest_rooms_9_7_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_7_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_7_1_C_cm" ng-model="guest_rooms_9_7_1_C_cm" ng-focus="check_guest_rooms_9_7_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Blends well <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_C" ng-model="guest_rooms_9_7_1_C" value="10" ng-checked="guest_rooms_9_7_1_C_b" ng-focus="check_guest_rooms_9_7_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Harmonious and luxurious <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_C" ng-model="guest_rooms_9_7_1_C" value="15" ng-checked="guest_rooms_9_7_1_C_c" ng-focus="check_guest_rooms_9_7_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_7_1_D -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What floral arrangement(s) supplements the decor?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">None <span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_7_1_D" ng-model="guest_rooms_9_7_1_D" value="0" ng-checked="guest_rooms_9_7_1_D_a" ng-focus="check_guest_rooms_9_7_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="4" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_7_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_7_1_D_cm" ng-model="guest_rooms_9_7_1_D_cm" ng-focus="check_guest_rooms_9_7_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Artificial <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_D" ng-model="guest_rooms_9_7_1_D" value="3" ng-checked="guest_rooms_9_7_1_D_b" ng-focus="check_guest_rooms_9_7_1_D_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Both artificial and natural <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_D_c" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_D" ng-model="guest_rooms_9_7_1_D" value="8" ng-checked="guest_rooms_9_7_1_D_c" ng-focus="check_guest_rooms_9_7_1_D_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Natural<span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_D_d" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_D" ng-model="guest_rooms_9_7_1_D" value="15" ng-checked="guest_rooms_9_7_1_D_d" ng-focus="check_guest_rooms_9_7_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_7_1_E -->
<!-- 3 RADIOS-->

<!-- guest_rooms_9_7_1_E -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the materials used for the decor?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Faded and unsightly <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_E_a" class="sum_lodge" type="radio" name="guest_rooms_9_7_1_E" ng-model="guest_rooms_9_7_1_E" value="5" ng-checked="guest_rooms_9_7_1_E_a" ng-focus="check_guest_rooms_9_7_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_7_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_7_1_E_cm" ng-model="guest_rooms_9_7_1_E_cm" ng-focus="check_guest_rooms_9_7_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Moderate quality <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_E_b" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_E" ng-model="guest_rooms_9_7_1_E" value="8" ng-checked="guest_rooms_9_7_1_E_b" ng-focus="check_guest_rooms_9_7_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">High quality and in excellent condition <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_7_1_E_c" class="sum_lodge" type="radio"  name="guest_rooms_9_7_1_E" ng-model="guest_rooms_9_7_1_E" value="15" ng-checked="guest_rooms_9_7_1_E_c" ng-focus="check_guest_rooms_9_7_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_8 -->

<!-- 9_8_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.8</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Floors, Walls and Ceilings</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="21" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_8_1_text" name="guest_rooms_9_8_1_text" ng-model="guest_rooms_9_8_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_8_1_A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the quality and suitability of the materials used on the floor, walls and ceiling? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_8_1_A" ng-model="guest_rooms_9_8_1_A" value="4" ng-checked="guest_rooms_9_8_1_A_a" ng-focus="check_guest_rooms_9_8_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_8_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_8_1_A_cm" ng-model="guest_rooms_9_8_1_A_cm" ng-focus="check_guest_rooms_9_8_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_A" ng-model="guest_rooms_9_8_1_A" value="8" ng-checked="guest_rooms_9_8_1_A_b" ng-focus="check_guest_rooms_9_8_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_A" ng-model="guest_rooms_9_8_1_A" value="15" ng-checked="guest_rooms_9_8_1_A_c" ng-focus="check_guest_rooms_9_8_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_8_1_B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the quality of the fittings and finish?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_8_1_B" ng-model="guest_rooms_9_8_1_B" value="2" ng-checked="guest_rooms_9_8_1_B_a" ng-focus="check_guest_rooms_9_8_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_8_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_8_1_B_cm" ng-model="guest_rooms_9_8_1_B_cm" ng-focus="check_guest_rooms_9_8_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_B" ng-model="guest_rooms_9_8_1_B" value="5" ng-checked="guest_rooms_9_8_1_B_b" ng-focus="check_guest_rooms_9_8_1_B_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_B" ng-model="guest_rooms_9_8_1_B" value="10" ng-checked="guest_rooms_9_8_1_B_c" ng-focus="check_guest_rooms_9_8_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_8_1_C -->
<!-- guest_rooms_9_8_1_C -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the quality of the materials used on windows and doors?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Modest <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_8_1_C" ng-model="guest_rooms_9_8_1_C" value="3" ng-checked="guest_rooms_9_8_1_C_a" ng-focus="check_guest_rooms_9_8_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_8_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_8_1_C_cm" ng-model="guest_rooms_9_8_1_C_cm" ng-focus="check_guest_rooms_9_8_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good and attractive <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_C" ng-model="guest_rooms_9_8_1_C" value="5" ng-checked="guest_rooms_9_8_1_C_b" ng-focus="check_guest_rooms_9_8_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">High quality and luxurious <span class="marks_weight">(9)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_C" ng-model="guest_rooms_9_8_1_C" value="9" ng-checked="guest_rooms_9_8_1_C_c" ng-focus="check_guest_rooms_9_8_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_8_1_D -->
<!-- guest_rooms_9_8_1_D -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the state of repair and maintenance?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_8_1_D" ng-model="guest_rooms_9_8_1_D" value="0" ng-checked="guest_rooms_9_8_1_D_a" ng-focus="check_guest_rooms_9_8_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_8_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_8_1_D_cm" ng-model="guest_rooms_9_8_1_D_cm" ng-focus="check_guest_rooms_9_8_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_D" ng-model="guest_rooms_9_8_1_D" value="5" ng-checked="guest_rooms_9_8_1_D_b" ng-focus="check_guest_rooms_9_8_1_D_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Well maintained <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_D_c" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_D" ng-model="guest_rooms_9_8_1_D" value="8" ng-checked="guest_rooms_9_8_1_D_c" ng-focus="check_guest_rooms_9_8_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_8_1_E -->
<!-- guest_rooms_9_8_1_E -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of general cleanliness?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Untidy<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_E_a" class="sum_lodge" type="radio" name="guest_rooms_9_8_1_E" ng-model="guest_rooms_9_8_1_E" value="0" ng-checked="guest_rooms_9_8_1_E_a" ng-focus="check_guest_rooms_9_8_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_8_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_8_1_E_cm" ng-model="guest_rooms_9_8_1_E_cm" ng-focus="check_guest_rooms_9_8_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_E_b" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_E" ng-model="guest_rooms_9_8_1_E" value="5" ng-checked="guest_rooms_9_8_1_E_b" ng-focus="check_guest_rooms_9_8_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very clean<span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_8_1_E_c" class="sum_lodge" type="radio"  name="guest_rooms_9_8_1_E" ng-model="guest_rooms_9_8_1_E" value="8" ng-checked="guest_rooms_9_8_1_E_c" ng-focus="check_guest_rooms_9_8_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_9 -->
<!-- 9_9_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.9</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Light and Ventilation</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="19" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_9_1_text" name="guest_rooms_9_9_1_text" ng-model="guest_rooms_9_9_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_9_1_A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">What is the approximate ratio of the openable window space in relation to the floor area?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Less than 20% of the floor area <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_9_1_A" ng-model="guest_rooms_9_9_1_A" value="5" ng-checked="guest_rooms_9_9_1_A_a" ng-focus="check_guest_rooms_9_9_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_9_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_A_cm" ng-model="guest_rooms_9_9_1_A_cm" ng-focus="check_guest_rooms_9_9_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">20% of the floors area <span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_9_1_A" ng-model="guest_rooms_9_9_1_A" value="8" ng-checked="guest_rooms_9_9_1_A_b" ng-focus="check_guest_rooms_9_9_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">20% and more of the floor area <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_9_1_A" ng-model="guest_rooms_9_9_1_A" value="15" ng-checked="guest_rooms_9_9_1_A_c" ng-focus="check_guest_rooms_9_9_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_9_1_B -->
<!-- guest_rooms_9_9_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Asses the illumination fittings provided in the room:-</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Door entrance <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_9_1_B_a" ng-model="guest_rooms_9_9_1_B_a" value="3" ng-checked="guest_rooms_9_9_1_B_aTT" ng-focus="check_guest_rooms_9_9_1_B_a_cm()"/>
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
  <input id="guest_rooms_9_9_1_B_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_a_cm" ng-model="guest_rooms_9_9_1_B_a_cm" ng-focus="check_guest_rooms_9_9_1_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">General illumination  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_9_1_B_b" ng-model="guest_rooms_9_9_1_B_b" value="3" ng-checked="guest_rooms_9_9_1_B_bTT" ng-focus="check_guest_rooms_9_9_1_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_B_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_b_cm" ng-model="guest_rooms_9_9_1_B_b_cm" ng-focus="check_guest_rooms_9_9_1_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Bedside <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">

	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_9_1_B_c" ng-model="guest_rooms_9_9_1_B_c" value="3" ng-checked="guest_rooms_9_9_1_B_cTT" ng-focus="check_guest_rooms_9_9_1_B_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_B_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_c_cm" ng-model="guest_rooms_9_9_1_B_c_cm" ng-focus="check_guest_rooms_9_9_1_B_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Dressing table  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_9_1_B_d" ng-model="guest_rooms_9_9_1_B_d" value="2" ng-checked="guest_rooms_9_9_1_B_dTT" ng-focus="check_guest_rooms_9_9_1_B_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_B_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_d_cm" ng-model="guest_rooms_9_9_1_B_d_cm" ng-focus="check_guest_rooms_9_9_1_B_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reading table  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_e" class="sum_lodge" type="checkbox"  name="guest_rooms_9_9_1_B_e" ng-model="guest_rooms_9_9_1_B_e" value="2" ng-checked="guest_rooms_9_9_1_B_eTT" ng-focus="check_guest_rooms_9_9_1_B_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_B_e_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_e_cm" ng-model="guest_rooms_9_9_1_B_e_cm" ng-focus="check_guest_rooms_9_9_1_B_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(f)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Emergency lighting  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_B_f" class="sum_lodge" type="checkbox"  name="guest_rooms_9_9_1_B_f" ng-model="guest_rooms_9_9_1_B_f" value="3" ng-checked="guest_rooms_9_9_1_B_fTT" ng-focus="check_guest_rooms_9_9_1_B_f_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_9_1_B_f_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_B_f_cm" ng-model="guest_rooms_9_9_1_B_f_cm" ng-focus="check_guest_rooms_9_9_1_B_f()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_9_1_C -->
<!-- guest_rooms_9_9_1_C -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the general illumination conveniently controllable from:- </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Door side switch <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_C_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_9_1_C_a" ng-model="guest_rooms_9_9_1_C_a" value="4" ng-checked="guest_rooms_9_9_1_C_a" ng-focus="check_guest_rooms_9_9_1_C_a_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_C_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_C_a_cm" ng-model="guest_rooms_9_9_1_C_a_cm" ng-focus="check_guest_rooms_9_9_1_C_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Bedside switch <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_9_1_C_b" class="sum_lodge" type="checkbox" name="guest_rooms_9_9_1_C_b" ng-model="guest_rooms_9_9_1_C_b" value="5" ng-checked="guest_rooms_9_9_1_C_b" ng-focus="check_guest_rooms_9_9_1_C_b_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_9_1_C_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_C_b_cm" ng-model="guest_rooms_9_9_1_C_b_cm" ng-focus="check_guest_rooms_9_9_1_C_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>



<!-- 9_9_1_D -->
<!-- guest_rooms_9_9_1_D -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the quality of the light fittings? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Modest<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_9_1_D" ng-model="guest_rooms_9_9_1_D" value="5" ng-checked="guest_rooms_9_9_1_D_a" ng-focus="check_guest_rooms_9_9_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_9_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_9_1_D_cm" ng-model="guest_rooms_9_9_1_D_cm" ng-focus="check_guest_rooms_9_9_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(8)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_9_1_D" ng-model="guest_rooms_9_9_1_D" value="8" ng-checked="guest_rooms_9_9_1_D_b" ng-focus="check_guest_rooms_9_9_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good (<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_9_1_D_c" class="sum_lodge" type="radio"  name="guest_rooms_9_9_1_D" ng-model="guest_rooms_9_9_1_D" value="10" ng-checked="guest_rooms_9_9_1_D_c" ng-focus="check_guest_rooms_9_9_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_10 -->
<!-- 9_10_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.10</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Sound Proofing</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="5" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_10_1_text" name="guest_rooms_9_10_1_text" ng-model="guest_rooms_9_10_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>




<!-- 9_10_1_A-->
<!-- guest_rooms_9_10_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the effectiveness of soundproofing?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fairly effective <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_10_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_10_1_A" ng-model="guest_rooms_9_10_1_A" value="10" ng-checked="guest_rooms_9_10_1_A_a" ng-focus="check_guest_rooms_9_10_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_10_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_10_1_A_cm" ng-model="guest_rooms_9_10_1_A_cm" ng-focus="check_guest_rooms_9_10_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Effective<span class="marks_weight">(20)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_10_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_10_1_A" ng-model="guest_rooms_9_10_1_A" value="20" ng-checked="guest_rooms_9_10_1_A_b" ng-focus="check_guest_rooms_9_10_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Fully effective <span class="marks_weight">(30)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_10_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_10_1_A" ng-model="guest_rooms_9_10_1_A" value="30" ng-checked="guest_rooms_9_10_1_A_c" ng-focus="check_guest_rooms_9_10_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_11 -->

<!-- 9_11_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.11</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Information in Bedrooms</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="16" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_11_1_text" name="guest_rooms_9_11_1_text" ng-model="guest_rooms_9_11_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_11_1_A -->
<!-- guest_rooms_9_11_1_A -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is information on the following available in the rooms:-</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Available services <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_A_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_11_1_A_a" ng-model="guest_rooms_9_11_1_A_a" value="2" ng-checked="guest_rooms_9_11_1_A_aTT" ng-focus="check_guest_rooms_9_11_1_A_a_cm()"/>
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
  <input id="guest_rooms_9_11_1_A_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_A_a_cm" ng-model="guest_rooms_9_11_1_A_a_cm" ng-focus="check_guest_rooms_9_11_1_A_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Lodge tariffs  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_A_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_A_b" ng-model="guest_rooms_9_11_1_A_b" value="2" ng-checked="guest_rooms_9_11_1_A_bTT" ng-focus="check_guest_rooms_9_11_1_A_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_A_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_A_b_cm" ng-model="guest_rooms_9_11_1_A_b_cm" ng-focus="check_guest_rooms_9_11_1_A_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Emergency and fire exit procedures  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">

	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_A_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_A_c" ng-model="guest_rooms_9_11_1_A_c" value="2" ng-checked="guest_rooms_9_11_1_A_cTT" ng-focus="check_guest_rooms_9_11_1_A_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_A_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_A_c_cm" ng-model="guest_rooms_9_11_1_A_c_cm" ng-focus="check_guest_rooms_9_11_1_A_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Lodge lien and liabilities  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_A_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_A_d" ng-model="guest_rooms_9_11_1_A_d" value="2" ng-checked="guest_rooms_9_11_1_A_dTT" ng-focus="check_guest_rooms_9_11_1_A_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_A_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_A_d_cm" ng-model="guest_rooms_9_11_1_A_d_cm" ng-focus="check_guest_rooms_9_11_1_A_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Internal telephone directory  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_A_e" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_A_e" ng-model="guest_rooms_9_11_1_A_e" value="2" ng-checked="guest_rooms_9_11_1_A_eTT" ng-focus="check_guest_rooms_9_11_1_A_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_11_1_A_e_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_A_e_cm" ng-model="guest_rooms_9_11_1_A_e_cm" ng-focus="check_guest_rooms_9_11_1_A_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_11_1_B -->
<!-- guest_rooms_9_11_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the information provided in the following languages?</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Kiswahili <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_B_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_11_1_B_a" ng-model="guest_rooms_9_11_1_B_a" value="2" ng-checked="guest_rooms_9_11_1_B_aTT" ng-focus="check_guest_rooms_9_11_1_B_a_cm()"/>
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
  <input id="guest_rooms_9_11_1_B_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_B_a_cm" ng-model="guest_rooms_9_11_1_B_a_cm" ng-focus="check_guest_rooms_9_11_1_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">English/French  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_B_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_B_b" ng-model="guest_rooms_9_11_1_B_b" value="2" ng-checked="guest_rooms_9_11_1_B_bTT" ng-focus="check_guest_rooms_9_11_1_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_B_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_B_b_cm" ng-model="guest_rooms_9_11_1_B_b_cm" ng-focus="check_guest_rooms_9_11_1_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">One other internationally recognized language <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_B_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_B_c" ng-model="guest_rooms_9_11_1_B_c" value="2" ng-checked="guest_rooms_9_11_1_B_cTT" ng-focus="check_guest_rooms_9_11_1_B_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_B_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_B_c_cm" ng-model="guest_rooms_9_11_1_B_c_cm" ng-focus="check_guest_rooms_9_11_1_B_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">More than one other internationally recognized languages  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_11_1_B_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_11_1_B_d" ng-model="guest_rooms_9_11_1_B_d" value="2" ng-checked="guest_rooms_9_11_1_B_dTT" ng-focus="check_guest_rooms_9_11_1_B_d_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_11_1_B_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_B_d_cm" ng-model="guest_rooms_9_11_1_B_d_cm" ng-focus="check_guest_rooms_9_11_1_B_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_11_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the presentation of the information provided?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_11_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_11_1_C" ng-model="guest_rooms_9_11_1_C" value="1" ng-checked="guest_rooms_9_11_1_C_a" ng-focus="check_guest_rooms_9_11_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_11_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_11_1_C_cm" ng-model="guest_rooms_9_11_1_C_cm" ng-focus="check_guest_rooms_9_11_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_11_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_11_1_C" ng-model="guest_rooms_9_11_1_C" value="2" ng-checked="guest_rooms_9_11_1_C_b" ng-focus="check_guest_rooms_9_11_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_11_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_11_1_C" ng-model="guest_rooms_9_11_1_C" value="4" ng-checked="guest_rooms_9_11_1_C_c" ng-focus="check_guest_rooms_9_11_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12 -->


<!-- 9_12_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.12</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Bedroom Communication Systems</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="26" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_12_1_text" name="guest_rooms_9_12_1_text" ng-model="guest_rooms_9_12_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_12_1_A -->
<!-- guest_rooms_9_12_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is there provision for internal communication in each bedroom? </td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_A" ng-model="guest_rooms_9_12_1_A" value="0" ng-checked="guest_rooms_9_12_1_A_a" ng-focus="check_guest_rooms_9_12_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_A_cm" ng-model="guest_rooms_9_12_1_A_cm" ng-focus="check_guest_rooms_9_12_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_A" ng-model="guest_rooms_9_12_1_A" value="5" ng-checked="guest_rooms_9_12_1_A_b" ng-focus="check_guest_rooms_9_12_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_B -->
<!-- guest_rooms_9_12_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the type of communication available:-</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Manual<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_B" ng-model="guest_rooms_9_12_1_B" value="3" ng-checked="guest_rooms_9_12_1_B_a" ng-focus="check_guest_rooms_9_12_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_B_cm" ng-model="guest_rooms_9_12_1_B_cm" ng-focus="check_guest_rooms_9_12_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Electronic/Digital <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_B" ng-model="guest_rooms_9_12_1_B" value="5" ng-checked="guest_rooms_9_12_1_B_b" ng-focus="check_guest_rooms_9_12_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_C -->
<!-- guest_rooms_9_12_1_C -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How is the external communication system operated?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Through central switchboard <span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_C" ng-model="guest_rooms_9_12_1_C" value="1" ng-checked="guest_rooms_9_12_1_C_a" ng-focus="check_guest_rooms_9_12_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_C_cm" ng-model="guest_rooms_9_12_1_C_cm" ng-focus="check_guest_rooms_9_12_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Direct dial <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_C" ng-model="guest_rooms_9_12_1_C" value="2" ng-checked="guest_rooms_9_12_1_C_b" ng-focus="check_guest_rooms_9_12_1_C_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Hot Spot/Other <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_C" ng-model="guest_rooms_9_12_1_C" value="3" ng-checked="guest_rooms_9_12_1_C_c" ng-focus="check_guest_rooms_9_12_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_D -->
<!-- guest_rooms_9_12_1_D -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are there extensions to other parts of the room?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_D_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_D" ng-model="guest_rooms_9_12_1_D" value="0" ng-checked="guest_rooms_9_12_1_D_a" ng-focus="check_guest_rooms_9_12_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_D_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_D_cm" ng-model="guest_rooms_9_12_1_D_cm" ng-focus="check_guest_rooms_9_12_1_D()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_D_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_D" ng-model="guest_rooms_9_12_1_D" value="3" ng-checked="guest_rooms_9_12_1_D_b" ng-focus="check_guest_rooms_9_12_1_D_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_E -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the quality of the communication equipment and fittings?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_E_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_E" ng-model="guest_rooms_9_12_1_E" value="1" ng-checked="guest_rooms_9_12_1_E_a" ng-focus="check_guest_rooms_9_12_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_E_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_E_cm" ng-model="guest_rooms_9_12_1_E_cm" ng-focus="check_guest_rooms_9_12_1_E()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_E_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_E" ng-model="guest_rooms_9_12_1_E" value="2" ng-checked="guest_rooms_9_12_1_E_b" ng-focus="check_guest_rooms_9_12_1_E_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_E_c" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_E" ng-model="guest_rooms_9_12_1_E" value="4" ng-checked="guest_rooms_9_12_1_E_c" ng-focus="check_guest_rooms_9_12_1_E_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_F -->
<!-- guest_rooms_9_12_1_F -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you describe the state of repair?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Neglected<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_F_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_F" ng-model="guest_rooms_9_12_1_F" value="0" ng-checked="guest_rooms_9_12_1_F_a" ng-focus="check_guest_rooms_9_12_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_12_1_F_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_F_cm" ng-model="guest_rooms_9_12_1_F_cm" ng-focus="check_guest_rooms_9_12_1_F()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_F_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_F" ng-model="guest_rooms_9_12_1_F" value="2" ng-checked="guest_rooms_9_12_1_F_b" ng-focus="check_guest_rooms_9_12_1_F_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Well maintained <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_F_c" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_F" ng-model="guest_rooms_9_12_1_F" value="5" ng-checked="guest_rooms_9_12_1_F_c" ng-focus="check_guest_rooms_9_12_1_F_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_12_1_G -->
<!-- guest_rooms_9_12_1_G -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the state of general cleanliness?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Untidy<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_G_a" class="sum_lodge" type="radio" name="guest_rooms_9_12_1_G" ng-model="guest_rooms_9_12_1_G" value="0" ng-checked="guest_rooms_9_12_1_G_a" ng-focus="check_guest_rooms_9_12_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_12_1_G_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_12_1_G_cm" ng-model="guest_rooms_9_12_1_G_cm" ng-focus="check_guest_rooms_9_12_1_G()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Reasonable<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_G_b" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_G" ng-model="guest_rooms_9_12_1_G" value="2" ng-checked="guest_rooms_9_12_1_G_b" ng-focus="check_guest_rooms_9_12_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very clean <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_12_1_G_c" class="sum_lodge" type="radio"  name="guest_rooms_9_12_1_G" ng-model="guest_rooms_9_12_1_G" value="5" ng-checked="guest_rooms_9_12_1_G_c" ng-focus="check_guest_rooms_9_12_1_G_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_13 -->
<!-- 9_13_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.13</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Room Designation</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="12" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_13_1_text" name="guest_rooms_9_13_1_text" ng-model="guest_rooms_9_13_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_13_1_A -->
<!-- guest_rooms_9_13_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are the doors clearly marked?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">No<span class="marks_weight">(0)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_13_1_A" ng-model="guest_rooms_9_13_1_A" value="0" ng-checked="guest_rooms_9_13_1_A_a" ng-focus="check_guest_rooms_9_13_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="2" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_13_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_13_1_A_cm" ng-model="guest_rooms_9_13_1_A_cm" ng-focus="check_guest_rooms_9_13_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Yes <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_13_1_A" ng-model="guest_rooms_9_13_1_A" value="10" ng-checked="guest_rooms_9_13_1_A_b" ng-focus="check_guest_rooms_9_13_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_13_1_B -->
<!-- guest_rooms_9_13_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the design and uniqueness of the door signage?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_13_1_B" ng-model="guest_rooms_9_13_1_B" value="3" ng-checked="guest_rooms_9_13_1_B_a" ng-focus="check_guest_rooms_9_13_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_13_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_13_1_B_cm" ng-model="guest_rooms_9_13_1_B_cm" ng-focus="check_guest_rooms_9_13_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_13_1_B" ng-model="guest_rooms_9_13_1_B" value="10" ng-checked="guest_rooms_9_13_1_B_b" ng-focus="check_guest_rooms_9_13_1_B_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_13_1_B" ng-model="guest_rooms_9_13_1_B" value="15" ng-checked="guest_rooms_9_13_1_B_c" ng-focus="check_guest_rooms_9_13_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>

<!-- 9_13_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the quality of material and fittings used on doors?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_13_1_C" ng-model="guest_rooms_9_13_1_C" value="5" ng-checked="guest_rooms_9_13_1_C_a" ng-focus="check_guest_rooms_9_13_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_13_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_13_1_C_cm" ng-model="guest_rooms_9_13_1_C_cm" ng-focus="check_guest_rooms_9_13_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_13_1_C" ng-model="guest_rooms_9_13_1_C" value="10" ng-checked="guest_rooms_9_13_1_C_b" ng-focus="check_guest_rooms_9_13_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_13_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_13_1_C" ng-model="guest_rooms_9_13_1_C" value="15" ng-checked="guest_rooms_9_13_1_C_c" ng-focus="check_guest_rooms_9_13_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_14 -->
<!-- 9_14_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.14</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Room Security</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="13" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_14_1_text" name="guest_rooms_9_14_1_text" ng-model="guest_rooms_9_14_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_14_1_A -->
<!-- guest_rooms_9_14_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the strength of the door?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Weak<span class="marks_weight">(1)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_A_a" class="sum_lodge" type="radio" name="guest_rooms_9_14_1_A" ng-model="guest_rooms_9_14_1_A" value="1" ng-checked="guest_rooms_9_14_1_A_a" ng-focus="check_guest_rooms_9_14_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_14_1_A_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_14_1_A_cm" ng-model="guest_rooms_9_14_1_A_cm" ng-focus="check_guest_rooms_9_14_1_A()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Strong<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_A_b" class="sum_lodge" type="radio"  name="guest_rooms_9_14_1_A" ng-model="guest_rooms_9_14_1_A" value="3" ng-checked="guest_rooms_9_14_1_A_b" ng-focus="check_guest_rooms_9_14_1_A_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very strong <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_A_c" class="sum_lodge" type="radio"  name="guest_rooms_9_14_1_A" ng-model="guest_rooms_9_14_1_A" value="5" ng-checked="guest_rooms_9_14_1_A_c" ng-focus="check_guest_rooms_9_14_1_A_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>



<!-- 9_14_1_B -->
<!-- guest_rooms_9_14_1_B -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Is the door security enhanced by:- </td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Automatic self-lock <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_14_1_B_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_14_1_B_a" ng-model="guest_rooms_9_14_1_B_a" value="5" ng-checked="guest_rooms_9_14_1_B_aTT" ng-focus="check_guest_rooms_9_14_1_B_a_cm()"/>
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
  <input id="guest_rooms_9_14_1_B_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_14_1_B_a_cm" ng-model="guest_rooms_9_14_1_B_a_cm" ng-focus="check_guest_rooms_9_14_1_B_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Double locking systems  <span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_14_1_B_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_14_1_B_b" ng-model="guest_rooms_9_14_1_B_b" value="10" ng-checked="guest_rooms_9_14_1_B_bTT" ng-focus="check_guest_rooms_9_14_1_B_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_14_1_B_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_14_1_B_b_cm" ng-model="guest_rooms_9_14_1_B_b_cm" ng-focus="check_guest_rooms_9_14_1_B_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Door peep  <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">

	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_14_1_B_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_14_1_B_c" ng-model="guest_rooms_9_14_1_B_c" value="15" ng-checked="guest_rooms_9_14_1_B_cTT" ng-focus="check_guest_rooms_9_14_1_B_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_14_1_B_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_14_1_B_c_cm" ng-model="guest_rooms_9_14_1_B_c_cm" ng-focus="check_guest_rooms_9_14_1_B_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_14_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How do you rate the quality of material and fittings used on doors?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_14_1_C" ng-model="guest_rooms_9_14_1_C" value="5" ng-checked="guest_rooms_9_14_1_C_a" ng-focus="check_guest_rooms_9_14_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_14_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_14_1_C_cm" ng-model="guest_rooms_9_14_1_C_cm" ng-focus="check_guest_rooms_9_14_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(10)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_14_1_C" ng-model="guest_rooms_9_14_1_C" value="10" ng-checked="guest_rooms_9_14_1_C_b" ng-focus="check_guest_rooms_9_14_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(15)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_14_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_14_1_C" ng-model="guest_rooms_9_14_1_C" value="15" ng-checked="guest_rooms_9_14_1_C_c" ng-focus="check_guest_rooms_9_14_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_15 -->
<!-- 9_15_1 -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom">9.15</td>
  <!--td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td-->
  <td colspan="4" style="vertical-align:middle; font-weight:bold" class="border-mdblue borderless-top row_1_1_1">Supplies in Bedrooms</td>
 
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <td rowspan="27" style="vertical-align:top" align="left" class="border-mdblue last_row_col">
  <textarea id="guest_rooms_9_15_1_text" name="guest_rooms_9_15_1_text" ng-model="guest_rooms_9_15_1_text" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; resize:none; font-size:12px!important" rows="4" placeholder="Type here.." class=""></textarea>
  </td>
</tr>

<!-- 9_15_1_A -->
<!-- guest_rooms_9_15_1_A -->


<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">Are the following supplies available:-</td>
  
  <!--td style="vertical-align:middle" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Safe drinking water and glasses <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_a" class="sum_lodge" type="checkbox" name="guest_rooms_9_15_1_A_a" ng-model="guest_rooms_9_15_1_A_a" value="4" ng-checked="guest_rooms_9_15_1_A_aTT" ng-focus="check_guest_rooms_9_15_1_A_a_cm()"/>
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
  <input id="guest_rooms_9_15_1_A_a_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_a_cm" ng-model="guest_rooms_9_15_1_A_a_cm" ng-focus="check_guest_rooms_9_15_1_A_a()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Do Not Disturb sign  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_b" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_b" ng-model="guest_rooms_9_15_1_A_b" value="2" ng-checked="guest_rooms_9_15_1_A_bTT" ng-focus="check_guest_rooms_9_15_1_A_b_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_b_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_b_cm" ng-model="guest_rooms_9_15_1_A_b_cm" ng-focus="check_guest_rooms_9_15_1_A_b()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue">Stationery with Lodge logo  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">

	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_c" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_c" ng-model="guest_rooms_9_15_1_A_c" value="3" ng-checked="guest_rooms_9_15_1_A_cTT" ng-focus="check_guest_rooms_9_15_1_A_c_cm()"/>
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_c_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_c_cm" ng-model="guest_rooms_9_15_1_A_c_cm" ng-focus="check_guest_rooms_9_15_1_A_c()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(d)</td>
  <td style="vertical-align:middle" class="border-mdblue">Waste bin  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_d" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_d" ng-model="guest_rooms_9_15_1_A_d" value="2" ng-checked="guest_rooms_9_15_1_A_dTT" ng-focus="check_guest_rooms_9_15_1_A_d_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_d_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_d_cm" ng-model="guest_rooms_9_15_1_A_d_cm" ng-focus="check_guest_rooms_9_15_1_A_d()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(e)</td>
  <td style="vertical-align:middle" class="border-mdblue">Appropriate insect repellent  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_e" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_e" ng-model="guest_rooms_9_15_1_A_e" value="2" ng-checked="guest_rooms_9_15_1_A_eTT" ng-focus="check_guest_rooms_9_15_1_A_e_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_e_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_e_cm" ng-model="guest_rooms_9_15_1_A_e_cm" ng-focus="check_guest_rooms_9_15_1_A_e()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(f)</td>
  <td style="vertical-align:middle" class="border-mdblue">Laundry bags  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_f" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_f" ng-model="guest_rooms_9_15_1_A_f" value="2" ng-checked="guest_rooms_9_15_1_A_fTT" ng-focus="check_guest_rooms_9_15_1_A_f_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_f_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_f_cm" ng-model="guest_rooms_9_15_1_A_f_cm" ng-focus="check_guest_rooms_9_15_1_A_f()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(g)</td>
  <td style="vertical-align:middle" class="border-mdblue">Air freshener  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_g" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_g" ng-model="guest_rooms_9_15_1_A_g" value="2" ng-checked="guest_rooms_9_15_1_A_gTT" ng-focus="check_guest_rooms_9_15_1_A_g_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_g_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_g_cm" ng-model="guest_rooms_9_15_1_A_g_cm" ng-focus="check_guest_rooms_9_15_1_A_g()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(h)</td>
  <td style="vertical-align:middle" class="border-mdblue">Hot water bottles  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_h" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_h" ng-model="guest_rooms_9_15_1_A_h" value="3" ng-checked="guest_rooms_9_15_1_A_hTT" ng-focus="check_guest_rooms_9_15_1_A_h_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_h_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_h_cm" ng-model="guest_rooms_9_15_1_A_h_cm" ng-focus="check_guest_rooms_9_15_1_A_h()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(i)</td>
  <td style="vertical-align:middle" class="border-mdblue">Extra pillows, blankets/duvets  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_i" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_i" ng-model="guest_rooms_9_15_1_A_i" value="4" ng-checked="guest_rooms_9_15_1_A_iTT" ng-focus="check_guest_rooms_9_15_1_A_i_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_i_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_i_cm" ng-model="guest_rooms_9_15_1_A_i_cm" ng-focus="check_guest_rooms_9_15_1_A_i()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(j)</td>
  <td style="vertical-align:middle" class="border-mdblue">Tea/coffee trays  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_j" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_j" ng-model="guest_rooms_9_15_1_A_j" value="3" ng-checked="guest_rooms_9_15_1_A_jTT" ng-focus="check_guest_rooms_9_15_1_A_j_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_j_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_j_cm" ng-model="guest_rooms_9_15_1_A_j_cm" ng-focus="check_guest_rooms_9_15_1_A_j()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(k)</td>
  <td style="vertical-align:middle" class="border-mdblue">Assorted tissue papers  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_k" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_k" ng-model="guest_rooms_9_15_1_A_k" value="3" ng-checked="guest_rooms_9_15_1_A_kTT" ng-focus="check_guest_rooms_9_15_1_A_k_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_k_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_k_cm" ng-model="guest_rooms_9_15_1_A_k_cm" ng-focus="check_guest_rooms_9_15_1_A_k()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(l)</td>
  <td style="vertical-align:middle" class="border-mdblue">Shoe bags and shoe polishing pads  <span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_l" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_l" ng-model="guest_rooms_9_15_1_A_l" value="2" ng-checked="guest_rooms_9_15_1_A_lTT" ng-focus="check_guest_rooms_9_15_1_A_l_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_l_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_l_cm" ng-model="guest_rooms_9_15_1_A_l_cm" ng-focus="check_guest_rooms_9_15_1_A_l()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(m)</td>
  <td style="vertical-align:middle" class="border-mdblue">Sewing kit  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_m" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_m" ng-model="guest_rooms_9_15_1_A_m" value="3" ng-checked="guest_rooms_9_15_1_A_mTT" ng-focus="check_guest_rooms_9_15_1_A_m_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_m_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_m_cm" ng-model="guest_rooms_9_15_1_A_m_cm" ng-focus="check_guest_rooms_9_15_1_A_m()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(n)</td>
  <td style="vertical-align:middle" class="border-mdblue">Bedroom slippers  <span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_n" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_n" ng-model="guest_rooms_9_15_1_A_n" value="3" ng-checked="guest_rooms_9_15_1_A_nTT" ng-focus="check_guest_rooms_9_15_1_A_n_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_n_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_n_cm" ng-model="guest_rooms_9_15_1_A_n_cm" ng-focus="check_guest_rooms_9_15_1_A_n()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(o)</td>
  <td style="vertical-align:middle" class="border-mdblue">Flowers <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_o" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_o" ng-model="guest_rooms_9_15_1_A_o" value="4" ng-checked="guest_rooms_9_15_1_A_oTT" ng-focus="check_guest_rooms_9_15_1_A_o_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_o_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_o_cm" ng-model="guest_rooms_9_15_1_A_o_cm" ng-focus="check_guest_rooms_9_15_1_A_o()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(p)</td>
  <td style="vertical-align:middle" class="border-mdblue">Assorted sweets, chocolates, mints ( <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_p" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_p" ng-model="guest_rooms_9_15_1_A_p" value="4" ng-checked="guest_rooms_9_15_1_A_pTT" ng-focus="check_guest_rooms_9_15_1_A_p_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue">
  <input id="guest_rooms_9_15_1_A_p_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_p_cm" ng-model="guest_rooms_9_15_1_A_p_cm" ng-focus="check_guest_rooms_9_15_1_A_p()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">(q)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Fruit bowl  <span class="marks_weight">(4)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-icon p-curve p-pulse">
		<input id="guest_rooms_9_15_1_A_q" class="sum_lodge" type="checkbox"  name="guest_rooms_9_15_1_A_q" ng-model="guest_rooms_9_15_1_A_q" value="4" ng-checked="guest_rooms_9_15_1_A_qTT" ng-focus="check_guest_rooms_9_15_1_A_q_cm()" />
		<div class="state p-success" style="width:13px!important">
		<i class="icon mdi mdi-check"></i>
		<label></label>
		</div>
	</div>
  </td>
  <td style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_15_1_A_q_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_A_q_cm" ng-model="guest_rooms_9_15_1_A_q_cm" ng-focus="check_guest_rooms_9_15_1_A_q()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>


<!-- 9_15_1_B -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the quality and presentation of the supplies?</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_B_a" class="sum_lodge" type="radio" name="guest_rooms_9_15_1_B" ng-model="guest_rooms_9_15_1_B" value="2" ng-checked="guest_rooms_9_15_1_B_a" ng-focus="check_guest_rooms_9_15_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col_sub_section">
  <input id="guest_rooms_9_15_1_B_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_B_cm" ng-model="guest_rooms_9_15_1_B_cm" ng-focus="check_guest_rooms_9_15_1_B()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_B_b" class="sum_lodge" type="radio"  name="guest_rooms_9_15_1_B" ng-model="guest_rooms_9_15_1_B" value="3" ng-checked="guest_rooms_9_15_1_B_b" ng-focus="check_guest_rooms_9_15_1_B_cm()" />
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
  <td style="vertical-align:middle" class="border-mdblue last_row_col_sub_section">Very Good <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col_sub_section">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_B_c" class="sum_lodge" type="radio"  name="guest_rooms_9_15_1_B" ng-model="guest_rooms_9_15_1_B" value="5" ng-checked="guest_rooms_9_15_1_B_c" ng-focus="check_guest_rooms_9_15_1_B_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


<!-- 9_15_1_C -->

<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold; width:16px" class="border-mdblue"><div ng-class="{list_pre:true}"></div></td>
  <td colspan="3" style="vertical-align:top" class="border-mdblue borderless-top">How would you rate the adequacy and appropriateness of the supplies provided?
</td>
  
  <!--td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue"></td-->
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(a)</td>
  <td style="vertical-align:middle" class="border-mdblue">Fair<span class="marks_weight">(2)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_C_a" class="sum_lodge" type="radio" name="guest_rooms_9_15_1_C" ng-model="guest_rooms_9_15_1_C" value="2" ng-checked="guest_rooms_9_15_1_C_a" ng-focus="check_guest_rooms_9_15_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <td rowspan="3" style="vertical-align:middle; text-align:center; background-color:rgba(0,0,0,.05)" align="center" class="border-mdblue last_row_col">
  <input id="guest_rooms_9_15_1_C_cm" class="sum_lodge_cm assessor_custom_marks_field" type="text" name="guest_rooms_9_15_1_C_cm" ng-model="guest_rooms_9_15_1_C_cm" ng-focus="check_guest_rooms_9_15_1_C()" ng-pattern="/^[0-9\.\]+$/"/>
  </td>
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue borderless-bottom"></td>
  <td style="vertical-align:middle" class="border-mdblue">(b)</td>
  <td style="vertical-align:middle" class="border-mdblue">Good<span class="marks_weight">(3)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_C_b" class="sum_lodge" type="radio"  name="guest_rooms_9_15_1_C" ng-model="guest_rooms_9_15_1_C" value="3" ng-checked="guest_rooms_9_15_1_C_b" ng-focus="check_guest_rooms_9_15_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>
<tr ng-class=""> 
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:top; font-weight:bold" class="border-mdblue last_row_col"></td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">(c)</td>
  <td style="vertical-align:middle" class="border-mdblue last_row_col">Very Good <span class="marks_weight">(5)</span></td>
  
  <td style="vertical-align:middle; padding-right:0px!important" align="center" class="border-mdblue last_row_col">
	<div class="pretty p-default p-round p-pulse">
		<input id="guest_rooms_9_15_1_C_c" class="sum_lodge" type="radio"  name="guest_rooms_9_15_1_C" ng-model="guest_rooms_9_15_1_C" value="5" ng-checked="guest_rooms_9_15_1_C_c" ng-focus="check_guest_rooms_9_15_1_C_cm()" />
		<div class="state p-success-o" style="width:13px!important">
		<label></label>
		</div>
	</div>
  </td>
  <!--td style="vertical-align:middle;" align="center" class="border-mdblue"></td-->
</tr>


