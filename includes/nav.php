<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="?p=home">SQLGen</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=home">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Create <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?p=item">Create Item</a></li>
          <li><a href="?p=creature">Create Creature</a></li>
          <li><a href="?p=vendor">Create Vendor</a></li>
        </ul>
      </li>
      <li><a href="#">How to Use</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php  if(isset($_SESSION['username'])) {
      echo "<li><a href=\"functions/logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>";
      }else {
      echo "<li><a href=\"#\" data-toggle=\"modal\" style=\"outline:none;\" data-target=\"#regModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Signup</a></li>";
      echo "<li><a href=\"#\" data-toggle=\"modal\" style=\"outline:none;\" data-target=\"#loginModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";
    } ?>
    </ul>
  </div>
</div>
</nav>
<div class="container">
  <div class="row">
