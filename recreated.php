<!Doctype Html>
<html>
      <head>
      <title>Calculate simple interest</title>
      </head>
      <?php
if(isset($_POST['cal'])){
    $amt=$_POST['amt'];
    $rate=$_POST['rate'];
    $duration=$_POST['d'];
    $percent=100;
    $I= $amt * $rate * $duration;
    $final=$I/$percent;

     $good=$amt + $final;
echo $good;
}

?>

      <body>

<form  action="recreated.php" method="post">
<label> Amount:</label>
<input type="text" name="amt" id="" placeholder="Please insert amount" ><br><br>

<label>Rate:</label>
<input type="Number" name="rate" id="" placeholder=" Please insert rate "  size="30"><br>
<br>
<label> Duration: </label>
<input type="text" name="d" id=""  placeholder=" Please insert duration" size="30"><br><br>
<!-- <label> Ratio: </label>
<input type="text" name="Al2" id=""   placeholder=" Please insert employees allowance"  size="30"><br><br>

<label> Allowance: </label>
<input type="text" name="Al3" id="" placeholder=" Please insert employees allowance" size="30">
<br><br><br>
 -->
 <input  type="submit" name="cal" value="Calculate" >
 <h1> <?php echo $good ;?></h1>
</form>
</body>
 


</html>














