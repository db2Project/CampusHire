<?php
  
?>
<form>
  <div class="modal fade" id="select-action1" role="dialog">
  	<div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <b><h3 class="modal-title" id="log-inLabel">Please Log In</h3></b>
         </div>
         <div class="modal-body">
            <label for="inputEmail" class="sr-only">User name</label>
               <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required><br>
            <label for="inputPassword" class="sr-only">Password</label>    
               <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>              
         </div>
         <div class="modal-footer">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button type="button" class="btn btn-primary btn" data-dismiss="modal" >Log in</button>
        </div>
     </div>
   </div>
  </div>
</form>
