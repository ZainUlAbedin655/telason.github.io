<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7e2f3e76c600a8a144ce3889e77f94623b86be90ce24ea27555bbe00d965d818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'text_with_unit_widget' => array($this, 'block_text_with_unit_widget'),
                'ip_address_text_widget' => array($this, 'block_ip_address_text_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abceaf69cc1b2745eb7bc661a89163b0966e96ca08345aa21b92834c392a47ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abceaf69cc1b2745eb7bc661a89163b0966e96ca08345aa21b92834c392a47ec->enter($__internal_abceaf69cc1b2745eb7bc661a89163b0966e96ca08345aa21b92834c392a47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        $__internal_6f2fd4be430658a363b2b95eb484a87257c727e6809a0885792631ab590712d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2fd4be430658a363b2b95eb484a87257c727e6809a0885792631ab590712d5->enter($__internal_6f2fd4be430658a363b2b95eb484a87257c727e6809a0885792631ab590712d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('switch_widget', $context, $blocks);
        
        $__internal_abceaf69cc1b2745eb7bc661a89163b0966e96ca08345aa21b92834c392a47ec->leave($__internal_abceaf69cc1b2745eb7bc661a89163b0966e96ca08345aa21b92834c392a47ec_prof);

        
        $__internal_6f2fd4be430658a363b2b95eb484a87257c727e6809a0885792631ab590712d5->leave($__internal_6f2fd4be430658a363b2b95eb484a87257c727e6809a0885792631ab590712d5_prof);

    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9be40cef5063bfeddfc89ce00c547e4a50426c9063c419dc50c1ee14a4f5c244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be40cef5063bfeddfc89ce00c547e4a50426c9063c419dc50c1ee14a4f5c244->enter($__internal_9be40cef5063bfeddfc89ce00c547e4a50426c9063c419dc50c1ee14a4f5c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_be624df8169e13fb68bab8656f19c0736fc88fca8c707dea2fde385aeae00005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be624df8169e13fb68bab8656f19c0736fc88fca8c707dea2fde385aeae00005->enter($__internal_be624df8169e13fb68bab8656f19c0736fc88fca8c707dea2fde385aeae00005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_be624df8169e13fb68bab8656f19c0736fc88fca8c707dea2fde385aeae00005->leave($__internal_be624df8169e13fb68bab8656f19c0736fc88fca8c707dea2fde385aeae00005_prof);

        
        $__internal_9be40cef5063bfeddfc89ce00c547e4a50426c9063c419dc50c1ee14a4f5c244->leave($__internal_9be40cef5063bfeddfc89ce00c547e4a50426c9063c419dc50c1ee14a4f5c244_prof);

    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f9c3483bb49bc4bd1f984389d46ceef0d64fb2901ee4c3857f010e4d8fd28f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c3483bb49bc4bd1f984389d46ceef0d64fb2901ee4c3857f010e4d8fd28f66->enter($__internal_f9c3483bb49bc4bd1f984389d46ceef0d64fb2901ee4c3857f010e4d8fd28f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_af20394aed94402b01b492110f77ea61d863c15bda9f6a9018eb262d85bc8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af20394aed94402b01b492110f77ea61d863c15bda9f6a9018eb262d85bc8495->enter($__internal_af20394aed94402b01b492110f77ea61d863c15bda9f6a9018eb262d85bc8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 34
        ob_start();
        // line 35
        echo "        ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_af20394aed94402b01b492110f77ea61d863c15bda9f6a9018eb262d85bc8495->leave($__internal_af20394aed94402b01b492110f77ea61d863c15bda9f6a9018eb262d85bc8495_prof);

        
        $__internal_f9c3483bb49bc4bd1f984389d46ceef0d64fb2901ee4c3857f010e4d8fd28f66->leave($__internal_f9c3483bb49bc4bd1f984389d46ceef0d64fb2901ee4c3857f010e4d8fd28f66_prof);

    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ae4edba10f978cf5d30f4cd9b1c1d880b901aa0e67e33fc2b269fe513028d475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4edba10f978cf5d30f4cd9b1c1d880b901aa0e67e33fc2b269fe513028d475->enter($__internal_ae4edba10f978cf5d30f4cd9b1c1d880b901aa0e67e33fc2b269fe513028d475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f2088d752c9e166e60012ed95aaeb3575c1932307aefc2aa0f60d9f99b7d4cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2088d752c9e166e60012ed95aaeb3575c1932307aefc2aa0f60d9f99b7d4cc5->enter($__internal_f2088d752c9e166e60012ed95aaeb3575c1932307aefc2aa0f60d9f99b7d4cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        echo "col-sm-2";
        
        $__internal_f2088d752c9e166e60012ed95aaeb3575c1932307aefc2aa0f60d9f99b7d4cc5->leave($__internal_f2088d752c9e166e60012ed95aaeb3575c1932307aefc2aa0f60d9f99b7d4cc5_prof);

        
        $__internal_ae4edba10f978cf5d30f4cd9b1c1d880b901aa0e67e33fc2b269fe513028d475->leave($__internal_ae4edba10f978cf5d30f4cd9b1c1d880b901aa0e67e33fc2b269fe513028d475_prof);

    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4ade93db3dc69d2a5be5272551c1eaa7ba3325e0cde9753848d73c18f34583e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ade93db3dc69d2a5be5272551c1eaa7ba3325e0cde9753848d73c18f34583e8->enter($__internal_4ade93db3dc69d2a5be5272551c1eaa7ba3325e0cde9753848d73c18f34583e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0ccb51d73a7cd6954a307b174e86dba3912b07c276588a231585a32fdfb20924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccb51d73a7cd6954a307b174e86dba3912b07c276588a231585a32fdfb20924->enter($__internal_0ccb51d73a7cd6954a307b174e86dba3912b07c276588a231585a32fdfb20924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ccb51d73a7cd6954a307b174e86dba3912b07c276588a231585a32fdfb20924->leave($__internal_0ccb51d73a7cd6954a307b174e86dba3912b07c276588a231585a32fdfb20924_prof);

        
        $__internal_4ade93db3dc69d2a5be5272551c1eaa7ba3325e0cde9753848d73c18f34583e8->leave($__internal_4ade93db3dc69d2a5be5272551c1eaa7ba3325e0cde9753848d73c18f34583e8_prof);

    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c33cfbcfa79c121c0e2e12debae29918cbe3786eee54b8d4fd0a3ebfdaa77590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33cfbcfa79c121c0e2e12debae29918cbe3786eee54b8d4fd0a3ebfdaa77590->enter($__internal_c33cfbcfa79c121c0e2e12debae29918cbe3786eee54b8d4fd0a3ebfdaa77590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_32153ef28c6a0460186578d5934bfdf453154ec6f1143f7e53898f7f7b55bda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32153ef28c6a0460186578d5934bfdf453154ec6f1143f7e53898f7f7b55bda4->enter($__internal_32153ef28c6a0460186578d5934bfdf453154ec6f1143f7e53898f7f7b55bda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_32153ef28c6a0460186578d5934bfdf453154ec6f1143f7e53898f7f7b55bda4->leave($__internal_32153ef28c6a0460186578d5934bfdf453154ec6f1143f7e53898f7f7b55bda4_prof);

        
        $__internal_c33cfbcfa79c121c0e2e12debae29918cbe3786eee54b8d4fd0a3ebfdaa77590->leave($__internal_c33cfbcfa79c121c0e2e12debae29918cbe3786eee54b8d4fd0a3ebfdaa77590_prof);

    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b00ebffae8e8d8b583932ca8692fc250e1454714c5bff6a142828f06ef6a2757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00ebffae8e8d8b583932ca8692fc250e1454714c5bff6a142828f06ef6a2757->enter($__internal_b00ebffae8e8d8b583932ca8692fc250e1454714c5bff6a142828f06ef6a2757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e762cc614afbff50519c96a6b211f23b70a3a374959e3f179fa57d09786f4870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e762cc614afbff50519c96a6b211f23b70a3a374959e3f179fa57d09786f4870->enter($__internal_e762cc614afbff50519c96a6b211f23b70a3a374959e3f179fa57d09786f4870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e762cc614afbff50519c96a6b211f23b70a3a374959e3f179fa57d09786f4870->leave($__internal_e762cc614afbff50519c96a6b211f23b70a3a374959e3f179fa57d09786f4870_prof);

        
        $__internal_b00ebffae8e8d8b583932ca8692fc250e1454714c5bff6a142828f06ef6a2757->leave($__internal_b00ebffae8e8d8b583932ca8692fc250e1454714c5bff6a142828f06ef6a2757_prof);

    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a13482444d13c6bdadbaf7d02b415e8a0923160da4eebeae069b41c3a5584a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13482444d13c6bdadbaf7d02b415e8a0923160da4eebeae069b41c3a5584a1a->enter($__internal_a13482444d13c6bdadbaf7d02b415e8a0923160da4eebeae069b41c3a5584a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_149f261db1e103f0578241c4b390d75ed2e59c3c1b047cf79736d7c58badf222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149f261db1e103f0578241c4b390d75ed2e59c3c1b047cf79736d7c58badf222->enter($__internal_149f261db1e103f0578241c4b390d75ed2e59c3c1b047cf79736d7c58badf222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_149f261db1e103f0578241c4b390d75ed2e59c3c1b047cf79736d7c58badf222->leave($__internal_149f261db1e103f0578241c4b390d75ed2e59c3c1b047cf79736d7c58badf222_prof);

        
        $__internal_a13482444d13c6bdadbaf7d02b415e8a0923160da4eebeae069b41c3a5584a1a->leave($__internal_a13482444d13c6bdadbaf7d02b415e8a0923160da4eebeae069b41c3a5584a1a_prof);

    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f340f625b9732456162df25632e90179cc2b8c41eeb8a6ec091a0a8bcd6eed0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f340f625b9732456162df25632e90179cc2b8c41eeb8a6ec091a0a8bcd6eed0e->enter($__internal_f340f625b9732456162df25632e90179cc2b8c41eeb8a6ec091a0a8bcd6eed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6c5e3e4dbf2dc0c06b1ff3b39e167532aa11ca626bb95a9f51a2aa031a0665fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5e3e4dbf2dc0c06b1ff3b39e167532aa11ca626bb95a9f51a2aa031a0665fd->enter($__internal_6c5e3e4dbf2dc0c06b1ff3b39e167532aa11ca626bb95a9f51a2aa031a0665fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6c5e3e4dbf2dc0c06b1ff3b39e167532aa11ca626bb95a9f51a2aa031a0665fd->leave($__internal_6c5e3e4dbf2dc0c06b1ff3b39e167532aa11ca626bb95a9f51a2aa031a0665fd_prof);

        
        $__internal_f340f625b9732456162df25632e90179cc2b8c41eeb8a6ec091a0a8bcd6eed0e->leave($__internal_f340f625b9732456162df25632e90179cc2b8c41eeb8a6ec091a0a8bcd6eed0e_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_968d3aece85922a919850c6a089265172ac7e33383f7a04cd43f3f0f55c7f540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968d3aece85922a919850c6a089265172ac7e33383f7a04cd43f3f0f55c7f540->enter($__internal_968d3aece85922a919850c6a089265172ac7e33383f7a04cd43f3f0f55c7f540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_52fa8d53510abf9f5a9069891d4c3ccf2b578bf4e55a6152ee32cb6bbb5a281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fa8d53510abf9f5a9069891d4c3ccf2b578bf4e55a6152ee32cb6bbb5a281c->enter($__internal_52fa8d53510abf9f5a9069891d4c3ccf2b578bf4e55a6152ee32cb6bbb5a281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_52fa8d53510abf9f5a9069891d4c3ccf2b578bf4e55a6152ee32cb6bbb5a281c->leave($__internal_52fa8d53510abf9f5a9069891d4c3ccf2b578bf4e55a6152ee32cb6bbb5a281c_prof);

        
        $__internal_968d3aece85922a919850c6a089265172ac7e33383f7a04cd43f3f0f55c7f540->leave($__internal_968d3aece85922a919850c6a089265172ac7e33383f7a04cd43f3f0f55c7f540_prof);

    }

    // line 97
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        $__internal_1c454c2df4b1dcba786e5040049afcf8435a500b207e5f4bfee422b74ef61fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c454c2df4b1dcba786e5040049afcf8435a500b207e5f4bfee422b74ef61fbc->enter($__internal_1c454c2df4b1dcba786e5040049afcf8435a500b207e5f4bfee422b74ef61fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        $__internal_80e637921fbaf1f1e29d8f10c38c6ffad23d1a694823cf6a5e49309a5034c59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e637921fbaf1f1e29d8f10c38c6ffad23d1a694823cf6a5e49309a5034c59b->enter($__internal_80e637921fbaf1f1e29d8f10c38c6ffad23d1a694823cf6a5e49309a5034c59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        // line 98
        echo "<div class=\"input-group\">";
        // line 99
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 100
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "unit", array(), "any", true, true)) {
            // line 101
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "unit", array()), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 105
        echo "</div>
";
        
        $__internal_80e637921fbaf1f1e29d8f10c38c6ffad23d1a694823cf6a5e49309a5034c59b->leave($__internal_80e637921fbaf1f1e29d8f10c38c6ffad23d1a694823cf6a5e49309a5034c59b_prof);

        
        $__internal_1c454c2df4b1dcba786e5040049afcf8435a500b207e5f4bfee422b74ef61fbc->leave($__internal_1c454c2df4b1dcba786e5040049afcf8435a500b207e5f4bfee422b74ef61fbc_prof);

    }

    // line 108
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        $__internal_4168615d7afba85c79920a6996238a6e1bd90576aa7a0761ab22efb9e0176183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4168615d7afba85c79920a6996238a6e1bd90576aa7a0761ab22efb9e0176183->enter($__internal_4168615d7afba85c79920a6996238a6e1bd90576aa7a0761ab22efb9e0176183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_c3d556f5a00412e7878afc6d7ed01c8392cec2c3de7c4643c245a06255949b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d556f5a00412e7878afc6d7ed01c8392cec2c3de7c4643c245a06255949b2c->enter($__internal_c3d556f5a00412e7878afc6d7ed01c8392cec2c3de7c4643c245a06255949b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 109
        echo "<div class=\"input-group\">";
        // line 110
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 111
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? $this->getContext($context, "currentIp")), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", array(), "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_c3d556f5a00412e7878afc6d7ed01c8392cec2c3de7c4643c245a06255949b2c->leave($__internal_c3d556f5a00412e7878afc6d7ed01c8392cec2c3de7c4643c245a06255949b2c_prof);

        
        $__internal_4168615d7afba85c79920a6996238a6e1bd90576aa7a0761ab22efb9e0176183->leave($__internal_4168615d7afba85c79920a6996238a6e1bd90576aa7a0761ab22efb9e0176183_prof);

    }

    // line 117
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_80bb4e555ecf4490783274a04e5d60038886bc10e6f164db60996c6f90aca6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bb4e555ecf4490783274a04e5d60038886bc10e6f164db60996c6f90aca6e4->enter($__internal_80bb4e555ecf4490783274a04e5d60038886bc10e6f164db60996c6f90aca6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_c64610a93f23c87e0f30216a63ce3f42e766f0fda067e42baab3ba14ff696017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64610a93f23c87e0f30216a63ce3f42e766f0fda067e42baab3ba14ff696017->enter($__internal_c64610a93f23c87e0f30216a63ce3f42e766f0fda067e42baab3ba14ff696017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 118
        echo "<div class=\"input-group\">";
        // line 119
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 120
        echo "</div>
";
        
        $__internal_c64610a93f23c87e0f30216a63ce3f42e766f0fda067e42baab3ba14ff696017->leave($__internal_c64610a93f23c87e0f30216a63ce3f42e766f0fda067e42baab3ba14ff696017_prof);

        
        $__internal_80bb4e555ecf4490783274a04e5d60038886bc10e6f164db60996c6f90aca6e4->leave($__internal_80bb4e555ecf4490783274a04e5d60038886bc10e6f164db60996c6f90aca6e4_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  461 => 120,  459 => 119,  457 => 118,  448 => 117,  434 => 112,  429 => 111,  427 => 110,  425 => 109,  416 => 108,  405 => 105,  399 => 102,  396 => 101,  394 => 100,  392 => 99,  390 => 98,  381 => 97,  371 => 94,  362 => 93,  347 => 87,  343 => 86,  339 => 85,  336 => 84,  334 => 83,  325 => 82,  310 => 76,  306 => 75,  302 => 74,  298 => 73,  291 => 72,  289 => 71,  280 => 70,  270 => 67,  261 => 66,  251 => 63,  242 => 62,  227 => 56,  223 => 55,  219 => 54,  215 => 53,  208 => 52,  206 => 51,  197 => 50,  187 => 45,  178 => 44,  167 => 41,  164 => 39,  161 => 38,  155 => 36,  152 => 35,  150 => 34,  141 => 33,  131 => 28,  129 => 27,  120 => 26,  110 => 117,  107 => 116,  105 => 108,  102 => 107,  100 => 97,  97 => 96,  95 => 93,  92 => 92,  90 => 82,  87 => 81,  85 => 70,  82 => 69,  80 => 66,  77 => 65,  75 => 62,  72 => 61,  70 => 50,  67 => 49,  64 => 47,  62 => 44,  59 => 43,  57 => 33,  54 => 32,  51 => 30,  49 => 26,  14 => 25,);
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
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig\" %}
{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {% spaceless %}
        {% if label is same as(false) %}
            <div class=\"{{ block('form_label_class') }}\"></div>
        {% else %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
            {{- parent() -}}
        {% endif %}
    {% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
    col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {% spaceless %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{ form_label(form) }}
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
    {% spaceless %}
        <div class=\"form-group{% if not valid %} has-error{% endif %}\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
    {% spaceless %}
        <div class=\"form-group\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
            </div>
        </div>
    {% endspaceless %}
{% endblock submit_row %}

{% block form_group_class -%}
    col-sm-10
{%- endblock form_group_class %}

{% block text_with_unit_widget %}
<div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    {% if form.vars.unit is defined %}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">{{ form.vars.unit }}</span>
        </div>
    {% endif %}
</div>
{% endblock text_with_unit_widget %}

{% block ip_address_text_widget %}
<div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
        <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
</div>
{% endblock ip_address_text_widget %}

{% block switch_widget %}
<div class=\"input-group\">
    {{- parent() -}}
</div>
{% endblock switch_widget %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "/home/telaso5/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
