<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="css/loginstyle.css" rel="stylesheet"> 

</head>

<?php

if(isset($_POST[''])){
  /*   $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password']; */

if ($username='ibrahim' && $password=='ibrahim123'){

    header('location:registration.php');
}

else{
    echo 'access denied!!!!!!';
}
 if($username='ella' && $password=='ella123'){
    header('location:registration.php');
}
else {
    echo 'access denied!!!!!!';
}

 if($username='mr ayo' && $password=='ayo123'){
    header('location:registration.php');
}

else{
    echo " access denied"; 
}
/* $count=0;
$count++;
if ($count>5){
    echo "system cannot take more users"; */



}




  



?>
<body>

<form action="Niit.php" method="post" name="login-form">
<body class="body-div">

<div class="first-div">
    <div class="img-class">
        <!--  <p class="img-text">Welcome to the Data Interchange professional e-invoicing portal.</p> -->
    </div>
    <div class="grid-div">
        <form action="niit.php">

            <h4 class="header">Create your account</h4>

            <label class="small">
                <span>First Name</span>
                <input type="text" name="username" class="input-cls form-control ">
            </label>


            <label class="label-cls small">
                <span>Your Email address</span>
                <input type="email" name="email" class="input-cls form-control">
            </label>

            <label class="label-cls small">
                <span>Password</span>
                <input type="password" name="password" class="input-cls form-control">
            </label>


            <label class>
                <input type="checkbox" name="" class="" size="50"> Remember me
            </label>


            <input type="submit" value="Create new" class="sub-cls small btn-block" name="log" size="50">

            <p class="small">Already have an account? <a href="">Sign in</a> </p>

            <hr>
            <p class="small">By clicking Sign Up you agree to the <a href="">Terms</a> & <a href=""> Privacy
                    policy.</a></p>

    </div>

</div>
</form>
</body>




</form>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</html>







<!-- 
