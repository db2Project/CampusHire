<?php

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <!-- sidebar -->
     
    <!--  end -->
        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
          <div id="list-job" style="display: none;">
                        <h1 class="page-header"><span class="glyphicon glyphicon-th-list"></span> View Vacant Job</h1>
                        <h2 class="sub-header">List of Vacant Job</h2>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Job</th>
                                <th>Detail</th>
                                <th>Company</th>
                                <th>Email Add</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Wil</td>
                                <td>Lorem</td>
                                <td>ipsum</td>
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