<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3cc322d431dfb60c1811df3b0be441346103a2b6c86baf084df8fed4f996de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cc322d431dfb60c1811df3b0be441346103a2b6c86baf084df8fed4f996de1->enter($__internal_a3cc322d431dfb60c1811df3b0be441346103a2b6c86baf084df8fed4f996de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_98a54e57aec6e77a2b28b6c3b59b4b5eb8217b27641a4793941c5cd560da3790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a54e57aec6e77a2b28b6c3b59b4b5eb8217b27641a4793941c5cd560da3790->enter($__internal_98a54e57aec6e77a2b28b6c3b59b4b5eb8217b27641a4793941c5cd560da3790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cc322d431dfb60c1811df3b0be441346103a2b6c86baf084df8fed4f996de1->leave($__internal_a3cc322d431dfb60c1811df3b0be441346103a2b6c86baf084df8fed4f996de1_prof);

        
        $__internal_98a54e57aec6e77a2b28b6c3b59b4b5eb8217b27641a4793941c5cd560da3790->leave($__internal_98a54e57aec6e77a2b28b6c3b59b4b5eb8217b27641a4793941c5cd560da3790_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d892e931d2be6d3c98396201a419a200e20e25911542276597ad20a9429d4bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d892e931d2be6d3c98396201a419a200e20e25911542276597ad20a9429d4bbd->enter($__internal_d892e931d2be6d3c98396201a419a200e20e25911542276597ad20a9429d4bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a9f694108236969d341f01e41b6641968fe0ca3bf1a0e1fbaf0a8e8cd8374ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9f694108236969d341f01e41b6641968fe0ca3bf1a0e1fbaf0a8e8cd8374ca->enter($__internal_6a9f694108236969d341f01e41b6641968fe0ca3bf1a0e1fbaf0a8e8cd8374ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6a9f694108236969d341f01e41b6641968fe0ca3bf1a0e1fbaf0a8e8cd8374ca->leave($__internal_6a9f694108236969d341f01e41b6641968fe0ca3bf1a0e1fbaf0a8e8cd8374ca_prof);

        
        $__internal_d892e931d2be6d3c98396201a419a200e20e25911542276597ad20a9429d4bbd->leave($__internal_d892e931d2be6d3c98396201a419a200e20e25911542276597ad20a9429d4bbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
