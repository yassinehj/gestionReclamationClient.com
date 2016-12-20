<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_18c022d607da3b9899f708b24d4838b8403b1fb4093197abe858b2a778400d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>
<div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
            <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <h1>Login Form</h1>
              <div>
                  <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                  <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Username\" />
              </div>
              <div>
                  <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                  <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\" />
              </div>
              <div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default submit\" />

";
        // line 27
        echo "                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/images.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
\t\t\t\t</div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
                <a class=\"btn btn-default submit\" href=\"\">Submit</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GrcUser/images/images.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 76,  94 => 41,  78 => 27,  73 => 24,  66 => 20,  60 => 17,  56 => 16,  50 => 13,  46 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
