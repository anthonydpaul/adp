<?php ?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>Anthony D Paul | User Experience Architect</title> 
	<meta name="description" content="My name is Anthony D Paul (anthonydpaul), UX architect, designer, and developer. I help digital brands build stronger, more meaningful customer relationships." />
	<meta name="keywords" content="ixda, ux, user experience, digital, strategist, php, seo, css, design, interactive, dc, adg creative, fathom creative" />
	<meta name="designer" content="Anthony D Paul (anthonydpaul)" />
	<meta property="og:title" content="Anthony D Paul | User Experience Architect" />
	<meta property="og:description" content="My name is Anthony D Paul (anthonydpaul), UX architect, designer, and developer. I help digital brands build stronger, more meaningful customer relationships." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://anthonydpaul.com" />
	<meta property="og:site_name" content="Anthony D Paul | User Experience Architect" />

	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<!--<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">-->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,600,300,200" rel="stylesheet" type="text/css">
	<!--<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />-->
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	
	<link rel="prefetch" href="images/zoom.png">
	<link rel="prefetch" href="images/videoproduction-play.png">

	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/helium.js"></script>
	
	<meta name="msapplication-TileColor" content="#e4e6e5">
	<meta name="msapplication-TileImage" content="/images/apple-icon.png">
	<link rel="apple-touch-icon" href="/images/apple-icon.png" />
	<link rel="icon" type="image/png" href="/images/favicon.png">
	<!--[if IE]><link rel="shortcut icon" href="/favicon.ico" /><![endif]-->
	
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-13271101-2', 'anthonydpaul.com');
	  ga('send', 'pageview');
	  
	</script>
	
	<script src="js/script.js?v=<?php echo date('mdY'); ?>"></script>
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
		
	
		$('a.video').click(function() {
			$.fancybox({
				'padding'		: 10,
					'helpers': {
						overlay: {
							locked: false
						}
					},
				'autoScale'		: false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'title'			: this.title,
				'href'			: this.href + '?autoplay=1',
				'type'			: 'iframe'
			});
	
			return false;
		});
	});
	</script>
</head>

<body>
hi
	
<script type="text/javascript">
    window.addEventListener('load', function(){

        helium.init();

    }, false);
</script>

</body>
</html>