<?php

/* GrcReclamationBundle:Reclamation:ajoutSujet.html.twig */
class __TwigTemplate_aabaf4970330750b5866ddae19f37343e36dfed34c225d40c3c4cb0ddfb0574f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GrcUserBundle::template_client.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrcUserBundle::template_client.html.twig";
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
  <form action=\"\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
         
       
                        <font color=\"#0fbcfd\"  >Sujet: </font>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujet", array()), 'widget');
        echo "
                                <font color=\"#0fbcfd\"  >Etat:</font>
                                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo " 
                                <font color=\"#0fbcfd\"  >Utilisateur:</font></td>
                                  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "utilisateur", array()), 'widget');
        echo "
                          <font color=\"#0fbcfd\"  >Reclamation:</font>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "reclamation", array()), 'widget');
        echo "
        
       

  <input type=\"submit\" value=\"Ajouter\" />
   ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
  
   
</form> 
       </div>
 
    <font color=\"#7CF0F2\"  > <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("grc_reclamation_liste");
        echo "\">
         
           Retour
           
        </a> </font>

        ";
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle:Reclamation:ajoutSujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  74 => 21,  66 => 16,  61 => 14,  56 => 12,  51 => 10,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
