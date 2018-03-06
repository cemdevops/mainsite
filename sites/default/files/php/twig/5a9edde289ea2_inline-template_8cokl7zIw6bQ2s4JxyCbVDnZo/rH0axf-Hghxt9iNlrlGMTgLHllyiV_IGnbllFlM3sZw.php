<?php

/* {# inline_template_start #}        <div class="home-agenda-item">
                    <div class="image">
                      <a href="#">
                       <img src="{{ field_evento_imagem }}" />
                      </a>
                    </div>
                    <div class="text">
                      <a href="#">{{ title }}</a>
                    </div>
                    <div class="data">
                      <a href="#">
                        {{ field_evento_data }}
                      </a>
                    </div>
                  </div> */
class __TwigTemplate_99170521fcf9a6b99d3f8a7fd7a348e5e3f7024b031ef099066fcee3a2e14a2a extends Twig_Template
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
        echo "        <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                       <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_evento_imagem"]) ? $context["field_evento_imagem"] : null), "html", null, true));
        echo "\" />
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_evento_data"]) ? $context["field_evento_data"] : null), "html", null, true));
        echo "
                      </a>
                    </div>
                  </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}        <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                       <img src=\"{{ field_evento_imagem }}\" />
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">{{ title }}</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        {{ field_evento_data }}
                      </a>
                    </div>
                  </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  69 => 8,  62 => 4,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}        <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                       <img src=\"{{ field_evento_imagem }}\" />
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">{{ title }}</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        {{ field_evento_data }}
                      </a>
                    </div>
                  </div>", "");
    }
}
