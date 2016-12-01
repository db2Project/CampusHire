<?php
  include_once("../Modal/company-form.php");
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div id="company" style="display: none;">
          <div class="form-group">
              <h1 class="page-header"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h1>
              <h2 class="sub-header">List of Company</h2>
              <div class="col-md-10">
                        <div class="input-group">
                          <div class="input-group-addon"><span style="color:green" class="glyphicon glyphicon-search"></span></div>
                          <input required title="Search" type="text" class="form-control" id="tags" name="tags" placeholder="Search Company Name">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary" style="width:80px">Search</button>
          </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Adress</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>LifeBit</td>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td><span class="glyphicon glyphicon-remove" style="color: red"><span class="glyphicon glyphicon-edit" style="color: blue"></span></td>
                    </tr>
                    <tr>
                      <td>Ingenuity</td>
                      <td>amet</td>
                      <td>consectetur</td>
                      <td>adipiscing</td>
                      <td>elit</td>
                      <td>elit</td>
                      <td><span class="glyphicon glyphicon-remove" style="color: red"><span class="glyphicon glyphicon-edit" style="color: blue"></span></td>
                    </tr>
                    </tbody>
                </table>
              </div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#select-action2">Add</button>
              </div>
          </div>