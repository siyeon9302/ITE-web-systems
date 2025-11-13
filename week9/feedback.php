<!-- Path for testing in browser -->
<!-- Destination: http://localhost/ite230home/feedback.php-->
<!-- Source: http://localhost/ite230home/contactform.html -->
<?php
// Data in the contactform.html is saved in
// superglobal arrays $_Get[], $post[]
// when method=post, data is saved in $_post[]
// when method=get, data is saved in $_get[]
// create a local php variable to save student firstname
$stufname = $_POST["sfname"];
$stulname = $_POST["slname"];
$issue = $_POST["des_issue"];
$stuemail = $_POST["semail"];
 echo "You Entered STU First name is: $stufname<br>";
 // Validate Student First name
 if(!preg_match("/^[a-zA-Z-' ]*$/", $stufname)) {
  $nameFErr = "Only letters and white space allowed in First Name";
  echo "<br>First Name Error".$nameFErr."<br>";
 }
 // Validate Student Last name
 if(!preg_match("/^[a-zA-Z-' ]*$/", $stulname)) {
  $nameLErr = "Only letters and white space allowed in Last Name";
  echo "<br>Last Name Error".$nameLErr."<br>";
 }
 echo "Student Last Name is: $stulname<br>";
 echo "Description of the issue is $issue<br>";
 echo "Your email is $stuemail<br>";
 echo "Thank you for contacting us $stufname";
?>