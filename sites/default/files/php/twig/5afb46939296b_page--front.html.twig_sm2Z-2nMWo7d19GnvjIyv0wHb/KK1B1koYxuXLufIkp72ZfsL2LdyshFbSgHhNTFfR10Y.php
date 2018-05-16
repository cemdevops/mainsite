<?php

/* themes/custom/cem/templates/page/page--front.html.twig */
class __TwigTemplate_8c721a99375e5a4fdea78f0b8887637a7d55780ca865ab282d1c4368e3ca9f2c extends Twig_Template
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
        $tags = array("set" => 2, "trans" => 31, "if" => 183);
        $filters = array();
        $functions = array("drupal_view" => 9, "drupal_entity" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans', 'if'),
                array(),
                array('drupal_view', 'drupal_entity')
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
        echo "
";
        // line 2
        $context["language"] = $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "getId", array(), "method");
        // line 3
        echo "<div class=\"layout-container\">

  <main role=\"main\">
    <section class=\"container-fluid home-slider\">
      <div class=\"row\">
        <div class=\"col-lg-12 wrapper\">
          ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("slidershow", "slidershow_bloco_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
        </div>
      </div>
    </section>
    <section class=\"home-call-boxes\">
      <span class=\"detail-left\"></span>
      <span class=\"detail-right\"></span>
      <div class=\"inner wrapper\">
          ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sidebar_left"), "html", null, true));
        echo "
          ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sidebar_right"), "html", null, true));
        echo "
      </div>
    </section>
    <!-- home call boxes end -->
    <!-- home news and agenda init -->
    <div class=\"container-fluid home-news-and-agenda\">
      <div class=\"row\">
        <div class=\"col-xs-12 wrapper\">
          <div class=\"row\">
            <!-- home news init -->
            <div class=\"col-md-9\">
              <section class=\"home-news\">
                <div class=\"home-news-header\">
                    ";
        // line 31
        echo t("<h2>notícias em destaque</h2>
                       <a href=\"#\" class=\"link-more\">mais notícias</a>", array());
        // line 35
        echo "                </div>
                <div class=\"row\">
                  <!-- home news item init -->
                  ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("noticia", "bloco_noticia_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
                  <!-- home news item end -->
                </div>
              </section>
            </div>
            <!-- home news end -->
            <!-- home agenda init -->
            <div class=\"col-md-3\">
              <section class=\"home-agenda\">
                <div class=\"home-agenda-header\">
                    ";
        // line 48
        echo t("<h2>eventos/agenda</h2>", array());
        // line 51
        echo "                </div>
                <div class=\"home-agenda-box\">
                  <!-- home agenda item init -->
                  ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("evento", "bloco_evento_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
                  <!-- home agenda item end -->
                    ";
        // line 56
        echo t("<a href=\"#\" class=\"link-more\">mais eventos</a>", array());
        // line 59
        echo "                </div>
              </section>
            </div>
            <!-- home agenda end -->
          </div>
        </div>
      </div>
    </div>

    <!-- home news and agenda end -->
    <!-- home video and publications init -->
    <div class=\"container-fluid home-videos-and-publications\">
      <div class=\"row\">
        <div class=\"col-xs-12 wrapper\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <!-- home video init -->
              <section class=\"home-video\">
                <div class=\"home-video-header\">
                  <h2>vídeos</h2>
                  <a href=\"#\" class=\"link-more\">mais vídeos</a>
                </div>
                <div class=\"home-video-box\">
                  <div class=\"inner\">
                    <!-- home video item init -->
                    ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("video", "bloco_video_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
                    <!-- home video item end -->
                  </div>
                </div>
              </section>
              <!-- home video end -->
            </div>
            <div class=\"col-md-8\">
              <!-- home publications init -->
              <section class=\"home-publications\">
                <div class=\"home-publications-header\">
                    ";
        // line 95
        echo t("<h2>publicações</h2>
                      <a href=\"#\" class=\"link-more\">mais publicações</a>", array());
        // line 99
        echo "                </div>
                <div class=\"home-publications-box\">
                  <div class=\"row\">
                    <!-- home publications item init -->
                    ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("publicacao", "bloco_publicacao_home", (isset($context["language"]) ? $context["language"] : null)), "html", null, true));
        echo "
                    <!-- home publications item end -->
                  </div>
                </div>
              </section>
              <!-- home publications end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home video and publications end -->

    <!-- home pesquisadores and apoio init -->
    <div class=\"container-fluid home-pesquisadores-and-apoio\">
      <div class=\"row\">
        <div class=\"col-xs-12 wrapper\">
          <div class=\"row\">
            <!-- home pesquisadores init -->
            <div class=\"col-xs-12\">
              <section class=\"home-pesquisadores\">
                <div class=\"home-pesquisadores-header\">
                    ";
        // line 125
        echo t("<span class=\"pre\">pesquisadores</span>
                      <h2>coordenadores de projetos</h2>", array());
        // line 129
        echo "                </div>
                <div class=\"home-pesquisadores-box\">
                  <div class=\"row\">
                    <!-- home pesquisador item init -->                    
                      ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("colaborador", "bloco_colaborador_home"), "html", null, true));
        echo "
                  </div>
                </div>
              </section>
            </div>
            <!-- home pesquisadores init -->
            <!-- home apoio init -->
            <div class=\"col-xs-12\">
              <section class=\"home-apoio\">
                  ";
        // line 142
        echo t("<div class=\"title\">apoio</div>", array());
        // line 145
        echo "                <div class=\"logos\">
                  ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "apoio"), "html", null, true));
        echo "
\t\t\t\t</div>
              </section>
          </div>
        </div>
      </div>
    </div>
    <!-- home pesquisadores and apoio end -->
  </main>
<footer>
  <!-- footer newsletter init -->
  <section class=\"footer-newsletter\">
    <div class=\"inner wrapper\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"footer-newsletter-form\">

                <div>
                  ";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "webform"), "html", null, true));
        echo "
                </div>

            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"footer-newsletter-text\">
                ";
        // line 172
        echo t("<span>RECEBA NOSSOS INFORMATIVOS</span><br> Não se preocupe, também não gostamos de SPAM.", array());
        // line 175
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>

  ";
        // line 183
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 184
            echo "    <footer role=\"contentinfo\">
      ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 188
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/cem/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 188,  272 => 185,  269 => 184,  267 => 183,  257 => 175,  255 => 172,  245 => 165,  223 => 146,  220 => 145,  218 => 142,  206 => 133,  200 => 129,  197 => 125,  172 => 103,  166 => 99,  163 => 95,  149 => 84,  122 => 59,  120 => 56,  115 => 54,  110 => 51,  108 => 48,  95 => 38,  90 => 35,  87 => 31,  71 => 18,  67 => 17,  56 => 9,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/cem/templates/page/page--front.html.twig", "/var/www/html/cem/themes/custom/cem/templates/page/page--front.html.twig");
    }
}
