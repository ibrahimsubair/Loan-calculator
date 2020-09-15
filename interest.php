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
<link rel="stylesheet" href="css/intereststyle.css">
</head>
<body>

<?php 

if(isset($_POST['calc'])){


    $principal=$_POST['principal'];
    $rate=$_POST['rate'];
    $years=$_POST['years'];
    $percent=100;
    $I= $principal * $rate * $years;
    $final=$I/$percent;
  /*   echo $final;
     $good=$principal + $final;
echo $good; */



/* 
echo "<table border='1'>";
echo "<caption><b>Interest Calculated</b></caption>";
echo "<tr>";
echo "<th> Principal</th>";
echo "<th> Rate </th>";
echo "<th> Duration </th>";
echo "<th> Interest</th>";
echo "</tr>";


echo"<tr>".$principal . "<td>";
 */

}


?>

























<h3> Interest Calculator</h3>

<form action="interestcal.php" method="post">
<label>Principal Amount:
<input type="number" name="principal" class="input-cls" value="500000"  readonly>
</label>

<label> Years:
<input type="number" name="years"  class="input-cls" value="3" readonly>
</label>

<label>Rate:
<input type="number" name="rate"  class="input-cls" value="11"  readonly>
</label>


<input type="submit" name="calc"  class="sub-cls" value="Calculate">


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