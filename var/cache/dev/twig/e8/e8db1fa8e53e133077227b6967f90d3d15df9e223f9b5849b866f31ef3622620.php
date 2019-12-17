<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d499aac9d3a1a37e8840d205fe66f4f6172f49e281a5bdb2a4adaa60ec626437 extends Twig_Template
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
        $__internal_aa5701aad450b81be6ba0061c15a950b3c68caa168a1567fa56ba431b33b6c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5701aad450b81be6ba0061c15a950b3c68caa168a1567fa56ba431b33b6c3c->enter($__internal_aa5701aad450b81be6ba0061c15a950b3c68caa168a1567fa56ba431b33b6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef48099db18dc1d15376f318a494b40e237e23bb841b384490785ce6c4bfb881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef48099db18dc1d15376f318a494b40e237e23bb841b384490785ce6c4bfb881->enter($__internal_ef48099db18dc1d15376f318a494b40e237e23bb841b384490785ce6c4bfb881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5701aad450b81be6ba0061c15a950b3c68caa168a1567fa56ba431b33b6c3c->leave($__internal_aa5701aad450b81be6ba0061c15a950b3c68caa168a1567fa56ba431b33b6c3c_prof);

        
        $__internal_ef48099db18dc1d15376f318a494b40e237e23bb841b384490785ce6c4bfb881->leave($__internal_ef48099db18dc1d15376f318a494b40e237e23bb841b384490785ce6c4bfb881_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e9794e5b2fa07dbc920ab5f81538a7bd9f9c6fd034dc5f13380f736595a64b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9794e5b2fa07dbc920ab5f81538a7bd9f9c6fd034dc5f13380f736595a64b9->enter($__internal_3e9794e5b2fa07dbc920ab5f81538a7bd9f9c6fd034dc5f13380f736595a64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b3bd5d3d8036ca26637934474b2cd9728f56bc46334ed7cc599e4aa546f9af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3bd5d3d8036ca26637934474b2cd9728f56bc46334ed7cc599e4aa546f9af2->enter($__internal_1b3bd5d3d8036ca26637934474b2cd9728f56bc46334ed7cc599e4aa546f9af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b3bd5d3d8036ca26637934474b2cd9728f56bc46334ed7cc599e4aa546f9af2->leave($__internal_1b3bd5d3d8036ca26637934474b2cd9728f56bc46334ed7cc599e4aa546f9af2_prof);

        
        $__internal_3e9794e5b2fa07dbc920ab5f81538a7bd9f9c6fd034dc5f13380f736595a64b9->leave($__internal_3e9794e5b2fa07dbc920ab5f81538a7bd9f9c6fd034dc5f13380f736595a64b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f72fe23348e2059470c17d6826b4a503318afe457461c32c5d55be57f0a22f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f72fe23348e2059470c17d6826b4a503318afe457461c32c5d55be57f0a22f4->enter($__internal_0f72fe23348e2059470c17d6826b4a503318afe457461c32c5d55be57f0a22f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a97e235d59a3021917580e929b2418022d9169a353f2de390afd20e00ab5487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a97e235d59a3021917580e929b2418022d9169a353f2de390afd20e00ab5487->enter($__internal_3a97e235d59a3021917580e929b2418022d9169a353f2de390afd20e00ab5487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a97e235d59a3021917580e929b2418022d9169a353f2de390afd20e00ab5487->leave($__internal_3a97e235d59a3021917580e929b2418022d9169a353f2de390afd20e00ab5487_prof);

        
        $__internal_0f72fe23348e2059470c17d6826b4a503318afe457461c32c5d55be57f0a22f4->leave($__internal_0f72fe23348e2059470c17d6826b4a503318afe457461c32c5d55be57f0a22f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35af0a3b29375029904d93ca4dd06dbb1e39b99b7613fdfeb149108440106029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35af0a3b29375029904d93ca4dd06dbb1e39b99b7613fdfeb149108440106029->enter($__internal_35af0a3b29375029904d93ca4dd06dbb1e39b99b7613fdfeb149108440106029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5380967e5ce451ad73cc7e10382152f266789f9f428e8946df2a6a5853e2b559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5380967e5ce451ad73cc7e10382152f266789f9f428e8946df2a6a5853e2b559->enter($__internal_5380967e5ce451ad73cc7e10382152f266789f9f428e8946df2a6a5853e2b559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5380967e5ce451ad73cc7e10382152f266789f9f428e8946df2a6a5853e2b559->leave($__internal_5380967e5ce451ad73cc7e10382152f266789f9f428e8946df2a6a5853e2b559_prof);

        
        $__internal_35af0a3b29375029904d93ca4dd06dbb1e39b99b7613fdfeb149108440106029->leave($__internal_35af0a3b29375029904d93ca4dd06dbb1e39b99b7613fdfeb149108440106029_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/telaso5/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
