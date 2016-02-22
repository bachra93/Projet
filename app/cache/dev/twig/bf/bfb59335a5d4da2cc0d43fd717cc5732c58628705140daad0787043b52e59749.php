<?php

/* ::base.html.twig */
class __TwigTemplate_b44fdcfa901171d13b6bde9e0b9fbe47f86bf9d214b65f3a36172cd7d10bef47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Voyage Website Template | Criuses :: devfloat</title>
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
                                    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Forum.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!---smoth-scrlling---->
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\$('a[href^=\"#\"]').on('click',function (e) {
\t\t\t\t\t\t\t\t\t    e.preventDefault();
\t\t\t\t\t\t\t\t\t    var target = this.hash,
\t\t\t\t\t\t\t\t\t    \$target = \$(target);
\t\t\t\t\t\t\t\t\t    \$('html, body').stop().animate({
\t\t\t\t\t\t\t\t\t        'scrollTop': \$target.offset().top
\t\t\t\t\t\t\t\t\t    }, 1000, 'swing', function () {
\t\t\t\t\t\t\t\t\t        window.location.hash = target;
\t\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t</script> 
\t\t<!---//smoth-scrlling---->
\t\t<!----start-top-nav-script---->
\t\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flexy-menu.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">\$(document).ready(function(){\$(\".flexy-menu\").flexymenu({speed: 400,type: \"horizontal\",align: \"right\"});});</script>
\t\t<!----//End-top-nav-script---->
\t\t<!---webfonts---->
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t\t<!---webfonts---->
\t\t<!---calender-style---->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
\t\t<!---//calender-style---->
\t\t<!---images-hover-effects--->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/zalki_hover_img.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.zalki_hover_img.min-0.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\t\$(window).load(function(){
\t\t\t\t\$('.main_box').ZalkiHoverImg(
\t\t\t\t);
\t\t\t\t});
\t\t</script>
\t\t<!---//images-hover-effects--->
\t</head>
\t<body>
\t\t<!----start-wrap---->
\t\t\t<!----start-top-header----->
\t\t\t<div class=\"top-header\" id=\"header\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t<div class=\"top-header-left\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><span> </span> Agent Login</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span> </span> Agent Login</a></li>
\t\t\t\t\t\t<li><p><span> </span>Not a Member ? </p>&nbsp;<a class=\"reg\" href=\"#\"> Register</a></li>
\t\t\t\t\t\t<li><p class=\"contact-info\">Call Us Now :54749889</p></li>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a class=\"face\" href=\"#\"><span> </span></a></li>
\t\t\t\t\t\t<li><a class=\"twit\" href=\"#\"><span> </span></a></li>
\t\t\t\t\t\t<li><a class=\"thum\" href=\"#\"><span> </span></a></li>
\t\t\t\t\t\t<li><a class=\"pin\" href=\"#\"><span> </span></a></li>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!----//End-top-header----->
\t\t\t<!---start-header---->
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t<!--- start-logo---->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" title=\"voyage\" /></a>
\t\t\t\t</div>
\t\t\t\t<!--- //End-logo---->
\t\t\t\t<!--- start-top-nav---->
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t\t<ul class=\"flexy-menu thick orange\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"destinations.html\">Vol</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown item</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"criuses.html\">Circuit</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("Liste_poste");
        echo "\">Forum</a></li>
\t\t\t\t\t\t\t<li><a href=\"destinations.html\">Séjour</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t\t\t<div id=\"sb-search\" class=\"sb-search\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\" name=\"search\" id=\"search\">
\t\t\t\t\t\t\t\t\t<input class=\"sb-search-submit\" type=\"submit\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"sb-icon-search\"> </span>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!----search-scripts---->
\t\t\t\t\t\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<!----//search-scripts---->
\t\t\t\t</div>
\t\t\t\t<!--- //End-top-nav---->
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t<!---//End-header---->
\t\t</div>
                       ";
        // line 138
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "                        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "                           
\t\t<!----//End-footer---->
\t\t<!---start-subfooter----> 
\t\t<div class=\"subfooter\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.html\">Vol</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"destinations.html\">Hoteles</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"criuses.html\">Circuit</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("Liste_poste");
        echo "\">Forum</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"destinations.html\">Séjour</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"blog.html\">Inscription</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t<div classclear\"> </div>
\t\t\t\t</ul>
\t\t\t\t<p class=\"copy-right\">Template by <a href=\"http://devfloat.net/\">devfloat</a></p>
\t\t\t\t<a class=\"to-top\" href=\"#header\"><span> </span> </a>
\t\t\t</div>
\t\t</div>
\t\t<!---//End-subfooter---->
\t\t<!----//End-wrap---->";
    }

    // line 138
    public function block_body($context, array $blocks = array())
    {
        // line 139
        echo "                           
                        
                           
                           
                       
                       ";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 145,  234 => 139,  231 => 138,  215 => 155,  204 => 146,  201 => 145,  199 => 138,  185 => 127,  181 => 126,  177 => 125,  160 => 111,  126 => 80,  82 => 39,  78 => 38,  72 => 35,  66 => 32,  59 => 28,  38 => 10,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Voyage Website Template | Criuses :: devfloat</title>*/
/* 		<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />*/
/*                                     <link href="{{asset('css/Forum.css')}}" rel='stylesheet' type='text/css' />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* 		</script>*/
/* 		<script src="{{asset('js/jquery.min.js')}}"></script>*/
/* 		<!---smoth-scrlling---->*/
/* 			<script type="text/javascript">*/
/* 				$(document).ready(function(){*/
/* 									$('a[href^="#"]').on('click',function (e) {*/
/* 									    e.preventDefault();*/
/* 									    var target = this.hash,*/
/* 									    $target = $(target);*/
/* 									    $('html, body').stop().animate({*/
/* 									        'scrollTop': $target.offset().top*/
/* 									    }, 1000, 'swing', function () {*/
/* 									        window.location.hash = target;*/
/* 									    });*/
/* 									});*/
/* 								});*/
/* 				</script> */
/* 		<!---//smoth-scrlling---->*/
/* 		<!----start-top-nav-script---->*/
/* 		<script type="text/javascript" src="{{asset('js/flexy-menu.js')}}"></script>*/
/* 		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>*/
/* 		<!----//End-top-nav-script---->*/
/* 		<!---webfonts---->*/
/* 		<link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800')}}" rel='stylesheet' type='text/css'>*/
/* 		<!---webfonts---->*/
/* 		<!---calender-style---->*/
/* 		<link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}" />*/
/* 		<!---//calender-style---->*/
/* 		<!---images-hover-effects--->*/
/* 		<link rel="stylesheet" href="{{asset('css/zalki_hover_img.css')}}" type="text/css" media="screen">*/
/* 		<script src="{{asset('js/jquery.zalki_hover_img.min-0.2.js')}}" type="text/javascript"></script>*/
/* 		<script type="text/javascript">*/
/* 			$(window).load(function(){*/
/* 				$('.main_box').ZalkiHoverImg(*/
/* 				);*/
/* 				});*/
/* 		</script>*/
/* 		<!---//images-hover-effects--->*/
/* 	</head>*/
/* 	<body>*/
/* 		<!----start-wrap---->*/
/* 			<!----start-top-header----->*/
/* 			<div class="top-header" id="header">*/
/* 				<div class="wrap">*/
/* 				<div class="top-header-left">*/
/* 					<ul>*/
/* 						<li><a href="#"><span> </span> Agent Login</a></li>*/
/* 						<li><a href="#"><span> </span> Agent Login</a></li>*/
/* 						<li><p><span> </span>Not a Member ? </p>&nbsp;<a class="reg" href="#"> Register</a></li>*/
/* 						<li><p class="contact-info">Call Us Now :54749889</p></li>*/
/* 						<div class="clear"> </div>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="top-header-right">*/
/* 					<ul>*/
/* 						<li><a class="face" href="#"><span> </span></a></li>*/
/* 						<li><a class="twit" href="#"><span> </span></a></li>*/
/* 						<li><a class="thum" href="#"><span> </span></a></li>*/
/* 						<li><a class="pin" href="#"><span> </span></a></li>*/
/* 						<div class="clear"> </div>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="clear"> </div>*/
/* 			</div>*/
/* 			</div>*/
/* 			<!----//End-top-header----->*/
/* 			<!---start-header---->*/
/* 			<div class="header">*/
/* 				<div class="wrap">*/
/* 				<!--- start-logo---->*/
/* 				<div class="logo">*/
/* 					<a href="index.html"><img src="{{asset('images/logo.png')}}" title="voyage" /></a>*/
/* 				</div>*/
/* 				<!--- //End-logo---->*/
/* 				<!--- start-top-nav---->*/
/* 				<div class="top-nav">*/
/* 						<ul class="flexy-menu thick orange">*/
/* 							<li><a href="index.html">Home</a></li>*/
/* 							<li><a href="destinations.html">Vol</a>*/
/* 								<ul>*/
/* 								<li><a href="#">Dropdown item</a></li>*/
/* 								<li><a href="#">Dropdown item</a></li>*/
/* 								<li><a href="#">Dropdown item</a>*/
/* 									<ul>*/
/* 										<li><a href="#">Dropdown item</a></li>*/
/* 										<li><a href="#">Dropdown item</a>*/
/* 											<ul>*/
/* 												<li><a href="#">Dropdown item</a></li>*/
/* 												<li><a href="#">Dropdown item</a></li>*/
/* 												<li><a href="#">Dropdown item</a></li>*/
/* 												<li><a href="#">Dropdown item</a></li>*/
/* 											</ul>*/
/* 										</li>*/
/* 										<li><a href="#">Dropdown item</a></li>*/
/* 										<li><a href="#">Dropdown item</a></li>*/
/* 									</ul>*/
/* 								</li>*/
/* 								<li><a href="#">Dropdown item</a></li>*/
/* 								<li><a href="#">Dropdown item</a></li>*/
/* 							</ul>*/
/* 							</li>*/
/* 							<li class="active"><a href="criuses.html">Circuit</a></li>*/
/* 							<li><a href="{{ path('Liste_poste') }}">Forum</a></li>*/
/* 							<li><a href="destinations.html">Séjour</a></li>*/
/* 							<li><a href="blog.html">Inscription</a></li>*/
/* 						</ul>*/
/* 						<div class="search-box">*/
/* 							<div id="sb-search" class="sb-search">*/
/* 								<form>*/
/* 									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">*/
/* 									<input class="sb-search-submit" type="submit" value="">*/
/* 									<span class="sb-icon-search"> </span>*/
/* 								</form>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!----search-scripts---->*/
/* 						<script src="{{asset('js/modernizr.custom.js')}}"></script>*/
/* 						<script src="{{asset('js/classie.js')}}"></script>*/
/* 						<script src="{{asset('js/uisearch.js')}}"></script>*/
/* 						<script>*/
/* 							new UISearch( document.getElementById( 'sb-search' ) );*/
/* 						</script>*/
/* 						<!----//search-scripts---->*/
/* 				</div>*/
/* 				<!--- //End-top-nav---->*/
/* 				<div class="clear"> </div>*/
/* 			</div>*/
/* 			<!---//End-header---->*/
/* 		</div>*/
/*                        {% block body %}*/
/*                            */
/*                         */
/*                            */
/*                            */
/*                        */
/*                        {% endblock %}*/
/*                         {% block javascripts %}{% endblock %}*/
/*                            */
/* 		<!----//End-footer---->*/
/* 		<!---start-subfooter----> */
/* 		<div class="subfooter">*/
/* 			<div class="wrap">*/
/* 				<ul>*/
/* 					<li><a href="index.html">Vol</a><span>::</span></li>*/
/* 					<li><a href="destinations.html">Hoteles</a><span>::</span></li>*/
/* 					<li><a href="criuses.html">Circuit</a><span>::</span></li>*/
/* 					<li><a href="{{ path('Liste_poste') }}">Forum</a><span>::</span></li>*/
/* 					<li><a href="destinations.html">Séjour</a><span>::</span></li>*/
/* 					<li><a href="blog.html">Inscription</a><span>::</span></li>*/
/* 					<li><a href="contact.html">Contact Us</a></li>*/
/* 					<div classclear"> </div>*/
/* 				</ul>*/
/* 				<p class="copy-right">Template by <a href="http://devfloat.net/">devfloat</a></p>*/
/* 				<a class="to-top" href="#header"><span> </span> </a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!---//End-subfooter---->*/
/* 		<!----//End-wrap---->*/
