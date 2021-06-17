<div class="rstdsidebar" ng-init="fetchStatus()">
<!--div class="" id="logo_main"></div-->
<!--div class="asert " style="font-family:'sansationbold'; font-size:36px;padding:20px 0px 20px 0px; background-color:whiteTTTT; text-align:center; color:#ffd266; border-bottom:1px solid rgba(0,0,0,.1);"><!--span style="display:inline-block; padding-right:5px"><img src="../../images/icons/wajibika_ico.png"></img></span--><!--/div-->
<div class="asert align_row_center_center">
        <center>
          <!--div class="afcg_gov_logo rounded-top" style="margin:0px 0px 0px 0px; background-color:rgba(255,255,255,.5)"></div-->
          <div class="afcg_logo_pic" style="border:0px solid #ffffff; color:#ffffff; background-color:rgba(0,0,0,0)"></div>
          <div class="afcg_logo_text_facility" style="margin-top:0px; border:0px solid #ffffff; color:#ffffff; background-color:rgba(0,0,0,0)">AserT</div>
          <!--div class="afcg_logo_motto" style="margin-top:0px; border:0px solid #ffffff; color:#ffffff; background-color:#d0a92c"></div-->
        </center>
</div>
<nav class="rstdsidebar-nav ps">
<ul class="rstdnav">

<!--menu-->
<li class="rstdnav-item mama">
<a class="rstdnav-link " href="#" ng-click="show_sajili()"><span class="badge badge_unread">{{idadi_incomplete}}</span>Registration</a>
<ul class="rstdnav-dropdown-items "></ul>
</li>

<li class="rstdnav-item mama">
<a class="rstdnav-link " href="#" ng-click="show_assessors_list_panel()"><span class="badge badge_unread">{{}}</span>Assessors</a>
<ul class="rstdnav-dropdown-items "></ul>
</li>

<li class="rstdnav-item rstdnav-dropdown mama">
<a class="rstdnav-link rstdnav-dropdown-toggle " href="#" ng-click="fetchStatus()">Self Assessment</a>
<ul class="rstdnav-dropdown-items ">
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click="show_self_assessment()"><span class="rstdnav-icon"></span><span class="badge badge_unread">{{idadi_approved}}</span>Essential Items</a></li>
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click="show_assessment_sheets_links()"><span class="rstdnav-icon"></span><span class="badge badge_unread">{{idadi_eligible_for_assessment}}</span>Assessment Sheets</a></li>
</ul>
</li>

<li class="rstdnav-item rstdnav-dropdown mama">
<a class="rstdnav-link  rstdnav-dropdown-toggle " href="#">Assessment Reports</a>
<ul class="rstdnav-dropdown-items ">
<li class="rstdnav-item "><a class="rstdnav-link " href="#" ng-click="show_tallying_sheets_links()"><span class="rstdnav-icon"></span><span class="badge badge_unread"></span>Tallying Sheets</a></li>
<li class="rstdnav-item "> <a class="rstdnav-link " href="#"><span class="rstdnav-icon"></span>Assessment Report</a> </li>
<li class="rstdnav-item "><a class="rstdnav-link " href="#"><span class="rstdnav-icon"></span>Other Reports</a></li>
</ul>
</li>

<!--li class="rstdnav-item mama">
<a class="rstdnav-link " href="<php echo $logoutAction; ?>"><span class="badge badge_unread">{{}}</span>Logout</a>
<ul class="rstdnav-dropdown-items "></ul>
</li-->

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