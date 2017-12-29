<?php

/* default/addUser */
class __TwigTemplate_85801123dc146be4ba045e80124e9e9b9c30d7d20ac0f2ab96328f7943fcaa5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/addUser", 1);
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
        $__internal_b8c9b32d727229f89f19be17b5f7d96733d4fa6249cefa78014bb254a2fdfc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c9b32d727229f89f19be17b5f7d96733d4fa6249cefa78014bb254a2fdfc13->enter($__internal_b8c9b32d727229f89f19be17b5f7d96733d4fa6249cefa78014bb254a2fdfc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addUser"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c9b32d727229f89f19be17b5f7d96733d4fa6249cefa78014bb254a2fdfc13->leave($__internal_b8c9b32d727229f89f19be17b5f7d96733d4fa6249cefa78014bb254a2fdfc13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e5d03e2598403a84fb624918e93b1986dd36a13b973e68beafa4662b10e222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e5d03e2598403a84fb624918e93b1986dd36a13b973e68beafa4662b10e222->enter($__internal_d9e5d03e2598403a84fb624918e93b1986dd36a13b973e68beafa4662b10e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/events/addUser\" method=\"post\">
        Enter name:<br>
        <input type=\"text\" name=\"userNameInput\"><br>

        Enter gender:<br>
        <input type=\"text\" name=\"userGenderInput\"><br>

        Enter userName:<br>
        <input type=\"text\" name=\"userUserNameInput\"><br>

        Enter password:<br>
        <input type=\"password\" name=\"userPasswordInput\"><br><br>

        <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-primary\">
    </form>
";
        
        $__internal_d9e5d03e2598403a84fb624918e93b1986dd36a13b973e68beafa4662b10e222->leave($__internal_d9e5d03e2598403a84fb624918e93b1986dd36a13b973e68beafa4662b10e222_prof);

    }

    public function getTemplateName()
    {
        return "default/addUser";
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
    <form action=\"/events/addUser\" method=\"post\">
        Enter name:<br>
        <input type=\"text\" name=\"userNameInput\"><br>

        Enter gender:<br>
        <input type=\"text\" name=\"userGenderInput\"><br>

        Enter userName:<br>
        <input type=\"text\" name=\"userUserNameInput\"><br>

        Enter password:<br>
        <input type=\"password\" name=\"userPasswordInput\"><br><br>

        <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-primary\">
    </form>
{% endblock %}", "default/addUser", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/addUser");
    }
}
