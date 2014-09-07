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
                'padding'        : 10,
                    'helpers': {
                        overlay: {
                            locked: false
                        }
                    },
                'autoScale'         : false,
                'transitionIn'      : 'none',
                'transitionOut'     : 'none',
                'title'             : this.title,
                'href'              : this.href + '?autoplay=1',
                'type'              : 'iframe'
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
                    <h4 class="font-thin">My name is <span class="font-semibold">Anthony D Paul</span> and I help digital brands build stronger, more meaningful customer relationships. I&rsquo;m also told I&rsquo;m a pretty fun guy.</h4>
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
                    <h4 class="font-thin">With senior experience across creative, technical, and strategic roles, in all phases of an interactive project lifecycle, I&rsquo;m well-suited for producing on-point product and process recommendations&mdash;strengthening brand-audience relationships and minimizing administrative overhead.</h4>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <img src="images/service-specification.png" alt="Specification Documents">
                    <h2 class="font-semibold">Specification <br>Documents</h2>
                    <h4 class="font-thin">Following project initiation, my focus shifts to applying analysis learnings into build documents that prepare creative and technical teams for success without stifling innovation. Employing a lean UX philosophy, I identify tools critical to explaining project-specific intricacies, tailored to the decision-makers and production team receiving them.</h4>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <img src="images/service-concepts.png" alt="Concepts and Prototypes">
                    <h2 class="font-semibold">Concepts &amp; <br>Prototypes</h2>
                    <h4 class="font-thin">With a design and development background, I don&rsquo;t shy away from getting my hands dirty. Whether crafting a &ldquo;sloppy&rdquo; paper prototype, or committing proof-of-concept code to the repository, I work directly with creative and technical teams to support critical decision-making and advance toward client acceptance.</h4>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <img src="images/service-quality.png" alt="Quality Assurance">
                    <h2 class="font-semibold">Quality <br>Assurance</h2>
                    <h4 class="font-thin">Throughout all phases of a project, and in key testing milestones, I monitor quality across design, experience, and technical implementation&mdash;balancing innovation with practicality. When executing test plans, I lean on my analysis experience to provide solutions to bugs, rather than red X&rsquo;s.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slide story" id="slide-3" data-slide="3">
        <div class="row">
<?php

$portfoliourl = "images/portfolio/";

$portfolio = array(
    array( 'large' => "1-large.png",   'thumb' => "1.png",     'title' => "portfolio item"),
    array( 'large' => "2-large.png",   'thumb' => "2.png",     'title' => "portfolio item"),
    array( 'large' => "3-large.png",   'thumb' => "3.png",     'title' => "portfolio item"),
    array( 'large' => "4-large.png",   'thumb' => "4.png",     'title' => "portfolio item"),
    array( 'large' => "5-large.png",   'thumb' => "5.png",     'title' => "portfolio item"),
    array( 'large' => "6-large.png",   'thumb' => "6.png",     'title' => "portfolio item"),
    array( 'large' => "7-large.png",   'thumb' => "7.png",     'title' => "portfolio item"),
    array( 'large' => "8-large.png",   'thumb' => "8.png",     'title' => "portfolio item"),
    array( 'large' => "9-large.png",   'thumb' => "9.png",     'title' => "portfolio item"),
    array( 'large' => "10-large.png",  'thumb' => "10.png",    'title' => "portfolio item"),
    array( 'large' => "11-large.png",  'thumb' => "11.png",    'title' => "portfolio item"),
    array( 'large' => "12-large.png",  'thumb' => "12.png",    'title' => "portfolio item"),
    array( 'large' => "13-large.png",  'thumb' => "13.png",    'title' => "portfolio item"),
    array( 'large' => "14-large.png",  'thumb' => "14.png",    'title' => "portfolio item"),
    array( 'large' => "15-large.png",  'thumb' => "15.png",    'title' => "portfolio item"),
    array( 'large' => "16-large.png",  'thumb' => "16.png",    'title' => "portfolio item")
);

foreach($portfolio AS $item){
    echo "            <div class=\"col-12 col-sm-6 col-lg-2\"><a data-fancybox-group=\"portfolio\" class=\"fancybox\" href=\"" .$portfoliourl.$item['large']. "\"><img class=\"thumb\" src=\"" .$portfoliourl.$item['thumb']. "\" alt=\"" .$item['title']. "\"></a></div>\n";
}

// <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="video" href="http://player.vimeo.com/video/###"><img class="thumb" src="images/port2.jpg" alt="portfolio item"></a></div>

?>
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
                <div class="col-12 col-sm-10 font-light">I&rsquo;ve helped commercial, non-profit, and government&mdash;organizations large and small.</div>
                <div class="col-sm-1 hidden-sm">&nbsp;</div>
            </div>
            <div class="row content-row">

<style>
.client-logo{
    width:160px;
    height:90px;
    text-align:center;
    background-color:#fff;
    box-shadow: 5px 5px 0px rgba(44, 51, 57, 0.5);
    float:left;
    margin:0px 0px 20px 20px;
    display:flex;
}

.client-logo:first-child{
    margin-left:0px;
}

.client-logo img{
    margin:auto;
}

</style>

<?php

$clientsurl = "images/clients/";

$clients = array(
    array( 'title' => "AARP",                                       'filename' => "aarp.gif"        ),
    array( 'title' => "Banner &amp; Witcoff",                       'filename' => "banner.gif"      ),
    array( 'title' => "DECA",                                       'filename' => "deca.gif"        ),
    array( 'title' => "Family Health International (FHI)",          'filename' => "fhi.gif"         ),
    array( 'title' => "Kiddie Academy",                             'filename' => "kiddie.gif"      ),
    array( 'title' => "MetLife",                                    'filename' => "metlife.gif"     ),
    array( 'title' => "NASA",                                       'filename' => "nasa.gif"        ),
    array( 'title' => "Nationwide Insurance",                       'filename' => "nationwide.gif"  ),
    array( 'title' => "NetworkSolutions",                           'filename' => "netsol.gif"      ),
    array( 'title' => "Paxton Van Lines",                           'filename' => "paxton.gif"      ),
    array( 'title' => "Procter &amp; Gamble",                       'filename' => "pg.gif"          ),
    array( 'title' => "T. Rowe Price",                              'filename' => "trowe.gif"       ),
    array( 'title' => "U.S. Army",                                  'filename' => "army.gif"        ),
    array( 'title' => "U.S. Army National Guard",                   'filename' => "ng.gif"          ),
    array( 'title' => "U.S. Department of Defense",                 'filename' => "dod.gif"         ),
    array( 'title' => "U.S. Environmental Protection Agency (EPA)", 'filename' => "epa.gif"         ),
    array( 'title' => "U.S. Federal Trade Commission (FTC)",        'filename' => "ftc.gif"         ),
    array( 'title' => "U.S. Government Printing Office (GPO)",      'filename' => "gpo.gif"         ),
    array( 'title' => "U.S. National Parks Service (NPS)",          'filename' => "nps.gif"         ),
    array( 'title' => "Weber Shandwick",                            'filename' => "weber.gif"       )
);

foreach($clients AS $client){
    echo "                <div class=\"client-logo\" title=\"" .$client['title']. "\"><img src=\"" .$clientsurl.$client['filename']. "\" alt=\"" .$client['title']. "\"></div>\n";
}

?>
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

                    <p>My history in shaping interactive experiences predates the birth of Google. Raised a traditional artist and diving into computers in the 80s, I was hacking together my first rickshaw websites in the 90s. This escalated into freelance work that lasted through college, where I discovered my love for cognitive and behavioral sciences. I went on to earn a science degree in <em>visual communication design</em> (Go <a href="http://design.osu.edu" target="_blank" title="Learn about The Ohio State University's Department of Design">Bucks</a>!), with supplementary studies in linguistics and web development. While in school, I declared an undergraduate research topic in wayfinding, shadowed professional mentors, organized field studies, presented research findings at conferences, studied abroad a few times, and was even invited to teach web development courses to my peers.</p>

                    <p>In my early professional career, I filled the roles of senior UI designer blended with full-stack developer—naturally segueing into strategic support and project specification services. Today, I tend to spend less time in Photoshop and PHP, and more time working directly with clients to identify business and process opportunities, defining and prototyping impactful, interactive, and engaging experiences.</p>

                    <p>Outside of work, I spend a lot of time cultivating professional Meetup groups and conferences in both the DC and Baltimore areas&mdash;speaking when I can, sponsoring, and otherwise supporting my fellow organizers as much as possible. As time permits, my side projects consist of being a Pacific War historian (specifically for <a href="http://www.yms299.org" target="_blank" title="Learn more about the yard minesweepers of WWII">Naval minesweepers</a>), a genealogist, an aspiring chef, an urban homesteader, and a humble student of world cultures.</p>

                    <h3>Agency Life</h3>

                    <ul>
                        <li><?php echo ((date('Y')-2014) > 1 ? (date('Y')-2014). ' years' : '1 year'); ?> &ndash; currently Senior UX Designer at <a href="http://www.eightshapes.com" target="_blank" title="Learn more about EightShapes">EightShapes</a> (DC)
    <!--                     <br>Senior User Experience Designer: <span>web design, UI development, product strategy, UX specification</span> --></li>

                        <li>3 years &ndash; formerly Senior Digital Strategist at <a href="http://www.adgcreative.com" target="_blank" title="Learn more about ADG Creative">ADG Creative</a> (Fort Meade, MD)
    <!--                     <br>Senior Digital Strategist: <span>full-stack (LAMP/UI) development, product strategy, UX specification</span> --></li>

                        <li>5 years &ndash; formerly Technical Lead at <a href="http://www.fathomcreative.com" target="_blank" title="Learn more about Fathom Creative">Fathom Creative</a> (DC)
    <!--                     <br>Technical Lead: <span>print/web design, full-stack (LAMP/UI) development, product strategy, UX specification</span> --></li>
                    </ul>
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
                <div class="col-12 col-sm-10 font-light">You&rsquo;ll find me out and about in the tech meetup scene across DC and Baltimore&mdash;say hello!</div>
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
            <div class="row content-row">
                <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
                <div class="col-12 col-sm-10 font-light">

                    <h3>Up Next</h3>

                    <ul><?php

$events = array(
    array( 'date1' => "2014-09-20", 'date2' => "",              'url' => "mobileuxcamp.com",            'title' => "Mobile UX Camp DC",         'location' => "",                   'activity' => ""),
    array( 'date1' => "2014-10-11", 'date2' => "",              'url' => "www.accessibilitycampdc.org", 'title' => "Accessibility Camp DC",     'location' => "",                   'activity' => "sponsoring"),
    array( 'date1' => "2014-10-17", 'date2' => "",              'url' => "2014.userfocus.org",          'title' => "UXPA DC User Focus",        'location' => "",                   'activity' => "employer sponsoring"),
    array( 'date1' => "2014-10-18", 'date2' => "",              'url' => "2014.baltimore.wordcamp.org", 'title' => "WordCamp Baltimore",        'location' => "",                   'activity' => "speaking"),
    array( 'date1' => "2014-10-25", 'date2' => "2014-10-26",    'url' => "2014.sf.wordcamp.org",        'title' => "WordCamp San Francisco",    'location' => "",                   'activity' => ""),
    array( 'date1' => "2014-11-12", 'date2' => "2014-11-14",    'url' => "world.phparch.com",           'title' => "PHP World DC",              'location' => "",                   'activity' => ""),
    array( 'date1' => "2015-01-10", 'date2' => "",              'url' => "uxcampdc.com",                'title' => "UX Camp DC",                'location' => "",                   'activity' => "speaking"),
    array( 'date1' => "2015-01-31", 'date2' => "",              'url' => "www.aafroanoke.org/addys/",   'title' => "AAF ADDYs",                 'location' => "Roanoke, VA",        'activity' => "judging"),
    array( 'date1' => "2015-02-09", 'date2' => "2015-02-11",    'url' => "interaction15.ixda.org",      'title' => "IxDA Interaction15",        'location' => "San Francisco, CA",  'activity' => ""),
    array( 'date1' => "2015-03-13", 'date2' => "2015-03-17",    'url' => "sxsw.com/interactive",        'title' => "SXSW Interactive",          'location' => "Austin, TX",         'activity' => "")
);

foreach($events AS $item){
    $tempdate1 = date('M', strtotime($item['date1']));
    $tempdate2 = date('d', strtotime($item['date1'])). ($item['date2'] ? '&ndash;' .date('d', strtotime($item['date2'])) : '');
    
    echo "                        <li>" .$tempdate1. ' ' .$tempdate2. " <a href=\"http://" .$item['url']. "\" target=\"_blank\" title=\"More information about " .$item['title']. "\">" .$item['title']. "</a>" .($item['activity'] ? ' (' .$item['activity']. ')' : ''). "</li>\n";
}

?>
                    </ul>
                </div>
                <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
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