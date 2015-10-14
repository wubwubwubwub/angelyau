<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<!-- Meta tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="en-us" />
		<meta http-equiv="imagetoolbar" content="false" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="robots" content="all" />
		<meta name="revisit-after" content="3 days" />
		<meta name="description" content="angel yau" />
		<meta name="keywords" content="angel yau" />
		<meta name="author" content="Angel Yau (www.angelyau.com)" />
		<meta name="Copyright" content="Angel Yau" />
		<meta name="company" content="Angel Yau" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="" type="image/png" />

		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" media="all" href="/css/ay.css" />
		<!--[if lte IE 6]>
			<link rel="stylesheet" type="text/css" media="all" href="/css/ie.css" />
		<![endif]-->
		
		<!-- JQuery -->
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script>
		var $j = jQuery.noConflict();
		
		$j(document).ready(function(){
			$j("a").filter(".back").hide();
			$j("a").filter(".showmovie1").click(function(){
				$j("ul").filter("#nav").hide();
				$j("a").filter(".back").show();
				$j("div").filter(".movie").load("movies.html .movie1");
				return false;
			});
			$j("a").filter(".showmovie2").click(function(){
				$j("ul").filter("#nav").hide();
				$j("a").filter(".back").show();
				$j("div").filter(".movie").load("movies.html .movie2");
				return false;
			});
			$j("a").filter(".showmovie3").click(function(){
				$j("ul").filter("#nav").hide();
				$j("a").filter(".back").show();
				$j("div").filter(".movie").load("movies.html .movie3");
				return false;
			});
			$j("a").filter(".back").click(function(){
				$j("ul").filter("#nav").show();
				$j("a").filter(".back").hide();
				$j("div").filter(".movie").load("movies.html .none");
				return false;
			});
			$j("div").filter(".hide").hide();
			$j("a").filter(".cat-title").click(function(){
				$j(this).parent().next().toggle();
				return false;
			});
		});
		</script>


		<!-- Title -->
		<title>Angel Yau!!!!!! &raquo; BLOG</title>

	</head>

	<body>
			<!-- BEGIN menu -->
			<div id="corkboard">
				<ul id="nav">
					<li><a href="/blog/" class="home"></a></li>
					<li><a href="/thoughts/" class="thought"><span></span></a></li>
					<li><a href="/films/" class="films"><span></span></a></li>
					<li><a href="/design/" class="photos"><span></span></a></li>
					<li><a href="/performances/" class="performances"><span></span></a></li>
					<li><a href="/writings/" class="writings"><span></span></a></li>
				</ul>

				
				
				
			</div>
			<!-- END menu -->

	
		<!-- BEGIN content -->
		<div id="whiteboard">
			<img src="/imgs/newshead.jpg" class="floatleft" />
			<div class="contact"><br/><br/>
			<a href="mailto:yauangel@gmail.com">email</a>
			/ 
			<a href="http://www.facebook.com/pages/Angel-Yau/10472129390">facebook</a></div>
			<br class="columnEnder" />

			
			<!-- BEGIN main -->
			<div id="main">