<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="design/css/master.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="design/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- accessible tabs plugin -->
<script src="design/js/jQuery.tabs.js"></script>
<script src="design/js/tabs-init.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  //enhanced in-page analytics for same-page link variants
  	var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	//end in-page plugin
  _gaq.push(['_setAccount', 'UA-37940842-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="../design/js/portfolio.js"></script>
<!--[if lt IE 9]>
<script src="design/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<?php
$id=$_GET["id"];
include('admin/mysqli/dbinclude17.php');
$query="SELECT * from $table WHERE `id`=$id";
$result=mysqli_query($mysqli,$query);
$num=mysqli_num_rows($result);
$i=0;
while ($i <$num) {
//ASSOCIATE THE VARIABLES WITH THE DB FIELDS

//FIX! 2017. this syntax no longer works. recreate as object? See edit-list-search.php in admin


$name=mysqli_result($result,$i,"name");
$client=mysqli_result($result,$i,"client");
$year=mysqli_result($result,$i,"year");
$year2=mysqli_result($result,$i,"year2");
$image=mysqli_result($result,$i,"image");
$thumbnail=mysqli_result($result,$i,"thumbnail");
$description=mysqli_result($result,$i,"description");
$format=mysqli_result($result,$i,"format");
$origurl=mysqli_result($result,$i,"origurl");
$archiveurl=mysqli_result($result,$i,"archiveurl");
$contributions=mysqli_result($result,$i,"contributions");
$categories=mysqli_result($result,$i,"categories");
$i++;
}
?>
<title><? echo $name ?>- Emily Porter</title>
</head>

<body <?php 
if ($categories=="Web")
{ echo "id=\"Web\"";
}
elseif ($categories=="Graphics") {
	echo "id=\"Graphics\"";
}
elseif ($categories=="Experimental") {
	echo "id=\"Experimental\"";
}
?>>
<div id="container">
  <header role="banner">
  <a href="#main-content" class="accessible">Skip to content</a><!-- #BeginLibraryItem "/Library/header.lbi" --><a id="logo" href="index.html"><img src="design/img/logo.png" alt="porter://portfolio"/></a><!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/topnavPortfolio.lbi" --><nav id="primary-nav" role="navigation">
      <ul>
        <li><a href="index.html" id="home">Home</a></li>
        <li><a href="web.php" id="web">Web</a></li>
        <li><a href="graphics.php" id="graphics">Graphics &amp; 3D</a></li>
        <li><a href="experimental.php" id="experimental">Experimental</a></li>
        <li><a href="about.html" id="about">About</a></li>
      </ul>
    </nav><!-- #EndLibraryItem --></header>
  <section id="main-content" role="main">
    <div id="content" class="project">
      <h1 id="heading"><?php print("$name"); ?><?php echo " ($year"?><?php if ($year2!="0000") {echo "--$year2"; }?><?php echo ")"?></h1>
      <!-- end heading -->
      <figure>
        <?php if ($origurl!=NULL) { echo "<a href=\"$origurl\" target=\"blank\">";} 
		elseif ($archiveurl!=NULL) { echo "<a href=\"$archiveurl\" target=\"blank\">";} ?>
        <img src="img/<?php echo"$image";?>" alt="Screenshot from <?php echo"$name";?>" />
        <?php if($origurl!=NULL or $archiveurl!=NULL) { echo "</a>";} ?>
      </figure>
      <!-- end screenshot -->
      
      <?php 
		if ($archiveurl!=NULL) { echo "<p class=\"desctext view-link\"><strong>View: </strong><a href=\"$archiveurl\" target=\"blank\">Archived Version</a>		</p>";}
elseif ($origurl!=NULL) { echo "<p class=\"desctext view-link\"><strong>View: </strong><a href=\"$origurl\" target=\"blank\">Live Site </a></p>";} 				if ($client!=NULL) { echo"<p class=\"desctext\"><strong>Client</strong>:  $client </p>"; }
		?>
      <div class="tabs">
        <ul role="tablist">
          <li><a href="#tab-1">Project Description</a></li>
          <li class="last"><a href="#tab-2">Contributions</a></li>
        </ul>
        <div class="tab active" id="tab-1" role="tabpanel">
        	<p><span class="hidden">Project Description: </span><?php echo "$description"; ?></p>
            </div>
        <div class="tab" id="tab-2" role="tabpanel">
          <p><span class="hidden">Contributions: </span><?php echo "$contributions"; ?></p>
        </div>
        <!--      <h2 class="tab" id="tabhead-2"><a>Project Description</a></h2>
-->
        
      </div>
      <!-- end tabs -->
      
      <p class="project-nav"><a href="<?php 
	  if ($categories=="Web")
		{ echo "web.php";}
		elseif ($categories=="Graphics") {echo "graphics.php";}
		elseif ($categories=="Experimental") {echo "experimental.php";}?>" class="prevlink">Back to <?php echo"$categories"; ?> List</a></p>
    </div>
    <!-- end content --> 
  </section>
  <!-- end section --><!-- #BeginLibraryItem "/Library/footer.lbi" --><footer role="contentinfo"><span class="hidden">http://www.emilyporter.net </span>©2013 Emily Porter</footer><!-- #EndLibraryItem --><!--end footer --> 
</div>
<!-- end container -->

</body>
</html>
