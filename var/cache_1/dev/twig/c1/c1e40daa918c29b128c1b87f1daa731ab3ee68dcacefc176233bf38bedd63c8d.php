<?php

/* PrestaShopBundle:Admin/Security:compromised.html.twig */
class __TwigTemplate_5bf3b2f4cd341dd78f603fb70d9c437354c36f910780ae7e574ceef30e9c680c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("::base.html.twig", "PrestaShopBundle:Admin/Security:compromised.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b368ce0bafa28aabdf519eafd5f2bebf915bbacf2302e095bf6e8e6095e4242d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b368ce0bafa28aabdf519eafd5f2bebf915bbacf2302e095bf6e8e6095e4242d->enter($__internal_b368ce0bafa28aabdf519eafd5f2bebf915bbacf2302e095bf6e8e6095e4242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Security:compromised.html.twig"));

        $__internal_277abd8a83fe6cba124c926d32f4138946a45d7ae745184b485d0b3b3edb1c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277abd8a83fe6cba124c926d32f4138946a45d7ae745184b485d0b3b3edb1c90->enter($__internal_277abd8a83fe6cba124c926d32f4138946a45d7ae745184b485d0b3b3edb1c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Security:compromised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b368ce0bafa28aabdf519eafd5f2bebf915bbacf2302e095bf6e8e6095e4242d->leave($__internal_b368ce0bafa28aabdf519eafd5f2bebf915bbacf2302e095bf6e8e6095e4242d_prof);

        
        $__internal_277abd8a83fe6cba124c926d32f4138946a45d7ae745184b485d0b3b3edb1c90->leave($__internal_277abd8a83fe6cba124c926d32f4138946a45d7ae745184b485d0b3b3edb1c90_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_caf628285b8720a86eded91474e2c9be850205f1c40ffbe366f84ae400881067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf628285b8720a86eded91474e2c9be850205f1c40ffbe366f84ae400881067->enter($__internal_caf628285b8720a86eded91474e2c9be850205f1c40ffbe366f84ae400881067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1e7c9e3e2b3534cf82b6a03474adb953bd8837e57d55851ad914068c12b6cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e7c9e3e2b3534cf82b6a03474adb953bd8837e57d55851ad914068c12b6cf2->enter($__internal_b1e7c9e3e2b3534cf82b6a03474adb953bd8837e57d55851ad914068c12b6cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
";
        
        $__internal_b1e7c9e3e2b3534cf82b6a03474adb953bd8837e57d55851ad914068c12b6cf2->leave($__internal_b1e7c9e3e2b3534cf82b6a03474adb953bd8837e57d55851ad914068c12b6cf2_prof);

        
        $__internal_caf628285b8720a86eded91474e2c9be850205f1c40ffbe366f84ae400881067->leave($__internal_caf628285b8720a86eded91474e2c9be850205f1c40ffbe366f84ae400881067_prof);

    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9eb35776eea02ab56c0dd58e8725da4cc8b8dbc2822cd9e2d788c4c51109fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9eb35776eea02ab56c0dd58e8725da4cc8b8dbc2822cd9e2d788c4c51109fbe->enter($__internal_b9eb35776eea02ab56c0dd58e8725da4cc8b8dbc2822cd9e2d788c4c51109fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee59e24d16036ff32039165b99bb9e2b125f203ff4f6c6892e79cfa225997cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee59e24d16036ff32039165b99bb9e2b125f203ff4f6c6892e79cfa225997cd0->enter($__internal_ee59e24d16036ff32039165b99bb9e2b125f203ff4f6c6892e79cfa225997cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 48
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid token", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
";
        
        $__internal_ee59e24d16036ff32039165b99bb9e2b125f203ff4f6c6892e79cfa225997cd0->leave($__internal_ee59e24d16036ff32039165b99bb9e2b125f203ff4f6c6892e79cfa225997cd0_prof);

        
        $__internal_b9eb35776eea02ab56c0dd58e8725da4cc8b8dbc2822cd9e2d788c4c51109fbe->leave($__internal_b9eb35776eea02ab56c0dd58e8725da4cc8b8dbc2822cd9e2d788c4c51109fbe_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_46fb62876d1ca708d0f2a7af282c4c213cd4fe849dc6380eebd1704765105ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fb62876d1ca708d0f2a7af282c4c213cd4fe849dc6380eebd1704765105ad3->enter($__internal_46fb62876d1ca708d0f2a7af282c4c213cd4fe849dc6380eebd1704765105ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_161574e513949befdeff98a275a7b93cdb58ed229c87715ef2fcae50555f1be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161574e513949befdeff98a275a7b93cdb58ed229c87715ef2fcae50555f1be1->enter($__internal_161574e513949befdeff98a275a7b93cdb58ed229c87715ef2fcae50555f1be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 56
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.", array(), "Admin.Catalog.Help"), array("[1]" => "<b>", "[/1]" => "</b>"));
        echo "
            </p>
          </div>

          <h1 class=\"text-md-center\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to display this page?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["requestUri"] ?? $this->getContext($context, "requestUri")), "html", null, true);
        echo "\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, I understand the risks", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Take me out of there!", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
  </div>
";
        
        $__internal_161574e513949befdeff98a275a7b93cdb58ed229c87715ef2fcae50555f1be1->leave($__internal_161574e513949befdeff98a275a7b93cdb58ed229c87715ef2fcae50555f1be1_prof);

        
        $__internal_46fb62876d1ca708d0f2a7af282c4c213cd4fe849dc6380eebd1704765105ad3->leave($__internal_46fb62876d1ca708d0f2a7af282c4c213cd4fe849dc6380eebd1704765105ad3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Security:compromised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  139 => 65,  134 => 63,  130 => 62,  125 => 60,  118 => 56,  111 => 51,  102 => 50,  89 => 48,  80 => 47,  51 => 28,  42 => 27,  11 => 25,);
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
{% extends '::base.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme.css') }}\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
{% endblock %}

{% block title %}
  {{ 'Invalid token'|trans({},'Admin.Catalog.Help' ) }}
{% endblock %}
{% block body %}
  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              {{ '[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.'|trans({},'Admin.Catalog.Help')|replace({'[1]' : '<b>', '[/1]' : '</b>'})|raw }}
            </p>
          </div>

          <h1 class=\"text-md-center\">{{ 'Do you want to display this page?'|trans({},'Admin.Catalog.Help' ) }}</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"{{ requestUri }}\">
              {{ 'Yes, I understand the risks'|trans({},'Admin.Catalog.Help' ) }}
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"{{ getAdminLink(\"AdminDashboard\") }}\">
              {{ 'Take me out of there!'|trans({},'Admin.Catalog.Help' ) }}
            </a>
          </div>
        </div>
      </div>
  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Security:compromised.html.twig", "/home/telaso5/public_html/src/PrestaShopBundle/Resources/views/Admin/Security/compromised.html.twig");
    }
}
