<html>
<head>

<meta>
 
<title>Update Portfolio</title>
<link rel="stylesheet" type="text/css" href="../../design/css/master.css"/>
<link href="../admin.css" rel="stylesheet" type="text/css">
</head>


 <body><div id="container">
<section id="main-content">
<div id="content">
<h2>Update Project</h2>
            
            <p>
<?php
$id=$_POST['id'];//GET or post for this one?
include('dbfields.php');
/*$name=$_POST['name'];
$description=$_POST['description'];
$client=$_POST['client'];
$year=$_POST['year'];
$year2=$_POST['year2'];
$image=$_POST['image'];
$thumbnail=$_POST['thumbnail'];
$description=$_POST['description'];
$origurl=$_POST['origurl'];
$archiveurl=$_POST['archiveurl'];
$contributions=$_POST['contributions'];
$format=$_POST['format']; 
$format2=$_POST['format2'];//doesn't update from format2 select list?
$categories=$_POST['categories'];
$recordstatus=$_POST['recordstatus'];
*/
include('dbinclude17.php');
//$erid=15;
//PRESERVE LINE BREAKS FROM FORM TEXTAREA FIELDS: description, notes, help, news
//1) strip out carriage returns
//$description=ereg_replace("\r","",$description);
//2 Handle Paragraphs
//$description=ereg_replace("\n\n","<p>",$description);
//3 Handle single line breaks
//$description=ereg_replace("\n","<BR>",$description);
//1) strip out carriage returns

//IF MAGICQUOTES ON, ADDSLASHES
//Convert problem characters
if (get_magic_quotes_gpc() == 0) {
$description=addslashes("$description");
}
//QUERY THE DB
//CONVERT form inputs into arrays for storage
//CONVERT ARRAYS to strings to be inserted into db fields
//$subjects inserted as an array automatically from the form. Convert it to a string here to store in the db field.

//if original $format value has been changed via the #format2 select menu, insert the new value
if ($format2!=$format) {$format=$format2; }

$query="UPDATE $table SET `name`='$name',`client`='$client',`year`='$year',`year2`='$year2',`image`='$image',`thumbnail`='$thumbnail',`description`='$description',
`format`='$format',`origurl`='$origurl',`archiveurl`='$archiveurl',`contributions`='$contributions',`categories`='$categories',`recordstatus`='$recordstatus' WHERE `id`=$id" or die("Your query did not run.");
$result = mysqli_query($mysqli,$query);
//$result = mysql_db_query($db,$query,$connect);
print("Your record has been updated.");
?>
            </p>
            <ul>
              <li><a href="edit-list-search.php">Back to List </a></li>
               <li><a href="/project.php?id=<?php echo"$id"?>">View updated project page </a></li>
            </ul>
            </div>
            </section>
            </div>
</body>
</html>