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
<div id="applicant-list" style="display:none;">
                  <h1 class="page-header"><span class="glyphicon glyphicon-th-list"></span> List of Applicants</h1>
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

            </div>
    </div>