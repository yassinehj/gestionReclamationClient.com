<?php

/* :FormTemplate:adminForm.html.twig */
class __TwigTemplate_bb765ec769869a453a58a917cb0847f1ceed49363293ad4c4fcb4fb2e1bd76d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget', $context, $blocks);
        // line 9
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 14
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
    }

    // line 1
    public function block_form_widget($context, array $blocks = array())
    {
        // line 2
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 3
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 5
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 9
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 10
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 11
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\"/>";
    }

    // line 14
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 16
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " style=\"visibility: hidden\">";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>";
    }

    public function getTemplateName()
    {
        return ":FormTemplate:adminForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  88 => 26,  86 => 25,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  65 => 16,  62 => 14,  48 => 11,  46 => 10,  43 => 9,  38 => 5,  35 => 3,  33 => 2,  30 => 1,  26 => 14,  24 => 9,  22 => 1,);
    }
}
