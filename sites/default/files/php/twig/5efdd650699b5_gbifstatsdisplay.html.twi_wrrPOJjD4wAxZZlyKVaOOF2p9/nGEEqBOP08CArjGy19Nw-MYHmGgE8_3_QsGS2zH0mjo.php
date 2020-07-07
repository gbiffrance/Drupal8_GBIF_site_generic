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

/* modules/contrib/gbifstats/templates/gbifstatsdisplay.html.twig */
class __TwigTemplate_964365f9bf8d7ae98ce7a6704ad2f9b6ad1ef8c4cc9b70565572f0fa504e0439 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25, "for" => 99];
        $filters = ["escape" => 28, "length" => 46];
        $functions = ["attach_library" => 126];

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
        // line 22
        echo "<div class=\"stats\">

    ";
        // line 25
        echo "    ";
        if ((((( !twig_test_empty(($context["node_name"] ?? null)) ||  !twig_test_empty(($context["website"] ?? null))) ||  !twig_test_empty(($context["head_delegation"] ?? null))) ||  !twig_test_empty(($context["node_manager"] ?? null))) ||  !twig_test_empty(($context["link_page_GBIF"] ?? null)))) {
            // line 26
            echo "        <div id=\"national_info\">
            ";
            // line 27
            if ( !twig_test_empty(($context["node_name"] ?? null))) {
                // line 28
                echo "                <p id=\"node_name\">Nom du point nodal national : ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_name"] ?? null)), "html", null, true);
                echo "</p>
            ";
            }
            // line 30
            echo "            ";
            if ( !twig_test_empty(($context["website"] ?? null))) {
                // line 31
                echo "                <p id=\"website\">Site internet : <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website"] ?? null)), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 33
            echo "            ";
            if ( !twig_test_empty(($context["head_delegation"] ?? null))) {
                // line 34
                echo "                <p id=\"head_delegation\">Chef de la delegation : ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_delegation"] ?? null)), "html", null, true);
                echo "</p>
            ";
            }
            // line 36
            echo "            ";
            if ( !twig_test_empty(($context["node_manager"] ?? null))) {
                // line 37
                echo "                <p id=\"node_manager\">Chef du point nodal national : ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_manager"] ?? null)), "html", null, true);
                echo "</p>
            ";
            }
            // line 39
            echo "            ";
            if ( !twig_test_empty(($context["link_page_GBIF"] ?? null))) {
                // line 40
                echo "                <p id=\"link_page_GBIF\">Lien vers la page GBIF : <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_page_GBIF"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_page_GBIF"] ?? null)), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 42
            echo "        </div><hr/>
    ";
        }
        // line 44
        echo "
    ";
        // line 46
        echo "    ";
        if ((twig_length_filter($this->env, ($context["country_code"] ?? null)) != 2)) {
            // line 47
            echo "        <div class=\"stats-rond col-xs-12 col-sm-12\">
            <p class=\"stats_texte\">Code pays invalide - Mettez les deux lettres en majuscule correspondant à un pays.</p>
        </div>

    ";
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "
        <div class=\"stats-rond col-xs-12 col-sm-6\">

        ";
            // line 56
            if (( !(($context["nb_publishers"] ?? null) === "NoSelect") ||  !(($context["nb_occurrences"] ?? null) === "NoSelect"))) {
                // line 57
                echo "            <p class=\"stats_texte\">Sur le GBIF,</p>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            if ( !(($context["nb_publishers"] ?? null) === "NoSelect")) {
                // line 62
                echo "
            ";
                // line 63
                if ((twig_length_filter($this->env, ($context["nb_publishers"] ?? null)) > 0)) {
                    // line 64
                    echo "                <p class=\"stats_chiffre\"><a href=\"https://www.gbif.org/fr/publisher/search?country=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nb_publishers"] ?? null)), "html", null, true);
                    echo "</a></p>
            ";
                } else {
                    // line 66
                    echo "                <p class=\"stats_chiffre\">Error : country unknow or getting no publishers</p>
            ";
                }
                // line 68
                echo "
            <p class=\"stats_texte\">fournisseurs de donn&eacute;es fran&ccedil;ais publient</p>

        ";
            }
            // line 72
            echo "
        ";
            // line 74
            echo "        ";
            if ( !(($context["nb_occurrences"] ?? null) === "NoSelect")) {
                // line 75
                echo "
            ";
                // line 76
                if ((twig_length_filter($this->env, ($context["nb_occurrences"] ?? null)) > 0)) {
                    // line 77
                    echo "                <p class=\"stats_chiffre\"><a href=\"https://www.gbif.org/fr/occurrence/search?publishing_country=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
                    echo "&advanced=1\" target=\"_blank\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nb_occurrences"] ?? null)), "html", null, true);
                    echo "</a></p>
            ";
                } else {
                    // line 79
                    echo "                <p class=\"stats_chiffre\">Error : country unknow or getting no occurrences</p>
            ";
                }
                // line 81
                echo "

            <p class=\"stats_texte\">occurrences de donn&eacute;es</p>
        ";
            }
            // line 85
            echo "
        </div>
        ";
            // line 88
            echo "
        ";
            // line 90
            echo "        ";
            if ( !(($context["last_datasets"] ?? null) === "NoSelect")) {
                // line 91
                echo "
            <div class=\"stats-dataset col-xs-12 col-sm-6\">

                ";
                // line 94
                if (((twig_length_filter($this->env, ($context["country_code"] ?? null)) == 2) && (twig_length_filter($this->env, ($context["last_datasets"] ?? null)) > 0))) {
                    // line 95
                    echo "                    <h3 class=\"stats_texte\">Derniers jeux de données publi&eacute;s :</h3>
                    <div class=\"stats_dataset\">
                        <ul>

                            ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["last_datasets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["dataset"]) {
                        // line 100
                        echo "
                                ";
                        // line 101
                        if ((((twig_length_filter($this->env, $context["dataset"]) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["dataset"], "key_dataset", [])) > 0)) && (twig_length_filter($this->env, $this->getAttribute($context["dataset"], "title_dataset", [])) > 0))) {
                            // line 102
                            echo "                                    <li class=\"stats_dataset_texte\"><a href=\"https://www.gbif.org/dataset/";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dataset"], "key_dataset", [])), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dataset"], "title_dataset", [])), "html", null, true);
                            echo "</a></li>
                                ";
                        } elseif ((twig_length_filter($this->env,                         // line 103
$context["dataset"]) > 0)) {
                            // line 104
                            echo "                                    <li class=\"stats_dataset_texte\">Error : dataset unknow</li>
                                ";
                        } else {
                            // line 106
                            echo "                                    <li class=\"stats_dataset_texte\">Error : No datasets</li>
                                ";
                        }
                        // line 108
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "
                        </ul>
                    </div>
                ";
                }
                // line 114
                echo "
            </div><hr/>

        ";
            }
            // line 118
            echo "        ";
            // line 119
            echo "
    ";
        }
        // line 121
        echo "    ";
        // line 122
        echo "
    ";
        // line 124
        echo "    ";
        // line 125
        echo "    ";
        if ((($context["display_map"] ?? null) === "oui")) {
            // line 126
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gbifstats/gbifstats"), "html", null, true);
            echo "
        <div id= \"gbifstatsmap\"></div>
    ";
        }
        // line 129
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gbifstats/templates/gbifstatsdisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 129,  285 => 126,  282 => 125,  280 => 124,  277 => 122,  275 => 121,  271 => 119,  269 => 118,  263 => 114,  257 => 110,  250 => 108,  246 => 106,  242 => 104,  240 => 103,  233 => 102,  231 => 101,  228 => 100,  224 => 99,  218 => 95,  216 => 94,  211 => 91,  208 => 90,  205 => 88,  201 => 85,  195 => 81,  191 => 79,  183 => 77,  181 => 76,  178 => 75,  175 => 74,  172 => 72,  166 => 68,  162 => 66,  154 => 64,  152 => 63,  149 => 62,  146 => 61,  143 => 59,  139 => 57,  137 => 56,  132 => 53,  129 => 52,  123 => 47,  120 => 46,  117 => 44,  113 => 42,  105 => 40,  102 => 39,  96 => 37,  93 => 36,  87 => 34,  84 => 33,  76 => 31,  73 => 30,  67 => 28,  65 => 27,  62 => 26,  59 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gbifstats/templates/gbifstatsdisplay.html.twig", "/data/www/html/drupal-8_generique/modules/contrib/gbifstats/templates/gbifstatsdisplay.html.twig");
    }
}
