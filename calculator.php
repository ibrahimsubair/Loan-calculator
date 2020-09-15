<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>



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

    //numeric array
    $students=array("Tega","ibrahim","Ella","Deborah");
    print_r($students);
    print_r($students[1]); 
    echo " <br>";

    print_r("Welcome ".$students[1]);
    echo "<br>";
    
/* $array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array); */

//associative array
$details=array("number"=>20000,"Episode_1" => pilote);
echo $details["Episode_1"]."<br>";
echo $details["number"]."<br>";
print_r($details);

//multidimensional array
$flower_shop= array("category1"=>array("lotus",2.25,10),"category"=>array("white rose",1.75,15));
echo $flower_shop["category1"][1];


// multidimensional array in table
echo "<table border='1'>";
echo "<caption><b>Flower shop</b></caption>";
echo "<tr>";
echo "<th> Flower Name </th>";
echo "<th> Price </th>";
echo "<th> Quantity </th>";
echo "</tr>";

$flowershop=array("category1"=>array("lotus",2.25,10),"category2"=>array("white rose",1.75,15),"category"=>array("red rose",2.15,8));

echo"<tr> <td>";
echo $flowershop ['category1'][0]. "</td>";
echo "<td>".$flowershop['category1'][1]. "</td>";
echo  "<td>".$flowershop['category1'][2]. "</td></tr>" ;
echo "<tr> <td>";
echo $flowershop ['category2'][0]. "</td>";
echo "<td>".$flowershop['category2'][1]. "</td>";
echo  "<td>".$flowershop['category2'][2]. "</td> 
</tr>";

/* function getArray(){
    return array(1,2,3);
}
    $testingArray=getArray([1]); */
    
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