<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig */
class __TwigTemplate_325f8f13108fdcd3ce87535047cfd77767775b4fadb15466d039cac67a20a42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8fe473489bcf54c82b787af92728febecbfb7c81579e28b4cf1e33f9549b41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fe473489bcf54c82b787af92728febecbfb7c81579e28b4cf1e33f9549b41d->enter($__internal_a8fe473489bcf54c82b787af92728febecbfb7c81579e28b4cf1e33f9549b41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

        $__internal_d8a3e1aa4ecbd0802997a2d7dde4c2c0ed1c5a5e77b8471baea6a958ce3db582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a3e1aa4ecbd0802997a2d7dde4c2c0ed1c5a5e77b8471baea6a958ce3db582->enter($__internal_d8a3e1aa4ecbd0802997a2d7dde4c2c0ed1c5a5e77b8471baea6a958ce3db582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 347
        echo "
";
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('form_label', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('choice_label', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('radio_label', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 387
        echo "
";
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('form_row', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('button_row', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('choice_row', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('date_row', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('time_row', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('radio_row', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        echo "
";
        // line 440
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a8fe473489bcf54c82b787af92728febecbfb7c81579e28b4cf1e33f9549b41d->leave($__internal_a8fe473489bcf54c82b787af92728febecbfb7c81579e28b4cf1e33f9549b41d_prof);

        
        $__internal_d8a3e1aa4ecbd0802997a2d7dde4c2c0ed1c5a5e77b8471baea6a958ce3db582->leave($__internal_d8a3e1aa4ecbd0802997a2d7dde4c2c0ed1c5a5e77b8471baea6a958ce3db582_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_aa2a5b4f5eec44eade946118b429b697ef08c27548cd084b231a7a2b648c26ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2a5b4f5eec44eade946118b429b697ef08c27548cd084b231a7a2b648c26ee->enter($__internal_aa2a5b4f5eec44eade946118b429b697ef08c27548cd084b231a7a2b648c26ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5dc754b528408faa73a5dca12aa94e0f29a0928dde2d192e8b51684bbda90744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc754b528408faa73a5dca12aa94e0f29a0928dde2d192e8b51684bbda90744->enter($__internal_5dc754b528408faa73a5dca12aa94e0f29a0928dde2d192e8b51684bbda90744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5dc754b528408faa73a5dca12aa94e0f29a0928dde2d192e8b51684bbda90744->leave($__internal_5dc754b528408faa73a5dca12aa94e0f29a0928dde2d192e8b51684bbda90744_prof);

        
        $__internal_aa2a5b4f5eec44eade946118b429b697ef08c27548cd084b231a7a2b648c26ee->leave($__internal_aa2a5b4f5eec44eade946118b429b697ef08c27548cd084b231a7a2b648c26ee_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ee49911da16105305403e24413c0e1882dab837155b77fa24b3e8ecfe517b8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee49911da16105305403e24413c0e1882dab837155b77fa24b3e8ecfe517b8b7->enter($__internal_ee49911da16105305403e24413c0e1882dab837155b77fa24b3e8ecfe517b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d85baa345aed1fdf9d0238b2ba4c5e18d4fe0b7128480572370f35d71e39723e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85baa345aed1fdf9d0238b2ba4c5e18d4fe0b7128480572370f35d71e39723e->enter($__internal_d85baa345aed1fdf9d0238b2ba4c5e18d4fe0b7128480572370f35d71e39723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d85baa345aed1fdf9d0238b2ba4c5e18d4fe0b7128480572370f35d71e39723e->leave($__internal_d85baa345aed1fdf9d0238b2ba4c5e18d4fe0b7128480572370f35d71e39723e_prof);

        
        $__internal_ee49911da16105305403e24413c0e1882dab837155b77fa24b3e8ecfe517b8b7->leave($__internal_ee49911da16105305403e24413c0e1882dab837155b77fa24b3e8ecfe517b8b7_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_04664bb74063722e19a3885e6ace6f5fd6597d534f69542032aec3a942972697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04664bb74063722e19a3885e6ace6f5fd6597d534f69542032aec3a942972697->enter($__internal_04664bb74063722e19a3885e6ace6f5fd6597d534f69542032aec3a942972697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0b32a8c4f3392372df6c23ff2583b86a230415620ddfd43994a9adbd2bec2121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b32a8c4f3392372df6c23ff2583b86a230415620ddfd43994a9adbd2bec2121->enter($__internal_0b32a8c4f3392372df6c23ff2583b86a230415620ddfd43994a9adbd2bec2121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0b32a8c4f3392372df6c23ff2583b86a230415620ddfd43994a9adbd2bec2121->leave($__internal_0b32a8c4f3392372df6c23ff2583b86a230415620ddfd43994a9adbd2bec2121_prof);

        
        $__internal_04664bb74063722e19a3885e6ace6f5fd6597d534f69542032aec3a942972697->leave($__internal_04664bb74063722e19a3885e6ace6f5fd6597d534f69542032aec3a942972697_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_675f250665b0601b52f34413293bf15f29822710e7846f4eefbad1949e3aa429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675f250665b0601b52f34413293bf15f29822710e7846f4eefbad1949e3aa429->enter($__internal_675f250665b0601b52f34413293bf15f29822710e7846f4eefbad1949e3aa429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_97db166d4526edef625c6baeb720a317d7b3751c919e03b672cafa9bf5b56002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97db166d4526edef625c6baeb720a317d7b3751c919e03b672cafa9bf5b56002->enter($__internal_97db166d4526edef625c6baeb720a317d7b3751c919e03b672cafa9bf5b56002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 61
        echo "    </div>";
        
        $__internal_97db166d4526edef625c6baeb720a317d7b3751c919e03b672cafa9bf5b56002->leave($__internal_97db166d4526edef625c6baeb720a317d7b3751c919e03b672cafa9bf5b56002_prof);

        
        $__internal_675f250665b0601b52f34413293bf15f29822710e7846f4eefbad1949e3aa429->leave($__internal_675f250665b0601b52f34413293bf15f29822710e7846f4eefbad1949e3aa429_prof);

    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_969bac37acebe72132d45777d0292a532f565ffac527e8f1cc8a1e56fcc19e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969bac37acebe72132d45777d0292a532f565ffac527e8f1cc8a1e56fcc19e3d->enter($__internal_969bac37acebe72132d45777d0292a532f565ffac527e8f1cc8a1e56fcc19e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3e8a9250f7b50da4cf5a865a6dae3d2017306cb7960fc4f32a83eeeed8217533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8a9250f7b50da4cf5a865a6dae3d2017306cb7960fc4f32a83eeeed8217533->enter($__internal_3e8a9250f7b50da4cf5a865a6dae3d2017306cb7960fc4f32a83eeeed8217533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_3e8a9250f7b50da4cf5a865a6dae3d2017306cb7960fc4f32a83eeeed8217533->leave($__internal_3e8a9250f7b50da4cf5a865a6dae3d2017306cb7960fc4f32a83eeeed8217533_prof);

        
        $__internal_969bac37acebe72132d45777d0292a532f565ffac527e8f1cc8a1e56fcc19e3d->leave($__internal_969bac37acebe72132d45777d0292a532f565ffac527e8f1cc8a1e56fcc19e3d_prof);

    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_39ba954774bb9cfe3c6304814217723290b848c748b0a96f9940fdf8bffc0396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ba954774bb9cfe3c6304814217723290b848c748b0a96f9940fdf8bffc0396->enter($__internal_39ba954774bb9cfe3c6304814217723290b848c748b0a96f9940fdf8bffc0396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c73e21a1b67656e6492e081c3273268093f9fb60ea410e2f20c9bc979b2b2627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73e21a1b67656e6492e081c3273268093f9fb60ea410e2f20c9bc979b2b2627->enter($__internal_c73e21a1b67656e6492e081c3273268093f9fb60ea410e2f20c9bc979b2b2627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 74
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
        
        $__internal_c73e21a1b67656e6492e081c3273268093f9fb60ea410e2f20c9bc979b2b2627->leave($__internal_c73e21a1b67656e6492e081c3273268093f9fb60ea410e2f20c9bc979b2b2627_prof);

        
        $__internal_39ba954774bb9cfe3c6304814217723290b848c748b0a96f9940fdf8bffc0396->leave($__internal_39ba954774bb9cfe3c6304814217723290b848c748b0a96f9940fdf8bffc0396_prof);

    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_57eccb0b92a1de047ebf1a58f01f2b18588cf4ba40a7f167eb675461a0a9a0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57eccb0b92a1de047ebf1a58f01f2b18588cf4ba40a7f167eb675461a0a9a0e7->enter($__internal_57eccb0b92a1de047ebf1a58f01f2b18588cf4ba40a7f167eb675461a0a9a0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e841fd4ec22e7dcac546cdef7eb279d6aaf2b8c9cfef95ce93c00327b1fa5b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e841fd4ec22e7dcac546cdef7eb279d6aaf2b8c9cfef95ce93c00327b1fa5b24->enter($__internal_e841fd4ec22e7dcac546cdef7eb279d6aaf2b8c9cfef95ce93c00327b1fa5b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 88
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 93
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 100
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 101
                echo "</div>";
            }
        }
        
        $__internal_e841fd4ec22e7dcac546cdef7eb279d6aaf2b8c9cfef95ce93c00327b1fa5b24->leave($__internal_e841fd4ec22e7dcac546cdef7eb279d6aaf2b8c9cfef95ce93c00327b1fa5b24_prof);

        
        $__internal_57eccb0b92a1de047ebf1a58f01f2b18588cf4ba40a7f167eb675461a0a9a0e7->leave($__internal_57eccb0b92a1de047ebf1a58f01f2b18588cf4ba40a7f167eb675461a0a9a0e7_prof);

    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3893b590abcfd41f1472d8e0c2c652febea335d898c48850424c840428a91d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3893b590abcfd41f1472d8e0c2c652febea335d898c48850424c840428a91d8d->enter($__internal_3893b590abcfd41f1472d8e0c2c652febea335d898c48850424c840428a91d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_111e8e1491fdbfefdb7f67ee44290a81c532910c60657cee9dab6e6f326ebb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111e8e1491fdbfefdb7f67ee44290a81c532910c60657cee9dab6e6f326ebb5c->enter($__internal_111e8e1491fdbfefdb7f67ee44290a81c532910c60657cee9dab6e6f326ebb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 107
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 112
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 115
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 116
                echo "</div>";
            }
        }
        
        $__internal_111e8e1491fdbfefdb7f67ee44290a81c532910c60657cee9dab6e6f326ebb5c->leave($__internal_111e8e1491fdbfefdb7f67ee44290a81c532910c60657cee9dab6e6f326ebb5c_prof);

        
        $__internal_3893b590abcfd41f1472d8e0c2c652febea335d898c48850424c840428a91d8d->leave($__internal_3893b590abcfd41f1472d8e0c2c652febea335d898c48850424c840428a91d8d_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c773ce2adec51583e095cbe578a2aa3ffded9d011224f8a3e57486b78a89f8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c773ce2adec51583e095cbe578a2aa3ffded9d011224f8a3e57486b78a89f8fd->enter($__internal_c773ce2adec51583e095cbe578a2aa3ffded9d011224f8a3e57486b78a89f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8bc2d7c93b41b5cadd5ca3f22f21fdf0bce1c6a12c1de2ccfa40f92838bd9207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc2d7c93b41b5cadd5ca3f22f21fdf0bce1c6a12c1de2ccfa40f92838bd9207->enter($__internal_8bc2d7c93b41b5cadd5ca3f22f21fdf0bce1c6a12c1de2ccfa40f92838bd9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8bc2d7c93b41b5cadd5ca3f22f21fdf0bce1c6a12c1de2ccfa40f92838bd9207->leave($__internal_8bc2d7c93b41b5cadd5ca3f22f21fdf0bce1c6a12c1de2ccfa40f92838bd9207_prof);

        
        $__internal_c773ce2adec51583e095cbe578a2aa3ffded9d011224f8a3e57486b78a89f8fd->leave($__internal_c773ce2adec51583e095cbe578a2aa3ffded9d011224f8a3e57486b78a89f8fd_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b6a7379ff2dc6da74a220bbf1ea78b8b8fa5831e9089fe6a3814e88ea129569a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a7379ff2dc6da74a220bbf1ea78b8b8fa5831e9089fe6a3814e88ea129569a->enter($__internal_b6a7379ff2dc6da74a220bbf1ea78b8b8fa5831e9089fe6a3814e88ea129569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f0063b7ec408d4fc2178f987aecc4e748a11efe24a81d026691576f3767dc5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0063b7ec408d4fc2178f987aecc4e748a11efe24a81d026691576f3767dc5b8->enter($__internal_f0063b7ec408d4fc2178f987aecc4e748a11efe24a81d026691576f3767dc5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
        
        $__internal_f0063b7ec408d4fc2178f987aecc4e748a11efe24a81d026691576f3767dc5b8->leave($__internal_f0063b7ec408d4fc2178f987aecc4e748a11efe24a81d026691576f3767dc5b8_prof);

        
        $__internal_b6a7379ff2dc6da74a220bbf1ea78b8b8fa5831e9089fe6a3814e88ea129569a->leave($__internal_b6a7379ff2dc6da74a220bbf1ea78b8b8fa5831e9089fe6a3814e88ea129569a_prof);

    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_626dd2cfab0525238c4897954d221cb8a8f78de22d91583c7349b6cdb5ad1353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626dd2cfab0525238c4897954d221cb8a8f78de22d91583c7349b6cdb5ad1353->enter($__internal_626dd2cfab0525238c4897954d221cb8a8f78de22d91583c7349b6cdb5ad1353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9209efe5f08e228ec18f450f0d8d5dfab17e3a8f3ed8f6a7bdc68e31b3c52925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9209efe5f08e228ec18f450f0d8d5dfab17e3a8f3ed8f6a7bdc68e31b3c52925->enter($__internal_9209efe5f08e228ec18f450f0d8d5dfab17e3a8f3ed8f6a7bdc68e31b3c52925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 149
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
        
        $__internal_9209efe5f08e228ec18f450f0d8d5dfab17e3a8f3ed8f6a7bdc68e31b3c52925->leave($__internal_9209efe5f08e228ec18f450f0d8d5dfab17e3a8f3ed8f6a7bdc68e31b3c52925_prof);

        
        $__internal_626dd2cfab0525238c4897954d221cb8a8f78de22d91583c7349b6cdb5ad1353->leave($__internal_626dd2cfab0525238c4897954d221cb8a8f78de22d91583c7349b6cdb5ad1353_prof);

    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_705903ed28dc67ec5c3362ebb0173c8ca02b15c08dc22c79160b015b26272555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705903ed28dc67ec5c3362ebb0173c8ca02b15c08dc22c79160b015b26272555->enter($__internal_705903ed28dc67ec5c3362ebb0173c8ca02b15c08dc22c79160b015b26272555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4fedbbee7d3455b60a207edf13265548fbdbcd89641a26c4ee184357102761ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fedbbee7d3455b60a207edf13265548fbdbcd89641a26c4ee184357102761ae->enter($__internal_4fedbbee7d3455b60a207edf13265548fbdbcd89641a26c4ee184357102761ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 160
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
        
        $__internal_4fedbbee7d3455b60a207edf13265548fbdbcd89641a26c4ee184357102761ae->leave($__internal_4fedbbee7d3455b60a207edf13265548fbdbcd89641a26c4ee184357102761ae_prof);

        
        $__internal_705903ed28dc67ec5c3362ebb0173c8ca02b15c08dc22c79160b015b26272555->leave($__internal_705903ed28dc67ec5c3362ebb0173c8ca02b15c08dc22c79160b015b26272555_prof);

    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_6b0100bb989a1ff5b704661cec7ecd7216170ac73a4a519b4adacdba31a6f85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0100bb989a1ff5b704661cec7ecd7216170ac73a4a519b4adacdba31a6f85c->enter($__internal_6b0100bb989a1ff5b704661cec7ecd7216170ac73a4a519b4adacdba31a6f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_f59069955b6e83d0013c176225cac007da634d125c707625aa72bcf611324361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59069955b6e83d0013c176225cac007da634d125c707625aa72bcf611324361->enter($__internal_f59069955b6e83d0013c176225cac007da634d125c707625aa72bcf611324361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 171
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
        
        $__internal_f59069955b6e83d0013c176225cac007da634d125c707625aa72bcf611324361->leave($__internal_f59069955b6e83d0013c176225cac007da634d125c707625aa72bcf611324361_prof);

        
        $__internal_6b0100bb989a1ff5b704661cec7ecd7216170ac73a4a519b4adacdba31a6f85c->leave($__internal_6b0100bb989a1ff5b704661cec7ecd7216170ac73a4a519b4adacdba31a6f85c_prof);

    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_0340b668f507d81d6ab8e7b5eff2bfa806e6f571b7d2fc39bac94d2ea78fc627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0340b668f507d81d6ab8e7b5eff2bfa806e6f571b7d2fc39bac94d2ea78fc627->enter($__internal_0340b668f507d81d6ab8e7b5eff2bfa806e6f571b7d2fc39bac94d2ea78fc627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_511e5a0cf054145e1174c4d49d13846b9f3665e451b527d5908b8f8c2ea18e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511e5a0cf054145e1174c4d49d13846b9f3665e451b527d5908b8f8c2ea18e0e->enter($__internal_511e5a0cf054145e1174c4d49d13846b9f3665e451b527d5908b8f8c2ea18e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 182
        echo "<li>
        ";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 193
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "
                    ";
            // line 203
            if (array_key_exists("defaultCategory", $context)) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                echo "                    ";
                $context["child"] = $context["item"];
                // line 213
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "</ul>
        ";
        }
        // line 217
        echo "    </li>";
        
        $__internal_511e5a0cf054145e1174c4d49d13846b9f3665e451b527d5908b8f8c2ea18e0e->leave($__internal_511e5a0cf054145e1174c4d49d13846b9f3665e451b527d5908b8f8c2ea18e0e_prof);

        
        $__internal_0340b668f507d81d6ab8e7b5eff2bfa806e6f571b7d2fc39bac94d2ea78fc627->leave($__internal_0340b668f507d81d6ab8e7b5eff2bfa806e6f571b7d2fc39bac94d2ea78fc627_prof);

    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_b7f1e77db7451745a6a80d65893975882f72d77f281f3da7f95e7fd48bad7013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f1e77db7451745a6a80d65893975882f72d77f281f3da7f95e7fd48bad7013->enter($__internal_b7f1e77db7451745a6a80d65893975882f72d77f281f3da7f95e7fd48bad7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_5694a9a44f82bf1a6810df081a55275bf13b7ac618da2a968b6b1635e645fc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5694a9a44f82bf1a6810df081a55275bf13b7ac618da2a968b6b1635e645fc8b->enter($__internal_5694a9a44f82bf1a6810df081a55275bf13b7ac618da2a968b6b1635e645fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 221
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 223
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>
        ";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
";
        
        $__internal_5694a9a44f82bf1a6810df081a55275bf13b7ac618da2a968b6b1635e645fc8b->leave($__internal_5694a9a44f82bf1a6810df081a55275bf13b7ac618da2a968b6b1635e645fc8b_prof);

        
        $__internal_b7f1e77db7451745a6a80d65893975882f72d77f281f3da7f95e7fd48bad7013->leave($__internal_b7f1e77db7451745a6a80d65893975882f72d77f281f3da7f95e7fd48bad7013_prof);

    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_d2caa65561485af26d818349ca7d471474f050ed306e00a9d81d1dcd263f8be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2caa65561485af26d818349ca7d471474f050ed306e00a9d81d1dcd263f8be1->enter($__internal_d2caa65561485af26d818349ca7d471474f050ed306e00a9d81d1dcd263f8be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_0e66f214460375bbb126470fc62cb0d6ce51d68ac46dfabd923a9ae11c94c368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e66f214460375bbb126470fc62cb0d6ce51d68ac46dfabd923a9ae11c94c368->enter($__internal_0e66f214460375bbb126470fc62cb0d6ce51d68ac46dfabd923a9ae11c94c368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 247
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_0e66f214460375bbb126470fc62cb0d6ce51d68ac46dfabd923a9ae11c94c368->leave($__internal_0e66f214460375bbb126470fc62cb0d6ce51d68ac46dfabd923a9ae11c94c368_prof);

        
        $__internal_d2caa65561485af26d818349ca7d471474f050ed306e00a9d81d1dcd263f8be1->leave($__internal_d2caa65561485af26d818349ca7d471474f050ed306e00a9d81d1dcd263f8be1_prof);

    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        $__internal_afa3b44d94da42be1721ab9b063246f4cedb17d7f9076a5d32ac32ad15347527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa3b44d94da42be1721ab9b063246f4cedb17d7f9076a5d32ac32ad15347527->enter($__internal_afa3b44d94da42be1721ab9b063246f4cedb17d7f9076a5d32ac32ad15347527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_e15352fd406351124198d0d3cce9229734f9f8c0b5d2c92e5b8cfa49a800689f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15352fd406351124198d0d3cce9229734f9f8c0b5d2c92e5b8cfa49a800689f->enter($__internal_e15352fd406351124198d0d3cce9229734f9f8c0b5d2c92e5b8cfa49a800689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? $this->getContext($context, "classes")) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 259
            echo "
            ";
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? $this->getContext($context, "default_locale")), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                echo "                ";
                $context["classes"] = (($context["classes"] ?? $this->getContext($context, "classes")) . " d-none");
                // line 262
                echo "            ";
            }
            // line 263
            echo "
            ";
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 265
            echo "
            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? $this->getContext($context, "classes"))))));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "
        ";
        // line 269
        if ( !($context["hide_locales"] ?? $this->getContext($context, "hide_locales"))) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? $this->getContext($context, "locales")));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>
        ";
        }
        // line 288
        echo "    </div>";
        
        $__internal_e15352fd406351124198d0d3cce9229734f9f8c0b5d2c92e5b8cfa49a800689f->leave($__internal_e15352fd406351124198d0d3cce9229734f9f8c0b5d2c92e5b8cfa49a800689f_prof);

        
        $__internal_afa3b44d94da42be1721ab9b063246f4cedb17d7f9076a5d32ac32ad15347527->leave($__internal_afa3b44d94da42be1721ab9b063246f4cedb17d7f9076a5d32ac32ad15347527_prof);

    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_bb4e578819c62e1c2f5bc1cb2fde8e0a5c13ff358015e08d378d09c62f60cfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4e578819c62e1c2f5bc1cb2fde8e0a5c13ff358015e08d378d09c62f60cfc1->enter($__internal_bb4e578819c62e1c2f5bc1cb2fde8e0a5c13ff358015e08d378d09c62f60cfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_ba569df2852017e7a12a85ecbf277c5177f340422037d52bfd64c8c01ab371f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba569df2852017e7a12a85ecbf277c5177f340422037d52bfd64c8c01ab371f1->enter($__internal_ba569df2852017e7a12a85ecbf277c5177f340422037d52bfd64c8c01ab371f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ba569df2852017e7a12a85ecbf277c5177f340422037d52bfd64c8c01ab371f1->leave($__internal_ba569df2852017e7a12a85ecbf277c5177f340422037d52bfd64c8c01ab371f1_prof);

        
        $__internal_bb4e578819c62e1c2f5bc1cb2fde8e0a5c13ff358015e08d378d09c62f60cfc1->leave($__internal_bb4e578819c62e1c2f5bc1cb2fde8e0a5c13ff358015e08d378d09c62f60cfc1_prof);

    }

    // line 305
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_f7614a94c714a519245d7de7c7ea3ca9df4782df398b54a2e9876a19a99ca5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7614a94c714a519245d7de7c7ea3ca9df4782df398b54a2e9876a19a99ca5c1->enter($__internal_f7614a94c714a519245d7de7c7ea3ca9df4782df398b54a2e9876a19a99ca5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_385c195595b19bb34e358b295b6728675d81106ac57c6ed63a147f2423dc814b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385c195595b19bb34e358b295b6728675d81106ac57c6ed63a147f2423dc814b->enter($__internal_385c195595b19bb34e358b295b6728675d81106ac57c6ed63a147f2423dc814b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 306
        echo "    ";
        ob_start();
        // line 307
        echo "    <span class=\"ps-switch\">
        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 309
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? $this->getContext($context, "id")) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 310
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))), "html", null, true);
            echo "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_385c195595b19bb34e358b295b6728675d81106ac57c6ed63a147f2423dc814b->leave($__internal_385c195595b19bb34e358b295b6728675d81106ac57c6ed63a147f2423dc814b_prof);

        
        $__internal_f7614a94c714a519245d7de7c7ea3ca9df4782df398b54a2e9876a19a99ca5c1->leave($__internal_f7614a94c714a519245d7de7c7ea3ca9df4782df398b54a2e9876a19a99ca5c1_prof);

    }

    // line 318
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_a24107ef269a8e5b230770bde2603404ab23b302ed94c3725c7c40cc9beca7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24107ef269a8e5b230770bde2603404ab23b302ed94c3725c7c40cc9beca7cf->enter($__internal_a24107ef269a8e5b230770bde2603404ab23b302ed94c3725c7c40cc9beca7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_9d489505a9786539c0b9515db7289cc0d27523209e33903c2309ec355bdd4033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d489505a9786539c0b9515db7289cc0d27523209e33903c2309ec355bdd4033->enter($__internal_9d489505a9786539c0b9515db7289cc0d27523209e33903c2309ec355bdd4033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 319
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 323
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 335
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 336
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_9d489505a9786539c0b9515db7289cc0d27523209e33903c2309ec355bdd4033->leave($__internal_9d489505a9786539c0b9515db7289cc0d27523209e33903c2309ec355bdd4033_prof);

        
        $__internal_a24107ef269a8e5b230770bde2603404ab23b302ed94c3725c7c40cc9beca7cf->leave($__internal_a24107ef269a8e5b230770bde2603404ab23b302ed94c3725c7c40cc9beca7cf_prof);

    }

    // line 350
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_96a4e3a1d2c3adeede4f6fee57fd0456339cae714093774d24bde01f6ef4c37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a4e3a1d2c3adeede4f6fee57fd0456339cae714093774d24bde01f6ef4c37c->enter($__internal_96a4e3a1d2c3adeede4f6fee57fd0456339cae714093774d24bde01f6ef4c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c5144fcf3c34fd8b3a8689795f3ecf2e40dee2d03a39a9745a3c98e6013cdf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5144fcf3c34fd8b3a8689795f3ecf2e40dee2d03a39a9745a3c98e6013cdf83->enter($__internal_c5144fcf3c34fd8b3a8689795f3ecf2e40dee2d03a39a9745a3c98e6013cdf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 351
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 352
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c5144fcf3c34fd8b3a8689795f3ecf2e40dee2d03a39a9745a3c98e6013cdf83->leave($__internal_c5144fcf3c34fd8b3a8689795f3ecf2e40dee2d03a39a9745a3c98e6013cdf83_prof);

        
        $__internal_96a4e3a1d2c3adeede4f6fee57fd0456339cae714093774d24bde01f6ef4c37c->leave($__internal_96a4e3a1d2c3adeede4f6fee57fd0456339cae714093774d24bde01f6ef4c37c_prof);

    }

    // line 355
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f0993b05937ae79f73fa2edd0337ee5df6516ae078abe1586a58980c7a079ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0993b05937ae79f73fa2edd0337ee5df6516ae078abe1586a58980c7a079ca9->enter($__internal_f0993b05937ae79f73fa2edd0337ee5df6516ae078abe1586a58980c7a079ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_47fc40c99af421890f71327459ff610c208b530f6381c3b06febee48d2d32bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fc40c99af421890f71327459ff610c208b530f6381c3b06febee48d2d32bc4->enter($__internal_47fc40c99af421890f71327459ff610c208b530f6381c3b06febee48d2d32bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 357
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 358
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_47fc40c99af421890f71327459ff610c208b530f6381c3b06febee48d2d32bc4->leave($__internal_47fc40c99af421890f71327459ff610c208b530f6381c3b06febee48d2d32bc4_prof);

        
        $__internal_f0993b05937ae79f73fa2edd0337ee5df6516ae078abe1586a58980c7a079ca9->leave($__internal_f0993b05937ae79f73fa2edd0337ee5df6516ae078abe1586a58980c7a079ca9_prof);

    }

    // line 361
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_acedd272d96f9afe610155bb679ddf8898c3988f1e0462da695c2c7c51e03f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acedd272d96f9afe610155bb679ddf8898c3988f1e0462da695c2c7c51e03f7a->enter($__internal_acedd272d96f9afe610155bb679ddf8898c3988f1e0462da695c2c7c51e03f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c28df7c57d76582b963623ec2d3a4285a3c343b0316ccdf592392b3003e44dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28df7c57d76582b963623ec2d3a4285a3c343b0316ccdf592392b3003e44dac->enter($__internal_c28df7c57d76582b963623ec2d3a4285a3c343b0316ccdf592392b3003e44dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 362
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c28df7c57d76582b963623ec2d3a4285a3c343b0316ccdf592392b3003e44dac->leave($__internal_c28df7c57d76582b963623ec2d3a4285a3c343b0316ccdf592392b3003e44dac_prof);

        
        $__internal_acedd272d96f9afe610155bb679ddf8898c3988f1e0462da695c2c7c51e03f7a->leave($__internal_acedd272d96f9afe610155bb679ddf8898c3988f1e0462da695c2c7c51e03f7a_prof);

    }

    // line 365
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_0f73c557385d0f7c66c8695add4c1e23e9597283d26bcc186e45f3a1ab50e9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f73c557385d0f7c66c8695add4c1e23e9597283d26bcc186e45f3a1ab50e9cb->enter($__internal_0f73c557385d0f7c66c8695add4c1e23e9597283d26bcc186e45f3a1ab50e9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c647b78278039af074716b4e4f06ac45bbf26755af244e0c3c015b3a54109bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c647b78278039af074716b4e4f06ac45bbf26755af244e0c3c015b3a54109bea->enter($__internal_c647b78278039af074716b4e4f06ac45bbf26755af244e0c3c015b3a54109bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 366
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c647b78278039af074716b4e4f06ac45bbf26755af244e0c3c015b3a54109bea->leave($__internal_c647b78278039af074716b4e4f06ac45bbf26755af244e0c3c015b3a54109bea_prof);

        
        $__internal_0f73c557385d0f7c66c8695add4c1e23e9597283d26bcc186e45f3a1ab50e9cb->leave($__internal_0f73c557385d0f7c66c8695add4c1e23e9597283d26bcc186e45f3a1ab50e9cb_prof);

    }

    // line 369
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8b3945f1c31bb51443c747ad955aac09bb60225a3fce42f92eb5a303e2d1f01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3945f1c31bb51443c747ad955aac09bb60225a3fce42f92eb5a303e2d1f01e->enter($__internal_8b3945f1c31bb51443c747ad955aac09bb60225a3fce42f92eb5a303e2d1f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e1d024367cc162f2a4f5b12d1a0e44f8c6f835b4bc3995a8b5d03748fc8d7c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d024367cc162f2a4f5b12d1a0e44f8c6f835b4bc3995a8b5d03748fc8d7c3d->enter($__internal_e1d024367cc162f2a4f5b12d1a0e44f8c6f835b4bc3995a8b5d03748fc8d7c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 370
        echo "    ";
        // line 371
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 372
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 373
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 375
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 376
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 378
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 379
                echo "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
            // line 381
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 382
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 383
            echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
            // line 384
            echo "</label>
    ";
        }
        
        $__internal_e1d024367cc162f2a4f5b12d1a0e44f8c6f835b4bc3995a8b5d03748fc8d7c3d->leave($__internal_e1d024367cc162f2a4f5b12d1a0e44f8c6f835b4bc3995a8b5d03748fc8d7c3d_prof);

        
        $__internal_8b3945f1c31bb51443c747ad955aac09bb60225a3fce42f92eb5a303e2d1f01e->leave($__internal_8b3945f1c31bb51443c747ad955aac09bb60225a3fce42f92eb5a303e2d1f01e_prof);

    }

    // line 390
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_91460332d519ff26051eae915e97b3807cd965c46165260def86c778d1445e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91460332d519ff26051eae915e97b3807cd965c46165260def86c778d1445e03->enter($__internal_91460332d519ff26051eae915e97b3807cd965c46165260def86c778d1445e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0613709de03f311bfc033eec41dc6679ec08b209f448bc05c7f9cc93a1a14d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0613709de03f311bfc033eec41dc6679ec08b209f448bc05c7f9cc93a1a14d7c->enter($__internal_0613709de03f311bfc033eec41dc6679ec08b209f448bc05c7f9cc93a1a14d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 391
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 395
        echo "</div>";
        
        $__internal_0613709de03f311bfc033eec41dc6679ec08b209f448bc05c7f9cc93a1a14d7c->leave($__internal_0613709de03f311bfc033eec41dc6679ec08b209f448bc05c7f9cc93a1a14d7c_prof);

        
        $__internal_91460332d519ff26051eae915e97b3807cd965c46165260def86c778d1445e03->leave($__internal_91460332d519ff26051eae915e97b3807cd965c46165260def86c778d1445e03_prof);

    }

    // line 398
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_53b38f8c096f05ee2a2dc2efef2d3ef91b2f93a9a48727b41536a5499ba54235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b38f8c096f05ee2a2dc2efef2d3ef91b2f93a9a48727b41536a5499ba54235->enter($__internal_53b38f8c096f05ee2a2dc2efef2d3ef91b2f93a9a48727b41536a5499ba54235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c1d93692cfc7263f891b33cc335966dede76f446113075239ac67752d9d81951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d93692cfc7263f891b33cc335966dede76f446113075239ac67752d9d81951->enter($__internal_c1d93692cfc7263f891b33cc335966dede76f446113075239ac67752d9d81951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 399
        echo "<div class=\"form-group\">";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 401
        echo "</div>";
        
        $__internal_c1d93692cfc7263f891b33cc335966dede76f446113075239ac67752d9d81951->leave($__internal_c1d93692cfc7263f891b33cc335966dede76f446113075239ac67752d9d81951_prof);

        
        $__internal_53b38f8c096f05ee2a2dc2efef2d3ef91b2f93a9a48727b41536a5499ba54235->leave($__internal_53b38f8c096f05ee2a2dc2efef2d3ef91b2f93a9a48727b41536a5499ba54235_prof);

    }

    // line 404
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2bd17d07046d360f20813ff255dd36b9903638593337f2258c4f431065e016be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd17d07046d360f20813ff255dd36b9903638593337f2258c4f431065e016be->enter($__internal_2bd17d07046d360f20813ff255dd36b9903638593337f2258c4f431065e016be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5d29b9c5cb1cb57867aa2ebabbd06eccf70976fb44816c6663478b0b15351c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d29b9c5cb1cb57867aa2ebabbd06eccf70976fb44816c6663478b0b15351c20->enter($__internal_5d29b9c5cb1cb57867aa2ebabbd06eccf70976fb44816c6663478b0b15351c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 405
        $context["force_error"] = true;
        // line 406
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5d29b9c5cb1cb57867aa2ebabbd06eccf70976fb44816c6663478b0b15351c20->leave($__internal_5d29b9c5cb1cb57867aa2ebabbd06eccf70976fb44816c6663478b0b15351c20_prof);

        
        $__internal_2bd17d07046d360f20813ff255dd36b9903638593337f2258c4f431065e016be->leave($__internal_2bd17d07046d360f20813ff255dd36b9903638593337f2258c4f431065e016be_prof);

    }

    // line 409
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f11c295e9fc7ab41f255a4ae9cc56374d22b23443099b2577ef07b6c7ae6a188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11c295e9fc7ab41f255a4ae9cc56374d22b23443099b2577ef07b6c7ae6a188->enter($__internal_f11c295e9fc7ab41f255a4ae9cc56374d22b23443099b2577ef07b6c7ae6a188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d2f334285d7b4bdc343b6a4b60c3cb2790fa5b0f4274d81510a11b876c7dc2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f334285d7b4bdc343b6a4b60c3cb2790fa5b0f4274d81510a11b876c7dc2ee->enter($__internal_d2f334285d7b4bdc343b6a4b60c3cb2790fa5b0f4274d81510a11b876c7dc2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 410
        $context["force_error"] = true;
        // line 411
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d2f334285d7b4bdc343b6a4b60c3cb2790fa5b0f4274d81510a11b876c7dc2ee->leave($__internal_d2f334285d7b4bdc343b6a4b60c3cb2790fa5b0f4274d81510a11b876c7dc2ee_prof);

        
        $__internal_f11c295e9fc7ab41f255a4ae9cc56374d22b23443099b2577ef07b6c7ae6a188->leave($__internal_f11c295e9fc7ab41f255a4ae9cc56374d22b23443099b2577ef07b6c7ae6a188_prof);

    }

    // line 414
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b84110b1190849a8cd9da760f1b746e493f8f61881400b3ba88a85ad06491ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84110b1190849a8cd9da760f1b746e493f8f61881400b3ba88a85ad06491ced->enter($__internal_b84110b1190849a8cd9da760f1b746e493f8f61881400b3ba88a85ad06491ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d9a3ca22648c737762464b74e44ed8f13b45d818da1b0cf140ece507c5dc426d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a3ca22648c737762464b74e44ed8f13b45d818da1b0cf140ece507c5dc426d->enter($__internal_d9a3ca22648c737762464b74e44ed8f13b45d818da1b0cf140ece507c5dc426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 415
        $context["force_error"] = true;
        // line 416
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9a3ca22648c737762464b74e44ed8f13b45d818da1b0cf140ece507c5dc426d->leave($__internal_d9a3ca22648c737762464b74e44ed8f13b45d818da1b0cf140ece507c5dc426d_prof);

        
        $__internal_b84110b1190849a8cd9da760f1b746e493f8f61881400b3ba88a85ad06491ced->leave($__internal_b84110b1190849a8cd9da760f1b746e493f8f61881400b3ba88a85ad06491ced_prof);

    }

    // line 419
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d5df4ad23d982198311f592c6a341fd4529cc591f6bccbcca83cfe2a6d649e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5df4ad23d982198311f592c6a341fd4529cc591f6bccbcca83cfe2a6d649e4a->enter($__internal_d5df4ad23d982198311f592c6a341fd4529cc591f6bccbcca83cfe2a6d649e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d9feed53abf98144eaca3f492a145b17c6fe2bd1a138e57d3bcefbebff214270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9feed53abf98144eaca3f492a145b17c6fe2bd1a138e57d3bcefbebff214270->enter($__internal_d9feed53abf98144eaca3f492a145b17c6fe2bd1a138e57d3bcefbebff214270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 420
        $context["force_error"] = true;
        // line 421
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9feed53abf98144eaca3f492a145b17c6fe2bd1a138e57d3bcefbebff214270->leave($__internal_d9feed53abf98144eaca3f492a145b17c6fe2bd1a138e57d3bcefbebff214270_prof);

        
        $__internal_d5df4ad23d982198311f592c6a341fd4529cc591f6bccbcca83cfe2a6d649e4a->leave($__internal_d5df4ad23d982198311f592c6a341fd4529cc591f6bccbcca83cfe2a6d649e4a_prof);

    }

    // line 424
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9eeac6f3c26f93a62764cfe6560b05d67a3145828a52f274a37167cfe83e8492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eeac6f3c26f93a62764cfe6560b05d67a3145828a52f274a37167cfe83e8492->enter($__internal_9eeac6f3c26f93a62764cfe6560b05d67a3145828a52f274a37167cfe83e8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_37c6e3097b28cb2f6142fa0a72019ccb922c4e12f77bfc5638ac4216571fb75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c6e3097b28cb2f6142fa0a72019ccb922c4e12f77bfc5638ac4216571fb75a->enter($__internal_37c6e3097b28cb2f6142fa0a72019ccb922c4e12f77bfc5638ac4216571fb75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 425
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 428
        echo "</div>";
        
        $__internal_37c6e3097b28cb2f6142fa0a72019ccb922c4e12f77bfc5638ac4216571fb75a->leave($__internal_37c6e3097b28cb2f6142fa0a72019ccb922c4e12f77bfc5638ac4216571fb75a_prof);

        
        $__internal_9eeac6f3c26f93a62764cfe6560b05d67a3145828a52f274a37167cfe83e8492->leave($__internal_9eeac6f3c26f93a62764cfe6560b05d67a3145828a52f274a37167cfe83e8492_prof);

    }

    // line 431
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a7a983bd29783428e20e6c19d0e4cb07e085324badea018f12b434501ad3c340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a983bd29783428e20e6c19d0e4cb07e085324badea018f12b434501ad3c340->enter($__internal_a7a983bd29783428e20e6c19d0e4cb07e085324badea018f12b434501ad3c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a2278def14288a2f9fdccff7f1bce00296ba18534fba49452a50a013af8e349e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2278def14288a2f9fdccff7f1bce00296ba18534fba49452a50a013af8e349e->enter($__internal_a2278def14288a2f9fdccff7f1bce00296ba18534fba49452a50a013af8e349e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 432
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 435
        echo "</div>";
        
        $__internal_a2278def14288a2f9fdccff7f1bce00296ba18534fba49452a50a013af8e349e->leave($__internal_a2278def14288a2f9fdccff7f1bce00296ba18534fba49452a50a013af8e349e_prof);

        
        $__internal_a7a983bd29783428e20e6c19d0e4cb07e085324badea018f12b434501ad3c340->leave($__internal_a7a983bd29783428e20e6c19d0e4cb07e085324badea018f12b434501ad3c340_prof);

    }

    // line 440
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7775d676df9405416c21536b3ee39c7ee526f1adb1c7bbfc8cf08d5b00a4a78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7775d676df9405416c21536b3ee39c7ee526f1adb1c7bbfc8cf08d5b00a4a78e->enter($__internal_7775d676df9405416c21536b3ee39c7ee526f1adb1c7bbfc8cf08d5b00a4a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6cbd4d83a4904342ceeafd68a8e5d82336b217394df0ef4eb166c74d4f2a4e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbd4d83a4904342ceeafd68a8e5d82336b217394df0ef4eb166c74d4f2a4e0a->enter($__internal_6cbd4d83a4904342ceeafd68a8e5d82336b217394df0ef4eb166c74d4f2a4e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 441
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 442
            echo "<div class=\"alert alert-danger\">";
            // line 443
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                // line 444
                echo "<ul class=\"alert-text\">";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 446
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 447
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 448
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 449
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 450
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "</ul>";
            } else {
                // line 455
                echo "<div class=\"alert-text\">";
                // line 456
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 457
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 458
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 459
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 460
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 461
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "</div>";
            }
            // line 466
            echo "</div>";
        }
        
        $__internal_6cbd4d83a4904342ceeafd68a8e5d82336b217394df0ef4eb166c74d4f2a4e0a->leave($__internal_6cbd4d83a4904342ceeafd68a8e5d82336b217394df0ef4eb166c74d4f2a4e0a_prof);

        
        $__internal_7775d676df9405416c21536b3ee39c7ee526f1adb1c7bbfc8cf08d5b00a4a78e->leave($__internal_7775d676df9405416c21536b3ee39c7ee526f1adb1c7bbfc8cf08d5b00a4a78e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1746 => 466,  1743 => 464,  1736 => 461,  1734 => 460,  1733 => 459,  1732 => 458,  1730 => 457,  1726 => 456,  1724 => 455,  1721 => 453,  1714 => 450,  1712 => 449,  1711 => 448,  1710 => 447,  1708 => 446,  1704 => 445,  1702 => 444,  1700 => 443,  1698 => 442,  1696 => 441,  1687 => 440,  1677 => 435,  1675 => 434,  1673 => 433,  1667 => 432,  1658 => 431,  1648 => 428,  1646 => 427,  1644 => 426,  1638 => 425,  1629 => 424,  1619 => 421,  1617 => 420,  1608 => 419,  1598 => 416,  1596 => 415,  1587 => 414,  1577 => 411,  1575 => 410,  1566 => 409,  1556 => 406,  1554 => 405,  1545 => 404,  1535 => 401,  1533 => 400,  1531 => 399,  1522 => 398,  1512 => 395,  1510 => 394,  1508 => 393,  1506 => 392,  1500 => 391,  1491 => 390,  1479 => 384,  1477 => 383,  1475 => 382,  1460 => 381,  1456 => 379,  1453 => 378,  1449 => 376,  1446 => 375,  1442 => 373,  1439 => 372,  1436 => 371,  1434 => 370,  1425 => 369,  1415 => 366,  1406 => 365,  1396 => 362,  1387 => 361,  1377 => 358,  1375 => 357,  1366 => 355,  1356 => 352,  1354 => 351,  1345 => 350,  1330 => 341,  1313 => 338,  1309 => 337,  1305 => 336,  1302 => 335,  1285 => 334,  1279 => 330,  1275 => 329,  1271 => 328,  1263 => 323,  1257 => 320,  1252 => 319,  1243 => 318,  1230 => 313,  1212 => 311,  1194 => 310,  1191 => 309,  1174 => 308,  1171 => 307,  1168 => 306,  1159 => 305,  1134 => 295,  1131 => 294,  1128 => 293,  1125 => 292,  1116 => 291,  1106 => 288,  1101 => 285,  1090 => 283,  1086 => 282,  1082 => 281,  1076 => 278,  1071 => 276,  1063 => 270,  1061 => 269,  1058 => 268,  1050 => 266,  1047 => 265,  1045 => 264,  1042 => 263,  1039 => 262,  1036 => 261,  1034 => 260,  1031 => 259,  1028 => 258,  1025 => 257,  1021 => 256,  1016 => 254,  1007 => 253,  997 => 250,  994 => 248,  992 => 247,  983 => 246,  971 => 242,  962 => 239,  958 => 238,  939 => 237,  935 => 236,  931 => 234,  927 => 232,  917 => 228,  909 => 227,  906 => 226,  902 => 225,  899 => 224,  897 => 223,  893 => 222,  888 => 221,  879 => 220,  869 => 217,  865 => 215,  848 => 213,  845 => 212,  828 => 211,  825 => 210,  822 => 209,  818 => 206,  812 => 204,  810 => 203,  806 => 202,  798 => 201,  794 => 199,  790 => 196,  784 => 194,  781 => 193,  776 => 191,  771 => 189,  769 => 188,  761 => 187,  757 => 185,  754 => 184,  752 => 183,  749 => 182,  740 => 181,  729 => 177,  712 => 175,  695 => 174,  692 => 173,  686 => 171,  677 => 170,  666 => 166,  664 => 165,  662 => 164,  659 => 162,  657 => 161,  655 => 160,  646 => 159,  635 => 155,  633 => 154,  631 => 153,  628 => 151,  626 => 150,  624 => 149,  615 => 148,  604 => 144,  598 => 141,  597 => 140,  596 => 139,  592 => 138,  588 => 137,  585 => 135,  579 => 132,  578 => 131,  577 => 130,  573 => 129,  571 => 128,  569 => 127,  560 => 126,  550 => 123,  548 => 122,  539 => 121,  527 => 116,  524 => 115,  516 => 114,  511 => 112,  509 => 111,  507 => 110,  504 => 108,  502 => 107,  493 => 106,  481 => 101,  479 => 100,  477 => 98,  476 => 97,  475 => 96,  474 => 95,  469 => 93,  467 => 92,  465 => 91,  462 => 89,  460 => 88,  451 => 87,  440 => 83,  438 => 82,  436 => 81,  434 => 80,  432 => 79,  428 => 78,  426 => 77,  423 => 75,  421 => 74,  412 => 73,  399 => 67,  397 => 66,  395 => 65,  386 => 64,  376 => 61,  370 => 58,  367 => 57,  365 => 56,  363 => 55,  357 => 52,  354 => 51,  351 => 50,  349 => 49,  346 => 48,  337 => 47,  327 => 44,  325 => 43,  316 => 42,  306 => 39,  304 => 38,  295 => 37,  285 => 34,  282 => 32,  280 => 31,  271 => 30,  261 => 440,  258 => 439,  255 => 437,  253 => 431,  250 => 430,  248 => 424,  245 => 423,  243 => 419,  240 => 418,  238 => 414,  235 => 413,  233 => 409,  230 => 408,  228 => 404,  225 => 403,  223 => 398,  220 => 397,  218 => 390,  215 => 389,  212 => 387,  210 => 369,  207 => 368,  205 => 365,  202 => 364,  200 => 361,  197 => 360,  195 => 355,  192 => 354,  190 => 350,  187 => 349,  184 => 347,  182 => 318,  179 => 317,  177 => 305,  174 => 304,  172 => 291,  169 => 290,  167 => 253,  164 => 252,  162 => 246,  159 => 245,  157 => 220,  154 => 219,  152 => 181,  149 => 180,  147 => 170,  144 => 169,  142 => 159,  139 => 158,  137 => 148,  134 => 147,  132 => 126,  129 => 125,  127 => 121,  124 => 120,  122 => 106,  119 => 105,  117 => 87,  114 => 86,  112 => 73,  109 => 72,  107 => 64,  104 => 63,  102 => 47,  99 => 46,  97 => 42,  94 => 41,  92 => 37,  89 => 36,  87 => 30,  84 => 29,  81 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig\" %}
{% use 'PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <div class=\"input-group-append\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-pills\">
            {% for translationsFields in form %}
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields tab-content\">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
    {{ form_errors(form) }}
    <div class=\"input-group locale-input-group js-locale-input-group\">
        {% for translateField in form %}
            {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
            {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

            {% if default_locale.id_lang != translateField.vars.name %}
                {% set classes = classes ~ ' d-none' %}
            {% endif %}

            {% set attr = translateField.vars.attr %}

            {{ form_widget(translateField, {attr: {'class': classes|trim}}) }}
        {% endfor %}

        {% if not hide_locales %}
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"{{ form.vars.id }}\"
            >
                {{ form.vars.default_locale.iso_code }}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
                {% for locale in locales %}
                    <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{%- endblock translate_text_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block switch_widget %}
    {% spaceless %}
    <span class=\"ps-switch\">
        {% for choice in choices %}
            {% set inputId = id ~'_' ~ choice.value %}
            <input id=\"{{inputId}}\" {{ block('attributes') }} name=\"{{ full_name }}\" value=\"{{ choice.value }}\" {%- if choice is selectedchoice(value) -%}checked=\"\" {%- endif -%} {%- if disabled -%}disabled=\"\" {%- endif -%} type=\"radio\">
            <label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
    {% endspaceless %}
{% endblock switch_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
{% endif %}
        {% if parent_label_class is defined %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
{% endif %}
        {% if label is not same as(false) and label is empty %}
    {% set label = name|humanize %}
{% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", "/home/telaso5/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
