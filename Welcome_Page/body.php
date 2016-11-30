<?php
  
?>
<link href="../css/cover.css" rel="stylesheet">
      <div class="body">
      
          <div id="index">
          <div class="inner-cover"><br><br><br>
            <h1 class="cover-heading">Welcome to CampusHire!</h1>
            <p class="lead">Your e-portal in hiring and seeking job. </p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>
          </div>
          <!-- APPLICANT FORM -->
          <div class="inner-cover" id="applicant-sign-up" style="display:none;">
            <form class="form-horizontal" action="#" method="POST">
              <b><h3>Applicant Account</h3></b>
                  <div class="col-sm-12">
                    <label for="app-name" class="col-sm-2 control-label">Applicant Name</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-name" placeholder="Applicant Name" required>
                <br>
              </div>
            </div>
            <div class="col-sm-12">
              <label for="app-birth" class="col-sm-2 control-label">Birthdate</label>
              <div class="col-sm-10">
                <input type="date"  class="form-control" name="app-birth" placeholder="Birthdate" required>
                <br>
              </div>
            </div>

            <div class="col-sm-12">
              <label for="app-gender" class="col-sm-2 control-label">Gender</label>
              <div class="col-sm-1">
                <input type="radio" name="gender" value="male" checked> Male
              </div> 
              <div class="col-sm-1">
              <input type="radio" name="gender" value="female"> Female<br>
              </div>
              <div class="col-sm-8"></div>
            </div>

            <br>
            <div class="col-sm-12">
              <label for="app-program" class="col-sm-2 control-label">Program</label>
              <div class="col-sm-1">
                <input type="radio" name="program" value="undergraduate" checked>Undergrad
              </div>
              <div class="col-sm-1">
                <input type="radio" name="program" value="graduate">Graduate<br>
              </div>
              <div class="col-sm-8"></div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-course" class="col-sm-2 control-label">Course</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-course" placeholder="Course" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-email" class="col-sm-2 control-label">Email Add</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-email" placeholder="Email Add" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-username" placeholder="Username" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-pass" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password"  class="form-control" name="app-pass" placeholder="Password" required>
                <br>
              </div>
            </div> 
            <br>
            <div class="col-sm-12">
              
              <label for="app-image" class="col-sm-2 control-label">Upload Image
                        </label>
                        <div class="col-sm-2">
                          <span><input type="file" id="imgfile" name="imgfile" onchange="loadFile(event)" required/></span>
                        </div>
                        <div class="col-sm-1">
                          <img id="preview" style="width:100px;height:100px;margin-left:50%;margin-top:-10%" data-src="holder.js" class="img-responsive" alt="Generic placeholder thumbnail" class="col-sm-5" />
                        </div>
                        <script>
                            var loadFile = function (event) {
                                var output = document.getElementById('preview');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
            </div>
             <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
          </form>
        </div>
        <!-- COMPANY FORM-->
          <div class="inner-cover" id="company-sign-up" style="display:none;">
            <form class="form-horizontal" action="#" method="POST">
              <b><h3>Company Account</h3></b>
                  <div class="col-sm-12">
                    <label for="comp-name" class="col-sm-2 control-label">Company Name</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="comp-name" placeholder="Company Name" required>
                <br>
              </div>
            </div>

            <div class="col-sm-12">
              <label for="comp-add" class="col-sm-2 control-label">Company Address</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="comp-add" placeholder="Company Address" required>
                <br>
              </div>
            </div>

            <div class="col-sm-12">
              <label for="comp-email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email"  class="form-control" name="comp-email" placeholder="Company Email" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="comp-num" class="col-sm-2 control-label">Company Number</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="comp-num" placeholder="Company Number" required>
                <br>
              </div>
            </div>

            <div class="col-sm-12">
              <label for="comp-username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="comp-username" placeholder="Username" required>
                <br>
              </div>
            </div>
            <br><br>
            <div class="col-sm-12">
              <label for="comp-pass" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password"  class="form-control" name="comp-pass" placeholder="Password" required>
                <br>
              </div>
            </div>  

            <div class="col-sm-12">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Register</button>
              </div>
            </div>
            </form>
          </div>
        </div>


          
          
          

