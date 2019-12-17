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
        $__internal_37fff052476ef6f45da32ec52864ffb137b29a7840932440a919d89dcca4187d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fff052476ef6f45da32ec52864ffb137b29a7840932440a919d89dcca4187d->enter($__internal_37fff052476ef6f45da32ec52864ffb137b29a7840932440a919d89dcca4187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_519f7002e94d6cf1b4eb2ed2e4026659369676204974b0f572722f916ea39133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519f7002e94d6cf1b4eb2ed2e4026659369676204974b0f572722f916ea39133->enter($__internal_519f7002e94d6cf1b4eb2ed2e4026659369676204974b0f572722f916ea39133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37fff052476ef6f45da32ec52864ffb137b29a7840932440a919d89dcca4187d->leave($__internal_37fff052476ef6f45da32ec52864ffb137b29a7840932440a919d89dcca4187d_prof);

        
        $__internal_519f7002e94d6cf1b4eb2ed2e4026659369676204974b0f572722f916ea39133->leave($__internal_519f7002e94d6cf1b4eb2ed2e4026659369676204974b0f572722f916ea39133_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c417ebd6576ddff1e570e8fa81d3ec9071f5423fb51a7a8df129340cce84ab52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c417ebd6576ddff1e570e8fa81d3ec9071f5423fb51a7a8df129340cce84ab52->enter($__internal_c417ebd6576ddff1e570e8fa81d3ec9071f5423fb51a7a8df129340cce84ab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3091f0c20db28164516f5a81f67d195ebf66eb06cc03a222152db4d70936d7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3091f0c20db28164516f5a81f67d195ebf66eb06cc03a222152db4d70936d7f7->enter($__internal_3091f0c20db28164516f5a81f67d195ebf66eb06cc03a222152db4d70936d7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3091f0c20db28164516f5a81f67d195ebf66eb06cc03a222152db4d70936d7f7->leave($__internal_3091f0c20db28164516f5a81f67d195ebf66eb06cc03a222152db4d70936d7f7_prof);

        
        $__internal_c417ebd6576ddff1e570e8fa81d3ec9071f5423fb51a7a8df129340cce84ab52->leave($__internal_c417ebd6576ddff1e570e8fa81d3ec9071f5423fb51a7a8df129340cce84ab52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_696345b060fcc4f22cfda743315dd961318c7a993823f90d4bf68d95dbf149d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696345b060fcc4f22cfda743315dd961318c7a993823f90d4bf68d95dbf149d0->enter($__internal_696345b060fcc4f22cfda743315dd961318c7a993823f90d4bf68d95dbf149d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df7ea460b143b8f87e711d8e4e628e4edf0a59c04dbc02ee161d912d6ae4c0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7ea460b143b8f87e711d8e4e628e4edf0a59c04dbc02ee161d912d6ae4c0f0->enter($__internal_df7ea460b143b8f87e711d8e4e628e4edf0a59c04dbc02ee161d912d6ae4c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df7ea460b143b8f87e711d8e4e628e4edf0a59c04dbc02ee161d912d6ae4c0f0->leave($__internal_df7ea460b143b8f87e711d8e4e628e4edf0a59c04dbc02ee161d912d6ae4c0f0_prof);

        
        $__internal_696345b060fcc4f22cfda743315dd961318c7a993823f90d4bf68d95dbf149d0->leave($__internal_696345b060fcc4f22cfda743315dd961318c7a993823f90d4bf68d95dbf149d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0800536a1a0a3bf2dbc3422e272e189b2767f7d50be84f7a75d30efac1d0f6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0800536a1a0a3bf2dbc3422e272e189b2767f7d50be84f7a75d30efac1d0f6b4->enter($__internal_0800536a1a0a3bf2dbc3422e272e189b2767f7d50be84f7a75d30efac1d0f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_100b5d90b0da30a7f0cf990f7f58b4146aa9f676b396c39a16ba247208d1cb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100b5d90b0da30a7f0cf990f7f58b4146aa9f676b396c39a16ba247208d1cb6e->enter($__internal_100b5d90b0da30a7f0cf990f7f58b4146aa9f676b396c39a16ba247208d1cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_100b5d90b0da30a7f0cf990f7f58b4146aa9f676b396c39a16ba247208d1cb6e->leave($__internal_100b5d90b0da30a7f0cf990f7f58b4146aa9f676b396c39a16ba247208d1cb6e_prof);

        
        $__internal_0800536a1a0a3bf2dbc3422e272e189b2767f7d50be84f7a75d30efac1d0f6b4->leave($__internal_0800536a1a0a3bf2dbc3422e272e189b2767f7d50be84f7a75d30efac1d0f6b4_prof);

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
