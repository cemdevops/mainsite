<?php

/* themes/custom/cem/templates/node/node--article.html.twig */
class __TwigTemplate_f2d0a923cfb497c08cc5508bb6d69f59485acebca192c38adfbe0cb1323b3916 extends Twig_Template
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
        $tags = array("trans" => 64);
        $filters = array();
        $functions = array("drupal_field" => 54, "drupal_view" => 70);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
                array('drupal_field', 'drupal_view')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "    <main class=\"main\">
        <!-- internas top header init -->
        <section class=\"internas-top-header\">
            <div class=\"inner wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"breadcrumb\">
                                <a href=\"#\">home</a>
                                <a href=\"#\">notícias em destaque</a>
                                <a href=\"#\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- internas top header end -->
\t\t      <!-- internas container init -->
        <section class=\"internas-container\">
            <div class=\"inner wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <!-- noticia listagem coluna left init -->
                        <div class=\"col-md-9 col-xs-12\">
                            <!-- noticia header init -->
                            <div class=\"noticia-header\">
                                <div class=\"data\">
                                    <span>26/02/2018</span>
                                </div>
                                <div class=\"infos\">
                                    <div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\" data-mobile-iframe=\"true\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Compartilhar</a></div>
                                </div>
                                <div class=\"social\">
                                    <a href=\"#\" class=\"facebook\"><span>Facebook</span></a>
                                    <a href=\"#\" class=\"twitter\"><span>Twitter</span></a>
                                    <a href=\"#\" class=\"linkedin\"><span>linkedin</span></a>
                                </div>
                                <div class=\"title\">
                                    <h1>
                                        ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "
                                    </h1>
                                    <div class=\"sub-title\">
                                        <p>";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_subtitulo", array()), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"autor\">
                                    Por José Marcos Pinto da Cunha, São Paulo.
                                </div>
                            </div>
                            <!-- noticia header end -->
                            <!-- noticia conteudo init -->
\t\t\t\t\t\t\t<div class=\"noticia-conteudo\">
\t\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("body", "node"), "html", null, true));
        echo "
\t\t\t\t\t\t\t</div>
                        </div>
\t\t\t\t\t\t<!-- noticia listagem coluna left end -->
\t\t\t\t\t    <!-- noticia listagem coluna right init -->
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"side-bar-box agenda\">
                                    <div class=\"header\">EVENTOS/AGENDA</div>
                                        <div class=\"box\">
                                        <div class=\"home-agenda-header\">
                                            ";
        // line 64
        echo t("<h2>eventos/agenda</h2>", array());
        // line 67
        echo "                                        </div>
                                        <div class=\"box\">
                                          <!-- home agenda item init -->
                                          ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("evento", "bloco_evento_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
                                          <!-- home agenda item end -->
                                            ";
        // line 72
        echo t("<a href=\"#\" class=\"link-more\">agenda completa</a>", array());
        // line 75
        echo "                                        </div>
                                        </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<!-- side bar agenda end -->

\t\t\t\t\t\t\t\t<div class=\"side-bar-box recente\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">Notícias Recentes</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<!-- side bar noticia recente item init -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("noticia", "bloco_noticia_interna", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
\t\t\t\t\t\t\t\t\t\t\t<!-- side bar noticia recente item end -->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"link-more\">mais notícias</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- side bar  noticias recentes end -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
        </section>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cem/templates/node/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 84,  134 => 75,  132 => 72,  127 => 70,  122 => 67,  120 => 64,  107 => 54,  94 => 44,  88 => 41,  55 => 11,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/cem/templates/node/node--article.html.twig", "/var/www/html/cem/themes/custom/cem/templates/node/node--article.html.twig");
    }
}
