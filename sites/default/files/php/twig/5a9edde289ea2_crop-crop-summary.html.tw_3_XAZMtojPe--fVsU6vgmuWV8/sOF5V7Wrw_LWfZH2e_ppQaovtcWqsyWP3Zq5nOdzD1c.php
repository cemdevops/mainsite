<?php

/* modules/contrib/crop/templates/crop-crop-summary.html.twig */
class __TwigTemplate_bcf29a530c2cc7791be2c4a2ef1d420a015ce71b1df863d82a42a5846f0ff9c4 extends Twig_Template
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
        $tags = array("if" => 17, "trans" => 18);
        $filters = array("e" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('e'),
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

        // line 17
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "crop_type", array())) {
            // line 18
            echo t("uses <em>@data.crop_type</em> crop type", array("@data.crop_type" => $this->getAttribute(            // line 19
(isset($context["data"]) ? $context["data"] : null), "crop_type", array()), ));
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/crop/templates/crop-crop-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/crop/templates/crop-crop-summary.html.twig", "C:\\xampp1\\htdocs\\mainsite\\modules\\contrib\\crop\\templates\\crop-crop-summary.html.twig");
    }
}
