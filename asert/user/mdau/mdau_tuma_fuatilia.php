<div id="wrap" class="hideMeInPrint">
<div class="modal left fade" id="tuma_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content dawati-bgTTTT" style="background-color:#ffffff">
	  
	  <div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(61,138,101,0)"> 
			<span>
			<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
			<span class="rstdnavbar-toggler-icon_hamburger"></span>
			</button>
			</span>
			<div class="pull-right">
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="closeTuma()" ng-hide="results_status">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_status()" ng-show="results_status">
				<span class="rstdnavbar-toggler-icon_close"></span>
				</button>
			</div>
	   </div>
	  	  
	   <div style="max-width:800px; border:0px solid #fff; border-radius:2px; padding: 0px 40px 10px 40px; margin-left:auto; margin-right:auto">
		<center>
            <div class="page-header__subtitle w3-text-black">JAMHURI YA MUUNGANO WA TANZANIA</div>
            <div class="page-header__subtitle w3-text-gray" style="margin:0px 0px 28px 0px;">Wizara 
              ya Maliasili na Utalii</div>
            <div class="dawati_logo" style="margin:0px 0px 28px 0px;"></div>
            <!--h1 class="page-header__subtitle w3-text-gray">Fomu ya Usajili</h1-->
            <span class="divider" style="margin-bottom:7px"> 
            <hr>
            <hr>
            </span> 
        </center>
		</div>		
        <div class="modal-body"> 
          <div class="container" style="max-width:610px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1)"> 
            <div class="" style="max-width:610px; border:1px solid #fff; border-radius:2px; padding: 40px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
              <div ng-hide="fuatilia"> 
                <div ng-hide="success">

                  <form  id="wateja_request_form" name="wateja_request_form" ng-submit="submit_wateja_request_form()" enctype="multipart/form-data" novalidate>
				  
				  <div class="" style="padding:0px 0px 30px 0px; margin:0px auto 0px"> 
                    <center>
                       <span class="footer__site__title w3-text-light-grey">FOMU YA KUTUMA</span>
                    </center>
                  </div>
				  
				  <div class="bordered__box__outer outer_responsive">
				  <div class="bordered__box__inner inner_responsive" style="padding-bottom:0px">
				  
                    <div class="alert  alert-dismissible alert-danger" ng-show="error"> 
                      <a href="#" class="close" ng-click="close_errorMessage()" aria-label="close">×</a> 
                      {{errorMessage}} </div>
                    <div class="alert  alert-dismissible alert-danger" ng-show="connection_error"> 
                      <a href="#" class="close" ng-click="close_connection_errorMessage()" aria-label="close">×</a> 
                      {{connection_errorMessage}} </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
                            <!--i class="glyphicon glyphicon-asterisk lazima_kujaza"></i-->Majina</div>
                          <input  id="majina_kamili" name="majina_kamili" ng-model="majina_kamili" ng-pattern="/^([a-zA-Z\.\-]{2,4})+\ ([a-zA-Z\.\-\ ])+$/" placeholder="Majina Kamili" class="form-control"  type="text" ng-required="true">
                        </div>
                      </div>
					  </div>
					  <div class="w3-row form-group">
                      <div class="w3-col s12" ng-init="loadJinsia()"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
                            Jinsia </div>
                          <ui-select name="jinsia" ng-model="jinsia.selected" theme="bootstrap" ng-required="true"> 
                          <ui-select-match placeholder="Chagua">{{$select.selected.jinsia}}</ui-select-match> 
                          <ui-select-choices repeat="item in jinsiaData | filter: $select.search"> 
                          <span ng-bind-html="item.jinsia | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaJinsia()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
                            <!--i class="glyphicon glyphicon-envelope"></i--> Email</div>
                          <input name="barua_pepe" ng-model="barua_pepe" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="Barua Pepe" class="form-control" type="text" ng-required="true">
                        </div>
                      </div>
					  </div>
					  <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
                            <!--i class="glyphicon glyphicon-earphone"></i-->Simu</div>
                          <input name="simu" ng-model="simu" placeholder="Namba ya Simu" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control" type="text"  ng-minlength="10" ng-required="true">
                        </div>
                      </div>
                    </div>
					<div class="w3-row form-group">
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px">Taasisi</div>
                          <input name="taasisi" ng-model="taasisi" placeholder="Jina, Anuani" class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="w3-row form-group" ng-init="loadNchi()"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px">Nchi</div>
                          <ui-select name="nchi" ng-model="nchi.selected" theme="bootstrap" ng-change="loadMikoa()" ng-required="true"> 
                          <ui-select-match placeholder="Chagua">{{$select.selected.country_name}}</ui-select-match> 
                          <ui-select-choices repeat="item in nchiData | filter: $select.search"> 
                          <span ng-bind-html="item.country_name | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaNchi()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					  <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group pull-right-600" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px">Mkoa</div>
                          <ui-select name="mikoa" ng-model="mikoa.selected" theme="bootstrap" ng-disabled="!nchi.selected || mikoa_disabled" ng-change="loadHalmashauri()"> 
                          <ui-select-match placeholder="Chagua">{{$select.selected.regNam}}</ui-select-match> 
                          <ui-select-choices repeat="item in mikoaData | filter: $select.search"> 
                          <span ng-bind-html="item.regNam | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaMikoa()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px">Wilaya</div>
                          <ui-select name="halmashauri" ng-model="halmashauri.selected" theme="bootstrap" ng-disabled="!mikoa.selected"> 
                          <ui-select-match placeholder="Chagua">{{$select.selected.lgaNam}}</ui-select-match> 
                          <ui-select-choices repeat="item in halmashauriData | filter: $select.search"> 
                          <span ng-bind-html="item.lgaNam | highlight: $select.search"></span> 
                          </ui-select-choices> </ui-select> 
                          <div class="input-group-btn"> 
                            <button type="button" class="btn btn_add_on" ng-click="safishaHalmashauri()"><span class="glyphicon glyphicon-remove"></span></button>
                          </div>
                        </div>
                      </div>
					  </div>
					  
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <!--div class="input-group-addon w3-light-green" style="width:60px; padding:0px 10px 0px 10px"> 
                       <i class="glyphicon glyphicon-pencil"></i> </div-->
                          <input name="kichwa_cha_maelezo" ng-model="kichwa_cha_maelezo" placeholder="Kichwa cha Habari" class="form-control rounded" type="text" ng-minlength="5" ng-required="true">
                        </div>
                      </div>
                    </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <!--div class="input-group-addon w3-light-green" style="width:65px; padding:0px 10px 0px 10px"> 
                            <i class="glyphicon glyphicon-pencil"></i> </div-->
                          <textarea name="maelezo" ng-model="maelezo" placeholder="Andika Maelezo" rows="4" class="form-control" ng-minlength="10" ng-required="true"></textarea>
                        </div>
                      </div>
                    </div>
                    <!-- VIAMBATANISHI -->
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <input type="file" class='inputfile inputfile-6' id="kiambata" name="kiambata" ng-model="kiambata" value="">
                          <label for="kiambata"><span id="kiambata_label"></span>
						  <strong> 
                          <center>
                            <i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;Kiambatisho&nbsp;&nbsp;&nbsp;
							<button type="button" class="rstdbtn btn-sm rstdbtn-outline-dark btn-rounded-x rstdbtn-outline-dark_warning" style="padding-top:3px" ng-click="safisha_kiambata()"><i class="glyphicon glyphicon-remove"></i></button>
                          </center>
                          </strong>
						  </label>
                        </div>
                      </div>
                    </div>
					
					</div>
                    </div>
					
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div class="btn_ukubwa_wrap">
                      <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request" ng-disabled="wateja_request_form.$invalid || hajarudi_wateja_request_form">Tuma</button>
                      <button type="button" class="btn btn-default btn_ukubwa" style="border-color:#fff" ng-click="futa_requestForm()">Futa</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="closeTuma()">Funga</button>
                    </div>
                    </div>
                  </form>
                  <!--hide div-->
                </div>				
                <div class="" style="padding:0px 0px 0px 0px; margin:0px auto 0px" ng-show="success"> 
                  <center>
				  <span class="footer__site__title w3-text-light-grey">TIKETI NAMBA</span>
                    <h1 class="alert__title w3-text-white" style="text-shadow:0 1px 1px rgba(40,57,49,1)">{{ticket_number}}</h1>
					</center>
				   <div class="bordered__box__outer" style="margin-top:10px; margin-left:auto; margin-right:auto">
				   <div class="bordered__box__inner" style="padding:20px 25px 20px 25px; margin-left:auto; margin-right:auto">
					<div class="maandishi_ya_kawaida text-justify w3-text-light-grey">
					Ahsante kwa kuwasiliana nasi! Tafadhali hifadhi namba ya tiketi uliyopewa hapo juu na tumia namba hiyo kufuatilia hali ya request uliyotutumia.
					</div>
					</div>
					</div>                   
                    <div class="form-group wateja_request_form_buttons_margin" align="center">
					<div class="btn_ukubwa_wrap">
                      <button type="submit" class="btn btn-default btn_ukubwa" style="border-color:#fff" id="btn_send_request" ng-click="showFuatilia()">Fuatilia</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="closeTuma()">Funga</button>
                    </div>
					</div>                  
                </div>
              </div>
              <!--Fuatilia-->
              <div ng-show="fuatilia"> 
                <div ng-show="check_status">

                  <div class="" style="padding:0px 0px 30px 0px; margin:0px auto 0px">
                    <center>
                       <span class="footer__site__title w3-text-light-grey">FUATIA HOJA YAKO</span>
                    </center>
                  </div>
				   
                  <form  id="wateja_fuatilia_form" name="wateja_fuatilia_form" ng-submit="submit_wateja_fuatilia_form()" novalidate>
				   <div class="bordered__box__outer" style="max-width:360px; margin-left:auto; margin-right:auto">
				   <div class="bordered__box__inner" style="padding:30px 25px 13px 25px; margin-left:auto; margin-right:auto">
                    <div class="alert  alert-dismissible alert-danger" ng-show="status_error"> 
                      <a href="#" class="close" ng-click="close_status_errorMessage()" aria-label="close">×</a> 
                      {{status_errorMessage}} </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:60px; padding:0px 10px 0px 10px"> 
                            Tiketi </div>
                          <input name="ticket_id" ng-model="ticket_id" ng-pattern="/^[0-9]+$/" placeholder="Namba" class="form-control" type="text" ng-minlength="7" ng-maxlength="7" ng-required="true">
                        </div>
                      </div>
                    </div>
                    <div class="w3-row form-group"> 
                      <div class="w3-col s12"> 
                        <div class="input-group" style="width:100%"> 
                          <div class="input-group-addon w3-light-green" style="width:60px; padding:0px 10px 0px 10px"> 
                            Simu </div>
                          <input name="simu_iliyosajiliwa" ng-model="simu_iliyosajiliwa" placeholder="Namba" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control" type="text"  ng-minlength="10" ng-required="true">
                        </div>
                      </div>
                    </div>
					</div>
					</div>
                    <div class="form-group wateja_request_form_buttons_margin" align="center"> 
					<div class="btn_ukubwa_wrap">
                      <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_fuatilia" ng-disabled="wateja_fuatilia_form.$invalid || hajarudi_wateja_fuatilia_form">Tazama</button>
                      <button type="button" class="btn btn-default btn_ukubwa" style="border-color:#fff" ng-click="futa_wateja_fuatilia_form()">Futa</button>
                      <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="closeTuma()">Funga</button>
                      </div>
                   </div>				   
                  </form>
				  
                </div>
                <div ng-show="results_status"> 
                  <div class="w3-text-white" style="padding:0px 0px 30px 0px; border:0px solid #ccc; margin:0px auto 0px"> 
                    <center>
                       <span class="footer__site__title w3-text-light-grey">HATUA ILIYOFIKIA</span>
                    </center>
                  </div>
                  <div class="w3-row form-group"> 
                    <div class="w3-col s12"> 
                      <center>
                        <div class="input-group" style="width:90%"> 
                          <!--div class="input-group-addon w3-light-green" style="width:60px; padding:0px 10px 0px 10px"> 
                          Dawati - Huduma kwa Mteja </div-->
                          <div id="mapokezi" ng-class='{ w3_light_green:true, rounded:true, inafanyiwa_kazi:inafanyiwa_kazi_mapokezi, bado:bado_mapokezi }' style="padding:15px 15px; margin-bottom:5px">MAPOKEZI<span class="pull-right" style="margin-top:-13px" ng-hide="inafanyiwa_kazi_mapokezi || bado_mapokezi"><img src="images/success.png" height="50" width="50"></span></div>
                          <div id="idara" ng-class='{ w3_light_green:true, rounded:true, inafanyiwa_kazi:inafanyiwa_kazi_idara, bado:bado_idara }' style="padding:15px 15px; margin-bottom:5px">IDARA<span class="pull-right" style="margin-top:-13px" ng-hide="inafanyiwa_kazi_idara || bado_idara"><img src="images/success.png" height="50" width="50"></span></div>
                          <div id="km" ng-class='{ w3_light_green:true, rounded:true, inafanyiwa_kazi:inafanyiwa_kazi_km, bado:bado_km }' style="padding:15px 15px; margin-bottom:5px">KATIBU MKUU<span class="pull-right" style="margin-top:-13px" ng-hide="inafanyiwa_kazi_km || bado_km"><img src="images/success.png" height="50" width="50"></span></div>
                          <div id="mrejesho" ng-class='{ w3_light_green:true, rounded:true, inafanyiwa_kazi:inafanyiwa_kazi_mrejesho, bado:bado_mrejesho }' style="padding:15px 15px; margin-bottom:5px">MAJIBU<span class="pull-right" style="margin-top:-13px" ng-hide="inafanyiwa_kazi_mrejesho || bado_mrejesho"><img src="images/success.png" height="50" width="50"></span></div>
                        </div>
                      </center>
                    </div>
                  </div>
                  <div class="form-group wateja_request_form_buttons_margin" align="center"> 
				  <div class="btn_ukubwa_wrap">
                    <button type="button" class="btn btn-default btn_ukubwa" style="border-color:#fff" ng-disabled="disable_tazama_majibu || hajarudi_tazama_majibu" ng-click="ticketDetails(ticket_id)">Tazama</button>
                    <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="close_status()">Funga</button>
                  </div>
				  </div>
                </div>
              </div>
              <!--End Fuatilia-->
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>