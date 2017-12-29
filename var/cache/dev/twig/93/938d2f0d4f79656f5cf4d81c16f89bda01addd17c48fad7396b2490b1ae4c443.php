<?php

/* success/eventSuccess */
class __TwigTemplate_42118a787094682eac46ba2886ae3d62f8a46b50edc079076241556e357a7e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "success/eventSuccess", 1);
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
        $__internal_f3ba39eec20f5039e38eb6e79ecb201093ada63884956d2caf2bf2dc66f9e512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ba39eec20f5039e38eb6e79ecb201093ada63884956d2caf2bf2dc66f9e512->enter($__internal_f3ba39eec20f5039e38eb6e79ecb201093ada63884956d2caf2bf2dc66f9e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "success/eventSuccess"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ba39eec20f5039e38eb6e79ecb201093ada63884956d2caf2bf2dc66f9e512->leave($__internal_f3ba39eec20f5039e38eb6e79ecb201093ada63884956d2caf2bf2dc66f9e512_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b06139cb6b25b219089b3ded50713eb6015a5b636ae6747ed1616dec324d429e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06139cb6b25b219089b3ded50713eb6015a5b636ae6747ed1616dec324d429e->enter($__internal_b06139cb6b25b219089b3ded50713eb6015a5b636ae6747ed1616dec324d429e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/\" method=\"post\">
        <h2>Data sucessfully inserted...</h2>
        <input type=\"submit\" value=\"Go back to index\" class=\"btn btn-primary\"><br><br>
    </form>
";
        
        $__internal_b06139cb6b25b219089b3ded50713eb6015a5b636ae6747ed1616dec324d429e->leave($__internal_b06139cb6b25b219089b3ded50713eb6015a5b636ae6747ed1616dec324d429e_prof);

    }

    public function getTemplateName()
    {
        return "success/eventSuccess";
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
    <form action=\"/\" method=\"post\">
        <h2>Data sucessfully inserted...</h2>
        <input type=\"submit\" value=\"Go back to index\" class=\"btn btn-primary\"><br><br>
    </form>
{% endblock %}
", "success/eventSuccess", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/success/eventSuccess");
    }
}
