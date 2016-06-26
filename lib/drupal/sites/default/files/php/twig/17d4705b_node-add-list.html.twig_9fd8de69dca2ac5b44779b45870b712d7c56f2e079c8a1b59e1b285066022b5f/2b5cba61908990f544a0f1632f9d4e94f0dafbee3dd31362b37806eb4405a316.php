<?php

/* core/modules/node/templates/node-add-list.html.twig */
class __TwigTemplate_f834c46691308ee97b6c7313256f10fa016f86f2fe3eae8b0e21b4d3c206a88d extends Twig_Template
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
        $tags = array("if" => 18, "for" => 20, "set" => 27, "trans" => 28);
        $filters = array();
        $functions = array("path" => 27);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set', 'trans'),
                array(),
                array('path')
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

        // line 18
        if ( !twig_test_empty((isset($context["types"]) ? $context["types"] : null))) {
            // line 19
            echo "  <dl>
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 21
                echo "      <dt>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "add_link", array()), "html", null, true));
                echo "</dt>
      <dd>";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
                echo "</dd>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  </dl>
";
        } else {
            // line 26
            echo "  <p>
    ";
            // line 27
            $context["create_content"] = $this->env->getExtension('drupal_core')->getPath("node.type_add");
            // line 28
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 29
(isset($context["create_content"]) ? $context["create_content"] : null), ));
            // line 31
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  76 => 29,  74 => 28,  72 => 27,  69 => 26,  65 => 24,  57 => 22,  52 => 21,  48 => 20,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to list node types available for adding content.*/
/*  **/
/*  * This list is displayed on the Add content admin page.*/
/*  **/
/*  * Available variables:*/
/*  * - types: A list of content types, each with the following properties:*/
/*  *   - add_link: Link to create a piece of content of this type.*/
/*  *   - description: Description of this type of content.*/
/*  **/
/*  * @see template_preprocess_node_add_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if types is not empty %}*/
/*   <dl>*/
/*     {% for type in types %}*/
/*       <dt>{{ type.add_link }}</dt>*/
/*       <dd>{{ type.description }}</dd>*/
/*     {% endfor %}*/
/*   </dl>*/
/* {% else %}*/
/*   <p>*/
/*     {% set create_content = path('node.type_add') %}*/
/*     {% trans %}*/
/*       You have not created any content types yet. Go to the <a href="{{ create_content }}">content type creation page</a> to add a new content type.*/
/*     {% endtrans %}*/
/*   </p>*/
/* {% endif %}*/
/* */
