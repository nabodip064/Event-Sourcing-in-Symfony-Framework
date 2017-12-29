<?php

/* default/add */
class __TwigTemplate_51e33428d0c90ffa98d592ecfcf865051ea40c55892830c3776624c48a422a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/add", 1);
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
        $__internal_dd18592f8e1dc32ce2c4eb1d292b72e5a64bb59719dca649eea770aefbc432b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd18592f8e1dc32ce2c4eb1d292b72e5a64bb59719dca649eea770aefbc432b2->enter($__internal_dd18592f8e1dc32ce2c4eb1d292b72e5a64bb59719dca649eea770aefbc432b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd18592f8e1dc32ce2c4eb1d292b72e5a64bb59719dca649eea770aefbc432b2->leave($__internal_dd18592f8e1dc32ce2c4eb1d292b72e5a64bb59719dca649eea770aefbc432b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71411e77dd2bcda3998c84d81c0f32abca8bf3fbb2e7731d7ba3d2de331e8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71411e77dd2bcda3998c84d81c0f32abca8bf3fbb2e7731d7ba3d2de331e8def->enter($__internal_71411e77dd2bcda3998c84d81c0f32abca8bf3fbb2e7731d7ba3d2de331e8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/addUser\" method=\"post\">
        <input type=\"submit\" value=\"Add new User\" name=\"addUser\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/changePassword\" method=\"post\">
        <input type=\"submit\" value=\"Change Passord\" name=\"changePassword\" class=\"btn btn-primary\"><br><br>
    </form>
";
        
        $__internal_71411e77dd2bcda3998c84d81c0f32abca8bf3fbb2e7731d7ba3d2de331e8def->leave($__internal_71411e77dd2bcda3998c84d81c0f32abca8bf3fbb2e7731d7ba3d2de331e8def_prof);

    }

    public function getTemplateName()
    {
        return "default/add";
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
    <form action=\"/addUser\" method=\"post\">
        <input type=\"submit\" value=\"Add new User\" name=\"addUser\" class=\"btn btn-primary\"><br><br>
    </form>

    <form action=\"/changePassword\" method=\"post\">
        <input type=\"submit\" value=\"Change Passord\" name=\"changePassword\" class=\"btn btn-primary\"><br><br>
    </form>
{% endblock %}
", "default/add", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/add");
    }
}
