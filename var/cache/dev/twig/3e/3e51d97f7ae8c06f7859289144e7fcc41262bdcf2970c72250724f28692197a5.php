<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_492ded864f57847810e46fa4c34c876df3e266f1fa086da99179d50d5e2dcb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492ded864f57847810e46fa4c34c876df3e266f1fa086da99179d50d5e2dcb50->enter($__internal_492ded864f57847810e46fa4c34c876df3e266f1fa086da99179d50d5e2dcb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1593833b1746f2a12dd1c52c727a1995c3a71b5e8711163f3d48a84c346ea700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1593833b1746f2a12dd1c52c727a1995c3a71b5e8711163f3d48a84c346ea700->enter($__internal_1593833b1746f2a12dd1c52c727a1995c3a71b5e8711163f3d48a84c346ea700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492ded864f57847810e46fa4c34c876df3e266f1fa086da99179d50d5e2dcb50->leave($__internal_492ded864f57847810e46fa4c34c876df3e266f1fa086da99179d50d5e2dcb50_prof);

        
        $__internal_1593833b1746f2a12dd1c52c727a1995c3a71b5e8711163f3d48a84c346ea700->leave($__internal_1593833b1746f2a12dd1c52c727a1995c3a71b5e8711163f3d48a84c346ea700_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53b43bec343ebe03160bf91d6fab14cc6cba1be371cf3c4d5399d19068f69bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b43bec343ebe03160bf91d6fab14cc6cba1be371cf3c4d5399d19068f69bed->enter($__internal_53b43bec343ebe03160bf91d6fab14cc6cba1be371cf3c4d5399d19068f69bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_030f1e441222c94b35f6337794f71d7a541f5d4cfed1871cde7a28767931cf6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030f1e441222c94b35f6337794f71d7a541f5d4cfed1871cde7a28767931cf6d->enter($__internal_030f1e441222c94b35f6337794f71d7a541f5d4cfed1871cde7a28767931cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_030f1e441222c94b35f6337794f71d7a541f5d4cfed1871cde7a28767931cf6d->leave($__internal_030f1e441222c94b35f6337794f71d7a541f5d4cfed1871cde7a28767931cf6d_prof);

        
        $__internal_53b43bec343ebe03160bf91d6fab14cc6cba1be371cf3c4d5399d19068f69bed->leave($__internal_53b43bec343ebe03160bf91d6fab14cc6cba1be371cf3c4d5399d19068f69bed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_757fe2b5366ef9e05e048e62c5c456b249011b040070214676baf238a1745e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757fe2b5366ef9e05e048e62c5c456b249011b040070214676baf238a1745e82->enter($__internal_757fe2b5366ef9e05e048e62c5c456b249011b040070214676baf238a1745e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46436e2c0c813768d86f82bbc946c208c18e627fc4b97a0c181cef42c54bd9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46436e2c0c813768d86f82bbc946c208c18e627fc4b97a0c181cef42c54bd9e4->enter($__internal_46436e2c0c813768d86f82bbc946c208c18e627fc4b97a0c181cef42c54bd9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46436e2c0c813768d86f82bbc946c208c18e627fc4b97a0c181cef42c54bd9e4->leave($__internal_46436e2c0c813768d86f82bbc946c208c18e627fc4b97a0c181cef42c54bd9e4_prof);

        
        $__internal_757fe2b5366ef9e05e048e62c5c456b249011b040070214676baf238a1745e82->leave($__internal_757fe2b5366ef9e05e048e62c5c456b249011b040070214676baf238a1745e82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a62c1fdc48d4d4d3fd8236c9fcd6796abd49976a65160ceb1a701499ef9df8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62c1fdc48d4d4d3fd8236c9fcd6796abd49976a65160ceb1a701499ef9df8a3->enter($__internal_a62c1fdc48d4d4d3fd8236c9fcd6796abd49976a65160ceb1a701499ef9df8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7382c2ab1f309a3c40f9a4d7ced4250d319bb6618b5d6b816150ec091bcf6229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7382c2ab1f309a3c40f9a4d7ced4250d319bb6618b5d6b816150ec091bcf6229->enter($__internal_7382c2ab1f309a3c40f9a4d7ced4250d319bb6618b5d6b816150ec091bcf6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7382c2ab1f309a3c40f9a4d7ced4250d319bb6618b5d6b816150ec091bcf6229->leave($__internal_7382c2ab1f309a3c40f9a4d7ced4250d319bb6618b5d6b816150ec091bcf6229_prof);

        
        $__internal_a62c1fdc48d4d4d3fd8236c9fcd6796abd49976a65160ceb1a701499ef9df8a3->leave($__internal_a62c1fdc48d4d4d3fd8236c9fcd6796abd49976a65160ceb1a701499ef9df8a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
