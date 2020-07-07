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

/* modules/contrib/gbifpublishers/templates/gbifpublisherspage.html.twig */
class __TwigTemplate_818b2d6f996b529f6c2f66a3bbdfce98691e6b978aa912c3cb87ed073d41f002 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17, "for" => 31];
        $filters = ["escape" => 22, "length" => 34];
        $functions = ["attach_library" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['attach_library']
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
        // line 16
        echo "<div class=\"partenaire\">
    ";
        // line 17
        if (((((twig_test_empty(twig_test_empty(($context["publisher_key"] ?? null))) && twig_test_empty(($context["publisher_title"] ?? null))) && twig_test_empty(($context["publisher_description"] ?? null))) && twig_test_empty(($context["publisher_homepage"] ?? null))) && twig_test_empty(($context["publisher_GBIF_page"] ?? null)))) {
            // line 18
            echo "        <h2>Partenaire inconnu</h2>
        <p></p>
        <p>Le partenaire renseigné est inconnu. Vérifiez le code uuid renseigné</p>
    ";
        } else {
            // line 22
            echo "        <h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publisher_title"] ?? null)), "html", null, true);
            echo "</h2>
        <div class=\"partie_gauche col-sm-12 col-md-9\">
            <p class=\"partenaire_description\"><strong>Description :</strong> ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publisher_description"] ?? null)), "html", null, true);
            echo "</p>

            <p> ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publisher_datasets"] ?? null)), "html", null, true);
            echo "</p>

            ";
            // line 28
            if ( !twig_test_empty(($context["publisher_datasets"] ?? null))) {
                // line 29
                echo "            <table class=\"partenaires_datasets\">
                    <tr><th>Jeu de données publié</th></tr>
                ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["publisher_datasets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["dataset"]) {
                    // line 32
                    echo "                    <p> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["dataset"]), "html", null, true);
                    echo "</p>

                    ";
                    // line 34
                    if ((((twig_length_filter($this->env, $context["dataset"]) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["dataset"], "dataset_key", [])) > 0)) && (twig_length_filter($this->env, $this->getAttribute($context["dataset"], "dataset_title", [])) > 0))) {
                        // line 35
                        echo "                        <tr><td><a href=\"https://www.gbif.org/dataset/";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dataset"], "dataset_key", [])), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dataset"], "dataset_title", [])), "html", null, true);
                        echo "</a></td></tr>
                    ";
                    } elseif ((twig_length_filter($this->env,                     // line 36
$context["dataset"]) > 0)) {
                        // line 37
                        echo "                        <tr><td>Error : dataset unknow</td></tr>
                    ";
                    } else {
                        // line 39
                        echo "                        <tr><td>Error : No datasets</td></tr>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            </table>
            ";
            }
            // line 44
            echo "
        </div>
        <div class=\"partie_droite col-sm-12 col-sm-3\">
            <p class=\"partenaire_lien\"><a href=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publisher_homepage"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">Site du partenaire</a></p>
            <p class=\"partenaire_lien\"><a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publisher_GBIF_page"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">Site internet du GBIF.org</a></p>
        </div>
        ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gbifpublishers/gbifpublishers"), "html", null, true);
            echo "
    ";
        }
        // line 52
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gbifpublishers/templates/gbifpublisherspage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  141 => 50,  136 => 48,  132 => 47,  127 => 44,  123 => 42,  117 => 41,  113 => 39,  109 => 37,  107 => 36,  100 => 35,  98 => 34,  92 => 32,  88 => 31,  84 => 29,  82 => 28,  77 => 26,  72 => 24,  66 => 22,  60 => 18,  58 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gbifpublishers/templates/gbifpublisherspage.html.twig", "/data/www/html/drupal-8_generique/modules/contrib/gbifpublishers/templates/gbifpublisherspage.html.twig");
    }
}
