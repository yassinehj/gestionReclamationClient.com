<?php

/* GrcUserBundle::template_client.html.twig */
class __TwigTemplate_a1b625e15730e384556a7d03facace366e42f3238358151efa0cf6358b7a2aee extends Twig_Template
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
        // line 212
        echo "
";
        // line 214
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 216
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 218
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
";
        // line 220
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
";
        // line 222
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 224
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
";
        // line 241
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
                <h2>Client</h2>
               
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
                <h3>Client</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Profil </a></li>
                    
                 
                    <li><a><i class=\"fa fa-home\"></i> Passer reclamation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      
                      <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("reclamation_ajoutSujet");
        echo "\">Passer reclamation</a></li>
                       
                    </ul>
                  </li>                
                </ul>
              </div>
            </div>
";
        // line 77
        echo "
";
        // line 79
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
        // line 94
        echo "          </div>
        </div>

";
        // line 98
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
        // line 108
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
        // line 120
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
        // line 132
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
        // line 144
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
        // line 156
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
        // line 168
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
        // line 202
        $this->displayBlock('admin', $context, $blocks);
        // line 205
        echo "        ";
        // line 209
        echo "      </div>
    </div>
";
    }

    // line 202
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GrcUserBundle::template_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 202,  433 => 209,  431 => 205,  429 => 202,  393 => 168,  378 => 156,  363 => 144,  348 => 132,  333 => 120,  318 => 108,  306 => 98,  301 => 94,  285 => 79,  282 => 77,  272 => 69,  260 => 59,  255 => 55,  244 => 46,  240 => 44,  228 => 33,  225 => 32,  182 => 241,  178 => 239,  174 => 238,  170 => 237,  166 => 236,  162 => 235,  158 => 234,  154 => 233,  150 => 232,  146 => 231,  142 => 230,  138 => 229,  134 => 228,  130 => 227,  126 => 226,  122 => 225,  117 => 224,  112 => 222,  107 => 220,  102 => 218,  97 => 216,  92 => 214,  89 => 212,  87 => 32,  78 => 27,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  53 => 20,  48 => 18,  43 => 16,  38 => 14,  33 => 12,  21 => 1,);
    }
}
