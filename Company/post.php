<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
?>

        <!-- body -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="dashboard-body">
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