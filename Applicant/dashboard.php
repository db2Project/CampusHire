<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
  include_once("../Applicant/profile.php");
  include_once("../Applicant/list-of-company.php");
  include_once("../Applicant/list-of-job.php");

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
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" >Menu<?php ?><span class="sr-only">(current)</span></a></li>
            <li><a href="dashboard.php" >Profile</a></li>
            <li><a href="#" onclick="dashboardA()">View Company Account</a></li>
            <li><a href="#" onclick="jobvacany()">View Job Vacancy</a></li>
          </ul>
        </div>
    <!--  end -->
   </body>