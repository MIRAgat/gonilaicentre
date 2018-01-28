 <?php
// including the database connection file
include_once("db.php");

if(isset($_POST['submit']))

{ 




  $result = "INSERT INTO payment (iduser, idvendor, name, email, phonenum, deliverytime, deliveryaddress, status) VALUES 
  ( '".$_POST["userid"]."','".$_POST["vendorid"]."', '".$_POST['name']."', '".$_POST["email"]."','".$_POST["phonenum"]."',
  '".$_POST["deliverytime"]."','".$_POST["deliveryaddress"]."', 'Pending')";
  
  $b=mysqli_query($db, $result);
  
if($b)
{
   echo "<script type=\"text/javascript\">".
        "alert('successfully recorded');".
        "</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully recorded.');</script>";
}


}


?>
<!DOCTYPE html>

<html>

<head>
	<title>Payment</title>
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>

	<h2>Purchases</h2>
	
	<form class="form" method="post" action="" >
		
		<p class="name">
		<label for="name">Name</label> </p>
			<input type="text" name="name" id="name" placeholder="Mirada" />
			
		
		
		<p class="email">
		<label for="email">Email</label></p>
			<input type="text" name="email" id="email" placeholder="mail@example.com" />
			
		
		
		<p class="phonenum">
		<label for="phonenum">Phone Number</label> </p>
			<input type="text" name="phonenum" id="phonenum" placeholder="+601234567890" />
			
				
	
		
		<p class="deliverytime">
		<label for="deliverytime">Delivery Time</label>
		</p>
			<input type="time" name="deliverytime" id="deliverytime" placeholder="22/2/2018" />
			
			
			
		<p class="deliveryaddress">
		<label for="deliveryaddress"> Address</label>
				</p>		

			<input type="text" name="deliveryaddress" id="deliveryaddress" placeholder="No17, Jalan Mirada, Kampung Kasih Sayang, 16150, Nilai" />
			<input type="hidden" name="vendorid" value="1"/>
			<input type="hidden" name="userid" value="1" />
			<p>
			<select class = "form-control" name = "payment" required = "required">
              <option value = "">--Payment Type--</option>
              <option value = "Cashondelivery"> Cash on delivery</option>
            </select>
			</p>
		<input type="button" onclick="location.href='http://www.maybank2u.com.my/';" value="Online payment" />
		
	
		<p class="submit">
			<input type="submit" name="submit" value="Send" />
		</p>
	</form>

</body>

</html>

