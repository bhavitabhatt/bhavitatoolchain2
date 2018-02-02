
<?php
$con=mysqli_connect("au-cdbr-sl-syd-01.cleardb.net","bc98f29b0096d6","c1564bb8","ibmx_3c64d56602860c1");

if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected";
//mysql_select_db("b1d6fc7b3aade6",$con);

$sql="INSERT INTO feedback(product_name,product_review,price,improvement)VALUES('$_POST[product_name]','$_POST[product_review]','$_POST[price]','$_POST[improvement]')";

if($con->query($sql)=== TRUE)
{
	
echo "added successfully";	
	
}
else
{
	
	echo "error".$sql." <br>".$con->error; 
}

mysqli_close($con)

?>
