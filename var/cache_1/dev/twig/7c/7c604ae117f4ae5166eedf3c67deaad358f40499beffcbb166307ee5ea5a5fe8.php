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
        $__internal_bd43234d104005ce0dd98d8689dfc7ebc595c358792d06dfcb72c5e10996627e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd43234d104005ce0dd98d8689dfc7ebc595c358792d06dfcb72c5e10996627e->enter($__internal_bd43234d104005ce0dd98d8689dfc7ebc595c358792d06dfcb72c5e10996627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

        $__internal_5449f321c220544af0c9ec855bfc0e343120ec68d241be103d352b9e65be5c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5449f321c220544af0c9ec855bfc0e343120ec68d241be103d352b9e65be5c52->enter($__internal_5449f321c220544af0c9ec855bfc0e343120ec68d241be103d352b9e65be5c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_bd43234d104005ce0dd98d8689dfc7ebc595c358792d06dfcb72c5e10996627e->leave($__internal_bd43234d104005ce0dd98d8689dfc7ebc595c358792d06dfcb72c5e10996627e_prof);

        
        $__internal_5449f321c220544af0c9ec855bfc0e343120ec68d241be103d352b9e65be5c52->leave($__internal_5449f321c220544af0c9ec855bfc0e343120ec68d241be103d352b9e65be5c52_prof);

    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b7a02d25019f3cdcdb1234818fc006413f478b5d73a39c8c68ecaa7b80feea3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a02d25019f3cdcdb1234818fc006413f478b5d73a39c8c68ecaa7b80feea3b->enter($__internal_b7a02d25019f3cdcdb1234818fc006413f478b5d73a39c8c68ecaa7b80feea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ed4c5fd78823ad5c4e6de4b7e8ac7bde6ff89e979fe05961b745d4db7e48da71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4c5fd78823ad5c4e6de4b7e8ac7bde6ff89e979fe05961b745d4db7e48da71->enter($__internal_ed4c5fd78823ad5c4e6de4b7e8ac7bde6ff89e979fe05961b745d4db7e48da71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ed4c5fd78823ad5c4e6de4b7e8ac7bde6ff89e979fe05961b745d4db7e48da71->leave($__internal_ed4c5fd78823ad5c4e6de4b7e8ac7bde6ff89e979fe05961b745d4db7e48da71_prof);

        
        $__internal_b7a02d25019f3cdcdb1234818fc006413f478b5d73a39c8c68ecaa7b80feea3b->leave($__internal_b7a02d25019f3cdcdb1234818fc006413f478b5d73a39c8c68ecaa7b80feea3b_prof);

    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_251ef18e92d3488d4eca982d977d2987e6c5e5db6d1228c66aee737c62ab27ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251ef18e92d3488d4eca982d977d2987e6c5e5db6d1228c66aee737c62ab27ef->enter($__internal_251ef18e92d3488d4eca982d977d2987e6c5e5db6d1228c66aee737c62ab27ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_010d361284f9333f70d8bcc448471859850058f46836ec93a1f7e0a4dd7eca33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d361284f9333f70d8bcc448471859850058f46836ec93a1f7e0a4dd7eca33->enter($__internal_010d361284f9333f70d8bcc448471859850058f46836ec93a1f7e0a4dd7eca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_010d361284f9333f70d8bcc448471859850058f46836ec93a1f7e0a4dd7eca33->leave($__internal_010d361284f9333f70d8bcc448471859850058f46836ec93a1f7e0a4dd7eca33_prof);

        
        $__internal_251ef18e92d3488d4eca982d977d2987e6c5e5db6d1228c66aee737c62ab27ef->leave($__internal_251ef18e92d3488d4eca982d977d2987e6c5e5db6d1228c66aee737c62ab27ef_prof);

    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c3eb30bedeb5b99a221b755072c202268c160d2aef608c2ec91d41981cfeb750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3eb30bedeb5b99a221b755072c202268c160d2aef608c2ec91d41981cfeb750->enter($__internal_c3eb30bedeb5b99a221b755072c202268c160d2aef608c2ec91d41981cfeb750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cfc6acef4759e6259839b2d53916f0182e842c79cec6e0368d4336aab15f243c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc6acef4759e6259839b2d53916f0182e842c79cec6e0368d4336aab15f243c->enter($__internal_cfc6acef4759e6259839b2d53916f0182e842c79cec6e0368d4336aab15f243c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        echo "col-sm-2";
        
        $__internal_cfc6acef4759e6259839b2d53916f0182e842c79cec6e0368d4336aab15f243c->leave($__internal_cfc6acef4759e6259839b2d53916f0182e842c79cec6e0368d4336aab15f243c_prof);

        
        $__internal_c3eb30bedeb5b99a221b755072c202268c160d2aef608c2ec91d41981cfeb750->leave($__internal_c3eb30bedeb5b99a221b755072c202268c160d2aef608c2ec91d41981cfeb750_prof);

    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e3bb4eb9dbc975903132ca38a3402daa8ed67a875308f739c9f9ed936fc9cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bb4eb9dbc975903132ca38a3402daa8ed67a875308f739c9f9ed936fc9cd4e->enter($__internal_e3bb4eb9dbc975903132ca38a3402daa8ed67a875308f739c9f9ed936fc9cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a6d93183e099b2f44dfdcaf9f5457685dd2e08a8e05ae794ede49d1cb1c149a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d93183e099b2f44dfdcaf9f5457685dd2e08a8e05ae794ede49d1cb1c149a3->enter($__internal_a6d93183e099b2f44dfdcaf9f5457685dd2e08a8e05ae794ede49d1cb1c149a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a6d93183e099b2f44dfdcaf9f5457685dd2e08a8e05ae794ede49d1cb1c149a3->leave($__internal_a6d93183e099b2f44dfdcaf9f5457685dd2e08a8e05ae794ede49d1cb1c149a3_prof);

        
        $__internal_e3bb4eb9dbc975903132ca38a3402daa8ed67a875308f739c9f9ed936fc9cd4e->leave($__internal_e3bb4eb9dbc975903132ca38a3402daa8ed67a875308f739c9f9ed936fc9cd4e_prof);

    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6259cfce59d2245358179e8ecc2984be4b0d69e314de86bd788b2f11bec7b376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6259cfce59d2245358179e8ecc2984be4b0d69e314de86bd788b2f11bec7b376->enter($__internal_6259cfce59d2245358179e8ecc2984be4b0d69e314de86bd788b2f11bec7b376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f596611e587ca18f6c640dd87bbffe13ff33c2880d284cce39d31343b6b61acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f596611e587ca18f6c640dd87bbffe13ff33c2880d284cce39d31343b6b61acc->enter($__internal_f596611e587ca18f6c640dd87bbffe13ff33c2880d284cce39d31343b6b61acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_f596611e587ca18f6c640dd87bbffe13ff33c2880d284cce39d31343b6b61acc->leave($__internal_f596611e587ca18f6c640dd87bbffe13ff33c2880d284cce39d31343b6b61acc_prof);

        
        $__internal_6259cfce59d2245358179e8ecc2984be4b0d69e314de86bd788b2f11bec7b376->leave($__internal_6259cfce59d2245358179e8ecc2984be4b0d69e314de86bd788b2f11bec7b376_prof);

    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5bf4cbf1cb65e1a04c6d8b2ac6abf42e0c2ca2280b014742b640838eceadb393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf4cbf1cb65e1a04c6d8b2ac6abf42e0c2ca2280b014742b640838eceadb393->enter($__internal_5bf4cbf1cb65e1a04c6d8b2ac6abf42e0c2ca2280b014742b640838eceadb393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_32675913d183dec6718199bf9f3236b96388f0502ebc6f722e0e5a4bc5840391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32675913d183dec6718199bf9f3236b96388f0502ebc6f722e0e5a4bc5840391->enter($__internal_32675913d183dec6718199bf9f3236b96388f0502ebc6f722e0e5a4bc5840391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_32675913d183dec6718199bf9f3236b96388f0502ebc6f722e0e5a4bc5840391->leave($__internal_32675913d183dec6718199bf9f3236b96388f0502ebc6f722e0e5a4bc5840391_prof);

        
        $__internal_5bf4cbf1cb65e1a04c6d8b2ac6abf42e0c2ca2280b014742b640838eceadb393->leave($__internal_5bf4cbf1cb65e1a04c6d8b2ac6abf42e0c2ca2280b014742b640838eceadb393_prof);

    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_3d7998aa6d842ff208dcc7bfab76136c06ee56eee3e6880c0e06d51c1881dcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7998aa6d842ff208dcc7bfab76136c06ee56eee3e6880c0e06d51c1881dcf1->enter($__internal_3d7998aa6d842ff208dcc7bfab76136c06ee56eee3e6880c0e06d51c1881dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_19792ba32e96653ad64566a66fec9e723b42e0c9b498b286b79759a1a5e05235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19792ba32e96653ad64566a66fec9e723b42e0c9b498b286b79759a1a5e05235->enter($__internal_19792ba32e96653ad64566a66fec9e723b42e0c9b498b286b79759a1a5e05235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_19792ba32e96653ad64566a66fec9e723b42e0c9b498b286b79759a1a5e05235->leave($__internal_19792ba32e96653ad64566a66fec9e723b42e0c9b498b286b79759a1a5e05235_prof);

        
        $__internal_3d7998aa6d842ff208dcc7bfab76136c06ee56eee3e6880c0e06d51c1881dcf1->leave($__internal_3d7998aa6d842ff208dcc7bfab76136c06ee56eee3e6880c0e06d51c1881dcf1_prof);

    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_fa3d4a461b1730de59da3222911e245b86296a2bebd01ab193b05a1ca87d9424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d4a461b1730de59da3222911e245b86296a2bebd01ab193b05a1ca87d9424->enter($__internal_fa3d4a461b1730de59da3222911e245b86296a2bebd01ab193b05a1ca87d9424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2a168c96e8022e20f0f6295a5ea627ae097088b44d601e2d1f1a34d29f902a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a168c96e8022e20f0f6295a5ea627ae097088b44d601e2d1f1a34d29f902a8f->enter($__internal_2a168c96e8022e20f0f6295a5ea627ae097088b44d601e2d1f1a34d29f902a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2a168c96e8022e20f0f6295a5ea627ae097088b44d601e2d1f1a34d29f902a8f->leave($__internal_2a168c96e8022e20f0f6295a5ea627ae097088b44d601e2d1f1a34d29f902a8f_prof);

        
        $__internal_fa3d4a461b1730de59da3222911e245b86296a2bebd01ab193b05a1ca87d9424->leave($__internal_fa3d4a461b1730de59da3222911e245b86296a2bebd01ab193b05a1ca87d9424_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f21c2f92195fceafda6e74cf3c74710986ffde9217437d555e553dc9c3066517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21c2f92195fceafda6e74cf3c74710986ffde9217437d555e553dc9c3066517->enter($__internal_f21c2f92195fceafda6e74cf3c74710986ffde9217437d555e553dc9c3066517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6cfc8a2994e15981c4decde4421663042381c0e16e417c889e953216a584c3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfc8a2994e15981c4decde4421663042381c0e16e417c889e953216a584c3ee->enter($__internal_6cfc8a2994e15981c4decde4421663042381c0e16e417c889e953216a584c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_6cfc8a2994e15981c4decde4421663042381c0e16e417c889e953216a584c3ee->leave($__internal_6cfc8a2994e15981c4decde4421663042381c0e16e417c889e953216a584c3ee_prof);

        
        $__internal_f21c2f92195fceafda6e74cf3c74710986ffde9217437d555e553dc9c3066517->leave($__internal_f21c2f92195fceafda6e74cf3c74710986ffde9217437d555e553dc9c3066517_prof);

    }

    // line 97
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        $__internal_d2dfc5cf32a7fd4bba779d09c0775c9a990b67d3364b2ac5e9ccabd9ae0401a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2dfc5cf32a7fd4bba779d09c0775c9a990b67d3364b2ac5e9ccabd9ae0401a1->enter($__internal_d2dfc5cf32a7fd4bba779d09c0775c9a990b67d3364b2ac5e9ccabd9ae0401a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

        $__internal_ee2be535b48b3fa6c263babce98415b6fe461c8d800a3f802ac81309c782b383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2be535b48b3fa6c263babce98415b6fe461c8d800a3f802ac81309c782b383->enter($__internal_ee2be535b48b3fa6c263babce98415b6fe461c8d800a3f802ac81309c782b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_with_unit_widget"));

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
        
        $__internal_ee2be535b48b3fa6c263babce98415b6fe461c8d800a3f802ac81309c782b383->leave($__internal_ee2be535b48b3fa6c263babce98415b6fe461c8d800a3f802ac81309c782b383_prof);

        
        $__internal_d2dfc5cf32a7fd4bba779d09c0775c9a990b67d3364b2ac5e9ccabd9ae0401a1->leave($__internal_d2dfc5cf32a7fd4bba779d09c0775c9a990b67d3364b2ac5e9ccabd9ae0401a1_prof);

    }

    // line 108
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        $__internal_4f735749abb820a77ebc541c5430e19569addc3b6818e5f60c2e30255f64e97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f735749abb820a77ebc541c5430e19569addc3b6818e5f60c2e30255f64e97a->enter($__internal_4f735749abb820a77ebc541c5430e19569addc3b6818e5f60c2e30255f64e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_b010497b800ef26825071ecbd424ccbfa2b89fbb932a30beca0e83dea1787192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b010497b800ef26825071ecbd424ccbfa2b89fbb932a30beca0e83dea1787192->enter($__internal_b010497b800ef26825071ecbd424ccbfa2b89fbb932a30beca0e83dea1787192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

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
        
        $__internal_b010497b800ef26825071ecbd424ccbfa2b89fbb932a30beca0e83dea1787192->leave($__internal_b010497b800ef26825071ecbd424ccbfa2b89fbb932a30beca0e83dea1787192_prof);

        
        $__internal_4f735749abb820a77ebc541c5430e19569addc3b6818e5f60c2e30255f64e97a->leave($__internal_4f735749abb820a77ebc541c5430e19569addc3b6818e5f60c2e30255f64e97a_prof);

    }

    // line 117
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_f849f0eee1bc1a69c436fb67dd0bd964f8a1493909bdfcaa7627f073098a4240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f849f0eee1bc1a69c436fb67dd0bd964f8a1493909bdfcaa7627f073098a4240->enter($__internal_f849f0eee1bc1a69c436fb67dd0bd964f8a1493909bdfcaa7627f073098a4240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_15e23a53897f5d6a5a71311120ae6d046edd0e74a22c3b9a85d11f5888606027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e23a53897f5d6a5a71311120ae6d046edd0e74a22c3b9a85d11f5888606027->enter($__internal_15e23a53897f5d6a5a71311120ae6d046edd0e74a22c3b9a85d11f5888606027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 118
        echo "<div class=\"input-group\">";
        // line 119
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 120
        echo "</div>
";
        
        $__internal_15e23a53897f5d6a5a71311120ae6d046edd0e74a22c3b9a85d11f5888606027->leave($__internal_15e23a53897f5d6a5a71311120ae6d046edd0e74a22c3b9a85d11f5888606027_prof);

        
        $__internal_f849f0eee1bc1a69c436fb67dd0bd964f8a1493909bdfcaa7627f073098a4240->leave($__internal_f849f0eee1bc1a69c436fb67dd0bd964f8a1493909bdfcaa7627f073098a4240_prof);

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
