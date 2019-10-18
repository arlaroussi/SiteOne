<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0bcc446d049375f531e6866f7cb4cc0fe486b30a0316e413836cb23594835f35 extends Twig_Template
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
        $__internal_bb521f3f98080e23d41949b3e6b7e5757c08f70c6ca51eb85143b92092560187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb521f3f98080e23d41949b3e6b7e5757c08f70c6ca51eb85143b92092560187->enter($__internal_bb521f3f98080e23d41949b3e6b7e5757c08f70c6ca51eb85143b92092560187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_756cde84e4b20bcb8392e4e8fc157b71933eb6aad5fadc67a48c9607dfefc3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756cde84e4b20bcb8392e4e8fc157b71933eb6aad5fadc67a48c9607dfefc3a9->enter($__internal_756cde84e4b20bcb8392e4e8fc157b71933eb6aad5fadc67a48c9607dfefc3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb521f3f98080e23d41949b3e6b7e5757c08f70c6ca51eb85143b92092560187->leave($__internal_bb521f3f98080e23d41949b3e6b7e5757c08f70c6ca51eb85143b92092560187_prof);

        
        $__internal_756cde84e4b20bcb8392e4e8fc157b71933eb6aad5fadc67a48c9607dfefc3a9->leave($__internal_756cde84e4b20bcb8392e4e8fc157b71933eb6aad5fadc67a48c9607dfefc3a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88e267559be0c81e7e3fc9d85c61b0c003d9eb68f3b753ca87e320e5be1bc1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e267559be0c81e7e3fc9d85c61b0c003d9eb68f3b753ca87e320e5be1bc1ac->enter($__internal_88e267559be0c81e7e3fc9d85c61b0c003d9eb68f3b753ca87e320e5be1bc1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff9bf6639da6cef18f57486a9c03b9de26372b393a2e2b4423db1d2ddd3ddd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9bf6639da6cef18f57486a9c03b9de26372b393a2e2b4423db1d2ddd3ddd8a->enter($__internal_ff9bf6639da6cef18f57486a9c03b9de26372b393a2e2b4423db1d2ddd3ddd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff9bf6639da6cef18f57486a9c03b9de26372b393a2e2b4423db1d2ddd3ddd8a->leave($__internal_ff9bf6639da6cef18f57486a9c03b9de26372b393a2e2b4423db1d2ddd3ddd8a_prof);

        
        $__internal_88e267559be0c81e7e3fc9d85c61b0c003d9eb68f3b753ca87e320e5be1bc1ac->leave($__internal_88e267559be0c81e7e3fc9d85c61b0c003d9eb68f3b753ca87e320e5be1bc1ac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_08864ea249ac73341aa386cdc0bfe0aaa9c51eb8fef2011558f4471d71af35c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08864ea249ac73341aa386cdc0bfe0aaa9c51eb8fef2011558f4471d71af35c7->enter($__internal_08864ea249ac73341aa386cdc0bfe0aaa9c51eb8fef2011558f4471d71af35c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a9c03c52d7e6675864964303b4f6f8eaa7f2e7c5b73cfde2edc2f1082a50a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9c03c52d7e6675864964303b4f6f8eaa7f2e7c5b73cfde2edc2f1082a50a35->enter($__internal_3a9c03c52d7e6675864964303b4f6f8eaa7f2e7c5b73cfde2edc2f1082a50a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a9c03c52d7e6675864964303b4f6f8eaa7f2e7c5b73cfde2edc2f1082a50a35->leave($__internal_3a9c03c52d7e6675864964303b4f6f8eaa7f2e7c5b73cfde2edc2f1082a50a35_prof);

        
        $__internal_08864ea249ac73341aa386cdc0bfe0aaa9c51eb8fef2011558f4471d71af35c7->leave($__internal_08864ea249ac73341aa386cdc0bfe0aaa9c51eb8fef2011558f4471d71af35c7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e1b6a51489bb45c1dc58ae90bfe3caf1bf5de8da5343dfdc73c44a03b313cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1b6a51489bb45c1dc58ae90bfe3caf1bf5de8da5343dfdc73c44a03b313cff->enter($__internal_6e1b6a51489bb45c1dc58ae90bfe3caf1bf5de8da5343dfdc73c44a03b313cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a99265c977308eb6ddd0ce173ed4321fe749b29e637966ec6f5bf0a98acffc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a99265c977308eb6ddd0ce173ed4321fe749b29e637966ec6f5bf0a98acffc4->enter($__internal_7a99265c977308eb6ddd0ce173ed4321fe749b29e637966ec6f5bf0a98acffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7a99265c977308eb6ddd0ce173ed4321fe749b29e637966ec6f5bf0a98acffc4->leave($__internal_7a99265c977308eb6ddd0ce173ed4321fe749b29e637966ec6f5bf0a98acffc4_prof);

        
        $__internal_6e1b6a51489bb45c1dc58ae90bfe3caf1bf5de8da5343dfdc73c44a03b313cff->leave($__internal_6e1b6a51489bb45c1dc58ae90bfe3caf1bf5de8da5343dfdc73c44a03b313cff_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\SiteOne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
