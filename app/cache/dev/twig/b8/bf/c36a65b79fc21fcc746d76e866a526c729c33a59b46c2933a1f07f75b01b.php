<?php

/* GrcReclamationBundle:Reclamation:showSujet.html.twig */
class __TwigTemplate_b8bfc36a65b79fc21fcc746d76e866a526c729c33a59b46c2933a1f07f75b01b extends Twig_Template
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
        // line 6
        echo "  
<center>
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
            
    

              <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>Details reclamation</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      
                      
                      <li><a data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-square\"></i></a>
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    ";
        // line 27
        echo "           <table id=\"datatable-checkbox\" class=\"table table-striped table-bordered bulk_action\">
                <tr>
                   <td> Sujet</td>
                   <td> Etat </td>
                    <td>Reclamation</td>
                    <td>Creé par</td>
                    <td>Le</td>        
                </tr>
                <tr>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sujet", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reclamation", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "utilisateur", array()), "html", null, true);
        echo "</td>
                    <td> ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creation", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                    <td> <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_updateSujet", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn bg-green \"><i class=\"fa fa-edit\"></i> </button></a> </td>
                 
                </tr>
         </table>
                 </div>
                </div>
                       ";
        // line 51
        echo "    <!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
       </div>
</center>
    <center>
 <div >
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
            
    

              <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>Commentaires</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      
                      
                      <li><a data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-square\"></i></a>
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    ";
        // line 79
        echo "         
    <table id=\"datatable-checkbox\" class=\"table table-striped table-bordered bulk_action\">
                <tr>
                    <td>Utilisateur</td>
                    <td>Commentaire</td>
                    
                    
                </tr>
       ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 88
            echo "                
                <tr>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "user", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaire", array()), "html", null, true);
            echo "
                        <br>
                    ";
            // line 93
            if ($this->getAttribute($context["entity"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "       
    </table>
             </div>
                </div>
                       ";
        // line 104
        echo "    <!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
 </div>
    </center>
            <br>
            <br>
             <hr>
          <div >
              <h1>Commentaire</h1>      
             
    <form action=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_create", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" >
         
                    <font color=\"#03bcfd\">
                  Utilisateur  : 
                  </font>
               
              ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
           
                     <font color=\"#03bcfd\">
                  Commentaire  : 
                  </font>
               
                     ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Ajouter\" />
      
 
           </form>
            </div>
                <br><br>          <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("grc_reclamation_liste");
        echo "\">Retour</a>
             
  
                        ";
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle:Reclamation:showSujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 135,  206 => 129,  197 => 123,  188 => 117,  173 => 104,  167 => 96,  156 => 93,  151 => 91,  147 => 90,  143 => 88,  139 => 87,  129 => 79,  102 => 51,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  73 => 36,  62 => 27,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
