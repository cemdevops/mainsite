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
        $tags = array("trans" => 43, "if" => 60);
        $filters = array("safe_join" => 33, "t" => 80);
        $functions = array("drupal_menu" => 71, "drupal_entity" => 92);

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
          <h1 class=\"logo\">
            <span class=\"title\">CEM</span>
              ";
        // line 43
        echo t("<span class=\"sub-title\">centro de estudo da metrópole</span>", array());
        // line 46
        echo "          </h1>
          <div class=\"header-search\">
            <form>
              <div>
                <input type=\"text\" placeholder=\"pesquisar no site\" class=\"search-field\">
                <input type=\"submit\" value=\"buscar\" class=\"search-button\">
              </div>
            </form>
          </div>
            ";
        // line 55
        echo t("<a href=\"#contato\" class=\"header-top-btn-contact\"><span>Fale Conosco</span></a>", array());
        // line 58
        echo "          <ul id=\"custom-menu-language\" class=\"navbar-right navbar-nav\">
            <li>
                ";
        // line 60
        if (((isset($context["language"]) ? $context["language"] : null) == "en")) {
            // line 61
            echo "                  <a href=\"/pt-br/\">(português)</a>
                ";
        } elseif ((        // line 62
(isset($context["language"]) ? $context["language"] : null) == "pt-br")) {
            // line 63
            echo "                  <a href=\"/en/\">(english)</a>
                ";
        }
        // line 65
        echo "            </li>
          </ul>
        </div>
      </div>
      <nav class=\"header-menu\">
        <div class=\"inner wrapper\">
            ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("main"), "html", null, true));
        echo "
        </div>
      </nav>
    </header>
    ";
        // line 79
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 84
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
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "suporte"), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">menu</div>
                  <nav class=\"footer-nav\">
                        ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("footer"), "html", null, true));
        echo "
                  </nav>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"title\">páginas</div>
                  <nav class=\"footer-nav\">
\t\t\t\t   ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("paginas"), "html", null, true));
        echo "
                  </nav>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              ";
        // line 109
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
        // line 117
        echo t("<p>©2018 CEM - CENTRO DE ESTUDOS DA METRÓPOLE</p>", array());
        // line 120
        echo "      </div>
    </section>
    <js-bottom-placeholder token=\"";
        // line 122
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
        return array (  193 => 122,  189 => 120,  187 => 117,  176 => 109,  167 => 103,  158 => 97,  150 => 92,  139 => 84,  135 => 83,  131 => 82,  126 => 80,  123 => 79,  116 => 71,  108 => 65,  104 => 63,  102 => 62,  99 => 61,  97 => 60,  93 => 58,  91 => 55,  80 => 46,  78 => 43,  69 => 37,  64 => 35,  60 => 34,  56 => 33,  52 => 32,  47 => 30,  43 => 28,);
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
