<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e80c903d86cf2a72dc43baf3a307bc0b4d7a117d2967492f0ed29ee2b3906a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7d3d58ce9cabc6ddc264a74f964a1d29424bb1abf3b467ef01d4463986e0f50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3d58ce9cabc6ddc264a74f964a1d29424bb1abf3b467ef01d4463986e0f50d->enter($__internal_7d3d58ce9cabc6ddc264a74f964a1d29424bb1abf3b467ef01d4463986e0f50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_29c26a1b2894ee61a7ff78aed1d4a0eb0b2005cd800dfe5202684c0d973ae885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c26a1b2894ee61a7ff78aed1d4a0eb0b2005cd800dfe5202684c0d973ae885->enter($__internal_29c26a1b2894ee61a7ff78aed1d4a0eb0b2005cd800dfe5202684c0d973ae885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3d58ce9cabc6ddc264a74f964a1d29424bb1abf3b467ef01d4463986e0f50d->leave($__internal_7d3d58ce9cabc6ddc264a74f964a1d29424bb1abf3b467ef01d4463986e0f50d_prof);

        
        $__internal_29c26a1b2894ee61a7ff78aed1d4a0eb0b2005cd800dfe5202684c0d973ae885->leave($__internal_29c26a1b2894ee61a7ff78aed1d4a0eb0b2005cd800dfe5202684c0d973ae885_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09188409165766482ebda02517e5e7b8b4965f632e57ae5d96eba1179c8cce64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09188409165766482ebda02517e5e7b8b4965f632e57ae5d96eba1179c8cce64->enter($__internal_09188409165766482ebda02517e5e7b8b4965f632e57ae5d96eba1179c8cce64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0630d21ae7e39e9ecf78e1adfc7a82e6f21ba6021143177420f7229e445f78a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0630d21ae7e39e9ecf78e1adfc7a82e6f21ba6021143177420f7229e445f78a3->enter($__internal_0630d21ae7e39e9ecf78e1adfc7a82e6f21ba6021143177420f7229e445f78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0630d21ae7e39e9ecf78e1adfc7a82e6f21ba6021143177420f7229e445f78a3->leave($__internal_0630d21ae7e39e9ecf78e1adfc7a82e6f21ba6021143177420f7229e445f78a3_prof);

        
        $__internal_09188409165766482ebda02517e5e7b8b4965f632e57ae5d96eba1179c8cce64->leave($__internal_09188409165766482ebda02517e5e7b8b4965f632e57ae5d96eba1179c8cce64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94ac838fe9d3f2400c4a347fc7a60a73e7bd3acf7244a6a0b3b53430f6d9e8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ac838fe9d3f2400c4a347fc7a60a73e7bd3acf7244a6a0b3b53430f6d9e8db->enter($__internal_94ac838fe9d3f2400c4a347fc7a60a73e7bd3acf7244a6a0b3b53430f6d9e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f17be4bb90a9bb3483e67b67584fd0c85dd9b47ab94662e4692f5a6050759732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17be4bb90a9bb3483e67b67584fd0c85dd9b47ab94662e4692f5a6050759732->enter($__internal_f17be4bb90a9bb3483e67b67584fd0c85dd9b47ab94662e4692f5a6050759732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f17be4bb90a9bb3483e67b67584fd0c85dd9b47ab94662e4692f5a6050759732->leave($__internal_f17be4bb90a9bb3483e67b67584fd0c85dd9b47ab94662e4692f5a6050759732_prof);

        
        $__internal_94ac838fe9d3f2400c4a347fc7a60a73e7bd3acf7244a6a0b3b53430f6d9e8db->leave($__internal_94ac838fe9d3f2400c4a347fc7a60a73e7bd3acf7244a6a0b3b53430f6d9e8db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd8eeade48b4a156360a368e0bd9069f56dca509a619f82d7b18dbf2a46caa55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8eeade48b4a156360a368e0bd9069f56dca509a619f82d7b18dbf2a46caa55->enter($__internal_dd8eeade48b4a156360a368e0bd9069f56dca509a619f82d7b18dbf2a46caa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7485aa66ff7cb75ce111027099795adf41c75e46e4f7769a487977b50652d37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7485aa66ff7cb75ce111027099795adf41c75e46e4f7769a487977b50652d37d->enter($__internal_7485aa66ff7cb75ce111027099795adf41c75e46e4f7769a487977b50652d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7485aa66ff7cb75ce111027099795adf41c75e46e4f7769a487977b50652d37d->leave($__internal_7485aa66ff7cb75ce111027099795adf41c75e46e4f7769a487977b50652d37d_prof);

        
        $__internal_dd8eeade48b4a156360a368e0bd9069f56dca509a619f82d7b18dbf2a46caa55->leave($__internal_dd8eeade48b4a156360a368e0bd9069f56dca509a619f82d7b18dbf2a46caa55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/telaso5/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
