<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
?>

        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
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
        <!-- end body -->
    </div>