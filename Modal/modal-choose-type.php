<?php
  include_once("../Modal/company-form.php");
  include_once("../Modal/applicant-form.php");
?>
<form class="form-signup">
            <div class="modal fade" id="select-action" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><b><h3 class="modal-title" id="H1">Choose Type of Membership</h3></b></center>
                  </div>
                  <div class="modal-body">
                    <center>
                      <form class="form-horizontal" >
                        <div class="form-group">
                          <button type="button" class="btn btn-primary btn-block btn-lg" style="width:90%" id="but-comp" data-toggle="modal" data-target="#select-action2" data-dismiss="modal">Company</button>
                          <button type="button" class="btn btn-primary btn-block btn-lg" style="width:90%" id="but-app" data-toggle="modal" data-target="#select-action3" data-dismiss="modal" >Applicant</button>
                        </div>
                      </form>
                    </center>
                  </div>
                </div>
              </div>
            </div>
</form>