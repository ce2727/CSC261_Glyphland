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
require_once('db_setup.php');
$sql = "USE bcalabre_1;";
if ($conn->query($sql) === TRUE) {
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$displayname = $_POST['displayname'];
$class = $_POST['class'];
$email = $_POST['email'];
$realm = $_POST['realm'];
$pid = rand (4 , 2000000000);
$sql = "INSERT INTO Avatar values ('$pid','$email', '$displayname', '$class', '0', 'NULL', '$realm');";



$result = $conn->query($sql);

if ($result !== TRUE) {
    $status = 0;
}
header("Location: character.html?pid=$pid&displayname=$character_name&class=$class&clan=$clan&level=$level&$clan&realm=$realm&operation=$operation&status=$status#searchForm");
?>

<?php
$conn->close();
?>

</body>
</html>
