
<?php
	include 'connection.php';

?>
<?php
mysqli_select_db($link, $database);
$query = "CREATE TABLE pets
(
	firstName varchar(255),
	lastName varchar(255),
	petname varchar(255),
	photoname varchar(255),
);";
$result = mysqli_query($link, $query);


if (!$result) {
	echo "Error ...Failed ...";
} else {
	echo "Table created ...";
}
