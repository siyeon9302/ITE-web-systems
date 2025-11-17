<?php
$serverName = "localhost";
$port = "3307";  // 포트 추가!
$dbname = "ite230db";
$username = "ite230user";
$password = "siyeon1224";

try {
  // 포트 번호를 포함해서 연결!
  $connection = new PDO("mysql:host=$serverName;port=$port;dbname=$dbname", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected Successfully to the Database from within PHP file<br>";

  $sqlquery = "SELECT * FROM studenttb";
  $statement = $connection->prepare($sqlquery);
  $statement->execute();
  $arrValues = $statement->fetchAll(PDO::FETCH_ASSOC);
  
  echo "<br>Here is the data from student table";
  echo "<br><hr>";
  echo "<table width=\"100%\" border=\"2px\">\n";
  echo "<tr>\n";
  
  foreach($arrValues[0] as $key => $data) {
    echo "<th>$key</th>";
  }
  echo "</tr>";
  
  foreach($arrValues as $row) {
    echo "<tr>";
    foreach($row as $key => $val) {
      echo "<td>$val</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  echo "<br><hr>";
}
catch (PDOException $e) {
  echo $e->getMessage();
}
$connection = null;
?>