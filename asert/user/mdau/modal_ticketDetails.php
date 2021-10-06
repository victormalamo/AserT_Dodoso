<div class="modal left fade" id="ticket_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
		
    <div class="modal-dialog modal-dialog-to-viewport" role="document"> 
      <div class="modal-content modal-content-head-foot-bg" style="background-color: rgba(0,0,0,.8)"> 
<div class="modal-body modal-body-to-viewport_b" style="padding-bottom:10px">
		  

<div class="container_form" style="background-color:#ffffff; padding:80px 0px 10px 0px ">
<div class="container_form_inner">

<div class="row_form">
    <div class="jamhuri__title mnrt-center">
	JAMHURI YA MUUNGANO WA TANZANIA	
    </div> 
    <div class="col-form-75">
    </div>
  </div>
<div class="row_form" style="margin-top:15px; margin-bottom:15px">
    <div class="wizara__title mnrt-center">
	WIZARA YA MALIASILI NA UTALII	
    </div> 
    <div class="col-form-75">
    </div>
</div>
<div class="row_form logo_print anuani_maelezo">    
	<div class="logo_print_left mnrt-left-align">
	Telegram: "MALIASILI"<br>
	Simu: 026-2321514<br>
	Email: ps@maliasili.go.tz
	</div>
	<div class="logo_print_center mnrt-center">
	<img src="../../images/logo_print.jpg">
	</div>
	<div class="logo_print_right mnrt-left-align">
	<div style="padding-left:40%">
	Mji wa Serikali,<br>
	Barabara ya Maliasili,<br>
	S.L.P 1351,<br>
	40472 - DODOMA
	</div>
	</div>
	</div>
<div class="row_form">
<div class="wizara__sub__title mnrt-center" style="margin-top:25px; margin-bottom:0px">MAJIBU KWA MTEJA</div>
</div>
<div class="row_form" style="margin-top:-35px; margin-bottom:0px">
    <div class="title_50_L mnrt-left-align"><em>Tiketi Na.&nbsp;</em> {{ticket_id}}</div>
	<div class="title_50_R mnrt-right-align"><em>Imejibiwa Tarehe&nbsp; </em>{{tarehe_ps}}</div>
</div>

<div ng-show="public">

<div class="row_form" style="margin:40px 0px 0px 0px">
    <div class="yahusu__title">{{majibu_title}}</div>
</div>
<div class="row_form">
    <div class="body__title mnrt-left-align">
	Taarifa Ulizotutumia
    </div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify">{{maelezo}}</div> 
</div>
<div class="row_form hideMeInPrint" style="padding-top:10px" ng-show="kuna_kiambata_mteja">
    <div class="ambatanisho_ico mnrt-left-align">
	<img src="../../images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="viambatanisho/{{kiambata}}" target="_blank">{{kiambata}}</a>
    </div>
</div>
<div class="row_form" style="margin-top:10px">
    <div class="body__tarehe mnrt-left-align">
	Tarehe:&nbsp; {{tarehe_kutoka_kwa_mteja}}
    </div> 
</div>
<div class="row_form">
    <div class="body__title mnrt-left-align" style="margin-top:10px">
	Majibu ya Wizara
    </div> 
</div>
<div class="row_form">
	<div class="body__maelezo w3-justify">{{majibu_maelezo}}</div> 
</div>
<div class="row_form hideMeInPrint" style="padding-top:10px" ng-show="kuna_kiambata_wizara">
    <div class="ambatanisho_ico mnrt-left-align">
	<img src="../../images/ambatanisho_ico.png">
    </div>
    <div class="ambatanisho mnrt-left-align">
	<a href="viambatanisho/{{majibu_kiambata}}" target="_blank">{{majibu_kiambata}}</a>
    </div>
</div>
<div class="row_form" style="margin:10px 0px">
    <div class="body__tarehe mnrt-left-align">
	Tarehe:&nbsp; {{tarehe_ps}}
    </div> 
</div>

</div>

<div ng-hide="public">
<div class="row_form" style="margin:40px 0px 0px 0px">
    <div class="yahusu__title">TIKETI NAMBA {{ticket_id}}</div>
</div>
<div class="row_form">
    <div class="body__title mnrt-left-align" style="margin-top:10px">
	Majibu ya Wizara
    </div> 
</div>
					
	<div class="form-group">
		<div class="body__maelezo w3-justify" style="padding:10px 20px 10px 20px"> 
		<p>
		Majibu ya {{displayed_category}} uliyotuma kwetu yamejibiwa kwa njia ya simu/email. Tafadhali wasiliana nasi kwa namba ya simu au barua pepe iliyowekwa hapa chini iwapo kuna tatizo lolote katika kupokea majibu. 
		<span ng-show="!onesha_funga">Kumbuka kututumia mrejesho wa majibu uliyopewa (au pindi utakapopewa). Tumia fomu hapo chini kututumia mrejesho</span>
		</p>
		<p>
		<span>
		Simu: <br>
		Barua pepe:
		</span>
		</p>
		</div>
	</div>
	<div class="row_form" style="margin-bottom:25px" ng-show="!onesha_funga">
	<center>
	<button type="button" class="btn btn-warning" ng-click="closeTicket()">Funga</button>
	</center>
	</div>
					
</div>

</div>
</div>

<!--Mrejesho-->

<div class="container_form_mrejesho hideMeInPrint" style="background-color:#ffffff; padding:0px 0px ">
<div class="container_form_inner_mrejesho">

<div class="row_form" style="border-top:1px solid #ccc; padding:30px 0px 0px 0px; margin-top:50px">

<div ng-show="onesha_maoni || onesha_shukrani">
	<div class="w3-text-green">
	<center><h1 class="page-header__title"><span ng-show="onesha_maoni">Tutumie Maoni</span><span ng-show="onesha_shukrani">Ahsante!</span></h1></center>
	</div>
	<span class="divider" style="margin-bottom:35px"><hr><hr></span>
</div>

<div ng-show="onesha_maoni">

<div class="container" style="max-width:600px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1); margin-top:15px; margin-bottom:80px"> 
<div class="" style="max-width:600px; border:1px solid #fff; border-radius:2px; padding: 40px 40px 20px 40px; margin-left:auto; margin-right:auto"> 

	<div style="max-width:450px; margin-left:auto; margin-right:auto">
	
	  <div class="w3-text-white" style="padding:0px 0px 30px 0px; margin:0px auto 0px"> 
		<center>
		   <span class="footer__site__title w3-text-light-grey">MAONI YAKO</span>
		</center>
	  </div>
	
	<form id="mdau_mrejesho_form" name="mdau_mrejesho_form" ng-submit="submit_mdau_mrejesho_form()" novalidate>
	
  <div class="bordered__box__outer outer_responsive">
  <div class="bordered__box__inner inner_responsive">
  
  	<div class="alert  alert-dismissible alert-danger" ng-show="mrejesho_connection_error"> 
	  <a href="#" class="close" ng-click="close_mrejesho_connection_errorMessage()" aria-label="close">×</a> 
	  {{mrejesho_connection_errorMessage}}
	</div>
	
	<div class="w3-row form-group"> 
	  <div class="w3-col s12 margin-bottom-15" ng-init="load_mdau_mrejesho()">
		<div class="input-group" style=" width:100%"> 
		  <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px">Maoni</div>
		  <ui-select name="mdau_mrejesho" ng-model="mdau_mrejesho.selected" theme="bootstrap" ng-required="true" ng-change="change_kitufe_name()"> 
		  <ui-select-match placeholder="Chagua">{{$select.selected.mdau_mrejesho}}</ui-select-match> 
		  <ui-select-choices repeat="item in mdau_mrejesho_data | filter: $select.search"> 
		  <span ng-bind-html="item.mdau_mrejesho | highlight: $select.search"></span> 
		  </ui-select-choices> </ui-select> 
		  <div class="input-group-btn"> 
			<button type="button" class="btn btn_add_on" ng-click="safisha_mdau_mrejesho()"><span class="glyphicon glyphicon-remove"></span></button>
		  </div>
		</div>
	  </div>                      
	</div>
	<div class="w3-row form-group"> 
	  <div class="w3-col s12"> 
		<div class="input-group" style="width:100%"> 
		  <!--div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
			<i class="glyphicon glyphicon-pencil"></i> </div-->
		  <textarea name="mdau_mrejesho_maoni" ng-model="mdau_mrejesho_maoni" placeholder="Maoni yako kwa ufupi.." rows="4" class="form-control" ng-minlength="2"></textarea>
		</div>
	  </div>
	</div>
	
	</div>
	</div>					
	<div class="form-group wateja_request_form_buttons_margin" align="center">
	<div class="btn_ukubwa_wrap">
	  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request" ng-disabled="mdau_mrejesho_form.$invalid || hajarudi_mdau_mrejesho_form">Tuma</button>
	  <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="futa_mdau_mrejesho_form()">Futa</button>
	</div>
	</div>
	
	</form>
					
	</div>

</div>
</div>

</div>

<div class="alert alert-success" ng-show="onesha_shukrani">
<center>
<span>
	Ahsante kwa maoni yako! Tumeyapokea. <br>
	Karibu tena Wizara ya Maliasili na Utalii
</span>
</center>
</div>

<div class="row_form" ng-show="onesha_funga" style="margin-bottom:50px">
<center>
<button type="button" class="btn btn-warning" ng-click="closeTicket()">Funga</button>
</center>
</div>

</div>

</div>
</div>
   
        </div>
</div>
</div>
</div>