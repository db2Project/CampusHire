<?php

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<div class="container-fluid">

        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
            <div id="applicant-profile" >
                <h1 class="page-header"><span class="glyphicon glyphicon-home"></span> Profile</h1>
                <h2 class="sub-header"><span class="glyphicon glyphicon-info-sign"></span> Account Info</h2>
                    <div class="row placeholders">
            	         <div class="col-xs-6 col-sm-4 placeholder">
                          <img  src="../Pictures/bg1.jpg" style="width:250px;height:250px" data-src="holder.js/250x250/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail"/>
                          <h4><span class="glyphicon glyphicon-camera"></span></h4>
                            <a data-toggle="modal" data-target="#edit" ><span >Click to edit info</span></a>
                          </div>
                    <div class="col-xs-6 col-sm-8 placeholder pull-left text-justify">
                          <div style="margin-top:5px"><span class="text-muted">Applicant Name :</span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" >Applicant Address :</span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Birthdate :</span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Gender :</span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Program : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Course : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Email Add : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Username : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Password : </span><label><?php ?></label><br /></div>
                    </div>
                    </div>      
            </div>
        </div>
        <!-- end body -->
</div>