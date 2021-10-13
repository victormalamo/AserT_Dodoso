<div class="modal left fade" id="ticket_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
		
<div class="modal-dialog" role="document"> 
<div class="modal-content modal-content-head-foot-bg" style="background-color: rgba(0,0,0,.8)"> 
<div class="modal-body" style="padding-bottom:0px">
		  


<div class="container_form" style="background-color:#ffffff; padding:15px 0px 0px 0px; margin-top:-15px">

<div class="container_form_inner">
<div class="row_form">
    <div class="body__title mnrt-left-align">
	Taarifa za Mteja
    </div> 
</div>
<div class="row_form">
<div class="table-responsive" style="padding-left:15px; overflow-x: unset"> 
<table class="table table-bordered ">
  <tbody style="white-space: nowrap;">
 	 <tr> 
	  <td style="vertical-align:middle; width:120px!important" class="body__sub__title">Tiketi</td>
	  <td style="vertical-align:middle" class="body__maelezo">{{ticket_id}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle; width:120px!important" class="body__sub__title">Jina</td>
	  <td style="vertical-align:middle" class="body__maelezo">{{majina_kamili}} - {{jinsia}}</span></td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Simu</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{simu}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Email</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{barua_pepe}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Taasisi</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{taasisi}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Halmashauri</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{halmashauri}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Mkoa</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{mkoa}}</td>
	</tr>
	<tr> 
	  <td style="vertical-align:middle" class="body__sub__title ">Nchi</td>
	  <td style="vertical-align:middle" class="body__maelezo ">{{nchi}}</td>
	</tr>
  </tbody>
</table>
</div>
</div>
<!--div class="row_form" ng-show="kundi">
	<div class="body__sub__title" style="padding-bottom:15px">{{displayed_category}}</div> 
</div-->
<div class="row_form">
	<div class="body__maelezo w3-justify" style="padding-bottom:15px">{{kichwa_cha_maelezo}}</div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify">{{maelezo}}</div> 
</div>
<div class="row_form hideMeInPrint" style="padding-top:10px" ng-show="kuna_kiambata_mteja">
    <div class="ambatanisho_ico mnrt-left-align">
	<img src="../../images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="../mdau/viambatanisho/{{kiambata}}" target="_blank">{{kiambata}}</a>
    </div>
</div>
<div class="row_form" style="margin-top:10px">
    <div class="body__tarehe mnrt-left-align">
	Tarehe:&nbsp; {{tarehe_kutoka_kwa_mteja}}
    </div> 
</div>

<div ng-show="onesha_majibu">
<div class="row_form">
    <div class="body__title mnrt-left-align" style="margin-top:10px">
	Majibu ya Wizara | {{div_unit}}
    </div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify" style="padding-bottom:15px">{{majibu_title}}</div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify">{{majibu_maelezo}}</div> 
</div>
<div class="row_form hideMeInPrint" style="padding-top:10px" ng-show="kuna_kiambata_wizara">
    <div class="ambatanisho_ico mnrt-left-align">
	<img src="../../images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="../mdau/viambatanisho/{{majibu_kiambata}}" target="_blank">{{majibu_kiambata}}</a>
    </div>
</div>
<div class="row_form" style="margin:10px 0px">
    <div class="body__tarehe mnrt-left-align">
	Tarehe:&nbsp; {{tarehe_ps}}
    </div> 
</div>
</div>

<div ng-show="onesha_mrejesho">
<div class="row_form">
    <div class="body__title mnrt-left-align" style="margin-top:10px">
	Maoni ya Mteja
    </div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify"><span style="font-style:italic">{{mtumaji_mrejesho}}!</span>&nbsp;{{mtumaji_comments}}</div> 
</div>
</div>

</div>

<div class="row_form w3-green" style="margin-top:50px">
<div class="container_form_inner " style="padding:25px 0px 40px 0px">



<div style="max-width:450px; margin-left:auto; margin-right:auto">
	
	  <div class="" style="padding:15px 0px 25px"> 
		<center>
		   <span class="action__title w3-text-white">MAPOKEZI</span>
		</center>
	  </div>
					
<div ng-hide="onesha_majibu">

<form id="mteja_ticket_form" name="mteja_ticket_form" ng-submit="submit_mteja_ticket_form()" novalidate>
  <div class="bordered__box__outer outer_responsive">
  <div class="bordered__box__inner inner_responsive">
  
  <div class="alert  alert-dismissible alert-success" ng-show="update_success">
  <button type="button" class="close" ng-click="close_update_successMessage()"><span aria-hidden="true">&times;</span></button>
{{update_successMessage}}
</div>
<div class="alert  alert-dismissible alert-danger" ng-show="connection_error">
 <button type="button" class="close" ng-click="close_connection_errorMessage()"><span aria-hidden="true">&times;</span></button>
  {{connection_errorMessage}}
</div>

<div class="w3-row form-group"> 
  <div class="w3-col s12 margin-bottom-15" ng-init="loadCategory()"> 
	<div class="input-group" style=" width:100%"> 
	  <div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Kundi</div>
	  <ui-select name="category" ng-model="category.selected" theme="bootstrap" ng-required="true"> 
	  <ui-select-match placeholder="Chagua..">{{$select.selected.category}}</ui-select-match> 
	  <ui-select-choices repeat="item in categoryData | filter: $select.search"> 
	  <span ng-bind-html="item.category | highlight: $select.search"></span> 
	  </ui-select-choices> </ui-select> 
	  <div class="input-group-btn"> 
		<button type="button" class="btn btn_add_on" ng-click="safisha_category()"><span class="glyphicon glyphicon-remove"></span></button>
	  </div>
	</div>
  </div>                      
</div>
<div class="w3-row form-group">
  <div class="w3-col s12 margin-bottom-15" ng-init="loadIdara()"> 
	<div class="input-group" style=" width:100%">
	  <div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Kwenda</div>
	  <ui-select name="idara" ng-model="idara.selected" theme="bootstrap" ng-required="true"> 
	  <ui-select-match placeholder="Idara..">{{$select.selected.div_unit}}</ui-select-match> 
	  <ui-select-choices repeat="item in idaraData | filter: $select.search"> 
	  <span ng-bind-html="item.div_unit | highlight: $select.search"></span> 
	  </ui-select-choices> </ui-select>                           
	  <div class="input-group-btn"> 
		<button type="button" class="btn btn_add_on" ng-click="safisha_idara()"><span class="glyphicon glyphicon-remove"></span></button>
	  </div>
	</div>
  </div>                      
</div>

</div>
</div>
					
<div class="form-group wateja_request_form_buttons_margin" align="center">
<div class="btn_ukubwa_wrap"> 
  <input type="hidden" name="ticket_id" value="{{ticket_id}}" />
  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request" ng-disabled="mteja_ticket_form.$invalid">Tuma</button>
  <button type="button" class="btn btn-default btn_ukubwa" style="border-color:#fff" ng-click="futa_mteja_ticketForm()">Futa</button>
  <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="closeTicket()">Funga</button>
	</div>
	</div>
</form>

</div>


<div ng-show="onesha_majibu && !onesha_mrejesho">
<form id="majibu_ticket_form" name="majibu_ticket_form" ng-submit="submit_majibu_ticket_form()" novalidate>
<div class="bordered__box__outer outer_responsive">
<div class="bordered__box__inner inner_responsive">
<div class="alert  alert-dismissible alert-success" ng-show="majibu_success">
<a href="#" class="close" ng-click="close_majibu_successMessage()" aria-label="close">�</a>
{{majibu_successMessage}}
</div>
<div class="alert  alert-dismissible alert-danger" ng-show="majibu_connection_error"> 
  <a href="#" class="close" ng-click="close_majibu_connection_errorMessage()" aria-label="close">�</a> 
  {{majibu_connection_errorMessage}}
</div>
<div class="w3-row form-group"> 
  <div class="w3-col s12 margin-bottom-15" ng-init="load_private_public()"> 
	<div class="input-group" style=" width:100%">
	  <div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Treat as</div>
	  <ui-select name="private_public" ng-model="private_public.selected" theme="bootstrap" ng-required="true" ng-change="change_kitufe_name()"> 
	  <ui-select-match placeholder="Chagua">{{$select.selected.private_public_name}}</ui-select-match> 
	  <ui-select-choices repeat="item in private_public_data | filter: $select.search"> 
	  <span ng-bind-html="item.private_public_name | highlight: $select.search"></span> 
	  </ui-select-choices> </ui-select> 
	  <div class="input-group-btn"> 
		<button type="button" class="btn btn_add_on" ng-click="safisha_private_public()"><span class="glyphicon glyphicon-remove"></span></button>
	  </div>
	</div>
  </div>                      
</div>
</div>
</div>					
<div class="form-group wateja_request_form_buttons_margin" align="center">
<div class="btn_ukubwa_wrap"> 
  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff; width:150px" id="btn_send_request" ng-disabled="majibu_ticket_form.$invalid || imebonyezwa">{{kitufe_name}}</button>
  <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff; width:150px" ng-click="closeTicket()">Funga</button>
	</div>
	</div>

</form>				
</div>

<div class="form-group" align="center" style="margin-top:0px; border-top:0px dotted #fff; padding-top:0px" ng-show="onesha_mrejesho">
	  <button type="button" class="btn btn-warning" ng-click="closeTicket()">Funga</button>
</div>
	
</div>


</div>
</div>

</div>


   
</div>
</div>
</div>
</div>