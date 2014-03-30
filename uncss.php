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
	<link rel="stylesheet" type="text/css" href="css/grunt-uncss.css">	
	
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
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand visible-sm" href="#"><img src="images/adp-mobile.png" alt="anthonydpaul"></a>
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">WELCOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-about"></span> <span class="text">SERVICES</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-portfolio"></span> <span class="text">WORK</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-clients"></span> <span class="text">BRANDS</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-5" title="Next Section"><span class="icon icon-contact"></span> <span class="text">BIO</span></a></li>
					<li data-slide="6" class="col-12 col-sm-2"><a id="menu-link-6" href="#slide-6" title="Next Section"><span class="icon icon-contact"></span> <span class="text">CONNECT</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div>
	
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<img src="images/adp-logo.png" alt="anthonydpaul"><br>
					<h4 class="font-thin">My name is <span class="font-semibold">Anthony D Paul</span> and I help digital brands build stronger, more meaningful customer relationships. I’m also told I'm a pretty fun guy.</h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">What</span> I Do</div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Design and development are my roots, but user experience is my passion and path.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<img src="images/service-analysis.png" alt="Analysis and Recommendations">
					<h2 class="font-semibold">Analysis &amp; <br>Recommendations</h2>
					<h4 class="font-thin">With senior experience across creative, technical, and strategic roles, in all phases of an interactive project lifecycle, I’m well-suited for producing on-point product and process recommendations—strengthening brand-audience relationships and minimizing administrative overhead.</h4>
				</div>
				<div class="col-12 col-lg-3 col-sm-6">
					<img src="images/service-specification.png" alt="Specification Documents">
					<h2 class="font-semibold">Specification <br>Documents</h2>
					<h4 class="font-thin">Following project initiation, my focus shifts to applying analysis learnings into build documents that prepare creative and technical teams for success without stifling innovation. Employing the light UX philosophy, I identify tools critical to explaining project-specific intricacies, tailored to the decision-makers and production team receiving them.</h4>
				</div>
				<div class="col-12 col-lg-3 col-sm-6">
					<img src="images/service-concepts.png" alt="Concepts and Prototypes">
					<h2 class="font-semibold">Concepts &amp; <br>Prototypes</h2>
					<h4 class="font-thin">With a design and development background, I don’t shy away from getting my hands dirty. Whether crafting a “sloppy” paper prototype, or committing proof-of-concept code to the repository, I work directly with creative and technical teams to support critical decision-making and advance toward client acceptance.</h4>
				</div>
				<div class="col-12 col-lg-3 col-sm-6">
					<img src="images/service-quality.png" alt="Quality Assurance">
					<h2 class="font-semibold">Quality <br>Assurance</h2>
					<h4 class="font-thin">Throughout all phases of a project, and in key testing milestones, I monitor quality across design, experience, and technical implementation—balancing innovation with practicality. When executing test plans, I lean on my analysis experience to provide solutions to bugs, rather than red X’s.</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/1-large.png"><img class="thumb" src="images/portfolio/1.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/2-large.png"><img class="thumb" src="images/portfolio/2.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/3-large.png"><img class="thumb" src="images/portfolio/3.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/4-large.png"><img class="thumb" src="images/portfolio/4.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/5-large.png"><img class="thumb" src="images/portfolio/5.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/6-large.png"><img class="thumb" src="images/portfolio/6.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/7-large.png"><img class="thumb" src="images/portfolio/7.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/8-large.png"><img class="thumb" src="images/portfolio/8.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/9-large.png"><img class="thumb" src="images/portfolio/9.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/10-large.png"><img class="thumb" src="images/portfolio/10.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/11-large.png"><img class="thumb" src="images/portfolio/11.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/12-large.png"><img class="thumb" src="images/portfolio/12.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/13-large.png"><img class="thumb" src="images/portfolio/13.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/14-large.png"><img class="thumb" src="images/portfolio/14.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/15-large.png"><img class="thumb" src="images/portfolio/15.png" alt="portfolio item"></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/16-large.png"><img class="thumb" src="images/portfolio/16.png" alt="portfolio item"></a></div>

			<!--<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="video" href="http://player.vimeo.com/video/###"><img class="thumb" src="images/port2.jpg" alt="portfolio item"></a></div>-->
		</div>
	</div>

	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Brands</span> I&rsquo;ve Had Pleasure of Working With</div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">I've helped commercial, non-profit, and government&mdash;organizations large and small.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div class="row content-row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2" title="AARP"><img src="images/clients/aarp.png" alt="AARP"></div>
				<div class="col-12 col-sm-2" title="Banner &amp; Witcoff"><img src="images/clients/banner.png" alt="Banner &amp; Witcoff"></div>
				<div class="col-12 col-sm-2" title="DECA"><img src="images/clients/deca.png" alt="DECA"></div>
				<div class="col-12 col-sm-2" title="Family Health International (FHI)"><img src="images/clients/fhi.png" alt="Family Health International (FHI)"></div>
				<div class="col-12 col-sm-2" title="Kiddie Academy"><img src="images/clients/kiddie.png" alt="Kiddie Academy"></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div id="about-row-5" class="row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2" title="MetLife"><img src="images/clients/metlife.png" alt="MetLife"></div>
				<div class="col-12 col-sm-2" title="NASA"><img src="images/clients/nasa.png" alt="NASA"></div>
				<div class="col-12 col-sm-2" title="Nationwide Insurance"><img src="images/clients/nationwide.png" alt="Nationwide Insurance"></div>
				<div class="col-12 col-sm-2" title="NetworkSolutions"><img src="images/clients/netsol.png" alt="NetworkSolutions"></div>
				<div class="col-12 col-sm-2" title="Paxton Van Lines"><img src="images/clients/paxton.png" alt="Paxton Van Lines"></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div id="about-row-5" class="row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2" title="Procter &amp; Gamble"><img src="images/clients/pg.png" alt="Procter &amp; Gamble"></div>
				<div class="col-12 col-sm-2" title="T. Rowe Price"><img src="images/clients/trowe.png" alt="T. Rowe Price"></div>
				<div class="col-12 col-sm-2" title="U.S. Army"><img src="images/clients/army.png" alt="U.S. Army"></div>
				<div class="col-12 col-sm-2" title="U.S. Army National Guard"><img src="images/clients/ng.png" alt="U.S. Army National Guard"></div>
				<div class="col-12 col-sm-2" title="U.S. Department of Defense"><img src="images/clients/dod.png" alt="U.S. Department of Defense"></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div id="about-row-5" class="row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2" title="U.S. Environmental Protection Agency (EPA)"><img src="images/clients/epa.png" alt="U.S. Environmental Protection Agency (EPA)"></div>
				<div class="col-12 col-sm-2" title="U.S. Federal Trade Commission (FTC)"><img src="images/clients/ftc.png" alt="U.S. Federal Trade Commission (FTC)"></div>
				<div class="col-12 col-sm-2" title="U.S. Government Printing Office (GPO)"><img src="images/clients/gpo.png" alt="U.S. Government Printing Office (GPO)"></div>
				<div class="col-12 col-sm-2" title="U.S. National Parks Service (NPS)"><img src="images/clients/nps.png" alt="U.S. National Parks Service (NPS)"></div>
				<div class="col-12 col-sm-2" title="Weber Shandwick"><img src="images/clients/weber.png" alt="Weber Shandwick"></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div>
		</div>
	</div>

	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-light">My <span class="font-semibold">Story</span></div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">How I Became a <a href="http://www.uxbooth.com/articles/ux-unicorns-and-other-fanciful-creatures/" target="_blank" title="UX Unicorn defined in an article about the diciplines a designer and developer learns to become a user experience practitioner">UX Unicorn</a></div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div class="row content-row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">
				
				<p>Currently <em>senior digital strategist</em> at the Baltimore/DC agency <a href="http://www.adgcreative.com" target="_blank" title="Learn more about ADG Creative">ADG Creative</a>, I&rsquo;ve been creating interactive experiences in some capacity since before the birth of Google. Raised a traditional artist and diving into computers in the 80s, I was designing, coding, and producing animations for my first (hideous) websites in the 90s. This escalated into freelance work that lasted through college, where I discovered my love for navigation psychology and human behavior.</p>

				<p>With a science degree in <em>visual communication design</em> on paper (Go <a href="http://design.osu.edu" target="_blank" title="Learn about The Ohio State University's Department of Design">Bucks</a>!), I unofficially triple-majored in design, linguistics, and web development. The program I was looking for didn&rsquo;t exist at the time, so I declared an undergraduate research topic in wayfinding, sought out professional mentors, organized field studies, presented research findings at conferences, studied abroad a few times, and was even invited to teach web development courses to my peers.</p>

				<p>Moving to DC in 2006, I concluded my freelance projects and transitioned into the agency world via <a href="http://www.fathomcreative.com" target="_blank" title="Learn more about Fathom Creative">Fathom Creative</a>&mdash;mentoring with the best in client-relations, project management, interactive art direction, and digital strategy. In my five years at Fathom, I and our inspiring teams transformed the agency from a talented print shop into one of the premier interactive agencies in DC&mdash;winning and producing innovative work against much larger and more established area agencies. I&rsquo;d grown from designer and developer, into a bridge across disciplines, uniquely positioned for client and team advisement. The user experience and mobile fields were just beginning to enter our vocabulary, and with that I explored new challenges in 2011.</p>

				<p>Today, I tend to spend less time in Photoshop and PHP, and more time streamlining agency-side processes, creating new/reusable specification tools, elevating quality control, working directly with clients to identify opportunities, and prioritizing project goals to build sustainable tools that grow alongside brands and audiences. Outside of work, I spend a lot of time cultivating professional Meetup groups and conferences in both the DC and Baltimore areas&mdash;speaking when I can, sponsoring, and otherwise supporting my fellow organizers as much as possible. As time permits, my side projects consist of being a Pacific War historian (specifically for <a href="http://www.yms299.org" target="_blank" title="Learn more about the yard minesweepers of WWII">Naval minesweepers</a>), a genealogist, an aspiring chef, an urban homesteader, and a humble student of world cultures.</p>

				</div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div>
		</div>
	</div>

	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Let's <span class="font-semibold">Connect</span></div>
			</div>
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">You'll find me out and about in the tech meetup scene across DC and Baltimore&mdash;say hello!</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div>
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<a href="mailto:me@anthonydpaul.com?Subject=Hello%20ADP" target="_blank" title="Shoot me an email"><img src="images/social-email.png" alt="Email" /></a>
				</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<a href="http://www.linkedin.com/in/anthonydpaul/" target="_blank" title="Connect on LinkedIn"><img src="images/social-linkedin.png" alt="LinkedIn" /></a>
				</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<a href="http://www.twitter.com/anthonydpaul" target="_blank" title="Follow on Twitter"><img src="images/social-twitter.png" alt="Twitter" /></a>
				</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<a href="http://www.meetup.com/members/8943452/" target="_blank" title="Friend on Meetup"><img src="images/social-meetup.png" alt="Meetup" /></a>
				</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<a href="http://www.pinterest.com/anthonydpaul/" target="_blank" title="Follow on Pinterest"><img src="images/social-pinterest.png" alt="Pinterest" /></a>
				</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div>
		</div>
	</div>

<!--
<a href="http://www.facebook.com/anthonydpaul" target="_blank" title="Friend on Facebook"><img src="#" alt="Facebook" /></a>
<a href="http://www.foursquare.com/anthonydpaul" target="_blank" title="Friend on Foursquare"><img src="#" alt="Foursquare" /></a>
-->

	<div class="slide story" id="slide-7" data-slide="7">
		Copyright &copy; <?php echo date('Y'); ?>, Anthony D Paul
	</div>
</body>
</html>