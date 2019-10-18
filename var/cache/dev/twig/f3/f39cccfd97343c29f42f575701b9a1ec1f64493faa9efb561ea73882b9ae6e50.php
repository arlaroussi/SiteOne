<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_788fd206e695f6f563d76f6fcc11a38d84949bb909a9cc07555db97f6da9b244 extends Twig_Template
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
        $__internal_ed077d7215a46e90d6c69b2bb6b8011986e3e984cc8111a4fd3e4fc5f4151206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed077d7215a46e90d6c69b2bb6b8011986e3e984cc8111a4fd3e4fc5f4151206->enter($__internal_ed077d7215a46e90d6c69b2bb6b8011986e3e984cc8111a4fd3e4fc5f4151206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6853773af74adbf772631abe8fa311d29cf5255449d89d7f10d791b3fb37324f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6853773af74adbf772631abe8fa311d29cf5255449d89d7f10d791b3fb37324f->enter($__internal_6853773af74adbf772631abe8fa311d29cf5255449d89d7f10d791b3fb37324f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed077d7215a46e90d6c69b2bb6b8011986e3e984cc8111a4fd3e4fc5f4151206->leave($__internal_ed077d7215a46e90d6c69b2bb6b8011986e3e984cc8111a4fd3e4fc5f4151206_prof);

        
        $__internal_6853773af74adbf772631abe8fa311d29cf5255449d89d7f10d791b3fb37324f->leave($__internal_6853773af74adbf772631abe8fa311d29cf5255449d89d7f10d791b3fb37324f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26bb842bfa2ad5c57c01714cb53c01d133be8ee72fd3257ee2eae98fd8b0917a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bb842bfa2ad5c57c01714cb53c01d133be8ee72fd3257ee2eae98fd8b0917a->enter($__internal_26bb842bfa2ad5c57c01714cb53c01d133be8ee72fd3257ee2eae98fd8b0917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58d9c9938e954d2576408b2b61fe6e389b70f63f55825a158a8b2a122764b253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d9c9938e954d2576408b2b61fe6e389b70f63f55825a158a8b2a122764b253->enter($__internal_58d9c9938e954d2576408b2b61fe6e389b70f63f55825a158a8b2a122764b253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58d9c9938e954d2576408b2b61fe6e389b70f63f55825a158a8b2a122764b253->leave($__internal_58d9c9938e954d2576408b2b61fe6e389b70f63f55825a158a8b2a122764b253_prof);

        
        $__internal_26bb842bfa2ad5c57c01714cb53c01d133be8ee72fd3257ee2eae98fd8b0917a->leave($__internal_26bb842bfa2ad5c57c01714cb53c01d133be8ee72fd3257ee2eae98fd8b0917a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_734af7cce9401135c6d916736c10591e44ee2836b897cbda5eba2c679f7d816c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734af7cce9401135c6d916736c10591e44ee2836b897cbda5eba2c679f7d816c->enter($__internal_734af7cce9401135c6d916736c10591e44ee2836b897cbda5eba2c679f7d816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66617ca371a866f56d9adf55ebb2144e279372e1888f9c6820d1dfa09d400c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66617ca371a866f56d9adf55ebb2144e279372e1888f9c6820d1dfa09d400c59->enter($__internal_66617ca371a866f56d9adf55ebb2144e279372e1888f9c6820d1dfa09d400c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66617ca371a866f56d9adf55ebb2144e279372e1888f9c6820d1dfa09d400c59->leave($__internal_66617ca371a866f56d9adf55ebb2144e279372e1888f9c6820d1dfa09d400c59_prof);

        
        $__internal_734af7cce9401135c6d916736c10591e44ee2836b897cbda5eba2c679f7d816c->leave($__internal_734af7cce9401135c6d916736c10591e44ee2836b897cbda5eba2c679f7d816c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9eac221856c5e792b7c135e9476c8327420811e34c9f8569138edd8c4018d73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eac221856c5e792b7c135e9476c8327420811e34c9f8569138edd8c4018d73a->enter($__internal_9eac221856c5e792b7c135e9476c8327420811e34c9f8569138edd8c4018d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7bcbcfaab9ec15d612c6c806e3492dc8cfc7a237c6f0d7d495e7cf9a76f503a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bcbcfaab9ec15d612c6c806e3492dc8cfc7a237c6f0d7d495e7cf9a76f503a->enter($__internal_b7bcbcfaab9ec15d612c6c806e3492dc8cfc7a237c6f0d7d495e7cf9a76f503a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7bcbcfaab9ec15d612c6c806e3492dc8cfc7a237c6f0d7d495e7cf9a76f503a->leave($__internal_b7bcbcfaab9ec15d612c6c806e3492dc8cfc7a237c6f0d7d495e7cf9a76f503a_prof);

        
        $__internal_9eac221856c5e792b7c135e9476c8327420811e34c9f8569138edd8c4018d73a->leave($__internal_9eac221856c5e792b7c135e9476c8327420811e34c9f8569138edd8c4018d73a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SiteOne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
