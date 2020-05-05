<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/system-themes-page.html.twig */
class __TwigTemplate_f4685bd148b138def27143b7121bd9b2e7837a43b0d18d87611a642d18604386 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("for" => 36, "set" => 38, "if" => 49);
        $filters = array("escape" => 35, "safe_join" => 88);
        $functions = array("create_attribute" => 85);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 37
            echo "    ";
            // line 38
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 40
$context["theme_group"], "state", [], "any", false, false, true, 40), 40, $this->source)), 2 => "clearfix"];
            // line 44
            echo "
    ";
            // line 46
            $context["card_alignment"] = (((twig_get_attribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 46) == "installed")) ? ("horizontal") : ("vertical"));
            // line 48
            echo "
    ";
            // line 49
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 49)) {
                // line 50
                echo "      <hr>
    ";
            }
            // line 52
            echo "
    <div";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 53), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</h2>
      <div class=\"card-list ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["card_alignment"] ?? null) == "horizontal")) ? ("card-list--two-cols") : ("card-list--four-cols")));
            echo "\">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 57
                echo "          ";
                // line 58
                $context["theme_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,                 // line 59
$context["theme"], "is_default", [], "any", false, false, true, 59)) ? ("theme-default") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                 // line 60
$context["theme"], "is_admin", [], "any", false, false, true, 60)) ? ("theme-admin") : ("")), 2 => "card", 3 => ("card--" . $this->sandbox->ensureToStringAllowed(                // line 62
($context["card_alignment"] ?? null), 62, $this->source)), 4 => "card-list__item"];
                // line 66
                echo "          ";
                // line 67
                $context["theme_title_classes"] = [0 => "card__content-item", 1 => "heading-f"];
                // line 72
                echo "          ";
                // line 73
                $context["theme_description_classes"] = [0 => "card__content-item"];
                // line 77
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 77), "addClass", [0 => ($context["theme_classes"] ?? null)], "method", false, false, true, 77), "setAttribute", [0 => "aria-labelledby", 1 => twig_get_attribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 77)], "method", false, false, true, 77), "setAttribute", [0 => "aria-describedby", 1 => ((twig_get_attribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 77)) ? (twig_get_attribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 77)) : (null))], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                echo ">
            ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 78)) {
                    // line 79
                    echo "              <div class=\"card__image\">
                ";
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 83
                echo "            <div class=\"card__content-wrapper\">
              <div class=\"card__content\">
                <h3";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 85)]), "addClass", [0 => ($context["theme_title_classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
                echo " id=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo ">";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 87)) {
                    // line 88
                    echo "                    (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 88), 88, $this->source), ", "));
                    echo ")";
                }
                // line 90
                echo "</h3>

                ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 92) && twig_get_attribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 92))) {
                    // line 93
                    echo "                  <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => ((twig_get_attribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 93)) ? (twig_get_attribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 93)) : (null))]), "addClass", [0 => ($context["theme_description_classes"] ?? null)], "method", false, false, true, 93), 93, $this->source), "html", null, true);
                    echo ">
                    ";
                    // line 94
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                    echo "
                  </div>";
                }
                // line 97
                echo "</div>

              <div class=\"card__footer\">
                ";
                // line 101
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 101)) {
                    // line 102
                    echo "                  <small class=\"incompatible\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                    echo "</small>
                ";
                } else {
                    // line 104
                    echo "                    ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo "
                ";
                }
                // line 106
                echo "              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "      </div>
    </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 113,  218 => 110,  209 => 106,  203 => 104,  197 => 102,  194 => 101,  189 => 97,  184 => 94,  179 => 93,  177 => 92,  173 => 90,  168 => 88,  166 => 87,  162 => 86,  157 => 85,  153 => 83,  147 => 80,  144 => 79,  142 => 78,  137 => 77,  135 => 73,  133 => 72,  131 => 67,  129 => 66,  127 => 62,  126 => 60,  125 => 59,  124 => 58,  122 => 57,  118 => 56,  114 => 55,  110 => 54,  106 => 53,  103 => 52,  99 => 50,  97 => 49,  94 => 48,  92 => 46,  89 => 44,  87 => 40,  86 => 38,  84 => 37,  67 => 36,  62 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/system-themes-page.html.twig", "/Users/hamad/WebServer/drupal9/core/themes/claro/templates/system-themes-page.html.twig");
    }
}
