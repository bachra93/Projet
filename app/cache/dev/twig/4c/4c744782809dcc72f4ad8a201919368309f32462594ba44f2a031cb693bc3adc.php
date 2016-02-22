<?php

/* GVVilleBundle:Ville:afficher.html.twig */
class __TwigTemplate_53643d1dcf470ce88ff35f92f936d57ec64a794102a9990434143372679652bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<h1> Liste des villes </h1>
<table border='1'>
    <tr>
        <td> ID </td>
        <td> Nom </td>
        <td> Pays </td> 
        <td> Latitude </td>
        <td> Longitude  </td>
        <td> Description </td>
        <td> Type </td>
        <td> langue </td>
        <td> Image </td>
    </tr>
    
 ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mods"]) ? $context["mods"] : $this->getContext($context, "mods")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "   
    <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "latitude", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "longitude", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "langue", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DeleteVille", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> supprimer </a></td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UpdateVille", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> modifier </a></td>
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Afficherdetails", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> afficher details </a></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  
  
    
</table>
  
 ";
    }

    public function getTemplateName()
    {
        return "GVVilleBundle:Ville:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  35 => 16,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h1> Liste des villes </h1>*/
/* <table border='1'>*/
/*     <tr>*/
/*         <td> ID </td>*/
/*         <td> Nom </td>*/
/*         <td> Pays </td> */
/*         <td> Latitude </td>*/
/*         <td> Longitude  </td>*/
/*         <td> Description </td>*/
/*         <td> Type </td>*/
/*         <td> langue </td>*/
/*         <td> Image </td>*/
/*     </tr>*/
/*     */
/*  {% for m in mods %}   */
/*     <tr>*/
/*         <td>{{m.id}} </td>*/
/*         <td>{{m.nom}} </td>*/
/*         <td>{{m.pays}}</td>*/
/*         <td>{{m.latitude}}</td>*/
/*         <td>{{m.longitude}} </td>*/
/*         <td>{{m.description}}</td>*/
/*         <td>{{m.type}}</td>*/
/*          <td>{{m.langue}}</td>*/
/*         <td>{{m.image}}</td>*/
/*         <td><a href="{{path("DeleteVille",{'id':m.id})}}"> supprimer </a></td>*/
/*         <td><a href="{{path("UpdateVille",{'id':m.id})}}"> modifier </a></td>*/
/*         <td><a href="{{path("Afficherdetails",{'id':m.id})}}"> afficher details </a></td>*/
/*     </tr>*/
/*   {% endfor %}  */
/*   */
/*     */
/* </table>*/
/*   */
/*  */
