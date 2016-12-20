<?php

/* GrcReclamationBundle:Reclamation:listejecter.html.twig */
class __TwigTemplate_e654ae4a33a8568d4786587020aa5b968e5d183d4df6f3d9b584b333859d2cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GrcUserBundle::template_manager.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrcUserBundle::template_manager.html.twig";
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
        echo " 
   
        <div>
             <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>liste des reclamations éjecter </h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      
                      
                      <li><a data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-square\"></i></a>
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    ";
        // line 23
        echo "        <table id=\"datatable-checkbox\" class=\"table table-striped table-bordered bulk_action\">
           
                <tr>

                    <td>Sujet</td>
                    <td>Etat</td>
                    <td>Utilisateur</td>
                    <td>Date de creation</td>
                    <td>Actions</td>
                </tr>
           
            
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["reclamation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 36
            echo "                    <tr>

                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "sujet", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "utilisateur", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "creation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        
                        <td>
                            <ul>
                                <li>
                                    
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_showSujet", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                </li>

                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "           
        </table>
                 </div>
                </div>
        </div>
                <br><br>

                <div class=\"cssDisplay\">
    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("reclamation_ajoutSujet");
        echo "\">
        Ajouter un Sujet
    </a>
                </div>

";
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle:Reclamation:listejecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  114 => 54,  101 => 47,  92 => 41,  88 => 40,  84 => 39,  80 => 38,  76 => 36,  72 => 35,  58 => 23,  39 => 5,  32 => 3,  29 => 2,);
    }
}
