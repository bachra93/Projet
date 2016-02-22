<?php

/* GVForumBundle:Commentaire:Liste.html.twig */
class __TwigTemplate_fa8e0dd250831324ca78ed558b11aa7ccc0543a116a4a1ecec61a22e9eeeff76 extends Twig_Template
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
  <div id=\"h\">Titre: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Titre", array()), "html", null, true);
        echo "</div>


<div class=\"item\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\" >
   
    <div class=\"item-overlay top\"></div>
</div>
    <div id=\"tt\" >
        <video id=\"video1\" width=\"500\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "v", array()), "path", array()))), "html", null, true);
        echo "\"controls ></video>
    </div>
    <p align=\"center\">
    Conteu :";
        // line 18
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 38
            echo "
    <td>   ";
            // line 39
            echo $this->getAttribute($context["poste"], "body", array());
            echo " </td>
     
    
   
    <td> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["poste"], "date_p", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
    <td><a class=\"btn2\"  href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_commentaire", array("id" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo " \">Modifier </a></td>
    <td><a class=\"btn2\"  href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_commentaire", array("id" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo " \">Supprimer </a></td>
   
    
        
     
</tr>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " 
  <td><a class=\"btn\"  href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ajouter_commentaire", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \">Replay </a></td>
    <td><a class=\"btn\"  href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Liste_poste");
        echo " \">Liste </a></td>

 
    </table>
 
       
";
        // line 63
        echo "
  ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
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
        return array (  141 => 66,  138 => 65,  133 => 63,  124 => 55,  120 => 54,  117 => 53,  103 => 45,  99 => 44,  95 => 43,  88 => 39,  85 => 38,  81 => 37,  59 => 18,  53 => 15,  45 => 10,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/*   {% block body %}gg*/
/*   */
/*   {# empty Twig template #}*/
/* */
/*   <div id="h">Titre: {{entity.Titre}}</div>*/
/* */
/* */
/* <div class="item">*/
/*     <img src="{{ asset(entity.image.AssetPath)}}" >*/
/*    */
/*     <div class="item-overlay top"></div>*/
/* </div>*/
/*     <div id="tt" >*/
/*         <video id="video1" width="500" src="{{asset('uploads/' ~ entity.v.path)}}"controls ></video>*/
/*     </div>*/
/*     <p align="center">*/
/*     Conteu :{{entity.Contenu|raw}} */
/* </p>*/
/* */
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
/*     <td><a class="btn2"  href="{{path("Modifier_commentaire",{'id': poste.id})}} ">Modifier </a></td>*/
/*     <td><a class="btn2"  href="{{path("Supprimer_commentaire",{'id': poste.id})}} ">Supprimer </a></td>*/
/*    */
/*     */
/*         */
/*      */
/* </tr>*/
/* */
/*  {% endfor %}*/
/*  */
/*   <td><a class="btn"  href="{{path("Ajouter_commentaire",{'id': entity.id})}} ">Replay </a></td>*/
/*     <td><a class="btn"  href="{{path("Liste_poste")}} ">Liste </a></td>*/
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
