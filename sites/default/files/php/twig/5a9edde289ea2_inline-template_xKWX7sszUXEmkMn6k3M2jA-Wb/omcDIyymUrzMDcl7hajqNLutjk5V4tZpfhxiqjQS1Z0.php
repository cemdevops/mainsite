<?php

/* {# inline_template_start #}                    <div class="col-md-4 home-publications-item">
                                            <div class="inner">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ field_publicacoes_thumbnail }}">
                                                    </a>
                                                </div>
                                                <div class="title">
                                                    <h3>
                                                        <a href="#">
                                                                        {{ title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <a href="#">{{ body }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div> */
class __TwigTemplate_b3e1825dc6b87bb6734b8b46c076a998143aead1ff38af97ec4f0cea91f3d6fe extends Twig_Template
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
        echo "                    <div class=\"col-md-4 home-publications-item\">
                                            <div class=\"inner\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_publicacoes_thumbnail"]) ? $context["field_publicacoes_thumbnail"] : null), "html", null, true));
        echo "\">
                                                    </a>
                                                </div>
                                                <div class=\"title\">
                                                    <h3>
                                                        <a href=\"#\">
                                                                        ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class=\"text\">
                                                    <p>
                                                        <a href=\"#\">";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                    <div class=\"col-md-4 home-publications-item\">
                                            <div class=\"inner\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"{{ field_publicacoes_thumbnail }}\">
                                                    </a>
                                                </div>
                                                <div class=\"title\">
                                                    <h3>
                                                        <a href=\"#\">
                                                                        {{ title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class=\"text\">
                                                    <p>
                                                        <a href=\"#\">{{ body }}</a>
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
        return array (  87 => 17,  78 => 11,  69 => 5,  63 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}                    <div class=\"col-md-4 home-publications-item\">
                                            <div class=\"inner\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"{{ field_publicacoes_thumbnail }}\">
                                                    </a>
                                                </div>
                                                <div class=\"title\">
                                                    <h3>
                                                        <a href=\"#\">
                                                                        {{ title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class=\"text\">
                                                    <p>
                                                        <a href=\"#\">{{ body }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>", "");
    }
}
