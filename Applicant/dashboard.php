<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<title>Applicant | Dashboard</title>
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
          <a class="navbar-brand" href="../Controller/welcome.php">CampusHire</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                 <div class="navbar-header pull-right" style="margin-right:1%">
                      <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Applicant &nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">  
                           <li><a href="">Log-out</a></li>
                        </ul>
                  </div>
        </div>
    </nav>
    <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" >Menu<?php ?><span class="sr-only">(current)</span></a></li>
            <li><a href="dashboard.php" >Profile</a></li>
            <li><a href="#" onclick="dashboardA()">View Company Account</a></li>
            <li><a href="#" onclick="jobvacany()">View Job Vacancy</a></li>
          </ul>
        </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
    

    <div id="list-company" style="display: none;">
    <h1 class="page-header"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h1>
              <h2 class="sub-header">List of Company </h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact #</th>
                      <th>Email Add</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                    </tr>
                    <tr>
                      <td>1,002</td>
                      <td>amet</td>
                      <td>consectetur</td>
                      <td>adipiscing</td>
                    </tr>
                    </tbody>
                </table>
              </div>
    </div>

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
    <!--  end -->
   </body>