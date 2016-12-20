<?php

/* GrcUserBundle:Admin:UpdateManager.html.twig */
class __TwigTemplate_156ced6210346352c6968acff92997cebdd137840375e65972966ea6a4f45599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GrcUserBundle::base.html.twig");

        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrcUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":FormTemplate:adminForm.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_admin($context, array $blocks = array())
    {
        // line 5
        echo "     <div class=\"\">

         <div class=\"clearfix\"></div>

         <div class=\"row\">
             <div class=\"col-md-12 col-sm-12 col-xs-12\">
                 <div class=\"x_panel\">

                     <div class=\"x_content\">
                         <h1>Modifier Manager</h1>
                         <form  action=\"\" method=\"post\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                             ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                             <button type=\"submit\"  class=\"btn btn-primary\"> Enregistrer </button>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>


";
    }

    public function getTemplateName()
    {
        return "GrcUserBundle:Admin:UpdateManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  45 => 15,  33 => 5,  30 => 4,  25 => 2,);
    }
}
