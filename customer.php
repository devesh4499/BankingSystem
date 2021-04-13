<html>
  <head>
    <style>
  body{
    background-image: url("img1.jpg"); 
    background-repeat: no-repeat;
  background-size: 1400px 700px;
  font-family: 'Trebuchet MS', sans-serif;
  }
  a:link {
  text-decoration: none;
}
a:link {
  color: black;
}

/* visited link */
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: black;
}
</style>
</head>
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

  if(isset($_POST['submit']))
  {
    $sql = "SELECT Name,Email,Address,CurrentBalance FROM customer";
    $result = $conn->query($sql);
session_start();

    // if ($result->num_rows > 0) {
  // output data of each row
      //   while($row = $result->fetch_assoc()) {
        //  $x=$row['Name'];
          
      
          echo '<h1>'.'<a href="customerdetails.php?Name=Ram">' ."Ram" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Seeta">' ."Seeta" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=AMIT">' ."AMIT" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Shivam">' ."Shivam" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Shyam">' ."Shyam" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Geeta">' ."Geeta" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Ajay">' ."Ajay" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Nitin">' ."Nitin" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Naveen">' ."Naveen" .'</a>'.'</h1>';
          echo '<h1>'.'<a href="customerdetails.php?Name=Kavya">' ."Kavya" .'</a>'.'</h1>';
          //session_abort();
         
          
          
        }
        
    
?>
</body>
</html>