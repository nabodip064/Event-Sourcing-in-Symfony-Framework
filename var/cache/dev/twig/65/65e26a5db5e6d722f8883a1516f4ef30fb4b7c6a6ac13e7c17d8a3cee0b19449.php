<?php

/* default/delete */
class __TwigTemplate_b8698b1f2983ad0e877c298d7f65da317e35389e92860fe284d094fe7767d768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/delete", 1);
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
        $__internal_cdc6503fc28d8aa91b5ff4e27dd61243417e59d940f691dd2050a21f7384643b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc6503fc28d8aa91b5ff4e27dd61243417e59d940f691dd2050a21f7384643b->enter($__internal_cdc6503fc28d8aa91b5ff4e27dd61243417e59d940f691dd2050a21f7384643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/delete"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc6503fc28d8aa91b5ff4e27dd61243417e59d940f691dd2050a21f7384643b->leave($__internal_cdc6503fc28d8aa91b5ff4e27dd61243417e59d940f691dd2050a21f7384643b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13544f437d293acd24cfaf907210b819705b3a2b4f685918de49093b112b59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13544f437d293acd24cfaf907210b819705b3a2b4f685918de49093b112b59e->enter($__internal_b13544f437d293acd24cfaf907210b819705b3a2b4f685918de49093b112b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/events/delete\" method=\"post\">
        Enter User Id:<br>
        <input type=\"text\" name=\"userIdInput\"><br><br>
        <input type=\"submit\" value=\"Delete\" name=\"submit\" class=\"btn btn-danger\">
    </form>
";
        
        $__internal_b13544f437d293acd24cfaf907210b819705b3a2b4f685918de49093b112b59e->leave($__internal_b13544f437d293acd24cfaf907210b819705b3a2b4f685918de49093b112b59e_prof);

    }

    public function getTemplateName()
    {
        return "default/delete";
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
    <form action=\"/events/delete\" method=\"post\">
        Enter User Id:<br>
        <input type=\"text\" name=\"userIdInput\"><br><br>
        <input type=\"submit\" value=\"Delete\" name=\"submit\" class=\"btn btn-danger\">
    </form>
{% endblock %}
", "default/delete", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/delete");
    }
}
