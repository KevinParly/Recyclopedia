<?php

/* AstuceBundle::layout.html.twig */
class __TwigTemplate_581a158d3501b630b7f430dd6be2f395a9adf56b165fc4b6550108748bb864bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e05ced9c746b6ed6cabe9b5f33a1e3aeced1ddcd01402c19e92a7d02de7a501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e05ced9c746b6ed6cabe9b5f33a1e3aeced1ddcd01402c19e92a7d02de7a501->enter($__internal_5e05ced9c746b6ed6cabe9b5f33a1e3aeced1ddcd01402c19e92a7d02de7a501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle::layout.html.twig"));

        $__internal_7407838661f63ff6d458b2f9f37960193e888a4f6a0db321cccc2d0143837791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7407838661f63ff6d458b2f9f37960193e888a4f6a0db321cccc2d0143837791->enter($__internal_7407838661f63ff6d458b2f9f37960193e888a4f6a0db321cccc2d0143837791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AstuceBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layout.css"), "html", null, true);
        echo "\"/>
  </head>
  <body>
    <header>
      <nav id=\"navPrincipale\">
        <ul>
            <a id=\"lienMenu\" href=\"\"><li>Accueil</li></a>
            <a id=\"lienMenu\" href=\"\"><li>Rechercher un déchet</li></a>
            <a id=\"lienMenu\" href=\"\"><li>Astuces</li></a>
            <a id=\"lienMenu\" href=\"\"><li>News</li></a>
        </ul>
      </nav>
    </header>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "    <footer>
      CU ET COPYRIGHT
    </footer>
  </body>
</html>
";
        
        $__internal_5e05ced9c746b6ed6cabe9b5f33a1e3aeced1ddcd01402c19e92a7d02de7a501->leave($__internal_5e05ced9c746b6ed6cabe9b5f33a1e3aeced1ddcd01402c19e92a7d02de7a501_prof);

        
        $__internal_7407838661f63ff6d458b2f9f37960193e888a4f6a0db321cccc2d0143837791->leave($__internal_7407838661f63ff6d458b2f9f37960193e888a4f6a0db321cccc2d0143837791_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_435c07c29a14287133b342a8fefa07a1d5f544fec85f369abd224fef1cc8b3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435c07c29a14287133b342a8fefa07a1d5f544fec85f369abd224fef1cc8b3f7->enter($__internal_435c07c29a14287133b342a8fefa07a1d5f544fec85f369abd224fef1cc8b3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b55acf8198239232dafcee1ebb04fddc2da1b75f6b9dd06e2b75b4ecefa9a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b55acf8198239232dafcee1ebb04fddc2da1b75f6b9dd06e2b75b4ecefa9a84->enter($__internal_0b55acf8198239232dafcee1ebb04fddc2da1b75f6b9dd06e2b75b4ecefa9a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0b55acf8198239232dafcee1ebb04fddc2da1b75f6b9dd06e2b75b4ecefa9a84->leave($__internal_0b55acf8198239232dafcee1ebb04fddc2da1b75f6b9dd06e2b75b4ecefa9a84_prof);

        
        $__internal_435c07c29a14287133b342a8fefa07a1d5f544fec85f369abd224fef1cc8b3f7->leave($__internal_435c07c29a14287133b342a8fefa07a1d5f544fec85f369abd224fef1cc8b3f7_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c769c29a5b01d44e8cc4c469ba606a959ce82ab5fe00377cdd76b61cd70ddd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c769c29a5b01d44e8cc4c469ba606a959ce82ab5fe00377cdd76b61cd70ddd3->enter($__internal_9c769c29a5b01d44e8cc4c469ba606a959ce82ab5fe00377cdd76b61cd70ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d818aa404579e0b889c40cb2f06d8cedab7ff2fadc317a8f7244d2afa18e2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d818aa404579e0b889c40cb2f06d8cedab7ff2fadc317a8f7244d2afa18e2bf->enter($__internal_9d818aa404579e0b889c40cb2f06d8cedab7ff2fadc317a8f7244d2afa18e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    ";
        
        $__internal_9d818aa404579e0b889c40cb2f06d8cedab7ff2fadc317a8f7244d2afa18e2bf->leave($__internal_9d818aa404579e0b889c40cb2f06d8cedab7ff2fadc317a8f7244d2afa18e2bf_prof);

        
        $__internal_9c769c29a5b01d44e8cc4c469ba606a959ce82ab5fe00377cdd76b61cd70ddd3->leave($__internal_9c769c29a5b01d44e8cc4c469ba606a959ce82ab5fe00377cdd76b61cd70ddd3_prof);

    }

    public function getTemplateName()
    {
        return "AstuceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  87 => 19,  70 => 5,  55 => 21,  53 => 19,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\"  href=\"{{ asset(\"layout.css\") }}\"/>
  </head>
  <body>
    <header>
      <nav id=\"navPrincipale\">
        <ul>
            <a id=\"lienMenu\" href=\"\"><li>Accueil</li></a>
            <a id=\"lienMenu\" href=\"\"><li>Rechercher un déchet</li></a>
            <a id=\"lienMenu\" href=\"\"><li>Astuces</li></a>
            <a id=\"lienMenu\" href=\"\"><li>News</li></a>
        </ul>
      </nav>
    </header>
    {% block body %}
    {% endblock %}
    <footer>
      CU ET COPYRIGHT
    </footer>
  </body>
</html>
", "AstuceBundle::layout.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/src/AstuceBundle/Resources/views/layout.html.twig");
    }
}
