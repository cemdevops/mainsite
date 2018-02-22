<?php

/* {# inline_template_start #}              <!-- home slider item init -->
                            <div class="col-sm-4">
                                <div class="home-slider-item">
                                    <div class="title">
                                        <a href="#">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class="image">
                                        <a href="#">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">{{ field_slidershow_chamada }} </a></p>
                                    </div>
                                </div>
                            </div> */
class __TwigTemplate_1fa65d79424954fe41c54d2d1ba5944a4eeb57af92248e6cf9c3b2bddf1de388 extends Twig_Template
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
        echo "              <!-- home slider item init -->
                            <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"#\">
                                            <h2>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_tag"]) ? $context["field_slidershow_tag"] : null), "html", null, true));
        echo "</h2>
                                            <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_imagem"]) ? $context["field_slidershow_imagem"] : null), "html", null, true));
        echo " 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"#\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_slidershow_chamada"]) ? $context["field_slidershow_chamada"] : null), "html", null, true));
        echo " </a></p>
                                    </div>
                                </div>
                            </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}              <!-- home slider item init -->
                            <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"#\">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"#\">{{ field_slidershow_chamada }} </a></p>
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
        return array (  87 => 16,  80 => 12,  72 => 7,  68 => 6,  61 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}              <!-- home slider item init -->
                            <div class=\"col-sm-4\">
                                <div class=\"home-slider-item\">
                                    <div class=\"title\">
                                        <a href=\"#\">
                                            <h2>{{ field_slidershow_tag }}</h2>
                                            <p>{{ title }}</p>
                                        </a>
                                    </div>
                                    <div class=\"image\">
                                        <a href=\"#\">
                                            {{ field_slidershow_imagem }} 
                                        </a>
                                    </div>
                                    <div class=\"text\">
                                        <p><a href=\"#\">{{ field_slidershow_chamada }} </a></p>
                                    </div>
                                </div>
                            </div>", "");
    }
}
