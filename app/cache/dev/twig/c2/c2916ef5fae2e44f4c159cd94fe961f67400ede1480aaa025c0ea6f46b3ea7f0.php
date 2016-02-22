<?php

/* GVForumBundle:Poste:Ajout.html.twig */
class __TwigTemplate_7bc213435396019bbdd49c803902d85768422c35c622b9803fcf19974f498cd4 extends Twig_Template
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
        <div align=\"center\" class=\"span10\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), 'widget', array("attr" => array("style" => "display:none", "value" => "6")));
        echo "</div>
        <h2>Titre </h2>
        <div class=\"span10\" id=\"f1\"> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
       <div class=\"span12\" id=\"f3\" >
 ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Contenu", array()), 'widget');
        echo "
       </div>
    
        <p align=\"center\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date_published", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "</p>
      <h2>Titre de l'image </h2>
      
    <div class=\"span10\" id=\"f1\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    <h2>Selectionner Votre Image </h2>
     <div class=\"span10\" id=\"f1\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
      <h2>Selectionner Votre Video </h2>
        <div class=\"span10\" id=\"f1\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "v", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
          <h2>Titre du video </h2>
        <div class=\"span10\" id=\"f1\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "v", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
           <div class=\"btn\"  id=\"f2\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Envoyer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
 
     
      ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

    
</form>

    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
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
        return array (  100 => 33,  97 => 32,  87 => 26,  81 => 23,  77 => 22,  72 => 20,  67 => 18,  62 => 16,  56 => 13,  50 => 10,  45 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/*     {% extends '::base.html.twig' %}*/
/*       {% block body %}*/
/* <div id="h">Ajouter un Poste </div>*/
/* */
/*     <form action='' method="post"  {{ form_enctype(f) }}>*/
/*         <div align="center" class="span10">{{ form_widget(f.id,{'attr': {'style': 'display:none','value':'6'}})}}</div>*/
/*         <h2>Titre </h2>*/
/*         <div class="span10" id="f1"> {{ form_widget(f.Titre, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*        <div class="span12" id="f3" >*/
/*  {{ form_widget(f.Contenu) }}*/
/*        </div>*/
/*     */
/*         <p align="center">{{ form_widget(f.date_published ,{'attr': {'style': 'display:none'}}) }}</p>*/
/*       <h2>Titre de l'image </h2>*/
/*       */
/*     <div class="span10" id="f1">{{ form_widget(f.image.name, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*     <h2>Selectionner Votre Image </h2>*/
/*      <div class="span10" id="f1">{{ form_widget(f.image.file, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*       <h2>Selectionner Votre Video </h2>*/
/*         <div class="span10" id="f1">{{ form_widget(f.v.file, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*           <h2>Titre du video </h2>*/
/*         <div class="span10" id="f1">{{ form_widget(f.v.name, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*            <div class="btn"  id="f2">{{ form_widget(f.Envoyer, { 'attr': {'class': 'form-control'} }) }}</div>*/
/*  */
/*      */
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
