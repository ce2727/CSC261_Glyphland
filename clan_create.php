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
$operation = "create";
$status = 1;
if ($conn->query($sql) === TRUE) {
} else {
    $status = 0;
}
// Query:
$name = $_POST['name'];
$leaderid = $_POST['leaderid'];
$minlevel = $_POST['minlevel'];
$sql = "INSERT INTO Clan VALUES ('$leaderid','$name', '$minlevel');";

$result = $conn->query($sql);

if ($result !== TRUE) {
    $status = 0;
}
header("Location: clan.html?name=$name&leaderid=$leaderid&minlevel=$minlevel&operation=$operation&status=$status#createform");
?>

<?php
$conn->close();
?>

</body>
</html>
