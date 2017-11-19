<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/core.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Emily Porter: Graphic Design &amp; 3D Work</title>
<!-- InstanceEndEditable -->
<link href="design/css/master.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="design/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
<script src="design/js/portfolio.js"></script>
<!--[if lt IE 9]>
<script src="design/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<script src="design/js/slimbox-2.04/js/slimbox-custom-patched.js"></script>
<script src="design/js/slimbox-2.04/js/autoload.js"></script>
<link href="design/js/slimbox-2.04/css/slimbox2.css" rel="stylesheet" type="text/css"/>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="id" type="text" value="Graphics" -->
</head>
<body id="Graphics">
<div id="container">
<header role="banner">
<a href="#main-content" class="accessible">Skip to content</a>
<!-- #BeginLibraryItem "/Library/header.lbi" --><a id="logo" href="index.html"><img src="design/img/logo.png" alt="porter://portfolio"/></a><!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/topnavPortfolio.lbi" --><nav id="primary-nav" role="navigation">
      <ul>
        <li><a href="index.html" id="home">Home</a></li>
        <li><a href="web.php" id="web">Web</a></li>
        <li><a href="graphics.php" id="graphics">Graphics &amp; 3D</a></li>
        <li><a href="experimental.php" id="experimental">Experimental</a></li>
        <li><a href="about.html" id="about">About</a></li>
      </ul>
    </nav><!-- #EndLibraryItem --></header>

  <section id="main-content" role="main">
    <div id="content">
      <h1 id="heading"><!-- InstanceBeginEditable name="content-title" -->Graphic Design and 3D Projects<!-- InstanceEndEditable --></h1>
      <!-- InstanceBeginEditable name="content" --> <p>The following samples showcase 2D and 3D visual design skills for screen and print.</p>
      <!--rel="lightbox" -->
      <p><a class="nextlink" id="viewAll">View all projects as slideshow</a></p>
      <?php
		include('admin/mysqli/dbinclude17.php');
		$query="SELECT * from $table WHERE `categories`='Graphics' and `recordstatus`!='Inactive' ORDER BY `year` DESC";
		$result=mysqli_query($mysqli,$query);
		//PROCESS THE QUERY RESULT
    while ($row = mysqli_fetch_array($result))
    {
      $rows[] = $row;
		}
		//loop through the project entries
		$i = 1; //counter used for div classes: 3up or 2up
		foreach($rows as $row) {
			include('grid-loop.php');
			$i++;
		 }

		?><!-- #BeginLibraryItem "/Library/slimbox-custom-launch.lbi" --> <!-- slimbox data for text link to launch slideshow -->
      <script>
		$(document).ready(function(e) {
			$("#viewAll").click(function() {
			jQuery.slimbox([
				//SECOND PHP LOOP using the prev stored array values
				<?
				foreach($rows as $row) {
				echo "[\"img/" .$row['image'] . "\", \"". $row['name'] ."<br/><a href=project.php?id=" .$row['id']. ">View Project Page</a>\"],";
				}
				?>
				], 0);
			});
		});
		</script> <!-- #EndLibraryItem --><!-- InstanceEndEditable -->
      </div>
  </section><!-- #BeginLibraryItem "/Library/footer.lbi" --><footer role="contentinfo"><span class="hidden">http://www.emilyporter.net </span>©2013 Emily Porter</footer><!-- #EndLibraryItem --></div>
<!-- end container -->
</body>
<!-- InstanceEnd --></html>
