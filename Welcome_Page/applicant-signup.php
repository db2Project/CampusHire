
          <!-- COMPANY -->
          <div class="applicant-sign-up" id="applicant-sign-up" style="display:none;">
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
              <div class="col-sm-10">
                <input type="radio" name="gender" value="male" checked> Male 
              <input type="radio" name="gender" value="female"> Female<br>
              </div>
            </div>

            <br>
            <div class="col-sm-12">
              <label for="app-program" class="col-sm-2 control-label">Program</label>
              <div class="col-sm-10">
                <input type="radio" name="program-undergrad" value="undergraduate" checked>Undergraduate
              <input type="radio" name="program-grad" value="graduate">Graduate<br>
              </div>
            </div>

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
                  <input type="file" id="imgfile" name="imgfile" onchange="loadFile(event)" required/>
                        </label>
                        <div class="col-sm-10">
                            <div class="placeholder">
                            <br><br>
                                <img id="preview" style="width:100px;height:100px;margin-left:50%;margin-top:-10%" data-src="holder.js" class="img-responsive" alt="Generic placeholder thumbnail"/>
                            </div>
                            </div>
                        <script>
                            var loadFile = function (event) {
                                var output = document.getElementById('preview');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
            </div>
             <div class="col-sm-12">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Register</button>
              </div>
            </div>
          </form>
        </div>