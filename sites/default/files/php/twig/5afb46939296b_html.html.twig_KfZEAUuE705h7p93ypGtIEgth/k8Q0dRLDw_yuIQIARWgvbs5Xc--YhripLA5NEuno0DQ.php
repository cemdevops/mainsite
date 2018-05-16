<?php

/* themes/custom/cem/templates/html/html.html.twig */
class __TwigTemplate_5e8245cc059998712217cf4e87376096087cbea3a381cb3292afc97ce306770a extends Twig_Template
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
        $tags = array("trans" => 45, "if" => 63);
        $filters = array("safe_join" => 33, "t" => 84);
        $functions = array("drupal_menu" => 74, "drupal_entity" => 96);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if'),
                array('safe_join', 't'),
                array('drupal_menu', 'drupal_entity')
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
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <title>";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <js-placeholder token=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
  </head>
  <body";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">

  <header class=\"header\">
    <div class=\"header-top\">
      <div class=\"inner wrapper\">
        <a href=\"/\">
          <h1 class=\"logo\">
            <span class=\"title\">CEM</span>
              ";
        // line 45
        echo t("<span class=\"sub-title\">centro de estudo da metrópole</span>", array());
        // line 48
        echo "          </h1>
        </a>
        <div class=\"header-search\">
          <form>
            <div>
              <input type=\"text\" placeholder=\"pesquisar no site\" class=\"search-field\">
              <input type=\"submit\" value=\"buscar\" class=\"search-button\">
            </div>
          </form>
        </div>
          ";
        // line 58
        echo t("<a href=\"#contato\" class=\"header-top-btn-contact\"><span>Fale Conosco</span></a>", array());
        // line 61
        echo "        <ul id=\"custom-menu-language\" class=\"navbar-right navbar-nav\">
          <li>
              ";
        // line 63
        if (((isset($context["language"]) ? $context["language"] : null) == "en")) {
            // line 64
            echo "                <a href=\"/pt-br/\">(português)</a>
              ";
        } elseif ((        // line 65
(isset($context["language"]) ? $context["language"] : null) == "pt-br")) {
            // line 66
            echo "                <a href=\"/en/\">(english)</a>
              ";
        }
        // line 68
        echo "          </li>
        </ul>
      </div>
    </div>
    <nav class=\"header-menu\">
      <div class=\"inner wrapper\">
          ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("main"), "html", null, true));
        echo "
      </div>
    </nav>
  </header>

    ";
        // line 83
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <section class=\"footer-navigation\">
      <div class=\"inner wrapper\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row footer-nav-infos\">
                <div class=\"col-md-5\">
                   ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "suporte"), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">menu</div>
                  <nav class=\"footer-nav\">
                        ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("footer"), "html", null, true));
        echo "
                  </nav>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">páginas</div>
                  <nav class=\"footer-nav\">
\t\t\t\t   ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("paginas"), "html", null, true));
        echo "
                  </nav>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              ";
        // line 113
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
        // line 121
        echo t("<p>©2018 CEM - CENTRO DE ESTUDOS DA METRÓPOLE</p>", array());
        // line 124
        echo "      </div>
    </section>
    <js-bottom-placeholder token=\"";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cem/templates/html/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 126,  193 => 124,  191 => 121,  180 => 113,  171 => 107,  162 => 101,  154 => 96,  143 => 88,  139 => 87,  135 => 86,  130 => 84,  127 => 83,  119 => 74,  111 => 68,  107 => 66,  105 => 65,  102 => 64,  100 => 63,  96 => 61,  94 => 58,  82 => 48,  80 => 45,  69 => 37,  64 => 35,  60 => 34,  56 => 33,  52 => 32,  47 => 30,  43 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/cem/templates/html/html.html.twig", "/var/www/html/cem/themes/custom/cem/templates/html/html.html.twig");
    }
}
