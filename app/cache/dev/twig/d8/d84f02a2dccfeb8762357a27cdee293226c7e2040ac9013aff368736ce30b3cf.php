<?php

/* GVVilleBundle:Ville:ajouter.html.twig */
class __TwigTemplate_16dbc19eb6a9d7b9a8e6cc0201e527b5acf56db678b8f34c75dc946d3bbbdbbc extends Twig_Template
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
        echo "<form method=\"post\" action=''>
<table>

<tr>
    <td>nom</td>
    <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "</td>
<tr>
    <td>pays</td>
    <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pays", array()), 'widget');
        echo "</td>
</tr>
<tr>
    <td>latitude</td>
    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "latitude", array()), 'widget');
        echo "</td>
</tr>
<tr>
    <td>longitude</td>
    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "longitude", array()), 'widget');
        echo "</td>
</tr>
</tr>
<tr>
    <td>description</td>
    <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "</td>
</tr>
<tr>
    <td>type</td>
    <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget');
        echo "</td>
</tr>

<tr>
    <td>langue</td>
    <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "langue", array()), 'widget');
        echo "</td>
</tr>
<tr>
    <td>image</td>
    <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), 'widget');
        echo "</td>
</tr>


</table>
     <input type='submit' value='ajouter'>
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "    <div class=\"flash-notice\">
        ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "GVVilleBundle:Ville:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 49,  97 => 46,  94 => 45,  90 => 44,  85 => 42,  76 => 36,  69 => 32,  61 => 27,  54 => 23,  46 => 18,  39 => 14,  32 => 10,  26 => 7,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <form method="post" action=''>*/
/* <table>*/
/* */
/* <tr>*/
/*     <td>nom</td>*/
/*     <td>{{form_widget(f.nom) }}</td>*/
/* <tr>*/
/*     <td>pays</td>*/
/*     <td>{{form_widget(f.pays) }}</td>*/
/* </tr>*/
/* <tr>*/
/*     <td>latitude</td>*/
/*     <td>{{form_widget(f.latitude) }}</td>*/
/* </tr>*/
/* <tr>*/
/*     <td>longitude</td>*/
/*     <td>{{form_widget(f.longitude) }}</td>*/
/* </tr>*/
/* </tr>*/
/* <tr>*/
/*     <td>description</td>*/
/*     <td>{{form_widget(f.description) }}</td>*/
/* </tr>*/
/* <tr>*/
/*     <td>type</td>*/
/*     <td>{{form_widget(f.type) }}</td>*/
/* </tr>*/
/* */
/* <tr>*/
/*     <td>langue</td>*/
/*     <td>{{form_widget(f.langue) }}</td>*/
/* </tr>*/
/* <tr>*/
/*     <td>image</td>*/
/*     <td>{{form_widget(f.image) }}</td>*/
/* </tr>*/
/* */
/* */
/* </table>*/
/*      <input type='submit' value='ajouter'>*/
/* {{form_rest(f)}}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*     <div class="flash-notice">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* </form>*/
