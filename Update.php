<html>
<style>

body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
  .c1{
 
  text-align: center;
  font: bold 80px Sans-Serif;
  padding: 40px 0;
   
  color: #202c2d;
  text-shadow:
    0 1px #808d93,
    -1px 0 #cdd2d5,
    -1px 2px #808d93,
    -2px 1px #cdd2d5,
    -2px 3px #808d93,
    -3px 2px #cdd2d5,
    -3px 4px #808d93,
    -4px 3px #cdd2d5,
    -4px 5px #808d93,
    -5px 4px #cdd2d5,
    -5px 6px #808d93,
    -6px 5px #cdd2d5,
    -6px 7px #808d93,
    -7px 6px #cdd2d5,
    -7px 8px #808d93,
    -8px 7px #cdd2d5;

  }
  </style>
<body>
  
<?php
  //$connection = mysqli_connect("localhost","root","");
  //$db=mysqli_connect_db($connection,'grip');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grip";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["amount"];
$t=$_POST["sender"];

$sender_balance="SELECT currentBalance from customer WHERE Name='$t'";
$balance=$conn->query($sender_balance);
$sender=mysqli_fetch_array($balance);

if($sender['currentBalance'] > $c)
{
$amount="SELECT currentBalance from customer WHERE Name='$a'";
$result1=$conn->query($amount) ;
$row=mysqli_fetch_array($result1);
$totalamount=$c+$row['currentBalance'];

$query = "UPDATE customer SET currentBalance='$totalamount' WHERE Name ='$a'";
$result = $conn->query($query) or die($conn->error);

$sub=$sender['currentBalance'] - $c;

$q2= "UPDATE customer SET currentBalance='$sub' WHERE Name ='$t'";
$r1=$conn->query($q2);

$q3="INSERT INTO tranferdetails(Sender,Reciver,AmountTransfer)values ('$t','$a',$c)";
$R2=$conn->query($q3);
echo "<h2 class='c1'>Successful Transaction</h2>";
}

else{
  
 echo "<h2 class='c1'>Not enough amount </h2>";
}



?>
</body>
</html>