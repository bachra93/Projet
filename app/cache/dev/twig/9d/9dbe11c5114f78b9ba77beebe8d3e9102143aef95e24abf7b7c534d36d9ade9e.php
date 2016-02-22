<?php

/* GVVilleBundle:Ville:frontAffiche.html.twig */
class __TwigTemplate_86629ee9b2a76d53a76682dbb2f723755b7a9c78c274cfa19ec32a68a04207dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GVVilleBundle:Ville:frontAffiche.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body>
<!---start-Criuses---->
\t\t<div class=\"criuses\">
\t\t
\t\t\t<div class=\"criuses-head\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<h3>criuses</h3>
\t\t\t\t</div>
\t\t\t\t<!---End-destinatiuons---->
\t\t\t\t<div class=\"find-place dfind-place\">
\t\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t\t<div class=\"p-h\">
\t\t\t\t\t\t\t<span>  FIND YOURS  </span>
\t\t\t\t\t\t\t<label>  HOLYDAYS  </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!---strat-date-piker---->
\t\t\t\t\t\t  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.9.2/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t  <script>
\t\t\t\t\t\t  \$(function() {
\t\t\t\t\t\t    \$( \"#datepicker\" ).datepicker();
\t\t\t\t\t\t  });
\t\t\t\t\t\t  </script>
\t\t\t\t\t\t<!---/End-date-piker---->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"p-ww\">
\t\t\t\t\t\t\t<form method=\"POST\"  action=\"\">
\t\t\t\t\t\t\t\t<span> Where</span>
\t\t\t\t\t\t\t\t<input  name=\"search\" type=\"text\" value=\"Destination\" >
\t\t\t\t\t\t\t\t<span> When</span>
\t\t\t\t\t\t\t\t<input class=\"date\" id=\"datepicker\" type=\"text\" value=\"Select date\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Select date';}\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Search\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t\t<!----//End-find-place---->
\t\t\t\t<!---start-criuse-grids----->
\t\t\t\t<div class=\"criuse-main\">
\t\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t\t<div class=\"criuse-head1\">
\t\t\t\t\t\t\t<h3>CHEAPEST Criuse</h3>
\t\t\t\t\t\t</div
\t\t\t\t\t\t
\t\t\t\t

\t\t\t\t
<div class=\"criuse-grids\">\t\t\t\t\t
<!-- ici on va faire une boucle  pour repeter le meme avec tt les version------------------------------------->
\t ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mods"]) ? $context["mods"] : $this->getContext($context, "mods")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t\t\t\t\t
\t<div class=\"criuse-grid\">
\t\t\t<div class=\"criuse-grid-head\">
\t\t\t
\t\t\t\t\t<div class=\"criuse-img\">
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/s1.jpg"), "html", null, true);
            echo "\" title=\"criuse-name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic-info\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic-info-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic-info-top-weather\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>33<label>o</label><i>c</i><span> </span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic-info-top-place-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><label>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo "</label><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</span></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-pic-info-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "</span> <h4>Langue</h4></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t    <div class=\"criuse-info\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-info-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-hotel\" href=\"#\"  ><span>   </span> Liste des hotels </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-air\"   href=\"#\"  ><span>   </span> vols </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"criuse-info-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-face\" href=\"#\" > <span>  </span>  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-twit\" href=\"#\" > <span>  </span>  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-tub\"  href=\"#\" > <span>  </span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"c-pin\"  href=\"#\" > <span>  </span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t            <div class=\"clear\"> </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t<div class=\"criuse-grid-info\">
\t\t\t\t\t\t\t\t\t<h1><a href=\"#\">Description</a></h1>
\t\t\t\t\t\t\t\t\t<p>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficherdetailsVillefront", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">DeTails</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " 
<!--THE END OF BOUCLE---------------------------------------------->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"criuse-grid-load\">
\t\t\t\t\t\t\t<a href=\"#\">Loading More</a>
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
</div>
\t\t\t\t</div>
\t\t\t\t<!---//End-criuse-grids----->
\t\t\t</div>
  </div>
\t\t
  ";
    }

    public function getTemplateName()
    {
        return "GVVilleBundle:Ville:frontAffiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 118,  165 => 114,  161 => 113,  126 => 81,  116 => 76,  103 => 66,  91 => 59,  50 => 21,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <body>*/
/* <!---start-Criuses---->*/
/* 		<div class="criuses">*/
/* 		*/
/* 			<div class="criuses-head">*/
/* 				<div class="wrap">*/
/* 					<h3>criuses</h3>*/
/* 				</div>*/
/* 				<!---End-destinatiuons---->*/
/* 				<div class="find-place dfind-place">*/
/* 					<div class="wrap">*/
/* 						<div class="p-h">*/
/* 							<span>  FIND YOURS  </span>*/
/* 							<label>  HOLYDAYS  </label>*/
/* 						</div>*/
/* 						*/
/* 						<!---strat-date-piker---->*/
/* 						  <script src="{{asset('http://code.jquery.com/ui/1.9.2/jquery-ui.js')}}"></script>*/
/* 						  <script>*/
/* 						  $(function() {*/
/* 						    $( "#datepicker" ).datepicker();*/
/* 						  });*/
/* 						  </script>*/
/* 						<!---/End-date-piker---->*/
/* 						*/
/* 						<div class="p-ww">*/
/* 							<form method="POST"  action="">*/
/* 								<span> Where</span>*/
/* 								<input  name="search" type="text" value="Destination" >*/
/* 								<span> When</span>*/
/* 								<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">*/
/* 								<input type="submit" value="Search" />*/
/* 							</form>*/
/* 						</div>*/
/* 						*/
/* */
/* 						<div class="clear"> </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 				<!----//End-find-place---->*/
/* 				<!---start-criuse-grids----->*/
/* 				<div class="criuse-main">*/
/* 					<div class="wrap">*/
/* 						<div class="criuse-head1">*/
/* 							<h3>CHEAPEST Criuse</h3>*/
/* 						</div*/
/* 						*/
/* 				*/
/* */
/* 				*/
/* <div class="criuse-grids">					*/
/* <!-- ici on va faire une boucle  pour repeter le meme avec tt les version------------------------------------->*/
/* 	 {% for m in mods %}					*/
/* 	<div class="criuse-grid">*/
/* 			<div class="criuse-grid-head">*/
/* 			*/
/* 					<div class="criuse-img">*/
/* 					*/
/* 										<div class="criuse-pic">*/
/* 											<img src="{{asset('images/s1.jpg')}}" title="criuse-name" />*/
/* 										</div>*/
/* 										*/
/* 										<div class="criuse-pic-info">*/
/* 										*/
/* 												<div class="criuse-pic-info-top">*/
/* 													<div class="criuse-pic-info-top-weather">*/
/* 														<p>33<label>o</label><i>c</i><span> </span></p>*/
/* 													</div>*/
/* 													<div class="criuse-pic-info-top-place-name">*/
/* 														<h2><label>{{m.pays}}</label><span>{{m.nom}}</span></h2>*/
/* 													</div>*/
/* 												</div>*/
/* 												*/
/* 												<div class="criuse-pic-info-price">*/
/* 													<p><span>{{m.type}}</span> <h4>Langue</h4></p>*/
/* 												</div>*/
/* 										</div>*/
/* 					</div>*/
/* 										*/
/* 				    <div class="criuse-info">*/
/* 									*/
/* 											<div class="criuse-info-left">*/
/* 												<ul>*/
/* 													<li><a class="c-hotel" href="#"  ><span>   </span> Liste des hotels </a></li>*/
/* 													<li><a class="c-air"   href="#"  ><span>   </span> vols </a></li>*/
/* 													*/
/* 													<div class="clear"> </div>*/
/* 												</ul>*/
/* 											</div>*/
/* 										*/
/* 											<div class="criuse-info-right">*/
/* 												<ul>*/
/* 													<li><a class="c-face" href="#" > <span>  </span>  </a></li>*/
/* 													<li><a class="c-twit" href="#" > <span>  </span>  </a></li>*/
/* 													<li><a class="c-tub"  href="#" > <span>  </span> </a></li>*/
/* 													<li><a class="c-pin"  href="#" > <span>  </span> </a></li>*/
/* 												</ul>*/
/* 											</div>*/
/* 										*/
/* 							            <div class="clear"> </div>*/
/* 									*/
/* 					</div>*/
/* 							*/
/* 			</div>			*/
/* 								<div class="criuse-grid-info">*/
/* 									<h1><a href="#">Description</a></h1>*/
/* 									<p>{{m.description}}</p>*/
/* 									<a class="btn" href="{{path("afficherdetailsVillefront",{'id':m.id})}}">DeTails</a>*/
/* 								</div>*/
/* 								*/
/* 	</div>*/
/*   {% endfor %} */
/* <!--THE END OF BOUCLE---------------------------------------------->*/
/* 					*/
/* 						<div class="criuse-grid-load">*/
/* 							<a href="#">Loading More</a>*/
/* 						</div>		*/
/* 						*/
/* </div>*/
/* 				</div>*/
/* 				<!---//End-criuse-grids----->*/
/* 			</div>*/
/*   </div>*/
/* 		*/
/*   {% endblock %}		*/
/* */
