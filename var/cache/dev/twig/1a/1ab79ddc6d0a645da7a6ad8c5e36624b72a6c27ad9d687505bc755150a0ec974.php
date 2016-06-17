<?php

/* base.html.twig */
class __TwigTemplate_23bbb93f2c55ab2dd889208072716a2717d3b4edd2cd0f6917e4e16aacfc36a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaad09f36b10950709c1a61f7109575199c6095220b64c5c1fc0628c35a1d92f = $this->env->getExtension("native_profiler");
        $__internal_aaad09f36b10950709c1a61f7109575199c6095220b64c5c1fc0628c35a1d92f->enter($__internal_aaad09f36b10950709c1a61f7109575199c6095220b64c5c1fc0628c35a1d92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"nav-md\">
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_aaad09f36b10950709c1a61f7109575199c6095220b64c5c1fc0628c35a1d92f->leave($__internal_aaad09f36b10950709c1a61f7109575199c6095220b64c5c1fc0628c35a1d92f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9ced02b57e26d56b831d95b702c1ee84e086806a068a1a6417e2fcfeb066f09 = $this->env->getExtension("native_profiler");
        $__internal_c9ced02b57e26d56b831d95b702c1ee84e086806a068a1a6417e2fcfeb066f09->enter($__internal_c9ced02b57e26d56b831d95b702c1ee84e086806a068a1a6417e2fcfeb066f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9ced02b57e26d56b831d95b702c1ee84e086806a068a1a6417e2fcfeb066f09->leave($__internal_c9ced02b57e26d56b831d95b702c1ee84e086806a068a1a6417e2fcfeb066f09_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee14a5f2ed737fb58d2f7715b6da8e6d33476b1008018bbab46edb34919bbf55 = $this->env->getExtension("native_profiler");
        $__internal_ee14a5f2ed737fb58d2f7715b6da8e6d33476b1008018bbab46edb34919bbf55->enter($__internal_ee14a5f2ed737fb58d2f7715b6da8e6d33476b1008018bbab46edb34919bbf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "               <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- jVectorMap -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_ee14a5f2ed737fb58d2f7715b6da8e6d33476b1008018bbab46edb34919bbf55->leave($__internal_ee14a5f2ed737fb58d2f7715b6da8e6d33476b1008018bbab46edb34919bbf55_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a20716358a4acf79d14636a3e7c8b4b41efa401f8cb2021392dd970751ac0a7 = $this->env->getExtension("native_profiler");
        $__internal_9a20716358a4acf79d14636a3e7c8b4b41efa401f8cb2021392dd970751ac0a7->enter($__internal_9a20716358a4acf79d14636a3e7c8b4b41efa401f8cb2021392dd970751ac0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a20716358a4acf79d14636a3e7c8b4b41efa401f8cb2021392dd970751ac0a7->leave($__internal_9a20716358a4acf79d14636a3e7c8b4b41efa401f8cb2021392dd970751ac0a7_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d084037222f86ca745d6e5ca28fc800575d7d98e80a214c63b3a74cc0769acd6 = $this->env->getExtension("native_profiler");
        $__internal_d084037222f86ca745d6e5ca28fc800575d7d98e80a214c63b3a74cc0769acd6->enter($__internal_d084037222f86ca745d6e5ca28fc800575d7d98e80a214c63b3a74cc0769acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        ";
        
        $__internal_d084037222f86ca745d6e5ca28fc800575d7d98e80a214c63b3a74cc0769acd6->leave($__internal_d084037222f86ca745d6e5ca28fc800575d7d98e80a214c63b3a74cc0769acd6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 25,  124 => 24,  113 => 23,  104 => 18,  98 => 15,  93 => 13,  88 => 11,  83 => 9,  77 => 7,  71 => 6,  59 => 5,  50 => 27,  47 => 24,  45 => 23,  38 => 20,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*                <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap-progressbar -->*/
/*     <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">*/
/*     <!-- jVectorMap -->*/
/*     <link href="{{asset('css/maps/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet"/>*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="nav-md">*/
/*         {% block body  %}{% endblock %}*/
/*         {% block javascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
