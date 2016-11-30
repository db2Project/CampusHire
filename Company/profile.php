<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
?>

        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
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
</div>
        <!-- end body -->
    </div>