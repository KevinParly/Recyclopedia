<?php

/* AstuceBundle:Default:details.html.twig */
class __TwigTemplate_91aa1e303cb11c638b41a7e877788bf03d1bb22ac6351a75ae5934968a89fa4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AstuceBundle::layout.html.twig", "AstuceBundle:Default:details.html.twig", 1);
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
        $__internal_087d6211cd15057f45c156453c5d78c919806664416f6b5d76ce9b8fe05d678a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087d6211cd15057f45c156453c5d78c919806664416f6b5d76ce9b8fe05d678a->enter($__internal_087d6211cd15057f45c156453c5d78c919806664416f6b5d76ce9b8fe05d678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle:Default:details.html.twig"));

        $__internal_5d01627c08bb49746f5f682dfcf091e09b173393da959884702c28dc84d696d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d01627c08bb49746f5f682dfcf091e09b173393da959884702c28dc84d696d5->enter($__internal_5d01627c08bb49746f5f682dfcf091e09b173393da959884702c28dc84d696d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087d6211cd15057f45c156453c5d78c919806664416f6b5d76ce9b8fe05d678a->leave($__internal_087d6211cd15057f45c156453c5d78c919806664416f6b5d76ce9b8fe05d678a_prof);

        
        $__internal_5d01627c08bb49746f5f682dfcf091e09b173393da959884702c28dc84d696d5->leave($__internal_5d01627c08bb49746f5f682dfcf091e09b173393da959884702c28dc84d696d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e6d8aa0f5edc17ac08d3cfdf1da794021643d24a95d88e5fdb7d8cea10e017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e6d8aa0f5edc17ac08d3cfdf1da794021643d24a95d88e5fdb7d8cea10e017->enter($__internal_e3e6d8aa0f5edc17ac08d3cfdf1da794021643d24a95d88e5fdb7d8cea10e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9647c7a286504cd42981f3200840384083dbdcc23189f98a6ea27427d58a8443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9647c7a286504cd42981f3200840384083dbdcc23189f98a6ea27427d58a8443->enter($__internal_9647c7a286504cd42981f3200840384083dbdcc23189f98a6ea27427d58a8443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_9647c7a286504cd42981f3200840384083dbdcc23189f98a6ea27427d58a8443->leave($__internal_9647c7a286504cd42981f3200840384083dbdcc23189f98a6ea27427d58a8443_prof);

        
        $__internal_e3e6d8aa0f5edc17ac08d3cfdf1da794021643d24a95d88e5fdb7d8cea10e017->leave($__internal_e3e6d8aa0f5edc17ac08d3cfdf1da794021643d24a95d88e5fdb7d8cea10e017_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ef317b2f3d03ec7a136545dd9d6b36d05001562f43dfa8bd5ff47caf50f3fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef317b2f3d03ec7a136545dd9d6b36d05001562f43dfa8bd5ff47caf50f3fcb->enter($__internal_4ef317b2f3d03ec7a136545dd9d6b36d05001562f43dfa8bd5ff47caf50f3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d4a02aeaea8bd223466692f454f6a1a8f9fe610043bec1e35617a4d6eb7f625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4a02aeaea8bd223466692f454f6a1a8f9fe610043bec1e35617a4d6eb7f625->enter($__internal_6d4a02aeaea8bd223466692f454f6a1a8f9fe610043bec1e35617a4d6eb7f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["astuce"]) || array_key_exists("astuce", $context) ? $context["astuce"] : (function () { throw new Twig_Error_Runtime('Variable "astuce" does not exist.', 5, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_6d4a02aeaea8bd223466692f454f6a1a8f9fe610043bec1e35617a4d6eb7f625->leave($__internal_6d4a02aeaea8bd223466692f454f6a1a8f9fe610043bec1e35617a4d6eb7f625_prof);

        
        $__internal_4ef317b2f3d03ec7a136545dd9d6b36d05001562f43dfa8bd5ff47caf50f3fcb->leave($__internal_4ef317b2f3d03ec7a136545dd9d6b36d05001562f43dfa8bd5ff47caf50f3fcb_prof);

    }

    public function getTemplateName()
    {
        return "AstuceBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AstuceBundle::layout.html.twig\" %}

{% block title %}Accueil{% endblock %}
{% block body %}
  {{ astuce.id }}
{% endblock %}
", "AstuceBundle:Default:details.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/src/AstuceBundle/Resources/views/Default/details.html.twig");
    }
}
