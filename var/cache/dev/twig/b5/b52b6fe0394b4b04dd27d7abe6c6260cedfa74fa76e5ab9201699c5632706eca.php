<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21c33df5a916491ff390ee635533c2bfd2678a5ce99345ba3a589df020b665cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e9c64ebf45917a11dec93a93f6fe20d863aeba7ae53e56490916f96b58382d8 = $this->env->getExtension("native_profiler");
        $__internal_9e9c64ebf45917a11dec93a93f6fe20d863aeba7ae53e56490916f96b58382d8->enter($__internal_9e9c64ebf45917a11dec93a93f6fe20d863aeba7ae53e56490916f96b58382d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9c64ebf45917a11dec93a93f6fe20d863aeba7ae53e56490916f96b58382d8->leave($__internal_9e9c64ebf45917a11dec93a93f6fe20d863aeba7ae53e56490916f96b58382d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_256657052c636fdb2868b739a82b4d8d578ac7e5bf05fbf28da7f92bc55e6938 = $this->env->getExtension("native_profiler");
        $__internal_256657052c636fdb2868b739a82b4d8d578ac7e5bf05fbf28da7f92bc55e6938->enter($__internal_256657052c636fdb2868b739a82b4d8d578ac7e5bf05fbf28da7f92bc55e6938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_256657052c636fdb2868b739a82b4d8d578ac7e5bf05fbf28da7f92bc55e6938->leave($__internal_256657052c636fdb2868b739a82b4d8d578ac7e5bf05fbf28da7f92bc55e6938_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6ee26c77ade239a352dd2b4cfbde6cdce43c001a5b138f7542bf3a8bda55962 = $this->env->getExtension("native_profiler");
        $__internal_d6ee26c77ade239a352dd2b4cfbde6cdce43c001a5b138f7542bf3a8bda55962->enter($__internal_d6ee26c77ade239a352dd2b4cfbde6cdce43c001a5b138f7542bf3a8bda55962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6ee26c77ade239a352dd2b4cfbde6cdce43c001a5b138f7542bf3a8bda55962->leave($__internal_d6ee26c77ade239a352dd2b4cfbde6cdce43c001a5b138f7542bf3a8bda55962_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e09620d05b8e25577625ce821f6e3d60161bf73e9c05f5faec71cd4f99a70f0 = $this->env->getExtension("native_profiler");
        $__internal_7e09620d05b8e25577625ce821f6e3d60161bf73e9c05f5faec71cd4f99a70f0->enter($__internal_7e09620d05b8e25577625ce821f6e3d60161bf73e9c05f5faec71cd4f99a70f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e09620d05b8e25577625ce821f6e3d60161bf73e9c05f5faec71cd4f99a70f0->leave($__internal_7e09620d05b8e25577625ce821f6e3d60161bf73e9c05f5faec71cd4f99a70f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
