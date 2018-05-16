<?php

/* {# inline_template_start #}                <div class="home-video-item">
                                            <div class="image">
                                                <a href="#">
                                                  {{ field_videos_youtube }}
                                                </a>
                                            </div>
                                            <div class="title">
                                                <h3>
                                                    <a href="#">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                                                </h3>
                                            </div>
                                            <div class="text">
                                                <p>
                                                    <a href="#">{{ field_video_descricao }} </a>
                                                </p>
                                            </div>
                                        </div> */
class __TwigTemplate_69fa07bf2ff7276bf44896b0af400992ce287c2f8d7a6553d6581b630b36b3a8 extends Twig_Template
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
        echo "                <div class=\"home-video-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                  ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_videos_youtube"]) ? $context["field_videos_youtube"] : null), "html", null, true));
        echo "
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <h3>
                                                    <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                                                </h3>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_video_descricao"]) ? $context["field_video_descricao"] : null), "html", null, true));
        echo " </a>
                                                </p>
                                            </div>
                                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                <div class=\"home-video-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                  {{ field_videos_youtube }}
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <h3>
                                                    <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                                                </h3>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">{{ field_video_descricao }} </a>
                                                </p>
                                            </div>
                                        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  64 => 4,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}                <div class=\"home-video-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                  {{ field_videos_youtube }}
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <h3>
                                                    <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                                                </h3>
                                            </div>
                                            <div class=\"text\">
                                                <p>
                                                    <a href=\"#\">{{ field_video_descricao }} </a>
                                                </p>
                                            </div>
                                        </div>", "");
    }
}
