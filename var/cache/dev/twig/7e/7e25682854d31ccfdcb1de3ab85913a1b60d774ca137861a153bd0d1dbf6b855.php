<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c6668c269d9a6b5b072abbb0516a069fa93b0f2c9cf673db3079943c2b7a1f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45f75ac96018aed87f6c6083c47338c57966a7e4601f8c83049988f9596f67ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f75ac96018aed87f6c6083c47338c57966a7e4601f8c83049988f9596f67ed->enter($__internal_45f75ac96018aed87f6c6083c47338c57966a7e4601f8c83049988f9596f67ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f75ac96018aed87f6c6083c47338c57966a7e4601f8c83049988f9596f67ed->leave($__internal_45f75ac96018aed87f6c6083c47338c57966a7e4601f8c83049988f9596f67ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3d98cd86100827511cadd5bf89c82f92b7f57717a80e9a7227cdef730d4c2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d98cd86100827511cadd5bf89c82f92b7f57717a80e9a7227cdef730d4c2ed->enter($__internal_d3d98cd86100827511cadd5bf89c82f92b7f57717a80e9a7227cdef730d4c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3d98cd86100827511cadd5bf89c82f92b7f57717a80e9a7227cdef730d4c2ed->leave($__internal_d3d98cd86100827511cadd5bf89c82f92b7f57717a80e9a7227cdef730d4c2ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc33cb2f498fd39f357f5404d974abd054a5b68a69afbad9e431f97137a2bee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc33cb2f498fd39f357f5404d974abd054a5b68a69afbad9e431f97137a2bee5->enter($__internal_fc33cb2f498fd39f357f5404d974abd054a5b68a69afbad9e431f97137a2bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc33cb2f498fd39f357f5404d974abd054a5b68a69afbad9e431f97137a2bee5->leave($__internal_fc33cb2f498fd39f357f5404d974abd054a5b68a69afbad9e431f97137a2bee5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a09034193e64d2ce409f8c3d4b448fef038badf8b790b795e387194f7e59018c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09034193e64d2ce409f8c3d4b448fef038badf8b790b795e387194f7e59018c->enter($__internal_a09034193e64d2ce409f8c3d4b448fef038badf8b790b795e387194f7e59018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a09034193e64d2ce409f8c3d4b448fef038badf8b790b795e387194f7e59018c->leave($__internal_a09034193e64d2ce409f8c3d4b448fef038badf8b790b795e387194f7e59018c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/max/Nabodip/TestProject/EventSourcingProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
