<?php

/* default/events */
class __TwigTemplate_3063afa2f30e643c36b477c72ac60b0208a249460b5f6d7e7e8b048463a6a53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/events", 1);
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
        $__internal_2db72cdd9b1672360c36dbb5885e47c86edd53f2416478d8b2c249a5ceb67847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db72cdd9b1672360c36dbb5885e47c86edd53f2416478d8b2c249a5ceb67847->enter($__internal_2db72cdd9b1672360c36dbb5885e47c86edd53f2416478d8b2c249a5ceb67847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db72cdd9b1672360c36dbb5885e47c86edd53f2416478d8b2c249a5ceb67847->leave($__internal_2db72cdd9b1672360c36dbb5885e47c86edd53f2416478d8b2c249a5ceb67847_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a54f70c4faf110bfcf10d9cc758ea6f75a679bf6b72044ad764667053f58cb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54f70c4faf110bfcf10d9cc758ea6f75a679bf6b72044ad764667053f58cb54->enter($__internal_a54f70c4faf110bfcf10d9cc758ea6f75a679bf6b72044ad764667053f58cb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    i am print d

";
        
        $__internal_a54f70c4faf110bfcf10d9cc758ea6f75a679bf6b72044ad764667053f58cb54->leave($__internal_a54f70c4faf110bfcf10d9cc758ea6f75a679bf6b72044ad764667053f58cb54_prof);

    }

    public function getTemplateName()
    {
        return "default/events";
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
    i am print d

{% endblock %}
", "default/events", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/events");
    }
}
