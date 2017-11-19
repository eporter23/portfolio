<?
//PRINT THE RESULTS, if they aren't empty values
/*
<!-- sample output -->
<div class="grid-col">
<div class="image-container"> <a href="img/emorynewscenter400.jpg" rel="lightbox-project" title="a caption here"><img src="img/emorynewscenter400.jpg" alt=" "></a> </div>
<h2><a href="project.php">Emory News Center Content Management</a></h2>
</div>
*/
//need to use the array index, not the db id
print("<div class=\"grid-col");
//if((key($row)) % 3 == 0) {echo " col-3";}
//echo " col-". key($row);
//if($i % 3 == 0) {echo " col-3";}
if ($i % 3 == 0) {
  echo " col-3";
} elseif ($i % 2 == 0) {
  echo " col-2";
}
//echo " col-". $i;
echo"\">";
print("
<div class=\"image-container\"><a href=\"img/".$row['image']."\" rel=\"lightbox-project\" title=\"".$row['name']."\" id=\"project.php?id=".$row['id']."\"><img src=\"img/".$row['image']."\" alt=\"Thumbnail of screenshot for " .$row['name'] . "\"/></a></div>
<h2><a href=\"project.php?id=".$row['id']."\" >".$row['name']."</a></h2>
</div>
");
//for 508 validation could also do this but it is redundant with the wrapper link title:
//<img src=\"img/".$row['image']."\" alt=\"Thumbnail of project screenshot for " .$row['name'] . "\"/>
//loop closes within the script that imports this snippet
?>
