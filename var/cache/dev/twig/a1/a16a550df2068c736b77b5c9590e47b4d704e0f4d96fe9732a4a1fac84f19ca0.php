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
        $__internal_8daf6ec48b7d50900dfa726990da1d2cc09e41447f29bb3ac0dfa5eed8947789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8daf6ec48b7d50900dfa726990da1d2cc09e41447f29bb3ac0dfa5eed8947789->enter($__internal_8daf6ec48b7d50900dfa726990da1d2cc09e41447f29bb3ac0dfa5eed8947789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_12818c5ca41d3842d43160cc166a46bf40ca56d0996bd4ca6bad41f7548acafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12818c5ca41d3842d43160cc166a46bf40ca56d0996bd4ca6bad41f7548acafd->enter($__internal_12818c5ca41d3842d43160cc166a46bf40ca56d0996bd4ca6bad41f7548acafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8daf6ec48b7d50900dfa726990da1d2cc09e41447f29bb3ac0dfa5eed8947789->leave($__internal_8daf6ec48b7d50900dfa726990da1d2cc09e41447f29bb3ac0dfa5eed8947789_prof);

        
        $__internal_12818c5ca41d3842d43160cc166a46bf40ca56d0996bd4ca6bad41f7548acafd->leave($__internal_12818c5ca41d3842d43160cc166a46bf40ca56d0996bd4ca6bad41f7548acafd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_add4174f3415ed10e0c0df7a99e230fbae5970576877d56c230253307922f7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add4174f3415ed10e0c0df7a99e230fbae5970576877d56c230253307922f7f7->enter($__internal_add4174f3415ed10e0c0df7a99e230fbae5970576877d56c230253307922f7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2647c94a94a475c6892ae33bfe9337e6ece99634d847515cf14debe6324f8152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2647c94a94a475c6892ae33bfe9337e6ece99634d847515cf14debe6324f8152->enter($__internal_2647c94a94a475c6892ae33bfe9337e6ece99634d847515cf14debe6324f8152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2647c94a94a475c6892ae33bfe9337e6ece99634d847515cf14debe6324f8152->leave($__internal_2647c94a94a475c6892ae33bfe9337e6ece99634d847515cf14debe6324f8152_prof);

        
        $__internal_add4174f3415ed10e0c0df7a99e230fbae5970576877d56c230253307922f7f7->leave($__internal_add4174f3415ed10e0c0df7a99e230fbae5970576877d56c230253307922f7f7_prof);

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
