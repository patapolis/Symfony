<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_79de7578b8ab974c6a8c239988d54ec5d6c5e63179f21392cc9f7c2b7783e767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3c2c33c0c0f4e226d6efd2d26890a7d658713d583fa55146c8cb4a014962260 = $this->env->getExtension("native_profiler");
        $__internal_e3c2c33c0c0f4e226d6efd2d26890a7d658713d583fa55146c8cb4a014962260->enter($__internal_e3c2c33c0c0f4e226d6efd2d26890a7d658713d583fa55146c8cb4a014962260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c2c33c0c0f4e226d6efd2d26890a7d658713d583fa55146c8cb4a014962260->leave($__internal_e3c2c33c0c0f4e226d6efd2d26890a7d658713d583fa55146c8cb4a014962260_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99819f6e60000887ea4cdd1e34fe17f051de6e7f276067cb7c67ade2c09a4a43 = $this->env->getExtension("native_profiler");
        $__internal_99819f6e60000887ea4cdd1e34fe17f051de6e7f276067cb7c67ade2c09a4a43->enter($__internal_99819f6e60000887ea4cdd1e34fe17f051de6e7f276067cb7c67ade2c09a4a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99819f6e60000887ea4cdd1e34fe17f051de6e7f276067cb7c67ade2c09a4a43->leave($__internal_99819f6e60000887ea4cdd1e34fe17f051de6e7f276067cb7c67ade2c09a4a43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2f0cd756fd40b98d8c798c34dbd91275b6b811a3f82e800809b00be82ac333e = $this->env->getExtension("native_profiler");
        $__internal_a2f0cd756fd40b98d8c798c34dbd91275b6b811a3f82e800809b00be82ac333e->enter($__internal_a2f0cd756fd40b98d8c798c34dbd91275b6b811a3f82e800809b00be82ac333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2f0cd756fd40b98d8c798c34dbd91275b6b811a3f82e800809b00be82ac333e->leave($__internal_a2f0cd756fd40b98d8c798c34dbd91275b6b811a3f82e800809b00be82ac333e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d27998ea2f1f97b6d8b0d6c24198bc0e95ca835e296b05cfd4a35a8cc9ee0f3 = $this->env->getExtension("native_profiler");
        $__internal_1d27998ea2f1f97b6d8b0d6c24198bc0e95ca835e296b05cfd4a35a8cc9ee0f3->enter($__internal_1d27998ea2f1f97b6d8b0d6c24198bc0e95ca835e296b05cfd4a35a8cc9ee0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d27998ea2f1f97b6d8b0d6c24198bc0e95ca835e296b05cfd4a35a8cc9ee0f3->leave($__internal_1d27998ea2f1f97b6d8b0d6c24198bc0e95ca835e296b05cfd4a35a8cc9ee0f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
