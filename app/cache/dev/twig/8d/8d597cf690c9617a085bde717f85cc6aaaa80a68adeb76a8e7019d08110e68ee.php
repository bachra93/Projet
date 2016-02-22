<?php

/* GVForumBundle:Poste:Liste.html.twig */
class __TwigTemplate_c1d2435098729fe1f0b89929a78309b125aa335d4c701b919924ea2e9434ca98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Poste:Liste.html.twig", 2);
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
        echo "          <div id=\"h\">Espace de discussion</div>
 <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("Ajouter_poste");
        echo " \">Ajouter</a>
<table border=3>
    <tr>
        
        <td>Titre</td>
        <td>Publier Le</td>
        
        <td > Edit</td>
     
    </tr>
<tr>
    
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["postes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["postes"]) {
            // line 18
            echo "    
    <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["postes"], "Titre", array()), "html", null, true);
            echo "</td>
 
    <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["postes"], "date_published", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
       

       
     
            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Liste_commentaire", array("id" => $this->getAttribute($context["postes"], "id", array()))), "html", null, true);
            echo " \">Voir </a></td>
             <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_poste", array("id" => $this->getAttribute($context["postes"], "id", array()))), "html", null, true);
            echo " \">Supprimer </a></td>
             
    
</tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </table>
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
        return array (  85 => 33,  73 => 27,  69 => 26,  61 => 21,  56 => 19,  53 => 18,  49 => 17,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/*     {% extends '::base.html.twig' %}*/
/*       {% block body %}*/
/*           <div id="h">Espace de discussion</div>*/
/*  <a href="{{path("Ajouter_poste")}} ">Ajouter</a>*/
/* <table border=3>*/
/*     <tr>*/
/*         */
/*         <td>Titre</td>*/
/*         <td>Publier Le</td>*/
/*         */
/*         <td > Edit</td>*/
/*      */
/*     </tr>*/
/* <tr>*/
/*     */
/* {% for postes in postes  %}*/
/*     */
/*     <td> {{postes.Titre}}</td>*/
/*  */
/*     <td> {{postes.date_published|date('Y-m-d H:i:s')}} </td>*/
/*        */
/* */
/*        */
/*      */
/*             <td><a href="{{path("Liste_commentaire",{'id': postes.id})}} ">Voir </a></td>*/
/*              <td><a href="{{path("Supprimer_poste",{'id': postes.id})}} ">Supprimer </a></td>*/
/*              */
/*     */
/* </tr>*/
/* */
/*     {% endfor %}*/
/*     </table>*/
/*      {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
