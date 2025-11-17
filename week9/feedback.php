<!-- Path for testing in browser -->
<!-- Destination: http://localhost/ite230home/feedback.php-->
<!-- Source: http://localhost/ite230home/contactform.html -->
<?php
// Data in the contactform.html is saved in
// superglobal arrays $_Get[], $post[]
// when method=post, data is saved in $_post[]
// when method=get, data is saved in $_get[]
// create a local php variable to save student firstname

echo"Welcome to Feedback Page";
echo "<br><hr>";
include"pdo-getdata-studenttb.php";
echo "<br><hr>";
include"pdo-insert-studenttb.php";
echo "<br><hr>";

echo "<a href='contactform.html'>Back to Contact Form</a>";

 
?>