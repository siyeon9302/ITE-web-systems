## 💻25.09.24 SUMMARY

### 📒What I learned today?

##### 11.12

If I don't write anything here, the method will be "get".
`<form action="feedback.php" method="post">`

If I don't write email form, this message appears.
![alt text](image.png)

Code:
`contactform.html`

```html
<!-- filename: contactform.html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact form</title>
    <link rel="stylesheet" href="contactform.css" />
  </head>
  <body>
    <header>
      <!-- Create a Nav bar using lists -->
      <nav>
        <ul>
          <li><a href="htmlpart6.html">Home</a></li>
          <li><a href="#course">Courses</a></li>
          <li><a href="#students">Students</a></li>
          <li><a href="address">Address</a></li>
        </ul>
      </nav>
    </header>
    <!-- Contact form -->
    <form action="feedback.php" method="post">
      <fieldset>
        <legend>Welcome to Contact Form</legend>
        <br />
        <!-- <h1>Welcome to Contact Form</h1> -->
        <label for="sfname">Student First Name</label>
        <input
          type="text"
          id="sfname"
          name="sfname"
          placeholder="Enter First Name"
          required
        />
        <br /><br />
        <label for="slname">Student Last name</label>
        <input
          type="text"
          id="slname"
          name="slname"
          placeholder="Enter Last Name"
          required
        />
        <br /><br />
        <label for="email">Student Email</label>
        <input
          type="email"
          id="semail"
          name="semail"
          placeholder="Enter Your Email"
          required
        />
        <br /><br />
        <label for="des">Describe the Issue:</label>
        <textarea required="">Write the issue you are having</textarea>
        <input type="textarea" id="des_issue" name="des_issue" />
        <br /><br />
        <input type="submit" value="submit" />
      </fieldset>
      <fieldset>
        <!--Radio buttons, name attribute must be same for All input tags-->
        <legend>Fav Programming Langs.</legend>
        <input type="radio" name="fav-lang" />
        <label>Java</label>
        <input type="radio" name="fav-lang" />
        <label>Python</label>
        <input type="radio" name="fav-lang" />
        <label>html</label>
        <input type="radio" name="fav-lang" />
        <label>css</label>
      </fieldset>
      <fieldset>
        <!--Check boxes-->
        <legend>Fav Programming Langs.</legend>
        <input type="checkbox" name="fav-j" />
        <label>Java</label>
        <input type="checkbox" name="fav-p" />
        <label>Python</label>
        <input type="checkbox" name="fav-h" />
        <label>html</label>
        <input type="checkbox" name="fav-c" />
        <label>css</label>
      </fieldset>

      <fieldset>
        <!-- Creating drop down boxes -->
        <legend>Choose your Fav Lang from Dropdown List</legend>
        <select name="fav_lang">
          <option value="Java">Java</option>
          <option value="HTML" selected>HTML</option>
          <option value="CSS">CSS</option>
          <option value="PHP">PHP</option>
        </select>
      </fieldset>
    </form>
  </body>
</html>
```

`feedback.php`

```php
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
 echo "Student Last Name is: $stulname<br>";
 echo "Description of the issue is $issue<br>";
 echo "Your email is $stuemail<br>";
 echo "Thank you for contacting us $stufname";
?>
```

Result:
![alt text](image-1.png)

- PHP: validate
  I can check whether the name was written in right form!

```php
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
```

![alt text](image-2.png)

We learn about Database and MySQL!

- MySQL is a database system used on the web

`SELECT LastName FROM Employees`
: The query above selects all the data in the "LastName" column from the "Employees" table.

- Making database
  start MySQL service in XAMPP Control Pannel
  Open Browser
  `localhost/phpmyadmin`

![alt text](image-3.png)

And we write this code!

```SQL
CREATE TABLE studenttb(
	stuId int AUTO_INCREMENT PRIMARY KEY,
    stuFirstName varchar(100),
    stuLastName varchar(200),
    stuEmail varchar(300),
    stuIssue varchar(1000)
);
```

![alt text](image-4.png)

I can see new table!
![alt text](image-5.png)

I can see the structure too!
![alt text](image-6.png)

- We are making table

```SQL
INSERT INTO studenttb
VALUES(1,'Siyeon','Kim','siyeon9302@naver.com','I am hungry');
```

![alt text](image-7.png)

- New User!
  ![alt text](image-8.png)

If I push generate button, it automatically generates password.
![alt text](image-9.png)

And then, give user permission
![alt text](image-10.png)

##### 11.14

We learned how to add the information into the table!
We made the user information on phpmyadmin, and we used that information to access the database.
But mine did not work, so I struggle with this error almost for 3 hours.
I found it was because of the port number!
![alt text](image-12.png)
As I see my XAMPP Control Panel, the port number of MySQL is `3307`.
But as I used this code,
`pdo-getdata-studenttb.php`

```php
<?php
$serverName="localhost"; // server name should match
$dbname= "ite230db"; // should match with db name in phpmyadmin
$username= "iteuser2"; // create a dedicated username for website
$password= "(lc[gXUmQva*h3W2";


// Create Connection to the background server
try {
  // Opening the connection
$connection = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
//set the PDO error mode to exception
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully to the Database from withn PHP file<br>";

// write your sql query
$sqlquery = "SELECT * FROM studenttb";
// echo "After SQL Query<br>";
// use connection with pdo to create prepared statement
$statement = $connection->prepare($sqlquery);
// echo "After Prepared<br>";
// execute
$statement->execute();
//echo "After Execute<br>";
// Fetch row of data from table as associstive array
$arrValues = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<br>Here is the data from student table";
echo"<br><hr>";
// open the table tag
echo"<table width=\"100%\" border=\"2px\">\n";
echo "<tr>\n";
// add table headers
foreach($arrValues[0] as $key => $data) {
  echo "<th>$key</th>";
}
echo"</tr>";
// display data
foreach( $arrValues as $row) {
  echo "<tr>";
  foreach($row as $key => $val) {
    echo "<td>$val</td>";
  }
  echo "</tr>";
}
//close table tag
echo "</table>";
echo "<br><hr>";
}
catch (PDOException $e) {
  echo $e->getMessage();
}
// close the connection to the Database
$connection=null;

?>
```

`pdo-insert-studenttb.php`

```php
<?php
$serverName="localhost";
$dbname= "ite230db";
$username= "iteuser2";
$password= "(lc[gXUmQva*h3W2";

$stufname = $_POST["sfname"];
$stulname = $_POST["slname"];
$issue = $_POST["des_issue"];
$stuemail = $_POST["semail"];
$nameFErr = "";
$nameLErr = "";
 //echo "You Entered STU First name is: $stufname<br>";
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
//  echo "Student Last Name is: $stulname<br>";
//  echo "Description of the issue is $issue<br>";
//  echo "Your email is $stuemail<br>";
//  echo "Thank you for contacting us $stufname";

// Create Connection to the background server

try {
  // Opening the connection
$connection = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
//set the PDP error mode to exception
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully to the Database from within PJP file<br>" ;

// write your sql query
$sqlquery = "INSERT INTO studenttb(stuFirstName, stuLastName, stuEmail, stuIssue) values(:s_fn,:s_ln,:s_em,:s_issu)";

// echo "After SQL Query<br>";
// use connection with pdo to create prepared statement
$statement = $connection->prepare($sqlquery);
// echo "After Prepared statement<br>";
// Bind local variales to actual data post array
$statement->bindValue(":s_fn", $stufname);
$statement->bindValue(":s_ln", $stulname);
$statement->bindValue(":s_issu", $issue);
$statement->bindValue(":s_em", $stuemail);

// execute
$count = $statement->execute();
echo "<br>After Execute";
echo "New Records :" .$count."Successfully inserted into studenttable";
echo"<br><hr>";

echo "Table data after the insert";

include 'pdo-getdata-studenttb.php';
}
catch (PDOException $e) {
  echo $e->getMessage();
}
// close the connection to the Database
$connection=null;

?>
```

It didn't work!
I deleted and remade user account for a lot of time, but it doesn't seem wrong.
I was thinking what will be problem, and I just saw my MySQL port number and I asked claude whether this can be a problem.
And it told me that was a problem!

It changed my code like this.
`pdo-getdata-studenttb.php`

```php
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
```

`pdo-insert-studenttb.php`

```php
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
```

And finally, it worked!!!

![alt text](image-11.png)

### 🌟My comment

##### 11.12

I was really focused on today's class because we learned many things, especially about php and MySQL! It was my first time to make database table, so it was interesting.

##### 11.14

I struggled with the error so much, but I am happy that I found what was the problem and solve it.
I think I should study more about these field.
