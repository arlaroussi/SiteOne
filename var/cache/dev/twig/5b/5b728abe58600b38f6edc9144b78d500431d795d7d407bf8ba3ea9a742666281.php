<?php

/* RLSLAMBundle:Candidat:listeRepobis.html.twig */
class __TwigTemplate_33b86c3a49efa87520457d43de1ee3f551642aca7877301b46b97328bf09f150 extends Twig_Template
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
        $__internal_e24e4f4502f1d6aad2003f489cf3528bf40974ef76811679adfb613dfb58e24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24e4f4502f1d6aad2003f489cf3528bf40974ef76811679adfb613dfb58e24d->enter($__internal_e24e4f4502f1d6aad2003f489cf3528bf40974ef76811679adfb613dfb58e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RLSLAMBundle:Candidat:listeRepobis.html.twig"));

        $__internal_5273a33ded29908b8e49929d3c898fd1540175ba8ae4ce7d2d76ab03da5c8e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5273a33ded29908b8e49929d3c898fd1540175ba8ae4ce7d2d76ab03da5c8e57->enter($__internal_5273a33ded29908b8e49929d3c898fd1540175ba8ae4ce7d2d76ab03da5c8e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RLSLAMBundle:Candidat:listeRepobis.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "prenom", array()), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</table>
    
";
        
        $__internal_e24e4f4502f1d6aad2003f489cf3528bf40974ef76811679adfb613dfb58e24d->leave($__internal_e24e4f4502f1d6aad2003f489cf3528bf40974ef76811679adfb613dfb58e24d_prof);

        
        $__internal_5273a33ded29908b8e49929d3c898fd1540175ba8ae4ce7d2d76ab03da5c8e57->leave($__internal_5273a33ded29908b8e49929d3c898fd1540175ba8ae4ce7d2d76ab03da5c8e57_prof);

    }

    public function getTemplateName()
    {
        return "RLSLAMBundle:Candidat:listeRepobis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  25 => 2,);
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
            <td> {{ value.nom }} </td>
            <td> {{ value.prenom }} </td>
        </tr>
    {% endfor %}
</table>
    
", "RLSLAMBundle:Candidat:listeRepobis.html.twig", "C:\\wamp64\\www\\SiteOne\\src\\RL\\SLAMBundle/Resources/views/Candidat/listeRepobis.html.twig");
    }
}
