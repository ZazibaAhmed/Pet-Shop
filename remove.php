<?php
session_start();
$username = "root"; 
$password = ""; 
$database = "petshop"; 
$conn=mysqli_connect("localhost","root","","petshop");
$name=filter_input(INPUT_POST,'name');
 

if (isset($_POST['delbtn'])){
	$_SESSION["price"]=$total;
    $prodname=$_SESSION["prodName"];
    $_SESSION["prodQuanitiy"]=$quanitity;
       $sql1 = "SELECT * FROM products WHERE name=$prodname";
       $res = mysqli_query($conn, $sql1);
       $r = mysqli_fetch_array($res);
       $quan=$r["quantity"];
       $query1 ="UPDATE quantity SET quantity=quanitity-$quan WHERE name=$name";
       $result1 = mysqli_query($conn, $query1);

	$sql="DELETE FROM cart WHERE name='$name'";
	$result=mysqli_query($conn,$sql);
	//header("Location: Cart.php");
	
}

else{
  
}

?>