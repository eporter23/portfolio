<!DOCTYPE html>
<html>
<head>
<meta>
<title>Delete Record</title>
<link rel="stylesheet" type="text/css" href="../../design/css/master.css"/>
<link rel="stylesheet" type="text/css" href="../admin.css"/>
</head>

<body>
<div id="container">
<section id="main-content">
<div id="content">
<h1>Delete Record</h1>

<!-- this isn't functional yet -- 7/15/12. Need to go into phpmyadmin for deletes. see host account setup info -->

<p>
  <?php
$id=$_GET['id'];//must use GET since it is URL supplied only
include('dbinclude17.php');


$query="DELETE from $table WHERE id=$id" or die("Your query did not run.");
$result = mysqli_query($mysqli,$query);
//$result = mysql_db_query($db,$query,$connect);
print("Your record has been deleted");
?>
</p>
<ul>
  <li><a href="edit-list-search.php">Back to Project List </a></li>
</ul>
</div>
</section>
</div>
</body>
</html>