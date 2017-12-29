<?php

/* base.html.twig */
class __TwigTemplate_8ca32b5e60d30a51078d57b14f6461549165e609440bce37570794496a2207cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51e7b3aae1f909b0aa31a45b525f69a0dbf4adf0b9b87d4493ab59301b2fa793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e7b3aae1f909b0aa31a45b525f69a0dbf4adf0b9b87d4493ab59301b2fa793->enter($__internal_51e7b3aae1f909b0aa31a45b525f69a0dbf4adf0b9b87d4493ab59301b2fa793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a href=\"/\" area=\"\" class=\"navbar-brand\">Event Sourcing Project</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/events\" >Events</a></li>
                <li><a href=\"/read\" >Read</a></li>
                <li><a href=\"/create\" >Write</a></li>
                <li><a href=\"/delete\" >Deletion</a></li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container body-content\">
    <br><br><br><br>
        <div>
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
    <hr />
    <footer>
        <p>&copy; ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo " - My Symfony Application</p>
    </footer>
</div>
<!--
    @Scripts.Render(\"~/bundles/jquery\")
    @Scripts.Render(\"~/bundles/bootstrap\")
    @RenderSection(\"scripts\", required: false) -->
</body>
</html>";
        
        $__internal_51e7b3aae1f909b0aa31a45b525f69a0dbf4adf0b9b87d4493ab59301b2fa793->leave($__internal_51e7b3aae1f909b0aa31a45b525f69a0dbf4adf0b9b87d4493ab59301b2fa793_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c89e5b6c6d68208d4bf805c3fc29db1947c2b994ec403de7a60098e845c3e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c89e5b6c6d68208d4bf805c3fc29db1947c2b994ec403de7a60098e845c3e1f->enter($__internal_7c89e5b6c6d68208d4bf805c3fc29db1947c2b994ec403de7a60098e845c3e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7c89e5b6c6d68208d4bf805c3fc29db1947c2b994ec403de7a60098e845c3e1f->leave($__internal_7c89e5b6c6d68208d4bf805c3fc29db1947c2b994ec403de7a60098e845c3e1f_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_075d1bcbe0bf2f7503dc3ecaa4201d6fe4a4edb63cbb303c2f00a86648ba53f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075d1bcbe0bf2f7503dc3ecaa4201d6fe4a4edb63cbb303c2f00a86648ba53f5->enter($__internal_075d1bcbe0bf2f7503dc3ecaa4201d6fe4a4edb63cbb303c2f00a86648ba53f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_075d1bcbe0bf2f7503dc3ecaa4201d6fe4a4edb63cbb303c2f00a86648ba53f5->leave($__internal_075d1bcbe0bf2f7503dc3ecaa4201d6fe4a4edb63cbb303c2f00a86648ba53f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  88 => 10,  72 => 41,  67 => 38,  65 => 37,  35 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <title>{% block title %}{% endblock %}</title>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a href=\"/\" area=\"\" class=\"navbar-brand\">Event Sourcing Project</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/events\" >Events</a></li>
                <li><a href=\"/read\" >Read</a></li>
                <li><a href=\"/create\" >Write</a></li>
                <li><a href=\"/delete\" >Deletion</a></li>
            </ul>
        </div>
    </div>
</div>

<div class=\"container body-content\">
    <br><br><br><br>
        <div>
            {% block body %}{% endblock %}
        </div>
    <hr />
    <footer>
        <p>&copy; {{ date().timestamp }} - My Symfony Application</p>
    </footer>
</div>
<!--
    @Scripts.Render(\"~/bundles/jquery\")
    @Scripts.Render(\"~/bundles/bootstrap\")
    @RenderSection(\"scripts\", required: false) -->
</body>
</html>", "base.html.twig", "/home/max/Nabodip/TestProject/EventSourcingProject/app/Resources/views/base.html.twig");
    }
}
