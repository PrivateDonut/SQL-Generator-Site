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
