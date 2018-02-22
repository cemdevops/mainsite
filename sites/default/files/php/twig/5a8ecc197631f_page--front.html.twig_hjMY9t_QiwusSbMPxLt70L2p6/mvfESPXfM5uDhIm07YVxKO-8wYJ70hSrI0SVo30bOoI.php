<?php

/* themes/custom/cem/templates/page--front.html.twig */
class __TwigTemplate_132956c33c394216096fa4711d6c5cf178c857200ce3585ff38a6f95cc9c8689 extends Twig_Template
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
        $tags = array("if" => 90);
        $filters = array();
        $functions = array("drupal_menu" => 70, "drupal_view" => 82);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('drupal_menu', 'drupal_view')
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

        // line 48
        echo "<div class=\"layout-container\">

  <header class=\"header\">
    <div class=\"header-top\">
      <div class=\"inner wrapper\">
        <h1 class=\"logo\">
          <span class=\"title\">CEM</span>
          <span class=\"sub-title\"> centro de estudo da metrópole</span>
        </h1>
        <div class=\"header-search\">
          <form>
            <div>
              <input type=\"text\" placeholder=\"pesquisar no site\" class=\"search-field\">
              <input type=\"submit\" value=\"buscar\" class=\"search-button\">
            </div>
          </form>
        </div>
        <a href=\"#contato\" class=\"header-top-btn-contact\"><span>Fale Conosco</span></a>
      </div>
    </div>
    <nav class=\"header-menu\">
      <div class=\"inner wrapper\">
        ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalMenu("main"), "html", null, true));
        echo "
      </div>
    </nav>
  </header>




  <main role=\"main\">
    <section class=\"container-fluid home-slider\">
      <div class=\"row\">
        <div class=\"col-lg-12 wrapper\">
          ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("slidershow", "slidershow_bloco_home"), "html", null, true));
        echo "
        </div>
      </div>
    </section>


  </main>

  ";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 91
            echo "    <footer role=\"contentinfo\">
      ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 95
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/cem/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 95,  98 => 92,  95 => 91,  93 => 90,  82 => 82,  67 => 70,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/cem/templates/page--front.html.twig", "C:\\xampp1\\htdocs\\mainsite\\themes\\custom\\cem\\templates\\page--front.html.twig");
    }
}
