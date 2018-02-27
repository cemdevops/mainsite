<?php

/* {# inline_template_start #}                          <div class="col-sm-4">
                                <div class="home-slider-item">
                                    <div class="title">
                                        <a href="{{ field_slidershow_link }}">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class="image">
                                        <a href="{{ field_slidershow_link }}">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class="text">
                                        <p><a href="{{ field_slidershow_link }}">{{ field_slidershow_chamada }}</a></p>
                                    </div>
                                </div>
                            </div> */
class __TwigTemplate_7dd8a758761633baae32159329c2c37c61d14b0075b271eb1ca6fd0077e9557d extends Twig_Template
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
        echo "                          <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_link"]) ? $context["field_slidershow_link"] : null), "html", null, true));
        echo "\">
                                            <h2>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_tag"]) ? $context["field_slidershow_tag"] : null), "html", null, true));
        echo "</h2>
                                            <p>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_link"]) ? $context["field_slidershow_link"] : null), "html", null, true));
        echo "\">
                                            ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_imagem"]) ? $context["field_slidershow_imagem"] : null), "html", null, true));
        echo " 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_link"]) ? $context["field_slidershow_link"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_chamada"]) ? $context["field_slidershow_chamada"] : null), "html", null, true));
        echo "</a></p>
                                    </div>
                                </div>
                            </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                          <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"{{ field_slidershow_link }}\">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"{{ field_slidershow_link }}\">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"{{ field_slidershow_link }}\">{{ field_slidershow_chamada }}</a></p>
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
        return array (  91 => 15,  84 => 11,  80 => 10,  73 => 6,  69 => 5,  65 => 4,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}                          <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"{{ field_slidershow_link }}\">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"{{ field_slidershow_link }}\">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"{{ field_slidershow_link }}\">{{ field_slidershow_chamada }}</a></p>
                                    </div>
                                </div>
                            </div>", "");
    }
}
