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
        $tags = array("trans" => 55, "if" => 361);
        $filters = array();
        $functions = array("drupal_menu" => 74, "drupal_view" => 84, "drupal_entity" => 92);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if'),
                array(),
                array('drupal_menu', 'drupal_view', 'drupal_entity')
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
            ";
        // line 55
        echo t("<span class=\"sub-title\"> centro de estudo da metrópole</span>", array());
        // line 58
        echo "        </h1>
        <div class=\"header-search\">
          <form>
            <div>
              <input type=\"text\" placeholder=\"pesquisar no site\" class=\"search-field\">
              <input type=\"submit\" value=\"buscar\" class=\"search-button\">
            </div>
          </form>
        </div>
          ";
        // line 67
        echo t("<a href=\"#contato\" class=\"header-top-btn-contact\"><span>Fale Conosco</span></a>", array());
        // line 70
        echo "      </div>
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


  <main role=\"main\">
    <section class=\"container-fluid home-slider\">
      <div class=\"row\">
        <div class=\"col-lg-12 wrapper\">
          ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("slidershow", "slidershow_bloco_home"), "html", null, true));
        echo "
        </div>
      </div>
    </section>
    <section class=\"home-call-boxes\">
      <span class=\"detail-left\"></span>
      <span class=\"detail-right\"></span>
      <div class=\"inner wrapper\">
          ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sidebar_left"), "html", null, true));
        echo "
          ";
        // line 93
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
        // line 106
        echo t("<h2>notícias em destaque</h2>
                       <a href=\"#\" class=\"link-more\">mais notícias</a>", array());
        // line 110
        echo "                </div>
                <div class=\"row\">
                  <!-- home news item init -->
                  ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("noticia", "bloco_noticia_home"), "html", null, true));
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
        // line 123
        echo t("<h2>eventos/agenda</h2>", array());
        // line 126
        echo "                </div>
                <div class=\"home-agenda-box\">
                  <!-- home agenda item init -->
                  <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                        <img src=\"../assets/img/home-agenda-foto.jpg\">
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">Vozes à margem: periferias, estética e política.</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        Data - 16/01/2018
                      </a>
                    </div>
                  </div>
                  <!-- home agenda item end -->
                  <!-- home agenda item init -->
                  <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                        <img src=\"../assets/img/home-agenda-foto.jpg\">
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">Vozes à margem: periferias, estética e política.</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        Data - 16/01/2018
                      </a>
                    </div>
                  </div>
                  <!-- home agenda item end -->
                  <!-- home agenda item init -->
                  <div class=\"home-agenda-item\">
                    <div class=\"image\">
                      <a href=\"#\">
                        <img src=\"../assets/img/home-agenda-foto.jpg\">
                      </a>
                    </div>
                    <div class=\"text\">
                      <a href=\"#\">Vozes à margem: periferias, estética e política.</a>
                    </div>
                    <div class=\"data\">
                      <a href=\"#\">
                        Data - 16/01/2018
                      </a>
                    </div>
                  </div>
                  <!-- home agenda item end -->
                  <a href=\"#\" class=\"link-more\">mais eventos</a>
                </div>
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
                    <div class=\"home-video-item\">
                      <div class=\"image\">
                        <a href=\"#\">
                          <img src=\"../assets/img/home-video-foto.jpg\">
                        </a>
                      </div>
                      <div class=\"title\">
                        <h3>
                          <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                        </h3>
                      </div>
                      <div class=\"text\">
                        <p>
                          <a href=\"#\">Marta Arretche, diretora do Centro de Estudos da Metrópole (CEM / USP - Fapesp) faz uma apresentação geral do projeto de georreferenciamento das escolas da Região Metropolitana de São Paulo (RMSP).</a>
                        </p>
                      </div>
                    </div>
                    <!-- home video item end -->
                    <!-- home video item init -->
                    <div class=\"home-video-item\">
                      <div class=\"image\">
                        <a href=\"#\">
                          <img src=\"../assets/img/home-video-foto.jpg\">
                        </a>
                      </div>
                      <div class=\"title\">
                        <h3>
                          <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                        </h3>
                      </div>
                      <div class=\"text\">
                        <p>
                          <a href=\"#\">Marta Arretche, diretora do Centro de Estudos da Metrópole (CEM / USP - Fapesp) faz uma apresentação geral do projeto de georreferenciamento das escolas da Região Metropolitana de São Paulo (RMSP).</a>
                        </p>
                      </div>
                    </div>
                    <!-- home video item end -->
                    <!-- home video item init -->
                    <div class=\"home-video-item\">
                      <div class=\"image\">
                        <a href=\"#\">
                          <img src=\"../assets/img/home-video-foto.jpg\">
                        </a>
                      </div>
                      <div class=\"title\">
                        <h3>
                          <a href=\"#\">Notas das Escolas - Visão Geral (Marta Arretche)</a>
                        </h3>
                      </div>
                      <div class=\"text\">
                        <p>
                          <a href=\"#\">Marta Arretche, diretora do Centro de Estudos da Metrópole (CEM / USP - Fapesp) faz uma apresentação geral do projeto de georreferenciamento das escolas da Região Metropolitana de São Paulo (RMSP).</a>
                        </p>
                      </div>
                    </div>
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
                  <h2>publicações</h2>
                  <a href=\"#\" class=\"link-more\">mais publicações</a>
                </div>
                <div class=\"home-publications-box\">
                  <div class=\"row\">
                    <!-- home publications item init -->
                    ";
        // line 276
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("publicacao", "bloco_publicacao_home"), "html", null, true));
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
        // line 298
        echo t("<span class=\"pre\">pesquisadores</span>
                      <h2>coordenadores de projetos</h2>", array());
        // line 302
        echo "                </div>
                <div class=\"home-pesquisadores-box\">
                  <div class=\"row\">
                    <!-- home pesquisador item init -->                    
                      ";
        // line 306
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("colaborador", "bloco_colaborador_home"), "html", null, true));
        echo "
                  </div>
                </div>
              </section>
            </div>
\t\t\t
            <!-- home pesquisadores init -->
            <!-- home apoio init -->
            <!-- home apoio init -->
            <div class=\"col-xs-12\">
              <section class=\"home-apoio\">
                  ";
        // line 317
        echo t("<div class=\"title\">apoio</div>", array());
        // line 320
        echo "                <div class=\"logos\">
                  ";
        // line 321
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
              <form>
                <div>
                 <!-- <input type=\"text\" placeholder=\"Seu melhor e-mail\" class=\"footer-newsletter-campo-email\"> -->
                 <!-- <input type=\"submit\" value=\"cadastrar\" class=\"footer-newsletter-campo-cadastrar\"> -->
                  ";
        // line 344
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "webform"), "html", null, true));
        echo "
                </div>
              </form>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"footer-newsletter-text\">
              <span>RECEBA NOSSOS INFORMATIVOS</span><br> Não se preocupe, também não gostamos de SPAM.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>


  ";
        // line 361
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 362
            echo "    <footer role=\"contentinfo\">
      ";
            // line 363
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 366
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
        return array (  402 => 366,  396 => 363,  393 => 362,  391 => 361,  371 => 344,  345 => 321,  342 => 320,  340 => 317,  326 => 306,  320 => 302,  317 => 298,  292 => 276,  140 => 126,  138 => 123,  125 => 113,  120 => 110,  117 => 106,  101 => 93,  97 => 92,  86 => 84,  73 => 74,  67 => 70,  65 => 67,  54 => 58,  52 => 55,  43 => 48,);
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
