<?php

/* GVForumBundle:Commentaire:Liste.html.twig */
class __TwigTemplate_90f58fd981731323e6f13ba106d9220000708ef563e46044e0a1ac0a6d2f0b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Commentaire:Liste.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "gg
  
  ";
        // line 5
        echo "
  <div id=\"h\">Liste des Commentaires</div>

<h1> Titre: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Titre", array()), "html", null, true);
        echo " </h1>
<div class=\"item\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\" width=\"300\" height=\"150\">
    <div class=\"item-overlay top\"></div>
</div>
    <p align=\"center\">
    Conteu :";
        // line 14
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Contenu", array());
        echo " 
</p>

<table border=2>
    <tr>
         
        
        <td>Comment</td>
        <td>Date</td>
        <td>Modifier</td>
        
    </tr>

<tr>

   

     
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 33
            echo "
    <td>   ";
            // line 34
            echo $this->getAttribute($context["poste"], "body", array());
            echo " </td>
     
    
   
    <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["poste"], "date_p", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_commentaire", array("id" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo " \">Modifier </a></td>
    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_commentaire", array("id" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo " \">Supprimer </a></td>
   
    
        
     
</tr>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
  <td><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ajouter_commentaire", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \">Replay </a></td>
    <td><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Liste_poste");
        echo " \">Liste </a></td>

 
    </table>
 
       
";
        // line 58
        echo "
  ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gvforum/ckeditor/ckeditor.js"), "html", null, true);
        echo " \"> </script>
 ";
    }

    public function getTemplateName()
    {
        return "GVForumBundle:Commentaire:Liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  130 => 60,  125 => 58,  116 => 50,  112 => 49,  109 => 48,  95 => 40,  91 => 39,  87 => 38,  80 => 34,  77 => 33,  73 => 32,  52 => 14,  45 => 10,  40 => 8,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/*   {% block body %}gg*/
/*   */
/*   {# empty Twig template #}*/
/* */
/*   <div id="h">Liste des Commentaires</div>*/
/* */
/* <h1> Titre: {{entity.Titre}} </h1>*/
/* <div class="item">*/
/*     <img src="{{ asset(entity.image.AssetPath)}}" width="300" height="150">*/
/*     <div class="item-overlay top"></div>*/
/* </div>*/
/*     <p align="center">*/
/*     Conteu :{{entity.Contenu|raw}} */
/* </p>*/
/* */
/* <table border=2>*/
/*     <tr>*/
/*          */
/*         */
/*         <td>Comment</td>*/
/*         <td>Date</td>*/
/*         <td>Modifier</td>*/
/*         */
/*     </tr>*/
/* */
/* <tr>*/
/* */
/*    */
/* */
/*      */
/* {% for poste in entities %}*/
/* */
/*     <td>   {{poste.body|raw}} </td>*/
/*      */
/*     */
/*    */
/*     <td> {{poste.date_p|date('Y-m-d H:i:s')}} </td>*/
/*     <td><a href="{{path("Modifier_commentaire",{'id': poste.id})}} ">Modifier </a></td>*/
/*     <td><a href="{{path("Supprimer_commentaire",{'id': poste.id})}} ">Supprimer </a></td>*/
/*    */
/*     */
/*         */
/*      */
/* </tr>*/
/* */
/*  {% endfor %}*/
/*  */
/*   <td><a href="{{path("Ajouter_commentaire",{'id': entity.id})}} ">Replay </a></td>*/
/*     <td><a href="{{path("Liste_poste")}} ">Liste </a></td>*/
/* */
/*  */
/*     </table>*/
/*  */
/*        */
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
/*   {% endblock %}*/
/*    {% block javascripts %}*/
/*  <script src="{{ asset('bundles/gvforum/ckeditor/ckeditor.js') }} "> </script>*/
/*  {% endblock %}*/
