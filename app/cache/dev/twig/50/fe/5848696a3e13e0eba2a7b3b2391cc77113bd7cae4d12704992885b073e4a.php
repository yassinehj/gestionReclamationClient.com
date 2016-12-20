<?php

/* GrcUserBundle::template_manager.html.twig */
class __TwigTemplate_50fe5848696a3e13e0eba2a7b3b2391cc77113bd7cae4d12704992885b073e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Reclamation client</title>

";
        // line 12
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 14
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 16
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 18
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 27
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"nav-md\">
   ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 225
        echo "
";
        // line 227
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 229
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 231
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
";
        // line 233
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
";
        // line 235
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 237
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
";
        // line 254
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
  \$('#myModal').on
  ('shown.bs.modal', function () {
  \$('#myInput').focus();
});
 // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      \$('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
      });

      \$('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll(\$(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });

    </script>
</body>
</html>
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "      <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Reclamation client</span></a>
            </div>

            <div class=\"clearfix\"></div>

";
        // line 44
        echo "            <div class=\"profile\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>Manager</h2>
               
              </div>
            </div>
";
        // line 55
        echo "
            <br />

";
        // line 59
        echo "            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>Manager</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Profil </a></li>
                     <li><a><i class=\"fa fa-home\"></i> Gestion collaborateurs <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_list");
        echo "\">Liste des collaborateurs</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_ajout");
        echo "\">Ajouter collaborateur</a></li>
                      
                    </ul>
                  </li> 
                  <li><a><i class=\"fa fa-home\"></i> Gestion clients <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_list");
        echo "\">Liste des clients</a></li>
                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("grc_manager_collaborateur_ajout");
        echo "\">Ajouter client</a></li>
                      
                    </ul>
                  </li> 
                    <li><a><i class=\"fa fa-home\"></i> Gestion reclamation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("grc_reclamation_liste");
        echo "\">Reclamation reçu</a></li>
                      <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("grc_reclamation_liste_ejecter");
        echo "\">Reclamation ejectée</a></li>
               
                     <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("grc_reclamation_liste_terminer");
        echo "\">Reclamation terminée</a></li>
                    </ul>
                  </li>                
                </ul>
              </div>
            </div>
";
        // line 90
        echo "
";
        // line 92
        echo "            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" >
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
";
        // line 107
        echo "          </div>
        </div>

";
        // line 111
        echo "        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">John Doe
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            

           
        
";
        // line 215
        $this->displayBlock('admin', $context, $blocks);
        // line 218
        echo "        ";
        // line 222
        echo "      </div>
    </div>
";
    }

    // line 215
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GrcUserBundle::template_manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 215,  464 => 222,  462 => 218,  460 => 215,  424 => 181,  409 => 169,  394 => 157,  379 => 145,  364 => 133,  349 => 121,  337 => 111,  332 => 107,  316 => 92,  313 => 90,  304 => 83,  299 => 81,  295 => 80,  286 => 74,  282 => 73,  273 => 67,  269 => 66,  260 => 59,  255 => 55,  244 => 46,  240 => 44,  228 => 33,  225 => 32,  182 => 254,  178 => 252,  174 => 251,  170 => 250,  166 => 249,  162 => 248,  158 => 247,  154 => 246,  150 => 245,  146 => 244,  142 => 243,  138 => 242,  134 => 241,  130 => 240,  126 => 239,  122 => 238,  117 => 237,  112 => 235,  107 => 233,  102 => 231,  97 => 229,  92 => 227,  89 => 225,  87 => 32,  78 => 27,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  53 => 20,  48 => 18,  43 => 16,  38 => 14,  33 => 12,  21 => 1,);
    }
}
