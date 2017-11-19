<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Portfolio Records</title>
<link href="../../design/css/master.css" rel="stylesheet" type="text/css"/>
<link href="../admin.css" type="text/css" rel="stylesheet"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="../design/js/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.min.css"/>-->
  <script src="../../design/js/filter-search.js"></script>
  
</head>

<body id="edit-main">
<div id="container">
<section id="main-content">
<div id="content">
<h1>Portfolio Projects</h1>

 <?php
		include('dbinclude17.php');
		//pull all records
		$query="SELECT * from $table ORDER BY `year` DESC";
		$result=mysqli_query($mysqli, $query);
		$num=mysqli_num_rows($result);
		//PROCESS THE QUERY RESULT as array for multiple uses
		$rows = array();
		while($row = mysqli_fetch_assoc($result)){ 
			$rows[] = $row;
		}
		
		echo "<div id=\"info\"><p>There are <strong>$num records</strong> available.</p>";
		echo "<p><a href=\"create.php\" class=\"nextlink\">Create a new record</a></p>";
		//quick search
		echo "<div class=\"ui-widget\">
		  <label for=\"project-search\">Quick Search: </label>
		  <input id=\"project-search\" />
		</div>";
		
		echo"</div>"; // end #info box
		//main listing
		echo "<div id=\"project-list\">";
		//empty message for quick search
		echo "<p class=\"no-matches\"></p>";
		
		//JQUI quick search script data loop
		/*echo "<script>
		  $(function() {
			var projectNames = [";
			  $t = 1; //counter for unique titles
			foreach($rows as $row) { 
			echo "\"". $row['name'] . "\",";
			$t++;
		  }
			 
			echo "];
			$( \"#search\" ).autocomplete({
			  source: projectNames
			});
		  });
		  </script>";*/
		 //end quick search
		
		
	
		//loop through the project entries
		$i = 1; //counter used for div classes: 3up or 2up
		foreach($rows as $row) { 
			echo "<div id=\"" . $row['name'] . "\" class=\"project-entry\">";
			echo "<p><h2>" . $row['name'] . "</h2></p>";
			echo"<p>" . $row['year'] . ": " . $row['client'] . "</p>";
			echo "<div class=\"details\"><p class=\"desc\"><strong>Description:</strong> " . 
			$row['description'] ."</p><p class=\"contributions\"><strong>Contributions:</strong> " . 
			$row['contributions'] ."</p></div><!-- end details -->";
			//echo "<p><a class=\"toggle\">Show/Hide Details</a>";
			echo "<p class=\"edit-action\">
			<a class=\"toggle\">Show/Hide Details</a>
			<a href=\"updateformSingleCat.php?id=" .$row['id'] ."\">Edit</a> | <a href=\"/project.php?id=". $row['id'] ."\">View</a> | <a href=\"delete-confirm.php?id=" . $row['id']. "\">Delete</a></p>
			</div><!-- end project div -->
			";
			$i++;
		 }// end loop
		 echo "</div><!-- end projects list -->";
		?>
        
</div>
</section>
</div>
</body>
</html>
