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
    </div>