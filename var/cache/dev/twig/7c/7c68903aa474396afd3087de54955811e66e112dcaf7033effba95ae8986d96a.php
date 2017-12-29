<?php

/* success/allEvents */
class __TwigTemplate_08120a499b6df42627b57301fd5569b5194fee08f0941797bb0b20517846ef31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "success/allEvents", 1);
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
        $__internal_bad128c6408d1354c21df4cee7412bfcbe8173f2ca2c19f2f32a7ee45ebfa72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad128c6408d1354c21df4cee7412bfcbe8173f2ca2c19f2f32a7ee45ebfa72f->enter($__internal_bad128c6408d1354c21df4cee7412bfcbe8173f2ca2c19f2f32a7ee45ebfa72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "success/allEvents"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad128c6408d1354c21df4cee7412bfcbe8173f2ca2c19f2f32a7ee45ebfa72f->leave($__internal_bad128c6408d1354c21df4cee7412bfcbe8173f2ca2c19f2f32a7ee45ebfa72f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5f048246141118fea87dff88f68ce68af8fe9ee29e167ccbbb890b7764ef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5f048246141118fea87dff88f68ce68af8fe9ee29e167ccbbb890b7764ef41->enter($__internal_5c5f048246141118fea87dff88f68ce68af8fe9ee29e167ccbbb890b7764ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table>
        <thead>
            <th>Event</th>
            <th>Version</th>
        </thead>
        <tbody>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["event"] ?? $this->getContext($context, "event")));
        foreach ($context['_seq'] as $context["_key"] => $context["evnt"]) {
            // line 11
            echo "                <tr>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["evnt"], "events", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["evnt"], "version", array()), "html", null, true);
            echo "</td>
                </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evnt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<br>
        </tbody>
    </table><br>
    <a href=\"/events\" >Go to events</a><br>
    <br>
    <a href=\"/\" >Go to Index</a>

";
        
        $__internal_5c5f048246141118fea87dff88f68ce68af8fe9ee29e167ccbbb890b7764ef41->leave($__internal_5c5f048246141118fea87dff88f68ce68af8fe9ee29e167ccbbb890b7764ef41_prof);

    }

    public function getTemplateName()
    {
        return "success/allEvents";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  59 => 13,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <table>
        <thead>
            <th>Event</th>
            <th>Version</th>
        </thead>
        <tbody>
            {% for evnt in event %}
                <tr>
                    <td>{{ evnt.events }}</td>
                    <td>{{ evnt.version }}</td>
                </tr>
    {% endfor %}<br>
        </tbody>
    </table><br>
    <a href=\"/events\" >Go to events</a><br>
    <br>
    <a href=\"/\" >Go to Index</a>

{% endblock %}
", "success/allEvents", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/success/allEvents");
    }
}
