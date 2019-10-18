<?php

/* RLSLAMBundle:Candidat:listeRepo.html.twig */
class __TwigTemplate_c28be861a898f8f50e85b07d669d7f8f2d1f7a3a4a3b0119fa303f267ffd63d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cecd5379bb2ff19226f5764612dee9c0f5aec069418ec9afc24dd2a5730f9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cecd5379bb2ff19226f5764612dee9c0f5aec069418ec9afc24dd2a5730f9ad->enter($__internal_1cecd5379bb2ff19226f5764612dee9c0f5aec069418ec9afc24dd2a5730f9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RLSLAMBundle:Candidat:listeRepo.html.twig"));

        $__internal_8622efc7558ce84770a778dd1a5f7a47592369b692f224ab7596131aa69aad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8622efc7558ce84770a778dd1a5f7a47592369b692f224ab7596131aa69aad56->enter($__internal_8622efc7558ce84770a778dd1a5f7a47592369b692f224ab7596131aa69aad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RLSLAMBundle:Candidat:listeRepo.html.twig"));

        // line 2
        echo "
<table border=\"2\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "        <tr>
            <td> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "specialite", array()), "libelle", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "prenom", array()), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</table>
    
";
        
        $__internal_1cecd5379bb2ff19226f5764612dee9c0f5aec069418ec9afc24dd2a5730f9ad->leave($__internal_1cecd5379bb2ff19226f5764612dee9c0f5aec069418ec9afc24dd2a5730f9ad_prof);

        
        $__internal_8622efc7558ce84770a778dd1a5f7a47592369b692f224ab7596131aa69aad56->leave($__internal_8622efc7558ce84770a778dd1a5f7a47592369b692f224ab7596131aa69aad56_prof);

    }

    public function getTemplateName()
    {
        return "RLSLAMBundle:Candidat:listeRepo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  44 => 8,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}

<table border=\"2\">
    {% for value in result %}
        <tr>
            <td> {{ value.specialite.libelle }} </td>
            <td> {{ value.nom }} </td>
            <td> {{ value.prenom }} </td>
        </tr>
    {% endfor %}
</table>
    
", "RLSLAMBundle:Candidat:listeRepo.html.twig", "C:\\wamp64\\www\\SiteOne\\src\\RL\\SLAMBundle/Resources/views/Candidat/listeRepo.html.twig");
    }
}
