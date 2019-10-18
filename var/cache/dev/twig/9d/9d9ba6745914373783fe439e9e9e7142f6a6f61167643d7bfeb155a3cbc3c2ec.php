<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ce0d9aeb7e1e0405b8664f173e136f6cc5d068935f89dda401a5eb97240c7224 extends Twig_Template
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
        $__internal_7d28caeb4108623af172c98496c4766fd186aa1a1a9aa633946cd59aae86e33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d28caeb4108623af172c98496c4766fd186aa1a1a9aa633946cd59aae86e33f->enter($__internal_7d28caeb4108623af172c98496c4766fd186aa1a1a9aa633946cd59aae86e33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6b7a77c680e128122b7ab16d42c4275694544e4720ce2d3efe5bc9fcc5b6c37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7a77c680e128122b7ab16d42c4275694544e4720ce2d3efe5bc9fcc5b6c37b->enter($__internal_6b7a77c680e128122b7ab16d42c4275694544e4720ce2d3efe5bc9fcc5b6c37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d28caeb4108623af172c98496c4766fd186aa1a1a9aa633946cd59aae86e33f->leave($__internal_7d28caeb4108623af172c98496c4766fd186aa1a1a9aa633946cd59aae86e33f_prof);

        
        $__internal_6b7a77c680e128122b7ab16d42c4275694544e4720ce2d3efe5bc9fcc5b6c37b->leave($__internal_6b7a77c680e128122b7ab16d42c4275694544e4720ce2d3efe5bc9fcc5b6c37b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3f153d00e6546a49f263d44422e2107bce2e27f597d6015b3852f9cceccbcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f153d00e6546a49f263d44422e2107bce2e27f597d6015b3852f9cceccbcd6->enter($__internal_e3f153d00e6546a49f263d44422e2107bce2e27f597d6015b3852f9cceccbcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a73adfbf38e49255d47498b7659e903b4317ac5926484e1722b934bf52ff6bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73adfbf38e49255d47498b7659e903b4317ac5926484e1722b934bf52ff6bbe->enter($__internal_a73adfbf38e49255d47498b7659e903b4317ac5926484e1722b934bf52ff6bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a73adfbf38e49255d47498b7659e903b4317ac5926484e1722b934bf52ff6bbe->leave($__internal_a73adfbf38e49255d47498b7659e903b4317ac5926484e1722b934bf52ff6bbe_prof);

        
        $__internal_e3f153d00e6546a49f263d44422e2107bce2e27f597d6015b3852f9cceccbcd6->leave($__internal_e3f153d00e6546a49f263d44422e2107bce2e27f597d6015b3852f9cceccbcd6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\SiteOne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
