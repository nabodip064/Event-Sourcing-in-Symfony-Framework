<?php

/* default/read */
class __TwigTemplate_9b171ea1feddc614e793797b893d488f240eda34d9323ccfbd320ebd5f647a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/read", 1);
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
        $__internal_4de3c57177ddbaa472b12b16add60591bc250cccd4cfd10e05921ea5fb544f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3c57177ddbaa472b12b16add60591bc250cccd4cfd10e05921ea5fb544f5f->enter($__internal_4de3c57177ddbaa472b12b16add60591bc250cccd4cfd10e05921ea5fb544f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/read"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de3c57177ddbaa472b12b16add60591bc250cccd4cfd10e05921ea5fb544f5f->leave($__internal_4de3c57177ddbaa472b12b16add60591bc250cccd4cfd10e05921ea5fb544f5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4037de966d30b22cd44d70e153f1e50401e6be740521cb9e5e3fe401a924a6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4037de966d30b22cd44d70e153f1e50401e6be740521cb9e5e3fe401a924a6dd->enter($__internal_4037de966d30b22cd44d70e153f1e50401e6be740521cb9e5e3fe401a924a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/events/read\" method=\"post\">
        Enter User Id:<br>
        <input type=\"text\" name=\"userIdInput\"><br><br>
        <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-primary\">
    </form>
";
        
        $__internal_4037de966d30b22cd44d70e153f1e50401e6be740521cb9e5e3fe401a924a6dd->leave($__internal_4037de966d30b22cd44d70e153f1e50401e6be740521cb9e5e3fe401a924a6dd_prof);

    }

    public function getTemplateName()
    {
        return "default/read";
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
    <form action=\"/events/read\" method=\"post\">
        Enter User Id:<br>
        <input type=\"text\" name=\"userIdInput\"><br><br>
        <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-primary\">
    </form>
{% endblock %}", "default/read", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/read");
    }
}
