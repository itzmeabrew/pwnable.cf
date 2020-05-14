<?php
if(isset($_POST["submit"])){
$servername = "fdb23.awardspace.net";
$username = "2803628_justin";
$password = "eminemrapgod88";
$dbname = "2803628_justin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ideas (name, attrib, idea, section)
VALUES ('".$_POST["name"]."','".$_POST["attrib"]."','".$_POST["desc"]."','".$_POST["option"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Idea added successfully!');</script>";
echo "<script type= 'text/javascript'>window.location.href='http://ideas.pwnable.cf'</script>";

} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>