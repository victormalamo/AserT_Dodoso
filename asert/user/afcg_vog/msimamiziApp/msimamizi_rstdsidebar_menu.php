<div class="rstdsidebar" ng-init="fetchStatus()">
<div id="logo_main"></div>
<div style="font-family: 'Krona One', sans-serif; font-size:20px; font-weight:400;padding:20px 0px 20px 0px; background-color:white; text-align:center; color:#000000; border-right:1px solid #cccccc"><span style="display:inline-block; padding-right:5px"><img src="../../images/icons/wajibika_ico.png"></img></span><span class="w3-text-light-green">W</span>AJIBIKA</div>
<nav class="rstdsidebar-nav ps">
<ul class="rstdnav">

<!--menu-->
<!--li class="rstdnav-item mama">
<a class="rstdnav-link " href="#" ng-click="show_sajili()"><span class="badge bg-google-plus">{{idadi_new_facilities}}</span>Registration</a>
<ul class="rstdnav-dropdown-items "></ul>
</li-->

<li class="rstdnav-item rstdnav-dropdown mama">
<a class="rstdnav-link rstdnav-dropdown-toggle " href="#" ng-click="fetchStatus()">Facilities</a>
<ul class="rstdnav-dropdown-items ">
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click="show_sajili()"><span class="rstdnav-icon"></span><span class="badge bg-google-plus">{{idadi_new_facilities}}</span>Registered</a></li>
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click=""><span class="rstdnav-icon"></span><span class="badge bg-google-plus">{{idadi_approved_facilities}}</span>Approved</a></li>
</ul>
</li>

<!--li class="rstdnav-item mama">
<a class="rstdnav-link " href="#" ng-click=""><span class="badge bg-google-plus">{{}}</span>Approved</a>
<ul class="rstdnav-dropdown-items "></ul>
</li-->

<li class="rstdnav-item rstdnav-dropdown mama">
<a class="rstdnav-link rstdnav-dropdown-toggle " href="#" ng-click="fetchStatus()">Assessors</a>
<ul class="rstdnav-dropdown-items ">
<li class="rstdnav-item "><a class="rstdnav-link " href="#"  ng-click="show_applied_assessors_list()"><span class="rstdnav-icon"></span><span class="badge bg-google-plus">{{idadi_new_assessors}}</span>Application</a></li>
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click=""><span class="rstdnav-icon"></span><span class="badge bg-google-plus">{{idadi_approved_assessors}}</span>Approved</a></li>
</ul>
</li>

<li class="rstdnav-item rstdnav-dropdown mama">
<a class="rstdnav-link  rstdnav-dropdown-toggle " href="#">Reports</a>
<ul class="rstdnav-dropdown-items ">
<li class="rstdnav-item "><a class="rstdnav-link " href="#"><span class="rstdnav-icon"></span>...</a></li>
<li class="rstdnav-item "><a class="rstdnav-link " href="#"><span class="rstdnav-icon"></span>...</a> </li>
</ul>
</li>

<!--li class="rstdnav-item ">
<a class="rstdnav-link " href="#">Tangaza</a>
<ul class="rstdnav-dropdown-items "></ul>
</li-->

<!--li class="rstdnav-item mt-auto ">
<a class="rstdnav-link bg-blue " href="" target="_top">
<i class="rstdnav-icon cui-cloud-download"></i>Pakua App</a>
</li-->
<!--end menu-->

</ul>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"> 
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>    
    <div class="ps__rail-y" style="top: 0px; right: 0px;"> 
      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</nav>
</div>