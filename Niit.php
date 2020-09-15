<!DOCTYPE html>
<html lang="en">

<head>
    <title> My Repository</title>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="css/workstyle.css" rel="stylesheet"> 
</head>


<body>

<!--Main Navigation-->
<header>

  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><strong>IBRAHIM'S LIBRARY</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="nav-linkid">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opinions</a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav>

</header>

<br>
<?php
/* echo "Welcome " .$_POST['username'];  */
echo "<h1> WELCOME " .$_POST['username']."</h1>";
/* echo "<h3> Today is " . date("Y/m/d") ."</h3>"; */
echo "<h4> Please Wash your hands"."</h4>";
print date("m/d/y G.i:s<br>", time());


?>
<br><br><br>

<a  href="registration.php" class="link"> Customer registration</a>
<a  href="registration.php" class="link">Calculator</a>
<a  href="registration.php" class="link"> Loan calculator</a>
<a  href="registration.php" class="link"> Area of a regular triangle</a>


<!-- <h3 class="customer"> Customer Information</h3>
<br>
<form  action="confirmation.php" method="post" class="first-form">
<label> Firstname:</label><br>
<input type="text" name="fname" id="" placeholder="Please insert firstname"  size="30"><br><br>

<label>Lastname:</label><br>
<input type="text" name="lname" id="" placeholder=" Please insert lastname "  size="30"><br>
<br>

<label> Gender: </label><br>
<select name="Gender" id="Gender" >
  <option value="Male">Male</option>
  <option value="Female" >Female</option>
</select><br><br>
 
<label> Address: </label><br>
<input type="text" name="address" id=""   placeholder=" Please insert employees address"  size="30"><br><br>

<label> Phone: </label><br>
<input type="text" name="phone" id="" placeholder=" Please insert  phone number" size="30">
<br><br>
 
<input  type="submit" name="cal" value="Register" class="sub-btnn" >
<button type="button" class="btn btn-danger">Danger</button> -->
</form> 
</body>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</html>





