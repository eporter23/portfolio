<?php
error_reporting(-1);
//CONNECT TO DB
include('dbinclude17.php');
//$id=$_POST['id']; 
//$id='';//this would be used for stuff passed via form etc.
include('dbfields.php');

//echo "debug" . $description;
//echo "debug" . $categories;
//PRESERVE LINE BREAKS FROM FORM TEXTAREA FIELDS: descriptions, help, news
//1) strip out carriage returns
//$description=ereg_replace("\r","",$description);
//2 Handle Paragraphs
//$description=ereg_replace("\n\n","<p>",$description);
//3 Handle single line breaks
//$description=ereg_replace("\n","<BR>",$description);
//1) strip out carriage returns

//Convert problem characters
//$description=addslashes("$description");
//if not specifying columns, have to insert all fields in sequence - note that when adding new fields this query must be updated
$query="INSERT into `projects` (name, client, year, year2, image, thumbnail, description, origurl, archiveurl, contributions, categories, recordstatus) values ('$name','$client','$year','$year2','$image','$thumbnail','$description','$origurl','$archiveurl','$contributions','$categories','$recordstatus')" or die("Your query did not run.");


//$result = mysqli_query($mysqli,$query) or die("error!");
if (mysqli_query($mysqli, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
print("<a href=\"edit-list-search.php\">View Records</a>");
?>