<?php

$servername="localhost";
$username="thzou";
$password="1901";
$dbname="madworldgames";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connection_error) {
	die("Connection failed: " . $conn->connection_error);

}

$sql="SELECT username,score from madusers";
$result = $conn->query($sql);

if($result->num_rows > 0 ) {

	echo "<table><tr><th>User</th><th>Score</th></tr>";
	//output the data of each row 
	while($row = $result->fetch_assoc()){

		echo "<tr><td>". $row["username"]. "</td><td>". $row["score"] ."</td></tr>";

	}
	echo"</table>";

}else {
	echo "0 results";
}

$conn->close();

?>