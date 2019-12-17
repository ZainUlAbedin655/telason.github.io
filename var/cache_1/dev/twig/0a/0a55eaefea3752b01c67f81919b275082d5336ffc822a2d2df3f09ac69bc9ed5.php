<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_e0d4aaca4f4ad6596539219694e1581b82c40f93bb014c355871aefbd95ea490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
            'messages' => array($this, 'block_messages'),
            'defined_messages' => array($this, 'block_defined_messages'),
            'fallback_messages' => array($this, 'block_fallback_messages'),
            'missing_messages' => array($this, 'block_missing_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147e50d72f0fe30b63ca4a8accf5fd358eec3736e1394c710d809f3c752f92f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147e50d72f0fe30b63ca4a8accf5fd358eec3736e1394c710d809f3c752f92f7->enter($__internal_147e50d72f0fe30b63ca4a8accf5fd358eec3736e1394c710d809f3c752f92f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_154858924ae762c0abcf98b76a66efbac4572239a5a3683e3124d58b9e719f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154858924ae762c0abcf98b76a66efbac4572239a5a3683e3124d58b9e719f9a->enter($__internal_154858924ae762c0abcf98b76a66efbac4572239a5a3683e3124d58b9e719f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147e50d72f0fe30b63ca4a8accf5fd358eec3736e1394c710d809f3c752f92f7->leave($__internal_147e50d72f0fe30b63ca4a8accf5fd358eec3736e1394c710d809f3c752f92f7_prof);

        
        $__internal_154858924ae762c0abcf98b76a66efbac4572239a5a3683e3124d58b9e719f9a->leave($__internal_154858924ae762c0abcf98b76a66efbac4572239a5a3683e3124d58b9e719f9a_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ea64014af81c9cd16a468478bc5417687d471fb30680c675de9f794d847c7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea64014af81c9cd16a468478bc5417687d471fb30680c675de9f794d847c7eb->enter($__internal_0ea64014af81c9cd16a468478bc5417687d471fb30680c675de9f794d847c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba2198d859a3970db17f21a220efad015f354bffccb95e49a7cc2044ac98b035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2198d859a3970db17f21a220efad015f354bffccb95e49a7cc2044ac98b035->enter($__internal_ba2198d859a3970db17f21a220efad015f354bffccb95e49a7cc2044ac98b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? $this->getContext($context, "error_count"))) ? (($context["error_count"] ?? $this->getContext($context, "error_count"))) : ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 23
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 30
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_ba2198d859a3970db17f21a220efad015f354bffccb95e49a7cc2044ac98b035->leave($__internal_ba2198d859a3970db17f21a220efad015f354bffccb95e49a7cc2044ac98b035_prof);

        
        $__internal_0ea64014af81c9cd16a468478bc5417687d471fb30680c675de9f794d847c7eb->leave($__internal_0ea64014af81c9cd16a468478bc5417687d471fb30680c675de9f794d847c7eb_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e07d94cff5e281be4c2aceebf97463a84b1350ff76b453ed3eebcdd802e2e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e07d94cff5e281be4c2aceebf97463a84b1350ff76b453ed3eebcdd802e2e12->enter($__internal_7e07d94cff5e281be4c2aceebf97463a84b1350ff76b453ed3eebcdd802e2e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0432148fd759bb60247ab8a95a9933f71642a73db83681cbf6455a450ec3ee5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0432148fd759bb60247ab8a95a9933f71642a73db83681cbf6455a450ec3ee5a->enter($__internal_0432148fd759bb60247ab8a95a9933f71642a73db83681cbf6455a450ec3ee5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 50
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 51
            echo "            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 55
        echo "    </span>
";
        
        $__internal_0432148fd759bb60247ab8a95a9933f71642a73db83681cbf6455a450ec3ee5a->leave($__internal_0432148fd759bb60247ab8a95a9933f71642a73db83681cbf6455a450ec3ee5a_prof);

        
        $__internal_7e07d94cff5e281be4c2aceebf97463a84b1350ff76b453ed3eebcdd802e2e12->leave($__internal_7e07d94cff5e281be4c2aceebf97463a84b1350ff76b453ed3eebcdd802e2e12_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54a7025785410fa6c0cf41c551e828428695b81ad1b446b84791cf038d0a1a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a7025785410fa6c0cf41c551e828428695b81ad1b446b84791cf038d0a1a03->enter($__internal_54a7025785410fa6c0cf41c551e828428695b81ad1b446b84791cf038d0a1a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7e62758f198c44ae23fb881d412e9f267dda7214ac1dcb219a8400e9ae44cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e62758f198c44ae23fb881d412e9f267dda7214ac1dcb219a8400e9ae44cb3->enter($__internal_d7e62758f198c44ae23fb881d412e9f267dda7214ac1dcb219a8400e9ae44cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    ";
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 60
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 65
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_d7e62758f198c44ae23fb881d412e9f267dda7214ac1dcb219a8400e9ae44cb3->leave($__internal_d7e62758f198c44ae23fb881d412e9f267dda7214ac1dcb219a8400e9ae44cb3_prof);

        
        $__internal_54a7025785410fa6c0cf41c551e828428695b81ad1b446b84791cf038d0a1a03->leave($__internal_54a7025785410fa6c0cf41c551e828428695b81ad1b446b84791cf038d0a1a03_prof);

    }

    // line 69
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_3944b1c58c89dc6883ca66723cd080576098065cfc98304fae3a5fe930e97e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3944b1c58c89dc6883ca66723cd080576098065cfc98304fae3a5fe930e97e41->enter($__internal_3944b1c58c89dc6883ca66723cd080576098065cfc98304fae3a5fe930e97e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_7ddec7a2c8a15561704ca8e1e5095e6b995b7a20235b0464baeb73f10673d19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddec7a2c8a15561704ca8e1e5095e6b995b7a20235b0464baeb73f10673d19b->enter($__internal_7ddec7a2c8a15561704ca8e1e5095e6b995b7a20235b0464baeb73f10673d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 70
        echo "
    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "fallbackLocales", array()), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 185
        echo "
";
        
        $__internal_7ddec7a2c8a15561704ca8e1e5095e6b995b7a20235b0464baeb73f10673d19b->leave($__internal_7ddec7a2c8a15561704ca8e1e5095e6b995b7a20235b0464baeb73f10673d19b_prof);

        
        $__internal_3944b1c58c89dc6883ca66723cd080576098065cfc98304fae3a5fe930e97e41->leave($__internal_3944b1c58c89dc6883ca66723cd080576098065cfc98304fae3a5fe930e97e41_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = array())
    {
        $__internal_4ba1a3c0403e92b1439f5680edd3ab200267da9efc65433d6160fb1b0f2c4f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba1a3c0403e92b1439f5680edd3ab200267da9efc65433d6160fb1b0f2c4f5d->enter($__internal_4ba1a3c0403e92b1439f5680edd3ab200267da9efc65433d6160fb1b0f2c4f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_8428e73598d4a1fde72b531db4081d2bb11a356f09c2bdd2a3ec384ca62ae8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8428e73598d4a1fde72b531db4081d2bb11a356f09c2bdd2a3ec384ca62ae8b4->enter($__internal_8428e73598d4a1fde72b531db4081d2bb11a356f09c2bdd2a3ec384ca62ae8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 111
                echo "            ";
                $context["messages_defined"] = twig_array_merge(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 112
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 113
                echo "            ";
                $context["messages_missing"] = twig_array_merge(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 114
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 115
                echo "            ";
                $context["messages_fallback"] = twig_array_merge(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 116
                echo "        ";
            }
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 128
        if (twig_test_empty(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")))) {
            // line 129
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 133
            echo "                    ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 136
            echo "                ";
        }
        // line 137
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 141
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 149
        if (twig_test_empty(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")))) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 154
            echo "                    ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 157
            echo "                ";
        }
        // line 158
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 162
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 171
        if (twig_test_empty(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")))) {
            // line 172
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 176
            echo "                    ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 179
            echo "                ";
        }
        // line 180
        echo "            </div>
        </div>
    </div>

    ";
        
        $__internal_8428e73598d4a1fde72b531db4081d2bb11a356f09c2bdd2a3ec384ca62ae8b4->leave($__internal_8428e73598d4a1fde72b531db4081d2bb11a356f09c2bdd2a3ec384ca62ae8b4_prof);

        
        $__internal_4ba1a3c0403e92b1439f5680edd3ab200267da9efc65433d6160fb1b0f2c4f5d->leave($__internal_4ba1a3c0403e92b1439f5680edd3ab200267da9efc65433d6160fb1b0f2c4f5d_prof);

    }

    // line 133
    public function block_defined_messages($context, array $blocks = array())
    {
        $__internal_1f2354e3aafe20cc9e07368b4de6c916957514a95b783af1692525ad18ff3948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2354e3aafe20cc9e07368b4de6c916957514a95b783af1692525ad18ff3948->enter($__internal_1f2354e3aafe20cc9e07368b4de6c916957514a95b783af1692525ad18ff3948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_6d3cb23f2ae27f3c7754e0ab5ebb9e187f2eaafee5f9b0c5dcc7c11c3f3f08d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3cb23f2ae27f3c7754e0ab5ebb9e187f2eaafee5f9b0c5dcc7c11c3f3f08d4->enter($__internal_6d3cb23f2ae27f3c7754e0ab5ebb9e187f2eaafee5f9b0c5dcc7c11c3f3f08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 134
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")));
        echo "
                    ";
        
        $__internal_6d3cb23f2ae27f3c7754e0ab5ebb9e187f2eaafee5f9b0c5dcc7c11c3f3f08d4->leave($__internal_6d3cb23f2ae27f3c7754e0ab5ebb9e187f2eaafee5f9b0c5dcc7c11c3f3f08d4_prof);

        
        $__internal_1f2354e3aafe20cc9e07368b4de6c916957514a95b783af1692525ad18ff3948->leave($__internal_1f2354e3aafe20cc9e07368b4de6c916957514a95b783af1692525ad18ff3948_prof);

    }

    // line 154
    public function block_fallback_messages($context, array $blocks = array())
    {
        $__internal_851eacb1c3fc9f895118a7a16ebfc28272215671e0c67a322d6fe70a8faa2901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851eacb1c3fc9f895118a7a16ebfc28272215671e0c67a322d6fe70a8faa2901->enter($__internal_851eacb1c3fc9f895118a7a16ebfc28272215671e0c67a322d6fe70a8faa2901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_f0c40cb827a9713bf64721cc4f30e6e7d9dc1f0ca692b866e7b6dbca2f24a82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c40cb827a9713bf64721cc4f30e6e7d9dc1f0ca692b866e7b6dbca2f24a82b->enter($__internal_f0c40cb827a9713bf64721cc4f30e6e7d9dc1f0ca692b866e7b6dbca2f24a82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 155
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")));
        echo "
                    ";
        
        $__internal_f0c40cb827a9713bf64721cc4f30e6e7d9dc1f0ca692b866e7b6dbca2f24a82b->leave($__internal_f0c40cb827a9713bf64721cc4f30e6e7d9dc1f0ca692b866e7b6dbca2f24a82b_prof);

        
        $__internal_851eacb1c3fc9f895118a7a16ebfc28272215671e0c67a322d6fe70a8faa2901->leave($__internal_851eacb1c3fc9f895118a7a16ebfc28272215671e0c67a322d6fe70a8faa2901_prof);

    }

    // line 176
    public function block_missing_messages($context, array $blocks = array())
    {
        $__internal_808ea198068d1540341ceb18de51cbeadb828ff202393d2e32978c870bb0acfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808ea198068d1540341ceb18de51cbeadb828ff202393d2e32978c870bb0acfa->enter($__internal_808ea198068d1540341ceb18de51cbeadb828ff202393d2e32978c870bb0acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_d33817caf9d0aabba82960eebd73211761ac67b0cc5a32ddfae659d355a78ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33817caf9d0aabba82960eebd73211761ac67b0cc5a32ddfae659d355a78ea6->enter($__internal_d33817caf9d0aabba82960eebd73211761ac67b0cc5a32ddfae659d355a78ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 177
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")));
        echo "
                    ";
        
        $__internal_d33817caf9d0aabba82960eebd73211761ac67b0cc5a32ddfae659d355a78ea6->leave($__internal_d33817caf9d0aabba82960eebd73211761ac67b0cc5a32ddfae659d355a78ea6_prof);

        
        $__internal_808ea198068d1540341ceb18de51cbeadb828ff202393d2e32978c870bb0acfa->leave($__internal_808ea198068d1540341ceb18de51cbeadb828ff202393d2e32978c870bb0acfa_prof);

    }

    // line 188
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_98e8fd369773dbf6dc84ed2ae2555e501d19de58e9b3699ff1bd37075d5eb7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_98e8fd369773dbf6dc84ed2ae2555e501d19de58e9b3699ff1bd37075d5eb7fb->enter($__internal_98e8fd369773dbf6dc84ed2ae2555e501d19de58e9b3699ff1bd37075d5eb7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_5445f09f0aab70241677b1ec2201f3aa0c2d3dc2bffc60f11742f4c947ae5ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5445f09f0aab70241677b1ec2201f3aa0c2d3dc2bffc60f11742f4c947ae5ed9->enter($__internal_5445f09f0aab70241677b1ec2201f3aa0c2d3dc2bffc60f11742f4c947ae5ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 189
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 201
                echo "            <tr>
                <td class=\"font-normal text-small nowrap\">";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "</span>

                    ";
                // line 208
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 209
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 211
                echo "
                    ";
                // line 212
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 213
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 217
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["parameters"], 1));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                        </div>
                    ";
                }
                // line 221
                echo "                </td>
                <td class=\"prewrap\">";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        </tbody>
    </table>
";
            
            $__internal_5445f09f0aab70241677b1ec2201f3aa0c2d3dc2bffc60f11742f4c947ae5ed9->leave($__internal_5445f09f0aab70241677b1ec2201f3aa0c2d3dc2bffc60f11742f4c947ae5ed9_prof);

            
            $__internal_98e8fd369773dbf6dc84ed2ae2555e501d19de58e9b3699ff1bd37075d5eb7fb->leave($__internal_98e8fd369773dbf6dc84ed2ae2555e501d19de58e9b3699ff1bd37075d5eb7fb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 225,  633 => 222,  630 => 221,  626 => 219,  617 => 217,  613 => 216,  609 => 215,  603 => 213,  601 => 212,  598 => 211,  594 => 209,  592 => 208,  587 => 206,  582 => 204,  578 => 203,  574 => 202,  571 => 201,  554 => 200,  541 => 189,  523 => 188,  510 => 177,  501 => 176,  488 => 155,  479 => 154,  466 => 134,  457 => 133,  443 => 180,  440 => 179,  437 => 176,  431 => 172,  429 => 171,  415 => 162,  409 => 158,  406 => 157,  403 => 154,  397 => 150,  395 => 149,  382 => 141,  376 => 137,  373 => 136,  370 => 133,  364 => 129,  362 => 128,  352 => 121,  347 => 118,  341 => 117,  338 => 116,  335 => 115,  332 => 114,  329 => 113,  326 => 112,  323 => 111,  320 => 110,  315 => 109,  312 => 108,  309 => 106,  300 => 105,  289 => 185,  287 => 105,  277 => 98,  269 => 93,  261 => 88,  249 => 79,  242 => 75,  235 => 70,  226 => 69,  212 => 65,  205 => 60,  202 => 59,  193 => 58,  182 => 55,  176 => 52,  173 => 51,  170 => 50,  168 => 49,  163 => 47,  156 => 46,  147 => 45,  134 => 41,  131 => 40,  125 => 37,  116 => 31,  112 => 30,  103 => 24,  99 => 23,  91 => 18,  86 => 15,  84 => 14,  81 => 13,  75 => 11,  72 => 10,  70 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}

    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countDefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {% block messages %}

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {% block defined_messages %}
                        {{ helper.render_table(messages_defined) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {% block fallback_messages %}
                        {{ helper.render_table(messages_fallback) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {% block missing_messages %}
                        {{ helper.render_table(messages_missing) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>
    </div>

    {% endblock messages %}

{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small nowrap\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small nowrap\">{{ message.count }}</td>
                <td>
                    <span class=\"nowrap\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/home/telaso5/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
    }
}
