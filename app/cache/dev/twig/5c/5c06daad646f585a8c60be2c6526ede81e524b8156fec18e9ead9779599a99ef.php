<?php

/* GVForumBundle:Commentaire:Ajout.html.twig */
class __TwigTemplate_0a88d343fd178f6bdba280a84cbc0bf87646caa6f7e17383866e285d232d1acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Commentaire:Ajout.html.twig", 1);
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
        // line 3
        echo "          <div id=\"h\">Ajojuter commentaire</div>

<form action=\"\" method=\"POST\" >
   
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), 'widget', array("attr" => array("style" => "display:none", "value" => "6")));
        echo "
   
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Body", array()), 'widget');
        echo "
   
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date_p", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    <button type=\"submit\" class=\"btn\">Ajojuter</button>
   
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>

        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gvforum/ckeditor/ckeditor.js"), "html", null, true);
        echo " \"> </script>
 ";
    }

    public function getTemplateName()
    {
        return "GVForumBundle:Commentaire:Ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  62 => 18,  54 => 14,  48 => 11,  43 => 9,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/*   {% extends '::base.html.twig' %}*/
/*       {% block body %}*/
/*           <div id="h">Ajojuter commentaire</div>*/
/* */
/* <form action="" method="POST" >*/
/*    */
/*     {{ form_widget(f.id,{'attr': {'style': 'display:none','value':'6'}}) }}*/
/*    */
/*       {{ form_widget(f.Body)}}*/
/*    */
/*     {{ form_widget(f.date_p,{'attr': {'style': 'display:none'}})}}*/
/*     <button type="submit" class="btn">Ajojuter</button>*/
/*    */
/*     {{ form_widget(f) }}*/
/* </form>*/
/* */
/*         {% endblock %}*/
/*          {% block javascripts %}*/
/*  <script src="{{ asset('bundles/gvforum/ckeditor/ckeditor.js') }} "> </script>*/
/*  {% endblock %}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
