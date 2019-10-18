<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_38ef05331b26579d3574578b0b80159b2b14309f64e78e393109f25bf9466b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a3737398f331160a6370014b2c3c2d5679ae60dab19ce45ec011f6c70505baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3737398f331160a6370014b2c3c2d5679ae60dab19ce45ec011f6c70505baa8->enter($__internal_a3737398f331160a6370014b2c3c2d5679ae60dab19ce45ec011f6c70505baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bdc451460e805330a73533c481a0eb452da8365c105161fc07b15b5be4ad4f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc451460e805330a73533c481a0eb452da8365c105161fc07b15b5be4ad4f62->enter($__internal_bdc451460e805330a73533c481a0eb452da8365c105161fc07b15b5be4ad4f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3737398f331160a6370014b2c3c2d5679ae60dab19ce45ec011f6c70505baa8->leave($__internal_a3737398f331160a6370014b2c3c2d5679ae60dab19ce45ec011f6c70505baa8_prof);

        
        $__internal_bdc451460e805330a73533c481a0eb452da8365c105161fc07b15b5be4ad4f62->leave($__internal_bdc451460e805330a73533c481a0eb452da8365c105161fc07b15b5be4ad4f62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_848d0ef45013b5a36690e9450cb00296e16a9fe0b2c89cf33329c21b539588f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848d0ef45013b5a36690e9450cb00296e16a9fe0b2c89cf33329c21b539588f2->enter($__internal_848d0ef45013b5a36690e9450cb00296e16a9fe0b2c89cf33329c21b539588f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ee4b3819e346929a637a1d9941d94bbd06e360e621122daeb023bd699e54552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee4b3819e346929a637a1d9941d94bbd06e360e621122daeb023bd699e54552->enter($__internal_5ee4b3819e346929a637a1d9941d94bbd06e360e621122daeb023bd699e54552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5ee4b3819e346929a637a1d9941d94bbd06e360e621122daeb023bd699e54552->leave($__internal_5ee4b3819e346929a637a1d9941d94bbd06e360e621122daeb023bd699e54552_prof);

        
        $__internal_848d0ef45013b5a36690e9450cb00296e16a9fe0b2c89cf33329c21b539588f2->leave($__internal_848d0ef45013b5a36690e9450cb00296e16a9fe0b2c89cf33329c21b539588f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80a8e0b70f876b4f1450ca4ee1e245f7d764c95ba67e18ee3df17244f8c68bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a8e0b70f876b4f1450ca4ee1e245f7d764c95ba67e18ee3df17244f8c68bbf->enter($__internal_80a8e0b70f876b4f1450ca4ee1e245f7d764c95ba67e18ee3df17244f8c68bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34434f04278e3b2098f4022d61dcae2cc435eea39779989dc4cd19e1ae15015c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34434f04278e3b2098f4022d61dcae2cc435eea39779989dc4cd19e1ae15015c->enter($__internal_34434f04278e3b2098f4022d61dcae2cc435eea39779989dc4cd19e1ae15015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_34434f04278e3b2098f4022d61dcae2cc435eea39779989dc4cd19e1ae15015c->leave($__internal_34434f04278e3b2098f4022d61dcae2cc435eea39779989dc4cd19e1ae15015c_prof);

        
        $__internal_80a8e0b70f876b4f1450ca4ee1e245f7d764c95ba67e18ee3df17244f8c68bbf->leave($__internal_80a8e0b70f876b4f1450ca4ee1e245f7d764c95ba67e18ee3df17244f8c68bbf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4602e1164665edce514d99b97e53082d4fba66d2b75465c1121af4d30c07f843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4602e1164665edce514d99b97e53082d4fba66d2b75465c1121af4d30c07f843->enter($__internal_4602e1164665edce514d99b97e53082d4fba66d2b75465c1121af4d30c07f843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58bc35b64c621691ce6de00126a3b6478eced67e57decb33b908c871fd38caa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bc35b64c621691ce6de00126a3b6478eced67e57decb33b908c871fd38caa2->enter($__internal_58bc35b64c621691ce6de00126a3b6478eced67e57decb33b908c871fd38caa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_58bc35b64c621691ce6de00126a3b6478eced67e57decb33b908c871fd38caa2->leave($__internal_58bc35b64c621691ce6de00126a3b6478eced67e57decb33b908c871fd38caa2_prof);

        
        $__internal_4602e1164665edce514d99b97e53082d4fba66d2b75465c1121af4d30c07f843->leave($__internal_4602e1164665edce514d99b97e53082d4fba66d2b75465c1121af4d30c07f843_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\SiteOne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
