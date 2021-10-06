<div class="modal left fade" id="search_panel" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" >
	<div class="modal-dialog" role="document"> 
		<div class="modal-content dawati-bgTTTT" style="background-color:#f5f5f5">
			<div class="" style="width:100%; margin-top:0px; padding:15px 15px 12px 15px; height:59px; background-color: rgba(61,138,101,0)"> 
				<span>
				<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="show_mteja_menu()">
				<span class="rstdnavbar-toggler-icon_hamburger"></span>
				</button>
				</span>
				<div class="pull-right">
					<button class="rstdnavbar-toggler rstdsidebar-toggler" type="button" ng-click="close_search()">
					<span class="rstdnavbar-toggler-icon_close"></span>
					</button>
				</div>
			</div>
			<!--div class="modal-body wrap_center_outer_search">
				<div class="wrap_center_inner_search"> 
					<form class="popover__search-form" action="https://www.maliasili.go.tz/search/">
						<input  id="tafuta_kwenye_dawati" class="popover__search-input" name="tafuta_kwenye_dawati" ng-model="tafuta_kwenye_dawati" placeholder="Andika Unachotafuta..." autocomplete="off" type="search">
						<button type="submit" class="popover__search-submit"><span>Tafuta</span></button>
					</form>
				</div>
			</div-->
			<div class="modal-body wrap_center_outer_search">
				<div class="wrap_center_inner_search"> 
					<!--form class="popover__search-form" action="tafuta/" id="search_form" method="GET">
						<input id="list_search" class="popover__search-input" name="q" ng-model="tafuta_kwenye_dawati" placeholder="Andika Unachotafuta..." autocomplete="off" type="search">
						<button type="submit" class="popover__search-submit"><span>Tafuta</span></button>
					</form-->
					  <div class="grid-wrapper"> 
						<div class="search-bar legal"> 
						  <form id="search_form" action="tafuta/" method="GET" target="_top">
							<input id="list_search" name="q" class="input" ng-model="tafuta_kwenye_dawati" autocomplete="off" placeholder="Andika Unachotafuta" type="search">
							<button type="submit" class="search-bar__submit"><span class="search-bar__submit-ico"></span></button>
						  </form>
						</div>
					  </div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>