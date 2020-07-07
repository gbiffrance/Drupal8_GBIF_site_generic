<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/gbifstats/templates/gbifstatsgenerate.html.twig */
class __TwigTemplate_6d806464715c3b9b44d6c2b80805007b53e7556f11d6f852250234ffa6d5e0d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 14
        echo "<div class=\"stats\">
  ";
        // line 15
        if ( !(($context["message_erreur"] ?? null) === "NoError")) {
            // line 16
            echo "    <p>La page a rencontrée une erreur : </p>
    <p>&nbps;</p>
    <p>";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message_erreur"] ?? null)), "html", null, true);
            echo "</p>
  ";
        } else {
            // line 20
            echo "    <p>Génération complète</p>
    <p></p>
    <p>Pour voir le résultats, allez sur la page <a href=\"../../gbifstats/display/";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">/gbifstats/display/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
            echo "</a></p>
  ";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gbifstats/templates/gbifstatsgenerate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  73 => 22,  69 => 20,  64 => 18,  60 => 16,  58 => 15,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gbifstats/templates/gbifstatsgenerate.html.twig", "/data/www/html/drupal-8_generique/modules/contrib/gbifstats/templates/gbifstatsgenerate.html.twig");
    }
}
