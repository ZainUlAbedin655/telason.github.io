<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_fa9b7e9385555e399f0b316057ed1326a0208d2d3af59089df70cd0c3bad2a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b57e3432a6e96e402828434a913c8ecd8843b218b755621873ab8a03a8799f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57e3432a6e96e402828434a913c8ecd8843b218b755621873ab8a03a8799f9d->enter($__internal_b57e3432a6e96e402828434a913c8ecd8843b218b755621873ab8a03a8799f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        $__internal_a7f403f1fc323972a9b9b20bdb92750c1f0299f43b7c1d14688d6485c85d1bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f403f1fc323972a9b9b20bdb92750c1f0299f43b7c1d14688d6485c85d1bb5->enter($__internal_a7f403f1fc323972a9b9b20bdb92750c1f0299f43b7c1d14688d6485c85d1bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        // line 64
        echo "
";
        // line 81
        echo "
";
        
        $__internal_b57e3432a6e96e402828434a913c8ecd8843b218b755621873ab8a03a8799f9d->leave($__internal_b57e3432a6e96e402828434a913c8ecd8843b218b755621873ab8a03a8799f9d_prof);

        
        $__internal_a7f403f1fc323972a9b9b20bdb92750c1f0299f43b7c1d14688d6485c85d1bb5->leave($__internal_a7f403f1fc323972a9b9b20bdb92750c1f0299f43b7c1d14688d6485c85d1bb5_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_78f2e79ff7bd5c2b88711441844d3096768df86c89b6498323acbd52d5242cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_78f2e79ff7bd5c2b88711441844d3096768df86c89b6498323acbd52d5242cda->enter($__internal_78f2e79ff7bd5c2b88711441844d3096768df86c89b6498323acbd52d5242cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_1b79ba1bc3e765295cd588b44e853e1b4112c69f496a8ac4b09753e99ca59a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1b79ba1bc3e765295cd588b44e853e1b4112c69f496a8ac4b09753e99ca59a78->enter($__internal_1b79ba1bc3e765295cd588b44e853e1b4112c69f496a8ac4b09753e99ca59a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_1b79ba1bc3e765295cd588b44e853e1b4112c69f496a8ac4b09753e99ca59a78->leave($__internal_1b79ba1bc3e765295cd588b44e853e1b4112c69f496a8ac4b09753e99ca59a78_prof);

            
            $__internal_78f2e79ff7bd5c2b88711441844d3096768df86c89b6498323acbd52d5242cda->leave($__internal_78f2e79ff7bd5c2b88711441844d3096768df86c89b6498323acbd52d5242cda_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3a1992c994eda68e4207c71e86e2458a8ea137d173d24cbcaeee38a69ad22562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3a1992c994eda68e4207c71e86e2458a8ea137d173d24cbcaeee38a69ad22562->enter($__internal_3a1992c994eda68e4207c71e86e2458a8ea137d173d24cbcaeee38a69ad22562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            $__internal_eeb079e4df4da572f7c4fe50d3d02c84805c95117a5eef5ae745578bdb0611a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_eeb079e4df4da572f7c4fe50d3d02c84805c95117a5eef5ae745578bdb0611a9->enter($__internal_eeb079e4df4da572f7c4fe50d3d02c84805c95117a5eef5ae745578bdb0611a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_eeb079e4df4da572f7c4fe50d3d02c84805c95117a5eef5ae745578bdb0611a9->leave($__internal_eeb079e4df4da572f7c4fe50d3d02c84805c95117a5eef5ae745578bdb0611a9_prof);

            
            $__internal_3a1992c994eda68e4207c71e86e2458a8ea137d173d24cbcaeee38a69ad22562->leave($__internal_3a1992c994eda68e4207c71e86e2458a8ea137d173d24cbcaeee38a69ad22562_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2c9b15c4e8d37f587286f9f7978502c48ba1f58db382598d405606462c4ed75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2c9b15c4e8d37f587286f9f7978502c48ba1f58db382598d405606462c4ed75b->enter($__internal_2c9b15c4e8d37f587286f9f7978502c48ba1f58db382598d405606462c4ed75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_6b5d65b9ee9a416215d13b009ba661d8fd4bf3cd816a37d7119776a183385c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6b5d65b9ee9a416215d13b009ba661d8fd4bf3cd816a37d7119776a183385c9f->enter($__internal_6b5d65b9ee9a416215d13b009ba661d8fd4bf3cd816a37d7119776a183385c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_6b5d65b9ee9a416215d13b009ba661d8fd4bf3cd816a37d7119776a183385c9f->leave($__internal_6b5d65b9ee9a416215d13b009ba661d8fd4bf3cd816a37d7119776a183385c9f_prof);

            
            $__internal_2c9b15c4e8d37f587286f9f7978502c48ba1f58db382598d405606462c4ed75b->leave($__internal_2c9b15c4e8d37f587286f9f7978502c48ba1f58db382598d405606462c4ed75b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cf4e03f941f6db0a769cca5c74576cf9d16ba966523e30699ced1dcc44baaa92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cf4e03f941f6db0a769cca5c74576cf9d16ba966523e30699ced1dcc44baaa92->enter($__internal_cf4e03f941f6db0a769cca5c74576cf9d16ba966523e30699ced1dcc44baaa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_1cf67218ddceaae603ddd9f012f70d821039fc5e7f3c9aee387eaa202c866757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1cf67218ddceaae603ddd9f012f70d821039fc5e7f3c9aee387eaa202c866757->enter($__internal_1cf67218ddceaae603ddd9f012f70d821039fc5e7f3c9aee387eaa202c866757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_1cf67218ddceaae603ddd9f012f70d821039fc5e7f3c9aee387eaa202c866757->leave($__internal_1cf67218ddceaae603ddd9f012f70d821039fc5e7f3c9aee387eaa202c866757_prof);

            
            $__internal_cf4e03f941f6db0a769cca5c74576cf9d16ba966523e30699ced1dcc44baaa92->leave($__internal_cf4e03f941f6db0a769cca5c74576cf9d16ba966523e30699ced1dcc44baaa92_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4fed9869361b3ee06a80df0b415708dbb1b78d597a816e394c7297c94932b2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4fed9869361b3ee06a80df0b415708dbb1b78d597a816e394c7297c94932b2e5->enter($__internal_4fed9869361b3ee06a80df0b415708dbb1b78d597a816e394c7297c94932b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_8c35aafd3e0bac92ac03d158189cf202a5276cc336f3e1de8e8feba9a64f620b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8c35aafd3e0bac92ac03d158189cf202a5276cc336f3e1de8e8feba9a64f620b->enter($__internal_8c35aafd3e0bac92ac03d158189cf202a5276cc336f3e1de8e8feba9a64f620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_8c35aafd3e0bac92ac03d158189cf202a5276cc336f3e1de8e8feba9a64f620b->leave($__internal_8c35aafd3e0bac92ac03d158189cf202a5276cc336f3e1de8e8feba9a64f620b_prof);

            
            $__internal_4fed9869361b3ee06a80df0b415708dbb1b78d597a816e394c7297c94932b2e5->leave($__internal_4fed9869361b3ee06a80df0b415708dbb1b78d597a816e394c7297c94932b2e5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4db078c85c78596d3dab671ae1fff9a768ea0b4a548bcc51c620ec3a4daf1e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4db078c85c78596d3dab671ae1fff9a768ea0b4a548bcc51c620ec3a4daf1e78->enter($__internal_4db078c85c78596d3dab671ae1fff9a768ea0b4a548bcc51c620ec3a4daf1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_42158f1db7a0f18f218838e4b7079210c5c337eb0056f94c250c6969aaa952b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_42158f1db7a0f18f218838e4b7079210c5c337eb0056f94c250c6969aaa952b1->enter($__internal_42158f1db7a0f18f218838e4b7079210c5c337eb0056f94c250c6969aaa952b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "\"
    data-content=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
";
            
            $__internal_42158f1db7a0f18f218838e4b7079210c5c337eb0056f94c250c6969aaa952b1->leave($__internal_42158f1db7a0f18f218838e4b7079210c5c337eb0056f94c250c6969aaa952b1_prof);

            
            $__internal_4db078c85c78596d3dab671ae1fff9a768ea0b4a548bcc51c620ec3a4daf1e78->leave($__internal_4db078c85c78596d3dab671ae1fff9a768ea0b4a548bcc51c620ec3a4daf1e78_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f09d3110250a9d4e3c9c1c2c81f441a42a3bf106f43b330ce4940fe4a5c3746c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f09d3110250a9d4e3c9c1c2c81f441a42a3bf106f43b330ce4940fe4a5c3746c->enter($__internal_f09d3110250a9d4e3c9c1c2c81f441a42a3bf106f43b330ce4940fe4a5c3746c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_47edb989738664630af2442547dffc1208aca7346371604a939e91f8ee255814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_47edb989738664630af2442547dffc1208aca7346371604a939e91f8ee255814->enter($__internal_47edb989738664630af2442547dffc1208aca7346371604a939e91f8ee255814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 67
            echo "  ";
            list($context["sortOrder"], $context["orderBy"]) =             array(((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "")) : ("")));
            // line 68
            echo "    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")), "html", null, true);
            echo "\"
      ";
            // line 71
            if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")))) {
                // line 72
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 73
                echo (((($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 75
            echo "    >
      <span role=\"columnheader\">";
            // line 76
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
";
            
            $__internal_47edb989738664630af2442547dffc1208aca7346371604a939e91f8ee255814->leave($__internal_47edb989738664630af2442547dffc1208aca7346371604a939e91f8ee255814_prof);

            
            $__internal_f09d3110250a9d4e3c9c1c2c81f441a42a3bf106f43b330ce4940fe4a5c3746c->leave($__internal_f09d3110250a9d4e3c9c1c2c81f441a42a3bf106f43b330ce4940fe4a5c3746c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b70252246cdad5c38d7465b718cc1cbde332ad66d601f07471936e9a46bb8e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b70252246cdad5c38d7465b718cc1cbde332ad66d601f07471936e9a46bb8e2f->enter($__internal_b70252246cdad5c38d7465b718cc1cbde332ad66d601f07471936e9a46bb8e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_c7422c26f56050bff7cbfb51cb82d2c7ac66bce82279fc0374504af99400ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c7422c26f56050bff7cbfb51cb82d2c7ac66bce82279fc0374504af99400ba34->enter($__internal_c7422c26f56050bff7cbfb51cb82d2c7ac66bce82279fc0374504af99400ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 84
            echo "    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/";
            echo twig_escape_filter($this->env, ($context["filename"] ?? $this->getContext($context, "filename")), "html", null, true);
            echo ".csv\">
        ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_c7422c26f56050bff7cbfb51cb82d2c7ac66bce82279fc0374504af99400ba34->leave($__internal_c7422c26f56050bff7cbfb51cb82d2c7ac66bce82279fc0374504af99400ba34_prof);

            
            $__internal_b70252246cdad5c38d7465b718cc1cbde332ad66d601f07471936e9a46bb8e2f->leave($__internal_b70252246cdad5c38d7465b718cc1cbde332ad66d601f07471936e9a46bb8e2f_prof);

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
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 85,  437 => 84,  418 => 83,  393 => 77,  389 => 76,  386 => 75,  381 => 73,  378 => 72,  376 => 71,  372 => 70,  368 => 68,  365 => 67,  344 => 66,  319 => 60,  315 => 59,  310 => 57,  305 => 56,  285 => 55,  260 => 50,  256 => 48,  238 => 47,  213 => 42,  209 => 40,  191 => 39,  167 => 35,  160 => 34,  140 => 33,  116 => 30,  98 => 29,  74 => 26,  54 => 25,  43 => 81,  40 => 64,  37 => 54,  34 => 46,  31 => 38,  28 => 32,  25 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '') %}
<label class=\"form-control-label {{ class }}\">
  {{ label }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"{{ label }}\"
    data-content=\"{{ help }}\">
  </span>
</label>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder) %}
  {% set sortOrder, orderBy = sortOrder|default(''), orderBy|default('') %}
    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
    </div>
  </th>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/{{ filename }}.csv\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}
", "PrestaShopBundle:Admin:macros.html.twig", "/home/telaso5/public_html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
