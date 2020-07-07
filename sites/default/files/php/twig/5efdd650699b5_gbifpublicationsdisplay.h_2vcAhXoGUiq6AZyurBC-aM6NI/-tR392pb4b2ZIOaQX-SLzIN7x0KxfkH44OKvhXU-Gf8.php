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

/* modules/contrib/gbifpublications/templates/gbifpublicationsdisplay.html.twig */
class __TwigTemplate_a6be1e85d503735fce5ab754128639b160171513afb84559311b97148557ba40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16, "for" => 28];
        $filters = ["length" => 16, "escape" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'escape'],
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
        // line 13
        echo "<div id=\"publications\">

    ";
        // line 16
        echo "    ";
        if ((twig_length_filter($this->env, ($context["country_code"] ?? null)) != 2)) {
            // line 17
            echo "        <div class=\"col-xs-12 col-sm-12\">
            <p class=\"publication\">Code pays invalide - Mettez les deux lettres en majuscule correspondant à un pays.</p>
        </div>

    ";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "
        <div class=\"col-xs-12 col-sm-12\">

            ";
            // line 26
            if (((twig_length_filter($this->env, ($context["country_code"] ?? null)) == 2) && (twig_length_filter($this->env, ($context["publications"] ?? null)) > 0))) {
                // line 27
                echo "
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                    // line 29
                    echo "
                    <div class=\"publication\">

                        ";
                    // line 32
                    if ((twig_length_filter($this->env, $context["publication"]) > 0)) {
                        // line 33
                        echo "
                            <span class=\"auteurs\">

                                ";
                        // line 36
                        if ((twig_length_filter($this->env, $this->getAttribute($context["publication"], "authors", [])) > 0)) {
                            // line 37
                            echo "
                                    ";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "authors", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                // line 39
                                echo "                                        <p class=\"auteur\">";
                                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["author"]), "html", null, true);
                                echo "</p>
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 41
                            echo "
                                ";
                        }
                        // line 43
                        echo "
                                <p class=\"annee\">";
                        // line 44
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["publication"], "year", [])), "html", null, true);
                        echo "</p>
                            </span>

                            <h3 class=\"titre\"><a title=\"Aller à l\\'article\" href=\"";
                        // line 47
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["publication"], "website", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["publication"], "title", [])), "html", null, true);
                        echo "</a></h3>
                            <p class=\"source\">";
                        // line 48
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["publication"], "source", [])), "html", null, true);
                        echo "</p>
                            <p class=\"abstract\">";
                        // line 49
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["publication"], "abstract", [])), "html", null, true);
                        echo "</p>

                            ";
                        // line 51
                        if ((twig_length_filter($this->env, $this->getAttribute($context["publication"], "keywords", [])) > 0)) {
                            // line 52
                            echo "
                                <span class=\"mot_cles\"> Keywords : </span>

                                ";
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "keywords", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                                // line 56
                                echo "                                    <p class=\"mot_cle\">";
                                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["keyword"]), "html", null, true);
                                echo "</p>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "
                            ";
                        }
                        // line 60
                        echo "
                        ";
                    } else {
                        // line 62
                        echo "                            <span>Error : publication unknow</span>
                        ";
                    }
                    // line 64
                    echo "
                    </div><hr/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
                ";
                // line 68
                if (($this->getAttribute(($context["publication"] ?? null), "previous", []) > 0)) {
                    // line 69
                    echo "                    <p class=\"publication_boutons\"><button type=\"submit\" formaction=\"../../gbifpublications/display/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
                    echo "/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["publication"] ?? null), "previous", [])), "html", null, true);
                    echo "\">Précédent</button></p>
                ";
                }
                // line 71
                echo "                ";
                if (($this->getAttribute(($context["publication"] ?? null), "next", []) > 0)) {
                    // line 72
                    echo "                    <p class=\"publication_boutons\"><button type=\"submit\" formaction=\"../../gbifpublications/display/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_code"] ?? null)), "html", null, true);
                    echo "/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["publication"] ?? null), "next", [])), "html", null, true);
                    echo "\">Suivant</button></p>
                ";
                }
                // line 74
                echo "
            ";
            }
            // line 76
            echo "
        </div>

    ";
        }
        // line 80
        echo "    ";
        // line 81
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gbifpublications/templates/gbifpublicationsdisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  217 => 80,  211 => 76,  207 => 74,  199 => 72,  196 => 71,  188 => 69,  186 => 68,  183 => 67,  175 => 64,  171 => 62,  167 => 60,  163 => 58,  154 => 56,  150 => 55,  145 => 52,  143 => 51,  138 => 49,  134 => 48,  128 => 47,  122 => 44,  119 => 43,  115 => 41,  106 => 39,  102 => 38,  99 => 37,  97 => 36,  92 => 33,  90 => 32,  85 => 29,  81 => 28,  78 => 27,  76 => 26,  71 => 23,  68 => 22,  62 => 17,  59 => 16,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gbifpublications/templates/gbifpublicationsdisplay.html.twig", "/data/www/html/drupal-8_generique/modules/contrib/gbifpublications/templates/gbifpublicationsdisplay.html.twig");
    }
}
