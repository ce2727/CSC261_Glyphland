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
$leaderid = $_POST['leaderid'];
$query = "SELECT * FROM Clan WHERE ClanLeaderID='$leaderid'";
$operation="search";
$status="1";
$name="";
$minlevel="";

$conn = mysql_connect($bclabre_1, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $query, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      $leaderid = $row['leaderid'];
      $minlevel = $row['minlevel'];
      $name = $row['name'];
   }

header("Location: clan.html?name=$name&leaderid=$leaderid&minlevel=$minlevel&operation=$operation&status=$status#searchForm");
?>
</body>
</html>
