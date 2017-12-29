<?php

/* success/showData */
class __TwigTemplate_bdcf5af748f495a1e262763b84235a545e2dcbaa09bc26066bf29757997f1d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "success/showData", 1);
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
        $__internal_a9b909ced87b2b407e4b43aaf5dcba6c6029b0b8ec93b05d18db92689f7c675d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b909ced87b2b407e4b43aaf5dcba6c6029b0b8ec93b05d18db92689f7c675d->enter($__internal_a9b909ced87b2b407e4b43aaf5dcba6c6029b0b8ec93b05d18db92689f7c675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "success/showData"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b909ced87b2b407e4b43aaf5dcba6c6029b0b8ec93b05d18db92689f7c675d->leave($__internal_a9b909ced87b2b407e4b43aaf5dcba6c6029b0b8ec93b05d18db92689f7c675d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f908a80ef76161dbef48e57aaa6b90da0f8a9d732e846932dee3984c49a6a625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f908a80ef76161dbef48e57aaa6b90da0f8a9d732e846932dee3984c49a6a625->enter($__internal_f908a80ef76161dbef48e57aaa6b90da0f8a9d732e846932dee3984c49a6a625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, $context["it"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <form action=\"/\" method=\"post\">
        <input type=\"submit\" value=\"Go back to index\" class=\"btn btn-primary\"><br><br>
    </form>
";
        
        $__internal_f908a80ef76161dbef48e57aaa6b90da0f8a9d732e846932dee3984c49a6a625->leave($__internal_f908a80ef76161dbef48e57aaa6b90da0f8a9d732e846932dee3984c49a6a625_prof);

    }

    public function getTemplateName()
    {
        return "success/showData";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 8,  50 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% for item in result %}
        {% for it in item %}
            {{ it }}
            {% endfor %}
    {% endfor %}
    <form action=\"/\" method=\"post\">
        <input type=\"submit\" value=\"Go back to index\" class=\"btn btn-primary\"><br><br>
    </form>
{% endblock %}
", "success/showData", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/success/showData");
    }
}
