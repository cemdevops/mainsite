<?php

/* {# inline_template_start #}                    <div class="col-md-4">
                                        <div class="home-news-item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ field_article_thumbnail }}">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <p>
                                                    <a href="#">{{ title }}</a>
                                                </p>
                                            </div>
                                        </div>
                   </div> */
class __TwigTemplate_e3f87d3f6c9da719310da7c4f60c423e923b58ed0793ad0d62b0230125d779eb extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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
        echo "                    <div class=\"col-md-4\">
                                        <div class=\"home-news-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_article_thumbnail"]) ? $context["field_article_thumbnail"] : null), "html", null, true));
        echo "\">
                                                </a>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a>
                                                </p>
                                            </div>
                                        </div>
                   </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                    <div class=\"col-md-4\">
                                        <div class=\"home-news-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ field_article_thumbnail }}\">
                                                </a>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">{{ title }}</a>
                                                </p>
                                            </div>
                                        </div>
                   </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  62 => 5,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}                    <div class=\"col-md-4\">
                                        <div class=\"home-news-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ field_article_thumbnail }}\">
                                                </a>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">{{ title }}</a>
                                                </p>
                                            </div>
                                        </div>
                   </div>", "");
    }
}
