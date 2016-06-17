<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_501eada36b26c00bd50a071a7f01771200a1e8b800156fe33256eb2cd07dbd4b extends Twig_Template
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
        $__internal_a21ec4f271e931663888e9d768ce1d2a49609746947bbdd3cc23fc92824de1ad = $this->env->getExtension("native_profiler");
        $__internal_a21ec4f271e931663888e9d768ce1d2a49609746947bbdd3cc23fc92824de1ad->enter($__internal_a21ec4f271e931663888e9d768ce1d2a49609746947bbdd3cc23fc92824de1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21ec4f271e931663888e9d768ce1d2a49609746947bbdd3cc23fc92824de1ad->leave($__internal_a21ec4f271e931663888e9d768ce1d2a49609746947bbdd3cc23fc92824de1ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02dadc425c8c27dccfc062400321c6f0de57b4cd948ec1ee54399c1af049be40 = $this->env->getExtension("native_profiler");
        $__internal_02dadc425c8c27dccfc062400321c6f0de57b4cd948ec1ee54399c1af049be40->enter($__internal_02dadc425c8c27dccfc062400321c6f0de57b4cd948ec1ee54399c1af049be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02dadc425c8c27dccfc062400321c6f0de57b4cd948ec1ee54399c1af049be40->leave($__internal_02dadc425c8c27dccfc062400321c6f0de57b4cd948ec1ee54399c1af049be40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b8c8c8b16543b55f873c4c74de7cefd056fc085738af8be8c41345f9a4055a4 = $this->env->getExtension("native_profiler");
        $__internal_8b8c8c8b16543b55f873c4c74de7cefd056fc085738af8be8c41345f9a4055a4->enter($__internal_8b8c8c8b16543b55f873c4c74de7cefd056fc085738af8be8c41345f9a4055a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b8c8c8b16543b55f873c4c74de7cefd056fc085738af8be8c41345f9a4055a4->leave($__internal_8b8c8c8b16543b55f873c4c74de7cefd056fc085738af8be8c41345f9a4055a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_865de8b0e5989bfa4b8b471571c412a2ce0d2629506bd3b5398df1d6e34b4fcc = $this->env->getExtension("native_profiler");
        $__internal_865de8b0e5989bfa4b8b471571c412a2ce0d2629506bd3b5398df1d6e34b4fcc->enter($__internal_865de8b0e5989bfa4b8b471571c412a2ce0d2629506bd3b5398df1d6e34b4fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_865de8b0e5989bfa4b8b471571c412a2ce0d2629506bd3b5398df1d6e34b4fcc->leave($__internal_865de8b0e5989bfa4b8b471571c412a2ce0d2629506bd3b5398df1d6e34b4fcc_prof);

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
