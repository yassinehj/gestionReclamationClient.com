<?php

/* GrcUserBundle:Admin:AjoutManager.html.twig */
class __TwigTemplate_99f74c49c29966433233231007c518876954118d6b89c8f383aee41e5c74c09e extends Twig_Template
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

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"\">

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">

                    <div class=\"x_content\">
                        <h1>Ajouter Manager</h1>
                        <form action='' ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <div>
                                <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
                            </div>
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
        return "GrcUserBundle:Admin:AjoutManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  49 => 15,  45 => 14,  33 => 4,  30 => 3,  25 => 2,);
    }
}
