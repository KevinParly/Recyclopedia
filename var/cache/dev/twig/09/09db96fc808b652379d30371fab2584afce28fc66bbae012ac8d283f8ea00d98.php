<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97e52f588acf7aff1e07128cbd00f9a1e503ab83ee42a2b3f63deb17598740db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e52f588acf7aff1e07128cbd00f9a1e503ab83ee42a2b3f63deb17598740db->enter($__internal_97e52f588acf7aff1e07128cbd00f9a1e503ab83ee42a2b3f63deb17598740db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4e8ea42cdcb8963c3c3534f08dce8c0009cae4a20ad0a45f32c2ba5adb8c3350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8ea42cdcb8963c3c3534f08dce8c0009cae4a20ad0a45f32c2ba5adb8c3350->enter($__internal_4e8ea42cdcb8963c3c3534f08dce8c0009cae4a20ad0a45f32c2ba5adb8c3350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e52f588acf7aff1e07128cbd00f9a1e503ab83ee42a2b3f63deb17598740db->leave($__internal_97e52f588acf7aff1e07128cbd00f9a1e503ab83ee42a2b3f63deb17598740db_prof);

        
        $__internal_4e8ea42cdcb8963c3c3534f08dce8c0009cae4a20ad0a45f32c2ba5adb8c3350->leave($__internal_4e8ea42cdcb8963c3c3534f08dce8c0009cae4a20ad0a45f32c2ba5adb8c3350_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52691af97bb429760efbcd85a1d5b1ec76e053ad8e65f5936b6527150d10800c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52691af97bb429760efbcd85a1d5b1ec76e053ad8e65f5936b6527150d10800c->enter($__internal_52691af97bb429760efbcd85a1d5b1ec76e053ad8e65f5936b6527150d10800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c403ad8d0e1c64466abe1e08d34df443b503724cd022b1c5439d493b0049b016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c403ad8d0e1c64466abe1e08d34df443b503724cd022b1c5439d493b0049b016->enter($__internal_c403ad8d0e1c64466abe1e08d34df443b503724cd022b1c5439d493b0049b016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c403ad8d0e1c64466abe1e08d34df443b503724cd022b1c5439d493b0049b016->leave($__internal_c403ad8d0e1c64466abe1e08d34df443b503724cd022b1c5439d493b0049b016_prof);

        
        $__internal_52691af97bb429760efbcd85a1d5b1ec76e053ad8e65f5936b6527150d10800c->leave($__internal_52691af97bb429760efbcd85a1d5b1ec76e053ad8e65f5936b6527150d10800c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8914ae19a26f745d5a3112e08b345a7d0e811bc846a8d5999dedbc5c4e8881b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8914ae19a26f745d5a3112e08b345a7d0e811bc846a8d5999dedbc5c4e8881b->enter($__internal_a8914ae19a26f745d5a3112e08b345a7d0e811bc846a8d5999dedbc5c4e8881b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9f9bf68b575e2f80c2196d28ccc26e03fecdff425d484f320c25d427282a558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f9bf68b575e2f80c2196d28ccc26e03fecdff425d484f320c25d427282a558->enter($__internal_e9f9bf68b575e2f80c2196d28ccc26e03fecdff425d484f320c25d427282a558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e9f9bf68b575e2f80c2196d28ccc26e03fecdff425d484f320c25d427282a558->leave($__internal_e9f9bf68b575e2f80c2196d28ccc26e03fecdff425d484f320c25d427282a558_prof);

        
        $__internal_a8914ae19a26f745d5a3112e08b345a7d0e811bc846a8d5999dedbc5c4e8881b->leave($__internal_a8914ae19a26f745d5a3112e08b345a7d0e811bc846a8d5999dedbc5c4e8881b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_03fab98880d00df5df08afccefea24777099cb2be2fba2c21d4661a6e2fbde16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fab98880d00df5df08afccefea24777099cb2be2fba2c21d4661a6e2fbde16->enter($__internal_03fab98880d00df5df08afccefea24777099cb2be2fba2c21d4661a6e2fbde16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb54ff5f3dd6e1db8319345b0d189bcad42a7f9febe66dab1705f5d5725a7390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb54ff5f3dd6e1db8319345b0d189bcad42a7f9febe66dab1705f5d5725a7390->enter($__internal_bb54ff5f3dd6e1db8319345b0d189bcad42a7f9febe66dab1705f5d5725a7390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bb54ff5f3dd6e1db8319345b0d189bcad42a7f9febe66dab1705f5d5725a7390->leave($__internal_bb54ff5f3dd6e1db8319345b0d189bcad42a7f9febe66dab1705f5d5725a7390_prof);

        
        $__internal_03fab98880d00df5df08afccefea24777099cb2be2fba2c21d4661a6e2fbde16->leave($__internal_03fab98880d00df5df08afccefea24777099cb2be2fba2c21d4661a6e2fbde16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kevin/Dropbox/IUT/ID1-3RecycloPedia/recyclopedia/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
