<?php
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
  </div>
    </div>