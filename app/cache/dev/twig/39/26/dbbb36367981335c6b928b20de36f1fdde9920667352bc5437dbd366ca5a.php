<?php

/* GrcReclamationBundle:Commentaire:new.html.twig */
class __TwigTemplate_3926dbbb36367981335c6b928b20de36f1fdde9920667352bc5437dbd366ca5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GrcUserBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrcUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("body", $context, $blocks);
        echo " 
 ";
    }

    // line 5
    public function block_admin($context, array $blocks = array())
    {
        // line 6
        echo "  
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("commentaire");
        echo "\">
           Retour
        </a>
    </li>
</ul>

        ";
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle:Commentaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
