<?php
// Start the session
	session_start();
    $error = "";
	if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
$error=''; // Variable To Store Error Message
$servername_ = "localhost";
$username_ = "root";
$password_ = "root";
// Create connection
$conn = new mysqli($servername_, $username_, $password_, "orsinc");	

	$sql = "SELECT * FROM Users";
	$result = $conn->query($sql);


	if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
         // echo "Name: " . $row["name"]. " - Password: " . $row["password"];
        if ($row["name"] == $username AND $row["password"] == $password ){
            $_SESSION['login_user']=$username;

            echo 'TRUE';
        }

    }

} 
}
?>