<?php

/* core/modules/system/templates/datetime-wrapper.html.twig */
class __TwigTemplate_0dc0f8911727966d50aa186f46912740cc37278e84aedd8a9af294efd1fc7a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 19, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 19
        $context["title_classes"] = array(0 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 1 => ((        // line 21
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "  <h4";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h4>
";
        }
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        // line 28
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 29
            echo "  <div>
    ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "
  </div>
";
        }
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  66 => 30,  63 => 29,  61 => 28,  57 => 27,  49 => 25,  47 => 24,  45 => 21,  44 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a datetime form wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The form element to be output, usually a datelist, or datetime.*/
/*  * - title: The title of the form element.*/
/*  * - title_attributes: HTML attributes for the title wrapper.*/
/*  * - description: Description text for the form element.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  **/
/*  * @see template_preprocess_datetime_wrapper()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set title_classes = [*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title %}*/
/*   <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>*/
/* {% endif %}*/
/* {{ content }}*/
/* {% if errors %}*/
/*   <div>*/
/*     {{ errors }}*/
/*   </div>*/
/* {% endif %}*/
/* {{ description }}*/
/* */
