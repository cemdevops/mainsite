<?php

/* {# inline_template_start #}        <div class="side-bar-item">
                        <div class="tag">
                            <span>{{ field_categoria }}</span>
                          </div>
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
class __TwigTemplate_522d37b0758249db6916c8ba987cfbc754e9884c435a63796d8621849f8f8170 extends Twig_Template
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
        echo "        <div class=\"side-bar-item\">
                        <div class=\"tag\">
                            <span>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_categoria"]) ? $context["field_categoria"] : null), "html", null, true));
        echo "</span>
                          </div>
                    <div class=\"image\">
                      <a href=\"#\">
                       <img src=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_evento_imagem"]) ? $context["field_evento_imagem"] : null), "html", null, true));
        echo "\" />
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_evento_data"]) ? $context["field_evento_data"] : null), "html", null, true));
        echo "
                      </a>
                    </div>
     </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}        <div class=\"side-bar-item\">
                        <div class=\"tag\">
                            <span>{{ field_categoria }}</span>
                          </div>
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
        return array (  85 => 15,  78 => 11,  71 => 7,  64 => 3,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}        <div class=\"side-bar-item\">
                        <div class=\"tag\">
                            <span>{{ field_categoria }}</span>
                          </div>
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
