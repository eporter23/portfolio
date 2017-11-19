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
            
          <p>Are you sure you want to delete this record?</p>
          
<?php
$id=$_GET['id'];//must use GET since it is URL supplied only

echo "<p><a href=\"delete.php?id=$id\" class=\"nextlink\">Yes - Delete</a></p>";
?> 
<p> <a href="edit-list-search.php" class="prevlink">No - Return to Project List </a></p>
            </div>
            </section>
            </div>
            
</body>
</html>