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
        $__internal_39a422598937de30b68914def918a14f36965fe7d7511299a2fdb51732405cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a422598937de30b68914def918a14f36965fe7d7511299a2fdb51732405cf4->enter($__internal_39a422598937de30b68914def918a14f36965fe7d7511299a2fdb51732405cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b1a04affea62807013895198eab815fa107c232e4a0774a7fd06566fce3c98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1a04affea62807013895198eab815fa107c232e4a0774a7fd06566fce3c98f->enter($__internal_5b1a04affea62807013895198eab815fa107c232e4a0774a7fd06566fce3c98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a422598937de30b68914def918a14f36965fe7d7511299a2fdb51732405cf4->leave($__internal_39a422598937de30b68914def918a14f36965fe7d7511299a2fdb51732405cf4_prof);

        
        $__internal_5b1a04affea62807013895198eab815fa107c232e4a0774a7fd06566fce3c98f->leave($__internal_5b1a04affea62807013895198eab815fa107c232e4a0774a7fd06566fce3c98f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ac51ce70b5509133c3d0bb3257a275b1ebd34424938eb8b71a999393f408e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac51ce70b5509133c3d0bb3257a275b1ebd34424938eb8b71a999393f408e13->enter($__internal_6ac51ce70b5509133c3d0bb3257a275b1ebd34424938eb8b71a999393f408e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3fe85d7b5f8e0b6be86891c691b784d937f8f04e827fe192726e89ad8256221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fe85d7b5f8e0b6be86891c691b784d937f8f04e827fe192726e89ad8256221->enter($__internal_d3fe85d7b5f8e0b6be86891c691b784d937f8f04e827fe192726e89ad8256221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3fe85d7b5f8e0b6be86891c691b784d937f8f04e827fe192726e89ad8256221->leave($__internal_d3fe85d7b5f8e0b6be86891c691b784d937f8f04e827fe192726e89ad8256221_prof);

        
        $__internal_6ac51ce70b5509133c3d0bb3257a275b1ebd34424938eb8b71a999393f408e13->leave($__internal_6ac51ce70b5509133c3d0bb3257a275b1ebd34424938eb8b71a999393f408e13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_837a524e1c930429dac854a0893518fb4b5fe676f9f69b4789025b431d1ab18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837a524e1c930429dac854a0893518fb4b5fe676f9f69b4789025b431d1ab18e->enter($__internal_837a524e1c930429dac854a0893518fb4b5fe676f9f69b4789025b431d1ab18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65433380332c83bdab97dc197ec51e4b39e51a64af8c2e78e50c5669ef46d95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65433380332c83bdab97dc197ec51e4b39e51a64af8c2e78e50c5669ef46d95b->enter($__internal_65433380332c83bdab97dc197ec51e4b39e51a64af8c2e78e50c5669ef46d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_65433380332c83bdab97dc197ec51e4b39e51a64af8c2e78e50c5669ef46d95b->leave($__internal_65433380332c83bdab97dc197ec51e4b39e51a64af8c2e78e50c5669ef46d95b_prof);

        
        $__internal_837a524e1c930429dac854a0893518fb4b5fe676f9f69b4789025b431d1ab18e->leave($__internal_837a524e1c930429dac854a0893518fb4b5fe676f9f69b4789025b431d1ab18e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfa07acd04efc68b188ffe5313c53a8b3bb49c7ec1174cacfdce84ec9ccb36b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa07acd04efc68b188ffe5313c53a8b3bb49c7ec1174cacfdce84ec9ccb36b7->enter($__internal_dfa07acd04efc68b188ffe5313c53a8b3bb49c7ec1174cacfdce84ec9ccb36b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a322bc1d2b09ead36a7955e9354215cbb93c635fa602245b195d85310c9fb401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a322bc1d2b09ead36a7955e9354215cbb93c635fa602245b195d85310c9fb401->enter($__internal_a322bc1d2b09ead36a7955e9354215cbb93c635fa602245b195d85310c9fb401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a322bc1d2b09ead36a7955e9354215cbb93c635fa602245b195d85310c9fb401->leave($__internal_a322bc1d2b09ead36a7955e9354215cbb93c635fa602245b195d85310c9fb401_prof);

        
        $__internal_dfa07acd04efc68b188ffe5313c53a8b3bb49c7ec1174cacfdce84ec9ccb36b7->leave($__internal_dfa07acd04efc68b188ffe5313c53a8b3bb49c7ec1174cacfdce84ec9ccb36b7_prof);

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
