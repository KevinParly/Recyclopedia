<?php

/* AstuceBundle:Default:accueil.html.twig */
class __TwigTemplate_afcb160724e33a7c69e417a2daa7d920985cdc5533af72cd64f7a108d9e909d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AstuceBundle::layout.html.twig", "AstuceBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AstuceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53fc3c50f578f7c70ba1d2a16e2c5eed3183b71f59372a1bf12a15f274e96ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fc3c50f578f7c70ba1d2a16e2c5eed3183b71f59372a1bf12a15f274e96ec2->enter($__internal_53fc3c50f578f7c70ba1d2a16e2c5eed3183b71f59372a1bf12a15f274e96ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle:Default:accueil.html.twig"));

        $__internal_36f547e4ad38f4bcf030dd9adbe4125d3e7ad9e9302268fded5624c583e5d056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f547e4ad38f4bcf030dd9adbe4125d3e7ad9e9302268fded5624c583e5d056->enter($__internal_36f547e4ad38f4bcf030dd9adbe4125d3e7ad9e9302268fded5624c583e5d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53fc3c50f578f7c70ba1d2a16e2c5eed3183b71f59372a1bf12a15f274e96ec2->leave($__internal_53fc3c50f578f7c70ba1d2a16e2c5eed3183b71f59372a1bf12a15f274e96ec2_prof);

        
        $__internal_36f547e4ad38f4bcf030dd9adbe4125d3e7ad9e9302268fded5624c583e5d056->leave($__internal_36f547e4ad38f4bcf030dd9adbe4125d3e7ad9e9302268fded5624c583e5d056_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9b1accc23feb9b66f2684a9389f5e24cab6dc9bfdbab39dc3d344284592dc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b1accc23feb9b66f2684a9389f5e24cab6dc9bfdbab39dc3d344284592dc1a->enter($__internal_a9b1accc23feb9b66f2684a9389f5e24cab6dc9bfdbab39dc3d344284592dc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27624cca1df64d86aa38d8b4856e6bf6481d9de997b2c3ae3c0d92f6e2e9c18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27624cca1df64d86aa38d8b4856e6bf6481d9de997b2c3ae3c0d92f6e2e9c18d->enter($__internal_27624cca1df64d86aa38d8b4856e6bf6481d9de997b2c3ae3c0d92f6e2e9c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_27624cca1df64d86aa38d8b4856e6bf6481d9de997b2c3ae3c0d92f6e2e9c18d->leave($__internal_27624cca1df64d86aa38d8b4856e6bf6481d9de997b2c3ae3c0d92f6e2e9c18d_prof);

        
        $__internal_a9b1accc23feb9b66f2684a9389f5e24cab6dc9bfdbab39dc3d344284592dc1a->leave($__internal_a9b1accc23feb9b66f2684a9389f5e24cab6dc9bfdbab39dc3d344284592dc1a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c787505dbbf8d43c493928a1c8cb3d5fc7b5dffddc1889d474197d9f30d0403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c787505dbbf8d43c493928a1c8cb3d5fc7b5dffddc1889d474197d9f30d0403->enter($__internal_3c787505dbbf8d43c493928a1c8cb3d5fc7b5dffddc1889d474197d9f30d0403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_603beff5315cbb092840c62069ee6e5c4c1e8119aad0ec013d1018fb96471167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603beff5315cbb092840c62069ee6e5c4c1e8119aad0ec013d1018fb96471167->enter($__internal_603beff5315cbb092840c62069ee6e5c4c1e8119aad0ec013d1018fb96471167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce1"]) || array_key_exists("astuce1", $context) ? $context["astuce1"] : (function () { throw new Twig_Error_Runtime('Variable "astuce1" does not exist.', 5, $this->getSourceContext()); })()), "nomAstuce", array()), "html", null, true);
        echo "</h2>
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce1"]) || array_key_exists("astuce1", $context) ? $context["astuce1"] : (function () { throw new Twig_Error_Runtime('Variable "astuce1" does not exist.', 6, $this->getSourceContext()); })()), "imgAstuce", array()), "html", null, true);
        echo "\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce1"]) || array_key_exists("astuce1", $context) ? $context["astuce1"] : (function () { throw new Twig_Error_Runtime('Variable "astuce1" does not exist.', 7, $this->getSourceContext()); })()), "sousDescription", array()), "html", null, true);
        echo "</p>
    <a href=\"/detailsastuce/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce1"]) || array_key_exists("astuce1", $context) ? $context["astuce1"] : (function () { throw new Twig_Error_Runtime('Variable "astuce1" does not exist.', 8, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"><button>Voir les informations liées à l'astuce</button></a>

  <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce2"]) || array_key_exists("astuce2", $context) ? $context["astuce2"] : (function () { throw new Twig_Error_Runtime('Variable "astuce2" does not exist.', 10, $this->getSourceContext()); })()), "nomAstuce", array()), "html", null, true);
        echo "</h2>
    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce2"]) || array_key_exists("astuce2", $context) ? $context["astuce2"] : (function () { throw new Twig_Error_Runtime('Variable "astuce2" does not exist.', 11, $this->getSourceContext()); })()), "imgAstuce", array()), "html", null, true);
        echo "\">
    <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce2"]) || array_key_exists("astuce2", $context) ? $context["astuce2"] : (function () { throw new Twig_Error_Runtime('Variable "astuce2" does not exist.', 12, $this->getSourceContext()); })()), "sousDescription", array()), "html", null, true);
        echo "</p>
    <a href=\"/detailsastuce/";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce2"]) || array_key_exists("astuce2", $context) ? $context["astuce2"] : (function () { throw new Twig_Error_Runtime('Variable "astuce2" does not exist.', 13, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"><button>Voir les informations liées à l'astuce</button></a>

    <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce3"]) || array_key_exists("astuce3", $context) ? $context["astuce3"] : (function () { throw new Twig_Error_Runtime('Variable "astuce3" does not exist.', 15, $this->getSourceContext()); })()), "nomAstuce", array()), "html", null, true);
        echo "</h2>
      <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce3"]) || array_key_exists("astuce3", $context) ? $context["astuce3"] : (function () { throw new Twig_Error_Runtime('Variable "astuce3" does not exist.', 16, $this->getSourceContext()); })()), "imgAstuce", array()), "html", null, true);
        echo "\">
      <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce3"]) || array_key_exists("astuce3", $context) ? $context["astuce3"] : (function () { throw new Twig_Error_Runtime('Variable "astuce3" does not exist.', 17, $this->getSourceContext()); })()), "sousDescription", array()), "html", null, true);
        echo "</p>
      <a href=\"/detailsastuce/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce3"]) || array_key_exists("astuce3", $context) ? $context["astuce3"] : (function () { throw new Twig_Error_Runtime('Variable "astuce3" does not exist.', 18, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"><button>Voir les informations liées à l'astuce</button></a>
";
        
        $__internal_603beff5315cbb092840c62069ee6e5c4c1e8119aad0ec013d1018fb96471167->leave($__internal_603beff5315cbb092840c62069ee6e5c4c1e8119aad0ec013d1018fb96471167_prof);

        
        $__internal_3c787505dbbf8d43c493928a1c8cb3d5fc7b5dffddc1889d474197d9f30d0403->leave($__internal_3c787505dbbf8d43c493928a1c8cb3d5fc7b5dffddc1889d474197d9f30d0403_prof);

    }

    public function getTemplateName()
    {
        return "AstuceBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  111 => 17,  107 => 16,  103 => 15,  98 => 13,  94 => 12,  90 => 11,  86 => 10,  81 => 8,  77 => 7,  73 => 6,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AstuceBundle::layout.html.twig\" %}

{% block title %}Accueil{% endblock %}
{% block body %}
  <h2>{{ astuce1.nomAstuce }}</h2>
    <img src=\"{{ astuce1.imgAstuce }}\">
    <p>{{ astuce1.sousDescription }}</p>
    <a href=\"/detailsastuce/{{astuce1.id}}\"><button>Voir les informations liées à l'astuce</button></a>

  <h2>{{ astuce2.nomAstuce }}</h2>
    <img src=\"{{ astuce2.imgAstuce }}\">
    <p>{{ astuce2.sousDescription }}</p>
    <a href=\"/detailsastuce/{{astuce2.id}}\"><button>Voir les informations liées à l'astuce</button></a>

    <h2>{{ astuce3.nomAstuce }}</h2>
      <img src=\"{{ astuce3.imgAstuce }}\">
      <p>{{ astuce3.sousDescription }}</p>
      <a href=\"/detailsastuce/{{astuce3.id}}\"><button>Voir les informations liées à l'astuce</button></a>
{% endblock %}
", "AstuceBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/src/AstuceBundle/Resources/views/Default/accueil.html.twig");
    }
}
