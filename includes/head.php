<!DOCTYPE html>
<html lang="en">
<head>
  <title>SQL Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $(':checkbox.allhordes').change(function(){$(':checkbox.horde').prop('checked', this.checked);}); //Horde
    $(':checkbox.allallies').change(function(){$(':checkbox.alliance').prop('checked', this.checked);}); //Alliance
    $(':checkbox.allraces').change(function(){$(':checkbox.allowrace').prop('checked', this.checked);}); //All Races
    $(':checkbox.allclasses').change(function(){$(':checkbox.class').prop('checked', this.checked);}); //All Classes

    $(".inputbar").click(function(){
      $(this).next().slideToggle();
    });

    $('#class').change(function() {
      var test = $(this).val();
      if(test == 2 || test == 4) {
        $('#subclassgroup').show();
      }else{
        $('#subclassgroup').hide();
      }
    });

  });
  </script>
</head>
<body>

<div id="regModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration</h4>
        </div>
        <div class="modal-body">
          <form action="functions/register.php" autocomplete="off" method="POST" class="myform">
            <div class="form-group">
              <input type="text" class="form-control" name="userName" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="passWord" placeholder="Password" required>
            </div>
        <input type="submit" style="display:block;margin:10px auto 0 auto;" class="btn btn-success" value="Register">
          </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      <form action="functions/login.php" autocomplete="off" method="POST" class="myform">
        <div class="form-group">
          <input type="text" class="form-control" name="userName" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="passWord" placeholder="Password" required>
        </div>
        <input type="submit" style="display:block;margin:10px auto 0 auto;" class="btn btn-success" value="Login">
      </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </div>
</div>
