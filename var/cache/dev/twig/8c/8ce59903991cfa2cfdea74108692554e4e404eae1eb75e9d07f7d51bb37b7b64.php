<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_db2b2bea118911e28899acfe3b3bd05354fa4e22a2e4d95f881e0073ecca01c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f450c26a916432be4548645d74b2777a74672170fc8d328f5bb00358158f54c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f450c26a916432be4548645d74b2777a74672170fc8d328f5bb00358158f54c1->enter($__internal_f450c26a916432be4548645d74b2777a74672170fc8d328f5bb00358158f54c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $__internal_3a9d6c90696ef0825787ecfe7dc41a7c194a0b58006475739475130660ec6423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9d6c90696ef0825787ecfe7dc41a7c194a0b58006475739475130660ec6423->enter($__internal_3a9d6c90696ef0825787ecfe7dc41a7c194a0b58006475739475130660ec6423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f450c26a916432be4548645d74b2777a74672170fc8d328f5bb00358158f54c1->leave($__internal_f450c26a916432be4548645d74b2777a74672170fc8d328f5bb00358158f54c1_prof);

        
        $__internal_3a9d6c90696ef0825787ecfe7dc41a7c194a0b58006475739475130660ec6423->leave($__internal_3a9d6c90696ef0825787ecfe7dc41a7c194a0b58006475739475130660ec6423_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e8781d0b6a0022e2dd5c815601338cc9db980adc632f1484e96e167d07cee61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8781d0b6a0022e2dd5c815601338cc9db980adc632f1484e96e167d07cee61->enter($__internal_3e8781d0b6a0022e2dd5c815601338cc9db980adc632f1484e96e167d07cee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_537ce5ead5694e60f49f9a8533bda57c6ffad6daa1fef36ab8bd3f5a102680d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537ce5ead5694e60f49f9a8533bda57c6ffad6daa1fef36ab8bd3f5a102680d9->enter($__internal_537ce5ead5694e60f49f9a8533bda57c6ffad6daa1fef36ab8bd3f5a102680d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        if ((($context["callCount"] ?? $this->getContext($context, "callCount")) == 0)) {
            // line 10
            echo "        ";
            $context["color_code"] = "";
            // line 11
            echo "    ";
        } elseif ((($context["errorCount"] ?? $this->getContext($context, "errorCount")) > 0)) {
            // line 12
            echo "        ";
            $context["color_code"] = "red";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $context["color_code"] = "green";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 19
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo twig_escape_filter($this->env, ($context["color_code"] ?? $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 23
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        }
        // line 25
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        ob_start();
        // line 28
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 30
        echo twig_escape_filter($this->env, (($context["callCount"] ?? $this->getContext($context, "callCount")) - ($context["errorCount"] ?? $this->getContext($context, "errorCount"))), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["errorCount"] ?? $this->getContext($context, "errorCount")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_537ce5ead5694e60f49f9a8533bda57c6ffad6daa1fef36ab8bd3f5a102680d9->leave($__internal_537ce5ead5694e60f49f9a8533bda57c6ffad6daa1fef36ab8bd3f5a102680d9_prof);

        
        $__internal_3e8781d0b6a0022e2dd5c815601338cc9db980adc632f1484e96e167d07cee61->leave($__internal_3e8781d0b6a0022e2dd5c815601338cc9db980adc632f1484e96e167d07cee61_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_efd9553dfd2fbffe767d76d6673945b18ad3a5cf9bc1a3c84dc5e92e97ea09a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd9553dfd2fbffe767d76d6673945b18ad3a5cf9bc1a3c84dc5e92e97ea09a5->enter($__internal_efd9553dfd2fbffe767d76d6673945b18ad3a5cf9bc1a3c84dc5e92e97ea09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_298b3a6b46b5deae7a75a2b5ca0edc7fa7c356cb3536ba3e6168d2493ce6955b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298b3a6b46b5deae7a75a2b5ca0edc7fa7c356cb3536ba3e6168d2493ce6955b->enter($__internal_298b3a6b46b5deae7a75a2b5ca0edc7fa7c356cb3536ba3e6168d2493ce6955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 42
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 45
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 46
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 47
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_298b3a6b46b5deae7a75a2b5ca0edc7fa7c356cb3536ba3e6168d2493ce6955b->leave($__internal_298b3a6b46b5deae7a75a2b5ca0edc7fa7c356cb3536ba3e6168d2493ce6955b_prof);

        
        $__internal_efd9553dfd2fbffe767d76d6673945b18ad3a5cf9bc1a3c84dc5e92e97ea09a5->leave($__internal_efd9553dfd2fbffe767d76d6673945b18ad3a5cf9bc1a3c84dc5e92e97ea09a5_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b54a57c3a682e492a9f1fe1afdcab901c521a1f9301b96f7b80449ce7bb994d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54a57c3a682e492a9f1fe1afdcab901c521a1f9301b96f7b80449ce7bb994d8->enter($__internal_b54a57c3a682e492a9f1fe1afdcab901c521a1f9301b96f7b80449ce7bb994d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9688b9a07626b8d310766b16ac57777db519b346fe1307aa9b611a0c169f5ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9688b9a07626b8d310766b16ac57777db519b346fe1307aa9b611a0c169f5ef7->enter($__internal_9688b9a07626b8d310766b16ac57777db519b346fe1307aa9b611a0c169f5ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 56
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 57
        echo "            ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 62
        echo "
        </span>
        <strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        <span class=\"count\">
            ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) {
            // line 67
            echo "                <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            ";
        }
        // line 69
        echo "        </span>
    </span>
";
        
        $__internal_9688b9a07626b8d310766b16ac57777db519b346fe1307aa9b611a0c169f5ef7->leave($__internal_9688b9a07626b8d310766b16ac57777db519b346fe1307aa9b611a0c169f5ef7_prof);

        
        $__internal_b54a57c3a682e492a9f1fe1afdcab901c521a1f9301b96f7b80449ce7bb994d8->leave($__internal_b54a57c3a682e492a9f1fe1afdcab901c521a1f9301b96f7b80449ce7bb994d8_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_347cbcead718ad345368397152cc2315d7fae2199dee330efb6e4f8412c02395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347cbcead718ad345368397152cc2315d7fae2199dee330efb6e4f8412c02395->enter($__internal_347cbcead718ad345368397152cc2315d7fae2199dee330efb6e4f8412c02395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a016a2c79f521cefd6a211a9dddc3df70a3089a0cca87097c19b6f19060e4983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a016a2c79f521cefd6a211a9dddc3df70a3089a0cca87097c19b6f19060e4983->enter($__internal_a016a2c79f521cefd6a211a9dddc3df70a3089a0cca87097c19b6f19060e4983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 75
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_a016a2c79f521cefd6a211a9dddc3df70a3089a0cca87097c19b6f19060e4983->leave($__internal_a016a2c79f521cefd6a211a9dddc3df70a3089a0cca87097c19b6f19060e4983_prof);

        
        $__internal_347cbcead718ad345368397152cc2315d7fae2199dee330efb6e4f8412c02395->leave($__internal_347cbcead718ad345368397152cc2315d7fae2199dee330efb6e4f8412c02395_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 75,  274 => 74,  265 => 73,  253 => 69,  247 => 67,  245 => 66,  240 => 64,  236 => 62,  230 => 60,  224 => 58,  221 => 57,  219 => 56,  211 => 54,  202 => 53,  188 => 48,  183 => 47,  180 => 46,  178 => 45,  174 => 44,  170 => 43,  165 => 42,  156 => 41,  144 => 38,  141 => 37,  135 => 34,  128 => 30,  124 => 28,  122 => 27,  119 => 26,  116 => 25,  111 => 23,  106 => 22,  99 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        <span class=\"count\">
            {% if collector.calls is not empty %}
                <span>{{ collector.calls|length }}</span>
            {% endif %}
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "CsaGuzzleBundle:Collector:guzzle.html.twig", "/home/telaso5/public_html/vendor/csa/guzzle-bundle/src/Resources/views/Collector/guzzle.html.twig");
    }
}
