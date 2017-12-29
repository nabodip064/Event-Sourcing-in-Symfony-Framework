<?php

/* default/changePassword */
class __TwigTemplate_f64fc243720d59fe41b975ceec8c586a108a82fd195227529ea1af8fb14b8f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/changePassword", 1);
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
        $__internal_d8058013bc62d20cc243db2aa6f494201898b7120142b5c77217df03f12f3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8058013bc62d20cc243db2aa6f494201898b7120142b5c77217df03f12f3ac0->enter($__internal_d8058013bc62d20cc243db2aa6f494201898b7120142b5c77217df03f12f3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/changePassword"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8058013bc62d20cc243db2aa6f494201898b7120142b5c77217df03f12f3ac0->leave($__internal_d8058013bc62d20cc243db2aa6f494201898b7120142b5c77217df03f12f3ac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fd4730a330cfcabb59c7530c7bb8a9223d2aa99416f14aca463c04ac7f613a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd4730a330cfcabb59c7530c7bb8a9223d2aa99416f14aca463c04ac7f613a3->enter($__internal_4fd4730a330cfcabb59c7530c7bb8a9223d2aa99416f14aca463c04ac7f613a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/events/changePassword\" method=\"post\">
        Enter user id:<br>
        <input type=\"text\" name=\"userIdInput\"><br>
        Enter password:<br>
        <input type=\"password\" name=\"changedPassword\"><br><br>
        <input type=\"submit\" value=\"Channge\" name=\"changePassword\" class=\"btn btn-danger\">
    </form>
";
        
        $__internal_4fd4730a330cfcabb59c7530c7bb8a9223d2aa99416f14aca463c04ac7f613a3->leave($__internal_4fd4730a330cfcabb59c7530c7bb8a9223d2aa99416f14aca463c04ac7f613a3_prof);

    }

    public function getTemplateName()
    {
        return "default/changePassword";
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
    <form action=\"/events/changePassword\" method=\"post\">
        Enter user id:<br>
        <input type=\"text\" name=\"userIdInput\"><br>
        Enter password:<br>
        <input type=\"password\" name=\"changedPassword\"><br><br>
        <input type=\"submit\" value=\"Channge\" name=\"changePassword\" class=\"btn btn-danger\">
    </form>
{% endblock %}", "default/changePassword", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/changePassword");
    }
}
