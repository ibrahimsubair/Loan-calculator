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

</head>
<body>
    <?php 

$principal=$_POST['principal'];
$rate=$_POST['rate'];
$years=$_POST['years'];
$percent=100;
$I= $principal * $rate * $years;
$final=$I/$percent;

$years5=5;
$ii= $principal *$rate*$years5;
$cal=$ii/$percent;


$year7=7;
$iii= $principal *$rate*$years5;
$call=$iii/$percent;


    echo "<table border='1'>";
    echo "<tr>";
    echo "<th> Principal</th>";
    echo "<th> Rate </th>";
    echo "<th> Duration </th>";
    echo "<th> Interest</th>";
    echo "</tr>";


 



   echo"<tr> <td>";
   echo $principal ."</td>";
   echo "<td>".$rate. "</td>";
   echo "<td>".$years. "</td>";
   echo  "<td>".$final. "</td></tr>" ;

   
   echo"<tr> <td>";
   echo $principal ."</td>";
   echo "<td>".$rate. "</td>";
   echo "<td>" .$years5. "</td>";
   echo  "<td>". $cal . "</td></tr>" ;

      
   echo"<tr> <td>";
   echo $principal ."</td>";
   echo "<td>".$rate. "</td>";
   echo "<td>" .$year7. "</td>";
   echo  "<td>". $call . "</td></tr>" ;


/* echo $principal "</td>";
echo "<td>".$rate."</td>";
echo  "<td>".$years. "</td></tr>" ;
echo  "<td>".$final. "</td></tr>" ;
echo "<tr> <td>";
echo  "<td>" "</td> 
</tr>"; */
    
    ?>
    
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