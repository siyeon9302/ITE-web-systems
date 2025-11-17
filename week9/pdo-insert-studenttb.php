<?php
$serverName = "localhost";
$port = "3307";  // 포트 추가!
$dbname = "ite230db";
$username = "ite230user";
$password = "siyeon1224";

$stufname = $_POST["sfname"];
$stulname = $_POST["slname"];
$issue = $_POST["des_issue"];
$stuemail = $_POST["semail"];
$nameFErr = "";
$nameLErr = "";

if(!preg_match("/^[a-zA-Z-' ]*$/", $stufname)) {
  $nameFErr = "Only letters and white space allowed in First Name";
  echo "<br>First Name Error".$nameFErr."<br>";
}

if(!preg_match("/^[a-zA-Z-' ]*$/", $stulname)) {
  $nameLErr = "Only letters and white space allowed in Last Name";
  echo "<br>Last Name Error".$nameLErr."<br>";
}

try {
  // 포트 번호를 포함해서 연결!
  $connection = new PDO("mysql:host=$serverName;port=$port;dbname=$dbname", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected Successfully to the Database from within PHP file<br>";

  $sqlquery = "INSERT INTO studenttb(stuFirstName, stuLastName, stuEmail, stuIssue) values(:s_fn,:s_ln,:s_em,:s_issu)";
  
  $statement = $connection->prepare($sqlquery);
  $statement->bindValue(":s_fn", $stufname);
  $statement->bindValue(":s_ln", $stulname);
  $statement->bindValue(":s_issu", $issue);
  $statement->bindValue(":s_em", $stuemail);
  
  $count = $statement->execute();
  echo "<br>After Execute";
  echo "New Records :" .$count." Successfully inserted into studenttable";
  echo "<br><hr>";
  
  echo "Table data after the insert";
  include 'pdo-getdata-studenttb.php';
}
catch (PDOException $e) {
  echo $e->getMessage();
}
$connection = null;
?>