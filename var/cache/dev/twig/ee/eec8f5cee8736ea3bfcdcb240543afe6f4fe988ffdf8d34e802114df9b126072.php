<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ff1a7547806582372d9345687e774df4ee44cd0c02da3560acd6036acb7f44f extends Twig_Template
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
        $__internal_f164a0831374cbea01a3b58451e7b1b2fb3ec8ac64ba4a1661f619daf7552593 = $this->env->getExtension("native_profiler");
        $__internal_f164a0831374cbea01a3b58451e7b1b2fb3ec8ac64ba4a1661f619daf7552593->enter($__internal_f164a0831374cbea01a3b58451e7b1b2fb3ec8ac64ba4a1661f619daf7552593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f164a0831374cbea01a3b58451e7b1b2fb3ec8ac64ba4a1661f619daf7552593->leave($__internal_f164a0831374cbea01a3b58451e7b1b2fb3ec8ac64ba4a1661f619daf7552593_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_595e8b2beeea4d02ff97322648d0c927d9c0d9e1bc517cebe1900fdb56fb1d7d = $this->env->getExtension("native_profiler");
        $__internal_595e8b2beeea4d02ff97322648d0c927d9c0d9e1bc517cebe1900fdb56fb1d7d->enter($__internal_595e8b2beeea4d02ff97322648d0c927d9c0d9e1bc517cebe1900fdb56fb1d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_595e8b2beeea4d02ff97322648d0c927d9c0d9e1bc517cebe1900fdb56fb1d7d->leave($__internal_595e8b2beeea4d02ff97322648d0c927d9c0d9e1bc517cebe1900fdb56fb1d7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9e1da40b4d830a818eda27588c4f8a3bc5a40694f260bf94678c358cf9277e8 = $this->env->getExtension("native_profiler");
        $__internal_b9e1da40b4d830a818eda27588c4f8a3bc5a40694f260bf94678c358cf9277e8->enter($__internal_b9e1da40b4d830a818eda27588c4f8a3bc5a40694f260bf94678c358cf9277e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9e1da40b4d830a818eda27588c4f8a3bc5a40694f260bf94678c358cf9277e8->leave($__internal_b9e1da40b4d830a818eda27588c4f8a3bc5a40694f260bf94678c358cf9277e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d9630f4084d9fca1796bea26b62196f23dfdcfe1fbfdd88f8b8ad37836ec618 = $this->env->getExtension("native_profiler");
        $__internal_9d9630f4084d9fca1796bea26b62196f23dfdcfe1fbfdd88f8b8ad37836ec618->enter($__internal_9d9630f4084d9fca1796bea26b62196f23dfdcfe1fbfdd88f8b8ad37836ec618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d9630f4084d9fca1796bea26b62196f23dfdcfe1fbfdd88f8b8ad37836ec618->leave($__internal_9d9630f4084d9fca1796bea26b62196f23dfdcfe1fbfdd88f8b8ad37836ec618_prof);

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
