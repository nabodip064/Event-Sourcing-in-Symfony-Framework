<?php

/* default/events.html.twig */
class __TwigTemplate_e6f19cd2a4370ea6c7d00ddae8bc36622f055f73875e3bd1a2af4fb70cc7f22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/events.html.twig", 1);
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
        $__internal_47b7da55e9a4373bffee79ed1d7e065c1bdc2d8a8d845ef1b120af30e6ab7d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b7da55e9a4373bffee79ed1d7e065c1bdc2d8a8d845ef1b120af30e6ab7d01->enter($__internal_47b7da55e9a4373bffee79ed1d7e065c1bdc2d8a8d845ef1b120af30e6ab7d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b7da55e9a4373bffee79ed1d7e065c1bdc2d8a8d845ef1b120af30e6ab7d01->leave($__internal_47b7da55e9a4373bffee79ed1d7e065c1bdc2d8a8d845ef1b120af30e6ab7d01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bdbf634bb89873e296d299ae05483973e08c6cb7694c127017847a51f158c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bdbf634bb89873e296d299ae05483973e08c6cb7694c127017847a51f158c5->enter($__internal_95bdbf634bb89873e296d299ae05483973e08c6cb7694c127017847a51f158c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commands"] ?? $this->getContext($context, "commands")));
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["command"]);
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 7
                echo "            <a href=\"/commandDetails/";
                echo twig_escape_filter($this->env, $context["e"], "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $context["e"], "html", null, true);
                echo "</a><br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_95bdbf634bb89873e296d299ae05483973e08c6cb7694c127017847a51f158c5->leave($__internal_95bdbf634bb89873e296d299ae05483973e08c6cb7694c127017847a51f158c5_prof);

    }

    public function getTemplateName()
    {
        return "default/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  52 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    
    {% for command in commands %}
        {%  for e in command %}
            <a href=\"/commandDetails/{{ e }}\" >{{ e }}</a><br>
        {% endfor %}
    {% endfor %}
{% endblock %}
", "default/events.html.twig", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/default/events.html.twig");
    }
}
