<!doctype html>
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
<h3 class="customer">Please Kindly Cross Check Your information before Registering</h3><hr>
<form  action="" method="POST" class="first-form" onsubmit="return showAlert()">
<label> Firstname:</label><br>
<input type="text" name="fname" id="" placeholder="Please insert firstname"  value="<?php echo $firstname=$_POST['fname'];?>" size="30"><br><br>

<label>Lastname:</label><br>
<input type="text" name="lname" id="" placeholder=" Please insert lastname "  value="<?php echo $_POST['lname'];?>" size="30"><br>
<br>

<label> Gender: </label><br>
<input type="text" name="f" id=""  placeholder=" Please insert gender" value="<?php echo $_POST['Gender'];?>" size="30"><br><br>
 
<label> Address: </label><br>
<input type="text" name="address" id=""   placeholder=" Please insert employees address" value="<?php echo $_POST['address']; ?>" size="30"><br><br>

<label> Phone: </label><br>
<input type="text" name="phone" id="" placeholder=" Please insert  phone number" value="<?php echo $_POST['phone']; ?>
" size="30">
<br><br>
 
<input  type="submit" name="cal" value="Confirm" class="sub-btnn" >
<!-- <button type="button" class="btn btn-danger">Danger</button> -->
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
<!-- CDN for sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>












</html>