<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$myfile = fopen("testing.txt", "w") or die("Unable to open file!");

fwrite($myfile, "Hello i am new her"); 
/* echo fread($myfile,filesize("testing.txt"));  */
fclose($myfile);


echo "file written succesfully"."<br>";;
 
$handle = fopen("testing.txt", "a+"); 

 $read=file('testing.txt');
 foreach ($read as $line) {
    echo $line ."</br>";
}  

$status=unlink("testing.txt");
if ($status){
    echo "File has been deleted successfully";
}
else{
    echo "Unknown error!";
}
 
?> 
</body>



</html>