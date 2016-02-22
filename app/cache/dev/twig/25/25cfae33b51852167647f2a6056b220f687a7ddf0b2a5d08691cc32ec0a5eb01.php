<?php

/* GVForumBundle:Poste:Liste.html.twig */
class __TwigTemplate_55298415cabac4cd270f8a0b98166df5424356d7636cfc742d2f202b86751a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Poste:Liste.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"blog-grids\">
 
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<div class=\"blog-grids-head\">
\t\t\t\t\t\t     
\t\t\t\t\t</div>
                                   
                                          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["postes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["postes"]) {
            // line 11
            echo "\t\t\t\t\t<div class=\"blog-grids-box\">
                                         
                                 
\t\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t\t<div class=\"blog-poast-head\">
\t\t\t\t\t\t\t\t<div class=\"blog-art-pic\">
\t\t\t\t\t\t\t\t\t<a class=\"post-pic\" href=\"#\">  <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["postes"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" width=\"300\" height=\"150\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-poast-admin\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/admin-pic2.png"), "html", null, true);
            echo "\" title=\"admin\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"blog-poast-info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"admin\" href=\"#\"><span> </span> User </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"p-date\" href=\"#\"><span> </span>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["postes"], "date_published", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"p-blog\" href=\"#\"><span> </span>Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-info\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["postes"], "Titre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t
                                                                        
                                                                            <a class=\"btn\"  href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Liste_commentaire", array("id" => $this->getAttribute($context["postes"], "id", array()))), "html", null, true);
            echo " \">Voir </a>
                                                                            <a class=\"btn\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_poste", array("id" => $this->getAttribute($context["postes"], "id", array()))), "html", null, true);
            echo " \">Supprimer </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                     <a href=\"";
        echo $this->env->getExtension('routing')->getPath("Ajouter_poste");
        echo " \" class=\"btn\">Ajoutfer</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
                 ";
    }

    public function getTemplateName()
    {
        return "GVForumBundle:Poste:Liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  87 => 37,  83 => 36,  77 => 33,  67 => 26,  58 => 20,  52 => 17,  44 => 11,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/*       {% block body %}*/
/* <div class="blog-grids">*/
/*  */
/* 				<div class="wrap">*/
/* 					<div class="blog-grids-head">*/
/* 						     */
/* 					</div>*/
/*                                    */
/*                                           {% for postes in postes  %}*/
/* 					<div class="blog-grids-box">*/
/*                                          */
/*                                  */
/* 						<div class="blog-grid">*/
/* 							<div class="blog-poast-head">*/
/* 								<div class="blog-art-pic">*/
/* 									<a class="post-pic" href="#">  <img src="{{ asset(postes.image.AssetPath)}}" width="300" height="150"></a>*/
/* 								</div>*/
/* 								<div class="blog-poast-admin">*/
/* 									<a href="#"><img src="{{asset('images/admin-pic2.png')}}" title="admin" /></a>*/
/* 								</div>*/
/* 								*/
/* 								<div class="blog-poast-info">*/
/* 									<ul>*/
/* 										<li><a class="admin" href="#"><span> </span> User </a></li>*/
/* 										<li><a class="p-date" href="#"><span> </span>{{postes.date_published|date('Y-m-d H:i:s')}} </a></li>*/
/* 										<li><a class="p-blog" href="#"><span> </span>Blog</a></li>*/
/* 										<div class="clear"> </div>*/
/* 									</ul>*/
/* 								</div>*/
/* 								</div>*/
/* 								<div class="blog-info">*/
/* 									<h3><a href="#">{{postes.Titre}}</a></h3>*/
/* 									*/
/*                                                                         */
/*                                                                             <a class="btn"  href="{{path("Liste_commentaire",{'id': postes.id})}} ">Voir </a>*/
/*                                                                             <a class="btn" href="{{path("Supprimer_poste",{'id': postes.id})}} ">Supprimer </a>*/
/* 								</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						*/
/* 						<div class="clear"> </div>*/
/* 					</div>*/
/*                                         {% endfor %}*/
/*                                      <a href="{{path("Ajouter_poste")}} " class="btn">Ajoutfer</a>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*                  {% endblock %}*/
