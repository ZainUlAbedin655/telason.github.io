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
        $__internal_0f9a26cf7faaf5ab7c9464f177b2bdeb896e48807a63e13a20122b7915e751e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9a26cf7faaf5ab7c9464f177b2bdeb896e48807a63e13a20122b7915e751e0->enter($__internal_0f9a26cf7faaf5ab7c9464f177b2bdeb896e48807a63e13a20122b7915e751e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

        $__internal_b0082c528179888afa20b26330cff7bb0afdda75ac53a5783218563138ff064f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0082c528179888afa20b26330cff7bb0afdda75ac53a5783218563138ff064f->enter($__internal_b0082c528179888afa20b26330cff7bb0afdda75ac53a5783218563138ff064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

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
        
        $__internal_0f9a26cf7faaf5ab7c9464f177b2bdeb896e48807a63e13a20122b7915e751e0->leave($__internal_0f9a26cf7faaf5ab7c9464f177b2bdeb896e48807a63e13a20122b7915e751e0_prof);

        
        $__internal_b0082c528179888afa20b26330cff7bb0afdda75ac53a5783218563138ff064f->leave($__internal_b0082c528179888afa20b26330cff7bb0afdda75ac53a5783218563138ff064f_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fc65005486fd5ee895ed3100fe218b57f78be0a492ab0d51bdbd33aaf8c72d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc65005486fd5ee895ed3100fe218b57f78be0a492ab0d51bdbd33aaf8c72d9e->enter($__internal_fc65005486fd5ee895ed3100fe218b57f78be0a492ab0d51bdbd33aaf8c72d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_adf8740edfebafa12b492c15e915d5b83a80ef7be46af8025e78b36f606a92ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf8740edfebafa12b492c15e915d5b83a80ef7be46af8025e78b36f606a92ea->enter($__internal_adf8740edfebafa12b492c15e915d5b83a80ef7be46af8025e78b36f606a92ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_adf8740edfebafa12b492c15e915d5b83a80ef7be46af8025e78b36f606a92ea->leave($__internal_adf8740edfebafa12b492c15e915d5b83a80ef7be46af8025e78b36f606a92ea_prof);

        
        $__internal_fc65005486fd5ee895ed3100fe218b57f78be0a492ab0d51bdbd33aaf8c72d9e->leave($__internal_fc65005486fd5ee895ed3100fe218b57f78be0a492ab0d51bdbd33aaf8c72d9e_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d22307076ce02405b0bf6b33360e8ef87565133b2850ad0dc419faa1bf78679e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22307076ce02405b0bf6b33360e8ef87565133b2850ad0dc419faa1bf78679e->enter($__internal_d22307076ce02405b0bf6b33360e8ef87565133b2850ad0dc419faa1bf78679e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_93f6bba52551ac922dca9070e62a96123fcf26fe4537d50a627a1b8444fbed76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f6bba52551ac922dca9070e62a96123fcf26fe4537d50a627a1b8444fbed76->enter($__internal_93f6bba52551ac922dca9070e62a96123fcf26fe4537d50a627a1b8444fbed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_93f6bba52551ac922dca9070e62a96123fcf26fe4537d50a627a1b8444fbed76->leave($__internal_93f6bba52551ac922dca9070e62a96123fcf26fe4537d50a627a1b8444fbed76_prof);

        
        $__internal_d22307076ce02405b0bf6b33360e8ef87565133b2850ad0dc419faa1bf78679e->leave($__internal_d22307076ce02405b0bf6b33360e8ef87565133b2850ad0dc419faa1bf78679e_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1e1633330a9c1d9d2a3a91b000e92e5c16f7076609124cae582a4593a50fe47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1633330a9c1d9d2a3a91b000e92e5c16f7076609124cae582a4593a50fe47e->enter($__internal_1e1633330a9c1d9d2a3a91b000e92e5c16f7076609124cae582a4593a50fe47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9e6979824883257812b52f5f8179d2a5b8c1a2c6dea41c6903d026841f618e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6979824883257812b52f5f8179d2a5b8c1a2c6dea41c6903d026841f618e5d->enter($__internal_9e6979824883257812b52f5f8179d2a5b8c1a2c6dea41c6903d026841f618e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9e6979824883257812b52f5f8179d2a5b8c1a2c6dea41c6903d026841f618e5d->leave($__internal_9e6979824883257812b52f5f8179d2a5b8c1a2c6dea41c6903d026841f618e5d_prof);

        
        $__internal_1e1633330a9c1d9d2a3a91b000e92e5c16f7076609124cae582a4593a50fe47e->leave($__internal_1e1633330a9c1d9d2a3a91b000e92e5c16f7076609124cae582a4593a50fe47e_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0a8c06cccee55938c56305ef8235efdf4594a516005d9ac44662719912da48ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8c06cccee55938c56305ef8235efdf4594a516005d9ac44662719912da48ef->enter($__internal_0a8c06cccee55938c56305ef8235efdf4594a516005d9ac44662719912da48ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f41619389a3f7d7dfe05452a56de38192eee0529da54a33128edb6ab47f2774a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41619389a3f7d7dfe05452a56de38192eee0529da54a33128edb6ab47f2774a->enter($__internal_f41619389a3f7d7dfe05452a56de38192eee0529da54a33128edb6ab47f2774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_f41619389a3f7d7dfe05452a56de38192eee0529da54a33128edb6ab47f2774a->leave($__internal_f41619389a3f7d7dfe05452a56de38192eee0529da54a33128edb6ab47f2774a_prof);

        
        $__internal_0a8c06cccee55938c56305ef8235efdf4594a516005d9ac44662719912da48ef->leave($__internal_0a8c06cccee55938c56305ef8235efdf4594a516005d9ac44662719912da48ef_prof);

    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_33b185e27533806e26c231bf6499874f67cb6523ea920b252ef71bd26e66ffbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b185e27533806e26c231bf6499874f67cb6523ea920b252ef71bd26e66ffbf->enter($__internal_33b185e27533806e26c231bf6499874f67cb6523ea920b252ef71bd26e66ffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2d7179214428a44dd0b5553356390712249c433cc4aab71764d077a6c46ecaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7179214428a44dd0b5553356390712249c433cc4aab71764d077a6c46ecaa7->enter($__internal_2d7179214428a44dd0b5553356390712249c433cc4aab71764d077a6c46ecaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_2d7179214428a44dd0b5553356390712249c433cc4aab71764d077a6c46ecaa7->leave($__internal_2d7179214428a44dd0b5553356390712249c433cc4aab71764d077a6c46ecaa7_prof);

        
        $__internal_33b185e27533806e26c231bf6499874f67cb6523ea920b252ef71bd26e66ffbf->leave($__internal_33b185e27533806e26c231bf6499874f67cb6523ea920b252ef71bd26e66ffbf_prof);

    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_067ec63c9587e7215a83b81957a61b28a046e9cf40d27825b38e0da9a43242a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067ec63c9587e7215a83b81957a61b28a046e9cf40d27825b38e0da9a43242a8->enter($__internal_067ec63c9587e7215a83b81957a61b28a046e9cf40d27825b38e0da9a43242a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6802af5e119e930329cf792984279c06eca8ea208528ffdd1e434262d5b7333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6802af5e119e930329cf792984279c06eca8ea208528ffdd1e434262d5b7333e->enter($__internal_6802af5e119e930329cf792984279c06eca8ea208528ffdd1e434262d5b7333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_6802af5e119e930329cf792984279c06eca8ea208528ffdd1e434262d5b7333e->leave($__internal_6802af5e119e930329cf792984279c06eca8ea208528ffdd1e434262d5b7333e_prof);

        
        $__internal_067ec63c9587e7215a83b81957a61b28a046e9cf40d27825b38e0da9a43242a8->leave($__internal_067ec63c9587e7215a83b81957a61b28a046e9cf40d27825b38e0da9a43242a8_prof);

    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3183201b743442315b5a02bb331bdd2fba218c4f8e2ad001a79644a4b324b954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3183201b743442315b5a02bb331bdd2fba218c4f8e2ad001a79644a4b324b954->enter($__internal_3183201b743442315b5a02bb331bdd2fba218c4f8e2ad001a79644a4b324b954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_36b675f261e004563796347ac1c6a6cd33564925a059138ffee34bc4a0bd1699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b675f261e004563796347ac1c6a6cd33564925a059138ffee34bc4a0bd1699->enter($__internal_36b675f261e004563796347ac1c6a6cd33564925a059138ffee34bc4a0bd1699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_36b675f261e004563796347ac1c6a6cd33564925a059138ffee34bc4a0bd1699->leave($__internal_36b675f261e004563796347ac1c6a6cd33564925a059138ffee34bc4a0bd1699_prof);

        
        $__internal_3183201b743442315b5a02bb331bdd2fba218c4f8e2ad001a79644a4b324b954->leave($__internal_3183201b743442315b5a02bb331bdd2fba218c4f8e2ad001a79644a4b324b954_prof);

    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_218577628942143692876395e686df0be084841f9dadb42a4231d6eec7fd88e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218577628942143692876395e686df0be084841f9dadb42a4231d6eec7fd88e5->enter($__internal_218577628942143692876395e686df0be084841f9dadb42a4231d6eec7fd88e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4fd130dc82c709effad162c2d7e5b390f64b211fc77f91de4ca50794d777b855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd130dc82c709effad162c2d7e5b390f64b211fc77f91de4ca50794d777b855->enter($__internal_4fd130dc82c709effad162c2d7e5b390f64b211fc77f91de4ca50794d777b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_4fd130dc82c709effad162c2d7e5b390f64b211fc77f91de4ca50794d777b855->leave($__internal_4fd130dc82c709effad162c2d7e5b390f64b211fc77f91de4ca50794d777b855_prof);

        
        $__internal_218577628942143692876395e686df0be084841f9dadb42a4231d6eec7fd88e5->leave($__internal_218577628942143692876395e686df0be084841f9dadb42a4231d6eec7fd88e5_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3b7d90079d94a47b9fe0b59b322bc3cc1f8c98b8ace81eef23534b6a32926816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7d90079d94a47b9fe0b59b322bc3cc1f8c98b8ace81eef23534b6a32926816->enter($__internal_3b7d90079d94a47b9fe0b59b322bc3cc1f8c98b8ace81eef23534b6a32926816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0d8b5ea9cde2aa646c1df190c22168ce26b011dc165c6d15007b1c9e43b51d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8b5ea9cde2aa646c1df190c22168ce26b011dc165c6d15007b1c9e43b51d4e->enter($__internal_0d8b5ea9cde2aa646c1df190c22168ce26b011dc165c6d15007b1c9e43b51d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0d8b5ea9cde2aa646c1df190c22168ce26b011dc165c6d15007b1c9e43b51d4e->leave($__internal_0d8b5ea9cde2aa646c1df190c22168ce26b011dc165c6d15007b1c9e43b51d4e_prof);

        
        $__internal_3b7d90079d94a47b9fe0b59b322bc3cc1f8c98b8ace81eef23534b6a32926816->leave($__internal_3b7d90079d94a47b9fe0b59b322bc3cc1f8c98b8ace81eef23534b6a32926816_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e57b38423944581e6e521408b2fc23abefd47cbd5f0a925164b4f036525b8240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57b38423944581e6e521408b2fc23abefd47cbd5f0a925164b4f036525b8240->enter($__internal_e57b38423944581e6e521408b2fc23abefd47cbd5f0a925164b4f036525b8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_516fae7e0308a472d58a399650edf218f5ae095e7dab98fc55ea16fd354f6b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516fae7e0308a472d58a399650edf218f5ae095e7dab98fc55ea16fd354f6b55->enter($__internal_516fae7e0308a472d58a399650edf218f5ae095e7dab98fc55ea16fd354f6b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_516fae7e0308a472d58a399650edf218f5ae095e7dab98fc55ea16fd354f6b55->leave($__internal_516fae7e0308a472d58a399650edf218f5ae095e7dab98fc55ea16fd354f6b55_prof);

        
        $__internal_e57b38423944581e6e521408b2fc23abefd47cbd5f0a925164b4f036525b8240->leave($__internal_e57b38423944581e6e521408b2fc23abefd47cbd5f0a925164b4f036525b8240_prof);

    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3018847f13fca9129129c2475457017113ae8c58b585c95067a00d6f1d0b262a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3018847f13fca9129129c2475457017113ae8c58b585c95067a00d6f1d0b262a->enter($__internal_3018847f13fca9129129c2475457017113ae8c58b585c95067a00d6f1d0b262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a094d60da8d763cfc7dbcdfa7efe110109c85cec8262b37b4b406c0c89f8b543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a094d60da8d763cfc7dbcdfa7efe110109c85cec8262b37b4b406c0c89f8b543->enter($__internal_a094d60da8d763cfc7dbcdfa7efe110109c85cec8262b37b4b406c0c89f8b543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_a094d60da8d763cfc7dbcdfa7efe110109c85cec8262b37b4b406c0c89f8b543->leave($__internal_a094d60da8d763cfc7dbcdfa7efe110109c85cec8262b37b4b406c0c89f8b543_prof);

        
        $__internal_3018847f13fca9129129c2475457017113ae8c58b585c95067a00d6f1d0b262a->leave($__internal_3018847f13fca9129129c2475457017113ae8c58b585c95067a00d6f1d0b262a_prof);

    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_29a134dec83706bd72d855bd5c143ce55f93ad62e08dfe60cca3ed3d145e5b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a134dec83706bd72d855bd5c143ce55f93ad62e08dfe60cca3ed3d145e5b49->enter($__internal_29a134dec83706bd72d855bd5c143ce55f93ad62e08dfe60cca3ed3d145e5b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3250cd9480b30527a339ccd52dc2cab8fc12621c89ef6be6f105bfde77f165dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3250cd9480b30527a339ccd52dc2cab8fc12621c89ef6be6f105bfde77f165dc->enter($__internal_3250cd9480b30527a339ccd52dc2cab8fc12621c89ef6be6f105bfde77f165dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_3250cd9480b30527a339ccd52dc2cab8fc12621c89ef6be6f105bfde77f165dc->leave($__internal_3250cd9480b30527a339ccd52dc2cab8fc12621c89ef6be6f105bfde77f165dc_prof);

        
        $__internal_29a134dec83706bd72d855bd5c143ce55f93ad62e08dfe60cca3ed3d145e5b49->leave($__internal_29a134dec83706bd72d855bd5c143ce55f93ad62e08dfe60cca3ed3d145e5b49_prof);

    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_9220436b250f84dc7e36a97cb64f430318663f2665f3ece4448f697f4fb80dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9220436b250f84dc7e36a97cb64f430318663f2665f3ece4448f697f4fb80dae->enter($__internal_9220436b250f84dc7e36a97cb64f430318663f2665f3ece4448f697f4fb80dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_0640e0c04ef44283859e03ba0997fe186badcc2211d2ca37b0c0eaf1724d4dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0640e0c04ef44283859e03ba0997fe186badcc2211d2ca37b0c0eaf1724d4dff->enter($__internal_0640e0c04ef44283859e03ba0997fe186badcc2211d2ca37b0c0eaf1724d4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

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
        
        $__internal_0640e0c04ef44283859e03ba0997fe186badcc2211d2ca37b0c0eaf1724d4dff->leave($__internal_0640e0c04ef44283859e03ba0997fe186badcc2211d2ca37b0c0eaf1724d4dff_prof);

        
        $__internal_9220436b250f84dc7e36a97cb64f430318663f2665f3ece4448f697f4fb80dae->leave($__internal_9220436b250f84dc7e36a97cb64f430318663f2665f3ece4448f697f4fb80dae_prof);

    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_fe667f2fe4af5e5ef419b74604c87690a01d2e4ad6a285af6b80e4d20a98d439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe667f2fe4af5e5ef419b74604c87690a01d2e4ad6a285af6b80e4d20a98d439->enter($__internal_fe667f2fe4af5e5ef419b74604c87690a01d2e4ad6a285af6b80e4d20a98d439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_eba4e30e0d6cca2017b9bf5aab310f23684dadff931d50e0a8d2e2d254ddbc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba4e30e0d6cca2017b9bf5aab310f23684dadff931d50e0a8d2e2d254ddbc21->enter($__internal_eba4e30e0d6cca2017b9bf5aab310f23684dadff931d50e0a8d2e2d254ddbc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

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
        
        $__internal_eba4e30e0d6cca2017b9bf5aab310f23684dadff931d50e0a8d2e2d254ddbc21->leave($__internal_eba4e30e0d6cca2017b9bf5aab310f23684dadff931d50e0a8d2e2d254ddbc21_prof);

        
        $__internal_fe667f2fe4af5e5ef419b74604c87690a01d2e4ad6a285af6b80e4d20a98d439->leave($__internal_fe667f2fe4af5e5ef419b74604c87690a01d2e4ad6a285af6b80e4d20a98d439_prof);

    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_259341dcd3d0976b0a2c04ef0308e2adcbb1b8917dc28fad470694ec4cff2e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259341dcd3d0976b0a2c04ef0308e2adcbb1b8917dc28fad470694ec4cff2e71->enter($__internal_259341dcd3d0976b0a2c04ef0308e2adcbb1b8917dc28fad470694ec4cff2e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_4e4c986a91a4df80c043a053f613ee9ea60783c020701dfecbe008abc77c3d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4c986a91a4df80c043a053f613ee9ea60783c020701dfecbe008abc77c3d73->enter($__internal_4e4c986a91a4df80c043a053f613ee9ea60783c020701dfecbe008abc77c3d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

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
        
        $__internal_4e4c986a91a4df80c043a053f613ee9ea60783c020701dfecbe008abc77c3d73->leave($__internal_4e4c986a91a4df80c043a053f613ee9ea60783c020701dfecbe008abc77c3d73_prof);

        
        $__internal_259341dcd3d0976b0a2c04ef0308e2adcbb1b8917dc28fad470694ec4cff2e71->leave($__internal_259341dcd3d0976b0a2c04ef0308e2adcbb1b8917dc28fad470694ec4cff2e71_prof);

    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_d48c856308553e479f40f1e1d20188c14510af4cd7df2416b4800fbabad8c34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48c856308553e479f40f1e1d20188c14510af4cd7df2416b4800fbabad8c34e->enter($__internal_d48c856308553e479f40f1e1d20188c14510af4cd7df2416b4800fbabad8c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_9e79763972f85268da895253940aadca8d97be257a1b031190a086d9687349c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e79763972f85268da895253940aadca8d97be257a1b031190a086d9687349c4->enter($__internal_9e79763972f85268da895253940aadca8d97be257a1b031190a086d9687349c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 247
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_9e79763972f85268da895253940aadca8d97be257a1b031190a086d9687349c4->leave($__internal_9e79763972f85268da895253940aadca8d97be257a1b031190a086d9687349c4_prof);

        
        $__internal_d48c856308553e479f40f1e1d20188c14510af4cd7df2416b4800fbabad8c34e->leave($__internal_d48c856308553e479f40f1e1d20188c14510af4cd7df2416b4800fbabad8c34e_prof);

    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        $__internal_11f8ffc77279828c1ec0781c1502cdff6b06cc3dea1415f2cc1df297178b6b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f8ffc77279828c1ec0781c1502cdff6b06cc3dea1415f2cc1df297178b6b00->enter($__internal_11f8ffc77279828c1ec0781c1502cdff6b06cc3dea1415f2cc1df297178b6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_ed97b368a1c18fae20d6b8cfff101679a3c97ebfc24488c484e723b7faf4569e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed97b368a1c18fae20d6b8cfff101679a3c97ebfc24488c484e723b7faf4569e->enter($__internal_ed97b368a1c18fae20d6b8cfff101679a3c97ebfc24488c484e723b7faf4569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

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
        
        $__internal_ed97b368a1c18fae20d6b8cfff101679a3c97ebfc24488c484e723b7faf4569e->leave($__internal_ed97b368a1c18fae20d6b8cfff101679a3c97ebfc24488c484e723b7faf4569e_prof);

        
        $__internal_11f8ffc77279828c1ec0781c1502cdff6b06cc3dea1415f2cc1df297178b6b00->leave($__internal_11f8ffc77279828c1ec0781c1502cdff6b06cc3dea1415f2cc1df297178b6b00_prof);

    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_11d9b435847eedc64f1b254ce4ea4257ca631ea38fe65a856670b91a8958bf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d9b435847eedc64f1b254ce4ea4257ca631ea38fe65a856670b91a8958bf86->enter($__internal_11d9b435847eedc64f1b254ce4ea4257ca631ea38fe65a856670b91a8958bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_1f429591eadccfa5f4284cc60538ab2061eb7bc892c14a702ab77fab8fab98de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f429591eadccfa5f4284cc60538ab2061eb7bc892c14a702ab77fab8fab98de->enter($__internal_1f429591eadccfa5f4284cc60538ab2061eb7bc892c14a702ab77fab8fab98de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

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
        
        $__internal_1f429591eadccfa5f4284cc60538ab2061eb7bc892c14a702ab77fab8fab98de->leave($__internal_1f429591eadccfa5f4284cc60538ab2061eb7bc892c14a702ab77fab8fab98de_prof);

        
        $__internal_11d9b435847eedc64f1b254ce4ea4257ca631ea38fe65a856670b91a8958bf86->leave($__internal_11d9b435847eedc64f1b254ce4ea4257ca631ea38fe65a856670b91a8958bf86_prof);

    }

    // line 305
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_c38648e452944057966c70723a5d5eea66a2c96d9a5ab08c587148dc0be5af8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38648e452944057966c70723a5d5eea66a2c96d9a5ab08c587148dc0be5af8a->enter($__internal_c38648e452944057966c70723a5d5eea66a2c96d9a5ab08c587148dc0be5af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_4e0329f53412dc46d1c55d03b7945f975460864f0af75b1902a695df8fadb550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0329f53412dc46d1c55d03b7945f975460864f0af75b1902a695df8fadb550->enter($__internal_4e0329f53412dc46d1c55d03b7945f975460864f0af75b1902a695df8fadb550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

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
        
        $__internal_4e0329f53412dc46d1c55d03b7945f975460864f0af75b1902a695df8fadb550->leave($__internal_4e0329f53412dc46d1c55d03b7945f975460864f0af75b1902a695df8fadb550_prof);

        
        $__internal_c38648e452944057966c70723a5d5eea66a2c96d9a5ab08c587148dc0be5af8a->leave($__internal_c38648e452944057966c70723a5d5eea66a2c96d9a5ab08c587148dc0be5af8a_prof);

    }

    // line 318
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_4b74968feb01d8b0707a97df76d6456f280628ccd400f3372da6ea77da0424d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b74968feb01d8b0707a97df76d6456f280628ccd400f3372da6ea77da0424d0->enter($__internal_4b74968feb01d8b0707a97df76d6456f280628ccd400f3372da6ea77da0424d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_4738cf47d9f0145439035cc3c873e5f44bf7aafb0ca96552d640777a2f87bcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4738cf47d9f0145439035cc3c873e5f44bf7aafb0ca96552d640777a2f87bcb8->enter($__internal_4738cf47d9f0145439035cc3c873e5f44bf7aafb0ca96552d640777a2f87bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

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
        
        $__internal_4738cf47d9f0145439035cc3c873e5f44bf7aafb0ca96552d640777a2f87bcb8->leave($__internal_4738cf47d9f0145439035cc3c873e5f44bf7aafb0ca96552d640777a2f87bcb8_prof);

        
        $__internal_4b74968feb01d8b0707a97df76d6456f280628ccd400f3372da6ea77da0424d0->leave($__internal_4b74968feb01d8b0707a97df76d6456f280628ccd400f3372da6ea77da0424d0_prof);

    }

    // line 350
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff6611d06c2906f2df008f203197db03f0bb79e10f0d3b11ece62bb78241e8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6611d06c2906f2df008f203197db03f0bb79e10f0d3b11ece62bb78241e8c8->enter($__internal_ff6611d06c2906f2df008f203197db03f0bb79e10f0d3b11ece62bb78241e8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d28c92cae4cb8908658837e850f7bf40336ae7e0461a96710b2155dd1288ac12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28c92cae4cb8908658837e850f7bf40336ae7e0461a96710b2155dd1288ac12->enter($__internal_d28c92cae4cb8908658837e850f7bf40336ae7e0461a96710b2155dd1288ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 351
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 352
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d28c92cae4cb8908658837e850f7bf40336ae7e0461a96710b2155dd1288ac12->leave($__internal_d28c92cae4cb8908658837e850f7bf40336ae7e0461a96710b2155dd1288ac12_prof);

        
        $__internal_ff6611d06c2906f2df008f203197db03f0bb79e10f0d3b11ece62bb78241e8c8->leave($__internal_ff6611d06c2906f2df008f203197db03f0bb79e10f0d3b11ece62bb78241e8c8_prof);

    }

    // line 355
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_51bfba44c28cfee50dea37f0fc18d5abf549e3615e30a8be5944e31d410a0349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bfba44c28cfee50dea37f0fc18d5abf549e3615e30a8be5944e31d410a0349->enter($__internal_51bfba44c28cfee50dea37f0fc18d5abf549e3615e30a8be5944e31d410a0349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3536e1d3799df13db5a399d5939957ceb9825bc797d6ca0f9d69ada45e808f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3536e1d3799df13db5a399d5939957ceb9825bc797d6ca0f9d69ada45e808f2e->enter($__internal_3536e1d3799df13db5a399d5939957ceb9825bc797d6ca0f9d69ada45e808f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 357
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 358
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3536e1d3799df13db5a399d5939957ceb9825bc797d6ca0f9d69ada45e808f2e->leave($__internal_3536e1d3799df13db5a399d5939957ceb9825bc797d6ca0f9d69ada45e808f2e_prof);

        
        $__internal_51bfba44c28cfee50dea37f0fc18d5abf549e3615e30a8be5944e31d410a0349->leave($__internal_51bfba44c28cfee50dea37f0fc18d5abf549e3615e30a8be5944e31d410a0349_prof);

    }

    // line 361
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_19d703f66c8984f96f5f1afb47736d19f8732eb529bdf1f3cc72847736252a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d703f66c8984f96f5f1afb47736d19f8732eb529bdf1f3cc72847736252a5e->enter($__internal_19d703f66c8984f96f5f1afb47736d19f8732eb529bdf1f3cc72847736252a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_399f15a451f74366197d301fe11b12505da887da1476932347dd5c033f2390c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399f15a451f74366197d301fe11b12505da887da1476932347dd5c033f2390c4->enter($__internal_399f15a451f74366197d301fe11b12505da887da1476932347dd5c033f2390c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 362
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_399f15a451f74366197d301fe11b12505da887da1476932347dd5c033f2390c4->leave($__internal_399f15a451f74366197d301fe11b12505da887da1476932347dd5c033f2390c4_prof);

        
        $__internal_19d703f66c8984f96f5f1afb47736d19f8732eb529bdf1f3cc72847736252a5e->leave($__internal_19d703f66c8984f96f5f1afb47736d19f8732eb529bdf1f3cc72847736252a5e_prof);

    }

    // line 365
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_adc4cf03ab14f721f921f6d06c3c2d148f59896a9b8f075276c718370d664e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc4cf03ab14f721f921f6d06c3c2d148f59896a9b8f075276c718370d664e88->enter($__internal_adc4cf03ab14f721f921f6d06c3c2d148f59896a9b8f075276c718370d664e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_51648fc6b97e77a5682e06bb3d0590a9c2391dd4e67f835ae6fdd09a91bcd95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51648fc6b97e77a5682e06bb3d0590a9c2391dd4e67f835ae6fdd09a91bcd95d->enter($__internal_51648fc6b97e77a5682e06bb3d0590a9c2391dd4e67f835ae6fdd09a91bcd95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 366
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_51648fc6b97e77a5682e06bb3d0590a9c2391dd4e67f835ae6fdd09a91bcd95d->leave($__internal_51648fc6b97e77a5682e06bb3d0590a9c2391dd4e67f835ae6fdd09a91bcd95d_prof);

        
        $__internal_adc4cf03ab14f721f921f6d06c3c2d148f59896a9b8f075276c718370d664e88->leave($__internal_adc4cf03ab14f721f921f6d06c3c2d148f59896a9b8f075276c718370d664e88_prof);

    }

    // line 369
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f50be653a69f5abe0d451d971efa2deaab6b1a79374ca01a630f7994d61368c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50be653a69f5abe0d451d971efa2deaab6b1a79374ca01a630f7994d61368c5->enter($__internal_f50be653a69f5abe0d451d971efa2deaab6b1a79374ca01a630f7994d61368c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6291bbc412a69c58daa7a874cdd410080b20e55f4e4952b962ef8277c3c4f090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6291bbc412a69c58daa7a874cdd410080b20e55f4e4952b962ef8277c3c4f090->enter($__internal_6291bbc412a69c58daa7a874cdd410080b20e55f4e4952b962ef8277c3c4f090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_6291bbc412a69c58daa7a874cdd410080b20e55f4e4952b962ef8277c3c4f090->leave($__internal_6291bbc412a69c58daa7a874cdd410080b20e55f4e4952b962ef8277c3c4f090_prof);

        
        $__internal_f50be653a69f5abe0d451d971efa2deaab6b1a79374ca01a630f7994d61368c5->leave($__internal_f50be653a69f5abe0d451d971efa2deaab6b1a79374ca01a630f7994d61368c5_prof);

    }

    // line 390
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_69e32d1b211ddfc5ea7b4b8248539330a45c459cab0520d8119b01ee6ab70e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e32d1b211ddfc5ea7b4b8248539330a45c459cab0520d8119b01ee6ab70e5f->enter($__internal_69e32d1b211ddfc5ea7b4b8248539330a45c459cab0520d8119b01ee6ab70e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a7f4da794b3f076faac5b6d62b216d295331f30ac020a8606aedae8b4a0f6b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f4da794b3f076faac5b6d62b216d295331f30ac020a8606aedae8b4a0f6b67->enter($__internal_a7f4da794b3f076faac5b6d62b216d295331f30ac020a8606aedae8b4a0f6b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a7f4da794b3f076faac5b6d62b216d295331f30ac020a8606aedae8b4a0f6b67->leave($__internal_a7f4da794b3f076faac5b6d62b216d295331f30ac020a8606aedae8b4a0f6b67_prof);

        
        $__internal_69e32d1b211ddfc5ea7b4b8248539330a45c459cab0520d8119b01ee6ab70e5f->leave($__internal_69e32d1b211ddfc5ea7b4b8248539330a45c459cab0520d8119b01ee6ab70e5f_prof);

    }

    // line 398
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4df790ceab82dcf87ddae2d5a8310db3907c9c36c156a26a5313c91cf095deb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df790ceab82dcf87ddae2d5a8310db3907c9c36c156a26a5313c91cf095deb4->enter($__internal_4df790ceab82dcf87ddae2d5a8310db3907c9c36c156a26a5313c91cf095deb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d91524dc550088093b26ae04c1ded863cbb6f4eee6b3a0cab97200db0ab2718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91524dc550088093b26ae04c1ded863cbb6f4eee6b3a0cab97200db0ab2718a->enter($__internal_d91524dc550088093b26ae04c1ded863cbb6f4eee6b3a0cab97200db0ab2718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 399
        echo "<div class=\"form-group\">";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 401
        echo "</div>";
        
        $__internal_d91524dc550088093b26ae04c1ded863cbb6f4eee6b3a0cab97200db0ab2718a->leave($__internal_d91524dc550088093b26ae04c1ded863cbb6f4eee6b3a0cab97200db0ab2718a_prof);

        
        $__internal_4df790ceab82dcf87ddae2d5a8310db3907c9c36c156a26a5313c91cf095deb4->leave($__internal_4df790ceab82dcf87ddae2d5a8310db3907c9c36c156a26a5313c91cf095deb4_prof);

    }

    // line 404
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_348b8fe169784e84f873fbdd77905e37e75d893db4acba7fcc0e239f2af7682e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348b8fe169784e84f873fbdd77905e37e75d893db4acba7fcc0e239f2af7682e->enter($__internal_348b8fe169784e84f873fbdd77905e37e75d893db4acba7fcc0e239f2af7682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_65d8242fb8c3f46a4a711da0078af358850f7459062f27dc37a38d5c2c67d5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d8242fb8c3f46a4a711da0078af358850f7459062f27dc37a38d5c2c67d5e5->enter($__internal_65d8242fb8c3f46a4a711da0078af358850f7459062f27dc37a38d5c2c67d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 405
        $context["force_error"] = true;
        // line 406
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_65d8242fb8c3f46a4a711da0078af358850f7459062f27dc37a38d5c2c67d5e5->leave($__internal_65d8242fb8c3f46a4a711da0078af358850f7459062f27dc37a38d5c2c67d5e5_prof);

        
        $__internal_348b8fe169784e84f873fbdd77905e37e75d893db4acba7fcc0e239f2af7682e->leave($__internal_348b8fe169784e84f873fbdd77905e37e75d893db4acba7fcc0e239f2af7682e_prof);

    }

    // line 409
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4ead9553ba378b7a44d3886de4fd926614dbe424bd337c11cd6fd4c4868f6aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ead9553ba378b7a44d3886de4fd926614dbe424bd337c11cd6fd4c4868f6aa8->enter($__internal_4ead9553ba378b7a44d3886de4fd926614dbe424bd337c11cd6fd4c4868f6aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6753106d11b7ade503462d657c1cd8a7419e0b80b63c2dff7d5a0fac9236575a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6753106d11b7ade503462d657c1cd8a7419e0b80b63c2dff7d5a0fac9236575a->enter($__internal_6753106d11b7ade503462d657c1cd8a7419e0b80b63c2dff7d5a0fac9236575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 410
        $context["force_error"] = true;
        // line 411
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6753106d11b7ade503462d657c1cd8a7419e0b80b63c2dff7d5a0fac9236575a->leave($__internal_6753106d11b7ade503462d657c1cd8a7419e0b80b63c2dff7d5a0fac9236575a_prof);

        
        $__internal_4ead9553ba378b7a44d3886de4fd926614dbe424bd337c11cd6fd4c4868f6aa8->leave($__internal_4ead9553ba378b7a44d3886de4fd926614dbe424bd337c11cd6fd4c4868f6aa8_prof);

    }

    // line 414
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_49edb3aecf560d8d90a6851f176be0fe55ee67f5c0a965420df2e151ea346abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49edb3aecf560d8d90a6851f176be0fe55ee67f5c0a965420df2e151ea346abd->enter($__internal_49edb3aecf560d8d90a6851f176be0fe55ee67f5c0a965420df2e151ea346abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_77d489a400fa2f8f4dab09866fd7c5113be632b67c6666fb26901beb27ef4f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d489a400fa2f8f4dab09866fd7c5113be632b67c6666fb26901beb27ef4f27->enter($__internal_77d489a400fa2f8f4dab09866fd7c5113be632b67c6666fb26901beb27ef4f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 415
        $context["force_error"] = true;
        // line 416
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_77d489a400fa2f8f4dab09866fd7c5113be632b67c6666fb26901beb27ef4f27->leave($__internal_77d489a400fa2f8f4dab09866fd7c5113be632b67c6666fb26901beb27ef4f27_prof);

        
        $__internal_49edb3aecf560d8d90a6851f176be0fe55ee67f5c0a965420df2e151ea346abd->leave($__internal_49edb3aecf560d8d90a6851f176be0fe55ee67f5c0a965420df2e151ea346abd_prof);

    }

    // line 419
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_407da4caa3af306537a30aa4af829f534bb176ffc9739f8b0f9fd0655f71046b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407da4caa3af306537a30aa4af829f534bb176ffc9739f8b0f9fd0655f71046b->enter($__internal_407da4caa3af306537a30aa4af829f534bb176ffc9739f8b0f9fd0655f71046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8dc3336388820580328b664755a379c008bede4507d9bc6115c7fcd642ffaf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc3336388820580328b664755a379c008bede4507d9bc6115c7fcd642ffaf2c->enter($__internal_8dc3336388820580328b664755a379c008bede4507d9bc6115c7fcd642ffaf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 420
        $context["force_error"] = true;
        // line 421
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8dc3336388820580328b664755a379c008bede4507d9bc6115c7fcd642ffaf2c->leave($__internal_8dc3336388820580328b664755a379c008bede4507d9bc6115c7fcd642ffaf2c_prof);

        
        $__internal_407da4caa3af306537a30aa4af829f534bb176ffc9739f8b0f9fd0655f71046b->leave($__internal_407da4caa3af306537a30aa4af829f534bb176ffc9739f8b0f9fd0655f71046b_prof);

    }

    // line 424
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9709bac8a9a1285bfd06d4062d044d0c957bbbc11632ca6486fc614afc7ed0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9709bac8a9a1285bfd06d4062d044d0c957bbbc11632ca6486fc614afc7ed0cf->enter($__internal_9709bac8a9a1285bfd06d4062d044d0c957bbbc11632ca6486fc614afc7ed0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c4150cbac6f32f7198cacf9cf1898d109a26511493297cba1c581463c5497372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4150cbac6f32f7198cacf9cf1898d109a26511493297cba1c581463c5497372->enter($__internal_c4150cbac6f32f7198cacf9cf1898d109a26511493297cba1c581463c5497372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c4150cbac6f32f7198cacf9cf1898d109a26511493297cba1c581463c5497372->leave($__internal_c4150cbac6f32f7198cacf9cf1898d109a26511493297cba1c581463c5497372_prof);

        
        $__internal_9709bac8a9a1285bfd06d4062d044d0c957bbbc11632ca6486fc614afc7ed0cf->leave($__internal_9709bac8a9a1285bfd06d4062d044d0c957bbbc11632ca6486fc614afc7ed0cf_prof);

    }

    // line 431
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ab7c348aed05190891593448dd088d4908d5a88d344c3cc0a4589f1d3cc9f982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7c348aed05190891593448dd088d4908d5a88d344c3cc0a4589f1d3cc9f982->enter($__internal_ab7c348aed05190891593448dd088d4908d5a88d344c3cc0a4589f1d3cc9f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9b5343457e072a11d40b7a2441d86b63fcb6332f127ef2e4c8921b9ad8d355a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5343457e072a11d40b7a2441d86b63fcb6332f127ef2e4c8921b9ad8d355a9->enter($__internal_9b5343457e072a11d40b7a2441d86b63fcb6332f127ef2e4c8921b9ad8d355a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_9b5343457e072a11d40b7a2441d86b63fcb6332f127ef2e4c8921b9ad8d355a9->leave($__internal_9b5343457e072a11d40b7a2441d86b63fcb6332f127ef2e4c8921b9ad8d355a9_prof);

        
        $__internal_ab7c348aed05190891593448dd088d4908d5a88d344c3cc0a4589f1d3cc9f982->leave($__internal_ab7c348aed05190891593448dd088d4908d5a88d344c3cc0a4589f1d3cc9f982_prof);

    }

    // line 440
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cfee53904ff0d161cfbd5cf5a9bf6a7e9a88c5f8ab03e906c905a2202d8dfb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfee53904ff0d161cfbd5cf5a9bf6a7e9a88c5f8ab03e906c905a2202d8dfb32->enter($__internal_cfee53904ff0d161cfbd5cf5a9bf6a7e9a88c5f8ab03e906c905a2202d8dfb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0c44bea0f00d70cedd1f2a0a1b0d676fb150c002a4618244da65ebbd69a33221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c44bea0f00d70cedd1f2a0a1b0d676fb150c002a4618244da65ebbd69a33221->enter($__internal_0c44bea0f00d70cedd1f2a0a1b0d676fb150c002a4618244da65ebbd69a33221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_0c44bea0f00d70cedd1f2a0a1b0d676fb150c002a4618244da65ebbd69a33221->leave($__internal_0c44bea0f00d70cedd1f2a0a1b0d676fb150c002a4618244da65ebbd69a33221_prof);

        
        $__internal_cfee53904ff0d161cfbd5cf5a9bf6a7e9a88c5f8ab03e906c905a2202d8dfb32->leave($__internal_cfee53904ff0d161cfbd5cf5a9bf6a7e9a88c5f8ab03e906c905a2202d8dfb32_prof);

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
