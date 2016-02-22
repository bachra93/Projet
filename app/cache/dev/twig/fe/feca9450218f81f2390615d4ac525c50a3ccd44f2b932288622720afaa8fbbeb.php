<?php

/* GVVilleBundle:Ville:modifier.html.twig */
class __TwigTemplate_75c01e2fc54a40380f57ee8cdf1c20586ad584fd31855febf4712ce13d4c24be extends Twig_Template
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
    <td>image</td>
    <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), 'widget');
        echo "</td>
</tr>

</table>
     <input type='submit' value='modifier'>
";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "GVVilleBundle:Ville:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 36,  68 => 31,  61 => 27,  54 => 23,  46 => 18,  39 => 14,  32 => 10,  26 => 7,  19 => 2,);
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
/* <tr>*/
/*     <td>image</td>*/
/*     <td>{{form_widget(f.image) }}</td>*/
/* </tr>*/
/* */
/* </table>*/
/*      <input type='submit' value='modifier'>*/
/* {{form_rest(f)}}*/
/* </form>*/
/* */
