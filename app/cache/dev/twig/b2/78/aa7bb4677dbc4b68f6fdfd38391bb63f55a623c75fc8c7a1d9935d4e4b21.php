<?php

/* GrcUserBundle:Manager:ListCollaborateur.html.twig */
class __TwigTemplate_b278aa7bb4677dbc4b68f6fdfd38391bb63f55a623c75fc8c7a1d9935d4e4b21 extends Twig_Template
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
        echo "         <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
";
        // line 10
        echo "                      <div class=\"page-title\">
              <div class=\"title_left\">
                  <div class=\"col-md-5 col-sm-5 col-xs-12 \">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_ajout");
        echo "\"><button type=\"button\" value=\"Ajouter\" class=\"btn btn-primary\"> Ajouter  <i class=\"fa fa-plus-square\" /></i></button></a>
                  </div>
              </div>

              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
";
        // line 29
        echo "              </div>
                  </div>
                </div>
      
<div class=\"col-md-12 col-sm-12 col-xs-12\">
            
    

              <div class=\"x_panel\" style=\"\">
                  <div class=\"x_title\">
                    <h2>List des collaborateurs</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      
                      
                      <li><a data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-square\"></i></a>
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    ";
        // line 52
        echo "                    <table id=\"datatable-checkbox\" class=\"table table-striped table-bordered bulk_action\">
                      <thead>
                        <tr>
                          <th><input type=\"checkbox\" id=\"check-all\" class=\"flat\"></th>
                          <th>ID</th>
                          <th>Username</th>
                          <th>email</th>
                          <th>Roles</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 64
            echo "                        <tr>
                          <td><input type=\"checkbox\" class=\"flat\" name=\"table_records\"></td>
                          <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "id", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "username", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "email", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "</td>
                          <td>
                              <button class=\"btn bg-light-blue \" data-toggle=\"modal\" data-target=\"#addUserForm\"><i class=\"fa fa-eye\"></i></button>
                              <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grc_admin_manager_update", array("id" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn bg-green \"><i class=\"fa fa-edit\"></i> </button></a>
                              <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_delete", array("id" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\" ><button class=\"btn bg-red \" ><i class=\"fa fa-trash-o\"></i> </button></a>
                          </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        
                      </tbody>
                    </table>
                  </div>
                </div>
                       ";
        // line 86
        echo "    <!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Manager</h4>
      </div>
      <div class=\"modal-body\">
";
        // line 96
        echo "
          <div class=\"\">
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  
                  <div class=\"x_content\">

                    <form class=\"form-horizontal form-label-left\" novalidate>


                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"form_roles\" name=\"form[roles]\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\"  required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">Email <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"email\" id=\"email\" name=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">Confirm Email <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"email\" id=\"email2\" name=\"confirm_email\" data-validate-linked=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                     
                      
                      
                      <div class=\"item form-group\">
                        <label for=\"password\" class=\"control-label col-md-3\">Password</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"password\" type=\"password\" name=\"password\" data-validate-length=\"6,8\" class=\"form-control col-md-7 col-xs-12\" required=\"required\">
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label for=\"password2\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Repeat Password</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"password2\" type=\"password\" name=\"password2\" data-validate-linked=\"password\" class=\"form-control col-md-7 col-xs-12\" required=\"required\">
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"telephone\">Telephone <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"tel\" id=\"telephone\" name=\"phone\" required=\"required\" data-validate-length-range=\"8,20\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button id=\"send\" type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
          </div> 
       
        
";
        // line 170
        echo "          
      </div>
      ";
        // line 176
        echo "    </div>
  </div>
</div>

</div>
  <!-- Button trigger modal -->


     ";
    }

    public function getTemplateName()
    {
        return "GrcUserBundle:Manager:ListCollaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 176,  238 => 170,  163 => 96,  152 => 86,  145 => 77,  135 => 73,  131 => 72,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 64,  105 => 63,  92 => 52,  70 => 29,  52 => 13,  47 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
