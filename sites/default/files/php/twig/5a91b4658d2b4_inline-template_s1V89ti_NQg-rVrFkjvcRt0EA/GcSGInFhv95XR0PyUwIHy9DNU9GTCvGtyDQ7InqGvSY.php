<?php

/* {# inline_template_start #}                  <div class="home-pesquisadores-item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ field_pessoas_foto }}">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <a href="/noticia">
                                                       {{ title }}
                                                </a>
                                            </div>
                                            <div class="social">
                                                <ul>
                                                    <li class="icon-linkedin"><a href="#"><span>linkedin</span></a></li>
                                                    <li class="icon-facebook"><a href="#"><span>facebook</span></a></li>
                                                    <li class="icon-twitter"><a href="#"><span>twitter</span></a></li>
                                                    <li class="icon-instagram"><a href="#"><span>instagram</span></a></li>
                                                    <li class="icon-email"><a href="#"><span>email</span></a></li>
                                                    <li class="icon-site"><a href="#"><span>site</span></a></li>
                                                </ul>
                                            </div>
                                        </div> */
class __TwigTemplate_bef45f054583d4c2d2bc23a5043d2f507a3933a4fc73305d941a49cdc7858307 extends Twig_Template
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
        echo "                  <div class=\"home-pesquisadores-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_pessoas_foto"]) ? $context["field_pessoas_foto"] : null), "html", null, true));
        echo "\">
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <a href=\"/noticia\">
                                                       ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
                                                </a>
                                            </div>
                                            <div class=\"social\">
                                                <ul>
                                                    <li class=\"icon-linkedin\"><a href=\"#\"><span>linkedin</span></a></li>
                                                    <li class=\"icon-facebook\"><a href=\"#\"><span>facebook</span></a></li>
                                                    <li class=\"icon-twitter\"><a href=\"#\"><span>twitter</span></a></li>
                                                    <li class=\"icon-instagram\"><a href=\"#\"><span>instagram</span></a></li>
                                                    <li class=\"icon-email\"><a href=\"#\"><span>email</span></a></li>
                                                    <li class=\"icon-site\"><a href=\"#\"><span>site</span></a></li>
                                                </ul>
                                            </div>
                                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}                  <div class=\"home-pesquisadores-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ field_pessoas_foto }}\">
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <a href=\"/noticia\">
                                                       {{ title }}
                                                </a>
                                            </div>
                                            <div class=\"social\">
                                                <ul>
                                                    <li class=\"icon-linkedin\"><a href=\"#\"><span>linkedin</span></a></li>
                                                    <li class=\"icon-facebook\"><a href=\"#\"><span>facebook</span></a></li>
                                                    <li class=\"icon-twitter\"><a href=\"#\"><span>twitter</span></a></li>
                                                    <li class=\"icon-instagram\"><a href=\"#\"><span>instagram</span></a></li>
                                                    <li class=\"icon-email\"><a href=\"#\"><span>email</span></a></li>
                                                    <li class=\"icon-site\"><a href=\"#\"><span>site</span></a></li>
                                                </ul>
                                            </div>
                                        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  69 => 4,  64 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}                  <div class=\"home-pesquisadores-item\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ field_pessoas_foto }}\">
                                                </a>
                                            </div>
                                            <div class=\"title\">
                                                <a href=\"/noticia\">
                                                       {{ title }}
                                                </a>
                                            </div>
                                            <div class=\"social\">
                                                <ul>
                                                    <li class=\"icon-linkedin\"><a href=\"#\"><span>linkedin</span></a></li>
                                                    <li class=\"icon-facebook\"><a href=\"#\"><span>facebook</span></a></li>
                                                    <li class=\"icon-twitter\"><a href=\"#\"><span>twitter</span></a></li>
                                                    <li class=\"icon-instagram\"><a href=\"#\"><span>instagram</span></a></li>
                                                    <li class=\"icon-email\"><a href=\"#\"><span>email</span></a></li>
                                                    <li class=\"icon-site\"><a href=\"#\"><span>site</span></a></li>
                                                </ul>
                                            </div>
                                        </div>", "");
    }
}
