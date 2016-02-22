<?php

/* GVForumBundle:Poste:Ajout.html.twig */
class __TwigTemplate_a39f7200c251ee4193117e335edcf69d8553f0c1c5528f321ef14487b1c3596e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GVForumBundle:Poste:Ajout.html.twig", 1);
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
        echo "<div id=\"h\">Ajouter un Poste </div>

    <form action='' method=\"post\"  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">
        <p align=\"center\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), 'widget', array("attr" => array("style" => "display:none", "value" => "6")));
        echo "</p>
       
        <p align=\"center\"> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
       <p class=\"span12\"  >
 ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Contenu", array()), 'widget');
        echo "
       </p>
    
        <p align=\"center\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date_published", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "</p>
     
    <p align=\"center\">sqdqsd";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
     <p align=\"center\">sqdqsd";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), "file", array()), 'widget');
        echo "</p>
 
      ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

    
</form>

    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gvforum/ckeditor/ckeditor.js"), "html", null, true);
        echo " \"> </script>
 ";
    }

    public function getTemplateName()
    {
        return "GVForumBundle:Poste:Ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  80 => 24,  70 => 18,  65 => 16,  61 => 15,  56 => 13,  50 => 10,  45 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/*       {% block body %}*/
/* <div id="h">Ajouter un Poste </div>*/
/* */
/*     <form action='' method="post"  {{ form_enctype(f) }}>*/
/*         <p align="center">{{ form_widget(f.id,{'attr': {'style': 'display:none','value':'6'}})}}</p>*/
/*        */
/*         <p align="center"> {{ form_widget(f.Titre, { 'attr': {'class': 'form-control'} }) }}</p>*/
/*        <p class="span12"  >*/
/*  {{ form_widget(f.Contenu) }}*/
/*        </p>*/
/*     */
/*         <p align="center">{{ form_widget(f.date_published ,{'attr': {'style': 'display:none'}}) }}</p>*/
/*      */
/*     <p align="center">sqdqsd{{ form_widget(f.image.name, { 'attr': {'class': 'form-control'} }) }}</p>*/
/*      <p align="center">sqdqsd{{ form_widget(f.image.file) }}</p>*/
/*  */
/*       {{ form(f) }}*/
/* */
/*     */
/* </form>*/
/* */
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*  <script src="{{ asset('bundles/gvforum/ckeditor/ckeditor.js') }} "> </script>*/
/*  {% endblock %}*/
/* */
