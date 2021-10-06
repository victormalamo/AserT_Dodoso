<div class="modal fade" tabindex="-1" role="dialog" id="mtumiajimodal" data-keyboard="false" data-backdrop="static">

  <div class="modal-dialog modal-dialog-to-viewport" role="document"> 
    <div class="modal-content modal-content-head-foot-bg"> 
      <!--form method="post" ng-submit="submitForm()"-->
      <form name="sajiliForm"  ng-submit="submitForm()" novalidate>
        <div class="modal-header w3-blue w3-border-blue"> 
          <h4 class="modal-title">{{modalTitle}}</h4>
          <!--button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button-->
        </div>
        <div class="modal-body modal-body-to-viewport w3-light-grey">		
		
          <div class="alert alert-danger alert-dismissible" ng-show="error"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            {{errorMessage}}</div>
          <div class="form-group" ng-init="loadIdara()"> 
            <div class="input-group"> <ui-select name="idara" ng-model="idara.selected" theme="bootstrap" ng-change="loadSections()" ng-required="true"> 
              <ui-select-match placeholder="Idara..">{{$select.selected.div_unit_kirefu}}</ui-select-match> 
              <ui-select-choices repeat="item in idaraData | filter: $select.search"> 
              <span ng-bind-html="item.div_unit_kirefu | highlight: $select.search"></span> 
              <span ng-bind-html=" item.div_unit_ID | highlight: $select.search"></span> 
              </ui-select-choices> </ui-select> 
              <div class="input-group-btn"> 
                <button type="button" class="btn btn-default" ng-click="safishaIdara()"><span class="glyphicon glyphicon-remove"></span></button>
              </div>
            </div>
            <!--p class="error validationerror" ng-show="sajiliForm.idara.$invalid && sajiliForm.idara.$touched">Chagua idara..</p-->
          </div>
          <div class="form-group"> <ui-select name="section" ng-model="section.selected" theme="bootstrap" ng-disabled="!idara.selected || section_disabled"> 
            <ui-select-match placeholder="Section..">{{$select.selected.section_name}}</ui-select-match> 
            <ui-select-choices repeat="item in sectionData | filter: $select.search"> 
            <span ng-bind-html="item.section_name | highlight: $select.search"></span> 
            <span ng-bind-html=" item.section_ID | highlight: $select.search"></span> 
            </ui-select-choices> </ui-select> </div>
          <div class="form-group" ng-init="loadLevels()"> <ui-select name="levelID" ng-model="levelID.selected" theme="bootstrap" ng-change="tazamaMtumiaji()" ng-required="true"> 
            <ui-select-match placeholder="User level...">{{$select.selected.label}}</ui-select-match> 
            <ui-select-choices repeat="item in levelIDData | filter: $select.search"> 
            <span ng-bind-html="item.label | highlight: $select.search"></span> 
            </ui-select-choices> </ui-select> </div>
          <div class="form-group"> 
            <input name="f_name" ng-model="f_name" class="form-control" type="text" placeholder="Jina la kwanza.." ng-required="true">
            <div class="error validationerror" ng-show="sajiliForm.f_name.$invalid && sajiliForm.f_name.$touched">Jina 
              la kwanza linahitajika..</div>
          </div>
		  <!-------------------LEARN div class="form-group">
				<div style="height:100px; overflow:auto;" ng-scrollbar scrollbar-x="false" scrollbar-y="true" scrollbar-config="{show:true, autoResize: true, dragSpeed: 1.2}">
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				<li>ng-scrollbar haioneshi scroll kwenye bd modal</li>
				
				</div>
		  </div------------------------------------------->
		  <div class="form-group"> 
            <input name="m_name" ng-model="m_name" class="form-control" type="text" placeholder="Jina la kati..">
          </div>
          <div class="form-group"> 
            <input name="l_name" ng-model="l_name" class="form-control" type="text" placeholder="Jina la mwisho.." ng-required="true">
            <div class="error validationerror" ng-show="sajiliForm.l_name.$invalid && sajiliForm.l_name.$touched">Jina 
              la mwisho linahitajika..</div>
          </div>
          <div class="form-group"> 
            <input name="mob" ng-model="mob" class="form-control" type="text" placeholder="Namba ya simu.." ng-required="true">
            <div class="error validationerror" ng-show="sajiliForm.mob.$invalid && sajiliForm.mob.$touched">Namba 
              ya simu inahitajika..</div>
          </div>
          <div class="form-group"> 
            <input name="e_add" ng-model="e_add" class="form-control" type="email" placeholder="Anuani ya barua pepe..">
            <div class="error validationerror" ng-show="sajiliForm.e_add.$invalid && sajiliForm.e_add.$touched">Andika 
              anuani sahihi..</div>
          </div>
          <div class="form-group"> 
            <input name="username" ng-model="username" class="form-control" type="text" placeholder="Cheque no.." ng-required="true">
            <div class="error validationerror" ng-show="sajiliForm.username.$invalid && sajiliForm.username.$touched">Cheki 
              namba inahitajika..</div>
          </div>
          <div class="form-group"> 
            <input name="leseni" ng-model="leseni" class="form-control" type="text" placeholder="Leseni ya udereva..." ng-show="showing_leseni">
          </div>
          <div class="form-group"> 
            <input name="pf_no" ng-model="pf_no" class="form-control" type="text" placeholder="PF No.." ng-required="true">
            <div class="error validationerror" ng-show="sajiliForm.pf_no.$invalid && sajiliForm.pf_no.$touched">PF.No 
              inahitajika...</div>
          </div>
          <div class="form-group" ng-init="loadVyeo()"> <ui-select name="cheo_ID" ng-model="cheo_ID.selected" theme="bootstrap" ng-required="true"> 
            <ui-select-match placeholder="Cheo...">{{$select.selected.jina_la_cheo}}</ui-select-match> 
            <ui-select-choices repeat="item in vyeoData | filter: $select.search"> 
            <span ng-bind-html="item.jina_la_cheo | highlight: $select.search"></span> 
            <span ng-bind-html="item.cheo_ID | highlight: $select.search"></span> 
            </ui-select-choices> </ui-select> </div>
          <div class="form-group" ng-init="loadNgazi()"> <ui-select name="ngazi_ya_mshahara" ng-model="ngazi_ya_mshahara.selected" theme="bootstrap" ng-required="true"> 
            <ui-select-match placeholder="Ngazi ya mshahara..">{{$select.selected.ngazi_ya_mshahara}} 
            {{ngazi_ya_mshahara.selected.daraja_la_mshahara}}</ui-select-match> 
            <ui-select-choices repeat="item in ngaziData | filter: $select.search"> 
            <span ng-bind-html="item.ngazi_ya_mshahara | highlight: $select.search"></span> 
            <span ng-bind-html="item.daraja_la_mshahara | highlight: $select.search"></span> 
            </ui-select-choices> </ui-select> </div>
        </div>
		
		<div class="modal-footer w3-light-grey"> 
          <input type="hidden" name="hidden_mfanyakazi_id" value="{{hidden_mfanyakazi_id}}" />
          <!--input type="submit" name="submit" class="btn btn-info" value="{{submit_button}}" ng-disabled="true"/-->
          <button type="submit" class="btn btn-primary btn-md" ng-disabled="sajiliForm.$invalid">{{submit_button}}</button>
          <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>  

</div>