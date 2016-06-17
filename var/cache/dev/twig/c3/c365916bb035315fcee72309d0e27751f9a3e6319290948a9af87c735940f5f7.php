<?php

/* base.html.twig */
class __TwigTemplate_7527a2e554828f0b223c47144e75c0b0ddd887654980e2b412dcb2280305f817 extends Twig_Template
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
        $__internal_635adb37e49c0e75d989bdaa22844db3aca70bc5e0b212253e390b3c04d27769 = $this->env->getExtension("native_profiler");
        $__internal_635adb37e49c0e75d989bdaa22844db3aca70bc5e0b212253e390b3c04d27769->enter($__internal_635adb37e49c0e75d989bdaa22844db3aca70bc5e0b212253e390b3c04d27769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_635adb37e49c0e75d989bdaa22844db3aca70bc5e0b212253e390b3c04d27769->leave($__internal_635adb37e49c0e75d989bdaa22844db3aca70bc5e0b212253e390b3c04d27769_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07d8f47ecec345f123f58d9300e3c04a3edfd259f89d03cecf2aa28a5bb95f5c = $this->env->getExtension("native_profiler");
        $__internal_07d8f47ecec345f123f58d9300e3c04a3edfd259f89d03cecf2aa28a5bb95f5c->enter($__internal_07d8f47ecec345f123f58d9300e3c04a3edfd259f89d03cecf2aa28a5bb95f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07d8f47ecec345f123f58d9300e3c04a3edfd259f89d03cecf2aa28a5bb95f5c->leave($__internal_07d8f47ecec345f123f58d9300e3c04a3edfd259f89d03cecf2aa28a5bb95f5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb149ffb6e864181ab75ffffa1d43263584de1346cb4802764ed1bcc50495ea5 = $this->env->getExtension("native_profiler");
        $__internal_fb149ffb6e864181ab75ffffa1d43263584de1346cb4802764ed1bcc50495ea5->enter($__internal_fb149ffb6e864181ab75ffffa1d43263584de1346cb4802764ed1bcc50495ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fb149ffb6e864181ab75ffffa1d43263584de1346cb4802764ed1bcc50495ea5->leave($__internal_fb149ffb6e864181ab75ffffa1d43263584de1346cb4802764ed1bcc50495ea5_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4b83f48b7dce253826994ab925e5e4ebeb087813390abe4cd73307e94eeb014 = $this->env->getExtension("native_profiler");
        $__internal_a4b83f48b7dce253826994ab925e5e4ebeb087813390abe4cd73307e94eeb014->enter($__internal_a4b83f48b7dce253826994ab925e5e4ebeb087813390abe4cd73307e94eeb014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a4b83f48b7dce253826994ab925e5e4ebeb087813390abe4cd73307e94eeb014->leave($__internal_a4b83f48b7dce253826994ab925e5e4ebeb087813390abe4cd73307e94eeb014_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_246191ded646f8437c25d907fb294bcfbdbe64e986ecca24f53b0e8e11af6d6a = $this->env->getExtension("native_profiler");
        $__internal_246191ded646f8437c25d907fb294bcfbdbe64e986ecca24f53b0e8e11af6d6a->enter($__internal_246191ded646f8437c25d907fb294bcfbdbe64e986ecca24f53b0e8e11af6d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        ";
        
        $__internal_246191ded646f8437c25d907fb294bcfbdbe64e986ecca24f53b0e8e11af6d6a->leave($__internal_246191ded646f8437c25d907fb294bcfbdbe64e986ecca24f53b0e8e11af6d6a_prof);

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
