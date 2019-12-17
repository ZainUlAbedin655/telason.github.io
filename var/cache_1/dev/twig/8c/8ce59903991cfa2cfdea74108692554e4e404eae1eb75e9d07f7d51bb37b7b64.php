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
        $__internal_13b9585cf82c3bb9d744d5622e1a4a7638d082b45505faa4950ff177f73bdbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b9585cf82c3bb9d744d5622e1a4a7638d082b45505faa4950ff177f73bdbfd->enter($__internal_13b9585cf82c3bb9d744d5622e1a4a7638d082b45505faa4950ff177f73bdbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $__internal_834c3afc5748db6d563490b8d3546acf67c73e94b41c1ad6fccbe2b137ef5b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834c3afc5748db6d563490b8d3546acf67c73e94b41c1ad6fccbe2b137ef5b75->enter($__internal_834c3afc5748db6d563490b8d3546acf67c73e94b41c1ad6fccbe2b137ef5b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b9585cf82c3bb9d744d5622e1a4a7638d082b45505faa4950ff177f73bdbfd->leave($__internal_13b9585cf82c3bb9d744d5622e1a4a7638d082b45505faa4950ff177f73bdbfd_prof);

        
        $__internal_834c3afc5748db6d563490b8d3546acf67c73e94b41c1ad6fccbe2b137ef5b75->leave($__internal_834c3afc5748db6d563490b8d3546acf67c73e94b41c1ad6fccbe2b137ef5b75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8850382505eeca08d525060ff95bbec65e3203a8ed020f2b3caf0f08a9f62d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8850382505eeca08d525060ff95bbec65e3203a8ed020f2b3caf0f08a9f62d2c->enter($__internal_8850382505eeca08d525060ff95bbec65e3203a8ed020f2b3caf0f08a9f62d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72683a922b48db9dcc906d5d79c68d87b807a44e96d1a7f4584ada97e7da9566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72683a922b48db9dcc906d5d79c68d87b807a44e96d1a7f4584ada97e7da9566->enter($__internal_72683a922b48db9dcc906d5d79c68d87b807a44e96d1a7f4584ada97e7da9566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_72683a922b48db9dcc906d5d79c68d87b807a44e96d1a7f4584ada97e7da9566->leave($__internal_72683a922b48db9dcc906d5d79c68d87b807a44e96d1a7f4584ada97e7da9566_prof);

        
        $__internal_8850382505eeca08d525060ff95bbec65e3203a8ed020f2b3caf0f08a9f62d2c->leave($__internal_8850382505eeca08d525060ff95bbec65e3203a8ed020f2b3caf0f08a9f62d2c_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad822f450be79ff7902c77936972ee4880564e9682aac7f32f660dc0b730ed77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad822f450be79ff7902c77936972ee4880564e9682aac7f32f660dc0b730ed77->enter($__internal_ad822f450be79ff7902c77936972ee4880564e9682aac7f32f660dc0b730ed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a2029976f6e0f137116e950eca84096e78532f28dd81e53819cfcbfa8d4ef84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2029976f6e0f137116e950eca84096e78532f28dd81e53819cfcbfa8d4ef84->enter($__internal_5a2029976f6e0f137116e950eca84096e78532f28dd81e53819cfcbfa8d4ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a2029976f6e0f137116e950eca84096e78532f28dd81e53819cfcbfa8d4ef84->leave($__internal_5a2029976f6e0f137116e950eca84096e78532f28dd81e53819cfcbfa8d4ef84_prof);

        
        $__internal_ad822f450be79ff7902c77936972ee4880564e9682aac7f32f660dc0b730ed77->leave($__internal_ad822f450be79ff7902c77936972ee4880564e9682aac7f32f660dc0b730ed77_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4d25cf03cf7849d65ce5f447aa5c6b6a1696c210d919826bcaeeccb0290e569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d25cf03cf7849d65ce5f447aa5c6b6a1696c210d919826bcaeeccb0290e569->enter($__internal_a4d25cf03cf7849d65ce5f447aa5c6b6a1696c210d919826bcaeeccb0290e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71dce29a229d5f182405808acd352984a385eebb1f6cd86d0c50404fdb6cabf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dce29a229d5f182405808acd352984a385eebb1f6cd86d0c50404fdb6cabf4->enter($__internal_71dce29a229d5f182405808acd352984a385eebb1f6cd86d0c50404fdb6cabf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71dce29a229d5f182405808acd352984a385eebb1f6cd86d0c50404fdb6cabf4->leave($__internal_71dce29a229d5f182405808acd352984a385eebb1f6cd86d0c50404fdb6cabf4_prof);

        
        $__internal_a4d25cf03cf7849d65ce5f447aa5c6b6a1696c210d919826bcaeeccb0290e569->leave($__internal_a4d25cf03cf7849d65ce5f447aa5c6b6a1696c210d919826bcaeeccb0290e569_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6291422c496aff65a0a662927fc6773ec0dfbe261116de4aac09d293858c1bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6291422c496aff65a0a662927fc6773ec0dfbe261116de4aac09d293858c1bc8->enter($__internal_6291422c496aff65a0a662927fc6773ec0dfbe261116de4aac09d293858c1bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a19163d49d7e06ba974a5a040a300322563307ce0a7f798f72728bac7391c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a19163d49d7e06ba974a5a040a300322563307ce0a7f798f72728bac7391c6e->enter($__internal_6a19163d49d7e06ba974a5a040a300322563307ce0a7f798f72728bac7391c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 75
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_6a19163d49d7e06ba974a5a040a300322563307ce0a7f798f72728bac7391c6e->leave($__internal_6a19163d49d7e06ba974a5a040a300322563307ce0a7f798f72728bac7391c6e_prof);

        
        $__internal_6291422c496aff65a0a662927fc6773ec0dfbe261116de4aac09d293858c1bc8->leave($__internal_6291422c496aff65a0a662927fc6773ec0dfbe261116de4aac09d293858c1bc8_prof);

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
