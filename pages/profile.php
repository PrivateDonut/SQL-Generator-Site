<?php
if (!isset($_SESSION['username'])) {
  header('HTTP/1.1 403 Forbidden');
  exit();
}
?>

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">User Profile</div>
    <div class="panel-body">
    <form action="functions/profile.php" autocomplete="off" method="POST" class="myform">
        <div class="inputgroup">
        <div class="form-group">
        <label class="col-sm-2 control-label" for="textinput">Username</label>
        <div class="col-sm-10">
         <input type="text" name="userName" value="<?php echo $_SESSION['username'] ?>" class="form-control" disabled>
        </div>
        <label class="col-sm-2 control-label" for="textinput">Email</label>
        <div class="col-sm-10">
         <input type="text" name="email" value="<?php echo "Edit this..." ?>" class="form-control">
        </div>
        <label class="col-sm-2 control-label" for="textinput">Password</label>
        <div class="col-sm-10">
         <input type="text" name="passWord" placeholder="Password" class="form-control">
        </div>
        <div class="clearfix"></div>
       </div>
        <input type="submit" class="btn btn-success" style="display:block;margin:10px auto 0 auto;" value="Update Profile">
      </form>
      </div>
    </div>
  </div>
</div>
