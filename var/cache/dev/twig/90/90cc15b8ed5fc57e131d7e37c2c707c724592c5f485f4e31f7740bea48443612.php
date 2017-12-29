<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_03c98ccba1dcb3cc77eee1e5fe493e69a7119958ed8bb18a8853d7e774e852fa extends Twig_Template
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
        $__internal_33d7bcbdd45e75189257e0242498cd60e6f389a33baf2aba3202b5f0ea84a8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d7bcbdd45e75189257e0242498cd60e6f389a33baf2aba3202b5f0ea84a8e2->enter($__internal_33d7bcbdd45e75189257e0242498cd60e6f389a33baf2aba3202b5f0ea84a8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d7bcbdd45e75189257e0242498cd60e6f389a33baf2aba3202b5f0ea84a8e2->leave($__internal_33d7bcbdd45e75189257e0242498cd60e6f389a33baf2aba3202b5f0ea84a8e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a074fbf049a8497c6c04e3e2fe639e6e6de681766172a55e46e85dcebd4ad9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a074fbf049a8497c6c04e3e2fe639e6e6de681766172a55e46e85dcebd4ad9a->enter($__internal_3a074fbf049a8497c6c04e3e2fe639e6e6de681766172a55e46e85dcebd4ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a074fbf049a8497c6c04e3e2fe639e6e6de681766172a55e46e85dcebd4ad9a->leave($__internal_3a074fbf049a8497c6c04e3e2fe639e6e6de681766172a55e46e85dcebd4ad9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a560efd1ceecd4197089f979f5be539cab23e44c988316692ef10381034f30bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a560efd1ceecd4197089f979f5be539cab23e44c988316692ef10381034f30bd->enter($__internal_a560efd1ceecd4197089f979f5be539cab23e44c988316692ef10381034f30bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a560efd1ceecd4197089f979f5be539cab23e44c988316692ef10381034f30bd->leave($__internal_a560efd1ceecd4197089f979f5be539cab23e44c988316692ef10381034f30bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b8305f616de69f1b6d2eeb3b4d1a00b4dc9cb6202af6be03ecca601af79990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b8305f616de69f1b6d2eeb3b4d1a00b4dc9cb6202af6be03ecca601af79990->enter($__internal_70b8305f616de69f1b6d2eeb3b4d1a00b4dc9cb6202af6be03ecca601af79990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70b8305f616de69f1b6d2eeb3b4d1a00b4dc9cb6202af6be03ecca601af79990->leave($__internal_70b8305f616de69f1b6d2eeb3b4d1a00b4dc9cb6202af6be03ecca601af79990_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/max/Nabodip/TestProject/EventSourcingProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
