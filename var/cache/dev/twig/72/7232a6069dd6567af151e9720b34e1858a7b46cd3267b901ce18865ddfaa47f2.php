<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_968f78ff5b73e2c41d5838d781dc5588c15d9be7ed6bd0b6b575f65d6c23e9b7 extends Twig_Template
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
        $__internal_0fe44a401533295950183e09331593b10d4420faaee38e30b4dc38d67a190be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe44a401533295950183e09331593b10d4420faaee38e30b4dc38d67a190be0->enter($__internal_0fe44a401533295950183e09331593b10d4420faaee38e30b4dc38d67a190be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_816ea968abe06cc5e5e96299fcbe8d7b2251825ddfaa66a785adbb0dc4a91696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816ea968abe06cc5e5e96299fcbe8d7b2251825ddfaa66a785adbb0dc4a91696->enter($__internal_816ea968abe06cc5e5e96299fcbe8d7b2251825ddfaa66a785adbb0dc4a91696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0fe44a401533295950183e09331593b10d4420faaee38e30b4dc38d67a190be0->leave($__internal_0fe44a401533295950183e09331593b10d4420faaee38e30b4dc38d67a190be0_prof);

        
        $__internal_816ea968abe06cc5e5e96299fcbe8d7b2251825ddfaa66a785adbb0dc4a91696->leave($__internal_816ea968abe06cc5e5e96299fcbe8d7b2251825ddfaa66a785adbb0dc4a91696_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d10057b36757098df64ebe030beed4046088e65e589014afabc36bad9a47418f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10057b36757098df64ebe030beed4046088e65e589014afabc36bad9a47418f->enter($__internal_d10057b36757098df64ebe030beed4046088e65e589014afabc36bad9a47418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bf042410aa1636f33f01c3fe3528ce9d483e1968c38027e008b5df4a3735cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf042410aa1636f33f01c3fe3528ce9d483e1968c38027e008b5df4a3735cb1->enter($__internal_4bf042410aa1636f33f01c3fe3528ce9d483e1968c38027e008b5df4a3735cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4bf042410aa1636f33f01c3fe3528ce9d483e1968c38027e008b5df4a3735cb1->leave($__internal_4bf042410aa1636f33f01c3fe3528ce9d483e1968c38027e008b5df4a3735cb1_prof);

        
        $__internal_d10057b36757098df64ebe030beed4046088e65e589014afabc36bad9a47418f->leave($__internal_d10057b36757098df64ebe030beed4046088e65e589014afabc36bad9a47418f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_72dec2d34050de251f71faed495758ca8b949c7ff05435c62c5e1c1c07a8f6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dec2d34050de251f71faed495758ca8b949c7ff05435c62c5e1c1c07a8f6a5->enter($__internal_72dec2d34050de251f71faed495758ca8b949c7ff05435c62c5e1c1c07a8f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d9f1153a444f56930f9a83a00eaf12c53e0d8bc3ae9aa0cadb38ce88005477f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9f1153a444f56930f9a83a00eaf12c53e0d8bc3ae9aa0cadb38ce88005477f->enter($__internal_5d9f1153a444f56930f9a83a00eaf12c53e0d8bc3ae9aa0cadb38ce88005477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5d9f1153a444f56930f9a83a00eaf12c53e0d8bc3ae9aa0cadb38ce88005477f->leave($__internal_5d9f1153a444f56930f9a83a00eaf12c53e0d8bc3ae9aa0cadb38ce88005477f_prof);

        
        $__internal_72dec2d34050de251f71faed495758ca8b949c7ff05435c62c5e1c1c07a8f6a5->leave($__internal_72dec2d34050de251f71faed495758ca8b949c7ff05435c62c5e1c1c07a8f6a5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_90658c7c80f8e1cb8ee787f708daa35ba3341623eb64b1f0db0453e1720f07d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90658c7c80f8e1cb8ee787f708daa35ba3341623eb64b1f0db0453e1720f07d4->enter($__internal_90658c7c80f8e1cb8ee787f708daa35ba3341623eb64b1f0db0453e1720f07d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a2b9825e7751a361baf92e76b5ca0aee18a7381f1c84edd48ec70bf7c9afa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b9825e7751a361baf92e76b5ca0aee18a7381f1c84edd48ec70bf7c9afa8c->enter($__internal_6a2b9825e7751a361baf92e76b5ca0aee18a7381f1c84edd48ec70bf7c9afa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a2b9825e7751a361baf92e76b5ca0aee18a7381f1c84edd48ec70bf7c9afa8c->leave($__internal_6a2b9825e7751a361baf92e76b5ca0aee18a7381f1c84edd48ec70bf7c9afa8c_prof);

        
        $__internal_90658c7c80f8e1cb8ee787f708daa35ba3341623eb64b1f0db0453e1720f07d4->leave($__internal_90658c7c80f8e1cb8ee787f708daa35ba3341623eb64b1f0db0453e1720f07d4_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\SiteOne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
