<?php

/* core/modules/system/templates/field-multiple-value-form.html.twig */
class __TwigTemplate_8e64ac407097149e05af5d7d0e0e3877bc88505314dbbeb41647018eb9e46364 extends Twig_Template
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
        $tags = array("if" => 24, "for" => 35);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 24
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 25
            echo "  <div class=\"js-form-item form-item\">
    ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true));
            echo "
    ";
            // line 27
            if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) {
                // line 28
                echo "      <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true));
                echo " >";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 30
            echo "    ";
            if ((isset($context["button"]) ? $context["button"] : null)) {
                // line 31
                echo "      <div class=\"clearfix\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true));
                echo "</div>
    ";
            }
            // line 33
            echo "  </div>
";
        } else {
            // line 35
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 36
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["element"], "html", null, true));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  75 => 35,  71 => 33,  65 => 31,  62 => 30,  54 => 28,  52 => 27,  48 => 26,  45 => 25,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an individual form element.*/
/*  **/
/*  * Available variables for all fields:*/
/*  * - multiple: Whether there are multiple instances of the field.*/
/*  **/
/*  * Available variables for single cardinality fields:*/
/*  * - elements: Form elements to be rendered.*/
/*  **/
/*  * Available variables when there are multiple fields.*/
/*  * - table: Table of field items.*/
/*  * - description: The description element containing the following properties:*/
/*  *   - content: The description content of the form element.*/
/*  *   - attributes: HTML attributes to apply to the description container.*/
/*  * - button: "Add another item" button.*/
/*  **/
/*  * @see template_preprocess_field_multiple_value_form()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if multiple %}*/
/*   <div class="js-form-item form-item">*/
/*     {{ table }}*/
/*     {% if description.content %}*/
/*       <div{{ description.attributes.addClass('description') }} >{{ description.content }}</div>*/
/*     {% endif %}*/
/*     {% if button %}*/
/*       <div class="clearfix">{{ button }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% else %}*/
/*   {% for element in elements %}*/
/*     {{ element }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
