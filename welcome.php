<?php

session_start();
 

/*if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--<script>
    /*$(document).ready(function() {
    $(function() {
    $("#dialog").dialog({
    autoOpen: false
    });
    $("#enter").dialog({
    autoOpen: false
    });
    $("#button1").on("click", function() {
    $("#create").dialog("open");
    });
    });
    $("#enter_chat").on("click", function() {
    $("#enter").dialog("open");
    });
    });*/
    // Validating Form Fields.....
    /*$("#createChat").click(function(e) {
    
    var chatName = $("#chatName").val();

    var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
    if (email === '' || name === '') {
    alert("Please fill all fields...!!!!!!");
    e.preventDefault();
    } else if (!(email).match(emailReg)) {
    alert("Invalid Email...!!!!!!");
    e.preventDefault();
    } else {
    alert("Form Submitted Successfully......");
    }
    });
    });*/
  </script>-->

  <style>
    
    body {
      background-color:#c95553;
      width:100%;
      height: auto;


    }
    .container-fluid {
    background-color:#c95553;
    }
    .row.content {height: auto;}
    
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      color:#c95553;
      padding-bottom: 10%;
      box-shadow:5px 2px 5px #f1f1f1;
    }
    
    
   
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Chat Application</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="welcome.php">Home</a></li>
            <div class="dropdown">
              <button class="dropbtn">Chat Now</button>
              <div class="dropdown-content">
                  <div class="container">
                  <div class="main">
                  <div id="dialog" title="Create Chat">
                  <form action="chat.php" method="post">
                  <label> Chat Name:</label>
                  <input id="chatName" name="chatName" type="text">

                  <input id="createChat" type="submit" value="Submit">
                  </form>
                  </div>


                  <!--<div id="enter" title="Enter Chat">
                  <form action="chat.php" method="post">
                  <label>Enter Chat ID:</label>
                  <input id="chatid" name="chatid" type="integer">

                  <input id="enterChat" type="submit" value="Submit">
                  </form>
                  </div>-->
                <input id="button1" type="button" value="Create Chat">
                <input id="button2" type="button" value="Open Dialog Form">
              </div>
            </div>
              </div>
          </div>
        <li><a href="chat.php">Enter chat</a></li>

        <li><a href="reset_password.php">Reset password</a></li>
        <li><a href="logout.php">Sign out of your account</a></li>
      </ul><br>
     
    </div>

    <div class="col-sm-9">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome back.</h1>
    </div>
   
      
  </div>



</body>
</html>