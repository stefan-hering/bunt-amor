<?php

/* core/modules/filter/templates/filter-tips.html.twig */
class __TwigTemplate_15835077101073e1b1946414a5ad18d9371cd59d2b73355ca73cb052b650b25b extends Twig_Template
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
        $tags = array("if" => 21, "for" => 26);
        $filters = array("t" => 22, "length" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t', 'length'),
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

        // line 21
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 22
            echo "  <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Text Formats")));
            echo "</h2>
";
        }
        // line 24
        echo "
";
        // line 25
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 27
                echo "
    ";
                // line 28
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 29
                    echo "      <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                    echo ">
      <h3>";
                    // line 30
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tip"], "name", array()), "html", null, true));
                    echo "</h3>
    ";
                }
                // line 32
                echo "
    ";
                // line 33
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", array()))) {
                    // line 34
                    echo "      <ul>
      ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 36
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tip"], "attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "tip", array()), "html", null, true));
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "      </ul>
    ";
                }
                // line 40
                echo "
    ";
                // line 41
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 42
                    echo "      </div>
    ";
                }
                // line 44
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  108 => 42,  106 => 41,  103 => 40,  99 => 38,  88 => 36,  84 => 35,  81 => 34,  79 => 33,  76 => 32,  71 => 30,  66 => 29,  64 => 28,  61 => 27,  56 => 26,  54 => 25,  51 => 24,  45 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a set of filter tips.*/
/*  **/
/*  * Available variables:*/
/*  * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'*/
/*  *   (only used when 'long' is TRUE) for each filter in one or more text*/
/*  *   formats.*/
/*  * - long: A flag indicating whether the passed-in filter tips contain extended*/
/*  *   explanations, i.e. intended to be output on the path 'filter/tips'*/
/*  *   (TRUE), or are in a short format, i.e. suitable to be displayed below a*/
/*  *   form element. Defaults to FALSE.*/
/*  * - multiple: A flag indicating there is more than one filter tip.*/
/*  **/
/*  * @see template_preprocess_filter_tips()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if multiple %}*/
/*   <h2>{{ 'Text Formats'|t }}</h2>*/
/* {% endif %}*/
/* */
/* {% if tips|length %}*/
/*   {% for name, tip in tips %}*/
/* */
/*     {% if multiple %}*/
/*       <div{{ attributes }}>*/
/*       <h3>{{ tip.name }}</h3>*/
/*     {% endif %}*/
/* */
/*     {% if tip.list|length %}*/
/*       <ul>*/
/*       {% for item in tip.list %}*/
/*         <li{{ tip.attributes }}>{{ item.tip }}</li>*/
/*       {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/* */
/*     {% if multiple %}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*   {% endfor %}*/
/* {% endif %}*/
/* */
