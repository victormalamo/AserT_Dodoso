<div class="modal left fade" id="not_vetted_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" ng-init="fetch_not_vetted()">
		
    <div class="modal-dialog" role="document"> 
      <div class="modal-content dawati-bgTTTT" style="background-color: rgba(0,0,0,.75)"> 
        <div class="modal-body w3-text-white" style="padding-bottom:0px"> 
	  
          <div class="container" style="max-width:800px; border-radius:4px; padding:4px 4px 4px 4px; background-color: rgba(61,138,101,1); margin-top:-10px"> 
            <div class="div-content-inner-to_viewport" style="max-width:800px; border:1px solid #fff; border-radius:2px; padding: 25px 25px 25px 25px; margin-left:auto; margin-right:auto"> 
			  <div class="">
			  
			<div class="" style="width:100%; padding:0px 0px 6px 0px; margin:0px 0px 15px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__top__title" style="vertical-align:middle">NOT VETTED</span>
				<span class="btn btn-danger pull-right" style="border:1px solid #fff; margin-top:0px" ng-click="close_not_vetted()"><i class="glyphicon glyphicon-remove"></i></span>
			</div>
			
			<div class="bordered__box__outer outer_mstari">
			<div class="bordered__box__inner inner_mstari" style="">

			<div class="table-responsive" style="overflow-x: unset"> 
			<table id="orodha_ya_watumishi" datatable="ng" dt-options="vm.dtOptions" class="table table-bordered border-lightgreen">
			  <thead style="white-space: wrap;">
				<tr class="" style="height:35px"> 
				  <th style="vertical-align:middle; width:100px" class="table__thead border-lightgreen">TIKETI</th>
				  <th style="vertical-align:middle; width:20px" class="table__thead border-lightgreen">KUNDI</th>
				  <th style="vertical-align:middle" class="table__thead border-lightgreen">JINA</th>
				  <th style="vertical-align:middle" class="table__thead border-lightgreen">NCHI</th>
				  <th data-orderable="false" style="vertical-align:middle" class="table__thead border-lightgreen"></th>
				</tr>
			  </thead>
			  <tbody style="white-space: nowrap;">
				<tr ng-repeat="mtumiaji in not_vettedData"> 
				  <td style="vertical-align:middle" class="table__tbody border-lightgreen">{{mtumiaji.ticket_id}}</td>
				  <td style="vertical-align:middle" class="table__tbody border-lightgreen">{{mtumiaji.category}}</td>
				  <td style="vertical-align:middle" class="table__tbody border-lightgreen">{{mtumiaji.majina_kamili}}</td>
				  <td style="vertical-align:middle" class="table__tbody border-lightgreen">{{mtumiaji.nchi}} <span style="opacity:0.5">{{mtumiaji.mkoa}}</span></td>
				  <td style="vertical-align:middle" align="right" class="table__tbody border-lightgreen">
				  <button type="button" ng-click="ticketDetails(mtumiaji.ticket_id)" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button>
				  <button type="button" ng-click="deleteTicket(mtumiaji.ticket_id)" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
				  </td>
				</tr>
			  </tbody>
			</table>
			</div>
			
			</div>
			</div>
			
			<div class="w3-text-light-grey" style="width:100%; padding:18px 0px 0px 0px; border:0px solid #fff; border-radius:4px; margin:0px 0px 0px 0px; background-color: rgba(0,0,0,0)">
				<span class="modal__bottom__text">Dawati</span>
				<span class="pull-right"></span>
			</div>
							
			  </div>		  
            </div>
          </div>
        </div>
		
</div>
</div>
</div>