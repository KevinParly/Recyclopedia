<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f1cb06df085e75ea078b45097074fe8fbef79d52d64b0ebdbaf2a30df785585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1cb06df085e75ea078b45097074fe8fbef79d52d64b0ebdbaf2a30df785585->enter($__internal_8f1cb06df085e75ea078b45097074fe8fbef79d52d64b0ebdbaf2a30df785585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9746924d50377cbc052c640703f29f43c3258c883d389b85d7b80ff4c96ccc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9746924d50377cbc052c640703f29f43c3258c883d389b85d7b80ff4c96ccc3c->enter($__internal_9746924d50377cbc052c640703f29f43c3258c883d389b85d7b80ff4c96ccc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8f1cb06df085e75ea078b45097074fe8fbef79d52d64b0ebdbaf2a30df785585->leave($__internal_8f1cb06df085e75ea078b45097074fe8fbef79d52d64b0ebdbaf2a30df785585_prof);

        
        $__internal_9746924d50377cbc052c640703f29f43c3258c883d389b85d7b80ff4c96ccc3c->leave($__internal_9746924d50377cbc052c640703f29f43c3258c883d389b85d7b80ff4c96ccc3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee19235f4cd68febc5b038fec52e74134c44cbc2f8dc826863332f1d514612d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee19235f4cd68febc5b038fec52e74134c44cbc2f8dc826863332f1d514612d->enter($__internal_1ee19235f4cd68febc5b038fec52e74134c44cbc2f8dc826863332f1d514612d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb34271505da2396c90a15dad565f90f55cda7e89245eb5fd3fada844370c5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb34271505da2396c90a15dad565f90f55cda7e89245eb5fd3fada844370c5d5->enter($__internal_fb34271505da2396c90a15dad565f90f55cda7e89245eb5fd3fada844370c5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fb34271505da2396c90a15dad565f90f55cda7e89245eb5fd3fada844370c5d5->leave($__internal_fb34271505da2396c90a15dad565f90f55cda7e89245eb5fd3fada844370c5d5_prof);

        
        $__internal_1ee19235f4cd68febc5b038fec52e74134c44cbc2f8dc826863332f1d514612d->leave($__internal_1ee19235f4cd68febc5b038fec52e74134c44cbc2f8dc826863332f1d514612d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1037e8331e27c47fb71a922d2366d05ef75426614c4ccbee9a06d6f0ed7519b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1037e8331e27c47fb71a922d2366d05ef75426614c4ccbee9a06d6f0ed7519b->enter($__internal_b1037e8331e27c47fb71a922d2366d05ef75426614c4ccbee9a06d6f0ed7519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74fe496b209e40cef3a6fd094b9b21cc47607af0d732ad5907a4f54e7576692b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fe496b209e40cef3a6fd094b9b21cc47607af0d732ad5907a4f54e7576692b->enter($__internal_74fe496b209e40cef3a6fd094b9b21cc47607af0d732ad5907a4f54e7576692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_74fe496b209e40cef3a6fd094b9b21cc47607af0d732ad5907a4f54e7576692b->leave($__internal_74fe496b209e40cef3a6fd094b9b21cc47607af0d732ad5907a4f54e7576692b_prof);

        
        $__internal_b1037e8331e27c47fb71a922d2366d05ef75426614c4ccbee9a06d6f0ed7519b->leave($__internal_b1037e8331e27c47fb71a922d2366d05ef75426614c4ccbee9a06d6f0ed7519b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1aaa0117827da2cd75cfb4acd610ceb277fa1b4a15edd2000d6915beefc7ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1aaa0117827da2cd75cfb4acd610ceb277fa1b4a15edd2000d6915beefc7ff8->enter($__internal_c1aaa0117827da2cd75cfb4acd610ceb277fa1b4a15edd2000d6915beefc7ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d6c05a040645d48b3e6adcf2a4b9cf74ab9ed6c6638105cfa680fd4560a8a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6c05a040645d48b3e6adcf2a4b9cf74ab9ed6c6638105cfa680fd4560a8a07->enter($__internal_8d6c05a040645d48b3e6adcf2a4b9cf74ab9ed6c6638105cfa680fd4560a8a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d6c05a040645d48b3e6adcf2a4b9cf74ab9ed6c6638105cfa680fd4560a8a07->leave($__internal_8d6c05a040645d48b3e6adcf2a4b9cf74ab9ed6c6638105cfa680fd4560a8a07_prof);

        
        $__internal_c1aaa0117827da2cd75cfb4acd610ceb277fa1b4a15edd2000d6915beefc7ff8->leave($__internal_c1aaa0117827da2cd75cfb4acd610ceb277fa1b4a15edd2000d6915beefc7ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
