<?php

/* GrcReclamationBundle:Collaborateur:update.html.twig */
class __TwigTemplate_8d9512c93ace489fcfa5b4671f1a69fbff20d54bd4f1b45f3e6a0b65920bb85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GrcUserBundle::template_collaborateur.html.twig");

        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrcUserBundle::template_collaborateur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_admin($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"form-style-6\"> 
    <h1>Ejecter ou mettre en cours la reclamation</h1>
    <form  class=\"form-horizontal form-label-left\" novalidate action=\"\" method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   
     <button type=\"submit\"  class=\"btn btn-primary\"> Valider </button></a>                
             
</form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle:Collaborateur:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  36 => 8,  31 => 5,  28 => 4,);
    }
}
