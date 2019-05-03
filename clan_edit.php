<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
$username = "bcalabre";
$password = "nqjvrUHZ";
$database = "bcalabre_1";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "";
$operation = "";
$status = 1;
$name = $_POST['results_name'];
$leaderid = $_POST['results_leaderid'];
$minlevel = $_POST['results_minlevel'];

if (isset($_POST['update_button'])) {
   //update action
   $operation = "update";
   $query = "UPDATE Clan SET Name='$name', MinLevel='$minlevel' WHERE ClanLeaderID='$leaderid'";

} else if (isset($_POST['delete_button'])) {
   //Delete action
   $operation = "delete";
   $query = "DELETE FROM Clan WHERE ClanLeaderID='$leaderid'";
}


$conn = mysql_connect($bclabre_1, $username, $password);
   
   if(! $conn ) {
      $status = 0;
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $query, $conn );
   
   if(! $retval ) {
      $status = 0;
      die('Could not get data: ' . mysql_error());
   }
   header("Location: clan.html?operation=$operation&status=$status#searchForm");
?>
</body>
</html>
