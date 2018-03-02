<?php

/* themes/custom/cem/templates/html.html.twig */
class __TwigTemplate_5b905d395459caa199a08d4b9fc1b53f05f0230fbb036d41e097b3e302f0b0aa extends Twig_Template
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
        $tags = array("trans" => 103);
        $filters = array("safe_join" => 32, "t" => 42);
        $functions = array("drupal_entity" => 95);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array('safe_join', 't'),
                array('drupal_entity')
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

        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <title>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <js-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
  </head>
  <body";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 41
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <section class=\"footer-navigation\">
      <div class=\"inner wrapper\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row footer-nav-infos\">
                <div class=\"col-md-5\">
                  <div class=\"title\">suporte</div>
                  <div class=\"infos\">
                    <a href=\"mailto:sac@centrodametropole.org.br\">sac@centrodametropole.org.br</a><br>
                    <span class=\"phone\">(11) 3834-0000     |    0800 000 000</span>
                    <div class=\"social\">
                      <ul>
                        <li class=\"icon-facebook\"><a href=\"#\"><span>facebook</span></a></li>
                        <li class=\"icon-twitter\"><a href=\"#\"><span>twitter</span></a></li>
                        <li class=\"icon-instagram\"><a href=\"#\"><span>instagram</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">menu</div>
                  <nav class=\"footer-nav\">
                    <ul>
                      <li><a href=\"#\">home</a></li>
                      <li><a href=\"#\">pesquisadores</a></li>
                      <li><a href=\"#\">quem somos</a></li>
                      <li><a href=\"#\">mapa do site</a></li>
                      <li><a href=\"#\">fale conosco</a></li>
                    </ul>
                  </nav>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">páginas</div>
                  <nav class=\"footer-nav\">
                    <ul>
                      <li><a href=\"#\">pesquisa</a></li>
                      <li><a href=\"#\">base de dados</a></li>
                      <li><a href=\"#\">geoprocessamento</a></li>
                      <li><a href=\"#\">capacitação</a></li>
                      <li><a href=\"#\">publicações</a></li>
                      <li><a href=\"#\">sistemas interativos</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "footerlicense"), "html", null, true));
        echo "
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"footer-copy\">
      <div class=\"inner wrapper\">
          ";
        // line 103
        echo t("<p>©2018 CEM - CENTRO DE ESTUDOS DA METRÓPOLE</p>", array());
        // line 106
        echo "      </div>
    </section>
    <js-bottom-placeholder token=\"";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cem/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 108,  153 => 106,  151 => 103,  140 => 95,  88 => 46,  84 => 45,  80 => 44,  75 => 42,  72 => 41,  68 => 36,  63 => 34,  59 => 33,  55 => 32,  51 => 31,  46 => 29,  43 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/cem/templates/html.html.twig", "C:\\xampp1\\htdocs\\mainsite\\themes\\custom\\cem\\templates\\html.html.twig");
    }
}
