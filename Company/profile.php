<?php
  include_once ("../Modal/company-form.php");
?>
    <div class="container-fluid">
<div class="row">
          <!--  beginning-->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">Menu<?php ?><span class="sr-only">(current)</span></a></li>
            <li><a href="#" onclick="profile()">Profile</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#" onclick="applicant()">View Applicants Account</a></li>
            <li><a href="#" onclick="postJob()">Post Job Vacancy</a></li>
          </ul>
        </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <div id="company-profile" style="display:none;">
              <h1 class="page-header"><span class="glyphicon glyphicon-home"></span> Profile</h1>
              <h2 class="sub-header"><span class="glyphicon glyphicon-info-sign"></span> Account Info</h2>
              <div style="margin-top:5px"><span class="text-muted">Company Name :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" >Company Address :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Email :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Company Numnber :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Username : </span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Password : </span><label><?php ?></label><br /></div>
              <a href="#" data-toggle="modal" data-target="#select-action3" ><br><span >Click to edit info</span></a>
              </div>

              </div>
    </div>