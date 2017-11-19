<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Update Project</title>
<link rel="stylesheet" type="text/css" href="../../design/css/master.css"/>
<link rel="stylesheet" type="text/css" href="../admin.css"/>
</head>

<body>
<div id="container">
<section id="main-content">
<div id="content">
<h1>Update Portfolio Entry</h1>
<div id="info">
<h3>Quick Links</h3>
<p><a href="edit-list-search.php">View all Projects</a></p>
<p><a href="create.php">Create a New Project</a></p>
<p><a href="/index.html" class="nextlink">View Live Site</a></p>
</div>
<?php
$id=$_GET['id'];

include('dbinclude17.php');

$query="SELECT * from $table WHERE id = '$id'";
$result=mysqli_query($mysqli, $query) or die("problem with SQL query".mysqli_error());
$row=mysqli_fetch_array($result);
//$guidesarray=$row["guidesarray"];
//$guidesList=explode(",",$guidesarray);
//Convert problem characters

$name=$row["name"];
$client=$row["client"];
$year=$row["year"];
$year2=$row["year2"];
$image=$row["image"];
$thumbnail=$row["thumbnail"];
$description=stripslashes($row["description"]);
$origurl=$row["origurl"];
$archiveurl=$row["archiveurl"];
$contributions=$row["contributions"];
$format=$row["format"];
$categories=$row["categories"];
$recordstatus=$row["recordstatus"];
//$categories=explode(",",$categories);

//print("Script TEST <br>");
//print("Accesstype1=$accesstype1");
?>
<form action="update.php?id=$id" method="post" name="form1" id="form1">
  <!--UPDATE SCRIPT WON'T UPDATE WITHOUT THE HIDDEN ID FIELD, B/C IT DOESN'T KNOW ID-->
  <input type="hidden" name="id" value="<? echo "$id"; ?>" />
   <!-- didn't get this working -->
<fieldset>
    <legend>Portfolio Status</legend>
    <label><span>Active</span>
     <input type="radio" name="recordstatus" value="Active" <? if($recordstatus == 'Active') {echo "checked = \"checked\"";} ?> />
    </label>
    
    <label><span>Inactive</span>
    <input type="radio" name="recordstatus" value="Inactive" <? if($recordstatus == 'Inactive') {echo "checked = \"checked\"";} ?> />
    </label>
  </fieldset>
  <label><span>Project Name</span>
    <input name="name" type="text" value="<?php echo $name; ?>" size="35">
  </label>
  <label><span>Client </span>
    <input name="client" type="text" id="client" value="<?php echo $client; ?>" size="35">
  </label>
  <label><span>Year 1 </span>
    <input name="year" type="text" id="year" value="<?php echo $year; ?>" size="35" />
  </label>
  <label><span>Year 2</span>
    <input name="year2" type="text" id="year2" value="<?php echo $year2; ?>" size="35" />
  </label>
  <label><span>Image</span>
    <input name="image" type="text" id="image" value="<?php echo $image; ?>" size="35">
  </label>
  <label><span>Thumbnail</span>
    <input name="thumbnail" type="text" id="thumbnail" value="<? echo $thumbnail; ?>" size="35">
  </label>
  <label><span>Description</span>
    <textarea name="description" cols="35" rows="6"><?php echo $description; ?></textarea>
  </label>
  <label><span>Original URL </span>
    <input name="origurl" type="text" id="origurl" value="<?php echo $origurl; ?>" size="35" />
  </label>
  <label><span>Archive URL </span>
    <input name="archiveurl" type="text" id="archiveurl" value="<?php echo $archiveurl; ?>" size="35" />
  </label>
  <label><span>Contributions</span>
    <textarea name="contributions" cols="35" rows="3" id="contributions"><?php echo $contributions; ?></textarea>
  </label>
<!--  <p class="label" id="format"><span>Format</span> -->
    <!--<input name="format" type="text" value="<?php echo $format; ?>" />-->
   <!-- <select name="format2" id="format2">
      <option value="Web">Web</option>
      <option value="Print">Print</option>
      <option value="3D">3D</option>
      <option value="Interactive/Multimedia">Interactive/Multimedia</option>
      <option value="Video">Video</option>
    </select>-->
    <!--(<?php echo $format; ?>)</p>-->

  <p class="label"><span>Category</span>
   <!-- <input name="categories" type="text" value="<?php echo $categories; ?>" /> -->
  </p>
  <select name="categories" id="categories">
  <!-- now that the category is a single assignment only, put the current assignment as selected even though it is redundant -->
	<option value="<?php echo $categories; ?>" selected="selected"><?php echo $categories; ?></option>  
      <option value="Web">Web</option>
      <option value="Graphics">Graphics</option>
      <option value="Experimental">Experimental</option>
      <option value="Interactive">Interactive</option>
      <option value="Video">Video</option>
    </select>
  <!--<label>
    <input name="categories2[]" type="checkbox" value="Web" />
    Web</label>
  <label>
    <input name="categories2[]" type="checkbox" value="Graphics" />
    Graphics </label>
  <label>
    <input name="categories2[]" type="checkbox" value="Interactive" />
    Interactive</label>
  <label>
    <input name="categories2[]" type="checkbox" value="Video" />
    Video </label>
    <label>
      <input name="categories[]" type="checkbox" value="Experimental">
      Experimental</label>
-->

  <p class="form-submit">
    <input type="reset" name="Reset" value="Clear All" />
    <input type="submit" name="Submit2" value="Update Record" />
  </p>
</form>
<!-- MAIN CONTENT END HERE -->
</div>
</section>
</div>
</body>
</html>
