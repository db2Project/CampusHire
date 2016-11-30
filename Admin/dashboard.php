<?php
  include_once("../Function/functions.php");
?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<title>Company | Dashboard</title>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CampusHire</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                 <div class="navbar-header pull-right" style="margin-right:1%">
                      <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Admin &nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                           <li onclick="profile()"><a>Profile</a></li>
                           <li><a href="../functions/log-out.php">Log-out</a></li>
                        </ul>
                  </div>
        </div>
    </nav>
    <div class="container-fluid">
    <!-- sidebar -->
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" >Company Name<?php ?><span class="sr-only">(current)</span></a></li>
            <li><a href="#" onclick="applicant()">View Applicants Account</a></li>
            <li><a href="#" onclick="postJob()">Post Job Vacancy</a></li>
          </ul>
        </div>
    <!--  end -->
        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
        
            <!-- company activity -->
            <div id="company-activity">
              <h1 class="page-header"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h1>
              <h2 class="sub-header">Company Activity</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID #</th>
                      <th>Job</th>
                      <th>Date Posted</th>
                      <th>Date Modified</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td><span class="glyphicon glyphicon-remove" style="color: red"><span class="glyphicon glyphicon-edit" style="color: blue"></span></td>
                    </tr>
                    <tr>
                      <td>1,002</td>
                      <td>amet</td>
                      <td>consectetur</td>
                      <td>adipiscing</td>
                      <td>elit</td>
                      <td><span class="glyphicon glyphicon-remove" style="color: red"><span class="glyphicon glyphicon-edit" style="color: blue"></span></td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>

            <!-- Company profile -->
              <div id="company-profile" style="display:none;">
              <h1 class="page-header"><span class="glyphicon glyphicon-home"></span> Profile</h1>
              <h2 class="sub-header"><span class="glyphicon glyphicon-info-sign"></span> Account Info</h2>
              <div style="margin-top:5px"><span class="text-muted">Company Name :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" >Company Address :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Email :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Company Numnber :</span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Username : </span><label><?php ?></label><br /></div>
              <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Password : </span><label><?php ?></label><br /></div>
              <a href="../Controller/welcome.php" onclick="myFunction()"><br><span >Click to edit info</span></a>
              </div>

            <!-- List of Student -->
            <div id="applicant-list" style="display:none;">
              <!-- <div class="col-md-12"> -->
                <!-- <div class="col-md-6"> -->
                  <h1 class="page-header"><span class="glyphicon glyphicon-th-list"></span> List of Applicants</h1>
                <!-- </div> -->
                <!-- <div class="col-md-6"> -->
                  
                <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Program</th>
                      <th>Course</th>
                      <th>Email Add</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Wil</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td href="">sit</td>
                    </tr>
                </table>
              </div>
              <form class="navbar-form form-inline pull-right" style="margin-right:3%" method="GET" action="">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><span style="color:green" class="glyphicon glyphicon-search"></span></div>
                          <input required title="Search" type="text" class="form-control" id="tags" name="tags" placeholder="Search Course">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary" style="width:80px">Search</button>
              </form>
            </div>
              <!-- </div> -->

          <!-- POST JOB FORM -->
          <div id="post-job" style="display: none;">
            <h1 class="page-header"><span class="glyphicon glyphicon-pushpin"></span> Post Job</h1>
            <label for="job-title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="job-title" placeholder="Job Title" required>
                <br>
              </div>
            <label for="job-description" class="col-sm-2 control-label">Job Description</label>
            <div class="col-sm-10">
                <textarea class="col-md-12" rows="10" placeholder="Job Description" required></textarea>
                <br>
              </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Post</button>
              </div>
          </div>

        </div>
        <!-- end body -->
    </div>
   </body>