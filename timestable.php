<!DOCTYPE html>
<html>
<head>
<script>
 function calc()
 {
		var multi = (arg1 - arg2);
		return multi;	
 }
</script>
</head>
<body>
<table border="solid 2px;" style="color:black;font-size:50px;">
	<tbody>
<script>
for(var i =1; i<=100; i++)
{
	document.write("<tr>");
	for(var k=1; k<=4; k++)
		{
			var arg1 =i ;
			var arg2 = k; 
            document.write("<td>"+calc()+"</td>");	
     /*        document.write("<td>"+calc()+"</td>"); */
		}
	document.write("</tr>"); 
}	
</script>
	</tbody>
</table>
</body>
</html>