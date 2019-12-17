<?php

/* ::base.html.twig */
class __TwigTemplate_a405aa946ef52c8aba789e4b895829c78e1c573bf2a119365c35dc88ee68533c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2158a18b410863d324a819d05d31bd75b532ece5520e28968df3a50eaee6ab6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2158a18b410863d324a819d05d31bd75b532ece5520e28968df3a50eaee6ab6e->enter($__internal_2158a18b410863d324a819d05d31bd75b532ece5520e28968df3a50eaee6ab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8f7dd97ff3d4c101e6a1d6c23182d04c51d71203cf9a0e9f67d0dcd6c716fdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7dd97ff3d4c101e6a1d6c23182d04c51d71203cf9a0e9f67d0dcd6c716fdc9->enter($__internal_8f7dd97ff3d4c101e6a1d6c23182d04c51d71203cf9a0e9f67d0dcd6c716fdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 25
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_2158a18b410863d324a819d05d31bd75b532ece5520e28968df3a50eaee6ab6e->leave($__internal_2158a18b410863d324a819d05d31bd75b532ece5520e28968df3a50eaee6ab6e_prof);

        
        $__internal_8f7dd97ff3d4c101e6a1d6c23182d04c51d71203cf9a0e9f67d0dcd6c716fdc9->leave($__internal_8f7dd97ff3d4c101e6a1d6c23182d04c51d71203cf9a0e9f67d0dcd6c716fdc9_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1911c794d5cbb563d8d902f2285dd55d63cb60a83bd2a7117fa35774917258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1911c794d5cbb563d8d902f2285dd55d63cb60a83bd2a7117fa35774917258->enter($__internal_8d1911c794d5cbb563d8d902f2285dd55d63cb60a83bd2a7117fa35774917258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51dd5dcd7e92089dee0080cc816a47bf3956fce35ae80b587a525977789b19ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dd5dcd7e92089dee0080cc816a47bf3956fce35ae80b587a525977789b19ae->enter($__internal_51dd5dcd7e92089dee0080cc816a47bf3956fce35ae80b587a525977789b19ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51dd5dcd7e92089dee0080cc816a47bf3956fce35ae80b587a525977789b19ae->leave($__internal_51dd5dcd7e92089dee0080cc816a47bf3956fce35ae80b587a525977789b19ae_prof);

        
        $__internal_8d1911c794d5cbb563d8d902f2285dd55d63cb60a83bd2a7117fa35774917258->leave($__internal_8d1911c794d5cbb563d8d902f2285dd55d63cb60a83bd2a7117fa35774917258_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb4e138b32622203cd035a1e318a1473d6cfa265266399132420216b337e98fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4e138b32622203cd035a1e318a1473d6cfa265266399132420216b337e98fc->enter($__internal_fb4e138b32622203cd035a1e318a1473d6cfa265266399132420216b337e98fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a909a44e1375fa3c9969cb7f0cfcfd797f1da24373c66c812b6d0ff024e3d4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a909a44e1375fa3c9969cb7f0cfcfd797f1da24373c66c812b6d0ff024e3d4d9->enter($__internal_a909a44e1375fa3c9969cb7f0cfcfd797f1da24373c66c812b6d0ff024e3d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a909a44e1375fa3c9969cb7f0cfcfd797f1da24373c66c812b6d0ff024e3d4d9->leave($__internal_a909a44e1375fa3c9969cb7f0cfcfd797f1da24373c66c812b6d0ff024e3d4d9_prof);

        
        $__internal_fb4e138b32622203cd035a1e318a1473d6cfa265266399132420216b337e98fc->leave($__internal_fb4e138b32622203cd035a1e318a1473d6cfa265266399132420216b337e98fc_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_538ba3215a7ecab679f11509dfa3e51b094522d2e3cf52290d7823dd9ea398b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538ba3215a7ecab679f11509dfa3e51b094522d2e3cf52290d7823dd9ea398b4->enter($__internal_538ba3215a7ecab679f11509dfa3e51b094522d2e3cf52290d7823dd9ea398b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_438c53eda0d363457cecee8ff6b1f4ab0d7e6d3a8fdc707c90703784fbc5b77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438c53eda0d363457cecee8ff6b1f4ab0d7e6d3a8fdc707c90703784fbc5b77b->enter($__internal_438c53eda0d363457cecee8ff6b1f4ab0d7e6d3a8fdc707c90703784fbc5b77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_438c53eda0d363457cecee8ff6b1f4ab0d7e6d3a8fdc707c90703784fbc5b77b->leave($__internal_438c53eda0d363457cecee8ff6b1f4ab0d7e6d3a8fdc707c90703784fbc5b77b_prof);

        
        $__internal_538ba3215a7ecab679f11509dfa3e51b094522d2e3cf52290d7823dd9ea398b4->leave($__internal_538ba3215a7ecab679f11509dfa3e51b094522d2e3cf52290d7823dd9ea398b4_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc87a48b539eccae80b18f2cec44c1ed26e44f0d3f7ab492e7b05fc3cc549748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc87a48b539eccae80b18f2cec44c1ed26e44f0d3f7ab492e7b05fc3cc549748->enter($__internal_fc87a48b539eccae80b18f2cec44c1ed26e44f0d3f7ab492e7b05fc3cc549748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad79199e755874abe2e490256367088a9fd69e8bf8fa3058f38d8325b3799620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad79199e755874abe2e490256367088a9fd69e8bf8fa3058f38d8325b3799620->enter($__internal_ad79199e755874abe2e490256367088a9fd69e8bf8fa3058f38d8325b3799620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad79199e755874abe2e490256367088a9fd69e8bf8fa3058f38d8325b3799620->leave($__internal_ad79199e755874abe2e490256367088a9fd69e8bf8fa3058f38d8325b3799620_prof);

        
        $__internal_fc87a48b539eccae80b18f2cec44c1ed26e44f0d3f7ab492e7b05fc3cc549748->leave($__internal_fc87a48b539eccae80b18f2cec44c1ed26e44f0d3f7ab492e7b05fc3cc549748_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  100 => 34,  83 => 30,  65 => 29,  53 => 36,  50 => 35,  48 => 34,  41 => 31,  39 => 30,  35 => 29,  29 => 25,);
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/telaso5/public_html/app/Resources/views/base.html.twig");
    }
}
