<div class="modal left fade" id="mtumiajimodal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">

  <div class="modal-dialog" role="document"> 
      <div class="modal-content dawati-bgTTTT" style="background-color: rgba(0,0,0,.75)"> 
        <div class="modal-body w3-text-white" style="padding-bottom:0px"> 
	  
          <div class="container" style="max-width:700px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1); margin-top:-10px; margin-bottom:5px"> 
            <div class="div-content-inner-to_viewport" style="max-width:700px; border:1px solid #fff; border-radius:2px; padding: 40px 40px 20px 40px; margin-left:auto; margin-right:auto"> 
			  <div class="">
			  
			<div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__top__title" style="vertical-align:middle">{{modalTitle}}</span>
				<!--span class="btn btn-danger pull-right" style="border:1px solid #fff; margin-top:0px" ng-click="closeModal()"><i class="glyphicon glyphicon-remove"></i></span-->
			</div>
			
			<form id="sajiliForm" name="sajiliForm"  ng-submit="submitForm()" novalidate>
			
		  <div class="bordered__box__outer outer_responsive">
		  <div class="bordered__box__inner inner_responsive" style="padding-bottom:10px">
			
			<div class="alert alert-danger alert-dismissible" ng-show="error"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{errorMessage}}</div>
			
			<div class="w3-row form-group">
			<div class="w3-col s12" ng-init="loadLevels()">
				<div class="input-group pull-right-600" style="width:100%">
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Level</div>
					<ui-select name="levelID" ng-model="levelID.selected" theme="bootstrap" ng-change="tazamaMtumiaji()" ng-required="true"> 
						<ui-select-match placeholder="Chagua">{{$select.selected.level_name}}</ui-select-match> 
						<ui-select-choices position="down" repeat="item in levelIDData | filter: $select.search" ui-disable-choice = "(item.levelID == 'w' && w_amesajiliwa) || (item.levelID == 'nw' && nw_amesajiliwa) || (item.levelID == 'ps' && ps_amesajiliwa) || (item.levelID == 'dps' && dps_amesajiliwa) || (item.levelID == 'dahrm' && dahrm_amesajiliwa) || (item.levelID == 'ca' && ca_amesajiliwa) || (item.levelID == 'ra' && ra_amesajiliwa) || (item.levelID == 'tae' && tae_amesajiliwa) || (item.levelID == 'to' && to_amesajiliwa) || (item.levelID == 'pmu' && pmu_amesajiliwa) || (item.levelID == 'masijala' && masijala_amesajiliwa) || (item.levelID == 'hod' && hod_wote_wamesajiliwa) || (item.levelID == 'hu' && hu_wote_wamesajiliwa) || (item.levelID == 'hos' && hos_wote_wamesajiliwa)"> 
						<span ng-bind-html="item.level_name | highlight: $select.search"></span> 
						</ui-select-choices>
					</ui-select>
					<div class="input-group-btn"> 
					<button type="button" class="btn btn_add_on" ng-click="safishaLevelID()"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</div>
			</div>
			</div>
			<div class="w3-row form-group">			
			<!--div class="w3-col s12" ng-init="loadIdara()"-->
			<div class="w3-col s12"> 
				<div class="input-group pull-right-600" style="width:100%">
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">{{idara_kitengo_label}}</div>
					<ui-select name="idara" ng-model="idara.selected" theme="bootstrap" ng-change="loadSections()" ng-disabled="!levelID.selected || disable_idara"> 
						<ui-select-match placeholder="Chagua">{{$select.selected.div_unit_kirefu}}</ui-select-match> 
<ui-select-choices repeat="item in idaraData | filter: $select.search" ui-disable-choice = "(item.div_au_unit == 'unit' && hos_level_selected ) || (item.div_au_unit == 'unit' && hod_level_selected ) || (item.div_au_unit == 'div' && hu_level_selected ) || (item.div_unit_ID == '1001' && hod_level_selected) || (item.div_unit_ID == '1001' && ddahrm_amesajiliwa) || (item.div_unit_ID == '1001' && DAHRM_sections_zimesajiliwa_zote) || (item.div_unit_ID == '1003' && dpp_amesajiliwa) || (item.div_unit_ID == '1003' && DPP_sections_zimesajiliwa_zote) || (item.div_unit_ID == '2001' && dw_amesajiliwa) || (item.div_unit_ID == '2001' && DW_sections_zimesajiliwa_zote) || (item.div_unit_ID == '3001' && dfob_amesajiliwa) || (item.div_unit_ID == '3001' && DFoB_sections_zimesajiliwa_zote) || (item.div_unit_ID == '4001' && dt_amesajiliwa) || (item.div_unit_ID == '4001' && DT_sections_zimesajiliwa_zote) || (item.div_unit_ID == '4002' && doa_amesajiliwa) || (item.div_unit_ID == '4002' && DOA_sections_zimesajiliwa_zote) || (item.div_unit_ID == '1004' && hgcu_amesajiliwa) || (item.div_unit_ID == '1005' && cia_amesajiliwa) || (item.div_unit_ID == '1006' && hpmu_amesajiliwa) || (item.div_unit_ID == '1007' && hlu_amesajiliwa) || (item.div_unit_ID == '1008' && hict_amesajiliwa) || (item.div_unit_ID == '1009' && hrtu_amesajiliwa) || (item.div_unit_ID == '1002' && cca_amesajiliwa) || (item.div_unit_ID == '1002' && hu_level_selected)"> 
						<span ng-bind-html="item.div_unit_kirefu | highlight: $select.search"></span> 
						<span ng-show="(item.div_unit_ID == '1001' && DAHRM_sections_zimesajiliwa_zote) || (item.div_unit_ID == '1003' && DPP_sections_zimesajiliwa_zote) || (item.div_unit_ID == '2001' && DW_sections_zimesajiliwa_zote) || (item.div_unit_ID == '3001' && DFoB_sections_zimesajiliwa_zote) || (item.div_unit_ID == '4001' && DT_sections_zimesajiliwa_zote) || (item.div_unit_ID == '4002' && DOA_sections_zimesajiliwa_zote)" class="icon-check icon_medium_size"></span> 
						</ui-select-choices>
					</ui-select> 
					<div class="input-group-btn"> 
					<button type="button" class="btn btn_add_on" ng-click="safishaIdara()" ng-disabled="!levelID.selected || disable_idara"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</div>
					<!--p class="error validationerror" ng-show="sajiliForm.idara.$invalid && sajiliForm.idara.$touched">Chagua idara..</p-->
			</div>			
			</div>
			<div class="w3-row form-group">
			<div class="w3-col s12"> 
				<div class="input-group pull-right-600" style="width:100%">
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Section</div>
					<ui-select name="section" ng-model="section.selected" theme="bootstrap" ng-disabled="!idara.selected || section_disabled || levelID_disable_section"> 
						<ui-select-match placeholder="Chagua">{{$select.selected.section_name_kirefu}}</ui-select-match> 
						<ui-select-choices repeat="item in sectionData | filter: $select.search" ui-disable-choice = "(item.section_ID == '100101' && ADHRM_amesajiliwa) || (item.section_ID == '100102' && HRM_amesajiliwa) || (item.section_ID == '100301' && PP_amesajiliwa) || (item.section_ID == '100302' && ME_amesajiliwa) || (item.section_ID == '200101' && WD_amesajiliwa) || (item.section_ID == '200102' && WU_amesajiliwa) || (item.section_ID == '200103' && APO_amesajiliwa) || (item.section_ID == '300101' && FD_amesajiliwa) || (item.section_ID == '300102' && BD_amesajiliwa) || (item.section_ID == '400101' && TD_amesajiliwa) || (item.section_ID == '400102' && LC_amesajiliwa) || (item.section_ID == '400201' && CT_amesajiliwa) || (item.section_ID == '400202' && CHDC_amesajiliwa)"> 
						<span ng-bind-html="item.section_name_kirefu | highlight: $select.search"></span> 
						<!--span ng-bind-html=" item.section_ID | highlight: $select.search"></span--> 
						</ui-select-choices>
					</ui-select>
					<div class="input-group-btn"> 
					<button type="button" class="btn btn_add_on" ng-click="safishaSection()" ng-disabled="!idara.selected || section_disabled || levelID_disable_section"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</div>
			</div>
			</div>
			
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Majina</div>
					<input name="f_name" ng-model="f_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})/" class="form-control" placeholder="Jina la kwanza" type="text" ng-required="true" style="margin-left:-1px;border-top-right-radius:4px!important">
					<input name="m_name" ng-model="m_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})/" class="form-control" placeholder="Jina la kati" type="text" ng-required="true" style="margin-top:1px">
					<input name="l_name" ng-model="l_name" ng-pattern="/^([a-zA-Z\.\-]{2,4})+$/" class="form-control" placeholder="Jina la mwisho" type="text" ng-required="true" style="margin-top:1px;border-top-right-radius:0px!important">
					</div>
				</div>
			</div>
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group pull-right-600" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Cheki No</div>
					<input name="username" ng-model="username" placeholder="Cheque no" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control" type="text"  ng-minlength="3" ng-required="true">
					</div>
				</div>
			</div>
			<div class="w3-row form-group">
			<div class="w3-col s12">
				<div class="input-group pull-right-600" style="width:100%">
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Cheo</div>
					<ui-select name="cheo_ID" ng-model="cheo_ID.selected" theme="bootstrap" ng-required="true" ng-change="loadNgazi()" ng-disabled="disable_cheo"> 
						<ui-select-match placeholder="Chagua">{{$select.selected.jina_la_cheo}}</ui-select-match> 
						<ui-select-choices repeat="item in vyeoData | filter: $select.search"> 
						<span ng-bind-html="item.jina_la_cheo | highlight: $select.search"></span>
						<!--span ng-bind-html="item.cheo_ID | highlight: $select.search"></span--> 
						</ui-select-choices>
					</ui-select>
					<div class="input-group-btn"> 
					<button type="button" class="btn btn_add_on" ng-click="safishaCheoID()" ng-disabled="disable_cheo"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</div>
			</div>
			</div>
			<div class="w3-row form-group">
			<div class="w3-col s12">
				<div class="input-group pull-right-600" style="width:100%">
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Salary</div>
					<ui-select name="ngazi_ya_mshahara" ng-model="ngazi_ya_mshahara.selected" theme="bootstrap" ng-required="ulazima_wa_salary_scale" ng-disabled="ana_salary_scale"> 
						<ui-select-match placeholder="Chagua">{{$select.selected.ngazi_ya_mshahara}} {{ngazi_ya_mshahara.selected.daraja_la_mshahara}}</ui-select-match> 
						<ui-select-choices repeat="item in ngaziData | filter: $select.search"> 
						<span ng-bind-html="item.ngazi_ya_mshahara | highlight: $select.search"></span> 
						<span ng-bind-html="item.daraja_la_mshahara | highlight: $select.search"></span> 
						</ui-select-choices>
					</ui-select>
					<div class="input-group-btn"> 
					<button type="button" class="btn btn_add_on" ng-click="safisha_ngazi_ya_mshahara()" ng-disabled="ana_salary_scale"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</div>
			</div>
			</div>
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group pull-right-600" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Simu</div>
					<input name="mob" ng-model="mob" placeholder="Namba ya Simu" ng-pattern="/^[0-9\.\-\+\(\)\ ]+$/" class="form-control" type="text"  ng-minlength="10" ng-required="true">
					</div>
				</div>
			</div>
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Email</div>
					<input name="e_add" ng-model="e_add" ng-pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="Barua Pepe" class="form-control" type="text" ng-required="true">
					</div>
				</div>
			</div>			
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group pull-right-600" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">Leseni</div>
					<input name="leseni" ng-model="leseni" placeholder="Leseni ya udereva" class="form-control" type="text" ng-disabled="!enabled_leseni" ng-required="enabled_leseni">
					</div>
				</div>
			</div>
			<div class="w3-row form-group"> 
				<div class="w3-col s12"> 
					<div class="input-group pull-right-600" style="width:100%"> 
					<div class="input-group-addon w3-light-green" style="width:80px; padding:0px 10px 0px 10px">PF No.</div>
					<input name="pf_no" ng-model="pf_no" placeholder="PF No" class="form-control" ng-required="true">
					</div>
				</div>
			</div>

		
			</div>
			</div>
			
			<div class="form-group wateja_request_form_buttons_margin" align="center">
			<input type="hidden" name="hidden_mfanyakazi_id" value="{{hidden_mfanyakazi_id}}" />
			<div class="btn_ukubwa_wrap">
			  <button type="submit" class="btn btn-success btn_ukubwa" style="border-color:#fff" id="btn_send_request" ng-disabled="sajiliForm.$invalid || hajarudi_sajili_request_form">{{submit_button}}</button>
			  <button type="button" class="btn btn-default btn_ukubwa" style="border-color:#fff" ng-click="futa_sajiliForm()">Futa</button>
			  <button type="button" class="btn btn-warning btn_ukubwa" style="border-color:#fff" ng-click="close_sajiliForm()">Funga</button>
			</div>
			</div>
			
			</form>
			
			<!--div class="w3-text-light-grey" style="width:100%; padding:18px 0px 0px 0px; border:0px solid #fff; border-radius:4px; margin:0px 0px 0px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__bottom__text">WAJIBIKA</span>
				<span class="pull-right"></span>
			</div-->
							
			  </div>		  
            </div>
          </div>
        </div>
		
</div>
</div>  

</div>