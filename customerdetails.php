<html>
<head>
<style>
   body  {
        background-image: url("dev3.jpg");
        background-repeat: no-repeat;
  background-size: 1400px 700px;
  overflow:hidden;
	
      }

table

{

border-style:groove;

border-width:2px;

border-color:black;

margin-left:40px;

margin-right:auto;
border-style: outset;
margin-top:100px;

}
table,th,td{
  padding:15px;
  border-style: outset;
}
.center {
  display: flex;
  justify-content: center;
  margin-top:50px;
  margin-left:-800px
  
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1:hover{
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button1 {
  background-color: #555555;
  color: white;
}

</style>
</head>
<body>


<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "grip";
 session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
// here we get the incomming video id (videoinfo.php?id=123)
$value = $_GET['Name'];
$_SESSION['New']=$value;
//echo $video_id;
// build a database query to select the videoInformation
// here we use WHERE to select the video_id we want
$query = "SELECT * FROM customer WHERE Name = '$value'";

// lets connect and do the query
$result = $conn->query($query);
 //{
    // output data of each row
    echo "<table border='1' >

<tr>

<th>Name</th>

<th>Email</th>

<th>Address</th>

<th>CurrentBalance</th>

</tr>";
           while($row = $result->fetch_assoc()) {
            {

               echo "<tr>";
             
               echo "<td>" . $row['Name'] . "</td>";
             
               echo "<td>" . $row['Email'] . "</td>";
             
               echo "<td>" . $row['Address'] . "</td>";
             
               echo "<td>" . $row['CurrentBalance'] . "</td>";
             
               echo "</tr>";
             
               }
             
             echo "</table>";
            }

         

?>
   <form action="transfer.php" method="POST">
   <div class="center">
            <input type="submit" name="submit" class="button button1" value="Transfer Money">
         </div>
          </form>

</body>
</html>
