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
$pid = $_POST[''];
$email = $_POST['results_email'];
$character_name = $_POST['results_displayname'];
$class = $_POST['results_class'];
$level = $_POST['results_level'];
$clan = $_POST['results_clan'];
$realm = $_POST['results_realm'];

if (isset($_POST['update_button'])) {
   //update action
   $operation = "update";
   $query = "UPDATE Avatar SET CharacterName='$character_name', Level='$level', ClanID='$clan', Realm='$realm' WHERE PlayerID='$pid'";

} else if (isset($_POST['delete_button'])) {
   //Delete action
   $operation = "delete";
   $query = "DELETE FROM Avatar WHERE PlayerID='$pid'";
}


$conn = mysql_connect($bclabre_1, $username, $password);
   
   if(! $conn ) {
      $status = 0;
      die('Could not connect: ' . mysql_error());
   }
   
   //$sql = 'SELECT * FROM Account where email='$email'';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $query, $conn );
   
   if(! $retval ) {
      $status = 0;
      die('Could not get data: ' . mysql_error());
   }
   header("Location: character.html?operation=$operation&status=$status#searchForm");
?>
</body>
</html>
