<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../design/css/master.css"/>
<link rel="stylesheet" type="text/css" href="../admin.css"/>
<title>Create Project</title>
</head>

<body>
<div id="container">
<section id="main-content">
<div id="content">
<h1>Create a New Record</h1>
<div id="info">
<h3>Quick Links</h3>
<p><a href="edit-list-search.php">View all Projects</a></p>
<p><a href="create.php">Create a New Project</a></p>
<p><a href="/index.html" class="nextlink">View Live Site</a></p>
</div>
<form name="form1" method="post" action="insert.php">
<fieldset>
    <legend>Portfolio Status</legend>
    <label><span>Active</span>
     <input type="radio" name="recordstatus" value="Active" checked="checked"/>
    </label>
    <label><span>Inactive</span>
    <input type="radio" name="recordstatus" value="Inactive"/>
    </label>
  </fieldset>
  <label><span>Project Name</span>
    <input name="name" type="text" size="35" value="">
  </label>
  <label><span>Original URL</span>
    <input name="origurl" type="text" id="origurl" value="" size="35">
  </label>
  <label><span>Archived URL</span>
    <input name="archiveurl" type="text" id="archiveurl" size="35">
  </label>
  <label><span>Client</span>
    <input name="client" type="text" id="client" size="35">
  </label>
  <label><span>Year 1</span>
    <input name="year" type="text" id="year" size="35">
  </label>
  <label><span>Year 2</span>
    <input name="year2" type="text" id="year2" size="35">
  </label>
  <label><span>Description</span>
    <textarea name="description" cols="35" rows="6" id="description"></textarea>
  </label>
  <label><span>Contributions</span>
    <textarea name="contributions" cols="35" rows="4" id="contributions"></textarea>
  </label>
  <label><span>Screenshot</span>
    <input name="image" type="text" id="image" size="35" placeholder="filename400.jpg">
  </label>
  <label><span>Thumbnail</span>
    <input name="thumbnail" type="text" id="thumbnail" size="35" placeholder="filename100.jpg">
  </label>
 <!-- <input type="hidden" name="format" value=""/>-->
  <!--<p class="label"><span>Format</span>
    <select name="format">
      <option value="Web">Web</option>
      <option value="Print">Print</option>
      <option value="3D">3D</option>
      <option value="Interactive/Multimedia">Interactive/Multimedia</option>
      <option value="Video">Video</option>
    </select>
  </p>
-->
    <p class="label"><span>Categories:</span></p>
     <select name="categories" id="categories">
      <option value="Web">Web</option>
      <option value="Graphics">Graphics</option>
      <option value="Experimental">Experimental</option>
      <option value="Interactive">Interactive</option>
      <option value="Video">Video</option>
    </select>
    <!--<label>
      <input name="categories[]" type="checkbox" value="Web">
      Web</label>
    <label>
      <input name="categories[]" type="checkbox" value="Graphics">
      Graphics </label>
    <label>
      <input name="categories[]" type="checkbox" value="Interactive">
      Interactive</label>
    <label>
      <input name="categories[]" type="checkbox" value="Video">
      Video </label>
      <label>
      <input name="categories[]" type="checkbox" value="Experimental">
      Experimental</label>-->
  <p class="form-submit">
  <input type="reset" name="Reset" value="Clear All">
  <input type="submit" name="Submit2" value="Create Record">
  </p>
  
</form>
</div>
</section>
</div>
</body>
</html>
