<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2113fe1ba64eee49d9d86cda7cd1ce39cf4dc09ca888c6542cec9d5c28e433ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2113fe1ba64eee49d9d86cda7cd1ce39cf4dc09ca888c6542cec9d5c28e433ae->enter($__internal_2113fe1ba64eee49d9d86cda7cd1ce39cf4dc09ca888c6542cec9d5c28e433ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9980c59a2ac730838b36a4948f728f19da197eccf979dbc8fed59636b940c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9980c59a2ac730838b36a4948f728f19da197eccf979dbc8fed59636b940c147->enter($__internal_9980c59a2ac730838b36a4948f728f19da197eccf979dbc8fed59636b940c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2113fe1ba64eee49d9d86cda7cd1ce39cf4dc09ca888c6542cec9d5c28e433ae->leave($__internal_2113fe1ba64eee49d9d86cda7cd1ce39cf4dc09ca888c6542cec9d5c28e433ae_prof);

        
        $__internal_9980c59a2ac730838b36a4948f728f19da197eccf979dbc8fed59636b940c147->leave($__internal_9980c59a2ac730838b36a4948f728f19da197eccf979dbc8fed59636b940c147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c719d8654d24e90a6c1ec665e31f2254afebbe9debabcc6405994486e5caaa3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c719d8654d24e90a6c1ec665e31f2254afebbe9debabcc6405994486e5caaa3d->enter($__internal_c719d8654d24e90a6c1ec665e31f2254afebbe9debabcc6405994486e5caaa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b4d414be2ff7c5cb05066bfec696b7dc476b05dc56678289eda7d9643d2ed4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4d414be2ff7c5cb05066bfec696b7dc476b05dc56678289eda7d9643d2ed4f->enter($__internal_2b4d414be2ff7c5cb05066bfec696b7dc476b05dc56678289eda7d9643d2ed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2b4d414be2ff7c5cb05066bfec696b7dc476b05dc56678289eda7d9643d2ed4f->leave($__internal_2b4d414be2ff7c5cb05066bfec696b7dc476b05dc56678289eda7d9643d2ed4f_prof);

        
        $__internal_c719d8654d24e90a6c1ec665e31f2254afebbe9debabcc6405994486e5caaa3d->leave($__internal_c719d8654d24e90a6c1ec665e31f2254afebbe9debabcc6405994486e5caaa3d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62fc0a648b225d16b4ad7ee7da9e714e89e8c8582b3f6068abef6a4b1c21ee13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fc0a648b225d16b4ad7ee7da9e714e89e8c8582b3f6068abef6a4b1c21ee13->enter($__internal_62fc0a648b225d16b4ad7ee7da9e714e89e8c8582b3f6068abef6a4b1c21ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54784cdc6e8de7b8e9bf0614c9718163b64c53f7d09655ca7c1de538a69703ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54784cdc6e8de7b8e9bf0614c9718163b64c53f7d09655ca7c1de538a69703ca->enter($__internal_54784cdc6e8de7b8e9bf0614c9718163b64c53f7d09655ca7c1de538a69703ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_54784cdc6e8de7b8e9bf0614c9718163b64c53f7d09655ca7c1de538a69703ca->leave($__internal_54784cdc6e8de7b8e9bf0614c9718163b64c53f7d09655ca7c1de538a69703ca_prof);

        
        $__internal_62fc0a648b225d16b4ad7ee7da9e714e89e8c8582b3f6068abef6a4b1c21ee13->leave($__internal_62fc0a648b225d16b4ad7ee7da9e714e89e8c8582b3f6068abef6a4b1c21ee13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea669972885d5790194dbfc7b5a2e32e84209182cc353c98c45461cd29f7d09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea669972885d5790194dbfc7b5a2e32e84209182cc353c98c45461cd29f7d09b->enter($__internal_ea669972885d5790194dbfc7b5a2e32e84209182cc353c98c45461cd29f7d09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ab47fcef181673aa8a5f932bb29155d988b3a92e9f14101ab6d5aba63dd4215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab47fcef181673aa8a5f932bb29155d988b3a92e9f14101ab6d5aba63dd4215->enter($__internal_0ab47fcef181673aa8a5f932bb29155d988b3a92e9f14101ab6d5aba63dd4215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ab47fcef181673aa8a5f932bb29155d988b3a92e9f14101ab6d5aba63dd4215->leave($__internal_0ab47fcef181673aa8a5f932bb29155d988b3a92e9f14101ab6d5aba63dd4215_prof);

        
        $__internal_ea669972885d5790194dbfc7b5a2e32e84209182cc353c98c45461cd29f7d09b->leave($__internal_ea669972885d5790194dbfc7b5a2e32e84209182cc353c98c45461cd29f7d09b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
