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
$status = 1;
$operation = "create";
if ($conn->query($sql) === TRUE) {
} else {
    $status = 0;
}

// Query:
$displayname = $_POST['displayname'];
$class = $_POST['class'];
$email = $_POST['email'];
$realm = $_POST['realm'];
$pid = rand (4 , 2000000000);
$level = 0;
$sql = "INSERT INTO Avatar values ('$pid','$email', '$displayname', '$class', $level, 'NULL', '$realm');";



$result = $conn->query($sql);

if ($result !== TRUE) {
    $status = 0;
}
header("Location: character.html?pid=$pid&displayname=$character_name&class=$class&level=$level&realm=$realm&operation=$operation&status=$status#createForm");
?>

<?php
$conn->close();
?>

</body>
</html>
