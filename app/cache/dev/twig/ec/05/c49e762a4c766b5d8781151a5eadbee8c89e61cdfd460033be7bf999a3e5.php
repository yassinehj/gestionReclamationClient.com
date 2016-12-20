<?php

/* GrcReclamationBundle::base.html.twig */
class __TwigTemplate_ec05c49e762a4c766b5d8781151a5eadbee8c89e61cdfd460033be7bf999a3e5 extends Twig_Template
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
        // line 16
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Reclamation client</title>

";
        // line 26
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 28
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 30
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 32
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 34
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 41
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"nav-md\">
   ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 219
        echo "
";
        // line 221
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 223
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 225
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
";
        // line 227
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
";
        // line 229
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 231
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
";
        // line 248
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

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "      <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Reclamation client</span></a>
            </div>

            <div class=\"clearfix\"></div>

";
        // line 58
        echo "            <div class=\"profile\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>John Doe</h2>
               
              </div>
            </div>
";
        // line 69
        echo "
            <br />

";
        // line 73
        echo "            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>Administrateur</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Profil </a></li>
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Gestion manager </a></li>
                  
                </ul>
              </div>
            </div>
";
        // line 84
        echo "
";
        // line 86
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
        // line 101
        echo "          </div>
        </div>

";
        // line 105
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
        // line 115
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
        // line 127
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
        // line 139
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
        // line 151
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
        // line 163
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
        // line 175
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
        // line 209
        $this->displayBlock('admin', $context, $blocks);
        // line 212
        echo "        ";
        // line 216
        echo "      </div>
    </div>
";
    }

    // line 209
    public function block_admin($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GrcReclamationBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 209,  422 => 216,  420 => 212,  418 => 209,  382 => 175,  367 => 163,  352 => 151,  337 => 139,  322 => 127,  307 => 115,  295 => 105,  290 => 101,  274 => 86,  271 => 84,  259 => 73,  254 => 69,  243 => 60,  239 => 58,  227 => 47,  224 => 46,  181 => 248,  177 => 246,  173 => 245,  169 => 244,  165 => 243,  161 => 242,  157 => 241,  153 => 240,  149 => 239,  145 => 238,  141 => 237,  137 => 236,  133 => 235,  129 => 234,  125 => 233,  121 => 232,  116 => 231,  111 => 229,  106 => 227,  101 => 225,  96 => 223,  91 => 221,  88 => 219,  86 => 46,  77 => 41,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  57 => 35,  52 => 34,  47 => 32,  42 => 30,  37 => 28,  32 => 26,  21 => 16,);
    }
}
