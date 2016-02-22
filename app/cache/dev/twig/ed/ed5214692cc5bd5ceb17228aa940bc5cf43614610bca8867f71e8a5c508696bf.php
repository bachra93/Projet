<?php

/* GVForumBundle:Commentaire:Modifier.html.twig */
class __TwigTemplate_f5fd79b74d98eaaf153be49597a9419c0976b116a49574e61b07ed0c67319bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Commentaire:Modifier.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
   
    <div id=\"h\">Modifier votre commentaire</div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

        <ul>
    <li>
       
 
</ul>
   
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gvforum/ckeditor/ckeditor.js"), "html", null, true);
        echo " \"> </script>
 ";
    }

    public function getTemplateName()
    {
        return "GVForumBundle:Commentaire:Modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  51 => 19,  38 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*    */
/*     <div id="h">Modifier votre commentaire</div>*/
/* */
/*     {{ form(f) }}*/
/* */
/*         <ul>*/
/*     <li>*/
/*        */
/*  */
/* </ul>*/
/*    */
/* {% endblock %}*/
/* */
/*          {% block javascripts %}*/
/*  <script src="{{ asset('bundles/gvforum/ckeditor/ckeditor.js') }} "> </script>*/
/*  {% endblock %}*/
/* */
/* */
