<?php
$username = "bcalabre";
$password = "nqjvrUHZ";
$database = "bcalabre_1";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM Account";

$conn = mysql_connect($bclabre_1, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM Account';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
  echo "All raw Data <br><br>"; 
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Email :{$row['Email']}  <br> ".
         "NAME : {$row['Firstname']}" . " {$row['Lastname']}  <br> ".
         "Password: {$row['Password']} <br> ".  
         "--------------------------------<br>";
   }

   $sql = 'SELECT * FROM Realm';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Location :{$row['Location']}  <br> ".
         "ID : {$row['RealmID']} <br> ".
         "Language : {$row['Language']} <br> ".
         "Difficulty: {$row['Difficulty']} <br> ".  
         "--------------------------------<br>";
   }

   $sql = 'SELECT * FROM Avatar';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Name :{$row['CharacterName']}  <br> ".
         "ID : {$row['PlayerID']} <br> ".
         "Email : {$row['Email']} <br> ".
         "Level: {$row['Level']} <br> ".
         "Clan ID: {$row['ClanID']} <br> ". 
         "Realm ID: {$row['Realm']} <br> ".   
         "--------------------------------<br>";
   }

   $sql = 'SELECT * FROM Clan';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
         "ID : {$row['ClanLeaderID']} <br> ".
         "Minimum Level : {$row['MinLevel']} <br> ".
         "Leader ID: {$row['ClanLeaderID']} <br> ".  
         "--------------------------------<br>";
   }
   
   $sql = 'SELECT * FROM BankAccount';
   mysql_select_db('bcalabre_1');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo 
         "Owner ID : {$row['OwnerID']} <br> ".
         "Balance : {$row['Balance']} <br> ".
 
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
