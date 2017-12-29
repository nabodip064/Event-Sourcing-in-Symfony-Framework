<?php

/* default/index.html.twig */
class __TwigTemplate_da54ff907e421a96e22bfe98f513a77bea25abea7d504808c17ca2e1d7390b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21603daef75fa462dd7a2deae002a70a65a25e46ab6391bfad1780149514339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21603daef75fa462dd7a2deae002a70a65a25e46ab6391bfad1780149514339d->enter($__internal_21603daef75fa462dd7a2deae002a70a65a25e46ab6391bfad1780149514339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21603daef75fa462dd7a2deae002a70a65a25e46ab6391bfad1780149514339d->leave($__internal_21603daef75fa462dd7a2deae002a70a65a25e46ab6391bfad1780149514339d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_365d890930c62f4da2e707b50373ad56fb318cc94b59120c38f50612f2d61ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365d890930c62f4da2e707b50373ad56fb318cc94b59120c38f50612f2d61ea6->enter($__internal_365d890930c62f4da2e707b50373ad56fb318cc94b59120c38f50612f2d61ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <form action=\"/events\" method=\"post\">
        <input type=\"submit\" value=\"Events\" name=\"events\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/read\" method=\"post\">
        <input type=\"submit\" value=\"Read\" name=\"read\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/create\" method=\"post\">
        <input type=\"submit\" value=\"Write\" name=\"write\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/delete\" method=\"post\">
        <input type=\"submit\" value=\"Deletion\" name=\"delete\" class=\"btn btn-primary\">
    </form>

";
        
        $__internal_365d890930c62f4da2e707b50373ad56fb318cc94b59120c38f50612f2d61ea6->leave($__internal_365d890930c62f4da2e707b50373ad56fb318cc94b59120c38f50612f2d61ea6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <form action=\"/events\" method=\"post\">
        <input type=\"submit\" value=\"Events\" name=\"events\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/read\" method=\"post\">
        <input type=\"submit\" value=\"Read\" name=\"read\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/create\" method=\"post\">
        <input type=\"submit\" value=\"Write\" name=\"write\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/delete\" method=\"post\">
        <input type=\"submit\" value=\"Deletion\" name=\"delete\" class=\"btn btn-primary\">
    </form>

{% endblock %}
", "default/index.html.twig", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/index.html.twig");
    }
}
