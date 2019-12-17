<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d07827ae4d78e2299879f1a6c01bc1899d4ea86207d0e96a003d8bcfce88371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0020123bc3cb348ee6c8b12c1151bd693f33605d1d0719d9093afa538ad0a164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0020123bc3cb348ee6c8b12c1151bd693f33605d1d0719d9093afa538ad0a164->enter($__internal_0020123bc3cb348ee6c8b12c1151bd693f33605d1d0719d9093afa538ad0a164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c3e9feab152b89ed006e7fc148aa066025a26435f6b8cc863db73d17665368b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e9feab152b89ed006e7fc148aa066025a26435f6b8cc863db73d17665368b3->enter($__internal_c3e9feab152b89ed006e7fc148aa066025a26435f6b8cc863db73d17665368b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0020123bc3cb348ee6c8b12c1151bd693f33605d1d0719d9093afa538ad0a164->leave($__internal_0020123bc3cb348ee6c8b12c1151bd693f33605d1d0719d9093afa538ad0a164_prof);

        
        $__internal_c3e9feab152b89ed006e7fc148aa066025a26435f6b8cc863db73d17665368b3->leave($__internal_c3e9feab152b89ed006e7fc148aa066025a26435f6b8cc863db73d17665368b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94b8cf343027d4fdcd5111dc97fb67eaae2c008c71154018cfa8198b39f9506b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b8cf343027d4fdcd5111dc97fb67eaae2c008c71154018cfa8198b39f9506b->enter($__internal_94b8cf343027d4fdcd5111dc97fb67eaae2c008c71154018cfa8198b39f9506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b2fa9dfec8052daf5fe9368948a71741f771bb9cf218d037b78939ddd45312e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2fa9dfec8052daf5fe9368948a71741f771bb9cf218d037b78939ddd45312e->enter($__internal_4b2fa9dfec8052daf5fe9368948a71741f771bb9cf218d037b78939ddd45312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4b2fa9dfec8052daf5fe9368948a71741f771bb9cf218d037b78939ddd45312e->leave($__internal_4b2fa9dfec8052daf5fe9368948a71741f771bb9cf218d037b78939ddd45312e_prof);

        
        $__internal_94b8cf343027d4fdcd5111dc97fb67eaae2c008c71154018cfa8198b39f9506b->leave($__internal_94b8cf343027d4fdcd5111dc97fb67eaae2c008c71154018cfa8198b39f9506b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/telaso5/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
